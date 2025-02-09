<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function store()
    {
        dd('to-do: submit register');
    }

    public function login()
    {
        dd('to-do: login');
    }
}
