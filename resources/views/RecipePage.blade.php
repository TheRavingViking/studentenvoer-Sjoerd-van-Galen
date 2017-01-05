@extends('layouts.app')

@php($i = 1)


@section('content')

    <div class="container-fluid">
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <div class="jumbotron jumbotron-image" style="background-image: url('/uploads/{{ $recipes->image }}')">
            <div class="text-center">
                <h1 class="text-block">{{$recipes->name}}</h1> <br> <br>
                <p class="text-block">{{$recipes->category}}</p>
            </div>
        </div>
        <div class="jumbotron" style="background: coral">
            <div class="container" style="padding: 2.5em">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
                        <input id="likes" name="likes" type="text" class="" data-size="lg"
                               value="{{$recipes->Ratings->avg('rating')}}">
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                        <form method="post" action="/deleteRecipe">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="recipe_id" value="{{$recipes->id}}">
                            <span class="input-group-btn">
                            <button class="btn btn-danger" type="submit">Delete recipe</button>
                        </span>
                        </form>
                    </div>
                </div>
                {{$recipes->description}}
            </div>
        </div>
    </div>
    </div>
    <div class="jumbotron" style="background: seagreen">
        <div class="container" style="padding: 2.5em">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                    @foreach ($recipes->ingredients as $ingredient)
                        <ul class="list-group">
                            <li class="list-group-item" style="color: black"> {{$ingredient->name}} </li>
                        </ul>
                    @endforeach
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                    <ol>
                        @foreach ($recipes->steps as $step)

                            <li>{{$step->description}}</li>

                        @endforeach
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="jumbotron" style="background: darksalmon">
        <div class="container" style="padding: 2.5em">
            @foreach ($recipes->comments as $comment)
                Posted by {{$comment->naam}} <br>
                {{$comment->comment}}<br>
                at {{$comment->created_at}}<br>
                <form method="post" action="/deleteComment">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="comment_id" value="{{$comment->id}}">
                    <span class="input-group-btn">
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </span>
                </form>
                <hr>
            @endforeach
        </div>
    </div>
    <div class="jumbotron" style="background: oldlace">
        <div class="container" style="padding: 2.5em">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <form class="form-horizontal" method="post" action="/addcomment">
                    <div class="form-group">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <label class="control-label" for="name"></label>
                        <input id="name" name="name" type="text" placeholder="Name"
                               class="form-control input-md" required="">
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="Email"></label>
                        <input id="email" name="email" type="text" placeholder="Fill in you email"
                               class="form-control input-md" required="">
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="comment"></label>
                        <textarea class="form-control" id="comment"
                                  name="comment" required="" placeholder="Write your comment here"></textarea>
                    </div>

                    <div>
                        <label for="rate" class="control-label">Rate this recipe</label>
                        <input id="rate" name="rate" class="rating rating-loading">
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="postcomment"></label>
                        <input type="hidden" name="id" value="{{$recipes->id}}">
                        <button id="postcomment" name="postcomment" class="btn btn-primary">Post</button>
                    </div>


                </form>
            </div>

        </div>
    </div>

    <script>

        $('#likes').rating({displayOnly: true});


    </script>

@endsection

