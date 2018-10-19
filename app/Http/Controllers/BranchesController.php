<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BranchesController extends Controller
{
    public function index()
    {
        return view('branches.index');
    }

    public function finder()
    {
        return view('branches.finder');
    }
}
