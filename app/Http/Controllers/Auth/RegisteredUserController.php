<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:100',
            'insertion' => 'string|max:45',
            'last_name' => 'required|string|max:100',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
            'birthday' => 'required|date',
            'street' => 'required|string|max:255',
            'house_num' => 'required|string|max:5',
            'house_num_addition' => 'string|max:5',
            'postal_code' => 'required|string|max:7',
            'city' => 'required|string|max:255',
            'user'
        ]);

        Auth::login($user = User::create([
            'first_name' => $request->first_name,
            'insertion' => $request->insertion,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'birthday' => $request->birthday,
            'street' => $request->street,
            'house_num' => $request->house_num,
            'house_num_addition' => $request->house_num_addition,
            'postal_code' => $request->postal_code,
            'city' => $request->city,
            'role_id' => 4,
        ]));

        event(new Registered($user));

        return redirect(RouteServiceProvider::HOME);
    }
}
