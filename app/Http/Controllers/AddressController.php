<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Models\Address;
use App\Models\Role;
use App\Models\District;
use App\Http\Requests\AddressCreateRequest;
use App\Http\Requests\AddressUpdateRequest;
use App\Http\Requests\AddressIdRequest;

class AddressController extends Controller
{
    public function _new() {
        $districts = District::orderBy("name")->where("deleted", false)->get();
        return view("ad.address.new", ["districts" => $districts]);
    }

    public function _listAll(Request $request) {
        $perpage = (int) $request->perpage;
        $perpage < 5 ? $perpage = 5 : $perpage;
        $perpage > 50 ? $perpage = 50 : $perpage;
        $partner = (int) $request->partner;

        $partners = User::where("group", "partner")->get();

        if($partner != null && User::find($partner))
            $address = Address::with("user")
                ->where('user_id', $partner)
                ->paginate($perpage);
        else
            $address = Address::with("user")->paginate($perpage);
        return view("ad.address.list_all", ["address" => $address, "partners" => $partners]);
    }

    public function _list(Request $request) {
        $perpage = (int) $request->perpage;
        $perpage < 5 ? $perpage = 5 : $perpage;
        $perpage > 50 ? $perpage = 50 : $perpage;

        $address = Address::where('user_id', auth()->user()->id)
            ->paginate($perpage);
            return view("ad.address.list", ["address" => $address]);
    }

    public function create(AddressCreateRequest $request) {
        $user = auth()->user();
        $address = new Address;
        $address->user_id = $user->id;
        $address->district_id = $request->district_id;
        $address->sort_description = $request->sort_description;
        $address->address = $request->address;
        $address->save();
        if($user->role->view_all_user_address)
            return redirect("/admin/address/list-all")->with(["messages" => ["type" => "success", "content" => "Address created!"]]);
        else
            return redirect("/admin/address")->with(["messages" => ["type" => "success", "content" => "Address created!"]]);

    }

    public function edit(Request $request) {
        $countRows = Address::where("user_id", auth()->user()->id)->where("id", $request->id)->count();
        if($countRows > 0) {
            $districts = District::orderBy("name")->where("deleted", false)->get();
            $address = Address::where("user_id", auth()->user()->id)->where("id", $request->id)->first();
            return view("ad.address.edit", ["address" => $address, "districts" => $districts]);
        } else
            return redirect("/admin");
    }

    public function update(AddressUpdateRequest $request) {
        $countRows = Address::where("user_id", auth()->user()->id)->where("id", $request->id)->count();
        $role = auth()->user()->role()->first();
        $isAuth = $role->change_all_user_address;

        if($countRows > 0 || $isAuth) {
            $address = Address::where("user_id", auth()->user()->id)->where("id", $request->id)->first();
            $address->district_id = $request->district_id;
            $address->sort_description = $request->sort_description;
            $address->address = $request->address;
            $address->save();
            if($role->view_all_user_address)
                return redirect("/admin/address/list-all")->with(["messages" => ["type" => "success", "content" => "Address updated!"]]);
            else
                return redirect("/admin/address")->with(["messages" => ["type" => "success", "content" => "Address updated!"]]);
        } else
            return redirect("/admin");
    }

    public function destroy(AddressIdRequest $request) {
        $countRows = Address::where("user_id", auth()->user()->id)->where("id", $request->id)->count();
        $role = auth()->user()->role()->first();
        $isAuth = $role->change_all_user_address;
        if($countRows > 0 || $isAuth) {
            $address = Address::where("user_id", auth()->user()->id)->where("id", $request->id)->first();
            $address->delete();
            if($role->view_all_user_address)
                return redirect("/admin/address/list-all")->with(["messages" => ["type" => "success", "content" => "Address destroyed!"]]);
            else
                return redirect("/admin/address")->with(["messages" => ["type" => "success", "content" => "Address destroyed!"]]);
        } else
            return redirect("/admin");
    }
}
