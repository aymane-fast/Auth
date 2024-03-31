<div class="container mt-5">
    <h2>Add Module</h2>
    <form action="{{ route('modules.store') }}" method="POST" class="mt-4">
        @csrf
        <div class="form-group">
            <label for="name">Module Name:</label>
            <input type="text" id="name" name="name" required class="form-control">
        </div>

        <div class="form-group">
            <label for="description">Description:</label>
            <textarea id="description" name="description" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label for="hours">Hours:</label>
            <input type="number" id="hours" name="hours" required class="form-control">
        </div>

        <div class="form-group">
            <label for="fillier_id">Fillier:</label>
            <select name="fillier_id" id="fillier_id" class="form-control">
                @foreach ($filliers as $fillier)
                    <option value="{{ $fillier->id }}">{{ $fillier->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Add Module</button>
        <br><br>
        <a href="{{ route('fillier.index') }}" class="btn btn-secondary">Back to Filliers</a>
    </form>
</div>