@extends('layouts.app')

@section('content')
<div class="wrapper">
    <div class="container create-errand">
        <h1>Request an Errand</h1>
        <form action="/errands" method="POST">
        @csrf
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required>

        <label for="name">Contact Number</label>
        <input type="tel" id="contact" name="contact" pattern="[0-9]{12}" placeholder="+639551234567" required>

        <label for="address">Address</label>
        <input type="text" id="address" name="address" required>

        <label for="type">Type of Errand</label>
        <select name="type" id="type">
            <option value="Food Errand">Food Errand</option>
            <option value="Pick-Up Errand">Pick-Up Errand</option>
            <option value="Market & Grocery">Market & Grocery</option>
            <option value="Medicine">Medicine</option>
            <option value="Others">Others</option>
        </select>

        <label for="extra">Additional Note</label>
        <textarea name="extra" id="extra" cols="30" rows="10"></textarea>

        <input type="submit" value="Send Request">
        </form>
    </div>
</div>
@endsection