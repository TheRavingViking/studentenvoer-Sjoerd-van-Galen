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
        $this->call(add_ratings::class);

        factory(App\Recipes::class, 200)
            ->create()
            ->each(function($i) {$i->Ingredients()->saveMany(factory(App\Ingredients::class, 6)
                ->make());})
            ->each(function($s) {$s->Steps()->saveMany(factory(App\Steps::class, 10)
                ->make());})
            ->each(function($r) {$r->Ratings()->saveMany(factory(App\Ratings::class, 5)
                ->make());})
            ->each(function($c) {$c->Comments()->saveMany(factory(App\Comments::class, 3)
                ->make());});



    }
}
