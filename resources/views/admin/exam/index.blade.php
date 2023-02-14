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
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            Exam
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('exam.create') }}">
                                {{ __('Add Exam') }}
                            </a>
                        </div>
                    </div>
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
