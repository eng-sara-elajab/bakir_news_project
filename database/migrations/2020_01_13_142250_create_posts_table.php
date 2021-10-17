<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            // $table->integer('user_id')->default(0);
            // $table->integer('category_id')->default(0);
            // $table->integer('photo_id')->default(0);
            $table->string('title');
            $table->string('body', 1000);
            $table->string('slug');
            $table->string('image')->default('default.jpg');
            $table->string('auther');
            $table->string('type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.

     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
