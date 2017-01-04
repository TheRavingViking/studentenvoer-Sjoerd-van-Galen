<?php

namespace App\Http\Controllers;

use App\Comments;
use App\recipes;
use App\ingredients;
use App\Ratings;
use App\Steps;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use auth;
use Image;

class RecipeController extends Controller
{
    public function index()
    {
        $recipes = Recipes::with('ratings')->get();
        return view('overview', compact('recipes'));
    }

    public function show(Recipes $recipes)
    {
        return view('RecipePage', compact('recipes'));
    }


    public function create()
    {
        return view('AddRecipe');
    }

    public function insert(Request $req)
    {
        $items = $req->all();

        $recipe = new Recipes();
        $recipe->users_id = Auth::id();
        $recipe->name = $req->RecipeName;
        $recipe->description = $req->RecipeDescription;
        $recipe->category = $req->Category;
        if ($req->hasFile('recipe_picture')) {
            $avatar = $req->file('recipe_picture');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->save(public_path('/uploads/' . $filename));
            $recipe->image = $filename;
        }

        $recipe->save();


        $ingredients = $req->ingredient;
        $ing = explode(PHP_EOL, $ingredients);

        foreach ($ing as $ingredients) {
            if (!$ingredients == "") {
                $ingredient = new Ingredients();
                $ingredient->ingredient = $ingredients;
                $ingredient->recipes()->associate($recipe);
                $ingredient->save();
            }
        }

        $steps = $req->steps;
        $steps = explode(PHP_EOL, $steps);
        foreach ($steps as $step) {
            if (!$step == "") {
                $steps = new Steps();
                $steps->description = $step;
                $steps->recipes()->associate($recipe);
                $steps->save();
            }
        }

        return redirect('overview')->with('Recipe added succesfully');

    }

    public function insertComment(Request $request)
    {

        $name = $request->name;
        $email = $request->email;
        $comment = $request->comment;
        $id = $request->id;
        $rating = $request->rate;


        $comments = new Comments();
        $comments->naam = $name;
        $comments->email = $email;
        $comments->comment = $comment;
        $comments->recipes_id = $id;
        $comments->save();



        $rate = new Ratings();
        $rate->rating = $rating;
        $rate->recipes_id = $id;

        $rate->save();

        return back()->with('status', 'Comment added succesfully');
    }

    function deleteComment(Request $request)
    {
        $comment_id = $request->comment_id;
        $comment_id = Comments::find($comment_id);
        $comment_id->delete();
        return back()->with('error', 'Comment deleted');
    }


    function deleteRecipe(Request $request)
    {
        $recipe_id = $request->recipe_id;
        $recipe_id = Recipes::find($recipe_id);
        $recipe_id->delete();
        return redirect('overview')->with('error', 'Recipe deleted');
    }



}

