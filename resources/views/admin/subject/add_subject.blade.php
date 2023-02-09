<div class="eoff-form">
    <form method="POST" enctype="multipart/form-data" class="d-block ajaxForm" action="{{ route('admin.create.subject') }}">
         @csrf 
        <div class="form-row">
            <div class="fpb-7">
                <label for="class_id_on_create" class="eForm-label">{{ get_phrase('Class') }}</label>
                <select name="class_id" id="class_id" class="form-select eForm-select eChoice-multiple-with-remove" required>
                    <option value="">{{ get_phrase('Select a class') }}</option>
                     @foreach($classes as $class)
                    <option value="{{ $class->id }}">{{ $class->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="fpb-7">
                <label for="subject_id_on_create" class="eForm-label">{{ get_phrase('Subject') }}</label>
                <select name="subject_id" id="subject_id" class="form-select eForm-select eChoice-multiple-with-remove" required>
                    <option value="">{{ get_phrase('Select a subject') }}</option>
                     @foreach($subjects as $subject)
                    <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="fpb-7">
                <label for="sequence_on_create" class="eForm-label">Seqeunce order</label>
                <select name="sequence" id="sequence" class="form-select eForm-select eChoice-multiple-with-remove" required>
                    <option value="">Select a Sequence order</option>
                     @for($i = 1; $i <=15; $i++ )
                    <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                </select>
            </div>
            

            <div class="fpb-7">
                <label for="conduct_exam_on_create" class="eForm-label">Conduct Exam</label>
                <input type="checkbox" name="conduct_exam" id="conduct_exam" value="1" checked> Yes
            </div>

            <div class="fpb-7">
                <label for="elective_group_on_create" class="eForm-label">Elective Group</label>
                <select name="elective_name_id" id="elective_name_id" class="form-select eForm-select eChoice-multiple-with-remove" required>
                    <option value="0">Select </option>
                    <option value="1">Elective I</option> 
                    <option value="2">Elective II</option>
                    <option value="3">Elective III</option>
                    <option value="4">Elective IV</option>
                    <option value="5">Elective V</option>

                    
                </select>
            </div>

            <!-- <div class="fpb-7">
                <label for="no_exam_on_create" class="eForm-label">{{ get_phrase('Grading required') }}</label>
                <select name="no_exam" id="no_exam" class="form-select eForm-select eChoice-multiple-with-remove" required>
                    <option value="">{{ get_phrase('Select') }}</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div> -->
            
           

            <div class="fpb-7 pt-2">
                <button class="btn-form" type="submit">{{ get_phrase('Create Subject') }}</button>
            </div>
        </div>
    </form>
</div>

<script type="text/javascript">
    "use strict";
    $(document).ready(function () {
      $(".eChoice-multiple-with-remove").select2();
    });
</script>