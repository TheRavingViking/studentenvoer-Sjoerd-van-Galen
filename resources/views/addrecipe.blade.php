@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="row">
                <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                    <form enctype="multipart/form-data" class="form-horizontal" method="POST" action="/overview">

                        <br>
                        {{ csrf_field() }}
                        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                            <input type="file" name="recipe_picture">
                            <br>
                            <input id="RecipeNaam" type="text" class="form-control" placeholder="Recipe name"><br>
                            <input id="RecipeDescription" type="text" class="form-control"
                                   placeholder="Recipe Description"><br>
                        </div>

                        <div>
                            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                <input id="Ingredient1" type="text" class="form-control" placeholder="Ingredient"><br>
                            </div>
                            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                                <input id="amount1" type="text" class="form-control" placeholder="Amount"><br>
                            </div>
                            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                                <select id="unit3" name="unit">
                                    <option name="unit" value="ml">ml</option>
                                    <option name="unit" value="gram">gram</option>
                                    <option name="unit" value="tl">tl</option>
                                    <option name="unit" value="ml">el</option>
                                </select>
                            </div>

                            <div>
                                <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                    <input id="Ingredient1" type="text" class="form-control"
                                           placeholder="Ingredient"><br>
                                </div>
                                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                                    <input id="amount1" type="text" class="form-control" placeholder="Amount"><br>
                                </div>
                                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                                    <select id="unit3" name="unit">
                                        <option name="unit" value="ml">ml</option>
                                        <option name="unit" value="gram">gram</option>
                                        <option name="unit" value="tl">tl</option>
                                        <option name="unit" value="ml">el</option>
                                    </select>
                                </div>

                                <div>
                                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                        <input id="Ingredient1" type="text" class="form-control"
                                               placeholder="Ingredient"><br>
                                    </div>
                                    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                                        <input id="amount1" type="text" class="form-control" placeholder="Amount"><br>
                                    </div>
                                    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                                        <select id="unit3" name="unit">
                                            <option name="unit" value="ml">ml</option>
                                            <option name="unit" value="gram">gram</option>
                                            <option name="unit" value="tl">tl</option>
                                            <option name="unit" value="ml">el</option>
                                        </select>
                                    </div>

                                    <div>
                                        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                            <input id="Ingredient1" type="text" class="form-control"
                                                   placeholder="Ingredient"><br>
                                        </div>
                                        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                                            <input id="amount1" type="text" class="form-control"
                                                   placeholder="Amount"><br>
                                        </div>
                                        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                                            <select id="unit3" name="unit">
                                                <option name="unit" value="ml">ml</option>
                                                <option name="unit" value="gram">gram</option>
                                                <option name="unit" value="tl">tl</option>
                                                <option name="unit" value="ml">el</option>
                                            </select>
                                        </div>

                                        <div>
                                            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                                <input id="Ingredient1" type="text" class="form-control"
                                                       placeholder="stap"><br>
                                            </div>
                                            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                                                <input id="amount1" type="text" class="form-control"
                                                       value="1"><br>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                                <input id="Ingredient1" type="text" class="form-control"
                                                       placeholder="stap"><br>
                                            </div>
                                            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                                                <input id="amount1" type="text" class="form-control"
                                                       value="2"><br>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                                <input id="Ingredient1" type="text" class="form-control"
                                                       placeholder="stap"><br>
                                            </div>
                                            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                                                <input id="amount1" type="text" class="form-control"
                                                       value="3"><br>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                                <input id="Ingredient1" type="text" class="form-control"
                                                       placeholder="stap"><br>
                                            </div>
                                            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                                                <input id="amount1" type="text" class="form-control"
                                                       value="4"><br>
                                            </div>
                                        </div>
                                        <input type="submit">
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
