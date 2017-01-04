@extends('layouts.app')

@php($i = 1)


@section('content')

    <div class="container">

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


        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <img src="/uploads/{{ $recipes->image }}" class="img-responsive">
                <br>
                <form method="post" action="/deleteRecipe">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="recipe_id" value="{{$recipes->id}}">
                    <span class="input-group-btn">
                            <button class="btn btn-danger" type="submit">Delete recipe</button>
                        </span>
                </form>

                <hr>

                <input id="likes" name="likes" type="text" class="rating rating-loading" data-size="lg"
                       value="{{$recipes->Ratings->avg('rating')}}">


                <br>
                {{$recipes->name}} <br>
                {{$recipes->description}} <br>
                {{$recipes->category}} <br>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">

                    @foreach ($recipes->ingredients as $ingredient)
                        {{$ingredient->name}}<br>
                    @endforeach
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10">
                    @foreach ($recipes->steps as $step)
                        Stap {{$i++}}:
                        {{$step->description}}<br>
                    @endforeach
                </div>

                <div>
                    <br>
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
    </div>


    <script>

        $('#likes').rating({displayOnly: true});


    </script>

@endsection

