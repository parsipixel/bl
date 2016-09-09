<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Mail;

class IndexController extends Controller
{
    public function index()
    {
        return view('index', ['title' => 'Online Reservation']);
    }

    public function airports()
    {
        return view('airports', ['title' => 'Online Reservation']);
    }

    public function aboutUs()
    {
        return view('about', ['title' => 'Online Reservation']);
    }

    public function contactUs()
    {
        return view('contact', ['title' => 'Online Reservation']);
    }

    public function sendMail(ContactRequest $request)
    {
        $data = $request->input();
        unset($data['_token']);
        unset($data['_method']);

        Mail::queue('emails.reservation', ['data' => $data], function ($message) use ($data) {
            $message->from('blueshuttle@gmail.com', $name = 'BlueShuttle');
//            $message->to('blueshuttle@gmail.com', $name = 'BlueShuttle');
            $message->to('nazari.dev@gmail.com', $name = 'BlueShuttle');
            $message->replyTo($data['email'], $name = $data['name']);
            $message->subject('Contact form');
        });

        $message = 'Your message has been successfuly sent!
                    <br>
                    Thank you.';

        return redirect()->back()->with(['message' => $message, 'status' => 'success']);
    }
}
