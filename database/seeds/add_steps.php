<?php

use Illuminate\Database\Seeder;

class add_steps extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('steps')->insert(array(
            array('description' => '1', 'recipes_id' => '1'),
            array('description' => '2', 'recipes_id' => '1'),
            array('description' => '3', 'recipes_id' => '1'),
            array('description' => '4', 'recipes_id' => '1'),
            array('description' => '5', 'recipes_id' => '1'),
            array('description' => '6', 'recipes_id' => '1'),
            array('description' => '1', 'recipes_id' => '2'),
            array('description' => '2', 'recipes_id' => '2'),
            array('description' => '3', 'recipes_id' => '2'),
            array('description' => '4', 'recipes_id' => '2'),
            array('description' => '5', 'recipes_id' => '2'),
            array('description' => '6', 'recipes_id' => '2'),
            array('description' => '1', 'recipes_id' => '3'),
            array('description' => '2', 'recipes_id' => '3'),
            array('description' => '3', 'recipes_id' => '3'),
            array('description' => '4', 'recipes_id' => '3'),
            array('description' => '5', 'recipes_id' => '3'),
            array('description' => '6', 'recipes_id' => '3'),
        ));
    }
}
