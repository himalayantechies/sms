<div class="card text-bg-light mb-3">
    <div class="card-header">Configure exam</div>
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
                                <div class="row">
                                    @foreach ($exam->children as $child_exam)
                                        <div class="col-md-3 col-sm-12 mt-2">
                                            <label for="exam-label-{{ $child_exam->id }}"
                                                class="form-label eForm-label">{{ $child_exam->name }}</label>
                                            <input type="hidden" name="exam_id[]" value="{{ $child_exam->id }}">
                                            <div class="input-group mb-3">
                                                <input type="number" class="form-control eForm-control" min="0"
                                                    required step="1" id="exam-label-{{ $child_exam->id }}"
                                                    name="weightage[]" value="0">
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
                                <button class="btn btn-primary col col-md-1 col-sm-4">
                                    Save
                                </button>
                            </div>
                        </form>
                    </div>
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
