<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Mail;

class PagesController extends Controller
{
    public function home()
    {
        return Inertia::render('Welcome');
    }

    public function about()
    {
        return Inertia::render('About');
    }

    public function service()
    {
        return Inertia::render('Service');
    }
    
    public function contact()
    {
        return Inertia::render('Contact');
    }

    public function sendContactForm(Request $request)
    {
        $validated = $request->validate([
            // 'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        try {
            $email = env('MAIL_FROM_ADDRESS');
            $body = 'Sent from: ' . $request->email . "\n" . 'Body: ' . $request->message . "\n\n" ;

            Mail::raw($body, function ($message) use ($email, $subject) {
                $message->to($email)
                        ->subject($request->subject);
            });
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while sending the email.');
        }

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
