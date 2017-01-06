@extends('layouts.app')


{{--#f2e394--}}
{{--#f5f8fa--}}

@section('content')
    <div class="container-fluid">
        <div class="jumbotron" style="background: #588c7e;">
            <div class="container container-alt">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-12">
                        <h2> Diners </h2>
                    </div>
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
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <button class="btn btn-default">
                            <a href="/dinner">More Dinners</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="jumbotron" style="background:#f2e394;">
            <div class="container container-alt">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-12">
                        <h2> Desserts </h2>
                    </div>
                    @foreach($desserts as $dessert)
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                            <div class="panel panel-default">
                                <div class="panel-image" style="background-image: url('/uploads/{{ $dessert->image }}')">
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
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <button class="btn btn-default">
                            <a href="/dessert">More Desserts</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>



@endsection
