<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Business;
use App\Http\Requests\BusinessIdRequest;

class BusinessController extends Controller
{
    public function _list(Request $request) {
        $perpage = (int) $request->perpage;
        $perpage < 5 ? $perpage = 50 : $perpage;
        $perpage > 50 ? $perpage = 50 : $perpage;
        $business = Business::paginate($perpage);
        return view("ad.business.list", ["perpage" => $perpage, "business" => $business]);
    }

    public function destroy(BusinessIdRequest $request) {
        $business = Business::find($request->id);
        $business->delete();
        // return redirect()->back()->with(["messages" => ["type" => "success", "content" => "Detroy successfully!"]]);
    }
}
