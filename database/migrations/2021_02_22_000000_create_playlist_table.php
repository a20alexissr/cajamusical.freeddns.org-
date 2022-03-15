<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlaylistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('playlists', function (Blueprint $table) {
            $table->id('id');
            $table->string('iduserplaylist');
            $table->string('playlistnameplaylist');
            $table->string('privacityplaylist');
            $table->string('musicorsoundplaylist');
            $table->string('favoriteplaylist')->nullable();
            $table->string('musiccategoriyplaylist');
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
        Schema::dropIfExists('playlists');
    }
}
