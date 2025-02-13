<?php

namespace App\Http\Controllers;

use App\Http\Requests\Guest\RegistrationRequest;
use App\Mail\UserRegistration;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class GuestController extends Controller
{
    public function index()
    {
        return view('guest.landing');
    }

    public function create()
    {
        return view('guest.register');
    }

    /**
     * Very simplistic login.. 
     */
    public function store(RegistrationRequest $request)
    {
        $registrationDetails = $request->all();

        $user = User::create($registrationDetails);

        Mail::to($request->email)->queue(
            new UserRegistration($user)
        );
        
        Auth::login($user);

        return redirect('dashboard');
    }

    public function login()
    {
        $user = User::find(1);

        Auth::login($user);

        return redirect("dashboard");
    }
}
