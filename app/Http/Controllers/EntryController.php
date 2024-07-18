<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Entry;
use Illuminate\Http\Request;

class EntryController extends Controller
{
    public function index()
    {


        $entries = Entry::all();
        return view('Entry.index',compact('entries'));
    }
    public function create()
    {
        $categories = Category::all();
        return view('Entry.create',compact('categories'));


    }
    public function store(Request $request)
    {

        Entry::query()->create([
            'category_id'=>$request->category_id,
            'title'=>$request->title,
            'type'=>$request->type,
            'amount'=>$request->amount,
            'entry_date'=>$request->entry_date,
            'description'=>$request->description,


        ]);
        return redirect(route('entries.index'));
    }
}
