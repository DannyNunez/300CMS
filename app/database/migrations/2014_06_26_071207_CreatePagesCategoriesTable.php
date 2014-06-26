<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesCategoriesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('PagesCategories', function(Blueprint $table)
        {
            Schema::create("PagesCategories",function(Blueprint $table)
            {
                $table->foreign('page_id')->references('id')->on('pages');
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
        Schema::table('PagesCategories', function(Blueprint $table)
        {
            Schema::dropIfExists("PagesCategories");
        });
    }

}
