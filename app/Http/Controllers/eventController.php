<?php

namespace App\Http\Controllers;
use App\event;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
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
        $event = new event();
        if (!empty( $request->input('contenu'))) {
            $event->contenu = $request->input('contenu');
        }
        if (!empty( $request->input('date'))) {
            $event->Date = $request->input('date');
        }
        if (!empty( $request->input('titre'))) {
            $event->Titre = $request->input('titre');
        }
        if (!empty( $request->input('youtube1'))) {
            $event->fileYoutube1 = $request->input('youtube1');
        }
        if (!empty( $request->input('youtube2'))) {
            $event->fileYoutube2 = $request->input('youtube2');
        }
        /*if($request->hasFile('photo1')){
            $event->filePhoto1 = $request->photo1->store('activ');
        }
        if($request->hasFile('photo2')){
            $event->filePhoto2 = $request->photo2->store('activ');
        }
        if($request->hasFile('photo3')){
            $event->filePhoto3 = $request->photo3->store('activ');
        }
        if($request->hasFile('photo4')){
            $event->filePhoto4 = $request->photo4->store('activ');
        }
        if($request->hasFile('photo5')){
            $event->filePhoto5 = $request->photo5->store('activ');
        }
        if($request->hasFile('photo6')){
            $activitie->filePhoto6 = $request->photo6->store('activ');
        }
        if($event->hasFile('video1')){


 
            $activitie->fileVideo1 = $request->video1->store('activ');

    }


    if($request->hasFile('video2')){
    $event->fileVideo2 = $request->video2->store('activ');
    }



    if($request->hasFile('video3')){



        $event->fileVideo3 = $request->video3->store('activ');
    }
*/
    $event->save();
    Session::flash('message', 'Activite ajoute!');
    return redirect('/events');



   /* $validator = Validator::make($request->all(), [
        'fileVideo1' =>  'mimes:mp4,mov,ogg,qt| max:20000',
        'fileVideo2' => 'mimes:mp4,mov,ogg,qt | max:20000',
        'fileVideo3' => 'mimes:mp4,mov,ogg,qt | max:20000',


       
    ]);

    if ($validator->fails()) {
        return redirect('/events')
                    ->withErrors($validator)
                    ->withInput();
    }*/
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
        $event= event::find($id);
        $event->contenu = $request->input('contenu');
        $event->Date = $request->input('date');
        $event->Titre = $request->input('titre');
        $event->fileYoutube1 = $request->input('youtube1');
        $event->fileYoutube2 = $request->input('youtube2');
        if($request->hasFile('photo1')){
            $event->filePhoto1 = $request->photo1->store('activ');
        }
        if($request->hasFile('photo2')){
            $event->filePhoto2 = $request->photo2->store('activ');
        }
        if($request->hasFile('photo3')){
            $event->filePhoto3 = $request->photo3->store('activ');
        }
        if($request->hasFile('photo4')){
            $event->filePhoto4 = $request->photo4->store('activ');
        }
        if($request->hasFile('photo5')){
            $event->filePhoto5 = $request->photo5->store('activ');
        }
        if($request->hasFile('photo6')){
            $event->filePhoto6 = $request->photo6->store('activ');
        }
        if($request->hasFile('video1')){
            $event->fileVideo1 = $request->video1->store('activ');
            
        }
        if($request->hasFile('video2')){
            $event->fileVideo2 = $request->video2->store('activ');
        }
        if($request->hasFile('video3')){
            $event->fileVideo3 = $request->video3->store('activ');
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
    public function other($id)
    {
        //
        $event = event::find($id);
        return view('auth.admin-events.other',[
            'event' => $event,]);
    }
    public function voir($id)
    {

        $event = event::find($id);
        return view('Articles.tafasil1',[
            'event' => $event,]);
       
    }
    public function show()
    {
        $events = event::all();
       
        return view('press',[
            'events' => $events,
            
        ]);
    }
   
    
}
