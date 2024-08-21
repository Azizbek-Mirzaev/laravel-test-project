<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::get();

        // dd($categories);
        return view("admin.category.index",[
            "categories"=>$categories
        ]);
    }

    public function create()
    {
        return view("admin.category.create");
    }

    public function store(Request $request)
    {
        $category = new Category();

        $category->title = $request->title;
        // dd($category);

        $category->save();

        return redirect()->back();

    }
}

