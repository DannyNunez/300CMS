<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLinkedinTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Linkedin', function(Blueprint $table)
        {
            Schema::create("Linkedin",function(Blueprint $table)
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
        Schema::table('Linkedin', function(Blueprint $table)
        {
            Schema::dropIfExists("Linkedin");
        });
    }

}
