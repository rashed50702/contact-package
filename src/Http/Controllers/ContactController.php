<?php

namespace Rashed50702\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Rashed50702\Contact\Mail\ContactMailable;
use Rashed50702\Contact\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact::form');
    }

    public function send(Request $request)
    {
        Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->message, $request->name));
        Contact::create($request->all());

        return redirect(route('contact'));
    }
}
