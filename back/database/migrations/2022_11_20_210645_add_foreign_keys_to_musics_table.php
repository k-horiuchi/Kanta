<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToMusicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('musics', function (Blueprint $table) {
            $table->foreign(['genre_id'], 'FK_musics_genres')->references(['id'])->on('genres')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['user_id'], 'FK_musics_users')->references(['id'])->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['content_id'], 'FK_musics_contents')->references(['id'])->on('contents')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('musics', function (Blueprint $table) {
            $table->dropForeign('FK_musics_genres');
            $table->dropForeign('FK_musics_users');
            $table->dropForeign('FK_musics_contents');
        });
    }
}
