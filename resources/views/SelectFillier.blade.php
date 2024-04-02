<!-- select_fillier.blade.php -->

<h2>Select Fillier</h2>
<form action="{{ route('grades.select') }}" method="GET">
    <div class="form-group">
        <label for="fillier_id">Fillier:</label>
        <select name="fillier_id" id="fillier_id" class="form-control">
            @foreach ($filliers as $fillier)
                <option value="{{ $fillier->id }}">{{ $fillier->name }}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Next</button>
</form>