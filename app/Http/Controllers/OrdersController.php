<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function _list() {
        return view("ad.orders.list");
    }

    public function _listAll() {
        return view("ad.orders.list_all");
    }

    public function detail() {
        return view("ad.orders.detail");
    }

    public function _request() {
        return view("ad.orders.request");
    }
}
