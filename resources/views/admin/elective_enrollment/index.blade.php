@extends('admin.navigation')
   
@section('content')
<div class="mainSection-title">
    <div class="row">
      <div class="col-12">
        <div
          class="d-flex justify-content-between align-items-center flex-wrap gr-15"
        >
          <div class="d-flex flex-column">
            <h4>{{ get_phrase('Elective Enrollment') }}</h4>
            <ul class="d-flex align-items-center eBreadcrumb-2">
              <li><a href="#">{{ get_phrase('Home') }}</a></li>
              <li><a href="#">{{ get_phrase('Examination') }}</a></li>
              
            </ul>
          </div>
        </div>
      </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="eSection-wrap">
             <div class="row">
                <div class="row justify-content-md-center">
                    <div class="col-md-2">
                        <select name="class_id" id="class_id" class="form-select eForm-select eChoice-multiple-with-remove" required onchange="classWiseSection(this.value)">
                            <option value="">{{ get_phrase('Select class') }}</option>
                            @foreach ($classes as $class)
                                <option value="{{ $class->id }}">{{ $class->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select name="section_id" id="section_id" class="form-select eForm-select eChoice-multiple-with-remove" required >
                            <option value="">{{ get_phrase('First select a class') }}</option>
                        </select>
                    </div>
                    

                    <div class="col-xl-2 mb-3">
                        <button type="button" class="eBtn eBtn btn-secondary form-control" onclick="filter_students()">{{ get_phrase('Filter') }}</button>
                    </div>

                    <div class="card-body table-responsive marks_content">
                        <div class="empty_box center">
                            <img class="mb-3" width="150px" src="{{ asset('public/assets/images/empty_box.png') }}" />
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<script type="text/javascript">

  "use strict";

    function classWiseSection(classId) {
        let url = "{{ route('class_wise_sections', ['id' => ":classId"]) }}";
        url = url.replace(":classId", classId);
        $.ajax({
            url: url,
            success: function(response){
                $('#section_id').html(response);
                
            }
        });
    }

    
    
    function filter_students(){
        
        var class_id = $('#class_id').val();
        var section_id = $('#section_id').val();
        
        if( class_id != "" && section_id!= "" ){
            getFilteredStudents();
        }else{
            toastr.error('{{ get_phrase('Please select all the fields') }}');
        }
    }

    var getFilteredStudents = function() {
        
        var class_id = $('#class_id').val();
        var section_id = $('#section_id').val();
        
        if( class_id != "" && section_id!= "" ){
            let url = "{{ route('admin.electiveEnrollment.list') }}";
            $.ajax({
                url: url,
                headers: {
                    'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                },
                data: { class_id : class_id, section_id : section_id },
                success: function(response){
                    $('.marks_content').html(response);
                }
            });
        }
    }

</script>