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
        return view('Entry.create');
    }
    public function store()
    {

    }
}
