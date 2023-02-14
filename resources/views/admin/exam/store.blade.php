@extends('admin.navigation')
@section('styles')
@endsection
@section('content')
    <div class="mainSection-title">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center flex-wrap gr-15">
                    <div class="d-flex flex-column">
                        <h4>{{ get_phrase('Exam Category') }}</h4>
                        <ul class="d-flex align-items-center eBreadcrumb-2">
                            <li><a href="#">{{ get_phrase('Home') }}</a></li>
                            <li><a href="#">{{ get_phrase('Examination') }}</a></li>
                            <li><a href="#">{{ get_phrase('Exam') }}</a></li>
                            <li><a href="#">{{ get_phrase('Add Exam') }}</a></li>
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
                                {{ get_phrase('Add Exam') }}
                                <span></span>
                            </button>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="custom-card p-30">
        <form action="{{ route('exam.store') }}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-6 col-sm-12 mt-2">
                    <label for="exam_category_id" class="form-label eForm-label">{{ get_phrase('Exam Category') }}*</label>
                    <select name="exam_category_id" id="exam_category_id"
                        class="form-select eForm-select eChoice-multiple-with-remove"required>
                        <option value="">Select exam category</option>
                        @foreach ($exam_categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6 mt-2">
                    <label for="section_id" class="form-label eForm-label">{{ get_phrase('Name') }}*</label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                        name="name" value="{{ old('name') }}" required autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-md-6 col-sm-12 mt-2">
                    <label for="class_id" class="form-label eForm-label">{{ get_phrase('Class') }}*</label>
                    <select name="class_id" id="class_id" class="form-select eForm-select eChoice-multiple-with-remove"
                        onchange="classWiseSection(this.value)" required>
                        <option value="">Select a class</option>
                        @foreach ($classes as $class)
                            <option value="{{ $class->id }}">{{ $class->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-6 col-sm-12 mt-2">
                    <label for="section_id" class="form-label eForm-label">{{ get_phrase('Section') }}*</label>
                    <select name="section_id" id="section_id" class="form-select eForm-select eChoice-multiple-with-remove"
                        required>
                        <option value="">{{ get_phrase('Select section') }}</option>
                    </select>
                </div>

                <div class="col-md-6 mt-2">
                    <label for="starting_time" class="form-label eForm-label">{{ get_phrase('Starting Time') }}*</label>
                    <input id="starting_time" type="datetime-local"
                        class="form-control @error('starting_time') is-invalid @enderror" name="starting_time"
                        value="{{ old('starting_time') }}" required autofocus>

                    @error('starting_time')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-md-6 mt-2">
                    <label for="ending_time" class="form-label eForm-label">{{ get_phrase('Ending Time') }}*</label>
                    <input id="ending_time" type="datetime-local"
                        class="form-control @error('ending_time') is-invalid @enderror" name="ending_time"
                        value="{{ old('ending_time') }}" required autofocus>

                    @error('ending_time')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-md-6 mt-2">
                    <label for="weightage" class="form-label eForm-label">{{ get_phrase('Weightage') }}*</label>
                    <input id="weightage" type="text" class="form-control @error('weightage') is-invalid @enderror"
                        name="weightage" value="{{ old('weightage') }}" required autofocus>

                    @error('weightage')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-md-6 mt-2">
                    <label for="status" class="form-label eForm-label">{{ get_phrase('Status') }}*</label>
                    <select name="status" id="status" class="form-select eForm-select eChoice-multiple-with-remove"
                        required>
                        <option value="0">Inactive</option>
                        <option value="1">Active</option>
                    </select>
                </div>
            </div>
            <div class="form-group row mt-4">
                <label for="parent" class="form-label eForm-label">{{ get_phrase('Parent Exam') }}*</label>
                <div class="col-md-6">
                    <div class="card-body">
                        <div class="mx-auto">
                            <div>
                                <label for="parent" class="form-label eForm-label">Parent Exam</label>
                                <input type="checkbox" value="none" id="default-checkbox" name="parent"
                                    class="exam-list">
                                @include('admin.exam.exam')
                            </div>
                        </div>
                    </div>
                    @error('parent')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Save exam') }}
                    </button>
                </div>
            </div>
        </form>

    </div>
@endsection
@section('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function classWiseSection(classId) {
            let url = "{{ route('admin.class_wise_sections', ['id' => ':classId']) }}";
            url = url.replace(":classId", classId);
            $.ajax({
                url: url,
                success: function(response) {
                    $('#section_id').html(response);
                }
            });
        }
        $(document).ready(function() {
            // Add click event listener to each toggle button
            $('.exam-toggle').click(function() {
                // Toggle the visibility of the sublist
                $(this).closest('.exam-item').find('.exam-sublist').slideToggle();
                // Toggle the collapsed class of the toggle button
                $(this).toggleClass('exam-toggle-collapsed');
            });
        });
    </script>
@endsection
