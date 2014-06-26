<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThemesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('themes', function(Blueprint $table)
        {
            Schema::create("themes",function(Blueprint $table)
            {

                $table->primary('id');
                $table->string("name",256);
                $table->text("description");
                $table->string("splash_image",256);
                $table->string("header_image",256);
                $table->string("author",256);
                $table->string("docs_url",256);
                $table->string("version",256);
                $table->timestamp("version_release_date");
                $table->boolean('active');
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
        Schema::table('themes', function(Blueprint $table)
        {
            Schema::dropIfExists("themes");
        });
    }

}
