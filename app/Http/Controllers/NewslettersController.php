<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Newsletter;

class NewslettersController extends Controller
{
    public function store()
    {
        $this->validate(request(), [
            'newsletter_email' => 'required|unique:newsletters,email',
            'newsletter_name' => 'required'
        ]);

        Newsletter::create(['newsletter_email', 'newsletter_name']);
        
        return redirect('/');
    }
}
