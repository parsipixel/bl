<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\ReservationRequest;
use Illuminate\Support\Facades\Mail;

class ReservationController extends Controller
{
    public function index()
    {
        return view('reservation.index', ['title' => 'Online Reservation']);
    }

    public function from()
    {
        return view('reservation.from', ['title' => 'Online Reservation / From Airport']);
    }

    public function to()
    {
        return view('reservation.to', ['title' => 'Online Reservation / To Airport']);
    }

    public function ltl()
    {
        return view('reservation.ltl', ['title' => 'Online Reservation / From your location to location']);
    }

    public function sendMail(ReservationRequest $request)
    {
        $data = $request->input();
        unset($data['_token']);
        unset($data['_method']);

        Mail::queue('emails.reservation', ['data' => $data], function ($message) use ($data) {
            $message->from('blueshuttle@gmail.com', $name = 'BlueShuttle');
//            $message->to('blueshuttle@gmail.com', $name = 'BlueShuttle');
            $message->to('nazari.dev@gmail.com', $name = 'BlueShuttle');
            $message->replyTo($data['email'], $name = $data['name']);
            $message->subject('Online Reservation ' . $data['type']);
        });

        $message = 'Your request has been submitted. <br>We will contact you shortly with a quote.
                    <br><br>
                    Please contact us if you don\'t hear from us within the next 20 minutes.
                    <br><br>
                    "Thank you, Blue Shuttle"';

        return redirect('reservation')->with(['message' => $message, 'status' => 'success']);
    }
}
