@extends('layout.app')

@section('title', 'create')

@section('content')
    <h1>create</h1>
    <form method="POST" action="/restaurant/create">
    {{ csrf_field() }}
    <label for="name">Name of the restaurant</label>
    <input type="text" name="name" id="name">
    <label for="address">Address of the restaurant</label>
    <input type="text" name="address" id="address">

    <label for="zipcode">zipcode of the restaurant</label>
    <input type="text" name="zipcode" id="zipcode">
    <label for="town">town of the restaurant</label>
    <input type="text" name="town" id="town">
    <label for="country">country of the restaurant</label>
    <input type="text" name="country" id="country">
    <label for="description">description of the restaurant</label>
    <input type="text" name="description" id="description">
    <label for="review">review of the restaurant</label>
    <input type="text" name="review" id="review">
    <input type="submit" value="Submit"></input> 
</form>
@endsection
