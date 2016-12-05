<?php

namespace App\Http\Controllers;

use App\recipes;
use App\ingredients;
use Illuminate\Http\Request;
use auth;

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
        $recipe = new Recipes();
        $ingredient = new Ingredients();

        $recipe->users_id = Auth::id();
        $recipe->name = $req->RecipeName;
        $recipe->description = $req->RecipeDescription;
        $recipe->save();
        $ingredient->name = $req->ingredient;
        $ingredient->unit = $req->amount;
        $ingredient->amount = $req->unit;
        $ingredient->recipes()->associate($recipe);
        $ingredient->save();

        return view('overview');

    }
}

