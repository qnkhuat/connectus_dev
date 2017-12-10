<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('course_type_id')->unsigned();
            $table->foreign('course_type_id')->references('id')->on('course_types');
            $table->char('avatar', 255);
            $table->text('slide');
            $table->char('name', 255);
            $table->float('old_price');
            $table->float('new_price');
            $table->boolean('new_price_only')->default(true);
            $table->float('sale');
            $table->string('gift', 511);
            $table->date('opening');
            $table->integer('current_student_total')->default(0);
            $table->integer('student_total')->default(0);
            $table->integer('lesson_total')->default(0);
            $table->integer('hour_total')->default(0);
            $table->integer('session_total')->default(0);
            $table->string('description', 511);
            $table->text('content');
            $table->boolean('publish')->default(false);
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
        Schema::dropIfExists('courses');
    }
}
