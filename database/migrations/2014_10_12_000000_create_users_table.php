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
            $table->string('fb_id')->nullable();
            $table->string('fb_token')->nullable();
            $table->string('password');
            $table->string('website')->nullable();
            $table->rememberToken();
            $table->string('phone')->nullable();
            $table->enum('gender', ['male', 'female', 'other'])->default('male');
            $table->enum('group', ['student', 'post', 'parter', 'admin'])->default('student');
            $table->date('birth')->nullable();
            $table->text('address')->nullable();
            $table->string('description', 512)->nullable();
            $table->string('fb_page', 512)->nullable();
            $table->boolean('deleted')->default(false);
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
