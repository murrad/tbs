<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerServicesController extends Controller
{
    public function index()
    {
        return view('customer-services.index');
    }

    public function aftersalesSupport()
    {
        return view('customer-services.aftersales-support');
    }

    public function paymentTerms()
    {
        return view('customer-services.payment-terms');
    }

    public function returns()
    {
        return view('customer-services.returns');
    }

    public function delivery()
    {
        return view('customer-services.delivery');
    }
}
