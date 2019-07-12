<?php

namespace App\Http\Controllers;
use App\Comment;
use App\event;
use App\Post;
use Illuminate\Http\Request;
use Session;
class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index1()
    {
        
         
          
        $comments=\App\Comment::all();

        return view('Articles/Hygiène-alimentaire',compact('comments'));
        
    }


    public function index2()
    {  
        $comments=\App\Comment::all();

        return view('Articles/Salubrité-publique',compact('comments'));
        
    }
    public function index3()
    {  
        $comments=\App\Comment::all();

        return view('Articles/Lutte-antivectorielle',compact('comments'));
        
    }
    public function index4()
    {  
        $comments=\App\Comment::all();

        return view('Articles/Médicolégal',compact('comments'));
        
    }

    public function index5()
    {  
        $comments=\App\Comment::all();

        return view('Articles/Ramassage-des-chiens-et-chats-errants',compact('comments'));
        
    }

    public function index6()
    {  
        $comments=\App\Comment::all();

        return view('Articles/A-propos-de-l’hygiène',compact('comments'));
        
    }

    public function index7()
    {  
        $comments=\App\Comment::all();

        return view('Articles/Organigramme',compact('comments'));
        
    }


    public function index8()
    {
        $deces = \App\dece::all();
        return view('deces',[
            'deces' => $deces,
        ]);
    }
    public function index9()
    {
        $activities = \App\activitie::all();
        $comments=\App\Comment::all();
        return view('Activité-relationnelle',[
            'activities' => $activities,
            'comments' => $comments,
        ]);
         
         /* 
        $comments=\App\Comment::all();

        return view('Activité-relationnelle',compact('comments'));
        */
    }
    public function index10()
    {
        
        $events = event::all();
        $comments=\App\Comment::all();
        return view('nos-evenements',[
            'events' => $events,
            'comments' => $comments,
        ]);
        
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
    public function store(Request $request,$id)
    {
        $post=Post::find($id);
       /* Comment::create(Request::all());*/
            $validatedData = $request->validate([
            "name"=>'required',
            "email"=>'required',
            "email"=>'email',
            "comment"=>'required',
            ]);
            
            if($validatedData)
            {
                $comment=new Comment();
                $comment->post_id=$id;
                $comment->name=$request->name;
                $comment->email=$request->email;
                $comment->comment=$request->comment;
                $comment->approved=true;
                
                $comment->post()->associate($post);
                $comment->save();
                 Session::flash('success','commentaire a ete ajouté');
                 return redirect()->back();
            }
            else
            {
                return redirect()->back();
            }
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
