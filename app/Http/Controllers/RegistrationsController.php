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
        return redirect('/');
    }
}
