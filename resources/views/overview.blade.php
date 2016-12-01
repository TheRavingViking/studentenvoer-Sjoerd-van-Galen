@extends('layouts.app')

@section('content')


    @foreach($recipes as $recipe)

        {{$recipe->name}} <br>
        {{$recipe->description}} <br>
        {{$recipe->catagory}} <br>
        {{$recipe->ratings}} <br>

    @endforeach



@endsection
