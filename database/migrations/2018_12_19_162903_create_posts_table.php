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
             $table->string('post_byggnad');
             $table->string('post_sal');
             $table->string('post_typ');
             $table->string('post_modell');
             $table->string('post_serienummer');
             $table->string('post_ägare');
             $table->string('post_stöldnummer');
             $table->string('post_annteckning');
             $table->timestamps();
         });
     }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
