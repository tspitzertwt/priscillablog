<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('slug')->unique()->index();
            $table->string('summary');
            $table->integer('category_id')->unsigned();
            $table->text('body');
            $table->text('origin');
            $table->integer('comment_count')->default(0);
            $table->integer('view_count')->default(0);
            $table->integer('favorite_count')->default(0);
            $table->boolean('published');
            $table->bigInteger('exported_at')->nullable();
            $table->softDeletes();
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
        Schema::drop('posts');
    }
}
