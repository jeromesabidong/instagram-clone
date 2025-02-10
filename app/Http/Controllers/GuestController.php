<?php

namespace App\Http\Controllers;

use App\Http\Requests\Guest\RegistrationRequest;
use Illuminate\Validation\Rules\Password;

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

    public function store(RegistrationRequest $request)
    {
        $registrationDetails = $request->all();

        dd('to-do: submit register');
    }

    public function login()
    {
        dd('to-do: login');
    }
}
