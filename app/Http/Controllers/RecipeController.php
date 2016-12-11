<?php

namespace App\Http\Controllers;

use App\recipes;
use App\ingredients;
use App\Steps;
use Illuminate\Http\Request;
use auth;
use DB;

class RecipeController extends Controller
{
    public function index()
    {
        $recipes = Recipes::with('ratings')->get();
        return view('overview', compact('recipes'));
    }

    public function view()
    {
        return view('addrecipe');
    }

    public function insert(Request $req)
    {
        $items = $req->all();

        $recipe = new Recipes();
        $recipe->users_id = Auth::id();
        $recipe->name = $req->RecipeName;
        $recipe->description = $req->RecipeDescription;
        $recipe->category = $req->Category;
        $recipe->save();


        $ingredients = $req->ingredient;
        $ing = explode(PHP_EOL, $ingredients);

        foreach ($ing as $ingredients) {
            $ingredient = new Ingredients();
            $ingredient->ingredient = $ingredients;
            $ingredient->recipes()->associate($recipe);
            $ingredient->save();
        }

        $steps = $req->steps;
        $steps = explode(PHP_EOL, $steps);
        foreach ($steps as $step) {
            $steps = new Steps();
            $steps->description = $step;
            $steps->recipes()->associate($recipe);
            $steps->save();
        }

        return redirect('overview')->with('Recipe added succesfully');

    }
}

