@extends('admin.navigation')

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
                        <label for="name" class="eForm-label form-label">{{ get_phrase('Name') }}</label>
                        <input type="text" class="form-control eForm-control" id="name" name="name" required>
                    </div>
                    <div class="col-md-6 col-sm-12 mt-2">
                        <label for="code" class="eForm-label form-label">{{ get_phrase('Code') }}</label>
                        <input type="code" class="form-control eForm-control" id="code" name="code"
                            placeholder="Provide teacher code" required>
                    </div>
                    <div class="col-md-6 col-sm-12 mt-2">
                        <label for="gender" class="eForm-label">{{ get_phrase('Gender') }}</label>
                        <select name="gender" id="gender" class="form-select eForm-select eChoice-multiple-with-remove"
                            required>
                            <option value="">{{ get_phrase('Select gender') }}</option>
                            <option value="Male">{{ get_phrase('Male') }}</option>
                            <option value="Female">{{ get_phrase('Female') }}</option>
                            <option value="Others">{{ get_phrase('Others') }}</option>
                        </select>
                    </div>
                    <div class="col-md-6 col-sm-12 mt-2">
                        <label for="nationality" class="eForm-label">{{ get_phrase('Nationality') }}</label>
                        <select name="nationality" id="nationality"
                            class="form-select eForm-select eChoice-multiple-with-remove" required>
                            <option value="">{{ get_phrase('Select Nationality') }}</option>
                            <option value="Nepali">{{ get_phrase('Nepali') }}</option>
                            <option value="Indian">{{ get_phrase('Indian') }}</option>
                            <option value="Others">{{ get_phrase('Others') }}</option>
                        </select>
                    </div>
                    <div class="col-md-6 col-sm-12 mt-2">
                        <label for="teacher_type" class="eForm-label">{{ get_phrase('Teacher Type') }}</label>
                        <select name="teacher_type" id="teacher_type"
                            class="form-select eForm-select eChoice-multiple-with-remove" required>
                            <option value="">{{ get_phrase('Select teacher type') }}</option>
                            <option value="full-time">{{ get_phrase('Full Time') }}</option>
                            <option value="part-time">{{ get_phrase('Part Time') }}</option>
                        </select>
                    </div>
                    <div class="col-md-6 col-sm-12 mt-2">
                        <label for="marital_status" class="eForm-label">{{ get_phrase('Marital Status') }}</label>
                        <select name="marital_status" id="marital_status"
                            class="form-select eForm-select eChoice-multiple-with-remove" required>
                            <option value="">{{ get_phrase('Select Marital Status') }}</option>
                            <option value="single">{{ get_phrase('Single') }}</option>
                            <option value="married">{{ get_phrase('Married') }}</option>
                            <option value="divorced">{{ get_phrase('Divorced') }}</option>
                        </select>
                    </div>
                    <div class="col-md-6 col-sm-12 mt-2">
                        <label for="citizenship_no"
                            class="eForm-label form-label">{{ get_phrase('Citizenship No') }}</label>
                        <input type="text" class="form-control eForm-control" id="citizenship_no" name="citizenship_no"
                            placeholder="Enter Citizenship No" required>
                    </div>
                    <div class="col-md-6 col-sm-12 mt-2">
                        <label for="issuing_district" class="eForm-label">{{ get_phrase('Issuing District') }}</label>
                        <select name="issuing_district" id="issuing_district"
                            class="form-select eForm-select eChoice-multiple-with-remove">
                            <option value="">{{ get_phrase('Select Issuing District') }}</option>
                        </select>
                    </div>
                    <div class="col-md-6 col-sm-12 mt-2">
                        <label for="dob" class="eForm-label form-label">{{ get_phrase('Date of Birth') }}</label>
                        <input type="text" class="form-control eForm-control" id="dob" name="dob"
                            placeholder="Enter Date of Birth" required>
                    </div>
                    <div class="col-md-6 col-sm-12 mt-2">
                        <label for="teaching_medium" class="eForm-label">{{ get_phrase('Teaching Medium') }}</label>
                        <select name="teaching_medium" id="teaching_medium"
                            class="form-select eForm-select eChoice-multiple-with-remove" required>
                            <option value="">{{ get_phrase('Select Teaching Medium') }}</option>
                            <option value="nepali">{{ get_phrase('Nepali') }}</option>
                            <option value="english">{{ get_phrase('English') }}</option>
                            <option value="nepal bhasa">{{ get_phrase('Nepal Bhasa') }}</option>
                            <option value="hindi">{{ get_phrase('Hindi') }}</option>
                            <option value="maithali">{{ get_phrase('Maithali') }}</option>
                            <option value="bhojpuri">{{ get_phrase('Bhojpuri') }}</option>
                            <option value="tamang">{{ get_phrase('Tamang') }}</option>
                            <option value="sanskrit">{{ get_phrase('Sanskrit') }}</option>
                        </select>
                    </div>
                    <div class="col-md-6 col-sm-12 mt-2">
                        <label for="mother_tongue" class="eForm-label">{{ get_phrase('Mother Tongue') }}</label>
                        <select name="mother_tongue" id="mother_tongue"
                            class="form-select eForm-select eChoice-multiple-with-remove" required>
                            <option value="">{{ get_phrase('Select Mother Tongue') }}</option>
                            <option value="nepali">{{ get_phrase('Nepali') }}</option>
                            <option value="english">{{ get_phrase('English') }}</option>
                            <option value="nepal bhasa">{{ get_phrase('Nepal Bhasa') }}</option>
                            <option value="hindi">{{ get_phrase('Hindi') }}</option>
                            <option value="maithali">{{ get_phrase('Maithali') }}</option>
                            <option value="bhojpuri">{{ get_phrase('Bhojpuri') }}</option>
                            <option value="tamang">{{ get_phrase('Tamang') }}</option>
                            <option value="sanskrit">{{ get_phrase('Sanskrit') }}</option>
                        </select>
                    </div>
                    <div class="col-md-6 col-sm-12 mt-2">
                        <label for="caste" class="form-label eForm-label">{{ get_phrase('Caste') }}</label>
                        <select name="caste" id="caste"
                            class="form-select eForm-select eChoice-multiple-with-remove" required>
                            <option value="">{{ get_phrase('Select caste') }}</option>
                            @foreach ($caste as $item)
                                <option value="{{ $item }}">{{ $item }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 col-sm-12 mt-2">
                        <label for="disability" class="form-label eForm-label">{{ get_phrase('Disability') }}</label>
                        <select name="disability" id="disability"
                            class="form-select eForm-select eChoice-multiple-with-remove" required>
                            <option value="">{{ get_phrase('Select disability type') }}</option>
                            @foreach ($disability as $item)
                                <option value="{{ $item }}">{{ $item }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 col-sm-12 mt-2">
                        <label for="designation" class="eForm-label">{{ get_phrase('Designation') }}</label>
                        <input type="text" class="form-control eForm-control" id="designation" name="designation"
                            required>
                    </div>
                    <div class="col-md-6 col-sm-12 mt-2">
                        <label for="responsibility" class="eForm-label">{{ get_phrase('Responsibility') }}</label>
                        <input type="text" class="form-control eForm-control" id="responsibility"
                            name="responsibility" required>
                    </div>
                    <div class="col-md-6 col-sm-12 mt-2">
                        <label for="join_date" class="eForm-label">{{ get_phrase('Join Date') }}</label>
                        <input type="text" class="form-control eForm-control" id="join_date" name="join_date"
                            required>
                    </div>
                    <div class="col-md-6 col-sm-12 mt-2">
                        <label for="leaving_date" class="eForm-label">{{ get_phrase('Leaving Date') }}</label>
                        <input type="text" class="form-control eForm-control" id="leaving_date" name="leaving_date"
                            required>
                    </div>
                    <div class="col-md-6 col-sm-12 mt-2">
                        <label for="father_name" class="eForm-label">{{ get_phrase('Father Name') }}</label>
                        <input type="text" class="form-control eForm-control" id="father_name" name="father_name"
                            required>
                    </div>
                    <div class="col-md-6 col-sm-12 mt-2">
                        <label for="mother_name" class="eForm-label">{{ get_phrase('Mother Name') }}</label>
                        <input type="text" class="form-control eForm-control" id="mother_name" name="mother_name"
                            required>
                    </div>
                    <div class="col-md-6 col-sm-12 mt-2">
                        <label for="spouse_name" class="eForm-label">{{ get_phrase('Spouse Name') }}</label>
                        <input type="text" class="form-control eForm-control" id="spouse_name" name="spouse_name"
                            required>
                    </div>
                    <div class="col-md-6 col-sm-12 mt-2">
                        <label for="will_person" class="eForm-label">{{ get_phrase('Will Person Name') }}</label>
                        <input type="text" class="form-control eForm-control" id="will_person" name="will_person"
                            required>
                    </div>
                    <div class="col-md-6 col-sm-12 mt-2">
                        <label for="address" class="eForm-label">{{ get_phrase('Address') }}</label>
                        <input class="form-control eForm-control" id="address" name="address"
                            placeholder="Provide teacher address" required>
                    </div>
                    <div class="col-md-6 col-sm-12 mt-2">
                        <label for="phone_number" class="eForm-label">{{ get_phrase('Phone Number') }}</label>
                        <input type="text" class="form-control eForm-control" id="phone_number" name="phone_number"
                            required>
                    </div>
                    <div class="col-md-6 col-sm-12 mt-2">
                        <label for="mobile_number" class="eForm-label">{{ get_phrase('Mobile Number') }}</label>
                        <input type="text" class="form-control eForm-control" id="mobile_number" name="mobile_number"
                            required>
                    </div>
                    <div class="col-md-6 col-sm-12 mt-2">
                        <label for="email" class="eForm-label form-label">{{ get_phrase('Email') }}</label>
                        <input type="email" class="form-control eForm-control" id="email" name="email" required>
                    </div>
                    <div class="col-md-6 col-sm-12 mt-2">
                        <label for="password" class="eForm-label form-label">{{ get_phrase('Password') }}</label>
                        <input type="password" class="form-control eForm-control" id="password" name="password"
                            placeholder="Provide teacher password" required>
                    </div>
                    <div class="col-md-6 col-sm-12 mt-2">
                        <label for="formFile" class="eForm-label">{{ get_phrase('Photo') }}</label>
                        <input class="form-control eForm-control-file" id="photo" name="photo" accept="image/*"
                            type="file" />
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
    <script type="text/javascript">
        "use strict";
        $(document).ready(function() {
            $(".eChoice-multiple-with-remove").select2();
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
    </script>
@endsection
