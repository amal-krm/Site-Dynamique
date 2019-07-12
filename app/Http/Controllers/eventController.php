<?php

namespace App\Http\Controllers;
use App\event;
use Illuminate\Http\UploadedFile;
use Illuminate\Http\Request;
use Session;

class eventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $events = event::all();
        return view('auth.admin-events.update-delete',[
            'events' => $events,
        ]);
    }
    public function index()
    {
        //
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
        $event = new event();
        $event->titre = $request->input('Titre');
        $event->date = $request->input('date');
        $event->contenu = $request->input('contenu');
        if($request->hasFile('filePhoto')){
            $event->filePhoto = $request->filePhoto->store('eventi');
        }
        if($request->hasFile('fileVideo')){
            $event->fileVideo = $request->fileVideo->store('eventi');
        }
       
        $event->save();
        return redirect('/events');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $event = event::find($id);
        return view('auth.admin-events.edit',[
            'event' => $event,
        ]);
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
        $event = event::find($id);
        
        
        
        if($request->has('Titre')){
            $event->titre = $request->input('Titre');
        }
        if($request->has('date')){
            $event->date = $request->input('date');
        }
        if($request->has('contenu')){
            $event->contenu = $request->input('contenu');
        }
        if($request->hasFile('filePhoto')){
            $event->filePhoto = $request->filePhoto->store('eventi');
        }
        if($request->hasFile('fileVideo')){
            $event->fileVideo = $request->fileVideo->store('eventi');
        }
        $event->save();
        Session::flash('message', 'evenement Modifier !');
        return redirect('/events');
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
        $event = event::find($id);
        $event->delete();
        Session::flash('message', 'Activite Supprimer !');
        return redirect('/events');
    }
}
