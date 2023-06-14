<?php

namespace App\Http\Controllers;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;


class mailcontroller extends Controller
{
    public function sendContactForm(Request $request)
    {
        try {
            $name = $request->input('name');
            $email = $request->input('email');
            $subject = $request->input('subject');
            $message = $request->input('message');

            Mail::to('abhishekmenon767@gmail.com')->send(new ContactFormMail($name, $email, $subject, $message));

            return response()->json(['message' => 'Email sent successfully']);
        } catch (\Exception $e) {
            // Log the exception or handle it as needed
            return response()->json(['message' => 'An error occurred while sending the email']);
        }
    }
}
