<ul class="exam-list my-2">
    @foreach ($exams as $exam)
        <li class="exam-item {{ $exam->isChild() ? 'exam-item-child' : '' }}">
            <div class="exam-name d-flex">
                @if ($exam->children->count())
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                        class="exam-toggle">
                        <path d="M12.0601 16.5V11.5" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10"
                            stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M14.5 14H9.5" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10"
                            stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M22 11V17C22 21 21 22 17 22H7C3 22 2 21 2 17V7C2 3 3 2 7 2H8.5C10 2 10.33 2.44 10.9 3.2L12.4 5.2C12.78 5.7 13 6 14 6H17C21 6 22 7 22 11Z"
                            stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" />
                    </svg>
                @endif
                <div class="d-flex mx-4">
                    <span class="mx-3">
                        {{ $exam->name }}
                    </span>
                    <input type="checkbox" name="parent" value="{{ $exam->id }}" />

                </div>
            </div>
            @if ($exam->children->count())
                <ul class="exam-sublist mx-3">
                    @include('admin.exam.exam', ['exams' => $exam->children])
                </ul>
            @endif
        </li>
    @endforeach
</ul>
