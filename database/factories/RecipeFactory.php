<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\Recipes::class, function (Faker\Generator $faker) {


$category = array('Lunch', 'Dinner', 'Dessert', 'Breakfast');


    return [
        'name' => $faker->name,
        'description' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        'category' => $faker->randomElement($category),
        'image' => 'default.png',
        'users_id' => '1'
    ];
});
