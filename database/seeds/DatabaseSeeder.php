<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Models\Category;
use App\Models\Role;
use App\Models\CourseType;
use App\Models\Address;
use App\Models\Teacher;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
          'avatar' => 'default.png',
          'name' => 'Super Admin',
          'email' => 'admin@connectus.vn',
          'password' => bcrypt("admin"),
          'website' => 'http://connectus.vn',
          'phone' => '0969540038',
          'gender' => 'male',
          'group' => 'admin',
          'birth' => '1994/01/22',
          'description' => 'tài khoản mặc định của hệ thống',
          'fb_page' => 'https://facebook.com/trung.hongoc',
        ]);

        $partner1  = User::create([
          'avatar' => 'default.png',
          'name' => 'Trung tâm ngoại ngữ ahihi',
          'email' => 'partner1@connectus.vn',
          'password' => bcrypt("admin"),
          'website' => 'http://connectus.vn',
          'phone' => '0969540038',
          'gender' => 'male',
          'group' => 'partner',
          'birth' => '1994/01/22',
          'description' => 'tài khoản mặc định của hệ thống',
          'fb_page' => 'https://facebook.com/trung.hongoc',
        ]);

        $partner2  = User::create([
          'avatar' => 'default.png',
          'name' => 'Trung tâm ngoại ngữ bhihi',
          'email' => 'partner2@connectus.vn',
          'password' => bcrypt("admin"),
          'website' => 'http://connectus.vn',
          'phone' => '0969540038',
          'gender' => 'male',
          'group' => 'partner',
          'birth' => '1994/01/22',
          'description' => 'tài khoản mặc định của hệ thống',
          'fb_page' => 'https://facebook.com/trung.hongoc',
        ]);

        Role::create([
          'user_id' => $admin->id,
          'create_role' => true,
          'create_user' => true,
          'update_user' => true,
          'destroy_user' => true,
          'view_user' => true,
          'login' => true,
          'view_all_user_address' => true,
          'change_all_user_address' => true,

          'create_profile' => true,
          'update_profile' => true,
          'destroy_profile' => true,
          'view_profile' => true,

          'create_category' => true,
          'update_category' => true,
          'destroy_category' => true,
          'view_category' => true,

          'create_page' => true,
          'update_page' => true,
          'destroy_page' => true,
          'view_page' => true,

          'create_post' => true,
          'update_post' => true,
          'destroy_post' => true,
          'view_post' => true,

          'create_comment' => true,
          'update_comment' => true,
          'destroy_comment' => true,
          'view_comment' => true,

          'create_course_type' => true,
          'update_course_type' => true,
          'destroy_course_type' => true,
          'view_course_type' => true,

          'create_teacher' => true,
          'update_teacher' => true,
          'destroy_teacher' => true,
          'update_all_teacher' => true,
          'destroy_all_teacher' => true,
          'view_teacher' => true,
          'view_all_teacher' => true,

          'create_course' => true,
          'update_course' => true,
          'update_all_course' => true,
          'destroy_course' => true,
          'view_course' => true,
          'view_all_course' => true,
          'destroy_all_course' => true,

          'create_log' => true,
          'update_log' => true,
          'destroy_log' => true,
          'view_log' => true,

          'create_menu' => true,
          'update_menu' => true,
          'destroy_menu' => true,
          'view_menu' => true,

          'create_banner' => true,
          'update_banner' => true,
          'destroy_banner' => true,
          'view_banner' => true,

          'create_footer' => true,
          'update_footer' => true,
          'destroy_footer' => true,
          'view_footer' => true,

          'create_order' => true,
          'update_order' => true,
          'destroy_order' => true,
          'view_order' => true,
          'send_order' => true,

          'create_resource' => true,
          'update_resource' => true,
          'destroy_resource' => true,
          'view_resource' => true,

          'create_notification' => true,
          'update_notification' => true,
          'destroy_notification' => true,
          'view_notification' => true,

          'send_mail' => true,
          'view_mail' => true,
        ]);

        Role::create([
          'user_id' => $partner1->id,
          'login' => true,

          'create_profile' => true,
          'update_profile' => true,
          'destroy_profile' => true,
          'view_profile' => true,

          'create_post' => true,
          'update_post' => true,
          'destroy_post' => true,
          'view_post' => true,

          'create_comment' => true,
          'update_comment' => true,
          'destroy_comment' => true,
          'view_comment' => true,

          'create_course_type' => true,
          'update_course_type' => true,
          'destroy_course_type' => true,
          'view_course_type' => true,

          'create_teacher' => true,
          'update_teacher' => true,
          'destroy_teacher' => true,
          'view_teacher' => true,
          // 'view_all_teacher' => true,

          'create_course' => true,
          'update_course' => true,
          'destroy_course' => true,
          'view_course' => true,
        ]);

        Role::create([
          'user_id' => $partner2->id,
          'login' => true,

          'create_profile' => true,
          'update_profile' => true,
          'destroy_profile' => true,
          'view_profile' => true,

          'create_post' => true,
          'update_post' => true,
          'destroy_post' => true,
          'view_post' => true,

          'create_comment' => true,
          'update_comment' => true,
          'destroy_comment' => true,
          'view_comment' => true,

          'create_course_type' => true,
          'update_course_type' => true,
          'destroy_course_type' => true,
          'view_course_type' => true,

          'create_teacher' => true,
          'update_teacher' => true,
          'destroy_teacher' => true,
          'view_teacher' => true,
          // 'view_all_teacher' => true,

          'create_course' => true,
          'update_course' => true,
          'destroy_course' => true,
          'view_course' => true,
        ]);

        Category::create([
          'user_id' => $admin->id,
          'name' => 'Học ai eo cùng Happy Polla',
          'description' => 'Vừa học vừa chùi nước miếng ))',
          'publish' => true
        ]);

        CourseType::create([
            'user_id' => $admin->id,
            'name' => 'Ai eo',
            'slug' => 'ai-eo',
            'publish' => true
        ]);

        CourseType::create([
            'user_id' => $admin->id,
            'name' => 'tô x',
            'slug' => 'to-x',
            'publish' => true
        ]);

        Address::create([
          'user_id' => $partner1->id,
          'sort_description' => 'Cơ sở Hồ Tùng Mậu',
          'address' => 'số 69 ngách 96 đường Hồ Tùng Mậu, phường Hồ Tùng Mậu, quận Hồ Tùng Mậu',
        ]);
        Address::create([
          'user_id' => $partner1->id,
          'sort_description' => 'Cơ sở Hồ XUân Hương',
          'address' => 'số 69 ngách 96 đường Hồ XUân Hương, phường Hồ XUân Hương, Hồ XUân Hương',
        ]);
        Address::create([
          'user_id' => $partner2->id,
          'sort_description' => 'Cơ sở Lào Kai',
          'address' => 'Vách núi',
        ]);
        Teacher::create([
          'user_id' => $partner1->id,
          "name" => "cô giáo thảo ))"
        ]);
    }
}
