<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users', function(Blueprint $table)
		{
			Schema::create("users",function(Blueprint $table)
            {
               $table->primary('id');
               $table->string("username")->nullable()->default(null);
               $table->string("first_name")->nullable()->default(null);
               $table->string("last_name")->nullable()->default(null);
               $table->string("password")->nullable()->default(null);
               $table->string("email")->nullable()->default(null);
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
		Schema::table('users', function(Blueprint $table)
		{
			Schema::dropIfExists("users");
		});
	}

}
