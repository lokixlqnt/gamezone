<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Attraction;

class AttractionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attractions = Attraction::all();
        return view ('attractions', ['attractions' => $attractions]);
    }


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
        $attraction = Attraction::find($id);
        return view('attraction', ['attraction' => $attraction]);
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

    /**$attraction = Attraction::find($id);
        return view('attraction', ['attraction' => $attraction]);
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

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


      // ----- --API-- -----

      public function apiIndex()
      {
          $attractions = Attraction::all();
          return response()->json($attractions);
      }

      public function apiShow($id)
      {
          $attraction = Attraction::find($id);
          return response()->json($attraction);
      }

      public function apiStore (Request $request)
      {
          $attraction = Attraction::find($id);
          $attraction->save();
      }

      public function apiDestroy($id)
      {
          $attraction = Attraction::find($id);
          $attraction->delete();
          return response()->json($attraction);

      }

      public function apiUpdate($id, Request $request)
      {
          $attraction = Attraction::find($id);
          $input = $request->all();
          $attraction->fill($input)->save();
          return response()->json($attraction);
      }

}
