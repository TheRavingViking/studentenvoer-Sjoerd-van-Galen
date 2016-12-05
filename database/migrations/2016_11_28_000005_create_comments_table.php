<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     * @table comments
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('comment', 255)->nullable();
            $table->string('naam', 45)->nullable();
            $table->integer('recipes_id')->unsigned();
            $table->integer('users_id')->unsigned();
            $table->timestamp('created_at')->nullable()->default(null);
            $table->timestamp('updated_at')->nullable()->default(null);


            $table->foreign('recipes_id', 'fk_comments_recipes1_idx')
                ->references('id')->on('recipes')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('users_id', 'fk_comments_users1_idx')
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
       Schema::drop('comments');
     }
}
