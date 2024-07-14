<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntryController extends Controller
{
    public function index()
    {

    }
    public function create()
    {
        return view('Entry.create');
    }
}
