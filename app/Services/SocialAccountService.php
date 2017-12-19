<?php

namespace App\Services;

use Laravel\Socialite\Contracts\User as ProviderUser;
use App\Models\SocialAccount;
use App\User;
use App\Models\Role;

class SocialAccountService
{
  public static function createOrGetUser(ProviderUser $providerUser, $social, $pureUser)
  {
      $account = SocialAccount::whereProvider($social)
          ->whereProviderUserId($providerUser->getId())
          ->first();

      if ($account) {
          return $account->user;
      } else {

          $email = $providerUser->getEmail() != null ? $providerUser->getEmail() : $providerUser->getNickname();
          $account = new SocialAccount([
              'provider_user_id' => $providerUser->getId(),
              'provider' => $social,
              'token' => $pureUser->token,
              'nickname' => $pureUser->nickname,
              'profileUrl' => $pureUser->profileUrl,
          ]);
          $user = User::whereEmail($email)->first();

          if (!$user) {
              $gender = $pureUser->user["gender"];
              $gender = in_array($gender, ['male','female', 'other']) ? $gender : 'male';
              $user = User::create([
                  'email' => $email,
                  'name' => $providerUser->getName(),
                  'password' => $providerUser->getName(),
                  'avatar' => $pureUser->avatar_original,
                  'fb_token' => $pureUser->token,
                  'gender' => $gender,
                  'website' => $pureUser->profileUrl,
                  'address' => '[]'
              ]);
          }

          $account->user()->associate($user);
          $account->save();

          return $user;
      }
  }
}
