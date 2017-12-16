<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Models\Category;
use App\Http\Requests\CategoryCreatRequest;
use App\Http\Requests\CategoryUpdateRequest;
use App\Http\Requests\CategoryIdRequest;

class CategoriesController extends Controller
{
    public function _list(Request $request) {
      $perpage = (int) $request->perpage;
      $perpage < 5 ? $perpage = 5 : $perpage;
      $perpage > 50 ? $perpage = 50 : $perpage;
      $publish = $request->publish;
      $name = $request->name;

      if($publish != null)
        $categories = Category::with('user')
        ->where('deleted', false)
        ->where('name',"LIKE" , "%$name%")
        ->where('publish', $publish)
        ->paginate($perpage);
      else
        $categories = Category::with('user')
          ->where('deleted', false)
          ->where('name',"LIKE" , "%$name%")
          ->paginate($perpage);
      return view("ad.categories.list", ["categories" => $categories]);
    }

    public function _new() {
      return view("ad.categories.new");
    }

    public function create(CategoryCreatRequest $request) {
      $user = User::first();
      $category = new Category;
      $category->user_id = $user->id;
      $category->name = $request->name;
      $category->description = $request->description;
      $category->publish = $request->publish;
      if($category->save())
        return redirect("/admin/categories")->with(["messages" => ["type" => "success", "content" => "Category created!"]]);
      else
        return redirect("/admin/categories/create")->with(["messages" => ["type" => "danger", "content" => "Save fail!"]]);
    }

    public function edit($id) {
      $category = Category::find($id);
      if($category)
        return view("ad.categories.edit", ["category" => $category]);
      else
        return redirect()->back();
    }

    public function update(CategoryUpdateRequest $request) {
      $user = User::first();
      $category = Category::find($request->id);
      $category->user_id = $user->id;
      $category->name = $request->name;
      $category->description = $request->description;
      $category->publish = $request->publish;
      if($category->save())
        return redirect("/admin/categories")->with(["messages" => ["type" => "success", "content" => "Category updated!"]]);
      else
        return redirect()->back()->with(["messages" => ["type" => "danger", "content" => "Save fail!"]]);
    }

    public function destroy( CategoryIdRequest $request) {
      $category = Category::find($request->id);
      $category->deleted = true;
      $category->save();
      return redirect("/admin/categories")->with(["messages" => ["type" => "success", "content" => "Category deleted!"]]);
    }
}
