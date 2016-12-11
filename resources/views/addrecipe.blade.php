@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="row">
                <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                    <form enctype="multipart/form-data" class="form-horizontal" method="POST" action="/">

                        <br>
                        {{ csrf_field() }}
                        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                            <input type="file" name="recipe_picture">
                            <br>
                            <input id="RecipeName" name="RecipeName" type="text" class="form-control"
                                   placeholder="Recipe name"><br>
                            <input id="RecipeDescription" name="RecipeDescription" type="text" class="form-control"
                                   placeholder="Recipe Description">
                            <select name="Category" title="Category">
                                <option value="">Category</option>
                                <option value="Breakfast">Breakfast</option>
                                <option value="Lunch">Lunch</option>
                                <option value="Diner">Diner</option>
                                <option value="Dessert">Dessert</option>
                            </select>
                        </div>

                        <div>
                            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                <textarea id="Ingredients" name="ingredient" class="form-control"
                                          placeholder="Put each ingredient on its own line, example:( Milk 500 ml)."></textarea> <br>
                            </div>

                            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                <textarea id="steps" name="steps" class="form-control"
                                          placeholder="Put each step on its own line."></textarea> <br>
                            </div>
                                <input type="submit">
                    </form>

                </div>
            </div>
        </div>
    </div>



@endsection
