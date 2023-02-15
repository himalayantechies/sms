@extends('admin.navigation')
@section('styles')
    .exam-toggle {
    position: relative;
    display: inline-block;
    width: 10px;
    height: 10px;
    background: white;
    transform: rotate(45deg);
    cursor:pointer;
    }
    .exam-toggle::before,
    .exam-toggle::after {
    content: "";
    position: absolute;
    top: 50%;
    left: 0;
    width: 100%;
    height: 2px;
    background: #000;
    }

    .exam-toggle::before {
    transform: translateY(-50%);
    }

    .exam-toggle::after {
    transform: translateY(-50%) rotate(90deg);
    }

    .exam-toggle-collapsed {
    transform: rotate(0deg);
    }
@endsection



@section('content')
    <div class="mainSection-title">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center flex-wrap gr-15">
                    <div class="d-flex flex-column">
                        <h4>{{ get_phrase('Exam') }}</h4>
                        <ul class="d-flex align-items-center eBreadcrumb-2">
                            <li><a href="#">{{ get_phrase('Home') }}</a></li>
                            <li><a href="#">{{ get_phrase('Examination') }}</a></li>
                            <li><a href="#">{{ get_phrase('Exam') }}</a></li>
                        </ul>
                    </div>
                    <div class="export-btn-area">
                        <a href="{{ route('admin.exam.create') }}" class="export_btn">{{ get_phrase('Add Exam') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div class="mx-auto">
                            <div class="my-2">
                                @include('admin.exam.exam')
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
