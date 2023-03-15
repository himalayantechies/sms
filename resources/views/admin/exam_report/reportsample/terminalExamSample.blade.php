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
            vertical-align: middle;
        }

        /* .borderless,
        .borderless td,
        .borderless th {
            border: none !important;
        } */

        .small_text_table td,
        .small_text_table th {
            font-size: 13px;
        }

        .bordered,
        .bordered td,
        .bordered th,
            {
            border: #8d8d8d 0.1px solid;
            padding: 0.3rem;
            font-size: 15px;
            padding: 5px !important;
        }

        .left-col {
            width: 40%;
            float: left;
        }

        .right-col {
            width: 56%;
            margin-left: 4%;
            float: right;
        }

        .caption-title {
            font-weight: bold;
            font-size: 16px;
            padding: 2px;
            margin-bottom: 10px;
        }

        .table td {
            vertical-align: middle !important;
        }

        .alignCenter {
            text-align: center;
        }

        .alignLeft {
            text-align: left;
        }

        .alignRight {
            text-align: right;
        }

        .mt-2per {
            margin-top: 2%;
        }

        .header-left-img {
            width: 40%;
            float: left;
        }

        .header-right-desc {
            width: 56%;
            margin-left: 4%;
            float: right;
        }

        .fs-15 {
            font-size: 15px;
        }

        .fs-20 {
            font-size: 20px;
        }

        .header-text {
            font-size: 1.5em;
            font-weight: bold;
        }

        .p-0 {
            padding: 0px !important;
        }

        .bg-blue {
            background: rgb(0, 0, 85);
            color: white;
        }

        .image-tab {
            height: 100px;
            width: 100px;
            background-image: url("{{ asset('public/assets/uploads/logo/' . get_settings('dark_logo')) }}");
            background-size: cover;
        }

        .bottom-container {
            position: fixed;
            bottom: 0;
            width: 100%;
            text-align: center;
            font-size: 12px;
            color: #000000;
            padding: 10px 0;
        }

        .top-border {
            /* border: black 1px solid; */
            border-top: none;
            padding: 5px 30px;
            display: block;
            font-weight: lighter;
            font-size: 1em;
        }

        .fw-bold {
            font-weight: bold;
        }

        body {
            border: 4px solid #8f8f8f;
        }
    </style>
</head>

