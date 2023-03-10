@extends('admin.navigation')
@section('styles')
    .configure-exam-card{
    background-color:#f1f1f1;
    }
    .bg-info-subtle{
    background-color:#32c5d2 !important;
    }
@endsection

@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <div class="mainSection-title">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center flex-wrap gr-15">
                    <div class="d-flex flex-column">
                        <h4>{{ get_phrase('Marksheets') }}</h4>
                        <ul class="d-flex align-items-center eBreadcrumb-2">
                            <li><a href="#">{{ get_phrase('Home') }}</a></li>
                            <li><a href="#">{{ get_phrase('Examination') }}</a></li>
                            <li><a href="#">{{ get_phrase('Marksheet') }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="eSection-wrap">
                <div class="row">
                    <div class="row justify-content-md-center">
                        <div class="col-md-2">
                            <select name="class_id" id="class_id"
                                class="form-select eForm-select eChoice-multiple-with-remove" required
                                onchange="classWiseSection(this.value)">
                                <option value="">{{ get_phrase('Select class') }}</option>
                                @foreach ($classes as $class)
                                    <option value="{{ $class->id }}">{{ $class->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-3">
                            <select name="section_id" id="section_id"
                                class="form-select eForm-select eChoice-multiple-with-remove" required>
                                <option value="">{{ get_phrase('First select a class') }}</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <select class="form-select eForm-select eChoice-multiple-with-remove" id="exam_id"
                                name="exam_id">
                                <option value="">{{ get_phrase('First select a class') }}</option>
                            </select>
                        </div>

                        <div class="col-xl-2 mb-3">
                            <button type="button" class="eBtn eBtn btn-secondary form-control"
                                onclick="filter_marksheet()">{{ get_phrase('Filter') }}</button>
                        </div>

                        <div class="card-body table-responsive marks_content" id="studentList">
                            <div class="empty_box center">
                                <img class="mb-3" width="150px"
                                    src="{{ asset('public/assets/images/empty_box.png') }}" />
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        // $(document).ready(function() {
        //     $('#filter-button').click(function() {

        //     });
        //     $('#filter-button').click();
        // });
        function classWiseSection(classId) {
            let url = "{{ route('class_wise_sections', ['id' => ':classId']) }}";
            url = url.replace(":classId", classId);
            $.ajax({
                url: url,
                success: function(response) {
                    $('#section_id').html(response);
                    classWiseExam(classId);
                }
            });
        }

        function classWiseExam(classId) {
            let url = "{{ route('admin.exam.exam_dropdown') }}";
            $.ajax({
                url: url,
                data: {
                    class_id: classId
                },
                success: function(response) {
                    $('#exam_id').html(response);
                }
            });

        }

        function filter_marksheet() {
            var exam_id = $('#exam_id').val();
            var class_id = $('#class_id').val();
            var section_id = $('#section_id').val();
            if (exam_id != "" && class_id != "" && section_id != "") {
                getFilteredStudents(class_id, section_id, exam_id);
            } else {
                toastr.error('{{ get_phrase('Please select all the fields') }}');
            }
        }

        function getFilteredStudents(class_id, section_id, exam_id) {
            let url = "{{ route('admin.exam.reports.studentList') }}";
            $.ajax({
                url: url,
                data: {
                    class_id: class_id,
                    section_id: section_id,
                    exam_id: exam_id
                },
                success: function(response) {
                    $('#studentList').html(response);
                    $('.grade').html($('#class_id option:selected').text());
                    $('.section').html($('#section_id option:selected').text());
                    $('.exam').html($('#exam_id option:selected').text());
                }
            });
        }

        function calculatemarks(exam_id, class_id, section_id) {

            let url = "{{ route('admin.calculate.marks') }}";
            $.ajax({
                url: url,
                data: {
                    class_id: class_id,
                    section_id: section_id,
                    exam_id: exam_id
                }
            });
        }
    </script>
@endsection
