<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermissionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::table('permissions', function(Blueprint $table)
        {
            Schema::create("permissions",function(Blueprint $table)
            {
                $table->primary('id');
                $table->string("name",256);
                $table->string("description",256);
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
        Schema::table('permissions', function(Blueprint $table)
        {
            Schema::dropIfExists("permissions");
        });
	}

}
