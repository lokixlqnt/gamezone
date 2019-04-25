<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CGVController extends Controller
{
    public function index()
    {
        return view ('cgv');
    }
}
