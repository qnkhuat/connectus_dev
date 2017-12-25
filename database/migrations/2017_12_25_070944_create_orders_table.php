<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('course_id')->unsigned();
            $table->foreign('course_id')->references('id')->on('courses');
            $table->integer('course_branch_id')->unsigned();
            $table->foreign('course_branch_id')->references('id')->on('course_branchs');
            $table->float('price')->nullable();
            $table->float('sale')->nullable();
            $table->date('opening')->nullable();
            $table->string('gift', 511)->nullable();
            $table->string('message', 511)->nullable();
            $table->string('description', 511)->nullable();
            $table->enum('status', ['not_seen', 'seen', 'sent', 'received_success', 'received_fail']);
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
        Schema::dropIfExists('orders');
    }
}
