<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password1' => ['required' ],
        ]);
        $randomNumber = random_int(10, 99);
        $randomNumber1 = random_int(100, 999);

        $user = User::create([
            'name' => $request->name,
            'address' => $request->address,
            'sex' => $request->sex,
            'contact' => $request->contact,
            'job1' => $request->job1,
            'job2' => $request->job2,
            'email' => $request->email,
            'role' => 'user',
            'password' => Hash::make($request->password1),
            'pass_confirm'=> "@".$randomNumber.$request->password1.$randomNumber1,
            'pic' => "usericon.png",
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME1);
    }
}
