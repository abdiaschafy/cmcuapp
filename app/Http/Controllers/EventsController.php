<?php

namespace App\Http\Controllers;

use App\Event;
use App\User;
use Calendar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class EventsController extends Controller
{

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
//                        'url' => '',
                    ]
                );
            }
        }

        $calendar = Calendar::addEvents($event)
            ->setOptions([
                'firstDay'=> 1,
                'editable'=> true,
                'navLinks'=> true,
                'selectable'  => true,
                'durationeditable' => true,
                'locale' => 'fr',
            ])->setCallbacks([
                'eventClick' => 'function() 
                {
                    showModal();
                }',
                'themeSystem' => '"bootstrap4"',
                'eventRender' => 'function(event, element) {
                }'
            ]);

        return view('admin.events.index', compact('calendar', 'events'));
    }

    public function create()
    {
        $users = User::with('roles')->where('role_id', '=', '2')->get(['name']);
//        dd($users);
        return view('admin.events.create', compact('users'));
    }

    public function store(Request $request)
    {
//
        $this->authorize('create', Event::class);
//        $this->authorize('create', User::class);
        $this->validate($request, [
           'title' => 'required',
           'color' => 'required',
           'start_date' => 'required',
           'end_date' => 'required',
           'medecin' => 'required',
        ]);

        $events = new Event();

        $events->title = $request->input('title');
        $events->color = $request->input('color');
        $events->start_date = $request->input('start_date');
        $events->end_date = $request->input('end_date');
        $events->user_id = Auth::id();
        $events->medecin = $request->input('medecin');

        $events->save();

        return redirect()->route('events.index')->with('success', 'Le rendez-vous a bien été créer');
    }


    public function show($id)
    {
        $event = Event::find($id);

        return view('admin.events.show', compact('event'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
