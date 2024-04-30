<form action="{{ route('filliers.store') }}" method="POST">
    @csrf

    <div class="form-group">
        <label for="name">Fillier Name:</label>
        <input type="text" name="name" id="name" class="form-control" required>
    </div>


    <button type="submit" class="btn btn-primary">Create Fillier</button>
</form>