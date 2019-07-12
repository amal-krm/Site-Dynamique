<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <title>Medcare Medical</title>
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
        .ana1-area {

  color: #fff;
  background-color: #fff;
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  position: relative;
  z-index: 1; 
height:100px;}
  .ana1-area:after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
   
    z-index: -1; }
  .ana1-area h2 {
    color: #000;
    font-size: 20px;
    margin-bottom: 0px;
    padding-bottom:30px;
    font-size:40px;
    
    border-bottom:2px solid #18d26e;
    display:inline-block;
    font-weight: 400; }
    @media (max-width: 767px) {
      .ana1-area h2 {
        margin-bottom: 26px; } }
        .ana1-padding-top {
  padding-top: 300px; }

.ana1-padding-bottom {
  padding-bottom: 50px; }
  .ana1-area h2:hover{
    display: inline-block;
transition: .3s;

text-decoration:none;
font-size: 50px;
  }
  .uu{
   background-image:url("../img/banner/deces.jpg");
   background-position: center;
  background-size: cover;
  position: relative;
  background-repeat: no-repeat;  

/*background-color:#f9f9ff;*/
  }
        </style>
</head>
<body>

@extends('layouts.gabarit')

@section('content')


 
  <!--================Home Banner Area =================-->
   
  <section class="ana1-area text-center ana-padding" style=" text-align:right;margin-top:150px;">
    
    <div class="container">
        <div class="row">
        
            <div class="col-lg-12">
                
                <h2> <a href="/nos-services" style="color:#000;font-weight: bold;">
                 التعزيات</a> </h2>
             </div>
              
            </div>
        </div>
        </section>
    
  
    <!--================End Home Banner Area =================-->


  <!--================Blog Area =================-->
  <section class="blog_area area-padding" style="text-align:right;">
      <div class="container">
    
          <div class="row">
              <div class="col-lg-8 mb-5 mb-lg-0">
                  <div class="blog_left_sidebar">
                  @foreach($deces as $dece)
                      
                  <article class="blog_item">
                      <!--  <div class="blog_item_img">-->
                      <!--    <img class="card-img rounded-0" src="img/blog/main-blog/m-blog-1.jpg" alt="">-->
                        <!--  <a href="#" class="blog_item_date">
                            <h3> nom service</h3>
                          </a>
                        </div>  style="background-color:#f9f9ff;"-->

                        <div class="uu"style="">
                        <div class="blog_details">
                        
                            <a class="d-inline-block" style="text-align:;margin-top:10px;margin-right:18px;margin-bottom:30px;" href="single-blog.html" >
                                <h2 style="margin-top:5px;border-bottom: 2px solid #191970;">: تعزية</h2>
                            </a>
                            <p 	style="padding-left:80px;padding-bottom:60px;padding-right:18px;">{{$dece->contenu}}</p>
                            </div>
                           
                        </div>
 
                    </article> 

@endforeach
                   
  <!--========comment area====================-->

                   
</div>
           

               
              </div>
         <!--======== end comment area====================-->
 <!--================ sidebare Area =================-->

              <div class="col-lg-4">
                  <div class="blog_right_sidebar">
         

        <aside class="single_sidebar_widget post_category_widget">
            <h4 class="widget_title">Categories</h4>
            <ul class="list cat-list">
                <li>
                    <a href="#" class="d-flex">
                        <p>Resaurant food</p>
                        <p>(37)</p>
                    </a>
                </li>
                <li>
                    <a href="#" class="d-flex">
                        <p>Travel news</p>
                        <p>(10)</p>
                    </a>
                </li>
                <li>
                    <a href="#" class="d-flex">
                        <p>Modern technology</p>
                        <p>(03)</p>
                    </a>
                </li>
                <li>
                    <a href="#" class="d-flex">
                        <p>Product</p>
                        <p>(11)</p>
                    </a>
                </li>
                <li>
                    <a href="#" class="d-flex">
                        <p>Inspiration</p>
                        <p>(21)</p>
                    </a>
                </li>
                <li>
                    <a href="#" class="d-flex">
                        <p>Health Care</p>
                        <p>(21)</p>
                    </a>
                </li>
            </ul>
        </aside>
                



          </div>
      </div>
  </section>
  <!--================end sidebareArea =================-->

  



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
