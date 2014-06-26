<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::table('settings', function(Blueprint $table)
        {
            Schema::create("settings",function(Blueprint $table)
            {
                $table->primary('id');
                $table->string("admin_email",256);
                $table->string("admin_first_name",256);
                $table->string("admin_last_name",256);
                $table->string("admin_user_name",256);
                $table->string("title",256);
                $table->string("tag_line",256);
                $table->string("time_zone",256);
                $table->string("date_format",256);
                $table->string("time_format",256);
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
        Schema::table('settings', function(Blueprint $table)
        {
            Schema::dropIfExists("settings");
        });
	}

}
