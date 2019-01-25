<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReservationRequest;
use Illuminate\Support\Facades\Mail;

/**
 * Class ReservationController
 * @package App\Http\Controllers
 */
class ReservationController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('reservation.index', ['title' => 'Online Reservation']);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function from()
    {
        return view('reservation.from', ['title' => 'Online Reservation / From Airport']);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function to()
    {
        return view('reservation.to', ['title' => 'Online Reservation / To Airport']);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function ltl()
    {
        return view('reservation.ltl', ['title' => 'Online Reservation / From your location to location']);
    }

    /**
     * @param ReservationRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function sendMail(ReservationRequest $request)
    {
        $data = $request->input();
        unset($data['_token']);
        unset($data['_method']);

        Mail::queue('emails.reservation', ['data' => $data], function ($message) use ($data) {
            /** @var \Illuminate\Mail\Message $message */
            $message->from('do-not-reply@blueshuttle.com', 'BlueShuttle Reservation');
            $message->to('blueshuttle@gmail.com', 'BlueShuttle');
//            $message->cc('nazari.dev@gmail.com', $name = 'BlueShuttle');
            $message->replyTo($data['email'], $data['name']);
            $message->subject('Online Reservation ' . $data['type'] . ' ' . time());
        });

        $message = 'Your request has been submitted. <br>We will contact you shortly with a quote.
                    <br><br>
                    Please contact us if you don\'t hear from us within the next 20 minutes.
                    <br><br>
                    "Thank you, Blue Shuttle"';

        return redirect('reservation')->with(['message' => $message, 'status' => 'success']);
    }
}
