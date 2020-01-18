<?php

#! static web controller

#! what usually happens in each function
# process variable data or params
# talk to the model
# receive from the model
# compile or process data from the model if needed
# pass that data to the correct view

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Mail;
use Session;

class PagesController extends Controller {

    public function getIndex() {

        $posts = Post::orderBy('id', 'desc')->take(5)->get();

        return view('pages.welcome')->withPosts($posts);
    }

    public function getAbout() {

        $first = 'Rafi';
        $last = 'Nizar';

        $full = $first . " " . $last;

        $email = 'rafi.nizar15@gmail.com';

        return view('pages.about')->with("fullname", $full)->withEmail($email);
    }

    public function getContact() {
        return view('pages.contact');
    }

    public function postContact(Request $request) {

        $validatedData = $request->validate([
            'email' => 'required|email',
            'subject' => 'required|min:3',
            'message' => 'required|min:10'
        ]);

        $data = [
                'email' => $request->email,
                'subject' => $request->subject,
                'emailMessage' => $request->message
        ];

        Mail::Send('emails.contact', $data, function($message) use ($data){
            $message->from($data['email']);
            $message->to('rafi@example.com');
            $message->subject($data['subject']);
        });

        Session::flash('success', 'Email Sent!');

        return redirect()->route('page.contact');
    }



}