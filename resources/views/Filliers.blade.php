@foreach ($filliers as $fillier)
    <a href="{{ route('filiers.modules', ['id' => $fillier->id]) }}">{{ $fillier->name }}</a><br>
@endforeach
<br>
<br><br>
<a href="/AddFilliers">Add Fillier</a>
<br>
<a href="/dashboard">Back to Dashboard</a>
