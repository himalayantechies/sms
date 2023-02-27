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
                        <h4>{{ get_phrase('Edit Teacher') }}</h4>
                        <ul class="d-flex align-items-center eBreadcrumb-2">
                            <li><a href="#">{{ get_phrase('Home') }}</a></li>
                            <li><a href="#">{{ get_phrase('Users') }}</a></li>
                            <li><a href="#">{{ get_phrase('Teacher') }}</a></li>
                            <li><a href="#">{{ get_phrase('Edit Teacher') }}</a></li>
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
            action="{{ route('admin.teacher.update', ['id' => $user->id]) }}">
            @csrf
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12 mt-2">
                        <label for="name" class="eForm-label form-label">{{ get_phrase('Name') }}*</label>
                        <input type="text" class="form-control eForm-control" id="name" name="name" required
                            value="{{ $user->name }}">
                    </div>
                    <div class="col-md-6 col-sm-12 mt-2">
                        <label for="gender" class="eForm-label">{{ get_phrase('Gender') }}*</label>
                        <select name="gender" id="gender" class="form-select eForm-select eChoice-multiple-with-remove"
                            required>
                            <option value="">{{ get_phrase('Select gender') }}</option>
                            @foreach ($gender as $item)
                                <option value="{{ $item }}" {{ $user->gender == $item ? 'selected' : '' }}>
                                    {{ get_phrase($item) }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 col-sm-12 mt-2">
                        <label for="mobile_number" class="eForm-label">{{ get_phrase('Mobile Number') }}*</label>
                        <input type="text" class="form-control eForm-control" id="mobile_number"
                            value="{{ $user->mobile_number }}" name="mobile_number" required>
                    </div>
                    <div class="col-md-6 col-sm-12 mt-2">
                        <label for="teacher_type" class="eForm-label">{{ get_phrase('Teacher Type') }}</label>
                        <select name="teacher_type" id="teacher_type"
                            class="form-select eForm-select eChoice-multiple-with-remove">
                            <option value="">{{ get_phrase('Select teacher type') }}</option>
                            @foreach ($teacher_type as $item)
                                <option value="{{ $item }}" {{ $user->teacher_type == $item ? 'selected' : '' }}>
                                    {{ get_phrase($item) }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-md-6 col-sm-12 mt-2">
                        <label for="code" class="eForm-label form-label">{{ get_phrase('Code') }}</label>
                        <input type="code" class="form-control eForm-control" id="code" name="code"
                            placeholder="Provide teacher code" value="{{ $user->code }}">
                    </div>

                    <div class="col-md-6 col-sm-12 mt-2">
                        <label for="teaching_medium" class="eForm-label">{{ get_phrase('Teaching Medium') }}</label>
                        <select name="teaching_medium" id="teaching_medium"
                            class="form-select eForm-select eChoice-multiple-with-remove">
                            <option value="">{{ get_phrase('Select Teaching Medium') }}</option>
                            @foreach ($teaching_medium as $item)
                                <option value="{{ $item }}"
                                    {{ $user->teaching_medium == $item ? 'selected' : '' }}>
                                    {{ get_phrase($item) }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 col-sm-12 mt-2">
                        <label for="designation" class="eForm-label">{{ get_phrase('Designation') }}</label>
                        <input type="text" class="form-control eForm-control" id="designation"
                            value="{{ $user->designation }}" name="designation">
                    </div>
                    <div class="col-md-6 col-sm-12 mt-2">
                        <label for="responsibility" class="eForm-label">{{ get_phrase('Responsibility') }}</label>
                        <input type="text" class="form-control eForm-control" id="responsibility"
                            value="{{ $user->responsibility }}" name="responsibility">
                    </div>
                    <div class="col-md-6 col-sm-12 mt-2">
                        <label for="join_date" class="eForm-label">{{ get_phrase('Join Date') }}</label>
                        <input type="text" class="form-control eForm-control" id="join_date"
                            value="{{ $user->join_date }}" name="join_date">
                    </div>
                    <div class="col-md-6 col-sm-12 mt-2">
                        <label for="leaving_date" class="eForm-label">{{ get_phrase('Leaving Date') }}</label>
                        <input type="text" class="form-control eForm-control" id="leaving_date"
                            value="{{ $user->leaving_date }}" name="leaving_date">
                    </div>




                </div>
                <div class="row my-3">
                    <div class="col-md-6 col-sm-12 mt-2">
                        <label for="nationality" class="eForm-label">{{ get_phrase('Nationality') }}</label>
                        <select name="nationality" id="nationality"
                            class="form-select eForm-select eChoice-multiple-with-remove">
                            <option value="">{{ get_phrase('Select Nationality') }}</option>

                            @foreach ($nationality as $item)
                                <option value="{{ $item }}" {{ $user->nationality == $item ? 'selected' : '' }}>
                                    {{ get_phrase($item) }}
                                </option>
                            @endforeach

                        </select>
                    </div>
                    <div class="col-md-6 col-sm-12 mt-2">
                        <label for="citizenship_no"
                            class="eForm-label form-label">{{ get_phrase('Citizenship No') }}</label>
                        <input type="text" class="form-control eForm-control" id="citizenship_no"
                            name="citizenship_no" placeholder="Enter Citizenship No"
                            value="{{ $user->citizenship_no }}">
                    </div>
                     @php $districts = district_list(); @endphp
                    <div class="col-md-6 col-sm-12 mt-2">
                        <label for="issuing_district" class="eForm-label">{{ get_phrase('Issuing District') }}</label>
                        <select name="issuing_district" id="issuing_district"
                            class="form-select eForm-select eChoice-multiple-with-remove">
                            <option value="">{{ get_phrase('Select Issuing District') }}</option>
                            @php
                            foreach($districts as $key=>$value){
                            @endphp
                                <option value="{{$key}}" {{ ($user->issuing_district == $key)? 'selected': '' }}>{{ $value }}</option>
                            @php
                            }
                            @endphp
                        </select>
                    </div>
                    <div class="col-md-6 col-sm-12 mt-2">
                        <label for="dob" class="eForm-label form-label">{{ get_phrase('Date of Birth') }}</label>
                        <input type="text" class="form-control eForm-control" id="dob" name="dob"
                            placeholder="Enter Date of Birth" value="{{ $user->dob }}">
                    </div>

                </div>
                <div class="row my-3">
                    <div class="col-md-6 col-sm-12 mt-2">
                        <label for="caste" class="form-label eForm-label">{{ get_phrase('Caste') }}</label>
                        <select name="caste" id="caste"
                            class="form-select eForm-select eChoice-multiple-with-remove">
                            <option value="">{{ get_phrase('Select caste') }}</option>
                            @foreach ($caste as $item)
                                <option value="{{ $item }}" {{ $user->caste == $item ? 'selected' : '' }}>
                                    {{ $item }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 col-sm-12 mt-2">
                        <label for="mother_tongue" class="eForm-label">{{ get_phrase('Mother Tongue') }}</label>
                        <select name="mother_tongue" id="mother_tongue"
                            class="form-select eForm-select eChoice-multiple-with-remove">
                            <option value="">{{ get_phrase('Select Mother Tongue') }}</option>
                            @foreach ($mother_tongue as $item)
                                <option value="{{ $item }}"
                                    {{ $user->mother_tongue == $item ? 'selected' : '' }}>
                                    {{ get_phrase($item) }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-6 col-sm-12 mt-2">
                        <label for="disability" class="form-label eForm-label">{{ get_phrase('Disability') }}</label>
                        <select name="disability" id="disability"
                            class="form-select eForm-select eChoice-multiple-with-remove">
                            <option value="">{{ get_phrase('Select disability type') }}</option>
                            @foreach ($disability as $item)
                                <option value="{{ $item }}" {{ $user->disability == $item ? 'selected' : '' }}>
                                    {{ $item }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row my-3">

                    <div class="col-md-6 col-sm-12 mt-2">
                        <label for="father_name" class="eForm-label">{{ get_phrase('Father Name') }}</label>
                        <input type="text" class="form-control eForm-control" id="father_name"
                            value="{{ $user->father_name }}" name="father_name">
                    </div>
                    <div class="col-md-6 col-sm-12 mt-2">
                        <label for="mother_name" class="eForm-label">{{ get_phrase('Mother Name') }}</label>
                        <input type="text" class="form-control eForm-control" id="mother_name"
                            value="{{ $user->mother_name }}" name="mother_name">
                    </div>
                    <div class="col-md-6 col-sm-12 mt-2">
                        <label for="spouse_name" class="eForm-label">{{ get_phrase('Spouse Name') }}</label>
                        <input type="text" class="form-control eForm-control" id="spouse_name"
                            value="{{ $user->spouse_name }}" name="spouse_name">


                        <div class="col-md-6 col-sm-12 mt-2">
                            <label for="marital_status" class="eForm-label">{{ get_phrase('Marital Status') }}</label>
                            <select name="marital_status" id="marital_status"
                                class="form-select eForm-select eChoice-multiple-with-remove">
                                <option value="">{{ get_phrase('Select Marital Status') }}</option>
                                @foreach ($marital_status as $item)
                                    <option value="{{ $item }}"
                                        {{ $user->marital_status == $item ? 'selected' : '' }}>
                                        {{ get_phrase($item) }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 mt-2">
                        <label for="will_person" class="eForm-label">{{ get_phrase('Will Person Name') }}</label>
                        <input type="text" class="form-control eForm-control" id="will_person"
                            value="{{ $user->will_person }}" name="will_person">
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-md-6 col-sm-12 mt-2">
                        <label for="address" class="eForm-label">{{ get_phrase('Address') }}</label>
                        <input class="form-control eForm-control" id="address" name="address"
                            value="{{ $user->address }}" placeholder="Provide teacher address">
                    </div>
                    <div class="col-md-6 col-sm-12 mt-2">
                        <label for="phone_number" class="eForm-label">{{ get_phrase('Phone Number') }}</label>
                        <input type="text" class="form-control eForm-control" id="phone_number"
                            value="{{ $user->phone_number }}" name="phone_number">
                    </div>

                    <div class="col-md-6 col-sm-12 mt-2">
                        <label for="email" class="eForm-label form-label">{{ get_phrase('Email') }}</label>
                        <input type="email" class="form-control eForm-control" id="email"
                            value="{{ $user->email }}" name="email">
                    </div>
                    <div class="col-md-6 col-sm-12 mt-2">
                        <label for="formFile" class="eForm-label">{{ get_phrase('Photo') }}</label>
                        @if ($user->photo != null)
                            <div>
                                <a href="{{ url('public/assets/uploads/user-images/' . $user->photo) }}" target="blank">
                                    <img src="{{ asset('public/assets/uploads/user-images/' . $user->photo) }}"
                                        height="80em" class="m-4" />
                                </a>
                            </div>
                        @endif
                        <input type="hidden" name="photo" value=" {{ $user->photo }}">
                        <input class="form-control eForm-control-file" id="photo" name="photo"
                            value="{{ $user->photo }}" accept="image/*" type="file" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-12 mt-2">
                        <button class="btn-form" type="submit">{{ get_phrase('Update') }}</button>
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
            $('#dob').nepaliDatePicker({
                dateFormat: "%y-%m-%d",
                closeOnDateSelect: true
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
    </script>
@endsection
