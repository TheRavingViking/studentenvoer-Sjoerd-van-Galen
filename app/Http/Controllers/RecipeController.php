<?php

namespace App\Http\Controllers;

use App\Ratings;
use App\recipes;

class RecipeController extends Controller
{
    public function index ()
    {
        $recipes = Recipes::with('ratings')->get();
        return view ('overview', compact('recipes'));

    }
}
