<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Models\Category;
use App\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $gender = ['male', 'female', 'other'];
        $group = ['student', 'post', 'parter', 'admin'];
        for($i = 0; $i < 32; $i ++) {
          $randNumber = rand(0, 2);
          $randGroup = rand(0, 3);

          $address = json_encode(["địa chỉ số " . rand(1,100), "Địa chỉ số 2 là: " . rand(1,100)], JSON_UNESCAPED_UNICODE);
          $user = new User;
          $user->name = str_random(10);
          $user->group = $group[$randGroup];
          $user->email = str_random(10).'@gmail.com';
          $user->password = bcrypt('secret');
          $user->avatar = '1.jpg';
          $user->website = 'https://www.youtube.com/' . str_random(10);
          $user->phone = '0969540038';
          $user->gender = $gender[$randNumber];
          $user->address = $address;
          $user->save();

          $role = new Role;
          $role->user_id = $user->id;
          $role->create_role = rand(0, 1);
          $role->create_user = rand(0, 1);
          $role->destroy_user = rand(0, 1);
          $role->update_course = rand(0, 1);
          $role->destroy_course = rand(0, 1);
          $role->view_log = rand(0, 1);
          $role->create_footer = rand(0, 1);
          $role->view_order = rand(0, 1);
          $role->create_notification = rand(0, 1);
          $role->save();
        }

        $category = new Category;
        $category->user_id = 1;
        $category->name = 'Học ai eo cùng Happy Polla';
        $category->description = 'Vừa học vừa chùi nước miếng ))';
        $category->publish = true;
        $category->save();

        $category2 = new Category;
        $category2->user_id = 1;
        $category2->name = 'Tô ích 900 trong 2 giờ ))';
        $category2->description = 'Chất lượng méo thể ngờ ))';
        $category2->publish = false;
        $category2->save();

        for($i = 0; $i < 32; $i ++) {
          $randNumber = rand(1, 9);
          $category3 = new Category;
          $category3->user_id = $randNumber;
          $category3->name = str_random(10);
          $category3->description = str_random(10);
          $category3->publish = rand(0, 1);
          $category3->save();
        }
    }
}
