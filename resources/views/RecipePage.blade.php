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
                {{$recipes->Ratings->avg('rating')}} <br>
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
                    @foreach ($recipes->comments as $comment)
                        Posted by {{$comment->naam}} Email:{{$comment->email}} <br>
                        {{$comment->comment}}<br>
                        at {{$comment->created_at}}<br>

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
                                      name="comment" required="">Write your comment here</textarea>
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

@endsection
