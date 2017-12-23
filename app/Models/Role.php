<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Role extends Model
{
  protected $table = 'roles';

  public static $list = [
      'create_role', 'create_user', 'update_user', 'destroy_user', 'view_user', 'login', 'change_all_user_address', 'view_all_user_address',
      'create_profile', 'update_profile', 'destroy_profile', 'view_profile',
      'create_category', 'update_category', 'destroy_category', 'view_category',
      'create_page', 'update_page', 'destroy_page', 'view_page',
      'create_post', 'update_post', 'destroy_post', 'view_post',
      'create_comment', 'update_comment', 'destroy_comment', 'view_comment',
      'create_teacher', 'update_teacher', 'update_all_teacher', 'destroy_teacher', 'destroy_all_teacher', 'view_teacher', 'view_all_teacher',
      'create_course_type', 'update_course_type', 'destroy_course_type', 'view_course_type',
      'create_course', 'update_course', 'update_all_course', 'destroy_all_course', 'destroy_course', 'view_course', 'view_all_course',
      'create_log', 'update_log', 'destroy_log', 'view_log',
      'create_menu', 'update_menu', 'destroy_menu', 'view_menu',
      'create_banner', 'update_banner', 'destroy_banner', 'view_banner',
      'create_footer', 'update_footer', 'destroy_footer', 'view_footer',
      'create_order', 'update_order', 'destroy_order', 'view_order', 'send_order',
      'create_resource', 'update_resource', 'destroy_resource', 'view_resource',
      'create_notification', 'update_notification', 'destroy_notification', 'view_notification',
      'send_mail', 'view_mail'
    ];
  public static $defaultGroupRole = "{
    'student': [
      'login', 'update_profile', 'view_profile',
      'create_comment', 'update_comment', 'destroy_comment'
    ],
    'post': [
      'login', 'update_profile', 'view_profile',
      'create_comment', 'update_comment', 'destroy_comment',
      'create_post', 'update_post', 'destroy_post'
    ],
    'partner': [
      'login', 'update_profile', 'view_profile',
      'create_comment', 'update_comment', 'destroy_comment',
      'create_post', 'update_post', 'destroy_post',
      'create_course', 'update_course', 'destroy_course'
    ],
    'admin': [
      'create_user', 'update_user', 'destroy_user', 'view_user', 'login', 'change_all_user_address', 'view_all_user_address',
      'create_profile', 'update_profile', 'destroy_profile', 'view_profile',
      'create_category', 'update_category', 'destroy_category', 'view_category',
      'create_page', 'update_page', 'destroy_page', 'view_page',
      'create_post', 'update_post', 'destroy_post', 'view_post',
      'create_comment', 'update_comment', 'destroy_comment', 'view_comment',
      'create_teacher', 'update_teacher', 'update_all_teacher', 'destroy_teacher', 'destroy_all_teacher', 'view_teacher', 'view_all_teacher',
      'create_course_type', 'update_course_type', 'destroy_course_type', 'view_course_type',
      'create_course', 'update_course', 'update_all_course', 'destroy_all_course', 'destroy_course', 'view_course', 'view_all_course',
      'create_log', 'update_log', 'destroy_log', 'view_log',
      'create_menu', 'update_menu', 'destroy_menu', 'view_menu',
      'create_banner', 'update_banner', 'destroy_banner', 'view_banner',
      'create_footer', 'update_footer', 'destroy_footer', 'view_footer',
      'create_order', 'update_order', 'destroy_order', 'view_order', 'send_order',
      'create_resource', 'update_resource', 'destroy_resource', 'view_resource',
      'create_notification', 'update_notification', 'destroy_notification', 'view_notification',
      'send_mail', 'view_mail'
    ]
  }";

  public static $defaultGroupRoleArr = [
    'student'=> [
      'login', 'update_profile', 'view_profile',
      'create_comment', 'update_comment', 'destroy_comment'
    ],
    'post' => [
      'login', 'update_profile', 'view_profile',
      'create_comment', 'update_comment', 'destroy_comment',
      'create_post', 'update_post', 'destroy_post'
    ],
    'partner' => [
      'login', 'update_profile', 'view_profile',
      'create_comment', 'update_comment', 'destroy_comment',
      'create_post', 'update_post', 'destroy_post',
      'create_course', 'update_course', 'destroy_course'
    ],
    'admin' => [
      'create_user', 'update_user', 'destroy_user', 'view_user', 'login', 'change_all_user_address', 'view_all_user_address',
      'create_profile', 'update_profile', 'destroy_profile', 'view_profile',
      'create_category', 'update_category', 'destroy_category', 'view_category',
      'create_page', 'update_page', 'destroy_page', 'view_page',
      'create_post', 'update_post', 'destroy_post', 'view_post',
      'create_comment', 'update_comment', 'destroy_comment', 'view_comment',
      'create_teacher', 'update_teacher', 'update_all_teacher', 'destroy_teacher', 'destroy_all_teacher', 'view_teacher', 'view_all_teacher',
      'create_course_type', 'update_course_type', 'destroy_course_type', 'view_course_type',
      'create_course', 'update_course', 'update_all_course', 'destroy_all_course', 'destroy_course', 'view_course', 'view_all_course',
      'create_log', 'update_log', 'destroy_log', 'view_log',
      'create_menu', 'update_menu', 'destroy_menu', 'view_menu',
      'create_banner', 'update_banner', 'destroy_banner', 'view_banner',
      'create_footer', 'update_footer', 'destroy_footer', 'view_footer',
      'create_order', 'update_order', 'destroy_order', 'view_order', 'send_order',
      'create_resource', 'update_resource', 'destroy_resource', 'view_resource',
      'create_notification', 'update_notification', 'destroy_notification', 'view_notification',
      'send_mail', 'view_mail'
    ]
  ];

  public static function setRole($userId, $newRoles) {
      $user = User::find($userId);
      $user->role()->delete();
      $role = new self;
      $role->user_id = $userId;
      foreach($newRoles as $r)
      {
        if(in_array($r, $role::$list))
          $role->$r = true;
      }
      $role->save();
  }

  public function user()
  {
    return $this->belongsTo('App\User');
  }
}
