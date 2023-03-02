<?php

use App\Models\User;
use App\Models\Subject;
use App\Models\Gradebook;
use App\Models\Grade;

?>

<div class="att-report-banner d-flex justify-content-center justify-content-md-between align-items-center flex-wrap">
    <div class="att-report-summary order-1">
        <h4 class="title">{{ get_phrase('Manage Marks') }}</h4>
        <p class="summary-item">{{ get_phrase('Class') }} : <span>{{ $page_data['class_name'] }}</span></p>
        <p class="summary-item">{{ get_phrase('Section') }} : <span>{{ $page_data['section_name'] }}</span></p>
        <p class="summary-item">{{ get_phrase('Subject') }} : <span>{{ $page_data['subject_name'] }}</span>
        </p>
    </div>
    <div class="att-banner-img order-0 order-md-1">
        <img src="{{ asset('public/assets/images/attendance-report-banner.png') }}" alt="" />
    </div>
</div>
@if (count($enroll_students) > 0)
    <div class="export position-relative">
        <button class="eBtn-3 dropdown-toggle float-end mb-4" type="button" id="defaultDropdown"
            data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
            <span class="pr-10">
                <svg xmlns="http://www.w3.org/2000/svg" width="12.31" height="10.77" viewBox="0 0 10.771 12.31">
                    <path id="arrow-right-from-bracket-solid"
                        d="M3.847,1.539H2.308a.769.769,0,0,0-.769.769V8.463a.769.769,0,0,0,.769.769H3.847a.769.769,0,0,1,0,1.539H2.308A2.308,2.308,0,0,1,0,8.463V2.308A2.308,2.308,0,0,1,2.308,0H3.847a.769.769,0,1,1,0,1.539Zm8.237,4.39L9.007,9.007A.769.769,0,0,1,7.919,7.919L9.685,6.155H4.616a.769.769,0,0,1,0-1.539H9.685L7.92,2.852A.769.769,0,0,1,9.008,1.764l3.078,3.078A.77.77,0,0,1,12.084,5.929Z"
                        transform="translate(0 12.31) rotate(-90)" fill="#00a3ff"></path>
                </svg>
            </span>
            {{ get_phrase('Export') }}
        </button>
        <button class="eBtn-3 dropdown-toggle float-end mb-4 mx-3" type="button" id="defaultDropdown"
            data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
            <span class="pr-10">
                <i class="bi bi-lock"></i>
            </span>
            {{ get_phrase('Lock Marks') }}
        </button>
        <ul class="dropdown-menu dropdown-menu-end eDropdown-menu-2">
            <li>
                <a class="dropdown-item" id="pdf" href="javascript:;"
                    onclick="Export()">{{ get_phrase('PDF') }}</a>
            </li>
            <li>
                <a class="dropdown-item" id="print" href="javascript:;"
                    onclick="printableDiv('mark_report')">{{ get_phrase('Print') }}</a>
            </li>
        </ul>
    </div>
@endif
@php

    $th_fm = 0;
    $pr_fm = 0;
    if ($page_data['is_mark_set']) {
        $th_fm = $page_data['th_fm'];
        $pr_fm = $page_data['pr_fm'];
    }
@endphp


