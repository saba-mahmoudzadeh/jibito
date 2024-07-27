<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('User.index',compact('users'));
    }

    public function create()
    {
        $users = User::all();
        return view('User.create');
    }
    public function store(Request $request)
    {
        User::query()->create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password

        ]);
        return redirect()->back();
    }
    public function edit($id)
    {
       $user = User::query()->find($id);
       return view('User.edit',compact('user'));
    }
    public function update(Request $request,$id)
    {
        $user = User::query()->find($id);
        $user->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password

        ]);
        return redirect(route('users.index'));
    }
    public function destroy($id)
    {
        $user = User::query()->find($id);
        $user->delete();
        return redirect(route('users.index'));
    }
}
