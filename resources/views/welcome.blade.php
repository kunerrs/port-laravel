@extends('layouts.app')

@section('content')

<div class="content">
    <div class="image">
        <img src="/img/otw.png" alt="image">
        <h1>Baguio Errand</h1>
        <h2>The North's Best Errand Service</h2>
        <a href="{{ route('errands.create') }}">Request an Errand</a>
    </div>
</div>

<div class="info-mssg">
        
        <p class="mssg"> {{ session('mssg') }}</p>
    </div>
 @endsection
