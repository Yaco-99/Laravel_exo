@extends('layout.app')
@section('content')
    <h1>create</h1>
    <form method="POST" action="/restaurant/edit/{{$restaurant->id}}">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
    @if($errors->has('name'))
        <small class="error">{{$errors->first('name')}}</small>
    @endif
    <label for="name">Name of the restaurant</label>
    <input type="text" name="name" id="name" placeholder="..." value="{{$restaurant->name}}">
    <label for="address">Address of the restaurant</label>
    <input type="text" name="address" id="address" placeholder="..." value="{{$restaurant->address}}">
    <label for="zipcode">zipcode of the restaurant</label>
    <input type="text" name="zipcode" id="zipcode" placeholder="..." value="{{$restaurant->zipCode}}">
    <label for="town">town of the restaurant</label>
    <input type="text" name="town" id="town" placeholder="..." value="{{$restaurant->town}}">
    <label for="country">country of the restaurant</label>
    <input type="text" name="country" id="country" placeholder="..." value="{{$restaurant->country}}">
    <label for="description">description of the restaurant</label>
    <input type="text" name="description" id="description" placeholder="..." value="{{$restaurant->description}}">
    <label for="review">review of the restaurant</label>
    <input type="text" name="review" id="review" placeholder="..." value="{{$restaurant->review}}">
    <input type="submit" value="Submit"></input> 
</form>
@endsection