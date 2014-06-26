<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThemeRegionsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ThemeRegions', function(Blueprint $table)
        {

            Schema::create("ThemeRegions",function(Blueprint $table)
            {

                $table->primary('id');
                $table->foreign('theme_id')->references('id')->on('themes');
                $table->string('name' , 256);
                $table->string('description' , 256);

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
        Schema::table('ThemeRegions', function(Blueprint $table)
        {
            Schema::dropIfExists("ThemeRegions");
        });
    }

}
