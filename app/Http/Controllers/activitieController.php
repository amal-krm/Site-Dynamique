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
        if (!empty( $request->input('contenu'))) {
            $activitie->contenu = $request->input('contenu');
        }
        if (!empty( $request->input('date'))) {
            $activitie->Date = $request->input('date');
        }
        if (!empty( $request->input('titre'))) {
            $activitie->Titre = $request->input('titre');
        }
        if (!empty( $request->input('youtube1'))) {
            $activitie->fileYoutube1 = $request->input('youtube1');
        }
        if (!empty( $request->input('youtube2'))) {
            $activitie->fileYoutube2 = $request->input('youtube2');
        }
        if($request->hasFile('photo1')){
            $activitie->filePhoto1 = $request->photo1->store('activ');
        }
        if($request->hasFile('photo2')){
            $activitie->filePhoto2 = $request->photo2->store('activ');
        }
        if($request->hasFile('photo3')){
            $activitie->filePhoto3 = $request->photo3->store('activ');
        }
        if($request->hasFile('photo4')){
            $activitie->filePhoto4 = $request->photo4->store('activ');
        }
        if($request->hasFile('photo5')){
            $activitie->filePhoto5 = $request->photo5->store('activ');
        }
        if($request->hasFile('photo6')){
            $activitie->filePhoto6 = $request->photo6->store('activ');
        }
        if($request->hasFile('video1')){


 
            $activitie->fileVideo1 = $request->video1->store('activ');


 
        }


 
        if($request->hasFile('video2')){


 
            $activitie->fileVideo2 = $request->video2->store('activ');


 
        }


 
        if($request->hasFile('video3')){


 
            $activitie->fileVideo3 = $request->video3->store('activ');
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
        $activitie->contenu = $request->input('contenu');
        $activitie->Date = $request->input('date');
        $activitie->Titre = $request->input('titre');
        $activitie->fileYoutube1 = $request->input('youtube1');
        $activitie->fileYoutube2 = $request->input('youtube2');
        if($request->hasFile('photo1')){
            $activitie->filePhoto1 = $request->photo1->store('activ');
        }
        if($request->hasFile('photo2')){
            $activitie->filePhoto2 = $request->photo2->store('activ');
        }
        if($request->hasFile('photo3')){
            $activitie->filePhoto3 = $request->photo3->store('activ');
        }
        if($request->hasFile('photo4')){
            $activitie->filePhoto4 = $request->photo4->store('activ');
        }
        if($request->hasFile('photo5')){
            $activitie->filePhoto5 = $request->photo5->store('activ');
        }
        if($request->hasFile('photo6')){
            $activitie->filePhoto6 = $request->photo6->store('activ');
        }
        if($request->hasFile('video1')){
            $activitie->fileVideo1 = $request->video1->store('activ');
        }
        if($request->hasFile('video2')){
            $activitie->fileVideo2 = $request->video2->store('activ');
        }
        if($request->hasFile('video3')){
            $activitie->fileVideo3 = $request->video3->store('activ');
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
    
    public function other($id)
    {
        //
        $activitie = activitie::find($id);
        return view('auth.admin-activities.other',[
            'activitie' => $activitie,]);
            
    }
    public function voir($id)
    {
        //
        $activitie = activitie::find($id);
        return view('Articles.tafasil',[
            'activitie' => $activitie,]);
            
    }
}

