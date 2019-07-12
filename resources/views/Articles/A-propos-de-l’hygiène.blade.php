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
</head>

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
            ul.b {
  list-style-type: circle;
  padding-left:45px;
}
.text 
{
    color:#000000;
}
.text p{
                text-indent: 50px;
        
            }
		</style>
<body>
@extends('layouts.single-blog')
@section('title' , 'Ramassage des chiens et chats errants')
@section('articles')
<div class="text">
<div class="entry">
		<p>Le tournant annoncé en 2002 relatif à la réforme de la charte communale et qui a instauré le principe de l’unité de ville a eu des conséquences directes sur la coordination de l’action en matière d’hygiène et de salubrité publique. Ce principe vise  à remédier à l’éparpillement des moyens et à la dispersion des actions et des efforts au sein d’un même espace par l’adoption de nouvelles formes de décisions collectives et la recherche de compromis autour d’actions d’hygiène. Ainsi tous les bureaux d’hygiène qui relevaient respectivement des ex communes se voient reconduits en tant qu’antennes d’hygiène dépendant directement du bureau communal d’hygiène (BCH) de la municipalité de la ville de Rabat permettant ainsi un meilleur encadrement sanitaire de la ville et ce, conformément à la circulaire du Ministre de l’Intérieur nº 133 du 18 octobre 2004. </p>
<p>Dans cette perspective, l’espace urbain de la ville de Rabat,  reconfiguré récemment par le texte communal autour de l’unité de ville est devenu le lieu privilégié du déploiement d’actions novatrices à caractère préventif en matière d’hygiène et de salubrité publique  par le BCH, ces actions s’inscrivent dans une logique privilégiant la sensibilisation sur la sanction principalement axée sur des compagnes de sensibilisation et d’éducation sanitaire, visant en premier lieu la mise à niveau de l’état hygiénique des différents établissements alimentaires et non alimentaires et en deuxième lieu l’adoption d’une réglementation unique au niveau de la ville dans le but de normaliser les dispositions prises en cas de respect ou non-respect de la réglementation notamment la délivrance des attestations de conformité et de destruction, les avis sur plan, les mises en demeure, les propositions de fermeture ou réouverture, et afin d’éviter les emboîtements de contrôle des établissements par les différents intervenants.</p>
<p>Ainsi, durant les cinq dernières années, l’action du BCH est prioritairement orientée vers l’amélioration des conditions sanitaires déplorables dans lesquelles se trouvait la majeure partie des établissements commerciaux en s’appuyant sur une équipe composée de médecins, de techniciens d’hygiène, de laborantins, un personnel administratif et sur des moyens matériels et logistiques.</i></p>
<p>Les efforts déployés par cette équipe aussi indispensables soient-ils, ne peuvent être suffisants sans l’implication des professionnels et des citoyens. En effet, le contrôle d’hygiène ne peut être relégué unilatéralement aux instances de contrôle, il faut une implication active des citoyens et des  professionnels par des autos formations dans les domaines inhérents aux   bonnes pratiques d’hygiène. </i></p>
<p>La formation du personnel manipulateur des denrées alimentaires relève essentiellement de la responsabilité des chefs d’établissements, toutefois, les techniciens d’hygiène participent à cette action de formation à l’occasion de leurs inspections, en répondant aux interrogations des professionnels, en leur apprenant à identifier les risques que leurs activités peuvent présenter pour la santé des consommateurs, et en déterminant avec eux les moyens à mettre en œuvre pour maîtriser ces risques.   </p>
<p>Le contrôle d’hygiène et de salubrité publique incarne bien évidemment une des clés de voûte de notre société et est indissociablement lié aux services relevant du BCH. Ce contrôle constitue d’ailleurs un défi permanent, relevé quotidiennement par l’ensemble de nos fonctionnaires, même si des efforts sont là,  beaucoup restent à faire. Il faudrait recruter du personnel qualifié en nombre suffisant et doter les médecins et techniciens d’hygiène des moyens matériels et logistiques nécessaires pour qu’ils fassent leur travail dans de bonnes conditions ”, tout ceci demande une implication effective de l’ensemble des intervenants à différents échelons de décision. “Nous comptons bien y arriver ”.</p>
    </div> 
        </div>



   
                   
@endsection

@section('Commentaire')



<div class="container">
<?php $a=0;?>
   @foreach($comments as $comment)
   @if($comment->post_id==6)
   
   <?php $a=$a+1;?>
   @endif
   @endforeach
   
 
    <div class="row">
     <div class="col-md-8 col-md-offset-2"> 
     <h3 class="comments-title"><i class="ti-comment"></i>{{$a}}comments</h3>
    @foreach($comments as $comment)
     @if($comment->post_id==6)
       
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
    <form class="form-contact comment_form" action="{{ route('comments.store',['id'=>6])}}"  method="post" id="commentForm">
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




