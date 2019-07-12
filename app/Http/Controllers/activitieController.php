<?php

namespace App\Http\Controllers;
use App\activitie;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Session;
class activitieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $activities = activitie::all();
        return view('auth.admin-activities.update-delete',[
            'activities' => $activities,
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
        $activitie = new activitie();
        $activitie->contenu = $request->input('message');
        if($request->hasFile('filePhoto')){
            $activitie->filePhoto = $request->filePhoto->store('activ');
        }
        if($request->hasFile('fileVideo')){
            $activitie->fileVideo = $request->fileVideo->store('activ');
        }
       
        $activitie->save();
        Session::flash('message', 'Activite ajoute!');
        return redirect('/activities');
       
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
        $activitie = activitie::find($id);
        return view('auth.admin-activities.edit',[
            'activitie' => $activitie,
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
        $activitie = activitie::find($id);
        $activitie->contenu = $request->input('message');
        if($request->hasFile('filePhoto')){
            $activitie->filePhoto = $request->filePhoto->store('activ');
        }
        if($request->hasFile('fileVideo')){
            $activitie->fileVideo = $request->fileVideo->store('activ');
        }
       
       
        $activitie->save();
        Session::flash('message', 'Activite Modifier !');
        return redirect('/activities');
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
        $activitie = activitie::find($id);
        $activitie->delete();
        Session::flash('message', 'Activite Supprimer !');
        return redirect('/activities');
    }
}
