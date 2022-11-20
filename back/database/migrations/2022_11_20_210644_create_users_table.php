<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('name', 50);
            $table->integer('prefecture_id')->index('FK_users_prefectures');
            $table->date('birthday');
            $table->string('password', 100);
            $table->string('email');
            $table->string('tel', 11);
            $table->string('memo', 500)->nullable();
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
            $table->integer('is_delete');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
