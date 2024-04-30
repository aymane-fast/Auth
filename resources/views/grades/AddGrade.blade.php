<div class="container mt-5">
    <h2>Add Grade</h2>
    <form action="{{ route('grades.store') }}" method="POST" class="mt-4">
        @csrf
        <div class="form-group">
            <label for="user_id">Student Name:</label>
            <select name="user_id" id="user_id" class="form-control">
                @foreach ($students as $student)
                    <option value="{{ $student->id }}">{{ $student->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="module_id">Module:</label>
            <select name="module_id" id="module_id" class="form-control">
                @foreach ($modules as $module)
                    <option value="{{ $module->id }}">{{ $module->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="value">Grade:</label>
            <input type="number" id="value" name="value" min="0" max="100" required class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Add Grade</button>
    </form>
</div>