@if (count($enroll_students) > 0)
    <div class="mark_report_content" id="mark_report">
        <table class="table eTable table-bordered">
            <thead>
                <tr>
                    <th scope="col">Roll No.</th>
                    <th scope="col">{{ get_phrase('Student name') }}</th>
                    @if ($pr_fm <= 0)
                        <th scope="col">{{ get_phrase('Marks') }} ({{ $th_fm }})</th>
                    @else
                        <th scope="col">{{ get_phrase('Theory') }} ({{ $th_fm }})</th>
                        <th scope="col">{{ get_phrase('Practical') }} ({{ $pr_fm }})</th>
                        <th scope="col">{{ get_phrase('Total marks') }}</th>
                    @endif
                    <th scope="col">{{ get_phrase('Grade Point') }}</th>
                    <th scope="col">{{ get_phrase('Comment') }}</th>
                    <th scope="col">{{ get_phrase('Action') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($enroll_students as $enroll_student)
                    <?php
                    if (!$page_data['is_mark_set']) {
                        print_r('Marks not yet setup');
                        die();
                    }
                    $student_details = User::find($enroll_student->user_id);
                    $filterd_data = Gradebook::where('exam_id', $page_data['exam_id'])
                        ->where('class_id', $page_data['class_id'])
                        ->where('section_id', $page_data['section_id'])
                        ->where('subject_id', $page_data['subject_id'])
                        ->where('session_id', $page_data['session_id'])
                        ->where('user_id', $enroll_student->user_id)
                        ->get();

                    if ($filterd_data->value('th_marks')) {
                        $th_marks = !empty($filterd_data->value('th_marks')) ? $filterd_data->value('th_marks') : 0;
                        $pr_marks = !empty($filterd_data->value('pr_marks')) ? $filterd_data->value('pr_marks') : 0;
                        $total = $th_marks + $pr_marks;
                    } else {
                        $th_marks = 0;
                        $pr_marks = 0;
                        $total = 0;
                    }

                    $comment = !empty($filterd_data->value('comment')) ? $filterd_data->value('comment') : ''; ?>
                    <tr>
                        <td>{{ $enroll_student->roll_no }}</td>
                        <td>{{ $student_details->name }}</td>

                        @if ($pr_fm <= 0)
                            <td>
                                {{-- <input class="form-control eForm-control" type="number" id="mark-{{ $enroll_student->user_id }}" name="th_marks" placeholder="th_marks" min="0" value="{{ $th_marks }}" required onchange="get_grade(this.value, this.id)"> --}}
                                <input class="form-control eForm-control" type="number"
                                    id="th_marks-{{ $enroll_student->user_id }}" name="th_marks" min="0"
                                    value="{{ $th_marks }}" required onchange="get_total(this.id)">
                            </td>
                        @else
                            <td>
                                <input class="form-control eForm-control" type="number"
                                    id="th_marks-{{ $enroll_student->user_id }}" name="th_marks" min="0"
                                    value="{{ $th_marks }}" required onchange="get_total(this.id)">
                            </td>
                            <td>
                                <input class="form-control eForm-control" type="number"
                                    id="pr_marks-{{ $enroll_student->user_id }}" name="pr_marks" min="0"
                                    value="{{ $pr_marks }}" required onchange="get_total(this.id)">
                            </td>
                            <td>
                                <span id="total-marks-{{ $enroll_student->user_id }}">{{ $total }}</span>
                            </td>
                        @endif

                        <td>
                            <span id="grade-for-mark-{{ $enroll_student->user_id }}">{{ get_grade($th_marks) }}</span>
                        </td>
                        <td>
                            <input class="form-control eForm-control" type="text"
                                id="comment-{{ $enroll_student->user_id }}" name="comment" placeholder="comment"
                                value="{{ $comment }}">
                        </td>
                        <td class="text-center">

                            <button class="btn btn-success individual_mark_update_button"
                                onclick="mark_update('{{ $enroll_student->user_id }}')"><i
                                    class="bi bi-check2-circle"></i></button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-end">
            <button type="button" class="eBtn eBtn btn-success form-control" id="all_marks_update_button"><i
                    class="bi bi-check2-circle"></i> {{ get_phrase('Update all') }}</button>
        </div>
    </div>
@else
    <div class="empty_box center">
        <img class="mb-3" width="150px" src="{{ asset('public/assets/images/empty_box.png') }}" />
        <br>
        <span class="">{{ get_phrase('No data found') }}</span>
    </div>
@endif

<script type="text/javascript">
    "use strict";

    function mark_update(student_id) {
        var class_id = '{{ $page_data['class_id'] }}';
        var section_id = '{{ $page_data['section_id'] }}';
        var subject_id = '{{ $page_data['subject_id'] }}';
        var exam_id = '{{ $page_data['exam_id'] }}';
        var pr_marks = (!isNaN($('#pr_marks-' + student_id).val())) ? $('#pr_marks-' + student_id).val() : null;
        var th_marks = (!isNaN($('#th_marks-' + student_id).val())) ? $('#th_marks-' + student_id).val() : null;
        var comment = $('#comment-' + student_id).val();

        if (subject_id != "") {
            $.ajax({
                type: 'GET',
                url: "{{ route('update.mark') }}",
                data: {
                    user_id: student_id,
                    class_id: class_id,
                    section_id: section_id,
                    subject_id: subject_id,
                    exam_id: exam_id,
                    th_marks: th_marks,
                    pr_marks: pr_marks,
                    comment: comment
                },
                success: function(response) {
                    toastr.success('{{ get_phrase('Value has been updated successfully') }}');
                }
            });
        } else {
            toastr.error('{{ get_phrase('Required mark field') }}');
        }
    }

    function get_grade(exam_mark, id) {
        let url = "{{ route('get.grade', ['exam_mark' => ':exam_mark']) }}";
        url = url.replace(":exam_mark", exam_mark);
        $.ajax({
            url: url,
            success: function(response) {
                // $('#grade-for-'+id).text(response);
                $('#grade-for-mark-' + id).text(response);

            }
        });
    }

    function get_total(student_id) {
        var student_id = student_id.slice(9, student_id.length);

        var pr_marks = (!isNaN($('#pr_marks-' + student_id).val())) ? $('#pr_marks-' + student_id).val() : 0;
        var th_marks = (!isNaN($('#th_marks-' + student_id).val())) ? $('#th_marks-' + student_id).val() : 0;
        var total = Number(pr_marks) + Number(th_marks);

        $('#total-marks-' + student_id).text(total);

        get_grade(total, student_id);
    }

    function Export() {
        html2canvas(document.getElementById('mark_report'), {
            onrendered: function(canvas) {
                var data = canvas.toDataURL();
                var docDefinition = {
                    content: [{
                        image: data,
                        width: 500
                    }]
                };
                pdfMake.createPdf(docDefinition).download("mark_report.pdf");
            }
        });
    }

    function printableDiv(printableAreaDivId) {
        var printContents = document.getElementById(printableAreaDivId).innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;

        window.print();

        document.body.innerHTML = originalContents;
    }
</script>
