<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Http\Requests\LoginRequest;
use Hash;

class LoginController extends Controller
{
    public function login() {
      auth()->logout();
      return view('login');
    }

    public function postLogin(LoginRequest $request) {
      auth()->logout();
      $user = User::where("email", $request->email)->first();
      $authLogin = $user->role->login;

      if(!$authLogin)
        return redirect("/login")->with(["messages" => ["type" => "danger", "content" => "Your account is currently unable to log in!"]]);
      else {
        $passwordValid = Hash::check($request->password, $user->password);
        if(!$passwordValid)
          return redirect("/login")->with(["messages" => ["type" => "danger", "content" => "email or password incorrect!"]]);
        else {
          auth()->login($user);
          return redirect("/admin");
        }
      }
    }

    public function logout() {
      auth()->logout();
      return redirect("/");
    }

    public function forgot() {

    }
}
