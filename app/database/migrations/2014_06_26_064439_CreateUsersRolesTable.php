<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersRolesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('UsersRoles', function(Blueprint $table)
        {
            Schema::create("UsersRoles",function(Blueprint $table)
            {
                $table->foreign('user_id')->references('id')->on('users');
                $table->foreign('role_id')->references('id')->on('roles');
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
        Schema::table('UsersRoles', function(Blueprint $table)
        {
            Schema::dropIfExists("UsersRoles");
        });
    }

}
