<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MentionslegalesController extends Controller
{
    public function index()
    {
        return view ('mentionslegales');
    }
}
