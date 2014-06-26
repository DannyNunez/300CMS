<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('categories', function(Blueprint $table)
        {
            Schema::create("categories",function(Blueprint $table)
            {
                $table->primary('id');
                $table->string("name",256);
                $table->timestamps();
                $table->softDeletes();

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
        Schema::table('categories', function(Blueprint $table)
        {
            Schema::dropIfExists("categories");
        });
    }

}
