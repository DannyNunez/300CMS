<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoogleTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Google', function(Blueprint $table)
        {
            Schema::create("Google",function(Blueprint $table)
            {

                $table->primary('id');
                $table->string("app_id");
                $table->string("user_id");
                $table->string("token");
                $table->softDeletes();
                $table->timestamps();

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
        Schema::table('Google', function(Blueprint $table)
        {
            Schema::dropIfExists("Google");
        });
    }

}
