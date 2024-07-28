<?php

namespace App\Http\Controllers;

use App\Mail\Welcome;
use App\Mail\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact');
    }

    public function send()
    {
        // Validate the request
        $data = request()->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        try {
            // Attempt to send the email
            Mail::to('anembaben@gmail.com')->send(new ContactUs($data));
             Mail::to('lifeofrence@gmail.com')->send(new ContactUs($data));

            // Redirect back with success message if email sent successfully
            return redirect()->back()->with('success', 'Message Sent Successfully');
        } catch (\Exception $e) {
            // Log the exception message if needed
            \Log::error('Mail send failed: ' . $e->getMessage());

            // Redirect back with error message
            return redirect()->back()->with('error', 'Sorry ' . $data['name'] . ', it seems that our mail server is not responding. Please try again later!');
        }
    }



}
