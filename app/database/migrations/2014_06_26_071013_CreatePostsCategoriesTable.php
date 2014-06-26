<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsCategoriesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('PostsCategories', function(Blueprint $table)
        {
            Schema::create("PostsCategories",function(Blueprint $table)
            {
                $table->foreign('post_id')->references('id')->on('posts');
                $table->foreign('category_id')->references('id')->on('categories');
            });

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */

    public function down()
    {
        Schema::table('PostsCategories', function(Blueprint $table)
        {
            Schema::dropIfExists("PostsCategories");
        });
    }

}
