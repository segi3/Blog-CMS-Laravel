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
        return view('pages.about');
    }

    public function getContact() {
        return view('pages.contact');
    }

    public function postContact() {

    }



}