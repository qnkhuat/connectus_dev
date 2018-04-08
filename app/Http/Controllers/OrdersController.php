<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\CourseBranch;
use App\Models\Course;
use App\Http\Requests\StudentResgisterCourseRequest;
use Carbon\Carbon;

class OrdersController extends Controller
{
    public function order(StudentResgisterCourseRequest $request) {
        $user = auth()->user();
        $course = $request->course;
        $branch = $request->branch;
        $branchValid = CourseBranch::where("id", $branch)->where("course_id", $course)->count() > 0 ? true : false;
        if($branchValid) {
            Carbon::setLocale('vi');
            $user = auth()->user();
            $course = Course::find($course);
            $order = new Order;
            $order->course_id = $course->id;
            $order->course_branch_id = $branch;
            $order->user_id = $user->id;
            $order->name = $request->name;
            $order->email = $request->email;
            $order->phone = $request->phone;
            $order->payment_schedule = $request->payment_schedule;

            $order->message = $request->message;
            $order->know = $request->know;
            $order->price = $course->new_price;
            $order->sale = $course->sale;
            $order->opening = $course->opening;
            $order->gift = $course->gift;

            if($order->save())
                return redirect()->back()->with(["messages" => ["type" => "success", "content" => "Đơn hàng đã được ghi nhận, chúng tôi sẽ liên hệ với bạn sớm!"]]);
            else
                return redirect()->back()->with(["messages" => ["type" => "warning", "content" => "Tạo đơn hàng không thành công!"]]);
        } else
        return redirect()->back()->with(["messages" => ["type" => "danger", "content" => "Course not exits!"]]);
    }

    public function _list(Request $request) {
        $perpage = (int) $request->perpage;
        $perpage < 5 ? $perpage = 50 : $perpage;
        $perpage > 50 ? $perpage = 50 : $perpage;
        $name = $request->name;

        $user = auth()->user();
        $courseIds = $user->courses->pluck("id")->toArray();
        $orders = Order::whereIn("course_id", $courseIds)
            ->orderBy("updated_at", "desc")
            ->paginate($perpage);

        return view("ad.orders.list", ["orders" => $orders]);
    }

    public function _listAll(Request $request) {
        $perpage = (int) $request->perpage;
        $perpage < 5 ? $perpage = 50 : $perpage;
        $perpage > 50 ? $perpage = 50 : $perpage;
        $name = $request->name;

        $orders = Order::orderBy("updated_at", "desc")->paginate($perpage);
        return view("ad.orders.list_all", ["orders" => $orders]);
    }

    public function edit(Request $request) {
        $order = Order::find($request->id);
        if($order) {
            $status = ['not_seen', 'seen', 'sent', 'received_success', 'received_fail'];
            return view("ad.orders.edit", ["status" => $status, "order" => $order]);
        } else
        return redirect()->back()->with(["messages" => ["type" => "danger", "content" => "not auth!"]]);
    }

    public function update(Request $request) {
        $order = Order::find($request->id);
        if($order) {
            $order->description = $request->description;
            $order->admin_status = $request->admin_status;
            $order->save();
            return redirect()->back()->with(["messages" => ["type" => "success", "content" => "saved!"]]);
        } else
        return redirect()->back()->with(["messages" => ["type" => "danger", "content" => "not auth!"]]);
    }

    public function detail(Request $request) {
        $countRows = Order::where("id", $request->id)->count();
        $role = auth()->user()->role()->first();
        $isAuth = $role->view_order;
        if($countRows > 0 && $isAuth) {
            $order = Order::find($request->id);
            $status = ['not_seen', 'seen', 'sent', 'received_success', 'received_fail'];
            return view("ad.orders.detail", ["status" => $status, "order" => $order, "role" => $role]);
        } else
        return redirect()->back()->with(["messages" => ["type" => "danger", "content" => "order not exits!"]]);
    }

    public function _request() {
        return view("ad.orders.request");
    }

    public function confirm(Request $request) {
        $user = auth()->user();
        $count = Order::where("id", $request->id)->count();
        if($count > 0) {
            $order = Order::find($request->id);
            $userId = $order->course->user_id;
            if($user->id == $userId) {
                if($order->admin_status == "not_seen" || $order->admin_status == "seen") {
                    $order->admin_status = "sent";
                    $order->save();
                }
                return redirect()->back()->with(["messages" => ["type" => "success", "content" => "Đã xác nhận!"]]);
            } else
            return redirect()->back()->with(["messages" => ["type" => "danger", "content" => "not auth!"]]);
        } else
        return redirect()->back()->with(["messages" => ["type" => "danger", "content" => "order not exits!"]]);
    }
}
