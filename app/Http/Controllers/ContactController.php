<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }

    public function send(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:100',
            'phone'   => ['required', 'string', 'max:20', 'regex:/^[0-9+\-\s]+$/'],
            'message' => 'required|string|max:1000',
            'email'   => 'required|email',
        ]);

        Mail::to('infopublicidad@oceanprintec.com')
            ->send(new ContactFormMail($validated));

        return back()->with('success', 'Gracias por contactarnos. Uno de nuestros asesores se pondrá en contacto contigo muy pronto');
    }
}
