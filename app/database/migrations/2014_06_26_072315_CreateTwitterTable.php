<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTwitterTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Twitter', function(Blueprint $table)
        {
            Schema::create("Twitter",function(Blueprint $table)
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
        Schema::table('Twitter', function(Blueprint $table)
        {
            Schema::dropIfExists("Twitter");
        });
    }

}
