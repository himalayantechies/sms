<?php 

use App\Models\ExamCategory;

$category_details = ExamCategory::where('name', $exam->name)->first();

?>
@extends('admin.navigation')

@section('content')
<div class="mainSection-title">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center flex-wrap gr-15">
                    <div class="d-flex flex-column">
                        <h4>{{ get_phrase('Exam Marks Setup') }}</h4>
                        <ul class="d-flex align-items-center eBreadcrumb-2">
                            <li><a href="#">{{ get_phrase('Home') }}</a></li>
                            <li><a href="#">{{ get_phrase('Exam') }}</a></li>
                            <li><a href="#">{{ get_phrase('Offline Exam') }}</a></li>
                            <li><a href="#">{{ get_phrase('Exam Marks Setup') }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="eForm-layouts">
    <form method="POST" enctype="multipart/form-data" class="d-block ajaxForm" action="{{ route('admin.setup.offline_exam.save', ['id' => $exam->id]) }}">
        @csrf 
        <div class="form-row">
        <input type="text" class="form-control eForm-control"  name="exam_id" value = "{{$exam->id}}" hidden= "true">
        <input type="text" class="form-control eForm-control"  name="session_id" value = "{{$exam->session_id}}" hidden= "true">
        <input type="text" class="form-control eForm-control"  name="class_id" value = "{{$exam->class_id}}" hidden= "true">
           @foreach($subjects as $subject)
           @if(isset($exam_marks_setup[$subject->id]['id']))
           <input type="text" class="form-control eForm-control"  name="exam_marks_setup[{{$subject->id}}][marks_setup_id]" value = "{{$exam_marks_setup[$subject->id]['id']}}" hidden= "true">
           @else
           <input type="text" class="form-control eForm-control"  name="exam_marks_setup[{{$subject->id}}][marks_setup_id]" value = "0" hidden= "true">
           @endif
           <div class="row">
                <div class="col-md-2 fpb-7">
                    <label for="subject_id" class="eForm-label">{{ get_phrase('Subject') }}<span class="required">*</span></label>
                    <input type="text" class="form-control eForm-control"  name="exam_marks_setup[{{$subject->id}}][subject_id]" value = "{{$subject->id}}" hidden= "true">
                    <input type="text" class="form-control eForm-control"  value = "{{$subject->name}}" readOnly= "readOnly">
                </div>
                <div class="col-md-2">
                    <label for="Theory" class="eForm-label">{{ get_phrase('Theory') }}<span class="required">*</span></label>
                    <input type="text" class="form-control eForm-control"  name="exam_marks_setup[{{$subject->id}}][th_fm]" placeholder="Full Marks" value="<?php echo isset($exam_marks_setup[$subject->id]['th_fm'])?$exam_marks_setup[$subject->id]['th_fm']:0 ?>">
                    <input type="text" class="form-control eForm-control"  name="exam_marks_setup[{{$subject->id}}][th_pm]" placeholder="Pass Marks" value="<?php echo isset($exam_marks_setup[$subject->id]['th_pm'])?$exam_marks_setup[$subject->id]['th_pm']:0 ?>">
                    <input type="text" class="form-control eForm-control"  name="exam_marks_setup[{{$subject->id}}][th_ch]" placeholder="Credit Hours" value="<?php echo isset($exam_marks_setup[$subject->id]['th_ch'])?$exam_marks_setup[$subject->id]['th_ch']:0 ?>">
                </div>
                <div class="col-md-2 fpb-7">
                    <label for="Practical" class="eForm-label">{{ get_phrase('Practical') }}<span class="required">*</span></label>
                    <input type="text" class="form-control eForm-control"  name="exam_marks_setup[{{$subject->id}}][pr_fm]" placeholder="Full Marks" value="<?php echo isset($exam_marks_setup[$subject->id]['pr_fm'])?$exam_marks_setup[$subject->id]['pr_fm']:0 ?>">
                    <input type="text" class="form-control eForm-control"  name="exam_marks_setup[{{$subject->id}}][pr_pm]" placeholder="Pass Marks" value="<?php echo isset($exam_marks_setup[$subject->id]['pr_pm'])?$exam_marks_setup[$subject->id]['pr_pm']:0 ?>">
                    <input type="text" class="form-control eForm-control"  name="exam_marks_setup[{{$subject->id}}][pr_ch]" placeholder="Credit Hours" value="<?php echo isset($exam_marks_setup[$subject->id]['pr_ch'])?$exam_marks_setup[$subject->id]['pr_ch']:0 ?>">
                </div>
                
            </div>
           @endforeach

            <div class="fpb-7">
                <button class="btn-form" type="submit">{{ get_phrase('Update') }}</button>
            </div>
        </div>
    </form>
</div>

@endsection
<script type="text/javascript">

  "use strict";


    function classWiseSubjectOnExamEdit(classId) {
        let url = "{{ route('admin.class_wise_subject', ['id' => ":classId"]) }}";
        url = url.replace(":classId", classId);
        $.ajax({
            url: url,
            success: function(response){
                $('#subject_id').html(response);
            }
        });
    }

    $(document).ready(function () {
      $(".eChoice-multiple-with-remove").select2();
    });

</script>