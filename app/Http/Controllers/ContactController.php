<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'content' => 'required',
        ]);

        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'content' => $request->content
        ];

        Mail::to('levanan3418@gmail.com')->send(new ContactFormMail($details));

        return back()->with('success', 'Gửi thành công!');
    }
} 