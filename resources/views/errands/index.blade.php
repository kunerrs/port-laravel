@extends ('layouts.app')

@section('content')
<div class="index">
    <div class="container">
        <h1>Errands List</h1>

    @foreach($errands as $errand)
    <div class="errand-item">
    <a href="/errands/{{ $errand->id }}"><h4> {{ $errand->type }}</h4></a>
    </div>
    @endforeach
    

    </div>
</div>
@endsection