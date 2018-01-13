<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\SocialAccountService;
use Illuminate\Support\Facades\Log;
use Socialite, Session;
use App\Models\Role;

class SocialAuthController extends Controller
{
  public function redirect($social, Request $request)
  {
      $previousUrlFbLogin = $request->previousUrlFbLogin;
      // $previousUrlFbLogin = substr($previousUrlFbLogin, 10, strlen($previousUrlFbLogin));
      // $previousUrlFbLogin = substr($previousUrlFbLogin, strpos($previousUrlFbLogin, "http"), strlen($previousUrlFbLogin));
      // $previousUrlFbLogin = str_replace("%2F", "/", $previousUrlFbLogin);
      // $previousUrlFbLogin = str_replace("%3A", ":", $previousUrlFbLogin);
      // $previousUrlFbLogin = str_replace("%3F", "?", $previousUrlFbLogin);
      if($request->session()->exists('previousUrlFbLogin'))
        $request->session()->put('previousUrlFbLogin', $previousUrlFbLogin);
      else
        session(['previousUrlFbLogin' => $previousUrlFbLogin]);
      return Socialite::driver($social)->redirect();
  }

  public function callback($social, Request $request)
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
      if($request->session()->exists('previousUrlFbLogin'))
        return redirect($request->session()->get('previousUrlFbLogin'));
      else
        return redirect()->back();
  }
}
