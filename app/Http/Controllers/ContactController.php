<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function showForm()
    {
        return view('contact.form');
    }

    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name'=>'string|required|max:255',
            'email'=>'email|required',
            'message'=>'required|string'
        ]);

        return view ('contact.thanks',[
            'name'=>$validated['name'],
            'email'=>$validated['email'],
            'message'=>$validated['message'],
        ]);
    }
}
