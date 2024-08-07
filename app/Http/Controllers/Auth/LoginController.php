<?php
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;

class LoginController extends Controller
{
    public function create()
    {
        return view('Auth.login');
    }
    public function store(LoginRequest $request)
    {
        if (auth()->attempt($request->validated()))
        {
            return redirect()->intended('dashboard');
        }
        return back()
            ->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
    }

}
