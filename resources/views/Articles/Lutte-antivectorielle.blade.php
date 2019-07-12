
@extends('layouts.single-blog')
@section('title' , 'Lutte antivectorielle')
@section('articles')
article
<div class="feature-img">
                        <img class="img-fluid" src="img/blog/main-blog/m-blog-1.jpg" alt="">
                    </div>
@endsection

@section('Commentaire')


<div class="container">
<?php $a=0;?>
   @foreach($comments as $comment)
   @if($comment->post_id==3)
   
   <?php $a=$a+1;?>
   @endif
   @endforeach
   
 
    <div class="row">
     <div class="col-md-8 col-md-offset-2"> 
     <h3 class="comments-title"><i class="ti-comment"></i>{{$a}}comments</h3>
    @foreach($comments as $comment)
     @if($comment->post_id==3)
       
     <div class="comment">
      <div class="author-info">
      <img src="https://www.gravatar.com/avatar/.md5(strtolower(trim($comment->email))).?s=50&d=identicon" alt="" class="author-image">
      <div class="author-name" > 
      <h4><strong>{{$comment->name}}</strong>  </h4>
     <p class="author-time"> {{$comment->created_at}}</p>
      </div>
      </div>  
      <div class="comment-content">
      {{$comment->comment}}
      </div>                       
                
     </div>    
    @endif
    @endforeach 
    </div>
    </div>
  
    
   
</div>
                             
<div class="comment-form">
    <h4>Laisser un commmentaire</h4>
    <form class="form-contact comment_form" action="{{ route('comments.store',['id'=>3])}}"  method="post" id="commentForm">
    {{Csrf_field()}}
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9" placeholder="Ecrire un commentaire"></textarea>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <input class="form-control" name="name" id="name" type="text" placeholder="Nom">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <input class="form-control" name="email" id="email" type="email" placeholder="Email">
                </div>
            </div>
           <!-- <div class="col-12">
                <div class="form-group">
                    <input class="form-control" name="website" id="website" type="text" placeholder="Website">
                </div>
            </div>-->
        </div>
        <div class="form-group">
            <button type="submit" class="button button-contactForm">Send Message</button>
        </div>
    </form>
</div>
@endsection





