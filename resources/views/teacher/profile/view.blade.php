@extends('teacher.navigation')

@section('content')
    <!-- Start User Profile area -->
    <div class="user-profile-area d-flex flex-wrap">
        <!-- Left side -->
        <div class="user-info d-flex flex-column">
            <div class="user-info-basic d-flex flex-column justify-content-center">
                <div class="user-graphic-element-1">
                    <img src="{{ asset('public/assets/images/sprial_1.png') }}" alt="" />
                </div>
                <div class="user-graphic-element-2">
                    <img src="{{ asset('public/assets/images/polygon_1.png') }}" alt="" />
                </div>
                <div class="user-graphic-element-3">
                    <img src="{{ asset('public/assets/images/circle_1.png') }}" alt="" />
                </div>
                <div class="userImg">
                    <img width="100%" src="{{ get_user_image($user->id) }}" alt="" />
                </div>
                <div class="userContent text-center">
                    <h4 class="title">{{ $user->name }}</h4>
                    <p class="info">{{ get_phrase('Teacher') }}</p>
                    <p class="user-status-verify">{{ get_phrase('Verified') }}</p>
                </div>
            </div>
            <div class="user-info-edit">
                <div class="user-edit-title d-flex justify-content-between align-items-center">
                    <h3 class="title">{{ get_phrase('Details info') }}</h3>
                </div>
                <div class="user-info-edit-items">
                    <div class="item">
                        <p class="title">{{ get_phrase('Email') }}</p>
                        <p class="info">{{ $user->email }}</p>
                    </div>
                    <div class="item">
                        <p class="title">{{ get_phrase('Phone Number') }}</p>
                        <p class="info">{{ json_decode($user->user_information, true)['phone'] }}</p>
                    </div>
                    <div class="item">
                        <p class="title">{{ get_phrase('Address') }}</p>
                        <p class="info">
                            {{ json_decode($user->user_information, true)['address'] }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Right side -->
        <div class="user-details-info">

            <!-- Tab content -->
            <div class="tab-content eNav-Tabs-content" id="myTabContent">
                <div class="tab-pane fade show active" id="basicInfo" role="tabpanel" aria-labelledby="basicInfo-tab">
                    <div class="eForm-layouts">
                        <form action="{{ route('teacher.profile.update') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <input type="hidden" class="form-control eForm-control" id="teacher_id" name="teacher_id"
                                        required value="{{ $user->teacher_id }}">
                                <div class="col-md-6 col-sm-12 mt-2">
                                    <label for="username"
                                        class="eForm-label form-label">{{ get_phrase('Username') }}*</label>
                                    <input type="text" class="form-control eForm-control" id="username" name="username"
                                        required value="{{ $user->username }}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-12 mt-2">
                                    <label for="name" class="eForm-label form-label">{{ get_phrase('Name') }}*</label>
                                    <input type="text" class="form-control eForm-control" id="name" name="name"
                                        required value="{{ $user->name }}">
                                </div>
                                <div class="col-md-6 col-sm-12 mt-2">
                                    <label for="code" class="eForm-label form-label">{{ get_phrase('Code') }}</label>
                                    <input type="code" class="form-control eForm-control" id="code" name="code"
                                        placeholder="Provide teacher code" value="{{ $user->code }}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-12 mt-2">
                                    <label for="gender" class="eForm-label">{{ get_phrase('Gender') }}</label>
                                    <select name="gender" id="gender"
                                        class="form-select eForm-select eChoice-multiple-with-remove">
                                        <option value="">{{ get_phrase('Select gender') }}</option>
                                        @foreach ($gender as $item)
                                            <option value="{{ $item }}"
                                                {{ $user->gender == $item ? 'selected' : '' }}>
                                                {{ get_phrase($item) }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6 col-sm-12 mt-2">
                                    <label for="nationality" class="eForm-label">{{ get_phrase('Nationality') }}</label>
                                    <select name="nationality" id="nationality"
                                        class="form-select eForm-select eChoice-multiple-with-remove">
                                        <option value="">{{ get_phrase('Select Nationality') }}</option>

                                        @foreach ($nationality as $item)
                                            <option value="{{ $item }}"
                                                {{ $user->nationality == $item ? 'selected' : '' }}>
                                                {{ get_phrase($item) }}
                                            </option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-12 mt-2">
                                    <label for="teacher_type" class="eForm-label">{{ get_phrase('Teacher Type') }}</label>
                                    <select name="teacher_type" id="teacher_type"
                                        class="form-select eForm-select eChoice-multiple-with-remove">
                                        <option value="">{{ get_phrase('Select teacher type') }}</option>
                                        @foreach ($teacher_type as $item)
                                            <option value="{{ $item }}"
                                                {{ $user->teacher_type == $item ? 'selected' : '' }}>
                                                {{ get_phrase($item) }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6 col-sm-12 mt-2">
                                    <label for="marital_status"
                                        class="eForm-label">{{ get_phrase('Marital Status') }}</label>
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
                            <div class="row">
                                <div class="col-md-6 col-sm-12 mt-2">
                                    <label for="citizenship_no"
                                        class="eForm-label form-label">{{ get_phrase('Citizenship No') }}</label>
                                    <input type="text" class="form-control eForm-control" id="citizenship_no"
                                        name="citizenship_no" placeholder="Enter Citizenship No"
                                        value="{{ $user->citizenship_no }}">
                                </div>
                                <div class="col-md-6 col-sm-12 mt-2">
                                    <label for="issuing_district"
                                        class="eForm-label">{{ get_phrase('Issuing District') }}</label>
                                    <select name="issuing_district" id="issuing_district"
                                        class="form-select eForm-select eChoice-multiple-with-remove">
                                        <option value="">{{ get_phrase('Select Issuing District') }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">


                                <div class="col-md-6 col-sm-12 mt-2">
                                    <label for="dob"
                                        class="eForm-label form-label">{{ get_phrase('Date of Birth') }}</label>
                                    <input type="text" class="form-control eForm-control" id="dob"
                                        name="dob" placeholder="Enter Date of Birth" value="{{ $user->dob }}">
                                </div>
                                <div class="col-md-6 col-sm-12 mt-2">
                                    <label for="teaching_medium"
                                        class="eForm-label">{{ get_phrase('Teaching Medium') }}</label>
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
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-12 mt-2">
                                    <label for="mother_tongue"
                                        class="eForm-label">{{ get_phrase('Mother Tongue') }}</label>
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
                                    <label for="caste"
                                        class="form-label eForm-label">{{ get_phrase('Caste') }}</label>
                                    <select name="caste" id="caste"
                                        class="form-select eForm-select eChoice-multiple-with-remove">
                                        <option value="">{{ get_phrase('Select caste') }}</option>
                                        @foreach ($caste as $item)
                                            <option value="{{ $item }}"
                                                {{ $user->caste == $item ? 'selected' : '' }}>
                                                {{ $item }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-12 mt-2">
                                    <label for="disability"
                                        class="form-label eForm-label">{{ get_phrase('Disability') }}</label>
                                    <select name="disability" id="disability"
                                        class="form-select eForm-select eChoice-multiple-with-remove">
                                        <option value="">{{ get_phrase('Select disability type') }}</option>
                                        @foreach ($disability as $item)
                                            <option value="{{ $item }}"
                                                {{ $user->disability == $item ? 'selected' : '' }}>
                                                {{ $item }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6 col-sm-12 mt-2">
                                    <label for="designation" class="eForm-label">{{ get_phrase('Designation') }}</label>
                                    <input type="text" class="form-control eForm-control" id="designation"
                                        value="{{ $user->designation }}" name="designation">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-12 mt-2">
                                    <label for="responsibility"
                                        class="eForm-label">{{ get_phrase('Responsibility') }}</label>
                                    <input type="text" class="form-control eForm-control" id="responsibility"
                                        value="{{ $user->responsibility }}" name="responsibility">
                                </div>
                                <div class="col-md-6 col-sm-12 mt-2">
                                    <label for="join_date" class="eForm-label">{{ get_phrase('Join Date') }}</label>
                                    <input type="text" class="form-control eForm-control" id="join_date"
                                        value="{{ $user->join_date }}" name="join_date">
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-6 col-sm-12 mt-2">
                                    <label for="leaving_date"
                                        class="eForm-label">{{ get_phrase('Leaving Date') }}</label>
                                    <input type="text" class="form-control eForm-control" id="leaving_date"
                                        value="{{ $user->leaving_date }}" name="leaving_date">
                                </div>
                                <div class="col-md-6 col-sm-12 mt-2">
                                    <label for="father_name" class="eForm-label">{{ get_phrase('Father Name') }}</label>
                                    <input type="text" class="form-control eForm-control" id="father_name"
                                        value="{{ $user->father_name }}" name="father_name">
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-6 col-sm-12 mt-2">
                                    <label for="mother_name" class="eForm-label">{{ get_phrase('Mother Name') }}</label>
                                    <input type="text" class="form-control eForm-control" id="mother_name"
                                        value="{{ $user->mother_name }}" name="mother_name">
                                </div>
                                <div class="col-md-6 col-sm-12 mt-2">
                                    <label for="spouse_name" class="eForm-label">{{ get_phrase('Spouse Name') }}</label>
                                    <input type="text" class="form-control eForm-control" id="spouse_name"
                                        value="{{ $user->spouse_name }}" name="spouse_name">
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-6 col-sm-12 mt-2">
                                    <label for="will_person"
                                        class="eForm-label">{{ get_phrase('Will Person Name') }}</label>
                                    <input type="text" class="form-control eForm-control" id="will_person"
                                        value="{{ $user->will_person }}" name="will_person">
                                </div>
                                <div class="col-md-6 col-sm-12 mt-2">
                                    <label for="address" class="eForm-label">{{ get_phrase('Address') }}</label>
                                    <input class="form-control eForm-control" id="address" name="address"
                                        value="{{ $user->address }}" placeholder="Provide teacher address">
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-6 col-sm-12 mt-2">
                                    <label for="phone_number"
                                        class="eForm-label">{{ get_phrase('Phone Number') }}</label>
                                    <input type="text" class="form-control eForm-control" id="phone_number"
                                        value="{{ $user->phone_number }}" name="phone_number">
                                </div>
                                <div class="col-md-6 col-sm-12 mt-2">
                                    <label for="mobile_number"
                                        class="eForm-label">{{ get_phrase('Mobile Number') }}*</label>
                                    <input type="text" class="form-control eForm-control" id="mobile_number"
                                        value="{{ $user->mobile_number }}" name="mobile_number" required>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-6 col-sm-12 mt-2">
                                    <label for="email"
                                        class="eForm-label form-label">{{ get_phrase('Email') }}</label>
                                    <input type="email" class="form-control eForm-control" id="email"
                                        value="{{ $user->email }}" name="email">
                                </div>
                                <div class="col-md-6 col-sm-12 mt-2">
                                    <label for="password"
                                        class="form-label col-eForm-label">{{ get_phrase('Change password') }}</label>
                                    <input type="checkbox" class="form-check-input mx-3" id="change_password"
                                        name="change_password">
                                    <span id="enable_change_password">
                                    </span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-12 mt-2">
                                    <label for="formFile" class="eForm-label">{{ get_phrase('Photo') }}</label>
                                    @if ($user->photo != null)
                                        <div>
                                            <a href="{{ url('public/assets/uploads/user-images/' . $user->photo) }}"
                                                target="blank">
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
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End User Profile area -->
@endsection
