@extends('layouts.app')

@section('content')


    @foreach($recipes as $recipe)
        {{$recipe->image}} <br>
        {{$recipe->name}} <br>
        {{$recipe->description}} <br>
        {{$recipe->category}} <br>
        {{$recipe->Ratings->avg('rating')}} <br>
    @endforeach

@endsection
