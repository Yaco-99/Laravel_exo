@extends('layout.app')

@section('title', 'index')

@section('content')
@foreach($restaurants as $restaurant)
<h1>{{ $restaurant->name}} à {{ $restaurant->address}}</h1>
<p>{{ $restaurant->description}}</p>
@endforeach
@endsection
