@extends('layouts.app')


{{--#f2e394--}}
{{--#f5f8fa--}}

@section('content')
    <div class="container-fluid">

        <div class="jumbotron" style="background:rgba(216, 17, 89, 1);">
            <div class="container container-alt">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <div class="panel panel-default panel-heading-overview">
                            Breakfast
                            <div>
                                <button class="btn btn-default">
                                    <a href="/breakfast">More recipes</a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($breakfasts as $breakfast)
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                            <div class="panel panel-default">
                                <div class="panel-image"
                                     style="background-image: url('/uploads/{{ $breakfast->image }}')">
                                    <div class="text-center">
                                        <h1 style="font-size: 3em" class="text-block">{{$breakfast->name}}</h1> <br>
                                        <br>
                                        <h1 style="font-size: 2em" class="text-block">{{$breakfast->category}}</h1>
                                    </div>
                                </div>
                                <div style="padding: 1em">
                                    <input id="likes" name="" type="text" class="rating rating-loading" data-size="sm"
                                           value="{{$breakfast->Ratings->avg('rating')}}" disabled>
                                    <button class="btn btn-default">
                                        <a href="/recipepage/{{$breakfast->id}}">Read more</a>
                                    </button>

                                </div>
                            </div>
                        </div>

                    @endforeach

                </div>
            </div>
        </div>

        <div class="jumbotron" style="background:rgba(143, 45, 86, 1);">
            <div class="container container-alt">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <div class="panel panel-default panel-heading-overview">
                            Lunch
                            <div>
                                <button class="btn btn-default">
                                    <a href="/lunch">More recipes</a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($lunches as $lunch)
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                            <div class="panel panel-default">
                                <div class="panel-image" style="background-image: url('/uploads/{{ $lunch->image }}')">
                                    <div class="text-center">
                                        <h1 style="font-size: 3em" class="text-block">{{$lunch->name}}</h1> <br> <br>
                                        <h1 style="font-size: 2em" class="text-block">{{$lunch->category}}</h1>
                                    </div>
                                </div>
                                <div style="padding: 1em">
                                    <input id="likes" name="" type="text" class="rating rating-loading" data-size="sm"
                                           value="{{$lunch->Ratings->avg('rating')}}" disabled>
                                    <button class="btn btn-default">
                                        <a href="/recipepage/{{$lunch->id}}">Read more</a>
                                    </button>

                                </div>
                            </div>
                        </div>

                    @endforeach
                </div>
            </div>
        </div>


        <div class="jumbotron" style="background: rgba(33, 131, 128, 1);">
            <div class="container container-alt">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <div class="panel panel-default panel-heading-overview">
                            Dinner
                            <div>
                                <button class="btn btn-default">
                                    <a href="/dinner">More recipes</a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($dinners as $dinner)
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                            <div class="panel panel-default">
                                <div class="panel-image" style="background-image: url('/uploads/{{ $dinner->image }}')">
                                    <div class="text-center">
                                        <h1 style="font-size: 3em" class="text-block">{{$dinner->name}}</h1> <br> <br>
                                        <h1 style="font-size: 2em" class="text-block">{{$dinner->category}}</h1>
                                    </div>
                                </div>
                                <div style="padding: 1em">
                                    <input id="likes" name="" type="text" class="rating rating-loading" data-size="sm"
                                           value="{{$dinner->Ratings->avg('rating')}}" disabled>
                                    <button class="btn btn-default">
                                        <a href="/recipepage/{{$dinner->id}}">Read more</a>
                                    </button>

                                </div>
                            </div>
                        </div>

                    @endforeach
                </div>
            </div>
        </div>

        <div class="jumbotron" style="background:rgba(115, 210, 222, 1);">
            <div class="container container-alt">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <div class="panel panel-default panel-heading-overview">
                            Desserts
                            <div>
                                <button class="btn btn-default">
                                    <a href="/dessert">More recipes</a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($desserts as $dessert)
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                            <div class="panel panel-default">
                                <div class="panel-image"
                                     style="background-image: url('/uploads/{{ $dessert->image }}')">
                                    <div class="text-center">
                                        <h1 style="font-size: 3em" class="text-block">{{$dessert->name}}</h1> <br> <br>
                                        <h1 style="font-size: 2em" class="text-block">{{$dessert->category}}</h1>
                                    </div>
                                </div>
                                <div style="padding: 1em">
                                    <input id="likes" name="" type="text" class="rating rating-loading" data-size="sm"
                                           value="{{$dessert->Ratings->avg('rating')}}" disabled>
                                    <button class="btn btn-default">
                                        <a href="/recipepage/{{$dessert->id}}">Read more</a>
                                    </button>

                                </div>
                            </div>
                        </div>

                    @endforeach

                </div>
            </div>
        </div>



@endsection
