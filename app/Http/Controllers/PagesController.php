<?php

#! static web controller

#! what usually happens in each function
# process variable data or params
# talk to the model
# receive from the model
# compile or process data from the model if needed
# pass that data to the correct view

namespace App\Http\Controllers;

class PagesController extends Controller {

    public function getIndex() {
        return view('pages.welcome');
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

    public function postContact() {

    }



}