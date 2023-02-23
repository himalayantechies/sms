<select name="parent" id="parent" class="form-select eForm-select eChoice-multiple-with-remove" required>
    <option value="none">Select exam type</option>
    @foreach ($exams as $item)
        <option value="{{ $item->id }}">{{ ucfirst($item->name) }}</option>
    @endforeach
</select>
