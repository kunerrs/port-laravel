@extends ('layouts.app')

@section('content')

<div class="container-show">
    <div class="errand-details">
    <h1>Errand for {{ $errand->name }}</h1>
        <p>Type -- {{ $errand->type }}</p>
        <p>Address -- {{ $errand->address }}</p>
        <p>Contact -- {{ $errand->contact }}</p>
        <p>Additional Note -- {{ $errand->extra}}</p>

        <form action="{{ route('errands.destroy', $errand->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button>Complete Errand</button>
        </form>

        <a href="{{ route('errands.index') }}" class="back">Return</a>
    </div>
</div>