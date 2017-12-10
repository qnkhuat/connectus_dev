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
            $table->string('avatar')->nullable();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('fb_id')->unique()->nullable();
            $table->string('password');
            $table->string('website')->nullable();
            $table->rememberToken();
            $table->string('phone');
            $table->enum('gender', ['male', 'female', 'other']);
            $table->enum('group', ['student', 'post', 'parter', 'admin'])->default('student');
            $table->date('birth');
            $table->text('address')->nullable();
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
