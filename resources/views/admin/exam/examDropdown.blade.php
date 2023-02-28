<select name="parent" id="parent" class="form-select eForm-select eChoice-multiple-with-remove" required>
    <option value="none">Select exam type</option>
    @foreach ($exams as $item)
        @if ($only_leaf_node == 1)
            <option value="{{ $item->id }}" {{ $item->is_end_leaf == '0' ? 'disabled' : '' }}>
                {{ ucfirst($item->name) }}
            </option>
        @else
            <option value="{{ $item->id }}">
                {{ ucfirst($item->name) }}
            </option>
        @endif
    @endforeach
</select>
