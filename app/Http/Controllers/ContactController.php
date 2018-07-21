<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function get ()
    {
        return view('pages.contact');
    }

    public function post ()
    {

    }
}
