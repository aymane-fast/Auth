
<div class="container">
    <h1>Modules for {{ $fillier->name }}</h1>

    @if ($modules->isEmpty())
        <p>No modules found.</p>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Hours</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($modules as $module)
                    <tr>
                        <td>{{ $module->name }}</td>
                        <td>{{ $module->description }}</td>
                        <td>{{ $module->hours }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
