<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Mail\SendRegistrationMail;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;

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
            'first_name' => ['required', 'string', 'max:255'],
            'father_name' => ['required', 'string', 'max:255'],
            'family_name' => ['required', 'string', 'max:255'],
            'grandfather_name' => ['required', 'string', 'max:255'],
            'telephone_number' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'date_of_birth' => ['required'],
            'address' => ['required','min:3'],
            'specialization' => ['required','min:5'],
            'password' => ['required'],
        ]);

        $user = User::create([
            'first_name' => $request->first_name,
            'father_name' => $request->father_name,
            'grandfather_name' => $request->grandfather_name,
            'family_name' => $request->family_name,
            'telephone_number' => $request->telephone_number,
            'email' => $request->email,
            'date_of_birth' => $request->date_of_birth,
            'address' => $request->address,
            'specialization' => $request->specialization,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        $email = 'enuuniveristy.uk@gmail.com';

        $currentURL = URL::current();
        $maildata = [
            'first_name' => $user->first_name,
            'father_name' => $user->father_name,
            'grandfather_name' => $user->grandfather_name,
            'family_name' => $user->family_name,
            'telephone_number' => $user->telephone_number,
            'email' => $user->email,
            'date_of_birth' => $user->date_of_birth,
            'address' => $user->address,
            'specialization' => $user->specialization,
            'id' => $user->id,
        ];

        Mail::to($email)->send(new SendRegistrationMail($maildata));

        // return redirect(RouteServiceProvider::HOME);
        return redirect('/complete-register');
    }
}
