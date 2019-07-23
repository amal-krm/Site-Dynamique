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

    @section('articles')
    <h1 > Nos evenement </h1>
        @foreach($events as $event)
        @if ( !empty ( $event->filePhoto) ) 
        <p><img src="{{asset('storage/' .$event->filePhoto ) }}"  style="width:200px;height:170px;margin-right:15px;">
        @else
        @if ( !empty ( $event->fileVideo) ) 
        <p><video style="width:200px;height:170px;margin-right:15px;float: left;"  controls>
            <source src="{{asset('storage/'.$event->fileVideo) }}" type="video/mp4" />
        </video>
        @endif
        @endif
        </p>
        <p style="text-align:right;">{{$event->contenu}}        <br>
        <br><br><br><br>
       <p>
       <a style="font-family: 'Lateef', serif; font-size:20px;"class="link_one" href="#">اقرأ المزيد</a>

        @endforeach

    @endsection
