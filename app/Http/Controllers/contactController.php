<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\mails;

class contactController extends Controller
{
  public function create()
      {
          return view('contact');
      }

      public function store(ContactRequest $request)
      {
          Mail::to('loic-gasse@outlook.com')
              ->send(new Contact($request->except('_token')));

          return view('contact');
        }

}
