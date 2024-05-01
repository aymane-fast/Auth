

<form action="{{ route('grades.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="module_id">Module:</label>
        <select name="module_id" id="module_id" class="form-control">
            @foreach ($modules as $module)
                <option value="{{ $module->id }}">{{ $module->name }}</option>
            @endforeach
        </select>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Lastname</th>
                <th>Grade</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->prenom }}</td>
                    <td>
                        <input type="number" name="grades[{{ $student->id }}]" min="0" max="20" required>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <button type="submit" class="btn btn-primary">Add Grades</button>
</form>