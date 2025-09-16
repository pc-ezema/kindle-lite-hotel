<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Room;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class HomePageController extends Controller
{
    public function index() 
    {
        $rooms = Room::get();

        return view('pages.index', [
            'rooms' => $rooms
        ]);
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
            'admin'      => 'info@kindlelitehotel.com',
        ];

        // Send message to the admin
        Mail::send('emails.contact', $data, function ($m) use ($data) {
            $m->to($data['admin'])->subject(config('app.name') . ' - Contact Form Notification');
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
        $rooms = Room::get();

        return view('pages.booking-system', [
            'rooms' => $rooms
        ]);
    }

    public function bookNow(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'roomId'      => 'nullable|exists:rooms,id',
            'name'        => 'required|string|max:255',
            'phoneNumber' => 'required|string|max:20',
            'email' => [
                'required',
                'email:rfc,strict',
                'max:255',
                'regex:/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/'
            ],
            'checkIn'     => 'required|date',
            'checkOut'    => 'required|date|after:checkIn',
            'adult'       => 'required|integer|min:1',
            'child'       => 'nullable|integer|min:0',
        ]);

        if ($validator->fails()) {
            Log::info(['errors' => $validator->errors()]);
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $room = Room::find($request->roomId);

        if(!$room)
        {
            // Return success response
            return response()->json([
                'success' => false,
                'message' => "Room doesn't exist.",
            ]);
        }

        $booking = Booking::create($request->all());

        /** Store information to include in mail in $data as an array */
        $data = [
            'name'      => $request->name,
            'email'     => $request->email,
            'phone'     => $request->phoneNumber,
            'checkin'   => Carbon::parse($request->checkIn)->format('F j, Y'),
            'checkout'  => Carbon::parse($request->checkOut)->format('F j, Y'),
            'adult'     => $request->adult,
            'child'     => $request->child,
            'room'      => ucfirst($room->type),
            'created_at'=> now(),
            'admin'     => 'info@kindlelitehotel.com',
        ];

        try {
            /** Send message to the admin */
            Mail::send('emails.guestInfo', $data, function ($m) use ($data) {
                $m->to($data['email'])->subject(config('app.name').' - Room Booking Form Notification');
            });
        } catch (Exception $e)
        {
            // Log the error
            Log::error('Error dispatching email for user: ' . $e->getMessage());
        }

        /** Send message to the admin */
        Mail::send('emails.booking', $data, function ($m) use ($data) {
            $m->to($data['admin'])->subject(config('app.name').' - Room Booking Form Notification');
        });

        return response()->json([
            'success' => true,
            'message' => 'Thank you for booking with us! Your room reservation has been successfully confirmed. We look forward to welcoming you on ' .
                        Carbon::parse($request->checkIn)->format('F j, Y') .
                        ' and ensuring you have a delightful stay with us. Please call our 24/7 Phone numbers [' .
                        config('app.phone') . '] to advise us of your arrival time. Safe travels until we meet!',
            'data'    => $booking
        ]);
    }

    public function roomByType($type)
    {
        $room = Room::where('type', 'like', str_replace('-', ' ', $type))->first();

        return view('pages.rooms', compact('room', 'type'));
    }

}
