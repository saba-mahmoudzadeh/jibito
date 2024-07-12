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
        $request->validate([
            'title'=>['required','max:30'],
            'icon'=>['required','max:30']
        ]);


        Category::query()->create([
           'title'=>$request->title,
           'icon'=>$request->icon

        ]);
        return redirect(route('categories.index'));
    }
    public function edit($id)
    {
    $categories = Category::query()->find($id);
    return view('Category.edit',compact('categories'));

    }
    public function update(Request $request,$id)
    {
        $category= Category::query()->find($id);
       $category->update([
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
