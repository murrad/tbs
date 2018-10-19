<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->only(['basket']);
    }

    public function index()
    {
        return view('pages.index');
    }

    public function aboutUs()
    {
        return view('pages.about-us');
    }

    public function contactUs()
    {
        return view('pages.contact-us');
    }

    public function basket()
    {
        return view('pages.basket');
    }

    public function suppliers()
    {
        return view('pages.suppliers');
    }

    public function specialOffers()
    {
        return view('pages.special-offers');
    }

    public function siteMap()
    {
        return view('pages.site-map');
    }

    public function careers()
    {
        return view('pages.careers');
    }

    public function termsAndConditions()
    {
        return view('pages.terms-and-conditions');
    }
}
