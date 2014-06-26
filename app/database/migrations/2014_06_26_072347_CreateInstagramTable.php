<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstagramTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Instagram', function(Blueprint $table)
        {
            Schema::create("Instagram",function(Blueprint $table)
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
        Schema::table('Instagram', function(Blueprint $table)
        {
            Schema::dropIfExists("Instagram");
        });
    }

}
