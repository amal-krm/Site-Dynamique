<html lang="fr">

<head>

  <meta charset="utf-8">

  <title>Hygiène alimentaire</title>

  

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
        @foreach($activities as $activitie)
        <div class="card" style="margin:15px;text-align:right;" >

 
             @if ( !empty (  $activitie->fileYoutube1) ) 
        
        <iframe class="card-img-top" height="200" src="http://www.youtube.com/embed/{{$activitie->fileYoutube1}}" frameborder="0" allowfullscreen>
                  </iframe>
              <!--    {!! $activitie->fileYoutube1  !!}-->
                 <!-- <iframe width="695" height="300"src="url(//www.youtube.com/embed/BstTBw6BLrE)" frameborder="0" allowfullscreen></iframe>
      -->
            @else
            @if ( !empty ( $activitie->fileVideo2) ) 
            <video  class="card-img-top"style="height:200px;"  controls>
            <source src="{{asset('storage/'.$activitie->fileVideo2) }}" type="video/mp4" />
            </video>
            @else
      
        
              @endif
              @endif
              <div class="card-body">      
  
  @if ( !empty ( $activitie->Titre) ) 
    <h5 class="card-title" ><strong style="color:#18d26e;font-weight: bold;font-size:30px;">{{$activitie->Titre}}</strong></h5>
    @else
        <p></p>
        @endif


        @if ( !empty ( $activitie->Date) ) 
        <h5 class="card-title" >{{$activitie->Date}}</h5>

        @else 
        <p></p>
        @endif
        <br>

        <p class="card-text"style=" margin-bottom:6vw;"> 
        @if ( !empty ( $activitie->filePhoto1) ) 
        <img style=" float: right;width:150px;height:150px;margin:5px;" src="{{asset('storage/' .$activitie->filePhoto1 ) }}" >
        @else
           @if ( !empty ( $activitie->filePhoto2) ) 
           <img style=" float: right;width:150px;height:150px;margin:5px;" src="{{asset('storage/' .$activitie->filePhoto3) }}" >
            @else
            @if ( !empty ( $activitie->filePhoto3) ) 
           <img style=" float: right;width:150px;height:150px;margin:5px;" src="{{asset('storage/' .$activitie->filePhoto3) }}" >
            @else
            @if ( !empty ( $activitie->filePhoto4) ) 
           <img style=" float: right;width:150px;height:150px;margin:5px;" src="{{asset('storage/' .$activitie->filePhoto4) }}" >
            @else
            @if ( !empty ( $activitie->filePhoto5) ) 
           <img style=" float: right;width:150px;height:150px;margin:5px;" src="{{asset('storage/' .$activitie->filePhoto5) }}" >
            @else
            @if ( !empty ( $activitie->filePhoto6) ) 
           <img style=" float: right;width:150px;height:150px;margin:5px;" src="{{asset('storage/' .$activitie->filePhoto6) }}" >
            @else
            @if ( !empty ( $activitie->fileVideo1) ) 
        
        <video style="float: right;width:150px;height:150px;margin:5px;"  controls>
            <source src="{{asset('storage/'.$activitie->fileVideo1) }}" type="video/mp4" />
        </video>
        @else


        @if ( !empty ( $activitie->fileVideo2) ) 
        
        <video style="float: right;width:150px;height:150px;margin:5px;"  controls>
            <source src="{{asset('storage/'.$activitie->fileVideo2) }}" type="video/mp4" />
        </video>
        @else

        @endif
        @endif
       @endif
       @endif
       @endif
       @endif
       @endif
       @endif
       @if ( !empty ( $activitie->contenu) ) 
            {{$activitie->contenu}}
            @else
                <p></p>
                @endif
  
  <br><br>
        </p>
      <br>
  
    <a href="{{asset('activities/'. $activitie->id) }}"class="btn btn-primary" style="font-family: 'Droid Arabic Kufi', Tahoma, Arial, Times New Roman, serif;font-size:20px;background-color:#18d26e;border-color:#18d26e;color:#fff;">إقرأ المزيد</a>
  </div>
  </div>
<br>
<br>



<!--  mm -->


        @endforeach

    @endsection

