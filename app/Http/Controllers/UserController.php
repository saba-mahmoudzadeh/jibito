<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

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
        return view('User.create',compact('users'));
    }
    public function store(Request $request)
    {
        $validatedData =  $request->validate([
            'name' => ['required','string','max:255'],
            'email' => ['required','string','email','max:255','unique:users'],
            'password' => ['required','string','min:8'],
            'role'=>[ Rule::in(['admin', 'customer'])],
            'banned' => 'boolean',



        ]);

        $hashedPassword = Hash::make($validatedData['password']);

        User::query()->create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$hashedPassword,
            'banned' => $validatedData['banned'] ?? false,
            'email_verified_at' => now()
        ]);
        return redirect(route('users.index'));
    }
    public function edit($id)
    {   $users = User::all();
       $user = User::query()->find($id);
       return view('User.edit',compact('user','users'));
    }
    public function update(Request $request,$id)
    {
        $validatedData = $request->validate([
            'name' => ['required','string','max:255'],
            'email' => ['required','string','email','max:255',Rule::unique('users', 'email')->ignore($id)],
            'password'=>['nullable','string','min:8'],
            'banned' => 'boolean',
            'role'=>[ Rule::in(['admin', 'customer'])]
        ]);

         if ($request->password == null)
         {
             $user = User::query()->find($id);
             $user->update([
                 'name'=>$request->name,
                 'email'=>$request->email,
                 'role'=>$request->role,
                 'banned' => $validatedData['banned'] ?? false,

             ]);
         }
        else
        {
            $hashedPassword = Hash::make($validatedData['password']);
            $user = User::query()->find($id);
            $user->update([
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>$hashedPassword,
                'banned' => $validatedData['banned'] ?? false,
                'role'=>$request->role,

            ]);
        }

        return redirect(route('users.index'));
    }
    public function destroy($id)
    {
        $user = User::query()->find($id);
        $user->delete();
        return redirect(route('users.index'));
    }
}
