<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrivacyController extends Controller
{
    public function index() 
    {
        return view('privacy.index');
    }

    public function policy() 
    {
        return view('privacy.policy');
    }

    public function cookie() 
    {
        return view('privacy.cookie');
    }

    public function unconsent() 
    {
        return view('privacy.unconsent');
    }
}
