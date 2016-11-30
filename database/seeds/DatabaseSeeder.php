<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(add_user::class);
        $this->call(add_recipe::class);
        $this->call(add_ingred::class);
        $this->call(add_steps::class);
    }
}
