<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('Category.categories',compact('categories'));
    }
    public function create()
    {
        return view('Category.create');
    }
    public function store(Request $request)
    {
        Category::query()->create([
           'title'=>$request->title,
           'icon'=>$request->icon

        ]);
        return redirect(route('categories.index'));
    }
    public function destroy($id)
    {
        $category= Category::query()->find($id);
        $category->delete();
        return redirect()->back();

    }
}
