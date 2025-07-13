<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactAdminMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }

    public function complete()
    {
        return view('contact.complete');
    }

    function sendMail(ContactRequest $request) {
        $validated = $request->validated();

        Mail::to('admin@example.com')->send(new ContactAdminMail($validated));
        return to_route('contact.complete');
    }
}
