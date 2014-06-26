<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pages', function(Blueprint $table)
        {
            Schema::create("pages",function(Blueprint $table)
            {
                $table->primary('id');
                $table->foreign('user_id')->references('id')->on('users');
                $table->string("title",256);
                $table->string("sub_title",256);
                $table->foreign('featured_image_id')->references('id')->on('media');
                $table->text('content');
                $table->text('description');
                $table->string("meta_keywords",256);
                $table->string("meta_description",256);
                $table->string("slug",256);
                $table->string("link_label",256);
                $table->string("link_title",256);
                $table->boolean('status');
                $table->dateTime('created_at_gmt');
                $table->dateTime('updated_at_gmt');
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
        Schema::table('pages', function(Blueprint $table)
        {
            Schema::dropIfExists("pages");
        });
    }

}
