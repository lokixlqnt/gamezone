<?php

namespace App\Http\Controllers;
<<<<<<< HEAD

use Illuminate\Http\Request;
use App\User;
=======
use App\User;

use Illuminate\Http\Request;
>>>>>>> 164fdd189804d246230d8900172f1fe8eaf14701

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD

=======
    public function index()
    {
        // $users = users::all();
        // return view('administration', ['users' => $users]);
    }
>>>>>>> 164fdd189804d246230d8900172f1fe8eaf14701

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
<<<<<<< HEAD
        //
=======

>>>>>>> 164fdd189804d246230d8900172f1fe8eaf14701
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
    // public function update(Request $request, $id)
    // {
    //     $users = User::all();
    //     return view ('compte', ['users' => $users]);
    // }


    // public function index()
    // {
    //     $users = Users::all();
    //     return view ('administration', ['users' => $users]);
    // }
=======
    public function update(Request $request, $id)
    {

    }
>>>>>>> 164fdd189804d246230d8900172f1fe8eaf14701

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
