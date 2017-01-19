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
            array('name' => 'Pasta', 'recipes_id' => '1'),
            array('name' => 'Sauce', 'recipes_id' => '1'),
            array('name' => 'unions','recipes_id' => '1'),
            array('name' => 'Garlic', 'recipes_id' => '1'),
            array('name' => 'Curd', 'recipes_id' => '2'),
            array('name' => 'Cream', 'recipes_id' => '2'),
            array('name' => 'fruit', 'recipes_id' => '2'),
            array('name' => 'Cake', 'recipes_id' => '2'),
            array('name' => 'Curd', 'recipes_id' => '3'),
            array('name' => 'Cream', 'recipes_id' => '3'),
            array('name' => 'fruit', 'recipes_id' => '3'),
            array('name' => 'Cake', 'recipes_id' => '3'),




        ));
    }
}


