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
        @if ( !empty ( $activitie->Titre) ) 
        <p style="text-align:center;"><strong style="color:#18d26e;font-weight: bold;font-size:30px;">{{$activitie->Titre}}</strong> <br>
        @else
        <p></p>
        @endif
       </p>
        
        @if ( !empty ( $activitie->Date) ) 
        <p style="text-align:center;">{{$activitie->Date}}   </p>     <br>
        @else
        <p></p>
        @endif
        <br>
       
        @if ( !empty ( $activitie->filePhoto1) ) 

        <div class="d-flex justify-content-center" >
        <div class="row">
        <div class="single-blog">
        <div class="thumb">
<div class="short_details" ><img style="border:1px solid #000;width:600px;height:650px;margin-top:-30px;text-align:center;border:solid 1px #000; "  class="img-fluid"src="{{asset('storage/' .$activitie->filePhoto1 ) }}" ></div><br><br><br><br>
        </div>
        </div>
        </div>
        </div>
        @else
        <p></p>
        @endif
        

        @if ( !empty ( $activitie->contenu) ) 
        <p style="text-align:right;padding-right:12px;">{{$activitie->contenu}}  </p> 
        @else
        @endif
        <br>
      
        
        @if ( !empty (  $activitie->fileYoutube1) ) 
        
  <iframe width="695" height="300" style="margin:15px;margin-bottom:5px;"src="http://www.youtube.com/embed/{{$activitie->fileYoutube1}}" frameborder="0" allowfullscreen>
            </iframe>
        <!--    {!! $activitie->fileYoutube1  !!}-->
           <!-- <iframe width="695" height="300"src="url(//www.youtube.com/embed/BstTBw6BLrE)" frameborder="0" allowfullscreen></iframe>
-->
      @else
      <p></p>
        @endif


 
        @if ( !empty ( $activitie->fileVideo1) ) 
        
        <p><video style="width:695px;height:300px;margin:15px;"  controls>
            <source src="{{asset('storage/'.$activitie->fileVideo1) }}" type="video/mp4" />
        </video>
        @else
        @endif
        </p>
     
        @if ( !empty ( $activitie->filePhoto2) ) 
        <div class="d-flex justify-content-center" >
        <div class="row">
        <div class="single-blog">
        <div class="thumb">
<div class="short_details" ><img style="border:1px solid #000;width:600px;height:600px;margin-top:-30px;text-align:center;border:solid 1px #000; "  class="img-fluid"src="{{asset('storage/' .$activitie->filePhoto2 ) }}" ></div><br><br><br><br>
        </div>
        </div>
        </div>
        </div>

@else
<p></p>
@endif

        
       
    
       
@if ( !empty ( $activitie->filePhoto3) ) 

      <div class="d-flex justify-content-center" >
        <div class="row">
        <div class="single-blog">
        <div class="thumb">
<div><img style=" border:1px solid #000; width:600px;height:600px;margin:15px;margin-top:-30px;" src="{{asset('storage/' .$activitie->filePhoto3 ) }}" ></div><br>
        </div>
        </div>
        </div>
        </div>
@else
<p></p>
@endif

       
@if ( !empty ( $activitie->filePhoto4) ) 

       <div class="d-flex justify-content-center" >
        <div class="row">
        <div class="single-blog">
        <div class="thumb">
<div><img style=" border:1px solid #000;width:600px;height:600px;margin:15px;margin-top:-30px;" src="{{asset('storage/' .$activitie->filePhoto4) }}" ></div><br>
        </div>
        </div>
        </div>
        </div>
   @else
<p></p>
@endif

       
@if ( !empty ( $activitie->filePhoto5) ) 
<div class="d-flex justify-content-center" >
        <div class="row">
        <div class="single-blog">
        <div class="thumb">
<div><img style=" border:1px solid #000; width:600px;height:600px;margin:15px;margin-top:-30px;" src="{{asset('storage/' .$activitie->filePhoto5 ) }}" ></div><br>
        </div>
        </div>
        </div>
        </div>
@else
<p></p>
@endif

      


       <br>
        @if ( !empty ( $activitie->fileVideo2) ) 
        <p><video style="width:695px;height:300px;margin:15px;"  controls>
            <source src="{{asset('storage/'.$activitie->fileVideo2) }}" type="video/mp4" />
        </video>
        @else
        @endif
        </p>
        <br>
      
        
        @if ( !empty ( $activitie->filePhoto6) ) 

        <div class="d-flex justify-content-center" >
        <div class="row">
        <div class="single-blog">
        <div class="thumb">
<div><img style=" border:1px solid #000; width:600px;height:600px;margin:15px;margin-top:-30px;" src="{{asset('storage/' .$activitie->filePhoto6 ) }}" ></div><br>
        </div>
        </div>
        </div>
        </div>
@else
<p></p>
@endif
        
   
           
      
  @if ( !empty (  $activitie->fileYoutube2) ) 
  <iframe width="696" height="300"style="margin:15px;margin-bottom:5px;" src="http://www.youtube.com/embed/{{$activitie->fileYoutube2}}" frameborder="0" allowfullscreen>
            </iframe>
        <!--    {!! $activitie->fileYoutube1  !!}-->
           <!-- <iframe width="695" height="300"src="url(//www.youtube.com/embed/BstTBw6BLrE)" frameborder="0" allowfullscreen></iframe>
-->
      @else
        @endif
        @if ( !empty ( $activitie->fileVideo3) ) 
        <p><video style="width:695px;height:300px;margin:15px;"  controls>
            <source src="{{asset('storage/'.$activitie->fileVideo3) }}" type="video/mp4" />
        </video>
        @else
        @endif


</div>
<br>
<p></p>
<br><br>


    @endsection

