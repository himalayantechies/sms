<div class="card text-bg-light mb-3">
    <div class="card-header d-flex justify-content-between">Configure {{ $exam->name }}
        <div>

            <a class="btn btn-sm btn-warning text-dark mx-2"
                href="{{ route('admin.setup.offline_exam', ['id' => $exam->id]) }}"><i class="bi bi-gear-fill"></i>
                {{ get_phrase('Setup Marks') }}</a>

            <button type="button" class="btn btn-sm btn-primary text-white mx-2" data-bs-toggle="modal"
                data-bs-target="#addExamModal"><i class="bi bi-plus-lg"></i> Add Exam </button>
            <button type="button" class="btn btn-secondary btn-sm text-white mx-2" data-bs-toggle="modal"
                onclick="editModalConfigureExam({{ $exam->class_id }})" data-bs-target="#editExamModal"><i
                    class="bi bi-pencil-fill"></i> Edit Exam </button>
            {{-- <button class="btn btn-danger btn-sm delete-btn" onclick="deleteExam({{ $exam->id }})">
                <i class="bi bi-trash3-fill"></i>
            </button> --}}
        </div>
    </div>
    <div class="card-body">
        @if ($exam->children->count() !== 0)
            <div class="mainSection-title">
                <div class="row">
                    <div class="col-12">
                        <form action="{{ route('admin.exam.saveExamWeightage') }}" method="post">
                            @csrf
                            <div class="d-flex justify-content-between align-items-center flex-wrap gr-15">
                                <div class="d-flex flex-column">
                                    <h4>{{ $exam->name }}</h4>
                                    <h6 class="fs-6">Grade {{ $classes[0]->name }}
                                        percentage contribution to the exam :</h6>
                                </div>
                                <input type="hidden" value="{{ $classes[0]->id }}" name="class_id">
                            </div>
                            <div>
                                <div class="row">
                                    @foreach ($exam->children as $child_exam)
                                        <div class="col-md-3 col-sm-12 mt-2">
                                            <label for="exam-label-{{ $child_exam->id }}"
                                                class="form-label eForm-label">{{ $child_exam->name }}</label>
                                            <input type="hidden" name="exam_id[]" value="{{ $child_exam->id }}">
                                            <div class="input-group mb-3">
                                                <input type="number" class="form-control eForm-control" min="0"
                                                    required step="1" id="exam-label-{{ $child_exam->id }}"
                                                    name="weightage[]" value="{{ $child_exam->weightage ?? 0 }}">
                                                <span class="input-group-text" id="basic-addon2">%</span>
                                            </div>
                                        </div>
                                    @endforeach
                                    <div class="col-md-3 col-sm-12 mt-2">
                                        <label for="address" class="form-label eForm-label">Total</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control eForm-control" id="address"
                                                name="address" value="100" disabled>
                                            <span class="input-group-text" id="basic-addon2">%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row px-3">
                                <button class="eBtn eBtn btn-primary form-control mb-3">
                                    Save
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row px-3 mt-3">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">S.N</th>
                                <th scope="col">Name</th>
                                {{-- <th scope="col">Action</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            <?php $count = 1; ?>
                            @foreach ($exam->children as $child_exam)
                                <tr>
                                    <th scope="row">{{ $count++ }}</th>
                                    <td>{{ $child_exam->name }}</td>
                                    {{-- <td>
                                        <div>
                                            <button class="btn btn-danger btn-sm delete-btn"
                                                onclick="deleteExam({{ $child_exam->id }})">
                                                <i class="bi bi-trash3-fill"></i>
                                            </button>
                                        </div>
                                    </td> --}}
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @else
            <div class="row">
                <h6 class="fs-6">
                    No need to configure this exam.
                </h6>
            </div>
        @endif
    </div>
</div>


<div class="modal fade" id="editExamModal" tabindex="-1" aria-labelledby="editExamModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="editExamModalLabel">{{ get_phrase('Edit Exam') }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('admin.exam.updateExam') }}" method="post">
                <div class="modal-body">
                    <div class="container">
                        @csrf
                        <input type="hidden" value="{{ $exam->id }}" name="exam_id">
                        <div class="row">
                            <div class="col-sm-12 mt-2">
                                <label for="exam_category_id"
                                    class="form-label eForm-label">{{ get_phrase('Class') }}*</label>
                                <input id="class_id_modal_text" type="text" class="form-control" readonly
                                    value="{{ $classes[0]->name }}">
                                <input id="class_id_modal_value" type="hidden" name="class_id" required
                                    value="{{ $classes[0]->id }}">
                            </div>

                            <div class="col-sm-12 mt-2">
                                <label for="exam_category_id"
                                    class="form-label eForm-label">{{ get_phrase('Exam Category') }}*</label>
                                <select name="exam_category_id" id="exam_category_id"
                                    class="form-select eForm-select eChoice-multiple-with-remove"required>
                                    <option value="">Select exam category</option>
                                    @foreach ($exam_categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ $exam->exam_category_id == $category->id ? 'selected' : '' }}>
                                            {{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-12 mt-2">
                                <label for="section_id"
                                    class="form-label eForm-label">{{ get_phrase('Name') }}*</label>
                                <input id="name" type="text"
                                    class="form-control @error('name') is-invalid @enderror" name="name"
                                    value="{{ $exam->name }}" required autofocus>
                            </div>
                            {{-- <div class="col-sm-12 mt-2">
                                <label for="status"
                                    class="form-label eForm-label">{{ get_phrase('Status') }}*</label>
                                <select name="status" id="status"
                                    class="form-select eForm-select eChoice-multiple-with-remove" required>
                                    <option value="0" {{ $exam->status == '0' ? 'selected' : '' }}>Inactive
                                    </option>
                                    <option value="1" {{ $exam->status == '1' ? 'selected' : '' }}>Active
                                    </option>
                                </select>
                            </div> --}}
                        </div>
                        <div class="form-group row mt-4">
                            <label for="parent"
                                class="form-label eForm-label">{{ get_phrase('Parent Exam') }}*</label>
                            <input type="hidden" id="selected_parent_exam_edit_modal" name="parent"
                                value="{{ $exam->parent ?? 'none' }}">
                            <div class="col-md-6">
                                <div id="edit_modal_parent_exam" class="mt-4" value="none">
                                </div>
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
