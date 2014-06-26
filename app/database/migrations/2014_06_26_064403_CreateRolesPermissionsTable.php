<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesPermissionsTable extends Migration {

    public function up()
    {
        Schema::table('RolesPermissions', function(Blueprint $table)
        {
            Schema::create("RolesPermissions",function(Blueprint $table)
            {
                $table->foreign('role_id')->references('id')->on('roles');
                $table->foreign('permission_id')->references('id')->on('permissions');
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
        Schema::table('RolesPermissions', function(Blueprint $table)
        {
            Schema::dropIfExists("RolesPermissions");
        });
    }

}
