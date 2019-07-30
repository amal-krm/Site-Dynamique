<!doctype html>
<html lang="ar">
<head>
    <meta charset="utf-8">
    <title>BCH Larache</title>
    <link rel="icon" href="{!! asset('img/favicon.ico') !!}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/owl-carousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/animate-css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
</head>
<body>
@extends('layouts.gabarit1')
@section('content')

<!--================Blog Area =================-->
<section class="blog_area single-post-area area-padding">
    <div class="container " style="margin-left:-30px;">
        <div class="row">
            <div class="col-lg-8 posts-list" >
                <div class="single-post">
                    
                        <section class="appointment-area ">
                            <div class="container">
                                <div class="appointment-inner " style="width:140%;margin-top:90px;" >
                                    @yield('articles')
                                    
                                </div>
                            </div>
                        </section>
                    
                </div>
                <div class="navigation-top">
                    <div class="d-sm-flex justify-content-between text-center">
                        <ul class="social-icons">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://www.youtube.com/channel/UCQSya_aVKXPVdQLECssXUVA" target="_blank"><i class="fab fa-youtube"></i></a></li>
                            <li><a href="mailto:bchlarache@gmail.com"><i class="fas fa-at"></i></a></li>
                           
                        </ul>
                    </div>
                </div>
            
            </div>
            <div class="col-lg-4" style="direction:rtl;text-align:right;">
                <div class="blog_right_sidebar" style="margin-left:-60px;maring-right:-500px;">
                    <aside class="single_sidebar_widget popular_post_widget" style="background-color:#F7F7F7;margin-right:-18vw;width:80%;margin-top:90px;margin-left:50px;padding: 8px;">
                        <h3 class="widget_title"style="text-align:center;font-weight:bold;color:#18d26e;" >آخر المقالات</h3>
                        <div class="media post_item">
                            @if(! empty($laatstevent->filePhoto1 ))
                                <img src=" {{asset('storage/'.$laatstevent->filePhoto1 )}}" alt="post" height="80px" width="80px">

                            @else
                                @if(! empty($laatstevent->filePhoto2 ))
                                    <img src=" {{asset('storage/'.$laatstevent->filePhoto2 )}}" alt="post" height="80px" width="80px">

                                @else
                                    @if(! empty($laatstevent->filePhoto3 ))
                                        <img src=" {{asset('storage/'.$laatstevent->filePhoto3 )}}" alt="post" height="80px" width="80px">

                                    @else
                                        @if(! empty($laatstevent->filePhoto4 ))
                                            <img src=" {{asset('storage/'.$laatstevent->filePhoto4 )}}" alt="post" height="80px" width="80px">

                                        @else
                                            @if(! empty($laatstevent->filePhoto5 ))
                                                <img src=" {{asset('storage/'.$laatstevent->filePhoto5 )}}" alt="post" height="80px" width="80px">

                                            @else
                                                @if(! empty($laatstevent->filePhoto6 ))
                                                    <img src=" {{asset('storage/'.$laatstevent->filePhoto6 )}}" alt="post" height="80px" width="80px">

                                                @else
                                                    <img src=" {{asset('img/recent.png' )}}" alt="post" height="80px" width="80px">
                                                @endif
                                            @endif
                                        @endif
                                    @endif
                                @endif
                            @endif
                            <div class="media-body">
                                <a href="{{ asset('single-blog.html') }}">
                                    @if(! empty($laatstevent->Titre))
                                    <h3 class="p-3">{{$laatstevent->Titre}}</h3>
                                    @endif
                                </a>
                                @if(! empty($laatstevent->Date))
                                <p class="p-3">{{$laatstevent->Date}}</p>
                                @endif
                            </div>
                        </div>
                        <hr width="60%" style=" display: block;margin-top:px;border-top: solid 1px #C7FACC;"> 

                        <div class="media post_item">
                        @if(! empty($laatstprog->filePhoto1 ))
                                <img src=" {{asset('storage/'.$laatstprog->filePhoto1 )}}" alt="post" height="80px" width="80px">

                            @else
                                @if(! empty($laatstprog->filePhoto2 ))
                                    <img src=" {{asset('storage/'.$laatstprog->filePhoto2 )}}" alt="post" height="80px" width="80px">

                                @else
                                    @if(! empty($laatstprog->filePhoto3 ))
                                        <img src=" {{asset('storage/'.$laatstprog->filePhoto3 )}}" alt="post" height="80px" width="80px">

                                    @else
                                        @if(! empty($laatstprog->filePhoto4 ))
                                            <img src=" {{asset('storage/'.$laatstprog->filePhoto4 )}}" alt="post" height="80px" width="80px">

                                        @else
                                            @if(! empty($laatstprog->filePhoto5))
                                                <img src=" {{asset('storage/'.$laatstprog->filePhoto5)}}" alt="post" height="80px" width="80px">

                                            @else
                                                @if(! empty($laatstprog->filePhoto6 ))
                                                    <img src=" {{asset('storage/'.$laatstprog->filePhoto6 )}}" alt="post" height="80px" width="80px">

                                                @else
                                                    <img src=" {{asset('img/recent.png' )}}" alt="post" height="80px" width="80px">
                                                @endif
                                            @endif
                                        @endif
                                    @endif
                                @endif
                            @endif
                            <div class="media-body">
                                <a href="{{ asset('single-blog.html') }}">
                                @if(! empty($laatstprog->Titre))
                                    <h3 class="p-3">{{$laatstprog->Titre}}</h3>
                                    @endif
                                </a>
                                @if(! empty($laatstprog->Date))
                                <p class="p-3">{{$laatstprog->Date}}</p>
                                @endif
                            </div>
                        </div>
                        <hr width="60%" style=" display: block;margin-top:px;border-top: solid 1px #f0e9ff;"> 

                        <div class="media post_item">
                        @if(! empty($laatstprog1[0]->filePhoto1 ))
                                <img src=" {{asset('storage/'.$laatstprog1[0]->filePhoto1 )}}" alt="post" height="80px" width="80px">

                            @else
                                @if(! empty($laatstprog1[0]->filePhoto2 ))
                                    <img src=" {{asset('storage/'.$laatstprog1[0]->filePhoto2 )}}" alt="post" height="80px" width="80px">

                                @else
                                    @if(! empty($laatstprog1[0]->filePhoto3 ))
                                        <img src=" {{asset('storage/'.$laatstprog1[0]->filePhoto3 )}}" alt="post" height="80px" width="80px">

                                    @else
                                        @if(! empty($laatstprog1[0]->filePhoto4 ))
                                            <img src=" {{asset('storage/'.$laatstprog1[0]->filePhoto4 )}}" alt="post" height="80px" width="80px">

                                        @else
                                            @if(! empty($laatstprog1[0]->filePhoto5))
                                                <img src=" {{asset('storage/'.$laatstprog1[0]->filePhoto5)}}" alt="post" height="80px" width="80px">

                                            @else
                                                @if(! empty($laatstprog1[0]->filePhoto6 ))
                                                    <img src=" {{asset('storage/'.$laatstprog1[0]->filePhoto6 )}}" alt="post" height="80px" width="80px">

                                                @else
                                                    <img src=" {{asset('img/recent.png' )}}" alt="post" height="80px" width="80px">
                                                @endif
                                            @endif
                                        @endif
                                    @endif
                                @endif
                            @endif
                            <div class="media-body">
                                <a href="{{ asset('single-blog.html') }}">
                                    @if(! empty($laatstprog1[0]->Titre))
                                     <h3 class="p-3">{{$laatstprog1[0]->Titre}}</h3>
                                    @endif
                                </a>
                                @if(! empty($laatstprog1[0]->Date))
                                    <p>{{$laatstprog1[0]->Date}}</p>
                                @endif
                            </div>
                        </div>
                        <hr width="60%" style=" display: block;margin-top:px;border-top: solid 1px #f0e9ff;"> 

                        <div class="media post_item">
                            <img src="{{ asset('img/ta3ziya.png') }}" alt="post" height="80px" width="80px">
                            <div class="media-body">
                                <a href="{{ asset('single-blog.html') }}">
                                    <h3 class="p-3">آخر تعزية</h3>
                                </a>
                                @if(! empty($laatstdece))
                                <p class="p-3">{{$laatstdece->created_at}}</p>
                                @endif
                            </div>
                        </div>
                    </aside>  
                </div>
            </div>
            
        </div>
    </div>
</section>

<!--================Blog Area end =================-->
@endsection

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('js/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/stellar.js') }}"></script>
    <script src="{{ asset('vendors/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('js/waypoints.min.js') }}"></script>
    <script src="{{ asset('js/mail-script.js') }}"></script>
    <script src="{{ asset('js/contact.js') }}"></script>
    <script src="{{ asset('js/jquery.form.js') }}"></script>
    <script src="{{ asset('js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('js/mail-script.js') }}"></script>
    <script src="{{ asset('js/theme.js') }}"></script>
</body>
</html>
