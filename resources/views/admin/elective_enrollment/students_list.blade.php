<?php

use App\Models\User;
use App\Models\Subject;
use App\Models\Gradebook;
use App\Models\Grade;
use App\Models\ElectiveSubject;
?>

<div
  class="att-report-banner d-flex justify-content-center justify-content-md-between align-items-center flex-wrap"
>
  <div class="att-report-summary order-1">
    <h4 class="title">{{ get_phrase('Elective Enrollment') }}</h4>
    <p class="summary-item">{{ get_phrase('Class') }} : <span>{{ $page_data['class_name'] }}</span></p>
    <p class="summary-item">{{ get_phrase('Section') }} : <span>{{ $page_data['section_name'] }}</span></p>
    
    </p>
  </div>
  <div class="att-banner-img order-0 order-md-1">
    <img
      src="{{ asset('public/assets/images/attendance-report-banner.png') }}"
      alt=""
    />
  </div>
</div>

@if(count($enroll_students) > 0)
<div class="export position-relative">
  <button class="eBtn-3 dropdown-toggle float-end mb-4" type="button" id="defaultDropdown" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
    <span class="pr-10">
      <svg xmlns="http://www.w3.org/2000/svg" width="12.31" height="10.77" viewBox="0 0 10.771 12.31">
        <path id="arrow-right-from-bracket-solid" d="M3.847,1.539H2.308a.769.769,0,0,0-.769.769V8.463a.769.769,0,0,0,.769.769H3.847a.769.769,0,0,1,0,1.539H2.308A2.308,2.308,0,0,1,0,8.463V2.308A2.308,2.308,0,0,1,2.308,0H3.847a.769.769,0,1,1,0,1.539Zm8.237,4.39L9.007,9.007A.769.769,0,0,1,7.919,7.919L9.685,6.155H4.616a.769.769,0,0,1,0-1.539H9.685L7.92,2.852A.769.769,0,0,1,9.008,1.764l3.078,3.078A.77.77,0,0,1,12.084,5.929Z" transform="translate(0 12.31) rotate(-90)" fill="#00a3ff"></path>
      </svg>
    </span>
    {{ get_phrase('Export') }}
  </button>
  <ul class="dropdown-menu dropdown-menu-end eDropdown-menu-2">
    <li>
        <a class="dropdown-item" id="pdf" href="javascript:;" onclick="Export()">{{ get_phrase('PDF') }}</a>
    </li>
    <li>
        <a class="dropdown-item" id="print" href="javascript:;" onclick="printableDiv('mark_report')">{{ get_phrase('Print') }}</a>
    </li>
  </ul>
</div>
@endif


@if(count($enroll_students) > 0)
<div class="mark_report_content" id="mark_report">
<form method="POST"  action="{{ route('update.elective_subjectUpdateBulk') }}">
@csrf
    <table class="table eTable table-bordered">
        <thead>
            <tr>
                <th scope="col">Roll No.</th>
                <th scope="col">{{ get_phrase('Student name') }}</th>
                @foreach($page_data['elective_subjects'] as $key => $elective_subject)
                <th> Elective {{$key}}</th>
                @endforeach
                <th scope="col">{{ get_phrase('Action') }}</th>
            </tr>   
        </thead>
        <tbody>
        
            <input type="hidden" name="class_id" value="{{$page_data['class_id']}}"></input> 
            <input type="hidden" name="section_id" value="{{$page_data['section_id']}}"></input> 
            <input type="hidden" name="session_id" value="{{$page_data['session_id']}}"></input> 
            @foreach($enroll_students as $enroll_student)
                <?php
                    $student_details = User::find($enroll_student->user_id);
                    
                ?>
                <tr id="student_{{$enroll_student->user_id}}">
                
                    <td>{{ $enroll_student->roll_no }}</td>
                    <td>{{ $student_details->name }}</td>
                    @foreach($page_data['elective_subjects'] as $key => $elective_subject)
                    <td>
                    <?php
                        $electives = ElectiveSubject::where('user_id','=',$enroll_student->user_id)
                                    ->where('elective_group','=',$key)->first();
                    ?>
                    <input type="hidden" class="key" value="{{$key}}"/>
                    <select class="elective_subject" name= "elective[{{$enroll_student->user_id}}][{{$key}}]" data="{{$key}}" id = "elective_subject[{{$enroll_student->user_id}}][{{$key}}]" >

                        <option id="">Select </option>
                        @foreach($elective_subject as $k => $v)
                        
                        <?php if($electives !== null) {?>
                            @if($electives->subject_id == $k)
                                <option id="{{$k}}" value="{{$k}}" selected = "selected">{{$v}}</option>
                            @else
                                <option id="{{$k}}" value="{{$k}}" >{{$v}}</option>
                            @endif
                        <?php } else { ?>
                            <option id="{{$k}}" value="{{$k}}" >{{$v}}</option>
                        <?php } ?>
                        @endforeach
                    </select>
                    </td>
                    @endforeach
                    
                    
                    <td class="text-center">
                        <span class="btn btn-success btn-indv" onclick="elective_update('{{ $enroll_student->user_id }}')"><i class="bi bi-check2-circle"></i></span>
                    </td>
                
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
        
        var class_id = '{{ $page_data['class_id'] }}';
        var section_id = '{{ $page_data['section_id'] }}';
        var session_id = '{{ $page_data['session_id'] }}';
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

    function get_grade(exam_mark, id){
        let url = "{{ route('get.grade', ['exam_mark' => ":exam_mark"]) }}";
        url = url.replace(":exam_mark", exam_mark);
        $.ajax({
            url : url,
            success : function(response){
                // $('#grade-for-'+id).text(response);
                $('#grade-for-mark-'+id).text(response);

            }
        });
    }

    

    function Export() {
        html2canvas(document.getElementById('mark_report'), {
            onrendered: function(canvas) {
                var data = canvas.toDataURL();
                var docDefinition = {
                    content: [{
                        image: data,
                        width: 500
                    }]
                };
                pdfMake.createPdf(docDefinition).download("mark_report.pdf");
            }
        });
    }

    function printableDiv(printableAreaDivId) {
        var printContents = document.getElementById(printableAreaDivId).innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;

        window.print();

        document.body.innerHTML = originalContents;
    }

</script>