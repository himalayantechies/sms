@extends('admin.navigation')

@section('content')
    <div class="mainSection-title">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center flex-wrap gr-15">
                    <div class="d-flex flex-column">
                        <h4>{{ get_phrase('Admission') }}</h4>
                        <ul class="d-flex align-items-center eBreadcrumb-2">
                            <li><a href="#">{{ get_phrase('Home') }}</a></li>
                            <li><a href="#">{{ get_phrase('Admissions') }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="custom-card mb-4">
        <div class="user-profile-area d-flex flex-wrap">
            <!-- Right side -->
            <div class="user-details-info">
                <!-- Tab label -->
                <ul class="nav nav-tabs eNav-Tabs-custom" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a href="{{ route('admin.offline_admission.single', ['type' => 'single']) }}">
                            <button class="nav-link {{ $aria_expand == 'single' ? 'active' : '' }}" id="basicInfo-tab"
                                data-bs-toggle="tab" data-bs-target="#basicInfo" type="button" role="tab"
                                aria-controls="basicInfo" aria-selected="true">
                                Single student admission
                                <span></span>
                            </button>
                        </a>
                    </li>
                    <li class="nav-item d-none" role="presentation">
                        <a href="{{ route('admin.offline_admission.single', ['type' => 'bulk']) }}">
                            <button class="nav-link {{ $aria_expand == 'bulk' ? 'active' : '' }}" id="attendance-tab"
                                data-bs-toggle="tab" data-bs-target="#attendance" type="button" role="tab"
                                aria-controls="attendance" aria-selected="false">
                                {{ get_phrase('Bulk student admission') }}
                                <span></span>
                            </button>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a href="{{ route('admin.offline_admission.single', ['type' => 'excel']) }}">
                            <button class="nav-link {{ $aria_expand == 'excel' ? 'active' : '' }}" id="attendance-tab"
                                data-bs-toggle="tab" data-bs-target="#attendance" type="button" role="tab"
                                aria-controls="attendance" aria-selected="false">
                                {{ get_phrase('Excel upload') }}
                                <span></span>
                            </button>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Tab content -->
    <div class="tab-content eNav-Tabs-content custom-card p-30" id="myTabContent">
        <div class="tab-pane fade show active" id="basicInfo" role="tabpanel" aria-labelledby="basicInfo-tab">
            @if ($aria_expand == 'single')
                @include('admin.offline_admission.single_student_admission')
            @elseif($aria_expand == 'bulk')
                @include('admin.offline_admission.bulk_student_admission')
            @else
                @include('admin.offline_admission.excel_student_admission')
            @endif
        </div>
    </div>
@endsection

<script type="text/javascript">
    "use strict";

    function classWiseSection(classId) {
        let url = "{{ route('admin.class_wise_sections', ['id' => ':classId']) }}";
        url = url.replace(":classId", classId);
        $.ajax({
            url: url,
            success: function(response) {
                $('#section_id').html(response);
            }
        });
    }
</script>

@section('scripts')
    <script>
        $(document).ready(function() {
            $('#additional_details_checkbox').click(function() {
                if ($(this).is(':checked')) {
                    $('#additional_details').removeClass('d-none');
                } else {
                    $('#additional_details').addClass('d-none');
                }
            });
        });
    </script>
@endsection
