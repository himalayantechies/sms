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
                                        {{-- <a
                                            href="{{ route('admin.marksheet.downloadPDFMarksheet', ['grading_type' => '2', 'exam_id' => $exam_id, 'class_id' => $class_id, 'enrollment_id' => $enrollment_id]) }}">Generate PDF</a> --}}
                                    </div>
                                </div>
                                @include('admin.exam_report.marksheet')
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
