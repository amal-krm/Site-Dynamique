<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
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
</head>
<body>

@extends('layouts.gabarit')

@section('content')








<!--code de gabarit 2 -->


    <!--================Home Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div
                class="banner_content d-md-flex justify-content-between align-items-center"
                >
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


<!--================Blog Area =================-->
<section class="blog_area single-post-area area-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 posts-list">
                <div class="single-post">
                   
<!-- <div class="col-lg-3  col-md-3">
<div class="blog_info text-right">
<div class="post_tag">
<a href="#">Food,</a>
<a class="active" href="#">Technology,</a>
<a href="#">Politics,</a>
<a href="#">Lifestyle</a>
</div>
<ul class="blog_meta list">
<li>
<a href="#">Mark wiens
<i class="lnr lnr-user"></i>
</a>
</li>
<li>
<a href="#">12 Dec, 2017
<i class="lnr lnr-calendar-full"></i>
</a>
</li>
<li>
<a href="#">1.2M Views
<i class="lnr lnr-eye"></i>
</a>
</li>
<li>
<a href="#">06 Comments
<i class="lnr lnr-bubble"></i>
</a>
</li>
</ul>
<ul class="social-links">
<li>
<a href="#">
<i class="fab fa-facebook-f"></i>
</a>
</li>
<li>
<a href="#">
<i class="fab fa-twitter"></i>                                        
</a>
</li>
<li>
<a href="#">
<i class="fab fa-github"></i>                                       
</a>
</li>
<li>
<a href="#">
<i class="fab fa-behance"></i>                                        
</a>
</li>
</ul>
</div>
</div> -->

<div class="blog_details">
@yield('articles')
</div>
</div>
<div class="navigation-top">
    <div class="d-sm-flex justify-content-between text-center">
       
        <ul class="social-icons">
            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
            <li><a href="#"><i class="fab fa-behance"></i></a></li>
        </ul>
    </div>
</div>


@yield('Commentaire')



</div>
<div class="col-lg-4">
    <div class="blog_right_sidebar">
        <aside class="single_sidebar_widget search_widget">
            <form action="#">
                <div class="form-group">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search Keyword">
                        <div class="input-group-append">
                            <button class="btn" type="button"><i class="ti-search"></i></button>
                        </div>
                    </div>
                </div>
                <button class="button rounded-0 primary-bg text-white w-100" type="submit">Search</button>
            </form>
        </aside>

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

        <aside class="single_sidebar_widget popular_post_widget">
            <h3 class="widget_title">Postes Recent</h3>
            <div class="media post_item">
                <img src="img/blog/popular-post/post1.jpg" alt="post">
                <div class="media-body">
                    <a href="single-blog.html">
                        <h3>From life was you fish...</h3>
                    </a>
                    <p>January 12, 2019</p>
                </div>
            </div>
            <div class="media post_item">
                <img src="img/blog/popular-post/post2.jpg" alt="post">                              
                <div class="media-body">
                    <a href="single-blog.html">
                        <h3>The Amazing Hubble</h3>
                    </a>
                    <p>02 Hours ago</p>
                </div>
            </div>
            <div class="media post_item">
                <img src="img/blog/popular-post/post3.jpg" alt="post">                              
                <div class="media-body">
                    <a href="single-blog.html">
                        <h3>Astronomy Or Astrology</h3>
                    </a>
                    <p>03 Hours ago</p>
                </div>
            </div>
            <div class="media post_item">
                <img src="img/blog/popular-post/post4.jpg" alt="post">
                <div class="media-body">
                    <a href="single-blog.html">
                        <h3>Asteroids telescope</h3>
                    </a>
                    <p>01 Hours ago</p>
                </div>
            </div>
        </aside>
     


        


        
    </div>
</div>
</div>
</div>
</section>
<!--================Blog Area end =================-->




<!--code de gabarit 2 -->



















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
