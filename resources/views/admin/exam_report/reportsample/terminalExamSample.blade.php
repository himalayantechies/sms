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
                        <img src="{{asset('public/assets/uploads/logo/' . get_settings('dark_logo'))}}" alt="" height="100" width="100">

                    </td>
                    <td class="alignCenter header-text p-0">
                        Shramik Shanti Secondary School
                    </td>
                    <td rowspan="5" class="alignCenter" style="width: 100px;">
                    </td>
                </tr>
                <tr>
                    <td class="alignCenter fs-15 p-0">
                        Chyasal, Lalitpur
                    </td>
                </tr>
                <tr>
                    <td class="alignCenter fs-15 p-0">
                        Phone: 97798989898
                    </td>
                </tr>
                <tr>
                    <td class="alignCenter fs-15 p-0">
                        Estd. 1995
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
                    <td colspan="2">
                        <label>Student's Name: </label>
                        <strong>{{ $user_details->name }}</strong>
                    </td>
                    <td>
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
                        <th rowspan="{{ $exam_header_array['max_depth'] - 1 }}" class="text-center"> S.N. </th>
                        <th rowspan="{{ $exam_header_array['max_depth'] - 1 }}"> Subjects</th>
                        <th rowspan="{{ $exam_header_array['max_depth'] - 1 }}" class="text-center"> Credit<br>
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
                        <td colspan="7" class="alignRight">
                            Grade Point Average (GPA) </td>

                        <td class="alignCenter">
                            {{ $GPA }} </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!--Start  CCE Result Section-->
        <!--End    CCE Result Section-->
    </div>
    <div class="container mt-2per">
        <table class="table borderedless">
            <thead>
                <tr>
                    <td>
                        <div class="caption-title">Result</div>
                    </td>
                    <td class="alignCenter">
                        <div class="caption-title">Grading &amp; Marking System</div>
                    </td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <table class="table bordered">
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
                        <div class="row mt-2per">
                            <div class="caption-title">Comments</div>
                            <div class="card bordered" style="min-height:7.5em;">
                                Comments
                            </div>
                        </div>
                    </td>
                    <td>
                        <table class="table bordered table-hover">
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
                        <h4 style="border-top: #8d8d8d 0.1px solid; padding:5px 30px; color:white;">Date of Issue aaa</h4>
                    </td>
                    <td class="alignCenter">
                        <h4 style="border-top: #8d8d8d 0.1px solid; padding:5px 30px; color:white;">Class Teacher
                            /Prepared By aaa</h4>
                    </td>
                    <td class="alignCenter">
                        <h4 style="border-top: #8d8d8d 0.1px solid; padding:5px 30px; color:white;">Principal aaa</h4>
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
