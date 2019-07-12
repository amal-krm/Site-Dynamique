<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>BCH Larache</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/animate-css/animate.css">
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <style>

.ana-area {
  color: #fff;
  background-color: #fff;
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  position: relative;
  z-index: 1; 
height:100px;}
  .ana-area:after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
   
    z-index: -1; }
  .ana-area h2 {
    color: #000;
    font-size: 20px;
    margin-bottom: 0px;
    padding-bottom:30px;
    font-size:40px;
    
    border-bottom:2px solid #18d26e;
    display:inline-block;
    font-weight: 400; }
    @media (max-width: 767px) {
      .ana-area h2 {
        margin-bottom: 26px; } }
        .ana-padding-top {
  padding-top: 300px; }

.ana-padding-bottom {
  padding-bottom: 50px; }
  .ana-area h2:hover{
    display: inline-block;
transition: .3s;

text-decoration:none;
font-size: 50px;
}
.ligner{
    border-bottom: 2px solid #3CB371;
    margin:50px;
}

</style>
</head>
<body>

@extends('layouts.gabarit')

@section('content')

    <!--================Home Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content d-md-flex justify-content-between align-items-center">
                <div class="mb-3 mb-md-0">
                    <h2>@yield('title')</h2>
                    
                </div>
                <div class="page_link">
                   
                     
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->
<!--================ Start Blog Area =================-->
<section class="ana-area text-center ana-padding" style=" text-align:right;margin-top:50px">
    
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
          
                <h2> <a href="/nos-services" style="color:#000;font-weight: bold;"
                 >نصوص القوانين</a> </h2>
             </div>
                
            </div>
        </div>

    
</section>

