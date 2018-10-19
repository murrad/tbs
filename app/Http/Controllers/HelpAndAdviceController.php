<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelpAndAdviceController extends Controller
{
    public function index()
    {
        return view('help-and-advice.index');
    }

    public function faqs()
    {
        return view('help-and-advice.faqs');
    }
}
