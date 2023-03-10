@extends('admin.navigation')
@section('styles')
    .configure-exam-card{
    background-color:#f1f1f1;
    }
    .bg-info-subtle{
    background-color:#32c5d2 !important;
    }
    label,strong,td,.caption-title{
    color:black;
    }
    .table>:not(:first-child) {
    border-top: none !important;
    }
    .table{
    border-color: black !important;
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
                            <li><a href="#">{{ get_phrase('Individual Marksheet') }}</a></li>
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
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header bg-info-subtle text-dark d-flex justify-content-between">
                                    <div class="d-flex align-items-center">
                                        {{ $user_details->name }}: {{ $exam_details->name }} Report Card
                                    </div>
                                    <div>
                                        <button onclick="Export()" class="btn btn-outline-dark"> Generate PDF
                                            Report</button>
                                    </div>
                                </div>
                                <div class="card-body" id="report-card">
                                    <div class="container">
                                        <div class="row" style="margin-top: 15px;">
                                            <div class="col-md-12">
                                                <label>Student Name: </label>
                                                <strong> {{ $user_details->name }}</strong>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>Class: </label>
                                                <strong>{{ $user_details->class_name }}</strong>
                                            </div>
                                            <div class="col-md-3">
                                                <label>Section: </label>
                                                <strong>{{ $user_details->section_name }}</strong>
                                            </div>
                                            <div class="col-md-3">
                                                <label>Roll No: </label>
                                                <strong>{{ $user_details->roll_no }}</strong>
                                            </div>
                                            <div class="col-md-3">
                                                <label>Admn no: </label>
                                                <strong></strong>
                                            </div>
                                        </div>
                                        {{-- <div class="row result-elements" style="margin-top: 15px; margin-bottom: 10px;">
                                            <div class="col-md-12">
                                                <strong>{{ $exam_details->name }} Mark Sheet</strong>
                                            </div>
                                        </div> --}}

                                        <!-- Start Mark Sheet -->
                                        <div class="row table-responsive" id="tabs-1">
                                            <table class="table table-bordered ">
                                                <thead>
                                                    <tr class="result_header">
                                                        <th rowspan="{{ $exam_header_array['max_depth'] }}"
                                                            class="text-center"> S.N. </th>
                                                        <th rowspan="{{ $exam_header_array['max_depth'] }}"> Subjects</th>
                                                        <th rowspan="{{ $exam_header_array['max_depth'] }}"
                                                            class="text-center"> Credit<br> Hours</th>
                                                        <th colspan={{ $exam_header_array_count[key($exam_header_array)]['__count'] + 2 }}
                                                            class="text-center" style="font-weight:bold;">
                                                            {{ key($exam_header_array) }} </th>
                                                    </tr>
                                                    <tr>
                                                        @foreach ($exam_header_array[key($exam_header_array)] as $key => $top_exam)
                                                            <th class="text-center"
                                                                {{ count($top_exam) > 0 ? 'colspan=' . $exam_header_array_count[key($exam_header_array)][$key]['__count'] : 'rowspan=' . $exam_header_array_count[key($exam_header_array)][$key]['__count'] + 1 }}>
                                                                {{ $key }}</th>
                                                        @endforeach
                                                        <th rowspan='{{ $exam_header_array['exam_colspan_count'] - 1 }}'>
                                                            Grade
                                                        </th>
                                                        <th rowspan='{{ $exam_header_array['exam_colspan_count'] - 1 }}'>
                                                            Grade
                                                            Point </th>
                                                    </tr>

                                                    <tr>
                                                        @foreach ($exam_header_array[key($exam_header_array)] as $key => $top_exam)
                                                            @if (count($top_exam) > 0)
                                                                @foreach ($top_exam as $key2 => $item)
                                                                    <td
                                                                        {{ count($item) > 0 ? 'colspan=' . $exam_header_array_count[key($exam_header_array)][$key][$key2]['__count'] : 'rowspan=' . $exam_header_array_count[key($exam_header_array)][$key][$key2]['__count'] + 1 }}>
                                                                        {{ $key2 }}
                                                                    </td>
                                                                @endforeach
                                                            @endif
                                                        @endforeach

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $key = 0; ?>
                                                    @foreach ($data as $item)
                                                        <tr>
                                                            <td class="alignCenter">{{ $loop->iteration }}</td>
                                                            <td>{{ $item->subject }}
                                                            </td>
                                                            <td class="alignCenter">
                                                                {{ $item->credit_hour }} </td>
                                                            @foreach ($examClassificationArray as $exam_key)
                                                                <td class="alignCenter">
                                                                    {{ $item->$exam_key }}
                                                                </td>
                                                            @endforeach

                                                            <td class="alignCenter">
                                                                <?php
                                                                $my_data = (array) $item;
                                                                ?>
                                                                {{ $my_data[$exam_details->name] }}
                                                            </td>
                                                            <td class="alignCenter">

                                                                {{ $my_data['Grade Point'] }} </td>
                                                        </tr>
                                                    @endforeach
                                                    <tr>
                                                        <td colspan="7" style="text-align: end;">
                                                            GPA </td>

                                                        <td class="alignRight">
                                                            {{ $GPA }} </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <!--Start  CCE Result Section-->

                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="row">
                                                    <div class="caption-title">Result</div>
                                                    <table class="table table-bordered">
                                                        <tbody>
                                                            <tr>
                                                                <td>Term</td>
                                                                <td>{{ $exam_details->name }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>GPA</td>
                                                                <td>{{ $GPA }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Rank</td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Attendance</td>
                                                                <td></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="row">
                                                    <div class="caption-title">Comments</div>
                                                    <div class="card">
                                                        Comments
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="caption-title">Grading &amp; Marking System</div>
                                                <table class="table table-bordered table-hover">
                                                    <tbody>
                                                        <tr>
                                                            <td class="alignCenter">S.N</td>
                                                            <td class="alignLeft">Grade</td>
                                                            <td class="alignCenter">Interval</td>
                                                            <td class="alignLeft">Description</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="alignCenter">
                                                                1 </td>
                                                            <td class="alignLeft">
                                                                A+ </td>
                                                            <td class="alignCenter">
                                                                90 to
                                                                100.00 </td>
                                                            <td class="alignLeft">
                                                                Outstanding </td>
                                                        </tr>

                                                        <tr>
                                                            <td class="alignCenter">
                                                                2 </td>
                                                            <td class="alignLeft">
                                                                A </td>
                                                            <td class="alignCenter">
                                                                80 to
                                                                89.99 </td>
                                                            <td class="alignLeft">
                                                                Excellent </td>
                                                        </tr>

                                                        <tr>
                                                            <td class="alignCenter">
                                                                3 </td>
                                                            <td class="alignLeft">
                                                                B+ </td>
                                                            <td class="alignCenter">
                                                                70 to
                                                                79.99 </td>
                                                            <td class="alignLeft">
                                                                Very Good </td>
                                                        </tr>

                                                        <tr>
                                                            <td class="alignCenter">
                                                                4 </td>
                                                            <td class="alignLeft">
                                                                B </td>
                                                            <td class="alignCenter">
                                                                60 to
                                                                69.99 </td>
                                                            <td class="alignLeft">
                                                                Good </td>
                                                        </tr>

                                                        <tr>
                                                            <td class="alignCenter">
                                                                5 </td>
                                                            <td class="alignLeft">
                                                                C+ </td>
                                                            <td class="alignCenter">
                                                                50 to
                                                                59.99 </td>
                                                            <td class="alignLeft">
                                                                Satisfactory </td>
                                                        </tr>

                                                        <tr>
                                                            <td class="alignCenter">
                                                                6 </td>
                                                            <td class="alignLeft">
                                                                C </td>
                                                            <td class="alignCenter">
                                                                40 to
                                                                49.99 </td>
                                                            <td class="alignLeft">
                                                                Acceptable </td>
                                                        </tr>

                                                        <tr>
                                                            <td class="alignCenter">
                                                                7 </td>
                                                            <td class="alignLeft">
                                                                D </td>
                                                            <td class="alignCenter">
                                                                35 to
                                                                39.99 </td>
                                                            <td class="alignLeft">
                                                                Partially Acceptable </td>
                                                        </tr>

                                                        <tr>
                                                            <td class="alignCenter">
                                                                8 </td>
                                                            <td class="alignLeft">
                                                                NG </td>
                                                            <td class="alignCenter">
                                                                20 to
                                                                34.99 </td>
                                                            <td class="alignLeft">
                                                                Insufficient </td>
                                                        </tr>

                                                        <tr>
                                                            <td class="alignCenter">
                                                                9 </td>
                                                            <td class="alignLeft">
                                                                NG </td>
                                                            <td class="alignCenter">
                                                                0 to
                                                                19.99 </td>
                                                            <td class="alignLeft">
                                                                Very Insufficient </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <!--End    CCE Result Section-->
                                    </div>
                                </div>
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
        function Export() {

            // Choose the element that our invoice is rendered in.
            const element = document.getElementById("report-card");

            // clone the element
            var clonedElement = element.cloneNode(true);

            // change display of cloned element
            // $(clonedElement).css();

            // Choose the clonedElement and save the PDF for our user.
            var opt = {
                margin: 1,
                filename: 'student_list_{{ date('y-m-d') }}.pdf',
                image: {
                    type: 'jpeg',
                    quality: 1
                },
                html2canvas: {
                    scale: 4
                }
            };

            // New Promise-based usage:
            html2pdf().set(opt).from(clonedElement).save();

            // remove cloned element
            clonedElement.remove();
        }
    </script>
@endsection