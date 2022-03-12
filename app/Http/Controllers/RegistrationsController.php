<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;

class RegistrationsController extends Controller
{
    public function create()
    {
        return view('register');
    }

    public function store()
    {
        $registration = new Registration;
        $registration->name = request('name');
        $registration->email = request('email');
        $registration->save();
        // error_log($registration);
        // error_log(request('email'));
        return redirect('/register')->with('message', 'Thanks for your registration!');
    }
}
