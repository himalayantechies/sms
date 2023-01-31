<form method="POST" enctype="multipart/form-data" class="d-block ajaxForm"
    action="{{ route('admin.offline_admission.create') }}">
    @csrf
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 mt-2">
                <label for="name" class="form-label col-eForm-label">{{ get_phrase('Name') }}</label>
                <input type="text" class="form-control eForm-control" id="name" name="name" required>
            </div>
            <div class="col-md-6 col-sm-12 mt-2">
                <label for="student_type" class="form-label col-eForm-label">Student Type</label>
                <select name="student_type" id="student_type"
                    class="form-control form-select eForm-select eChoice-multiple-with-remove">
                    <option value="" selected="selected">-Select student type-</option>
                    @foreach ($data['student_type'] as $type)
                        <option value="{{ $type }}">{{ $type }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6 col-sm-12 mt-2">
                <label for="class_id" class="form-label col-eForm-label">{{ get_phrase('Class') }}</label>
                <select name="class_id" id="class_id" class="form-select eForm-select eChoice-multiple-with-remove"
                    required onchange="classWiseSection(this.value)">
                    <option value="">Select a class</option>
                    @foreach ($data['classes'] as $class)
                        <option value="{{ $class->id }}">{{ $class->name }}</option>
                    @endforeach
                </select>
            </div>
            {{-- <div class="col-md-6 col-sm-12 mt-2">
                <label for="grade" class="form-label col-eForm-label">Grade</label>
                <select name="grade" id="grade" class="form-select eForm-select eChoice-multiple-with-remove"
                    required>
                    <option value="">Select a class</option>
                    @foreach ($data['grade'] as $class)
                        <option value="{{ $class }}">{{ $class }}</option>
                    @endforeach
                </select>
            </div> --}}

            {{-- <div class="col-md-6 col-sm-12 mt-2">
                <label for="section_id" class="form-label col-eForm-label">{{ get_phrase('Section') }}</label>
                <select name="section_id" id="section_id" class="form-select eForm-select eChoice-multiple-with-remove"
                    required>
                    <option value="">{{ get_phrase('Select section') }}</option>
                    @foreach ($data['section'] as $section)
                    <option value="{{ $section }}">{{ $section }}</option>
                @endforeach
                </select>
            </div> --}}

            <div class="col-md-6 col-sm-12 mt-2">
                <label for="section_id" class="form-label col-eForm-label">{{ get_phrase('Section') }}</label>
                <select name="section_id" id="section_id" class="form-select eForm-select eChoice-multiple-with-remove"
                    required>
                    <option value="">{{ get_phrase('Select section') }}</option>
                </select>
            </div>
            <div class="col-md-6 col-sm-12 mt-2">
                <label for="registration_no" class="form-label col-eForm-label">Registration No.</label>
                <input type="text" class="form-control eForm-control" id="registration_no" name="registration_no" required>
            </div>
            <div class="col-md-6 col-sm-12 mt-2">
                <label for="roll_no" class="form-label col-eForm-label">Roll No.</label>
                <input type="text" class="form-control eForm-control" id="roll_no" name="roll_no" required>
            </div>
            <div class="col-md-6 col-sm-12 mt-2">
                <label for="gender" class="form-label col-eForm-label">{{ get_phrase('Gender') }}</label>
                <select name="gender" id="gender" class="form-select eForm-select eChoice-multiple-with-remove"
                    required>
                    <option value="">{{ get_phrase('Select gender') }}</option>
                    @foreach ($data['gender'] as $item)
                        <option value="{{ $item }}">{{ $item }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-6 col-sm-12 mt-2">
                <label for="admitted_date" class="form-label col-eForm-label">Admitted Date</label>
                <input type="date" class="form-control eForm-control" id="admitted_date" name="admitted_date"
                    required>
            </div>
            <div class="col-md-6 col-sm-12 mt-2">
                <label for="dob_ad" class="form-label col-eForm-label">Date of Birth(AD)<span
                        class="required"></span></label>
                <input type="date" class="form-control eForm-control" id="dob_ad" name="dob_ad" />
            </div>
            <div class="col-md-6 col-sm-12 mt-2">
                <label for="dob_bs" class="form-label col-eForm-label">Date of Birth(BS)<span
                        class="required"></span></label>
                <input type="date" class="form-control eForm-control" id="dob_bs" name="dob_bs" />
            </div>

            <div class="col-md-6 col-sm-12 mt-2">
                <label for="phone" class="form-label col-eForm-label">Contact No.</label>
                <input type="text" id="phone" name="phone" class="form-control eForm-control" required>
            </div>

            <div class="col-md-6 col-sm-12 mt-2">
                <label for="email" class="form-label col-eForm-label">{{ get_phrase('Email') }}</label>
                <input type="email" class="form-control eForm-control" id="email" name="email" required>
            </div>
            <div class="col-md-6 col-sm-12 mt-2">
                <label for="password" class="form-label col-eForm-label">{{ get_phrase('Password') }}</label>
                <input type="password" class="form-control eForm-control" id="password" name="password" required>
            </div>
            <div class="col-md-6 col-sm-12 mt-2">
                <label for="address" class="form-label col-eForm-label">{{ get_phrase('Address') }}</label>
                <input type="text" class="form-control eForm-control" id="address" name="address" required>
            </div>
            <div class="col-md-6 col-sm-12 mt-2">
                <label for="blood_group" class="form-label col-eForm-label">{{ get_phrase('Blood group') }}</label>

                <select name="blood_group" id="blood_group"
                    class="form-select eForm-select eChoice-multiple-with-remove" required>
                    <option value="">{{ get_phrase('Select a blood group') }}</option>
                    <option value="a+">{{ get_phrase('A+') }}</option>
                    <option value="a-">{{ get_phrase('A-') }}</option>
                    <option value="b+">{{ get_phrase('B+') }}</option>
                    <option value="b-">{{ get_phrase('B-') }}</option>
                    <option value="ab+">{{ get_phrase('AB+') }}</option>
                    <option value="ab-">{{ get_phrase('AB-') }}</option>
                    <option value="o+">{{ get_phrase('O+') }}</option>
                    <option value="o-">{{ get_phrase('O-') }}</option>
                </select>
            </div>
            <div class="col-md-6 col-sm-12 mt-2">
                <label for="disability" class="form-label col-eForm-label">Disability</label>
                <select name="disability" id="disability"
                    class="form-select eForm-select eChoice-multiple-with-remove" required>
                    <option value="">--Select disability type--</option>
                    @foreach ($data['disability'] as $item)
                        <option value="{{ $item }}">{{ $item }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6 col-sm-12 mt-2">
                <label for="caste" class="form-label col-eForm-label">Caste</label>
                <select name="caste" id="caste" class="form-select eForm-select eChoice-multiple-with-remove"
                    required>
                    <option value="">--Select caste--</option>
                    @foreach ($data['caste'] as $item)
                        <option value="{{ $item }}">{{ $item }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-6 col-sm-12 mt-2">
                <label for="religion" class="form-label col-eForm-label">Religion</label>
                <input type="text" class="form-control eForm-control" id="religion" name="religion" required>
            </div>
            <div class="col-md-6 col-sm-12 mt-2">
                <label for="previous_school" class="form-label col-eForm-label">Previous School</label>
                <input type="text" class="form-control eForm-control" id="previous_school" name="previous_school"
                    required>
            </div>
            <div class="col-md-6 col-sm-12 mt-2">
                <label for="ecd_type" class="form-label col-eForm-label">ECD Type</label>
                <select name="ecd_type" id="ecd_type" class="form-select eForm-select eChoice-multiple-with-remove"
                    required>
                    <option value="">--Select ecd_type--</option>
                    @foreach ($data['ecd_type'] as $item)
                        <option value="{{ $item }}">{{ $item }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6 col-sm-12 mt-2">
                <label for="ecd_no" class="form-label col-eForm-label">ECD No.</label>
                <input type="text" class="form-control eForm-control" id="ecd_no" name="ecd_no" required>
            </div>

            <div class="col-md-6 col-sm-12 mt-2">
                <label for="ecd_ppc_experience" class="form-label col-eForm-label">ECD/PPC Experience</label>
                <input type="checkbox" class="form-check-input mx-3" id="ecd_ppc_experience" value="1"
                    name="ecd_ppc_experience">
            </div>
            <div class="col-md-6 col-sm-12 mt-2">
                <label for="new_admission_status" class="form-label col-eForm-label">Is new admission ?</label>
                <input type="checkbox" class="form-check-input mx-3" id="new_admission_status" value="1"
                    name="new_admission_status">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12 mt-2">
                <label for="photo"
                    class="form-label col-eForm-label">{{ get_phrase('Student profile image') }}</label>
                <input class="form-control eForm-control-file" type="file" id="photo" name="photo"
                    accept="image/*">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12 mt-4">
                <button type="submit" class="btn-form">{{ get_phrase('Add Student') }}</button>
            </div>
        </div>
    </div>
</form>
