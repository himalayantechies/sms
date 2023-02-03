@extends('admin.navigation')

@section('content')
    <div class="mainSection-title">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center flex-wrap gr-15">
                    <div class="d-flex flex-column">
                        <h4>{{ get_phrase('Student') }}</h4>
                        <ul class="d-flex align-items-center eBreadcrumb-2">
                            <li><a href="#">{{ get_phrase('Home') }}</a></li>
                            <li><a href="#">{{ get_phrase('Users') }}</a></li>
                            <li><a href="#">{{ get_phrase('Students') }}</a></li>
                            <li><a href="#">{{ get_phrase('Edit') }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="custom-card p-30">
        <div class="d-flex justify-content-end ">
            <!-- Button trigger modal -->
            <a type="button" class="mainSection-title" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                <h4 class="text-info">
                    {{ get_phrase('Change password') }}
                </h4>
            </a>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">{{ get_phrase('Change password') }}</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form method="POST" enctype="multipart/form-data" class="d-block ajaxForm"
                        action="{{ route('users.credentials.update', ['id' => $data['student']['user_id']]) }}">
                        @csrf
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12 mt-2">
                                    <label for="username"
                                        class="eForm-label form-label">{{ get_phrase('Username') }}</label>
                                    <input type="text" class="form-control eForm-control" id="username" name="username"
                                        readonly required value="{{ $data['student']['username'] }}">
                                </div>

                                <div class="col-md-12 mt-2">
                                    <label for="password"
                                        class="form-label col-eForm-label">{{ get_phrase('Change password') }}</label>
                                    <input type="text" class="form-control eForm-control" id="password" name="password"
                                        placeholder="Enter new password" required>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary text-white">{{ get_phrase('Update') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <form method="POST" enctype="multipart/form-data" class="d-block ajaxForm"
            action="{{ route('admin.student.update', $data['student']['user_id']) }}">
            @csrf
            <div class="container">
                <div class="row my-3">
                    <div class="col-md-6 col-sm-12 mt-2">
                        <label for="name" class="form-label col-eForm-label">{{ get_phrase('Name') }}*</label>
                        <input type="text" class="form-control eForm-control" id="name" name="name"
                            value="{{ $data['student']['name'] }}" required>
                    </div>
                    <div class="col-md-6 col-sm-12 mt-2">
                        <label for="gender" class="form-label col-eForm-label">{{ get_phrase('Gender') }}*</label>
                        <select name="gender" id="gender" class="form-select eForm-select eChoice-multiple-with-remove"
                            required>
                            <option value="">{{ get_phrase('Select gender') }}</option>
                            @foreach ($data['gender'] as $item)
                                <option value="{{ $item }}"
                                    {{ $data['student']['gender'] == $item ? 'selected' : '' }}>{{ ucfirst($item) }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 col-sm-12 mt-2">
                        <label for="class_id" class="form-label col-eForm-label">{{ get_phrase('Class') }}*</label>
                        <select name="class_id" id="class_id" class="form-select eForm-select eChoice-multiple-with-remove"
                            required onchange="classWiseSection(this.value)">
                            <option value="">Select a class</option>
                            @foreach ($data['classes'] as $class)
                                <option value="{{ $class->id }}"
                                    {{ $data['student']['class_id'] == $class->id ? 'selected' : '' }}>
                                    {{ $class->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-6 col-sm-12 mt-2">
                        <label for="section" class="form-label col-eForm-label">{{ get_phrase('Section') }}*</label>
                        <select id="section" class="form-select eForm-select eChoice-multiple-with-remove" required>
                            <option value="">{{ get_phrase('Select section') }}</option>
                        </select>
                        <input type="hidden" value="{{ $data['student']['section_id'] }}" name="section_id"
                            id="section_id">
                    </div>
                    <div class="col-md-6 col-sm-12 mt-2">
                        <label for="registration_no"
                            class="form-label col-eForm-label">{{ get_phrase('Registration No') }}*</label>
                        <input type="text" class="form-control eForm-control" id="registration_no"
                            value="{{ $data['student']['registration_no'] }}" name="registration_no" required>
                    </div>
                    <div class="col-md-6 col-sm-12 mt-2">
                        <label for="address" class="form-label col-eForm-label">{{ get_phrase('Address') }}</label>
                        <input type="text" class="form-control eForm-control" id="address" name="address"
                            value="{{ $data['student']['address'] }}">
                    </div>
                </div>

                <div class="row my-3">
                    <div class="col-md-6 col-sm-12 mt-2">
                        <label for="phone" class="form-label col-eForm-label">{{ get_phrase('Contact No') }}</label>
                        <input type="text" id="phone" name="phone" class="form-control eForm-control"
                            value="{{ $data['student']['phone'] }}">
                    </div>

                    <div class="col-md-6 col-sm-12 mt-2">
                        <label for="email" class="form-label col-eForm-label">{{ get_phrase('Email') }}</label>
                        <input type="email" class="form-control eForm-control" id="email" name="email"
                            value="{{ $data['student']['email'] }}">
                    </div>
                </div>
                <div class="row my-3">


                    <div class="col-md-6 col-sm-12 mt-2">
                        <label for="dob_bs"
                            class="form-label col-eForm-label">{{ get_phrase('Date of Birth(BS)') }}</label>
                        <input type="date" class="form-control eForm-control" id="dob_bs" name="dob_bs"
                            value="{{ $data['student']['dob_bs'] }}" />
                    </div>
                    <div class="col-md-6 col-sm-12 mt-2">
                        <label for="dob_ad"
                            class="form-label col-eForm-label">{{ get_phrase('Date of Birth(AD)') }}</label>
                        <input type="date" class="form-control eForm-control" id="dob_ad" name="dob_ad"
                            value="{{ $data['student']['dob_ad'] }}" />
                    </div>
                    <div class="col-md-6 col-sm-12 mt-2">
                        <label for="blood_group"
                            class="form-label col-eForm-label">{{ get_phrase('Blood group') }}</label>

                        <select name="blood_group" id="blood_group"
                            class="form-select eForm-select eChoice-multiple-with-remove">
                            <option value="">{{ get_phrase('Select a blood group') }}</option>
                            @foreach ($data['blood_group'] as $item)
                                <option value="{{ $item }}"
                                    {{ $data['student']['blood_group'] == $item ? 'selected' : '' }}>
                                    {{ ucfirst($item) }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 col-sm-12 mt-2">
                        <label for="disability" class="form-label col-eForm-label">{{ get_phrase('Disability') }}</label>
                        <select name="disability" id="disability"
                            class="form-select eForm-select eChoice-multiple-with-remove">
                            <option value="">--Select disability type--</option>
                            @foreach ($data['disability'] as $item)
                                <option value="{{ $item }}"
                                    {{ $data['student']['disability'] == $item ? 'selected' : '' }}>
                                    {{ ucfirst($item) }}</option>
                            @endforeach
                        </select>
                    </div>

                </div>

                <div class="row my-3">


                    <div class="col-md-6 col-sm-12 mt-2">
                        <label for="caste" class="form-label col-eForm-label">{{ get_phrase('Caste') }}</label>
                        <select name="caste" id="caste"
                            class="form-select eForm-select eChoice-multiple-with-remove">
                            <option value="">--Select caste--</option>
                            @foreach ($data['caste'] as $item)
                                <option value="{{ $item }}"
                                    {{ $data['student']['caste'] == $item ? 'selected' : '' }}>{{ ucfirst($item) }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-6 col-sm-12 mt-2">
                        <label for="religion" class="form-label col-eForm-label">{{ get_phrase('Religion') }}</label>
                        <input type="text" class="form-control eForm-control" id="religion" name="religion"
                            value="{{ $data['student']['religion'] }}">
                    </div>

                </div>
                <div class="row mt-3">
                    <div class="col-md-6 col-sm-12 mt-2">
                        <label for="student_type"
                            class="form-label col-eForm-label">{{ get_phrase('Student Type') }}</label>
                        <select name="student_type" id="student_type"
                            class="form-control form-select eForm-select eChoice-multiple-with-remove">
                            <option value="">-Select student type-</option>
                            @foreach ($data['student_type'] as $type)
                                <option value="{{ $type }}"
                                    {{ $data['student']['student_type'] == $type ? 'selected' : '' }}>
                                    {{ $type }}
                                </option>
                            @endforeach
                        </select>
                    </div>


                    <div class="col-md-6 col-sm-12 mt-2">
                        <label for="roll_no" class="form-label col-eForm-label">{{ get_phrase('Roll No') }}</label>
                        <input type="text" class="form-control eForm-control" id="roll_no" name="roll_no"
                            value="{{ $data['student']['roll_no'] }}">
                    </div>


                    <div class="col-md-6 col-sm-12 mt-2">
                        <label for="admitted_date"
                            class="form-label col-eForm-label">{{ get_phrase('Admitted Date') }}</label>
                        <input type="date" class="form-control eForm-control" id="admitted_date" name="admitted_date"
                            value="{{ $data['student']['admitted_date'] }}">
                    </div>

                    <div class="col-md-6 col-sm-12 mt-2">
                        <label for="previous_school"
                            class="form-label col-eForm-label">{{ get_phrase('Previous School') }}</label>
                        <input type="text" class="form-control eForm-control" id="previous_school"
                            value="{{ $data['student']['previous_school'] }}" name="previous_school">
                    </div>
                    <div class="col-md-6 col-sm-12 mt-2">
                        <label for="ecd_type" class="form-label col-eForm-label">{{ get_phrase('ECD Type') }}</label>
                        <select name="ecd_type" id="ecd_type"
                            class="form-select eForm-select eChoice-multiple-with-remove">
                            <option value="">--Select ecd_type--</option>
                            @foreach ($data['ecd_type'] as $item)
                                <option value="{{ $item }}"
                                    {{ $data['student']['ecd_type'] == $item ? 'selected' : '' }}>{{ ucfirst($item) }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 col-sm-12 mt-2">
                        <label for="ecd_no" class="form-label col-eForm-label">{{ get_phrase('ECD No') }}</label>
                        <input type="text" class="form-control eForm-control" id="ecd_no" name="ecd_no"
                            value="{{ $data['student']['ecd_no'] }}">
                    </div>

                    <div class="col-md-6 col-sm-12 my-3">
                        <div class=" d-flex align-items-center">
                            <div>
                                <label for="ecd_ppc_experience"
                                    class="form-label col-eForm-label">{{ get_phrase('ECD/PPC Experience') }}</label>
                                <input type="checkbox" class="form-check-input mx-3" id="ecd_ppc_experience"
                                    value="1" {{ $data['student']['ecd_ppc_experience'] == '1' ? 'checked' : '' }}
                                    name="ecd_ppc_experience">
                            </div>
                            <div>
                                <label for="new_admission_status"
                                    class="form-label col-eForm-label">{{ get_phrase('Is new admission ?') }}</label>
                                <input type="checkbox" class="form-check-input mx-3" id="new_admission_status"
                                    {{ $data['student']['new_admission_status'] == '1' ? 'checked' : '' }} value="1"
                                    name="new_admission_status">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-12 mt-2">
                        <label for="photo"
                            class="form-label col-eForm-label">{{ get_phrase('Student profile image') }}</label>
                        @if ($data['student']['photo'] != null)
                            <div>
                                <a href="{{ url('public/assets/uploads/user-images/' . $data['student']['photo']) }}"
                                    target="blank">
                                    <img src="{{ asset('public/assets/uploads/user-images/' . $data['student']['photo']) }}"
                                        height="80em" class="m-4" />
                                </a>
                            </div>
                        @endif
                        <input type="hidden" name="photo" value=" {{ $data['student']['photo'] }}">
                        <input class="form-control eForm-control-file" type="file" id="photo" name="photo"
                            accept="image/*">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-12 mt-4">
                        <button type="submit" class="btn-form">{{ get_phrase('Update') }}</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
@section('scripts')
    <script type="text/javascript">
        function classWiseSection(classId) {
            let url = "{{ route('admin.class_wise_sections', ['id' => ':classId']) }}";
            url = url.replace(":classId", classId);
            $.ajax({
                url: url,
                type: 'GET',
                data: {
                    "section_id": $('#section_id').val()
                },
                success: function(response) {
                    $('#section').html(response);
                }
            });
        }
        $(document).ready(function() {
            var class_id = $('#class_id').find(":selected").val();
            classWiseSection(class_id);
            $('#section').on('change', function() {
                var section_id = $('#section').find(":selected").val();
                $('#section_id').val(section_id);
            });

            var html_pw =
                '<input type="text" class="form-control eForm-control" id="password" name="password" placeholder="Enter new password" required>';

            $('#change_password').click(function() {
                if ($(this).is(':checked')) {
                    $('#enable_change_password').html(html_pw);
                } else {
                    $('#enable_change_password').html('');
                }
            });
        });
    </script>
@endsection
