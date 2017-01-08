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
        <div class="jumbotron" style="background: #588c7e">
            <div class="container container-alt">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
                        <input id="likes" name="likes" type="text" class="" data-size="lg"
                               value="{{$recipes->Ratings->avg('rating')}}">
                    </div>
                    @if (Auth::check())
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                        <form method="post" action="/deleteRecipe">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="recipe_id" value="{{$recipes->id}}">
                            <span class="input-group-btn">
                            <button class="btn btn-danger" type="submit">Delete recipe</button>
                        </span>
                        </form>
                    </div>
                        @endif
                </div>
                {{$recipes->description}}
            </div>
        </div>
        <div class="jumbotron" style="background: #f2e394;">
            <div class="container container-alt" style="color: black">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                        <h2> Ingredients </h2>
                        <hr>
                        <br>
                        @foreach ($recipes->ingredients as $ingredient)
                            <div class="recipe-list">
                                <i class="glyphicon glyphicon-ok"></i> {{$ingredient->name}} <br>

                            </div>
                        @endforeach
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
                        <h2> Steps </h2>
                        <hr>
                        <br>

                        @foreach ($recipes->steps as $step)
                            <div class="recipe-list" style="">
                                <B> Step {{$i++}}: </B> {{$step->description}}
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        @if (!empty($recipes->comments))
            <div class="jumbotron" style="background: #f2ae72">
                <div class="container container-alt">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="color: black">
                            @foreach ($recipes->comments as $comment)
                                Posted by {{$comment->naam}} <br>
                                {{$comment->comment}}<br>
                                at {{$comment->created_at}}<br>
                                @if (Auth::check())
                                <form method="post" action="/deleteComment">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="hidden" name="comment_id" value="{{$comment->id}}">
                                    <span class="input-group-btn">
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </span>
                                </form>
                                @endif
                                <hr>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>


        @else

        @endif
    </div>

    <div class="jumbotron" style="background: #f5f8fa; padding-bottom: 25px">
        <div class="container container-alt">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                @if ($recipes->comments == "[]")
                    <br>
                    <h2 style="color: black">No comments yet! Be the first to comment!</h2>
                    <br>
                @endif
                <form class="form-horizontal" method="post" action="/addcomment">

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <label class="control-label" for="name"></label>
                    <input id="name" name="name" type="text" placeholder="Name"
                           class="form-control input-md" required="">


                    <label class="control-label" for="Email"></label>
                    <input id="email" name="email" type="text" placeholder="Fill in you email"
                           class="form-control input-md" required="">


                    <label class="control-label" for="comment"></label>
                    <textarea class="form-control" id="comment"
                              name="comment" required=""
                              placeholder="Write your comment here" style="resize: vertical;"></textarea>

                    <br>
                    <div>
                        <label for="rate" class="control-label" style="color: black">Rate this
                            recipe</label>
                        <input id="rate" name="rate" class="rating rating-loading" required>
                    </div>
                    <br>

                    <label class="control-label" for="postcomment"></label>
                    <input type="hidden" name="id" value="{{$recipes->id}}">
                    <button id="postcomment" name="postcomment" class="btn btn-primary">Post
                    </button>


                </form>
            </div>

        </div>
    </div>

    <script>

        $('#likes').rating({displayOnly: true});


    </script>

@endsection

