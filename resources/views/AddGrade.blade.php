<form action="{{ route('grades.store') }}" method="POST">
    @csrf
    <label for="user_id">Student Name:</label>
    <select name="user_id" id="user_id">
        @foreach ($students as $student)
            <option value="{{ $student->id }}">{{ $student->name }}</option>
        @endforeach
    </select>

    <label for="module_id">Module:</label>
    <select name="module_id" id="module_id">
        @foreach ($modules as $module)
            <option value="{{ $module->id }}">{{ $module->name }}</option>
        @endforeach
    </select>

    <label for="value">Grade:</label>
    <input type="number" id="value" name="value" min="0" max="100" required>

    <button type="submit">Add Grade</button>
</form>