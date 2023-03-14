@extends('admin.navigation')

@section('content')
    <div class="mainSection-title">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center flex-wrap gr-15">
                    <div class="d-flex flex-column">
                        <h4>{{ get_phrase('Publish Results') }}</h4>
                        <ul class="d-flex align-items-center eBreadcrumb-2">
                            <li><a href="#">{{ get_phrase('Home') }}</a></li>
                            <li><a href="#">{{ get_phrase('Examination') }}</a></li>
                            <li><a href="#">{{ get_phrase('Publish Results') }}</a></li>
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
                    <div class="row justify-content-md-center">
                        <div class="col-md-2">
                            <select name="class_id" id="class_id"
                                class="form-select eForm-select eChoice-multiple-with-remove" required>
                                <option value="">{{ get_phrase('Select class') }}</option>
                                @foreach ($classes as $class)
                                    <option value="{{ $class->id }}">{{ $class->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        

                        <div class="col-xl-2 mb-3">
                            <button type="button" class="eBtn eBtn btn-secondary form-control"
                                onclick="filter_marks()">{{ get_phrase('Filter') }}</button>
                        </div>

                        <div class="card-body table-responsive marks_content">
                            <div class="empty_box center">
                                <img class="mb-3" width="150px"
                                    src="{{ asset('public/assets/images/empty_box.png') }}" />
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<script type="text/javascript">
    "use strict";

    

    function filter_marks() {
        var exam_id = $('#exam_id').val();
        var class_id = $('#class_id').val();
        var section_id = $('#section_id').val();
        var subject_id = $('#subject_id').val();
        if (exam_id != "" && class_id != "" && section_id != "" && subject_id != "") {
            getFilteredMarks();
        } else {
            toastr.error('{{ get_phrase('Please select all the fields') }}');
        }
    }

    var getFilteredMarks = function() {
       
        var class_id = $('#class_id').val();
        
        if ( class_id != "" ) {
            let url = "{{ route('admin.exam.exam_list') }}";
            
            $.ajax({
                url: url,
                headers: {
                    'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    
                    class_id: class_id,
                    
                },
                success: function(response) {
                    $('.marks_content').html(response);
                    $('#all_marks_update_button').on('click', function() {
                        $('.individual_mark_update_button').click();
                    });
                }
            });
        }
    }
</script>
