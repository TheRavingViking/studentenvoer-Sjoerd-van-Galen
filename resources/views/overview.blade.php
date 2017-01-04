@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="row">
            @foreach($recipes as $recipe)
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="panel panel-default">
                        <img src="/uploads/{{ $recipe->image }}" class="img-responsive container-fluid" <br>
                        {{$recipe->name}} <br>
                        {{$recipe->description}} <br>
                        {{$recipe->category}} <br>
                        <input id="likes" name="" type="text" class="rating rating-loading" data-size="lg"
                               value="{{$recipe->Ratings->avg('rating')}}" disabled>

                        <a href="/recipepage/{{$recipe->id}}">Read more</a>
                    </div>
                </div>

            @endforeach
        </div>
    </div>


@endsection