<body>
    <div class="container">
        <table class="bolderless">
            <tbody>
                <tr>
                    <td class="alignCenter" rowspan="8">
                        <img src="{{ asset($school_information->logo) }}" alt=""
                            width="100">

                    </td>
                    <td class="alignCenter header-text p-0">
                        {{ $school_information->title }}
                    </td>
                    <td rowspan="5" class="alignCenter" style="width: 100px;">
                    </td>
                </tr>
                <tr>
                    <td class="alignCenter fs-15 p-0">
                        {{ $school_information->address }}
                    </td>
                </tr>
                <tr>
                    <td class="alignCenter fs-15 p-0">
                        Phone: {{ $school_information->phone }}
                    </td>
                </tr>
                <tr>
                    <td class="alignCenter fs-15 p-0">
                        Estd. {{ $school_information->year_established }}
                    </td>
                </tr>
                <tr>
                    <td>
                    </td>
                </tr>
                <tr>
                    <td class="alignCenter fs-20 bg-blue">
                        Student's Progress Report Card</td>
                </tr>
                <tr>
                    <td>
                    </td>
                </tr>
                <tr>
                    <td class="alignCenter fs-15 fw-bold">
                        Academic Year : 2023-2024</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="container mt-2per">
        <table class="table-borderless">
            <tbody>
                <tr>
                    <td colspan="2" style="width:66.66%">
                        <label>Student's Name: </label>
                        <strong>{{ $user_details->name }}</strong>
                    </td>
                    <td style="width:33.33%">
                        <label>Exam: </label>
                        <strong>{{ key($exam_header_array) }}</strong>
                    </td>
                </tr>
                <tr>
                    <td colspan="3">

                    </td>
                </tr>
                <tr>
                    <td colspan="3">

                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Class: </label>
                        <strong>{{ $user_details->class_name }}</strong>
                    </td>
                    <td>
                        <label>Section: </label>
                        <strong>{{ $user_details->section_name }}</strong>
                    </td>
                    <td>
                        <label>Roll No: </label>
                        <strong>{{ $user_details->roll_no }}</strong>
                    </td>
                </tr>
            </tbody>
        </table>

        <!-- Start Mark Sheet -->
        <div class="row table-responsive mt-2per" id="tabs-1">
            <table class="table bordered ">
                <thead>
                    <tr class="result_header">
                        <th rowspan="{{ $exam_header_array['max_depth'] - 1 }}" class="text-center" style="width:7%">
                            S.N. </th>
                        <th rowspan="{{ $exam_header_array['max_depth'] - 1 }}" style="width:40%"> Subjects</th>
                        <th rowspan="{{ $exam_header_array['max_depth'] - 1 }}" class="text-center" style="width: 9%">
                            Credit<br>
                            Hours
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
                        <th rowspan='{{ $exam_header_array['exam_colspan_count'] - 3 }}' style="width:10%">
                            Grade
                        </th>
                        <th rowspan='{{ $exam_header_array['exam_colspan_count'] - 3 }}' style="width:10%">
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
                        <td colspan="7" class="alignRight">
                            Grade Point Average (GPA) </td>

                        <td class="alignCenter">
                            {{ $user_details->grade_scored }} </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!--Start  CCE Result Section-->
        <!--End    CCE Result Section-->
    </div>
    <div class="container mt-2per">
        <table class="table borderless">
            <thead>
                <tr>
                    <td>
                        <div class="caption-title">Result</div>
                    </td>
                    <td></td>
                    <td class="alignCenter">
                        <div class="caption-title">Grading &amp; Marking System</div>
                    </td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="vertical-align: top;width: 40%;">
                        <table class="table">
                            <tbody>
                                <tr class="bordered">
                                    <td>Term</td>
                                    <td>{{ $exam_details->name }}</td>
                                </tr>
                                <tr class="bordered">
                                    <td>GPA</td>
                                    <td>{{ $user_details->grade_scored }}</td>
                                </tr>
                                <tr class="bordered">
                                    <td>Rank</td>
                                    <td>{{ $user_details->rank_gpa }}</td>
                                </tr>
                                <tr class="bordered">
                                    <td>Attendance</td>
                                    <td>{{ $user_details->present_day ?? 0 }}/{{ $user_details->working_day ?? 0 }}
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="caption-title"> Comments</td>
                                    <td></td>
                                </tr>
                                <tr class="bordered">
                                    <td colspan="2"
                                        style="border: 1px solid black; height: 7.5em; vertical-align: top;">
                                        <p>{{ $user_details->remarks ?? 'NA' }}</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                    <td></td>
                    <td style="width: 45%;">
                        <table class="table bordered small_text_table">
                            <tbody>
                                <tr>
                                    <td class="alignCenter" style="width:10%">S.N</td>
                                    <td class="alignLeft" style="width:15%">Grade</td>
                                    <td class="alignLeft" style="width:15%">Grade Point</td>
                                    <td class="alignCenter" style="width:20%">Interval</td>
                                </tr>
                                @foreach ($grade_details as $details)
                                    <tr>
                                        <td>
                                            {{ $loop->iteration }}
                                        </td>
                                        <td>
                                            {{ $details->name }}
                                        </td>
                                        <td>
                                            {{ $details->grade_point }}
                                        </td>
                                        <td>
                                            {{ $details->mark_from }}-{{ $details->mark_upto }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="bottom-container">
        <table class="borderless">
            <tbody>
                <tr>
                    <td class="alignCenter">
                        <h4 style="border-top: #8d8d8d 0.1px solid; padding:5px 30px; color:white;">Date of Issue
                            aaa
                        </h4>
                    </td>
                    <td class="alignCenter">
                        <h4 style="border-top: #8d8d8d 0.1px solid; padding:5px 30px; color:white;">Class Teacher
                            /Prepared By aaa</h4>
                    </td>
                    <td class="alignCenter">
                        <h4 style="border-top: #8d8d8d 0.1px solid; padding:5px 30px; color:white;">Principal aaa
                        </h4>
                    </td>
                </tr>
                <tr>
                    <td class="alignCenter">
                        <h4 class="top-border">
                            Date of Issue
                        </h4>
                    </td>
                    <td class="alignCenter">
                        <h4 class="top-border"> Class
                            Teacher /Prepared By</h4>
                    </td>
                    <td class="alignCenter">
                        <h4 class="top-border"> Principal
                        </h4>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>
