<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrdersController extends Controller
{
    public function _list() {
        return view("ad.orders.list");
    }

    public function _listAll(Request $request) {
        $perpage = (int) $request->perpage;
        $perpage < 5 ? $perpage = 5 : $perpage;
        $perpage > 50 ? $perpage = 50 : $perpage;
        $name = $request->name;

        $orders = Order::paginate($perpage);
        return view("ad.orders.list_all", ["orders" => $orders]);
    }

    public function detail() {
        return view("ad.orders.detail");
    }

    public function _request() {
        return view("ad.orders.request");
    }
}
