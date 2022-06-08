<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
  public function index() {

    $search = request('search');

    if ($search) { 
      $events = Event::where([
        ['title', 'like', '%'.$search.'%']
      ])->get();
    }else {
      $events = Event::all();
    }

    return view(
      'welcome', ['events' => $events, 'search' => $search]
    );
  }

  public function create(){
    return view('/events/create');
  }

  public function store(Request $request) {

    $event = new Event;

    $event->title = $request->title;
    $event->date = $request->date;
    $event->city = $request->city;
    $event->private = $request->private;
    $event->description = $request->description;
    $event->image = $request->image;
    $event->items = $request->items;
    
    

    if ($request->hasFile('image') && $request->file('image')->isValid()) {

      $requestImage = $request->image;
      $extension = $requestImage->extension();

      $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

      $requestImage->move(public_path('img/events'), $imageName);

      $event->image = $imageName;
    }

    
    $event->user_id = auth()->user()->id;
    

    $event->save();

    return redirect('/')->with('msg', 'Evento criado com sucesso!');
  }

  public function show($id){
    
    $event = Event::findOrFail($id);
    
    $eventOwner = User::where('id', $event->user_id)->first()->toArray();
    
    return view('/events/show', ['event' => $event, 'eventOwner' => $eventOwner]);
  }

  public function dashboard(){
    $user = auth()->user();
    $events = $user->events;

    return view('events/dashboard', ['events' => $events]);

  }

  public function destroy($id){
    Event::findOrFail($id)->delete();

    return redirect('/dashboard')->with('msg', 'Evento excluído!');
  }

  public function edit($id){
    $event = Event::findOrFail($id);

    return view('events/edit', ['event' => $event]);
  }

  public function update(Request $request){

    $data = $request->all();

    
    if ($request->hasFile('image') && $request->file('image')->isValid()) {

      $requestImage = $request->image;
      $extension = $requestImage->extension();

      $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

      $requestImage->move(public_path('img/events'), $imageName);

      $data['image'] = $imageName;
    }

    Event::findOrFail($request->id)->update($data);

    return redirect('/dashboard')->with('msg', 'Evento editado!');

  }

  public function joinEvent($id){
    $user = auth()->user();

    $user->eventsAsParticipant()->attach($id);

    $event = Event::findOrFail($id);

    return redirect('/dashboard')->with('msg', 'Sua presença está confirmada no evento ' . $event->title);
  }

}
