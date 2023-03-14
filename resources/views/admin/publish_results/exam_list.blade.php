<?php

use App\Models\User;
use App\Models\Subject;
use App\Models\Gradebook;
use App\Models\Grade;
use App\Models\ElectiveSubject;
use Carbon\Carbon;
?>

<div class="att-report-banner d-flex justify-content-center justify-content-md-between align-items-center flex-wrap">
  <div class="att-report-summary order-1">
    <h4 class="title">{{ get_phrase('Publish Results') }}</h4>
    <p class="summary-item">{{ get_phrase('Class') }} : <span>{{ $class->name }}</span></p>
   
  </div>
  <div class="att-banner-img order-0 order-md-1">
    <img
      src="{{ asset('public/assets/images/attendance-report-banner.png') }}"
      alt=""
    />
  </div>
</div>



@if(count($exams) > 0)
<div class="mark_report_content" id="mark_report">
<form method="POST"  action="{{ route('admin.update.publish_results') }}">
@csrf
    <table class="table eTable table-bordered">
        <thead>
            <tr>
            <th scope="col">{{ get_phrase('S.N') }}</th>
                <th scope="col">{{ get_phrase('Exam') }}</th>
                <th scope="col">{{ get_phrase('Publish date') }}</th>
                <th scope="col">{{ get_phrase('Date Format on MarkSheet') }}</th>
               
            </tr>   
        </thead>
        <tbody>
        
            <input type="hidden" name="class_id" value="{{$class->id}}"></input> 
           
            @foreach($exams as $key=>$exam)
               
                <tr>
                    <input type="hidden" name = "exam[{{$key + 1}}][id]" value="{{$exam->id}}"/>
                    <td>{{$key + 1}}</td>
                    
                    <td>{{$exam->name}}</td>
                    <td>
                        @if($exam->publish_result->publish_date !== null)
                        <input type="date" name = "exam[{{$key + 1}}][publish_date]" value = "{{Carbon::parse($exam->publish_result->publish_date)->format('Y-m-d')}}" class="form-select" required autofocus style="font-size: 12px;" > 
                        @else
                        <input type="date" name = "exam[{{$key + 1}}][publish_date]" value="" class="form-select" required  style="font-size: 12px;" > 
                        @endif
                    </td>
                    <td> 
                    
                    <select name ="exam[{{$key + 1}}][publish_date_type]">
                        <option value="">- Select - </option>
                        @if($exam->publish_result->date_format_on_marksheet == 'AD')
                            <option value="AD" selected="selected"> AD </option>
                        @else
                            <option value="AD" > AD </option>
                        @endif
                        @if($exam->publish_result->date_format_on_marksheet == 'BS')
                            <option value="BS" selected="selected"> BS </option>
                        @else
                            <option value="BS" > BS </option>
                        @endif
                       
                        
                    </select></td>
                    
                
                </tr>
            @endforeach
        </tbody>
       
       
    </table>
    <button class="eBtn eBtn btn-secondary" type="submit" id = "bulk_update">{{ get_phrase('Save') }}</button>
    </form>
</div>
@else
<div class="empty_box center">
    <img class="mb-3" width="150px" src="{{ asset('public/assets/images/empty_box.png') }}" />
    <br>
    <span class="">{{ get_phrase('No data found') }}</span>
</div>
@endif
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script type="text/javascript">

  "use strict";

    function elective_update(student_id){
        var class_id = '{{ $class->id }}';
       
        var el = $("#student_"+student_id);
        
        var elective_subjects = {};
        $(el).find('.elective_subject').each(function(i, obj) {
            
            elective_subjects[$(obj).attr('data')] = $(obj).find('option:selected').attr('id');
        });
    
    
        $.ajax({
            type : 'GET',
            url : "{{ route('update.elective_subject') }}",
            data : {
                user_id : student_id, 
                class_id : class_id, 
                section_id : section_id, 
                elective: elective_subjects
                
            },
            success : function(response){
                toastr.success('{{ get_phrase('Value has been updated successfully') }}');
            }
        });
        
    }

  

</script>