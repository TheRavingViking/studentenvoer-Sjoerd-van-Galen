<?php

namespace App\Http\Controllers;

use App\recipes;

class RecipeController extends Controller
{
    public function index ()
    {
        $recipes = Recipes::with('ratings')->get();
        return view ('overview', compact('recipes'));
    }

    public function view ()
    {
        return view ('addrecipe');
    }

    public function insert ()
    {
        echo 'hallo';
    }


}
