<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getInfos ()
    {
        return view('infos');
        //return route('getUserInfos');
    }

    public function postInfos (Request $request)
    {
        return $request->input('name');
        //dd($request);
        //return route('postUserInfos');
    }
}
