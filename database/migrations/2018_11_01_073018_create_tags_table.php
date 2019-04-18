<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('slug');
            $table->timestamps();
        });

        Schema::create('artikel_tag', function (Blueprint $table) {
            $table->integer('artikel_id');
            $table->integer('tag_id');
            $table->primary(['tag_id', 'artikel_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tags');
        Schema::dropIfExists('artikel_tag');
    }
}
