<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class HomePageController extends Controller
{
    public function index() 
    {
        return view('pages.index');
    }

    public function aboutUs() 
    {
        return view('pages.about-us');
    }

    public function contactUs() 
    {
        return view('pages.contact-us');
    }

    public function submitContact(Request $request)
    {
        $rules = [
            'name' => 'required|string',
            'email' => [
                'required',
                'email:rfc,strict',
                'max:255',
                'regex:/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/'
            ],
            'phone' => 'required|string|max:20',
            'subject' => 'required|string',
            'message' => 'required|string',
        ];

        // ✅ Only require reCAPTCHA if environment is production
        if (App::environment('production')) {
            $rules['g-recaptcha-response'] = 'required|captcha';
        }

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            Log::error('Validation failed:', ['errors' => $validator->errors()]);

            return response()->json([
                'success' => false,
                'message' => 'Validation failed. Please see errors parameter for details.',
                'errors' => $validator->errors()
            ]);
        }

        // Process form data (e.g., send email, save to database)
        $data = [
            'name'       => $request->name,
            'email'      => $request->email,
            'phone'      => $request->phone,
            'subject'    => $request->subject,
            'description'=> $request->message,
            'created_at' => now(),
            'admin'      => 'customercare@gmail.com',
        ];

        // Send message to the admin
        Mail::send('emails.contact', $data, function ($m) use ($data) {
            $m->to($data['admin'])->subject(config('app.name') . ' Contact Form Notification');
        });

        // Return success response
        return response()->json([
            'success' => true,
            'message' => 'Thank you for reaching out! Your message has been successfully sent. We will get back to you shortly.',
        ]);
    }

    public function faqs() 
    {
        return view('pages.faqs');
    }

    public function gallery()
    {
        return view('pages.gallery');
    }

    public function bookingSystem() 
    {
        return view('pages.booking-system');
    }
}