<section class="blog-area area-padding">
        <div class="container">
            <div class="area-heading row">
             
                <div class="col-md-7 col-xl-8">
                    
                </div>
            </div>


            <div class="row">
                <div class="col-md-6 col-lg-4 col-md-4">
                    <div class="single-blog">
                        <div class="thumb">
                            <img class="img-fluid" src="img/texte-loi/Constitution.png" alt="">
                        </div>
                        <div class="short_details">
                            <a class="d-block" href="https://drive.google.com/file/d/0B8PfIENc6ilgNmdDNU9oa0VzTXc/edit">
                                <h4>La constitution marocaine</h4>
                            </a>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-md-4">
                    <div class="single-blog">
                        <div class="thumb">
                            <img class="img-fluid" src="img/" alt="">
                        </div>
                        <div class="short_details">
                            <a class="d-block" href="single-blog.html">
                                <h4>Charte communale</h4>
                            </a>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-md-4">
                <!--single blog-->
                    <div class="single-blog">
                        <div class="thumb">
                            <img class="img-fluid" src="img/texte-loi/Loi01-03.png" alt="">
                        </div>
                        <div class="short_details">
                            
                            <a class="d-block" href="https://drive.google.com/file/d/0B8PfIENc6ilgUTBMeXhBb3dvZTQ/edit">
                                <h4>Loi 01-03 modifiant la loi 78-00 portant charte communale</h4>
                            </a>
                            
                        </div>
                    </div>
                    <!--single blog-->
                </div>
            </div>
            <div class="ligner">
         
        </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 col-md-4">
                    <div class="single-blog">
                        <div class="thumb">
                            <img class="img-fluid" src="img/texte-loi/Loi-cadre.png" alt="">
                        </div>
                        <div class="short_details">
                            <a class="d-block" href="https://drive.google.com/file/d/1n66aQ0cXTiDkZY7aopQMJqBmwmAbQicw/view">
                                <h4>Charte de l’environnement et du développement durable</h4>
                            </a>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-md-4">
                    <div class="single-blog">
                        <div class="thumb">
                            <img class="img-fluid" src="img/texte-loi/Loi17-08.png" alt="">
                        </div>
                        <div class="short_details">
                            
                            <a class="d-block" href="https://drive.google.com/file/d/0B8PfIENc6ilgYmk0TUN5MUVZa2c/edit">
                                <h4>Loi 17-08 complétant et modifiant la loi 78-00 portant charte communale</h4>
                            </a>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-md-4">
                <!--single blog-->
                    <div class="single-blog">
                        <div class="thumb">
                            <img class="img-fluid" src="img/texte-loi/Guide-juridique.png" alt="">
                        </div>
                        <div class="short_details">
                            
                            <a class="d-block" href="https://drive.google.com/file/d/0B8PfIENc6ilgUXBvbG5UdFgwLXM/edit">
                                <h4>Guide juridique des collectivités locales</h4>
                            </a>
                            
                        </div>
                    </div>
                    <!--single blog-->
                </div>
            </div>
            <div class="ligner">
         
         </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 col-md-4">
                    <div class="single-blog">
                        <div class="thumb">
                            <img class="img-fluid" src="img/texte-loi/decret.png" alt="">
                        </div>
                        <div class="short_details">
                            <a class="d-block" href="https://drive.google.com/file/d/0B8PfIENc6ilgLXFvSVpJbmtraTg/edit">
                                <h4>Gestion des déchets médicaux et pharmaceutiques</h4>
                            </a>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-md-4">
                    <div class="single-blog">
                        <div class="thumb">
                            <img class="img-fluid" src="img/texte-loi/arrete.png" alt="">
                        </div>
                        <div class="short_details">
                            
                            <a class="d-block" href="https://drive.google.com/file/d/0B8PfIENc6ilgTU9WSzYwc2FrR00/edit">
                                <h4>Qualité des eaux superficielles …</h4>
                            </a>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-md-4">
                <!--single blog-->
                    <div class="single-blog">
                        <div class="thumb">
                            <img class="img-fluid" src="img/texte-loi/Recueil.png" alt="">
                        </div>
                        <div class="short_details">
                            
                            <a class="d-block" href="https://drive.google.com/file/d/0B8PfIENc6ilgX2hSbzlfdUpWWXM/edit">
                                <h4>Gestion du domaine public hydraulique</h4>
                            </a>
                            
                        </div>
                    </div>
                    <!--single blog-->
                </div>
            </div>
            <div class="ligner">
         
         </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 col-md-4">
                    <div class="single-blog">
                        <div class="thumb">
                            <img class="img-fluid" src="img/texte-loi/Decret-n2.png" alt="">
                        </div>
                        <div class="short_details">
                            <a class="d-block" href="https://drive.google.com/file/d/0B8PfIENc6ilgb2pjMGR6U2RoSm8/edit">
                                <h4>Décharge contrôlée: procédures administratives et techniques  </h4>
                            </a>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-md-4">
                    <div class="single-blog">
                        <div class="thumb">
                            <img class="img-fluid" src="img/texte-loi/285.png" alt="">
                        </div>
                        <div class="short_details">
                            
                            <a class="d-block" href="https://drive.google.com/file/d/0B8PfIENc6ilgU1lfd1J0QTNKU2s/edit">
                                <h4>Plan directeur préfectoral ou provincial de gestion des déchets ménagers</h4>
                            </a>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-md-4">
                <!--single blog-->
                    <div class="single-blog">
                        <div class="thumb">
                            <img class="img-fluid" src="img/texte-loi/631.png" alt="">
                        </div>
                        <div class="short_details">
                            
                            <a class="d-block" href="https://drive.google.com/file/d/0B8PfIENc6ilgWVNGdVJQRnZYNjg/edit">
                                <h4>Valeurs limites de dégagement, d’émission ou de rejet de polluants <br> dans l’air émanant de sources de pollution fixes et les modalités de leurs contrôles</h4>
                            </a>
                            
                        </div>
                    </div>
                    <!--single blog-->
                </div>
            </div>
            <div class="ligner">
         
         </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 col-md-4">
                    <div class="single-blog">
                        <div class="thumb">
                            <img class="img-fluid" src="img/texte-loi/683.png" alt="">
                        </div>
                        <div class="short_details">
                            <a class="d-block" href="https://drive.google.com/file/d/0B8PfIENc6ilgOV9OdXZwakx3QkU/edit">
                                <h4>Modalités d’élaboration du plan directeur régional de gestion des déchets industriels<br> médicaux et pharmaceutiques non dangereux <br> des déchets ultimes, agricoles et inertes, etc..</h4>
                            </a>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-md-4">
                    <div class="single-blog">
                        <div class="thumb">
                            <img class="img-fluid" src="img/texte-loi/253.png" alt="">
                        </div>
                        <div class="short_details">
                            
                            <a class="d-block" href="https://drive.google.com/file/d/0B8PfIENc6ilgd19NQ0VrMGhXTmM/edit">
                                <h4>Classification et liste des déchets dangereux</h4>
                            </a>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-md-4">
                <!--single blog-->
                    <div class="single-blog">
                        <div class="thumb">
                            <img class="img-fluid" src="img/texte-loi/etude-impact.png" alt="">
                        </div>
                        <div class="short_details">
                            
                            <a class="d-block" href="https://drive.google.com/file/d/0B8PfIENc6ilgM29sbFRlTlFmQkU/edit">
                                <h4>Etude d’impact (la loi)</h4>
                            </a>
                            
                        </div>
                    </div>
                    <!--single blog-->
                </div>
            </div>
            <div class="ligner">
         
         </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 col-md-4">
                    <div class="single-blog">
                        <div class="thumb">
                            <img class="img-fluid" src="img/texte-loi/563.png" alt="">
                        </div>
                        <div class="short_details">
                            <a class="d-block" href="https://drive.google.com/file/d/0B8PfIENc6ilgUG1TaU5PcUZZcUU/edit?usp=sharing">
                                <h4>Etude d’impact (le décret)</h4>
                            </a>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-md-4">
                    <div class="single-blog">
                        <div class="thumb">
                            <img class="img-fluid" src="img/texte-loi/564.png" alt="">
                        </div>
                        <div class="short_details">
                            
                            <a class="d-block" href="https://drive.google.com/file/d/0B8PfIENc6ilgSk5yWkU0QXNrTnM/edit">
                                <h4>Modalités de l’enquête publique et étude d’impact</h4>
                            </a>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-md-4">
                <!--single blog-->
                    <div class="single-blog">
                        <div class="thumb">
                            <img class="img-fluid" src="img/texte-loi/qualite-eau.png" alt="">
                        </div>
                        <div class="short_details">
                            
                            <a class="d-block" href="https://drive.google.com/file/d/0B8PfIENc6ilgTHFRcFFJa29SdjQ/edit">
                                <h4>Qualité de l’eau</h4>
                            </a>
                            
                        </div>
                    </div>
                    <!--single blog-->
                </div>
            </div>
            <div class="ligner">
         
         </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 col-md-4">
                    <div class="single-blog">
                        <div class="thumb">
                            <img class="img-fluid" src="img/texte-loi/pollution.png" alt="">
                        </div>
                        <div class="short_details">
                            <a class="d-block" href="https://drive.google.com/file/d/0B8PfIENc6ilga2M2RUF4SkpvU3c/edit">
                                <h4>Pollution de l’air</h4>
                            </a>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-md-4">
                    <div class="single-blog">
                        <div class="thumb">
                            <img class="img-fluid" src="img/texte-loi/ONSSA.png" alt="">
                        </div>
                        <div class="short_details">
                            
                            <a class="d-block" href="https://drive.google.com/file/d/0B8PfIENc6ilgM2JRb0oxa3V1QXM/edit">
                                <h4>Création de l’ONSSA</h4>
                            </a>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-md-4">
                <!--single blog-->
                    <div class="single-blog">
                        <div class="thumb">
                            <img class="img-fluid" src="img/texte-loi/loi28.png" alt="">
                        </div>
                        <div class="short_details">
                            
                            <a class="d-block" href="https://drive.google.com/file/d/0B8PfIENc6ilgQktsLVFtbTlqVnc/edit">
                                <h4>Sécurité sanitaire des produits alimentaires</h4>
                            </a>
                            
                        </div>
                    </div>
                    <!--single blog-->
                </div>
            </div>
            <div class="ligner">
         
         </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 col-md-4">
                    <div class="single-blog">
                        <div class="thumb">
                            <img class="img-fluid" src="img/texte-loi/Presentation.png" alt="">
                        </div>
                        <div class="short_details">
                            <a class="d-block" href="https://drive.google.com/file/d/0B8PfIENc6ilgdnpJRl9jOGdPXzg/edit">
                                <h4>Présentation de la loi sur la sécurité sanitaire des aliments</h4>
                            </a>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-md-4">
                    <div class="single-blog">
                        <div class="thumb">
                            <img class="img-fluid" src="img/texte-loi/modalite.png" alt="">
                        </div>
                        <div class="short_details">
                            
                            <a class="d-block" href="single-blog.html">
                                <h4>Présentation des modalités d’application de la loi sur la sécurité sanitaire des aliments</h4>
                            </a>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-md-4">
                <!--single blog-->
                    <div class="single-blog">
                        <div class="thumb">
                            <img class="img-fluid" src="img/texte-loi/Bulletin.png" alt="">
                        </div>
                        <div class="short_details">
                            <a class="d-block" href="https://drive.google.com/file/d/0B8PfIENc6ilgcTI1TU0yMFFpZjg/edit">
                                <h4>Crèche (la loi)</h4>
                            </a>
                            
                        </div>
                    </div>
                    <!--single blog-->
                </div>
            </div>
            <div class="ligner">
         
         </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 col-md-4">
                    <div class="single-blog">
                        <div class="thumb">
                            <img class="img-fluid" src="img/texte-loi/678.png" alt="">
                        </div>
                        <div class="short_details">
                            <a class="d-block" href="https://drive.google.com/file/d/0B8PfIENc6ilgRDg2MXdmZzhSRmM/edit">
                                <h4>Crèche (le décret)</h4>
                            </a>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-md-4">
                    <div class="single-blog">
                        <div class="thumb">
                            <img class="img-fluid" src="img/texte-loi/tech.png" alt="">
                        </div>
                        <div class="short_details">
                            <a class="d-block" href="https://drive.google.com/file/d/0B8PfIENc6ilgaGQtNlZKOWFuM2c/edit">
                                <h4>Cliniques: normes techniques</h4>
                            </a>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-md-4">
                <!--single blog-->
                    <div class="single-blog">
                        <div class="thumb">
                            <img class="img-fluid" src="img/texte-loi/dahir.png" alt="">
                        </div>
                        <div class="short_details">
                            
                            <a class="d-block" href="https://drive.google.com/file/d/0B8PfIENc6ilgaElmLVB6S0VBVnc/edit?usp=sharing">
                                <h4>Inhumation, exhumation et transport de corps</h4>
                            </a>
                            
                        </div>
                    </div>
                    <!--single blog-->
                </div>
            </div>
            <div class="ligner">
         
         </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 col-md-4">
                    <div class="single-blog">
                        <div class="thumb">
                            <img class="img-fluid" src="img/texte-loi/marocco.png" alt="">
                        </div>
                        <div class="short_details">
                            <a class="d-block" href="https://drive.google.com/file/d/0B8PfIENc6ilgNlYzUV9jVkluTUk/edit">
                                <h4>Les archives (La loi)</h4>
                            </a>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-md-4">
                    <div class="single-blog">
                        <div class="thumb">
                            <img class="img-fluid" src="img/texte-loi/livre.png" alt="">
                        </div>
                        <div class="short_details">
                            <a class="d-block" href="https://drive.google.com/file/d/0B8PfIENc6ilgelJYVzRSbXNfMkE/edit">
                                <h4>Hygiène en restauration collective</h4>
                            </a>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-md-4">
                <!--single blog-->
                    <div class="single-blog">
                        <div class="thumb">
                            <img class="img-fluid" src="img/texte-loi/42.png" alt="">
                        </div>
                        <div class="short_details">
                            
                            <a class="d-block" href="https://drive.google.com/file/d/0B8PfIENc6ilgT3dLSkNjbkowdGM/edit">
                                <h4>Loi relative aux pesticides</h4>
                            </a>
                            
                        </div>
                    </div>
                    <!--single blog-->
                </div>
            </div>
            <div class="ligner">
         
         </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 col-md-4">
                    <div class="single-blog">
                        <div class="thumb">
                            <img class="img-fluid" src="img/texte-loi/DEC.png" alt="">
                        </div>
                        <div class="short_details">
                            <a class="d-block" href="https://drive.google.com/file/d/0B8PfIENc6ilga0M5SkRKV253c28/edit">
                                <h4>Décret relatif à l’homologation des pesticides</h4>
                            </a>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-md-4">
                    <div class="single-blog">
                        <div class="thumb">
                            <img class="img-fluid" src="img/texte-loi/juridique.png" alt="">
                        </div>
                        <div class="short_details">
                            <a class="d-block" href="https://drive.google.com/file/d/0B8PfIENc6ilgbmxhcVRlWi1yZ28/edit">
                                <h4>Juridictions financière du Royaume du Maroc</h4>
                            </a>
                            
                        </div>
                    </div>
                </div><!--
                <div class="col-md-6 col-lg-4 col-md-4">
                <!--single blog
                    <div class="single-blog">
                        <div class="thumb">
                            <img class="img-fluid" src="img/texte-loi/Loi01-03.png" alt="">
                        </div>
                        <div class="short_details">
                            
                            <a class="d-block" href="https://drive.google.com/file/d/0B8PfIENc6ilgUTBMeXhBb3dvZTQ/edit">
                                <h4>Juridictions financière du Royaume du Maroc</h4>
                            </a>
                            
                        </div>
                    </div>
                    <!--single blog
                </div>-->
            </div><!--
            <div class="row">
                <div class="col-md-6 col-lg-4 col-md-4">
                    <div class="single-blog">
                        <div class="thumb">
                            <img class="img-fluid" src="img/texte-loi/Constitution.png" alt="">
                        </div>
                        <div class="short_details">
                            <a class="d-block" href="https://drive.google.com/file/d/0B8PfIENc6ilgNmdDNU9oa0VzTXc/edit">
                                <h4></h4>
                            </a>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-md-4">
                    <div class="single-blog">
                        <div class="thumb">
                            <img class="img-fluid" src="img/" alt="">
                        </div>
                        <div class="short_details">
                            <a class="d-block" href="single-blog.html">
                                <h4></h4>
                            </a>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-md-4">
                <!--single blog
                    <div class="single-blog">
                        <div class="thumb">
                            <img class="img-fluid" src="img/texte-loi/Loi01-03.png" alt="">
                        </div>
                        <div class="short_details">
                            
                            <a class="d-block" href="https://drive.google.com/file/d/0B8PfIENc6ilgUTBMeXhBb3dvZTQ/edit">
                                <h4></h4>
                            </a>
                            
                        </div>
                    </div>
                    <!--single blog
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 col-md-4">
                    <div class="single-blog">
                        <div class="thumb">
                            <img class="img-fluid" src="img/texte-loi/Constitution.png" alt="">
                        </div>
                        <div class="short_details">
                            <a class="d-block" href="https://drive.google.com/file/d/0B8PfIENc6ilgNmdDNU9oa0VzTXc/edit">
                                <h4></h4>
                            </a>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-md-4">
                    <div class="single-blog">
                        <div class="thumb">
                            <img class="img-fluid" src="img/" alt="">
                        </div>
                        <div class="short_details">
                            <a class="d-block" href="single-blog.html">
                                <h4></h4>
                            </a>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-md-4">
                <!--single blog
                    <div class="single-blog">
                        <div class="thumb">
                            <img class="img-fluid" src="img/texte-loi/Loi01-03.png" alt="">
                        </div>
                        <div class="short_details">
                            
                            <a class="d-block" href="https://drive.google.com/file/d/0B8PfIENc6ilgUTBMeXhBb3dvZTQ/edit">
                                <h4></h4>
                            </a>
                            
                        </div>
                    </div>
                    <!--single blog
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 col-md-4">
                    <div class="single-blog">
                        <div class="thumb">
                            <img class="img-fluid" src="img/texte-loi/Constitution.png" alt="">
                        </div>
                        <div class="short_details">
                            <a class="d-block" href="https://drive.google.com/file/d/0B8PfIENc6ilgNmdDNU9oa0VzTXc/edit">
                                <h4></h4>
                            </a>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-md-4">
                    <div class="single-blog">
                        <div class="thumb">
                            <img class="img-fluid" src="img/" alt="">
                        </div>
                        <div class="short_details">
                            <a class="d-block" href="single-blog.html">
                                <h4></h4>
                            </a>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-md-4">
                <!--single blog
                    <div class="single-blog">
                        <div class="thumb">
                            <img class="img-fluid" src="img/texte-loi/Loi01-03.png" alt="">
                        </div>
                        <div class="short_details">
                            
                            <a class="d-block" href="https://drive.google.com/file/d/0B8PfIENc6ilgUTBMeXhBb3dvZTQ/edit">
                                <h4></h4>
                            </a>
                            
                        </div>
                    </div>
                    <!--single blog-->
                </div>
            </div>
        </div>
    </section>
    <!--================ End Blog Area =================-->

@endsection
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/stellar.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/contact.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/theme.js"></script>
</body>
</html>
