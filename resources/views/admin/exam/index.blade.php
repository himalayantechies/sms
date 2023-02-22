@extends('admin.navigation')
@section('styles')
    .configure-exam-card{
    background-color:#f1f1f1;
    }
@endsection

@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}" />
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
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="eSection-wrap">
                <div class="row">
                    <div class="row justify-content-md-center">
                        <div class="col-md-4">
                            @php
                                $returned_class_id = 'null';
                                if (session()->has('returned_class_id')) {
                                    $returned_class_id = session('returned_class_id');
                                }
                            @endphp
                            <select name="class_id" id="class_id"
                                class="form-select eForm-select eChoice-multiple-with-remove" required>
                                <option value="null">{{ get_phrase('Select class') }}</option>
                                @foreach ($classes as $class)
                                    <option
                                        value="{{ $class->id }}"{{ $class->id == $returned_class_id ? 'selected' : '' }}>
                                        {{ $class->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-xl-2 mb-3">
                            <button type="button" class="eBtn eBtn btn-secondary form-control"
                                id="filter-button">{{ get_phrase('Filter') }}</button>
                        </div>
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
                        <div id="exam-details" class="col-md-4 mb-4 p-3">
                            <ul>
                            </ul>
                        </div>
                        <div class="col-md-8 col-sm-12 mt-2">
                            <div id="configureExam">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div id="add_exam_button" class="mt-4">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="addExamModal" tabindex="-1" aria-labelledby="addExamModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="addExamModalLabel">{{ get_phrase('Add Exam') }}</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('admin.exam.store') }}" method="post">
                    <div class="modal-body">
                        <div class="container">
                            @csrf
                            <div class="row">
                                <div class="col-sm-12 mt-2">
                                    <label for="exam_category_id"
                                        class="form-label eForm-label">{{ get_phrase('Class') }}*</label>
                                    <input id="class_id_modal_text" type="text" class="form-control" readonly>
                                    <input id="class_id_modal_value" type="hidden" name="class_id" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12 mt-2">
                                    <label for="parent"
                                        class="form-label eForm-label">{{ get_phrase('Parent Exam') }}*</label>
                                    <div id="parent_exam_dropdown">
                                    </div>
                                </div>
                                <div class="col-sm-12 mt-2">
                                    <label for="section_id"
                                        class="form-label eForm-label">{{ get_phrase('Name') }}*</label>
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-sm-12 mt-2">
                                    <label for="exam_category_id"
                                        class="form-label eForm-label">{{ get_phrase('Exam Category') }}*</label>
                                    <select name="exam_category_id" id="exam_category_id"
                                        class="form-select eForm-select eChoice-multiple-with-remove"required>
                                        <option value="">Select exam category</option>
                                        @foreach ($exam_categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="eBtn eBtn btn btn-secondary"
                            data-bs-dismiss="modal">{{ get_phrase('Close') }}</button>
                        <button type="submit" class="eBtn eBtn btn btn-primary">{{ get_phrase('Save') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jstree/3.2.1/themes/default/style.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {


            // Add click event listener to each toggle button

            $('#exam-details').jstree({
                'core': {
                    'check_callback': true
                }
            });

            $('#filter-button').click(function() {
                selectClassJSTree();
            });
            $('#filter-button').click();
        });

        function loadParentExamDropdown(class_id) {
            $.ajax({
                type: 'GET',
                url: "{{ route('admin.exam.exam_dropdown') }}",
                data: {
                    "class_id": class_id
                },
                success: function(data) {
                    $('#parent_exam_dropdown').html(data);
                }
            });
        }

        function selectClassJSTree() {
            var selectedValue = $('#class_id option').filter(":selected").val();
            var selectedText = $('#class_id option').filter(":selected").text();
            if (selectedValue !== "null") {
                $.ajax({
                    type: 'POST',
                    url: "{{ route('admin.loadExamClasswise') }}",
                    data: {
                        "class_id": selectedValue
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(data) {
                        $('#configureExam').html('');
                        $('#class_id_modal_value').val(selectedValue);
                        $('#class_id_modal_text').val(selectedText);
                        loadParentExamDropdown(selectedValue);
                        var button_body =
                            '<button type="button" class="eBtn eBtn btn-primary form-control mb-3" data-bs-toggle="modal" data-bs-target="#addExamModal"> {{ get_phrase('Add Exam') }}</button>';
                        $('#add_exam_button').html(button_body);

                        $('#exam-details').jstree('destroy');
                        $("#exam-details").append(data);
                        $('#exam-details').jstree({
                            'core': {
                                'themes': {
                                    'name': 'default',
                                    'responsive': true,

                                }
                            },
                            'checkbox': {
                                three_state: false,
                                cascade: 'none'
                            },
                            "plugins": [
                                "themes",
                                "checkbox"
                            ]
                        });
                        $("#exam-details").jstree("open_all");
                        var examDetailsresetting = false;
                        $('#exam-details').on('changed.jstree', function(e, data) {
                            $('#configureExam').html('');
                            if (examDetailsresetting) //ignoring the changed event
                            {
                                examDetailsresetting = false;
                                return;
                            }
                            if (data.selected.length > 1) {
                                //ignore next changed event
                                examDetailsresetting = true;
                                //will invoke the changed event once
                                data.instance.uncheck_all();
                                data.instance.check_node(data.node);
                                return;
                            }
                            selectedId = [];
                            for (var i = 0; i < data.selected.length; i++) {
                                selectedId.push(data.instance.get_node(data
                                    .selected[i]).id);
                            }
                            if (selectedId[0] !== undefined) {
                                var mySelectedId = (selectedId[0].split('_'))[0];
                                loadConfigureExam(mySelectedId);
                            }
                        });
                    }
                });
            } else {
                $('#exam-details').jstree('destroy');
                $("#exam-details").html('<ul>');
                $('#exam-details').append('</ul>');
                $('#exam-details').jstree({
                    'core': {
                        'themes': {
                            'name': 'default',
                            'responsive': true,
                        }
                    }
                });

            }
        }

        function return_blank_data() {
            return ' <div class="card-body table-responsive marks_content">' +
                '<div class="empty_box center">' +
                '<img class="mb-3" width="150px" src="{{ asset('public/assets/images/empty_box.png') }}" />' +
                '</div>' +
                '</div>';
        }

        function editModalConfigureExam(class_id) {
            $.ajax({
                type: 'POST',
                url: "{{ route('admin.loadExamClasswise') }}",
                data: {
                    "class_id": class_id
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(data) {
                    var parent_id = $('#selected_parent_exam_edit_modal').val();

                    $('#edit_modal_parent_exam').jstree('destroy');
                    $("#edit_modal_parent_exam").append(data);

                    $('#edit_modal_parent_exam').jstree({
                        'core': {
                            'themes': {
                                'name': 'default',
                                'responsive': true
                            }
                        },
                        'checkbox': {
                            three_state: false,
                            cascade: 'none'
                        },
                        "plugins": [
                            "themes",
                            "checkbox"
                        ]
                    });
                    $("#edit_modal_parent_exam").jstree("open_all");
                    var resetting = false;
                    $('#edit_modal_parent_exam').on('changed.jstree', function(e, data) {
                        $('#selected_parent_exam_edit_modal').val('none');
                        if (resetting) //ignoring the changed event
                        {
                            resetting = false;
                            return;
                        }
                        if (data.selected.length > 1) {
                            //ignore next changed event
                            resetting = true;
                            //will invoke the changed event once
                            data.instance.uncheck_all();
                            data.instance.check_node(data.node);
                            return;
                        }
                        selectedId = [];
                        for (var i = 0; i < data.selected.length; i++) {
                            selectedId.push(data.instance.get_node(data
                                .selected[i]).id);
                        }
                        var mySelectedId = (selectedId[0].split('_'))[0];
                        $('#selected_parent_exam_edit_modal').val(mySelectedId);
                    });
                    $("#edit_modal_parent_exam").jstree("check_node", $("#edit_modal_parent_exam [id^='" +
                        parent_id + "_']"));
                }
            });


        }

        function loadConfigureExam(exam_id) {
            $.ajax({
                type: 'POST',
                url: "{{ route('admin.exam.configureExamDetails') }}",
                data: {
                    "exam_id": exam_id
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(data) {
                    $('#configureExam').html(data);
                }
            });
        }

        function moveNodeUp(exam_id) {
            $.ajax({
                type: 'POST',
                url: "{{ route('admin.exam.moveNodeUp') }}",
                data: {
                    "exam_id": exam_id
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(data) {
                    $('#filter-button').click();
                }
            });
        }

        function moveNodeDown(exam_id) {
            $.ajax({
                type: 'POST',
                url: "{{ route('admin.exam.moveNodeDown') }}",
                data: {
                    "exam_id": exam_id
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(data) {
                    $('#filter-button').click();
                }
            });
        }

        function deleteExam(exam_id) {
            event.preventDefault();
            swal({
                    title: "Are you sure?",
                    text: "Are you sure you want to delete?",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willApprove) => {
                    if (willApprove) {
                        $.ajax({
                            type: 'POST',
                            url: "{{ route('admin.exam.deleteExam') }}",
                            data: {
                                "exam_id": exam_id
                            },
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            success: function(data) {
                                $('#filter-button').click();
                            }
                        });
                    } else {
                        $('#filter-button').click();
                    }
                });
        }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jstree/3.2.1/jstree.min.js"></script>
@endsection
