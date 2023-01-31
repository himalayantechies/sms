<div class="eForm-layouts">
    <form method="POST" enctype="multipart/form-data" class="d-block ajaxForm" action="{{ route('superadmin.school.update', ['id' => $school->id]) }}">
         @csrf 
        <div class="form-row">
            <div class="fpb-7">
                <label for="title" class="eForm-label">{{ get_phrase('Title') }}</label>
                <input type="text" class="form-control eForm-control" value="{{ $school->title }}" id="title" name = "title" required>
            </div>
            <div class="fpb-7">
                <label for="address" class="eForm-label">{{ get_phrase('School Address') }}</label>
                <textarea class="form-control eForm-control" id="address" name = "address" rows="2" required>{{ $school->address }}</textarea>
            </div>
            <div class="fpb-7">
                <label for="title" class="eForm-label">{{ get_phrase('School Phone') }}</label>
                <input type="number" min="0" class="form-control eForm-control" value="{{ $school->phone }}" id="phone" name = "phone" required>
            </div>
            <div class="fpb-7">
                <label for="year_established" class="eForm-label">Est. Year</label>
                <input type="text" class="form-control eForm-control" id="year_established" name="year_established" value="{{$school->year_established}}" >
            </div>
            <div class="fpb-7">
                <label for="school_type" class="eForm-label">School Type</label>
                <select name="school_type_id" id="school_type_id" class="form-select eForm-select eChoice-multiple-with-remove">
                    <option value="1" @if ($school->school_type_id == 1) selected @endif >Community School</option>	
                    <option value="2" @if ($school->school_type_id == 2) selected @endif >Institutional School</option>	
                </select>
            </div>
            <div class="fpb-7">
                <label for="district_code" class="eForm-label">District Code</label>
                <input type="text" class="form-control eForm-control" id="district_code" name="district_code"  value="{{$school->district_code}}">
            </div>
            <div class="fpb-7">
                <label for="vcd_code" class="eForm-label">VDC Code</label>
                <input type="text" class="form-control eForm-control" id="vcd_code" name="vcd_code" value="{{$school->vcd_code}}">
            </div>
            <div class="fpb-7">
                <label for="school_code" class="eForm-label">School Code</label>
                <input type="text" class="form-control eForm-control" id="school_code" name="school_code" value="{{$school->school_code}}" >
            </div>
            <div class="fpb-7">
                <label for="school_info" class="eForm-label">{{ get_phrase('School information') }}</label>
                <textarea class="form-control eForm-control" id="school_info" name = "school_info" rows="2" required>{{ $school->school_info }}</textarea>
            </div>
            <div class="fpb-7 pt-2">
                <button class="btn-form" type="submit">{{ get_phrase('Update school') }}</button>
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