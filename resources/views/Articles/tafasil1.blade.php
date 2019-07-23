<html lang="fr">

<head>

  <meta charset="utf-8">

 

  

  <link rel="stylesheet" href="style.css">

  <script src="script.js"></script>

    <!-- Latest compiled and minified CSS -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">



<!-- jQuery library -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>



<!-- Popper JS -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>



<!-- Latest compiled JavaScript -->

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>   



				<style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
				<style type="text/css">
			.recentcomments a {
				display: inline !important;
				padding: 0 !important;
				margin: 0 !important;
			}

			table.recentcommentsavatartop img.avatar, table.recentcommentsavatarend img.avatar {
				border: 0px;
				margin: 0;
			}

			table.recentcommentsavatartop a, table.recentcommentsavatarend a {
				border: 0px !important;
				background-color: transparent !important;
			}

			td.recentcommentsavatarend, td.recentcommentsavatartop {
				padding: 0px 0px 1px 0px;
				margin: 0px;
			}

			td.recentcommentstextend {
				border: none !important;
				padding: 0px 0px 2px 10px;
			}

			.rtl td.recentcommentstextend {
				padding: 0px 10px 2px 0px;
			}

			td.recentcommentstexttop {
				border: none;
				padding: 0px 0px 0px 10px;
			}

			.rtl td.recentcommentstexttop {
				padding: 0px 10px 0px 0px;
            }
            .text p{
                text-indent: 50px;
            }
            ul.b {
                list-style-type: circle;
                padding-left:45px;
                }
		    </style>
             <style>
                img {
                float: right;
                }
                .ligner{
                border-bottom: 2px solid #3CB371;
                margin:50px;
}
.para_activitie{
    
   
}
            </style>


</head>
<body>
@extends('layouts.single-blog')
     <!--================Home Banner Area =================-->
     <section class="ana-area text-center ana-padding" style=" text-align:right;margin-top:200px;margin-bottom:-140px;">
    
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
          
                <h2> <a href="/nos-services" style="color:#000;font-weight: bold;"
                 >برامج و مشاريع</a> </h2>
             </div>
                
            </div>
        </div>

    
</section>
 
<!--================End Home Banner Area =================-->

    @section('articles')
  
     <!--   <h1 > Activites relationnelle </h1>-->
        
        <div class="para_activitie">
        @if ( !empty ( $event->Titre) ) 
        <p style="text-align:center;"><strong style="color:#18d26e;font-weight: bold;font-size:30px;">{{$event->Titre}}</strong> <br>
        @else
        <p></p>
        @endif
       </p>
        
        @if ( !empty ( $event->Date) ) 
        <p style="text-align:center;">{{$event->Date}}   </p>     <br>
        @else
        <p></p>
        @endif
        <br>
       
        @if ( !empty ( $event->filePhoto1) ) 

        <div class="single-blog">
         <div class="thumb">
         <div  ><img style="width:300px;height:300px;margin:20px;margin-top:-30px;" src="{{asset('storage/' .$event->filePhoto1 ) }}" ></div>
         </div>
        </div>
        @else
        <p></p>
        @endif
        

        @if ( !empty ( $event->contenu) ) 
        <p style="text-align:right;padding-right:12px;">{{$event->contenu}}  </p> 
        @else
        @endif
        <br>
      
        
        @if ( !empty (  $event->fileYoutube1) ) 
        
  <iframe width="695" height="300" style="margin:15px;margin-bottom:5px;"src="http://www.youtube.com/embed/{{$event->fileYoutube1}}" frameborder="0" allowfullscreen>
            </iframe>
        <!--    {!! $event->fileYoutube1  !!}-->
           <!-- <iframe width="695" height="300"src="url(//www.youtube.com/embed/BstTBw6BLrE)" frameborder="0" allowfullscreen></iframe>
-->
      @else
      <p></p>
        @endif


 
        @if ( !empty ( $event->fileVideo1) ) 
        
        <p><video style="width:695px;height:300px;margin:15px;"  controls>
            <source src="{{asset('storage/'.$event->fileVideo1) }}" type="video/mp4" />
        </video>
        @else
        @endif
        </p>
     
        @if ( !empty ( $event->filePhoto2) ) 
        <div class="d-flex justify-content-center" >
        <div class="row">
        <div class="single-blog">
        <div class="thumb">
<div class="short_details" ><img style="width:300px;height:300px;margin-top:-30px;text-align:center;border:solid 1px #000; "  class="img-fluid"src="{{asset('storage/' .$event->filePhoto2 ) }}" ></div><br><br><br><br>
        </div>
        </div>
        </div>
        </div>

@else
<p></p>
@endif

        
       
    
       
@if ( !empty ( $event->filePhoto3) ) 

      <div class="d-flex justify-content-center" >
        <div class="row">
        <div class="single-blog">
        <div class="thumb">
<div><img style="width:300px;height:300px;margin:15px;margin-top:-30px;" src="{{asset('storage/' .$event->filePhoto3 ) }}" ></div><br>
        </div>
        </div>
        </div>
        </div>
@else
<p></p>
@endif

       
@if ( !empty ( $event->filePhoto4) ) 

       <div class="d-flex justify-content-center" >
        <div class="row">
        <div class="single-blog">
        <div class="thumb">
<div><img style="width:300px;height:300px;margin:15px;margin-top:-30px;" src="{{asset('storage/' .$event->filePhoto4) }}" ></div><br>
        </div>
        </div>
        </div>
        </div>
   @else
<p></p>
@endif

       
@if ( !empty ( $event->filePhoto5) ) 
<div class="d-flex justify-content-center" >
        <div class="row">
        <div class="single-blog">
        <div class="thumb">
<div><img style="width:300px;height:300px;margin:15px;margin-top:-30px;" src="{{asset('storage/' .$event->filePhoto5) }}" ></div><br>
        </div>
        </div>
        </div>
        </div>
@else
<p></p>
@endif

      


       <br>
        @if ( !empty ( $event->fileVideo2) ) 
        <p><video style="width:695px;height:300px;margin:15px;"  controls>
            <source src="{{asset('storage/'.$event->fileVideo2) }}" type="video/mp4" />
        </video>
        @else
        @endif
        </p>
        <br>
      
        
        @if ( !empty ( $event->filePhoto6) ) 

        <div class="d-flex justify-content-center" >
        <div class="row">
        <div class="single-blog">
        <div class="thumb">
        <div><img style="width:300px;height:300px;margin:15px;margin-top:-30px;" src="{{asset('storage/' .$event->filePhoto6) }}" ></div><br>
        </div>
        </div>
        </div>
        </div>
        @else
        <p></p>
        @endif
        
   
           
      
  @if ( !empty (  $event->fileYoutube2) ) 
  <iframe width="696" height="300"style="margin:15px;margin-bottom:5px;" src="http://www.youtube.com/embed/{{$event->fileYoutube2}}" frameborder="0" allowfullscreen>
            </iframe>
        <!--    {!! $event->fileYoutube1  !!}-->
           <!-- <iframe width="695" height="300"src="url(//www.youtube.com/embed/BstTBw6BLrE)" frameborder="0" allowfullscreen></iframe>
-->
      @else
        @endif
        @if ( !empty ( $event->fileVideo3) ) 
        <p><video style="width:695px;height:300px;margin:15px;"  controls>
            <source src="{{asset('storage/'.$event->fileVideo3) }}" type="video/mp4" />
        </video>
        @else
        @endif


</div>
<br>
<p></p>
<br><br>


    @endsection

