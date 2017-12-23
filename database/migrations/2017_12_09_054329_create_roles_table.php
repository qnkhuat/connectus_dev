<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->unique();
            $table->foreign('user_id')->references('id')->on('users');

            $table->boolean('create_role')->default(false);
            $table->boolean('create_user')->default(false);
            $table->boolean('update_user')->default(false);
            $table->boolean('destroy_user')->default(false);
            $table->boolean('view_user')->default(false);
            $table->boolean('login')->default(false);
            $table->boolean('view_all_user_address')->default(false);
            $table->boolean('change_all_user_address')->default(false);

            $table->boolean('create_profile')->default(false);
            $table->boolean('update_profile')->default(false);
            $table->boolean('destroy_profile')->default(false);
            $table->boolean('view_profile')->default(false);

            $table->boolean('create_category')->default(false);
            $table->boolean('update_category')->default(false);
            $table->boolean('destroy_category')->default(false);
            $table->boolean('view_category')->default(false);

            $table->boolean('create_page')->default(false);
            $table->boolean('update_page')->default(false);
            $table->boolean('destroy_page')->default(false);
            $table->boolean('view_page')->default(false);

            $table->boolean('create_post')->default(false);
            $table->boolean('update_post')->default(false);
            $table->boolean('destroy_post')->default(false);
            $table->boolean('view_post')->default(false);

            $table->boolean('create_comment')->default(false);
            $table->boolean('update_comment')->default(false);
            $table->boolean('destroy_comment')->default(false);
            $table->boolean('view_comment')->default(false);

            $table->boolean('create_course_type')->default(false);
            $table->boolean('update_course_type')->default(false);
            $table->boolean('update_all_course_type')->default(false);
            $table->boolean('destroy_course_type')->default(false);
            $table->boolean('destroy_all_course_type')->default(false);
            $table->boolean('view_course_type')->default(false);

            $table->boolean('create_teacher')->default(false);
            $table->boolean('update_teacher')->default(false);
            $table->boolean('destroy_teacher')->default(false);
            $table->boolean('update_all_teacher')->default(false);
            $table->boolean('destroy_all_teacher')->default(false);
            $table->boolean('view_teacher')->default(false);
            $table->boolean('view_all_teacher')->default(false);


            $table->boolean('create_course')->default(false);
            $table->boolean('update_course')->default(false);
            $table->boolean('destroy_course')->default(false);
            $table->boolean('update_all_course')->default(false);
            $table->boolean('destroy_all_course')->default(false);
            $table->boolean('view_course')->default(false);
            $table->boolean('view_all_course')->default(false);

            $table->boolean('create_log')->default(false);
            $table->boolean('update_log')->default(false);
            $table->boolean('destroy_log')->default(false);
            $table->boolean('view_log')->default(false);

            $table->boolean('create_menu')->default(false);
            $table->boolean('update_menu')->default(false);
            $table->boolean('destroy_menu')->default(false);
            $table->boolean('view_menu')->default(false);

            $table->boolean('create_banner')->default(false);
            $table->boolean('update_banner')->default(false);
            $table->boolean('destroy_banner')->default(false);
            $table->boolean('view_banner')->default(false);

            $table->boolean('create_footer')->default(false);
            $table->boolean('update_footer')->default(false);
            $table->boolean('destroy_footer')->default(false);
            $table->boolean('view_footer')->default(false);

            $table->boolean('create_order')->default(false);
            $table->boolean('update_order')->default(false);
            $table->boolean('destroy_order')->default(false);
            $table->boolean('view_order')->default(false);
            $table->boolean('send_order')->default(false);

            $table->boolean('create_resource')->default(false);
            $table->boolean('update_resource')->default(false);
            $table->boolean('destroy_resource')->default(false);
            $table->boolean('view_resource')->default(false);

            $table->boolean('create_notification')->default(false);
            $table->boolean('update_notification')->default(false);
            $table->boolean('destroy_notification')->default(false);
            $table->boolean('view_notification')->default(false);

            $table->boolean('send_mail')->default(false);
            $table->boolean('view_mail')->default(false);

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
        Schema::dropIfExists('roles');
    }
}
