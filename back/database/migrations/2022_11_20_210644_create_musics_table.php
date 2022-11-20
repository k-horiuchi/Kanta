<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMusicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('musics', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('name', 100);
            $table->string('artist', 100);
            $table->integer('genre_id')->index('FK_musics_genres');
            $table->integer('content_id')->index('FK_musics_contents');
            $table->integer('is_favorite');
            $table->integer('user_id')->index('FK_musics_users');
            $table->string('lyrics_url', 2083)->nullable();
            $table->string('movie_url', 2083)->nullable();
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
            $table->integer('is_deleted');
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
