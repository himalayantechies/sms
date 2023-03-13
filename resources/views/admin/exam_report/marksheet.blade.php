<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Marksheet</title>
    <style>
        .container {
            max-width: 960px;
            margin: 0 auto;
            padding: 0 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table td,
        table th {
            padding: 0.3rem;
            vertical-align: middle;
            border: 1px solid #dee2e6;
        }

        .row {
            --bs-gutter-x: 1.5rem;
            --bs-gutter-y: 0;
            display: flex;
            flex-wrap: wrap;
            margin-top: calc(-1 * var(--bs-gutter-y));
            margin-right: calc(-.5 * var(--bs-gutter-x));
            margin-left: calc(-.5 * var(--bs-gutter-x))
        }

        .row>* {
            flex-shrink: 0;
            width: 100%;
            max-width: 100%;
            padding-right: calc(var(--bs-gutter-x) * .5);
            padding-left: calc(var(--bs-gutter-x) * .5);
            margin-top: var(--bs-gutter-y)
        }

        .col-md-5 {
            flex: 0 0 auto;
            width: 41.66666667%
        }

        .col-md-7 {
            flex: 0 0 auto;
            width: 58.33333333%
        }
    </style>
</head>

<body>
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
                            <th rowspan="{{ $exam_header_array['max_depth'] - 1 }}" class="text-center"> S.N. </th>
                            <th rowspan="{{ $exam_header_array['max_depth'] - 1 }}"> Subjects</th>
                            <th rowspan="{{ $exam_header_array['max_depth'] - 1 }}" class="text-center"> Credit<br> Hours
                            </th>
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
                            <th rowspan='{{ $exam_header_array['exam_colspan_count'] - 3 }}'>
                                Grade
                            </th>
                            <th rowspan='{{ $exam_header_array['exam_colspan_count'] - 3 }}'>
                                Grade
                                Point </th>
                        </tr>

                        <tr>
                            @foreach ($exam_header_array[key($exam_header_array)] as $key => $top_exam)
                                @if (count($top_exam) > 0)
                                    @foreach ($top_exam as $key2 => $item)
                                        <td
                                            {{ count($item) > 0 ? 'colspan=' . $exam_header_array_count[key($exam_header_array)][$key][$key2]['__count'] : '' }}>
                                            {{ $key2 }}
                                        </td>
                                    @endforeach
                                @endif
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
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
</body>

</html>
