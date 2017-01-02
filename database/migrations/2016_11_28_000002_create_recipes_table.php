<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     * @table recipes
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 255);
            $table->text('description')->nullable();
            $table->string('category', 25);
            $table->text('image')->nullable();
            $table->integer('users_id')->unsigned();
            $table->nullableTimestamps();
            $table->softDeletes();

            $table->foreign('users_id', 'fk_recipes_users1_idx')
                ->references('id')->on('users')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::drop('recipes');
     }
}
