@extends('layouts.app')


{{--#f2e394--}}
{{--#f5f8fa--}}

@section('content')
    <div class="container-fluid">
        <div class="jumbotron-gradient" style="background: #f2ae72">
            <div class="container container-alt">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <div class="panel panel-default panel-heading-overview">
                            Recipes
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($recipes as $recipe)
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                            <div class="panel panel-default">
                                <div class="panel-image"
                                     style="background-image: url('/uploads/{{ $recipe->image }}')">
                                    <div class="text-center">
                                        <h1 style="font-size: 3em" class="text-block">{{$recipe->name}}</h1> <br>
                                        <br>
                                        <h1 style="font-size: 2em" class="text-block">{{$recipe->category}}</h1>
                                    </div>
                                </div>
                                <div style="padding: 1em">
                                    <input id="likes" name="" type="text" class="rating rating-loading" data-size="sm"
                                           value="{{round($recipe->Ratings->avg('rating'))}}" disabled>
                                    <button class="btn btn-default">
                                        <a href="/recipepage/{{$recipe->id}}">Read more</a>
                                    </button>

                                </div>
                            </div>
                        </div>

                    @endforeach


                    <div class="container container-alt">
                        <div class="row">
                            <div class=" col-xs-12 col-sm-12 col-md-4 col-lg-4"></div>
                            <div class=" col-xs-12 col-sm-12 col-md-4 col-lg-4" style="alignment: center">
                                {{ $recipes->links() }}
                            </div>
                            <div class=" col-xs-12 col-sm-12 col-md-4 col-lg-4"></div>
                        </div>
                    </div>

                </div>
            </div>

@endsection
