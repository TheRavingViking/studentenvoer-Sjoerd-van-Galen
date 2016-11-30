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
            array('name' => 'Pasta', 'unit' => 'gram', 'amount' => '250', 'recipes_id' => '1'),
            array('name' => 'Sauce', 'unit' => 'liter', 'amount' => '1', 'recipes_id' => '1'),
            array('name' => 'unions', 'unit' => 'whole', 'amount' => '1', 'recipes_id' => '1'),
            array('name' => 'Garlic', 'unit' => 'glove', 'amount' => '1', 'recipes_id' => '1'),
            array('name' => 'Curd', 'unit' => 'liter', 'amount' => '300', 'recipes_id' => '2'),
            array('name' => 'Cream', 'unit' => 'liter', 'amount' => '500', 'recipes_id' => '2'),
            array('name' => 'fruit', 'unit' => 'kilo', 'amount' => '1', 'recipes_id' => '2'),
            array('name' => 'Cake', 'unit' => 'gram', 'amount' => '500', 'recipes_id' => '2'),



        ));
    }
}


