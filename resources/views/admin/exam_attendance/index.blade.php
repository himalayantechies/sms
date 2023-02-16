@extends('admin.navigation');

@section('content')
<div class="mainSection-title">
    <div class="row">
      <div class="col-12">
        <div
          class="d-flex justify-content-between align-items-center flex-wrap gr-15">
          <div class="d-flex flex-column">
            <h4>{{ get_phrase('Manage Exam Attendance') }}</h4>
            <ul class="d-flex align-items-center eBreadcrumb-2">
              <li><a href="#">{{ get_phrase('Home') }}</a></li>
              <li><a href="#">{{ get_phrase('Examination') }}</a></li>
              <li><a href="#">{{ get_phrase('Exam Attendance') }}</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
</div>

<div class="row">
    <div class="col-10 offset-md-1">
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
                    <div class="col-md-2">
                        <select name="section_id" id="section_id" class="form-select eForm-select eChoice-multiple-with-remove" required >
                            <option value="">{{ get_phrase('First select a class') }}</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <select class="form-select eForm-select eChoice-multiple-with-remove" id = "exam_id" name="exam_id">
                            <option value="">{{ get_phrase('First select a class') }}</option>
                      </select>
                    </div>
                    <div class="col-xl-2 mb-2">
                        <button type="button" class="eBtn eBtn btn-secondary form-control" onclick="examAttendance()">{{ get_phrase('Filter') }}</button>
                    </div>
                    <div class="card-body table-responsive exam_attendance_content">
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
    
    function classWiseSection(classId){
        let url = "{{ route('class_wise_sections', ['id' => ":classId"]) }}";
        url = url.replace(":classId", classId);
        $.ajax({
            url: url,
            success: function(response){
                $('#section_id').html(response);
                classWiseExam(classId);
            }
        });
    }

    function classWiseExam(classId){
        let url = "{{ route('class_wise_exams', ['class_id' => ":classId"]) }}";
        url = url.replace(":classId", classId);
        $.ajax({
            url: url,
            success: function(response){
                $('#exam_id').html(response);
            }
        });
    }


    function examAttendance(){
        var class_id    = $('#class_id').val();
        var section_id  = $('#section_id').val();
        var exam_id     = $('#exam_id').val();

        if(exam_id != "" &&  class_id != "" && section_id!= "" ){
            getExamAttendance();
        }else{
            toastr.error('{{ get_phrase('Please select all the fields') }}');
        }
    }

    function getExamAttendance(){
        var class_id    = $('#class_id').val();
        var section_id  = $('#section_id').val();
        var exam_id     = $('#exam_id').val();

        var url = "{{ route('admin.exam_attendance.list') }}";
        
        $.ajax({
            url : url,
            data : {class_id: class_id, section_id: section_id, exam_id: exam_id },
            success: function(response){
                $('.exam_attendance_content').html(response);
            },
            error: function(response){
                toastr.error(response.responseText);
            }
        })

    }


</script>