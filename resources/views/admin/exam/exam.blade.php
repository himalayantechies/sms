@if ($exams->count() > 0)
    <ul>
        @foreach ($exams as $exam)
            <li id="{{ $exam->id }}">
                {{ $exam->name }}
                @if ($exam->children->count())
                    @include('admin.exam.exam', ['exams' => $exam->children])
                @endif
            </li>
        @endforeach
    </ul>
@endif
