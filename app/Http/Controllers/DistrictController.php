<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\District;
use App\Http\Requests\DistrictCreateRequest;
use App\Http\Requests\DistrictUpdateRequest;
use App\Http\Requests\DistrictIdRequest;

class DistrictController extends Controller
{
    public function _new() {
        $user = auth()->user();
        $keys = District::orderBy("key")->pluck("key")->toArray();
        $labels = ["success", "warning","info", "danger", "primary", "default", "purple", "inverse", "pink"];
        return view("ad.districts.new", ["keys" => $keys, "user" => $user, "labels" => $labels]);
    }

    public function create(DistrictCreateRequest $request) {
        $district = new District;
        $district->key = $request->key;
        $district->name = $request->name;
        $district->save();
        return redirect("/admin/districts")->with(["messages" => ["type" => "success", "content" => "District created!"]]);
    }

    public function _list(Request $request) {
        $labels = ["success", "warning","info", "danger", "primary", "default", "purple", "inverse", "pink"];
        $perpage = (int) $request->perpage;
        $perpage < 5 ? $perpage = 5 : $perpage;
        $perpage > 50 ? $perpage = 50 : $perpage;
        $name = $request->name;
        $districts = District::where("name", "like", "%$name%")->where("deleted", false)->paginate($perpage);
        return view("ad.districts.list", ["districts" => $districts, "labels" => $labels]);
    }

    public function edit(Request $request) {
        $user = auth()->user();
        $keys = District::orderBy("key")->pluck("key")->toArray();
        $labels = ["success", "warning","info", "danger", "primary", "default", "purple", "inverse", "pink"];
        $district = District::find($request->id);
        return view("ad.districts.edit", ["keys" => $keys, "user" => $user, "labels" => $labels, "district" => $district]);
    }

    public function update(DistrictUpdateRequest $request) {
        $district = District::find($request->id);
        $district->key = $request->key;
        $district->name = $request->name;
        $district->save();
        return redirect("/admin/districts")->with(["messages" => ["type" => "success", "content" => "District saved!"]]);
    }

    public function destroy(DistrictIdRequest $request) {
        $district = District::find($request->id);
        $district->deleted = true;
        $district->save();
    }
}
