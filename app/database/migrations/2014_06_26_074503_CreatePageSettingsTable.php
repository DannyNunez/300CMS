<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePageSettingsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('PageSettings', function(Blueprint $table)
        {
            Schema::create("PageSettings",function(Blueprint $table)
            {
                $table->primary('id');
                $table->string("order_by",4);
                $table->integer("pages_to_display");
                $table->integer("posts_to_display_feed");
                $table->boolean("display_feed_full");
                $table->boolean("feed");
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
        Schema::table('PageSettings', function(Blueprint $table)
        {
            Schema::dropIfExists("PageSettings");
        });
    }

}
