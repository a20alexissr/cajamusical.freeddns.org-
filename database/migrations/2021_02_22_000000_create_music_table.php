<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMusicTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('musics', function (Blueprint $table) {
            $table->id('id');
            $table->integer('idUserCancion');
            $table->string('titlemusic', 200)->nullable();
            $table->string('artistmusic', 100)->nullable();
            $table->text('descriptionmusic')->nullable();
            $table->string('linkmusic');
            $table->string('category1music')->nullable();
            $table->string('category2music')->nullable();
            $table->string('category3music')->nullable();
            $table->integer('totalreproductionmusic')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('musics');
    }
}
