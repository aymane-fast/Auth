@foreach ($filliers as $fillier)
    <a href="{{ route('filiers.modules', ['id' => $fillier->id]) }}">{{ $fillier->name }}</a>
@endforeach
 <br>

<a href="/add_fililer">Add Fillier</a>