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
            $table->float('price', 16)->nullable();
            $table->float('sale', 16)->nullable();
            $table->date('opening')->nullable();
            $table->string('gift', 511)->nullable();
            $table->string('name', 255)->nullable();
            $table->string('email', 255)->nullable();
            $table->string('message', 511)->nullable();
            $table->string('phone', 255)->nullable();
            $table->string('description', 511)->nullable();
            $table->string('know', 255)->nullable(); // biết trung tâm qua ...
            $table->date('payment_schedule')->nullable(); // ngày user hẹn đóng tiền
            $table->date('payment_date_complete')->nullable(); // ngày thanh toán thực (đã thanh toán vào ngày này)
            $table->date('receive_money_date')->nullable(); // ngày hệ thống nhận được tiền
            $table->float('admin_receive_money_count', 16)->nullable()->default(0); // số tiền hoa hồng admin nhận được
            $table->enum('admin_status', ['not_seen', 'seen', 'sent', 'received_success', 'received_fail'])->default("not_seen");
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
