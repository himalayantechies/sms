@extends('admin.navigation')

@section('content')
    <div class="mainSection-title">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center flex-wrap gr-15">
                    <div class="d-flex flex-column">
                        <h4>{{ get_phrase('Parent Create') }}</h4>
                        <ul class="d-flex align-items-center eBreadcrumb-2">
                            <li><a href="#">{{ get_phrase('Home') }}</a></li>
                            <li><a href="#">{{ get_phrase('Users') }}</a></li>
                            <li><a href="#">{{ get_phrase('Parent') }}</a></li>
                            <li><a href="#">{{ get_phrase('Add Parent') }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="custom-card p-30">
        <form method="POST" enctype="multipart/form-data" class="d-block ajaxForm"
            action="{{ route('admin.parent.create') }}">
            @csrf
            <div class="row my-3">
                <div class="col-md-6 col-sm-12 mt-2">
                    <label for="name" class="eForm-label">{{ get_phrase('Name') }}*</label>
                    <input type="text" class="form-control eForm-control" id="name" name="name" required>
                </div>
                <div class="col-md-6 col-sm-12 mt-2">
                    <label for="phone" class="eForm-label">{{ get_phrase('Phone') }}*</label>
                    <input type="text" class="form-control eForm-control" id="phone" name="phone" required />
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
                        <input type="email" class="form-control eForm-control" id="email" name="email">
                    </div>
                    <div class="col-md-6 col-sm-12 mt-2">
                        <label for="address" class="eForm-label">{{ get_phrase('Address') }}</label>
                        <input class="form-control eForm-control" id="address" name="address" type="text"
                            spellcheck="false">
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-md-6 col-sm-12 mt-2">
                        <label for="nationality" class="eForm-label">{{ get_phrase('Nationality') }}</label>
                        <select name="nationality" id="nationality"
                            class="form-select eForm-select eChoice-multiple-with-remove">
                            <option value="">{{ get_phrase('Select Nationality') }}</option>
                            <option value="Nepali">{{ get_phrase('Nepali') }}</option>
                            <option value="Indian">{{ get_phrase('Indian') }}</option>
                            <option value="Others">{{ get_phrase('Others') }}</option>
                        </select>
                    </div>
                    <div class="col-md-6 col-sm-12 mt-2">
                        <label for="birthdatepicker" class="eForm-label">{{ get_phrase('Date of Birth') }}</label>
                        <input type="date" class="form-control eForm-control" id="birthday" name="dob" />
                    </div>
                </div>
                <div class="row my-3">

                    <div class="col-md-6 col-sm-12 mt-2">
                        <label for="education" class="eForm-label">{{ get_phrase('Education') }}</label>
                        <input type="text" class="form-control eForm-control" id="education" name="education">
                    </div>
                    <div class="col-md-6 col-sm-12 mt-2">
                        <label for="profession" class="eForm-label">{{ get_phrase('Profession') }}</label>
                        <input type="text" class="form-control eForm-control" id="profession" name="profession">
                    </div>
                    <div class="col-md-6 col-sm-12 mt-2">
                        <label for="designation" class="eForm-label">{{ get_phrase('Designation') }}</label>
                        <input type="text" class="form-control eForm-control" id="designation" name="designation">
                    </div>
                    <div class="col-md-6 col-sm-12 mt-2">
                        <label for="office_address" class="eForm-label">{{ get_phrase('Office Address') }}</label>
                        <input type="text" class="form-control eForm-control" id="office_address" name="office_address">
                    </div>

                    <div class="col-md-6 col-sm-12 mt-2">
                        <label for="formFile" class="eForm-label">{{ get_phrase('Photo') }}</label>
                        <input class="form-control eForm-control-file" id="photo" name="photo" accept="image/*"
                            type="file" />
                    </div>
                </div>
            </div>
            <div class="card p-3 my-3">
                <div class="">
                    <h6>Select the child</h6>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-12 mt-2">
                        <label for="class_id" class="eForm-label">{{ get_phrase('Class') }}</label>
                        <select name="class_id" id="class_id"
                            class="form-select eForm-select eChoice-multiple-with-remove" required
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
                            class="form-select eForm-select eChoice-multiple-with-remove" required>
                            <option value="">{{ get_phrase('Select section') }}</option>
                        </select>
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
                    <div id="blank_row">
                        <div class="child_added_row row p-0">
                            <div class="form-group col-md-6 col-sm-12 col-xs-12 pt-2">
                                <div class="d-flex">
                                    <input type="text" name="student_name[]" id="student_name"
                                        class="student_name form-control eForm-control" readonly>
                                    <input type="text" name="student_id[]" id="student_id"
                                        class="student_id form-control eForm-control" readonly hidden>
                                    <button type="button" class="delete_child btn btn-icon btn-danger mx-3"
                                        id="delete_child" onclick="removeRow(this)"> <i class="bi bi-x"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12 mt-2 pt-2">
                    <button type="submit" class="btn-form">{{ get_phrase('Add Parent') }}</button>
                </div>
            </div>
        </form>
    </div>

    <script type="text/javascript">
        "use strict";

        // CREATING BLANK ALLOWANCE INPUT
        var blank_field = '';
        var student_array = [];

        $(document).ready(function() {
            $('#blank_row').hide();
            $(".eChoice-multiple-with-remove").select2();
            blank_field = $('#blank_row').html();
            $('#additional_details_checkbox').click(function() {
                if ($(this).is(':checked')) {
                    $('#additional_details').removeClass('d-none');
                } else {
                    $('#additional_details').addClass('d-none');
                }
            });
        });

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
    </script>
@endsection
