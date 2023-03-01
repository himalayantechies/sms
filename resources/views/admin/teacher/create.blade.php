@extends('admin.navigation')
@section('styles')
    .nepali-date-picker .drop-down-content {
    width:auto !important;
    }
@endsection
@section('content')
    <div class="mainSection-title">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center flex-wrap gr-15">
                    <div class="d-flex flex-column">
                        <h4>{{ get_phrase('Create Teacher') }}</h4>
                        <ul class="d-flex align-items-center eBreadcrumb-2">
                            <li><a href="#">{{ get_phrase('Home') }}</a></li>
                            <li><a href="#">{{ get_phrase('Users') }}</a></li>
                            <li><a href="#">{{ get_phrase('Teacher') }}</a></li>
                            <li><a href="#">{{ get_phrase('Create Teacher') }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="custom-card mb-4">
        <div class="user-profile-area d-flex flex-wrap">
            <!-- Right side -->
            <div class="user-details-info">
                <ul class="nav nav-tabs eNav-Tabs-custom" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a href="{{ route('admin.teacher.create') }}">
                            <button class="nav-link active" id="basicInfo-tab" data-bs-toggle="tab"
                                data-bs-target="#basicInfo" type="button" role="tab" aria-controls="basicInfo"
                                aria-selected="true">
                                {{ get_phrase('Create Teacher') }}
                                <span></span>
                            </button>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="custom-card p-30">
        <form method="POST" enctype="multipart/form-data" class="d-block ajaxForm"
            action="{{ route('admin.teacher.create') }}">
            @csrf
            <div class="container">

                <div class="row">
                    <div class="col-md-6 col-sm-12 mt-2">
                        <label for="name" class="eForm-label form-label">{{ get_phrase('Name') }}*</label>
                        <input type="text" class="form-control eForm-control" id="name" name="name" required
                            placeholder="Enter Teacher's name">
                    </div>
                    <div class="col-md-6 col-sm-12 mt-2">
                        <label for="gender" class="eForm-label">{{ get_phrase('Gender') }}*</label>
                        <select name="gender" id="gender" class="form-select eForm-select eChoice-multiple-with-remove"
                            required>
                            <option value="">{{ get_phrase('Select gender') }}</option>
                            @foreach ($gender as $item)
                                <option value="{{ $item }}">{{ get_phrase($item) }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 col-sm-12 mt-2">
                        <label for="mobile_number" class="eForm-label">{{ get_phrase('Mobile Number') }}*</label>
                        <input type="number" class="form-control eForm-control" id="mobile_number" name="mobile_number"
                            placeholder="Enter mobile number" required>
                    </div>
                    <div class="col-md-6 col-sm-12 mt-2">
                        <label for="teacher_type" class="eForm-label">{{ get_phrase('Teacher Type') }}</label>
                        <select name="teacher_type" id="teacher_type"
                            class="form-select eForm-select eChoice-multiple-with-remove">
                            <option value="">{{ get_phrase('Select teacher type') }}</option>
                            @foreach ($teacher_type as $item)
                                <option value="{{ $item }}">{{ get_phrase($item) }}</option>
                            @endforeach
                        </select>
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
                    <div class="row">
                        <div class="col-md-6 col-sm-12  mt-2">
                            <label for="code" class="eForm-label form-label">{{ get_phrase('Code') }}</label>
                            <input type="code" class="form-control eForm-control" id="code" name="code"
                                placeholder="Provide teacher code">
                        </div>
                        <div class="col-md-6 col-sm-12 mt-2">
                            <label for="teaching_medium" class="eForm-label">{{ get_phrase('Teaching Medium') }}</label>
                            <select name="teaching_medium" id="teaching_medium"
                                class="form-select eForm-select eChoice-multiple-with-remove">
                                <option value="">{{ get_phrase('Select Teaching Medium') }}</option>
                                @foreach ($teaching_medium as $item)
                                    <option value="{{ $item }}">{{ get_phrase($item) }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 col-sm-12 mt-2">
                            <label for="designation" class="eForm-label">{{ get_phrase('Designation') }}</label>
                            <input type="text" class="form-control eForm-control" id="designation" name="designation">
                        </div>
                        <div class="col-md-6 col-sm-12 mt-2">
                            <label for="responsibility" class="eForm-label">{{ get_phrase('Responsibility') }}</label>
                            <input type="text" class="form-control eForm-control" id="responsibility"
                                name="responsibility">
                        </div>
                        <div class="col-md-6 col-sm-12 mt-2">
                            <label for="join_date" class="eForm-label">{{ get_phrase('Join Date') }}</label>
                            <input type="text" class="form-control eForm-control" id="join_date"
                                placeholder="{{ get_phrase('Enter the joining date') }}">
                            <input type="hidden" name="join_date" id="join_date_english">
                        </div>
                        <div class="col-md-6 col-sm-12 mt-2">
                            <label for="leaving_date" class="eForm-label">{{ get_phrase('Leaving Date') }}</label>
                            <input type="text" class="form-control eForm-control" id="leaving_date"
                                placeholder="{{ get_phrase('Enter the leaving date') }}" name="leaving_date">
                            <input type="hidden" name="leaving_date" id="leaving_date_english">
                        </div>

                    </div>
                    <div class="row my-3">
                        <div class="col-md-6 col-sm-12 mt-2">
                            <label for="nationality" class="eForm-label">{{ get_phrase('Nationality') }}</label>
                            <select name="nationality" id="nationality"
                                class="form-select eForm-select eChoice-multiple-with-remove">
                                <option value="">{{ get_phrase('Select Nationality') }}</option>
                                @foreach ($nationality as $item)
                                    <option value="{{ $item }}">{{ get_phrase($item) }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 col-sm-12 mt-2">
                            <label for="citizenship_no"
                                class="eForm-label form-label">{{ get_phrase('Citizenship No') }}</label>
                            <input type="text" class="form-control eForm-control" id="citizenship_no"
                                name="citizenship_no" placeholder="Enter Citizenship No">
                        </div>
                        @php $districts = district_list(); @endphp
                        <div class="col-md-6 col-sm-12 mt-2">
                            <label for="issuing_district"
                                class="eForm-label">{{ get_phrase('Issuing District') }}</label>
                            <select name="issuing_district" id="issuing_district"
                                class="form-select eForm-select eChoice-multiple-with-remove">
                                <option value="">{{ get_phrase('Select Issuing District') }}</option>
                                @foreach ($districts as $key => $value)
                                    <option value="{{ $key }}">{{ $value }}</option>
                                @endforeach

                            </select>
                        </div>
                        <div class="col-md-6 col-sm-12 mt-2">
                            <label for="dob"
                                class="eForm-label form-label">{{ get_phrase('Date of Birth') }}</label>
                            <input type="text" class="form-control eForm-control" id="dob" data-single="true"
                                placeholder="{{ get_phrase('Enter Date of Birth') }}">
                            <input type="hidden" id="dob_english" name="dob">
                        </div>
                    </div>
                    <div class="row my-3">

                        <div class="col-md-6 col-sm-12 mt-2">
                            <label for="father_name" class="eForm-label">{{ get_phrase('Father Name') }}</label>
                            <input type="text" class="form-control eForm-control" id="father_name"
                                name="father_name">
                        </div>
                        <div class="col-md-6 col-sm-12 mt-2">
                            <label for="mother_name" class="eForm-label">{{ get_phrase('Mother Name') }}</label>
                            <input type="text" class="form-control eForm-control" id="mother_name"
                                name="mother_name">
                        </div>
                        <div class="col-md-6 col-sm-12 mt-2">
                            <label for="marital_status" class="eForm-label">{{ get_phrase('Marital Status') }}</label>
                            <select name="marital_status" id="marital_status"
                                class="form-select eForm-select eChoice-multiple-with-remove">
                                <option value="">{{ get_phrase('Select Marital Status') }}</option>
                                @foreach ($marital_status as $item)
                                    <option value="{{ $item }}">{{ get_phrase($item) }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 col-sm-12 mt-2">
                            <label for="spouse_name" class="eForm-label">{{ get_phrase('Spouse Name') }}</label>
                            <input type="text" class="form-control eForm-control" id="spouse_name"
                                name="spouse_name">
                        </div>
                        <div class="col-md-6 col-sm-12 mt-2">
                            <label for="will_person" class="eForm-label">{{ get_phrase('Will Person Name') }}</label>
                            <input type="text" class="form-control eForm-control" id="will_person"
                                name="will_person">
                        </div>

                    </div>
                    <div class="row my-3">
                        <div class="col-md-6 col-sm-12 mt-2">
                            <label for="caste" class="form-label eForm-label">{{ get_phrase('Caste') }}</label>
                            <select name="caste" id="caste"
                                class="form-select eForm-select eChoice-multiple-with-remove">
                                <option value="">{{ get_phrase('Select caste') }}</option>
                                @foreach ($caste as $item)
                                    <option value="{{ $item }}">{{ ucfirst($item) }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-6 col-sm-12 mt-2">
                            <label for="mother_tongue" class="eForm-label">{{ get_phrase('Mother Tongue') }}</label>
                            <select name="mother_tongue" id="mother_tongue"
                                class="form-select eForm-select eChoice-multiple-with-remove">
                                <option value="">{{ get_phrase('Select Mother Tongue') }}</option>
                                @foreach ($mother_tongue as $item)
                                    <option value="{{ $item }}">{{ get_phrase($item) }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-6 col-sm-12 mt-2">
                            <label for="disability" class="form-label eForm-label">{{ get_phrase('Disability') }}</label>
                            <select name="disability" id="disability"
                                class="form-select eForm-select eChoice-multiple-with-remove">
                                <option value="">{{ get_phrase('Select disability type') }}</option>
                                @foreach ($disability as $item)
                                    <option value="{{ $item }}">{{ ucfirst($item) }}</option>
                                @endforeach
                            </select>
                        </div>

                    </div>
                    <div class="row my-3">
                        <div class="col-md-6 col-sm-12 mt-2">
                            <label for="address" class="eForm-label">{{ get_phrase('Address') }}</label>
                            <input class="form-control eForm-control" id="address" name="address"
                                placeholder="Provide teacher address">
                        </div>
                        <div class="col-md-6 col-sm-12 mt-2">
                            <label for="phone_number" class="eForm-label">{{ get_phrase('Phone Number') }}</label>
                            <input type="text" class="form-control eForm-control" id="phone_number"
                                name="phone_number">
                        </div>

                        <div class="col-md-6 col-sm-12 mt-2">
                            <label for="email" class="eForm-label form-label">{{ get_phrase('Email') }}</label>
                            <input type="email" class="form-control eForm-control" id="email" name="email">
                        </div>

                        <div class="col-md-6 col-sm-12 mt-2">
                            <label for="formFile" class="eForm-label">{{ get_phrase('Photo') }}</label>
                            <input class="form-control eForm-control-file" id="photo" name="photo"
                                accept="image/*" type="file" />
                        </div>
                    </div>


                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-12 mt-2">
                        <button class="btn-form" type="submit">{{ get_phrase('Create') }}</button>
                    </div>
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
        $(document).ready(function() {
            $(".eChoice-multiple-with-remove").select2();
            $('#additional_details_checkbox').click(function() {
                if ($(this).is(':checked')) {
                    $('#additional_details').removeClass('d-none');
                } else {
                    $('#additional_details').addClass('d-none');
                }
            });
            $('#dob').nepaliDatePicker({
                dateFormat: "%y-%m-%d",
                closeOnDateSelect: true
            });
            $('#join_date').nepaliDatePicker({
                dateFormat: "%y-%m-%d",
                closeOnDateSelect: true
            });
            $('#leaving_date').nepaliDatePicker({
                dateFormat: "%y-%m-%d",
                closeOnDateSelect: true
            });


            $("#dob").on("dateSelect", function(event) {
                var nepaliDate = event.datePickerData.formattedDate;
                var formattedDate = nepaliBStoEnglish(nepaliDate);
                $('#dob_english').val(formattedDate);
            });
            $("#join_date").on("dateSelect", function(event) {
                var nepaliDate = event.datePickerData.formattedDate;
                var formattedDate = nepaliBStoEnglish(nepaliDate);
                $('#join_date_english').val(formattedDate);
            });
            $("#leaving_date").on("dateSelect", function(event) {
                var nepaliDate = event.datePickerData.formattedDate;
                var formattedDate = nepaliBStoEnglish(nepaliDate);
                $('#leaving_date_english').val(formattedDate);
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

        function nepaliBStoEnglish(nepaliDate) {
            var [nepaliYear, nepaliMonth, nepaliDay] = nepaliDate.split('-').map(calendarFunctions
                .getNumberByNepaliNumber);
            var date = new Date(nepaliYear, nepaliMonth - 1, nepaliDay);
            var year = date.getFullYear(); // get the year (yyyy)
            var month = String(date.getMonth() + 1).padStart(2, '0'); // get the month (mm)
            var day = String(date.getDate()).padStart(2, '0'); // get the day (dd)
            return `${year}-${month}-${day}`;
        }
    </script>
@endsection
