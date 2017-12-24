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
            $table->char('avatar', 255)->nullable();
            $table->text('video')->nullable();
            $table->text('slide')->nullable();
            $table->char('name', 255);
            $table->float('old_price')->nullable();
            $table->float('new_price')->default(0);
            $table->boolean('new_price_only')->default(true);
            $table->float('sale')->nullable()->default(0);
            $table->string('gift', 511)->nullable();
            $table->date('opening')->nullable();
            $table->integer('current_student_total')->nullable()->default(0);
            $table->integer('student_total')->nullable()->default(0);
            $table->integer('lesson_total')->nullable()->default(0);
            $table->integer('hour_total')->nullable()->default(0);
            $table->integer('session_total')->nullable()->default(0);
            $table->integer('session_per_week')->nullable()->default(0);
            $table->string('districts_text', 511)->nullable();
            $table->string('districts_array_id', 511)->nullable();
            $table->string('day_in_week', 255)->nullable();
            $table->string('time', 255)->nullable();
            $table->string('time_from', 255)->nullable();
            $table->string('time_to', 255)->nullable();
            $table->enum('time_in_date', ['s', 'c', 't', 'both'])->default('both');
            $table->string('description', 511);
            $table->text('content');
            $table->enum('teacher_type', ['viet_nam', 'native', 'viet_nam_and_native'])->default('viet_nam');
            $table->boolean('publish')->default(false);
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
        Schema::dropIfExists('courses');
    }
}
