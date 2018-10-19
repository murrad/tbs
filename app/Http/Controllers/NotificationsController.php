<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notification;

class NotificationsController extends Controller
{
    public function store()
    {
        $this->validate(request(), [
            'contact_number' => 'required|max:20'
        ]);

        Notification::create(request(['contact_number']));

        return redirect('/');
    }
}
