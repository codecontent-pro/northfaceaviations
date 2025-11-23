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
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        try {
            $email = env('MAIL_FROM_ADDRESS');
            $body = "Sent from: {$validated['email']}\nBody: {$validated['message']}\n\n";
            
            Mail::raw($body, function ($message) use ($email, $validated) {
                $message->to($email)
                        ->subject($validated['subject']);
            });

            return redirect()->back()->with('success', 'Your message has been sent successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while sending the email.'.$e->getMessage());
        }
    }

}
