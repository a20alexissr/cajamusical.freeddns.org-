<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sounds', function (Blueprint $table) {
            $table->id('id');
            $table->integer('idUserSonidos');
            $table->string('titlesound', 100)->nullable();
            $table->text('descriptionsound')->nullable();
            $table->string('linksound');
            $table->string('category1sound');
            $table->string('category2sound')->nullable();
            $table->string('category3sound')->nullable();
            $table->string('totalreproductionsound')->default(0);
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
        Schema::dropIfExists('sounds');
    }
}
