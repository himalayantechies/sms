@extends('admin.navigation')
@section('styles')
    .eForm-control{
    width:10em !important;
    }
@endsection
@section('content')
    <div class="mainSection-title">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center flex-wrap gr-15">
                    <div class="d-flex flex-column">
                        <h4>{{ get_phrase('Exam Marks Setup') }}</h4>
                        <ul class="d-flex align-items-center eBreadcrumb-2">
                            <li><a href="#">{{ get_phrase('Home') }}</a></li>
                            <li><a href="#">{{ get_phrase('Exam') }}</a></li>
                            <li><a href="#">{{ get_phrase('Exam Marks Setup') }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="row">
        <div class="col-12">
            <div class="eSection-wrap">
                <div class="row">
                    <div class="row justify-content-md-center">
                        <div class="eForm-layouts">
                            <form method="POST" enctype="multipart/form-data" class="d-block ajaxForm"
                                action="{{ route('admin.setup.offline_exam.save', ['id' => $exam->id]) }}">
                                @csrf
                                <div class="form-row">
                                    <input type="text" class="form-control eForm-control" name="exam_id"
                                        value="{{ $exam->id }}" hidden="true">
                                    <input type="text" class="form-control eForm-control" name="session_id"
                                        value="{{ $exam->session_id }}" hidden="true">
                                    <input type="text" class="form-control eForm-control" name="class_id"
                                        value="{{ $exam->class_id }}" hidden="true">
                                    <div class="row alignCenter">
                                        <div class="col-md-2 fpb-7"></div>
                                        <div class="col-md-2 fpb-7"><label for="Theory"
                                                class="eForm-label">{{ get_phrase('Theory') }}<span
                                                    class="required">*</span></label></div>
                                        <div class="col-md-2 fpb-7"><label for="Theory"
                                                class="eForm-label">{{ get_phrase('Practical') }}<span
                                                    class="required">*</span></label></div>
                                        <div class="col-md-2 fpb-7"><label for="Theory"
                                                class="eForm-label">{{ get_phrase('Credit hours') }}<span
                                                    class="required">*</span></label></div>

                                    </div>
                                    <div class="row borders">
                                        <div class="col-md-2 fpb-7"><label for="Theory"
                                                class="eForm-label">{{ get_phrase('Subject') }}<span
                                                    class="required">*</span></label></div>
                                        <div class="col-md-1 fpb-7"><label for="Theory"
                                                class="eForm-label">{{ get_phrase('Full Marks') }}<span
                                                    class="required">*</span></label></div>
                                        <div class="col-md-1 fpb-7"><label for="Theory"
                                                class="eForm-label">{{ get_phrase('Pass Marks') }}<span
                                                    class="required">*</span></label></div>
                                        <div class="col-md-1 fpb-7"><label for="Theory"
                                                class="eForm-label">{{ get_phrase('Full Marks') }}<span
                                                    class="required">*</span></label></div>
                                        <div class="col-md-1 fpb-7"><label for="Theory"
                                                class="eForm-label">{{ get_phrase('Pass Marks') }}<span
                                                    class="required">*</span></label></div>
                                        <div class="col-md-1 fpb-7"><label for="Theory"
                                                class="eForm-label">{{ get_phrase('Theory') }}<span
                                                    class="required">*</span></label></div>
                                        <div class="col-md-1 fpb-7"><label for="Theory"
                                                class="eForm-label">{{ get_phrase('Practical') }}<span
                                                    class="required">*</span></label></div>

                                    </div>
                                    @foreach ($subjects as $subject)
                                        @if (isset($exam_marks_setup[$subject->id]['id']))
                                            <input type="text" class="form-control eForm-control"
                                                name="exam_marks_setup[{{ $subject->id }}][marks_setup_id]"
                                                value="{{ $exam_marks_setup[$subject->id]['id'] }}" hidden="true">
                                        @else
                                            <input type="text" class="form-control eForm-control"
                                                name="exam_marks_setup[{{ $subject->id }}][marks_setup_id]" value="0"
                                                hidden="true">
                                        @endif

                                        <div class="row borders">
                                            <div class="col-md-2 fpb-7">
                                                <!-- <label for="subject_id" class="eForm-label">{{ get_phrase('Subject') }}<span class="required">*</span></label> -->
                                                <input type="text" class="form-control eForm-control"
                                                    name="exam_marks_setup[{{ $subject->id }}][subject_id]"
                                                    value="{{ $subject->id }}" hidden="true">
                                                <label class="eForm-label">{{ $subject->name }}</label>

                                            </div>
                                            <div class="col-md-1 fpb-7">

                                                <input type="text" class="form-control eForm-control "
                                                    name="exam_marks_setup[{{ $subject->id }}][th_fm]"
                                                    placeholder="Full Marks" value="<?php echo isset($exam_marks_setup[$subject->id]['th_fm']) ? $exam_marks_setup[$subject->id]['th_fm'] : 0; ?>">
                                            </div>
                                            <div class="col-md-1 fpb-7 borderRight">
                                                <input type="text" class="form-control eForm-control "
                                                    name="exam_marks_setup[{{ $subject->id }}][th_pm]"
                                                    placeholder="Pass Marks" value="<?php echo isset($exam_marks_setup[$subject->id]['th_pm']) ? $exam_marks_setup[$subject->id]['th_pm'] : 0; ?>">


                                            </div>
                                            <div class="col-md-1 fpb-7">

                                                <input type="text" class="form-control eForm-control"
                                                    name="exam_marks_setup[{{ $subject->id }}][pr_fm]"
                                                    placeholder="Full Marks" value="<?php echo isset($exam_marks_setup[$subject->id]['pr_fm']) ? $exam_marks_setup[$subject->id]['pr_fm'] : 0; ?>">
                                            </div>
                                            <div class="col-md-1 fpb-7 borderRight">
                                                <input type="text" class="form-control eForm-control"
                                                    name="exam_marks_setup[{{ $subject->id }}][pr_pm]"
                                                    placeholder="Pass Marks" value="<?php echo isset($exam_marks_setup[$subject->id]['pr_pm']) ? $exam_marks_setup[$subject->id]['pr_pm'] : 0; ?>">

                                            </div>
                                            <div class="col-md-1 fpb-7">

                                                <input type="text" class="form-control eForm-control"
                                                    name="exam_marks_setup[{{ $subject->id }}][th_ch]"
                                                    placeholder="Credit Hours" value="<?php echo isset($exam_marks_setup[$subject->id]['th_ch']) ? $exam_marks_setup[$subject->id]['th_ch'] : 0; ?>">
                                            </div>
                                            <div class="col-md-1 fpb-7 borderRight">
                                                <input type="text" class="form-control eForm-control"
                                                    name="exam_marks_setup[{{ $subject->id }}][pr_ch]"
                                                    placeholder="Credit Hours" value="<?php echo isset($exam_marks_setup[$subject->id]['pr_ch']) ? $exam_marks_setup[$subject->id]['pr_ch'] : 0; ?>">
                                            </div>
                                        </div>
                                    @endforeach
                                    <div class="fpb-7">
                                        <button class="btn-form" type="submit">{{ get_phrase('Update') }}</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="row">
    
            
        
        <div class="col-md-12">
            <div class="eSection-wrap pt-5 pb-2">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center flex-wrap gr-15">
                    <div class="d-flex flex-column">
                        <ul class="d-flex align-items-center eBreadcrumb-2">
                            <li><span>{{ get_phrase('Set up marks for:') }}</span></li>
                            <li><span>{{ get_phrase('Class').' '.$selected_class->name }}</span></li>
                            <li><span>{{ get_phrase('Exam'). ' - '. $exam->name }}</span></li>
                        </ul>
                    </div>
                </div>
            </div>
                <form method="POST" enctype="multipart/form-data" class="d-block ajaxForm"
                    action="{{ route('admin.setup.offline_exam.save', ['id' => $exam->id]) }}">
                    @csrf
                    <input type="text" class="form-control eForm-control" name="exam_id" value="{{ $exam->id }}"
                        hidden="true">
                    <input type="text" class="form-control eForm-control" name="session_id"
                        value="{{ $exam->session_id }}" hidden="true">
                    <input type="text" class="form-control eForm-control" name="class_id" value="{{ $exam->class_id }}"
                        hidden="true">
                    <div class="table-responsive">
                        <table class="table eTable">
                            <thead>
                                <tr>
                                    <th rowspan="2"class="eForm-label text-center">Subject</th>
                                    <th colspan="2"class="eForm-label text-center">Theory</th>
                                    <th colspan="2"class="eForm-label text-center">Practical</th>
                                    <th colspan="2"class="eForm-label text-center">Credit hours</th>
                                </tr>
                                <tr>
                                    <td class="eForm-label text-center">Full Marks*</td>
                                    <td class="eForm-label text-center">Pass Marks*</td>
                                    <td class="eForm-label text-center">Full Marks*</td>
                                    <td class="eForm-label text-center">Pass Marks*</td>
                                    <td class="eForm-label text-center">Theory*</td>
                                    <td class="eForm-label text-center">Practical*</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($subjects as $subject)
                                    <tr>
                                        <td>
                                            @if (isset($exam_marks_setup[$subject->id]['id']))
                                                <input type="text" class="form-control eForm-control"
                                                    name="exam_marks_setup[{{ $subject->id }}][marks_setup_id]"
                                                    value="{{ $exam_marks_setup[$subject->id]['id'] }}" hidden="true">
                                            @else
                                                <input type="text" class="form-control eForm-control"
                                                    name="exam_marks_setup[{{ $subject->id }}][marks_setup_id]"
                                                    value="0" hidden="true">
                                            @endif


                                            <input type="text" class="form-control eForm-control"
                                                name="exam_marks_setup[{{ $subject->id }}][subject_id]"
                                                value="{{ $subject->id }}" hidden="true">
                                            <label class="eForm-label">{{ $subject->name }}</label>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control eForm-control "
                                                name="exam_marks_setup[{{ $subject->id }}][th_fm]"
                                                placeholder="Full Marks" value="<?php echo isset($exam_marks_setup[$subject->id]['th_fm']) ? $exam_marks_setup[$subject->id]['th_fm'] : 0; ?>">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control eForm-control "
                                                name="exam_marks_setup[{{ $subject->id }}][th_pm]"
                                                placeholder="Pass Marks" value="<?php echo isset($exam_marks_setup[$subject->id]['th_pm']) ? $exam_marks_setup[$subject->id]['th_pm'] : 0; ?>">

                                        </td>
                                        <td>
                                            <input type="text" class="form-control eForm-control"
                                                name="exam_marks_setup[{{ $subject->id }}][pr_fm]"
                                                placeholder="Full Marks" value="<?php echo isset($exam_marks_setup[$subject->id]['pr_fm']) ? $exam_marks_setup[$subject->id]['pr_fm'] : 0; ?>">

                                        </td>
                                        <td>
                                            <input type="text" class="form-control eForm-control"
                                                name="exam_marks_setup[{{ $subject->id }}][pr_pm]"
                                                placeholder="Pass Marks" value="<?php echo isset($exam_marks_setup[$subject->id]['pr_pm']) ? $exam_marks_setup[$subject->id]['pr_pm'] : 0; ?>">

                                        </td>
                                        <td>
                                            <input type="text" class="form-control eForm-control"
                                                name="exam_marks_setup[{{ $subject->id }}][th_ch]"
                                                placeholder="Credit Hours" value="<?php echo isset($exam_marks_setup[$subject->id]['th_ch']) ? $exam_marks_setup[$subject->id]['th_ch'] : 0; ?>">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control eForm-control"
                                                name="exam_marks_setup[{{ $subject->id }}][pr_ch]"
                                                placeholder="Credit Hours" value="<?php echo isset($exam_marks_setup[$subject->id]['pr_ch']) ? $exam_marks_setup[$subject->id]['pr_ch'] : 0; ?>">

                                        </td>
                                    </tr>
                                @endforeach
                                <tr>
                                    <td colspan="7">
                                        <button class="btn-form" type="submit">{{ get_phrase('Update') }}</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script type="text/javascript">
        "use strict";


        function classWiseSubjectOnExamEdit(classId) {
            let url = "{{ route('admin.class_wise_subject', ['id' => ':classId']) }}";
            url = url.replace(":classId", classId);
            $.ajax({
                url: url,
                success: function(response) {
                    $('#subject_id').html(response);
                }
            });
        }

        $(document).ready(function() {
            $(".eChoice-multiple-with-remove").select2();
        });
    </script>
    <style>
        .smallTextBox {
            width: 100px !important;
            display: inline !important;
        }

        .borders div {
            border-bottom: 1px solid #999;
            margin-bottom: 5px !important;
        }

        .borderRight {
            //border-right: 1px solid #999;
        }

        .alignCenter {
            text-align: center !important;
        }
    </style>
@endsection
