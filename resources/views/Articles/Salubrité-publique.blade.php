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

</head>
<body>
@extends('layouts.single-blog')
@section('title' , 'Salubrité publique')
@section('articles')
<div class="text">
<div class="entry">
		<p style="text-align:justify;"><span style="color:#000000;">En matière de salubrité publique, le service de salubrité publique veille essentiellement sur la préservation de l’hygiène des collectivités, de l’hygiène industrielle et artisanale, il assure un contrôle sanitaire régulier des différents établissements non alimentaires dans le but de prévenir et remédier le cas échéant aux manquements d’hygiène et de maintenir un niveau satisfaisant de  salubrité et éviter toutes les nuisances et les éventuels dangers aux citoyens.</span></p>
<p style="text-align:justify;"><span style="color:#000000;">Le service de salubrité publique veille sur :</span></p>
<ul style="text-align:justify;">
<li><span style="color:#000000;">Le contrôle sanitaire aussi bien des établissements publics tels que les hôtels, les  écoles, les clubs, etc. que les établissements industriels et artisanales;</span></li>
<li><span style="color:#000000;">L’étude des plans d’aménagements des locaux commerciaux;</span></li>
<li><span style="color:#000000;">La réalisation d’enquêtes suites aux plaintes, émanant  de la Commune de la ville et délivre :</span></li>
</ul>
<ol style="text-align:justify;">
<li><span style="color:#000000;"> <em>attestations  de conformité;</em></span></li>
<li><span style="color:#000000;"><em>attestations d&rsquo;insalubrité;</em></span></li>
<li><span style="color:#000000;"><em>attestations de destructions (produits divers périmés).</em></span></li>
</ol>
<p style="color:#7a7a7a;text-align:justify;"><span style="color:#000000;"> Ce service assure plusieurs fonctions notamment :</span></p>
<ul style="color:#7a7a7a;">
<li style="text-align:justify;"><span style="color:#000000;">Animation de séances d’éducation sanitaires au profit des gérants de ces établissements et du personnel manipulateur des denrées alimentaires;</span></li>
<li style="text-align:justify;"><span style="color:#000000;">Inspections systématiques, permanentes et régulières des commerces non-alimentaires;</span></li>
<li style="text-align:justify;"><span style="color:#000000;">Inspections motivées par des plaintes;</span></li>
<li style="text-align:justify;"><span style="color:#000000;">Prélèvements d&rsquo;échantillons de surface au niveau de ces commerces en vue de contrôler  leur niveau de salubrité;</span></li>
<li style="text-align:justify;"><span style="color:#000000;">Etablissement de procès-verbaux d’inspection comportant les recommandations d’hygiène à satisfaire;</span></li>
<li style="text-align:justify;"><span style="color:#000000;">Etablissement de mises en demeure découlant des comptes rendus d’inspection;</span></li>
<li style="text-align:justify;"><span style="color:#000000;">Propositions de fermeture des commerces n’ayant pas satisfait les recommandations stipulées par les mises en demeure;</span></li>
<li style="text-align:justify;"><span style="color:#000000;">Participation à diverses commissions avec les services extérieurs (Telles que la Commission préfectorale, la Commission Touristique, la commission mixte, etc.).</span></li>
</ul>
        </div>
        </div>
@endsection

@section('Commentaire')



<div class="container">
<?php $a=0;?>
   @foreach($comments as $comment)
   @if($comment->post_id==2)
   
   <?php $a=$a+1;?>
   @endif
   @endforeach
   
 
    <div class="row">
     <div class="col-md-8 col-md-offset-2"> 
     <h3 class="comments-title"><i class="ti-comment"></i>{{$a}}comments</h3>
    @foreach($comments as $comment)
     @if($comment->post_id==2)
       
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
    <form class="form-contact comment_form" action="{{ route('comments.store',['id'=>2])}}"  method="post" id="commentForm">
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




