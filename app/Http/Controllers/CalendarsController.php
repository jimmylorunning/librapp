<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Calendar;

class CalendarsController extends Controller
{
  
    public function __construct() 
    {
      $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $calendars = Calendar::all()->toArray();
      return view('calendars.index', compact('calendars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
      $title = "New Calendar";
      $audiences = \App\Audience::lists('name', 'id');
      return view('calendars.create', compact('title', 'audiences'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $calendarRequest)
    {
//      dd($calendarRequest->input());
      $calendar = Calendar::create($calendarRequest->input()); 
      return redirect()->action('CalendarsController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Calendar $calendar)
    {
      return view('calendars.show', compact('calendar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Calendar $calendar)
    {
      $title = 'Edit Calendar';
      $audiences = \App\Audience::lists('name', 'id');
      return view('calendars.edit', compact('calendar', 'title', 'audiences'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $calendarRequest, Calendar $calendar)
    {
      $calendar->update($calendarRequest->input());
      return redirect()->action('CalendarsController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      return "destroy";
    }
}
