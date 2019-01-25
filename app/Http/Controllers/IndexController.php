<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Mail;

/**
 * Class IndexController
 * @package App\Http\Controllers
 */
class IndexController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('index', ['title' => 'Online Reservation']);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function airports()
    {
        return view('airports', ['title' => 'Online Reservation']);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function aboutUs()
    {
        return view('about', [
            'title' => 'Online Reservation',
            'images' => [
                [
                    'thumbnail' => asset('gallery/thumbnails/blueshuttle_00001.jpg'),
                    'large' => asset('gallery/large/blueshuttle_00001.jpg'),
                    'caption' => 'Wedding trip in Bay Area, provided by Blue Shuttle'
                ], [
                    'thumbnail' => asset('gallery/thumbnails/blueshuttle_00002.jpg'),
                    'large' => asset('gallery/large/blueshuttle_00002.jpg'),
                    'caption' => ''
                ], [
                    'thumbnail' => asset('gallery/thumbnails/blueshuttle_00003.jpg'),
                    'large' => asset('gallery/large/blueshuttle_00003.jpg'),
                    'caption' => ''
                ], [
                    'thumbnail' => asset('gallery/thumbnails/blueshuttle_00004.jpg'),
                    'large' => asset('gallery/large/blueshuttle_00004.jpg'),
                    'caption' => ''
                ], [
                    'thumbnail' => asset('gallery/thumbnails/blueshuttle_00005.jpg'),
                    'large' => asset('gallery/large/blueshuttle_00005.jpg'),
                    'caption' => ''
                ], [
                    'thumbnail' => asset('gallery/thumbnails/blueshuttle_00005.jpg'),
                    'large' => asset('gallery/large/blueshuttle_00005.jpg'),
                    'caption' => ''
                ], [
                    'thumbnail' => asset('gallery/thumbnails/blueshuttle_00005.jpg'),
                    'large' => asset('gallery/large/blueshuttle_00005.jpg'),
                    'caption' => ''
                ]
            ]
        ]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function contactUs()
    {
        return view('contact', ['title' => 'Online Reservation']);
    }

    /**
     * @param ContactRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function sendMail(ContactRequest $request)
    {
        $data = $request->input();
        unset($data['_token']);
        unset($data['_method']);

        Mail::queue('emails.reservation', ['data' => $data], function ($message) use ($data) {
            /** @var \Illuminate\Mail\Message $message */
            $message->from('blueshuttle@gmail.com', $name = 'BlueShuttle');
            $message->to('blueshuttle@gmail.com', $name = 'BlueShuttle');
//            $message->cc('nazari.dev@gmail.com', $name = 'BlueShuttle');
            $message->replyTo($data['email'], $name = $data['name']);
            $message->subject('Contact form');
        });

        $message = 'Your message has been successfuly sent!
                    <br>
                    Thank you.';

        return redirect()->back()->with(['message' => $message, 'status' => 'success']);
    }
}
