<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('avatar');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('fb_id')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->string('phone');
            $table->enum('gender', ['male', 'female', 'other']);
            $table->enum('group', ['admin', 'parter', 'post', 'student'])->default('student');
            $table->date('birth');
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
        Schema::dropIfExists('users');
    }
}
