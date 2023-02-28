@extends('admin.navigation')

@section('content')

    <div class="mainSection-title">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center flex-wrap gr-15">
                    <div class="d-flex flex-column">
                        <h4>{{ get_phrase('Parent Update') }}</h4>
                        <ul class="d-flex align-items-center eBreadcrumb-2">
                            <li><a href="#">{{ get_phrase('Home') }}</a></li>
                            <li><a href="#">{{ get_phrase('Users') }}</a></li>
                            <li><a href="#">{{ get_phrase('Parent') }}</a></li>
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
                        action="{{ route('users.credentials.update', ['id' => $user->id]) }}">
                        @csrf
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12 mt-2">
                                    <label for="username"
                                        class="eForm-label form-label">{{ get_phrase('Username') }}</label>
                                    <input type="text" class="form-control eForm-control" id="username" name="username"
                                        readonly required value="{{ $user->username }}">
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
            action="{{ route('admin.parent.update', ['id' => $user->id]) }}">
            @csrf
            <div class="row">
                <div class="col-md-6 col-sm-12 mt-2">
                    <label for="name" class="eForm-label">{{ get_phrase('Name') }}*</label>
                    <input type="text" class="form-control eForm-control" value="{{ $user->name }}" id="name"
                        name="name" required>
                </div>
                <div class="col-md-6 col-sm-12 mt-2">
                    <label for="phone" class="eForm-label">{{ get_phrase('Phone') }}*</label>
                    <input type="text" class="form-control eForm-control" value="{{ $info->phone }}" id="phone"
                        value="{{ $info->phone }}" name="phone" required>
                </div>
            </div>

            <div class="row my-3">
                <div class="col-md-12 col-sm-12 mainSection-title d-flex">
                    <h4>{{ get_phrase('Additional Details') }}</h4>
                    <input type="checkbox" class="form-check-input mx-3" id="additional_details_checkbox"
                        name="additional_details_checkbox">
                </div>
            </div>

            <div id="additional_details" class="d-none">
                <div class="row my-3">
                    <div class="col-md-6 col-sm-12 mt-2">
                        <label for="email" class="eForm-label">{{ get_phrase('Email') }}</label>
                        <input type="email" class="form-control eForm-control" value="{{ $user->email }}" id="email"
                            value="{{ $user->email }}" name="email">
                    </div>
                    <div class="col-md-6 col-sm-12 mt-2">
                        <label for="address" class="eForm-label">{{ get_phrase('Address') }}</label>
                        <input class="form-control eForm-control" id="address" name="address" type="text"
                            value="{{ $info->address }}" spellcheck="false">
                    </div>

                </div>
                <div class="row my-3">
                    <div class="col-md-6 col-sm-12 mt-2">
                        <label for="nationality" class="eForm-label">{{ get_phrase('Nationality') }}</label>
                        <select name="nationality" id="nationality"
                            class="form-select eForm-select eChoice-multiple-with-remove">
                            <option value="">{{ get_phrase('Select Nationality') }}</option>
                            @foreach ($nationality as $item)
                                <option value="{{ $item }}" {{ $info->nationality == $item ? 'selected' : '' }}>
                                    {{ get_phrase($item) }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-6 col-sm-12 mt-2">
                        <label for="birthdatepicker" class="eForm-label">{{ get_phrase('Date of Birth') }}</label>
                        <input type="text" class="form-control eForm-control" id="dob" data-single="true"
                            placeholder="{{ get_phrase('Enter Date of Birth') }}">
                        <input type="hidden" id="dob_english" name="birthday" value="{{ $info->birthday }}">
                    </div>
                </div>

                <div class="row my-3">

                    <div class="col-md-6 col-sm-12 mt-2">
                        <label for="education" class="eForm-label">{{ get_phrase('Education') }}</label>
                        <input type="text" class="form-control eForm-control" id="education" name="education"
                            value="{{ $info->education }}">
                    </div>
                    <div class="col-md-6 col-sm-12 mt-2">
                        <label for="profession" class="eForm-label">{{ get_phrase('Profession') }}</label>
                        <input type="text" class="form-control eForm-control" id="profession" name="profession"
                            value="{{ $info->profession }}">
                    </div>
                    <div class="col-md-6 col-sm-12 mt-2">
                        <label for="designation" class="eForm-label">{{ get_phrase('Designation') }}</label>
                        <input type="text" class="form-control eForm-control" id="designation" name="designation"
                            value="{{ $info->designation }}">
                    </div>
                    <div class="col-md-6 col-sm-12 mt-2">
                        <label for="office_address" class="eForm-label">{{ get_phrase('Office Address') }}</label>
                        <input type="text" class="form-control eForm-control" id="office_address"
                            name="office_address" value="{{ $info->office_address }}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-12 mt-2">
                        <label for="photo" class="form-label col-eForm-label">{{ get_phrase('Photo') }}</label>
                        @if ($info->photo != null)
                            <div>
                                <a href="{{ url('public/assets/uploads/user-images/' . $info->photo) }}" target="blank">
                                    <img src="{{ asset('public/assets/uploads/user-images/' . $info->photo) }}"
                                        height="80em" class="m-4" />
                                </a>
                            </div>
                        @endif
                        <input type="hidden" name="photo" value=" {{ $info->photo }}">
                        <input class="form-control eForm-control-file" type="file" id="photo" name="photo"
                            accept="image/*">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="card p-3 my-3">
                    <div class="">
                        <h6>Select the child</h6>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-12 mt-2">
                            <label for="class_id" class="eForm-label">{{ get_phrase('Class') }}</label>
                            <select name="class_id" id="class_id"
                                class="form-select eForm-select eChoice-multiple-with-remove"
                                onchange="classWiseSection(this.value)">
                                <option value="">{{ get_phrase('Select a class') }}</option>
                                @foreach ($classes as $class)
                                    <option value="{{ $class->id }}">{{ $class->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-6 col-sm-12 mt-2">
                            <label for="section_id" class="eForm-label">{{ get_phrase('Section') }}</label>
                            <select name="section_id" id="section_id"
                                class="form-select eForm-select eChoice-multiple-with-remove">
                                <option value="">{{ get_phrase('Select section') }}</option>
                            </select>
                        </div>
                    </div>

                    <div id="first_row">

                        <div class="row p-0">
                            <div class="form-group col-md-6 col-sm-12 col-xs-12 pt-2">
                                <label for="student_id[]" class="eForm-label">{{ get_phrase('Child') }}</label>
                                <div class="d-flex">

                                    <select name="student_id[]" id="student_id_1"
                                        class="form-select eForm-select eChoice-multiple-with-remove">
                                        <option value=""></option>
                                    </select>
                                    <button type="button" class="btn btn-icon btn-success mx-3" onclick="appendRow()">
                                        <i class="bi bi-plus"></i> </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    @if (count($childs) > 0)
                        @foreach ($childs as $child)
                            <div id="existing_row{{ $child->id }}">
                                <div class="child_existing_row row">
                                    <div class="form-group col-md-6 col-sm-12 col-xs-12 pt-2">
                                        <div class="d-flex">
                                            <input type="text" name="student_name[]"
                                                id="student_id_{{ $child->id }}"
                                                class="student_id form-control eForm-control" value="{{ $child->name }}"
                                                readonly>
                                            <input type="text" name="student_id[]"
                                                id="student_id_{{ $child->id }}"
                                                class="student_id form-control eForm-control" value="{{ $child->id }}"
                                                readonly hidden>
                                            <button type="button" class="delete_child btn btn-icon btn-danger mx-3"
                                                id="delete_child" onclick="removeExistingRow(this)"> <i
                                                    class="bi bi-x"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif

                    <div id="blank_row">
                        <div class="child_added_row row p-0 m-0">
                            <div class="form-group col-xl-10 col-lg-5 col-md-5 col-sm-12 col-xs-12 pt-2">
                                <input type="text" name="student_name[]" id="student_name"
                                    class="student_name form-control eForm-control" readonly>
                                <input type="text" name="student_id[]" id="student_id"
                                    class="student_id form-control eForm-control" readonly hidden>
                                <button type="button" class="delete_child btn btn-icon btn-danger" id="delete_child"
                                    onclick="removeRow(this)"> <i class="bi bi-x"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12 mt-2 pt-2">
                    <button class="btn-form" type="submit">{{ get_phrase('Update') }}</button>
                </div>
            </div>
        </form>
    </div>
@endsection
@section('scripts')
    <script src="https://unpkg.com/nepali-date-picker@2.0.1/dist/jquery.nepaliDatePicker.min.js" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://unpkg.com/nepali-date-picker@2.0.1/dist/nepaliDatePicker.min.css"
        crossorigin="anonymous" />
    <script type="text/javascript">
        "use strict";

        // CREATING BLANK ALLOWANCE INPUT
        var blank_field = '';
        var student_array = [];

        $(document).ready(function() {
            $('#blank_row').hide();
            blank_field = $('#blank_row').html();
            $('#additional_details_checkbox').click(function() {
                if ($(this).is(':checked')) {
                    $('#additional_details').removeClass('d-none');
                } else {
                    $('#additional_details').addClass('d-none');
                }
            });
            var english_dob = $('#dob_english').val();
            nepali_date = '';
            if (english_dob) {
                var nepali_date = englishBStoNepali(english_dob);
            }
            $('#dob').val(nepali_date);
            $('#dob').nepaliDatePicker({
                dateFormat: "%y-%m-%d",
                closeOnDateSelect: true
            });
            $("#dob").on("dateSelect", function(event) {
                var nepaliDate = event.datePickerData.formattedDate;
                var formattedDate = nepaliBStoEnglish(nepaliDate);
                $('#dob_english').val(formattedDate);
            });
        });

        function nepaliBStoEnglish(nepaliDate) {
            var [nepaliYear, nepaliMonth, nepaliDay] = nepaliDate.split('-').map(calendarFunctions
                .getNumberByNepaliNumber);
            var date = new Date(nepaliYear, nepaliMonth - 1, nepaliDay);
            var year = date.getFullYear(); // get the year (yyyy)
            var month = String(date.getMonth() + 1).padStart(2, '0'); // get the month (mm)
            var day = String(date.getDate()).padStart(2, '0'); // get the day (dd)
            return `${year}-${month}-${day}`;
        }

        function englishBStoNepali(english_dob) {
            var [englishYear, englishMonth, englishDay] = english_dob.split('-');
            return calendarFunctions.bsDateFormat("%y-%m-%d", Number(englishYear), Number(englishMonth),
                Number(englishDay));
        }
        $(function() {
            $('.inputDate').daterangepicker({
                    singleDatePicker: true,
                    showDropdowns: true,
                    minYear: 1901,
                    maxYear: parseInt(moment().format("YYYY"), 10),
                },
                function(start, end, label) {
                    var years = moment().diff(start, "years");
                }
            );
        });


        function classWiseSection(classId) {
            let url = "{{ route('class_wise_sections', ['id' => ':classId']) }}";
            url = url.replace(":classId", classId);
            $.ajax({
                url: url,
                success: function(response) {
                    $('#section_id').html(response);
                    loadStudent(classId);
                }
            });
        }

        function loadStudent(classId) {
            let url = "{{ route('class_wise_student', ['id' => ':classId']) }}";
            url = url.replace(":classId", classId);
            $.ajax({
                url: url,
                success: function(response) {
                    $('#student_id_1').html(response);
                }
            });
        }

        var child_count = 1;

        function appendRow() {
            child_count++;
            var id = $('#student_id_1').val();
            var class_id = $('#class_id').val();
            var section_id = $('#section_id').val();

            if (class_id != '' && section_id != '' && id != '' && !student_array.includes(id)) {
                student_array.push(id);
                $('#first_row').append(blank_field);
                $('#student_id').attr('id', 'student_id_' + child_count);
                $('#student_name').attr('id', 'student_name_' + child_count);


                var name = "";

                let url = "{{ route('id_wise_user_name', ['id' => ':id']) }}";
                url = url.replace(":id", id);
                $.ajax({
                    url: url,
                    success: function(response) {
                        name = response;

                        $('#student_name_' + child_count).val(name);
                        $('#student_id_' + child_count).val(id);
                    }
                });

                document.getElementById("student_id_1").value = "";
            } else {
                if (class_id == '' || section_id == '' || id == '') {
                    toastr.warning('Select all the field');
                } else {
                    toastr.warning('Student already added');
                }
            }
        }

        function removeRow(elem) {
            $(elem).closest('.child_added_row').remove();
        }

        function removeExistingRow(elem) {
            $(elem).closest('.child_existing_row').remove();
        }
    </script>
@endsection
