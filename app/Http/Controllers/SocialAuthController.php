<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\SocialAccountService;
use Illuminate\Support\Facades\Log;
use Socialite;
use App\Models\Role;

class SocialAuthController extends Controller
{
  public function redirect($social)
  {
      return Socialite::driver($social)->redirect();
  }

  public function callback($social)
  {
      $pureUser = Socialite::driver($social)->user();
      $user = SocialAccountService::createOrGetUser($pureUser, $social, $pureUser);
      $checkRole = Role::where("user_id", $user->id)->count();
      if($checkRole == 0)
        Role::setRole($user->id, Role::$defaultGroupRoleArr["student"]);
      if($user->avatar == "") $user->avatar = $pureUser->avatar_original;
      if($user->fb_token == "") $user->fb_token = $pureUser->token;
      if($user->website == "") $user->website = $pureUser->profileUrl;
      if($user->address == "") $user->address = '[]';
      $gender = $pureUser->user["gender"];
      $gender = in_array($gender, ['male','female', 'other']) ? $gender : 'male';
      $user->gender = $gender;
      $user->save();
      auth()->login($user);
      return redirect()->back();
  }
}


// http://127.0.0.1/callback/facebookXóahttp://127.0.0.1:8000/callback/facebookXóahttp://connectus.vn/callback/facebookXóa