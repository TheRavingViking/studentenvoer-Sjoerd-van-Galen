<?php

use Illuminate\Database\Seeder;

class add_ratings extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ratings')->insert(array(
            array('rating' => '5', 'recipes_id' => '1'),
            array('rating' => '1', 'recipes_id' => '1'),
            array('rating' => '5', 'recipes_id' => '2'),
            array('rating' => '3', 'recipes_id' => '2'),
            array('rating' => '8', 'recipes_id' => '3'),
            array('rating' => '1', 'recipes_id' => '3'),

        ));
    }
}


