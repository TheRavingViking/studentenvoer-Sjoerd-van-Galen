<?php

use Illuminate\Database\Seeder;

class add_ingred extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ingredients')->insert(array(
            array('ingredient' => 'Pasta', 'recipes_id' => '1'),
            array('ingredient' => 'Sauce', 'recipes_id' => '1'),
            array('ingredient' => 'unions','recipes_id' => '1'),
            array('ingredient' => 'Garlic', 'recipes_id' => '1'),
            array('ingredient' => 'Curd', 'recipes_id' => '2'),
            array('ingredient' => 'Cream', 'recipes_id' => '2'),
            array('ingredient' => 'fruit', 'recipes_id' => '2'),
            array('ingredient' => 'Cake', 'recipes_id' => '2'),



        ));
    }
}


