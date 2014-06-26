<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('roles', function(Blueprint $table)
        {
            Schema::create("roles",function(Blueprint $table)
            {

                $table->primary('id');
                $table->string("name",256);
                $table->string("description",256);
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
        Schema::table('roles', function(Blueprint $table)
        {
            Schema::dropIfExists("roles");
        });
    }

}
