<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('post_id')->unsigned();
            $table->integer('parent_id')->unsigned()->nullable();
            $table->string('name');
            $table->string('email');
            $table->string('blog');
            $table->text('content');
            $table->boolean('seen')->default(0);
            $table->boolean('valid')->default(1);
            $table->boolean('subscription')->default(1);
            $table->text('origin');
            $table->nullableTimestamps();
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
