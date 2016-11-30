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
        array('step_number' => '1', 'description' => '1', 'recipes_id' => '1'),
        array('step_number' => '2', 'description' => '1', 'recipes_id' => '1'),
        array('step_number' => '3', 'description' => '1', 'recipes_id' => '1'),
        array('step_number' => '4', 'description' => '1', 'recipes_id' => '1'),
        array('step_number' => '5', 'description' => '1', 'recipes_id' => '1'),
        array('step_number' => '6', 'description' => '1', 'recipes_id' => '1'),
        array('step_number' => '1', 'description' => '1', 'recipes_id' => '2'),
        array('step_number' => '2', 'description' => '1', 'recipes_id' => '2'),
        array('step_number' => '3', 'description' => '1', 'recipes_id' => '2'),
        array('step_number' => '4', 'description' => '1', 'recipes_id' => '2'),
        array('step_number' => '5', 'description' => '1', 'recipes_id' => '2'),
        array('step_number' => '6', 'description' => '1', 'recipes_id' => '2'),
        ));
    }
}
