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

    /**
     * Store a new blog post.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        // validate and store the data
        $request->validate([
            'name' => 'required',
            'email' => 'required|email:rfc|unique:registrations',
        ]);
        $registration = new Registration;
        $registration->name = Request('name');
        $registration->email = Request('email');
        $registration->save();

        return redirect('/register')->with('message', "Thanks for your registration! We will now send our newsletter to $registration->email.");
    }
}
