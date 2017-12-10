<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\Page;

class test_controller extends Controller
{
    public function test() {
      $page = Page::first();
      // $user = $page->user;
      return $page;
    }
}
