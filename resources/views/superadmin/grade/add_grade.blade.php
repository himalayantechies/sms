<div class="eoff-form">
    <form method="POST" enctype="multipart/form-data" class="d-block ajaxForm" action="{{ route('superadmin.create.grade') }}">
        @csrf 
        <div class="form-row">
            <div class="fpb-7">
                <label for="grade_type" class="eForm-label">Grading type</label>
                <select name="grade_type" id ="grade_type" class="form-select eForm-select eChoice-multiple-with-remove">
                    <option value ="Letter Grading">Letter Grading </option>    
                    <option value ="Percentage">Percentage</option>    
                </select>
            </div>
            <div class="fpb-7">
                <label for="grade" class="eForm-label">{{ get_phrase('Grade') }}</label>
                <input type="text" class="form-control eForm-control" id="grade" name = "grade" required>
            </div>

            <div class="fpb-7">
                <label for="grade_point" class="eForm-label">{{ get_phrase('Grade Point') }}</label>
                <input type="number" class="form-control eForm-control" id="grade_point" name = "grade_point" step=".01" min="0" placeholder="Provide grade point" aria-label="Provide grade point" required>
            </div>

            <div class="fpb-7">
                <label for="mark_from" class="eForm-label">{{ get_phrase('Mark From') }}</label>
                <input type="number" class="form-control eForm-control" id="mark_from" name = "mark_from" min="0" placeholder="Mark from" aria-label="Mark from" required>
            </div>

            <div class="fpb-7">
                <label for="mark_upto" class="eForm-label">{{ get_phrase('Mark Upto') }}</label>
                <input type="number" class="form-control eForm-control" id="mark_upto" name = "mark_upto" min="0" placeholder="Mark upto" aria-label="Mark upto" required>
            </div>

            <div class="fpb-7 pt-2">
                <button class="btn-form" type="submit">{{ get_phrase('Create') }}</button>
            </div>
        </div>
    </form>
</div>