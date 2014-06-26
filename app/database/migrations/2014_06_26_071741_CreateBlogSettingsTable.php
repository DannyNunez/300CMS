<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogSettingsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('BlogSettings', function(Blueprint $table)
        {
            Schema::create("settings",function(Blueprint $table)
            {
                $table->primary('id');
                $table->string("order_by",4);
                $table->integer("posts_to_display_page");
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
        Schema::table('BlogSettings', function(Blueprint $table)
        {
            Schema::dropIfExists("BlogSettings");
        });
    }

}
