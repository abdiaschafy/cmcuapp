<?php

namespace App\Http\Controllers;

use App\Event;
//use Calendar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use MaddHatter\LaravelFullcalendar\Facades\Calendar;

//use MaddHatter\LaravelFullcalendar\Calendar;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();
        $event = [];
        if($events->count()) {
            foreach ($events as $row) {
                $event[] = Calendar::event(
                    $row->title,
                    false,
                    new \DateTime($row->start_date),
                    new \DateTime($row->end_date),
                    $row->id,
                    // Add color and link on event
                    [
                        'color' => $row->color,
                        'url' => 'events/',
                    ]
                );
            }
        }
        $calendar = Calendar::addEvents($event);
        return view('admin.events.index', compact('calendar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
           'title' => 'required',
           'color' => 'required',
           'start_date' => 'required',
           'end_date' => 'required',
        ]);

        $events = new Event();

        $events->title = $request->input('title');
        $events->color = $request->input('color');
        $events->start_date = $request->input('start_date');
        $events->end_date = $request->input('end_date');
        $events->user_id = Auth::id();

        $events->save();

        return redirect()->route('events.index')->with('success', 'Le rendez-vous a bien été créer');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::find($id);
dd($event);
        return view('admin.events.show', compact('event'));
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
}
