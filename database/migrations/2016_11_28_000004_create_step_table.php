<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStepTable extends Migration
{
    /**
     * Run the migrations.
     * @table step
     *
     * @return void
     */
    public function up()
    {
        Schema::create('steps', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('description');
            $table->integer('recipes_id')->unsigned();
            $table->nullableTimestamps();
            $table->softDeletes();


            $table->foreign('recipes_id', 'fk_step_recipes_idx')
                ->references('id')->on('recipes')
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
       Schema::drop('steps');
     }
}
