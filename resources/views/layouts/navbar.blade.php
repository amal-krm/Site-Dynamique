<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <title>BCH Larache</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/owl-carousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/animate-css/animate.css') }}">
    <!-- main css -->
    <link rel="stylesheet" href= "{{ asset('css/style.css') }}">
    <link rel="stylesheet" href= "{{ asset('css/responsive.css') }}">
</head>
<body>

<style>

div.polaroid {
   /* width: 80%;
  
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);*/
 
}
.accolade{
    
    font-size:40px;
    font-style:serif;
}

.accolade-2{
    
    font-size:40px;
    font-style:serif;
    padding-right:50vw;
    
}

.testimonial{
    
  color:#020a21
}
.text-post{
    text-align:center;
}
.container .event{
    margin-top:50px;
}
.event:hover {
    
 /* margin: auto;
 /*height: 150px;
  
  padding-top: 40px;
  text-align:center;
  
  color:#18d26e;
  font-size:70px;*/
  /*transition: height 2s;
  transition: 2s;*/
  
}

.event {
    
    box-shadow: 0 5px 15px rgba(0,0,0,0.3);
    opacity: 1;
    transition: box-shadow 0.3s ease-in-out;
    height: 200px;
    padding-top: 60px;
    border: 2px solid #18d26e;
    text-align:center;
    color:#000;
    
   
    
  }
  .event span :hover {
   /*font-size:90px; */
   }
   .container .services {

}
   



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
  padding-top: 30px; }

.ana-padding-bottom {
  padding-bottom: 80px; }
  .ana-area h2:hover{
    display: inline-block;
transition: .3s;

text-decoration:none;
font-size: 50px;
}
a:hover {
-webkit-transform: scale(1.2);
transform: scale(1.2);
  }
  .ana1-area {
  color: #fff;
  
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  position: relative;
  z-index: 1; 
height:100px;}
    </style>


</head>
<body>

    <!--================Header Menu Area =================-->
    <header class="header_area " style="direction:rtl;">
        <div class="top_menu row m0">
            <div class="container">
                <div class="float-left">
                    <a class="dn_btn" href="mailto:medical@example.com"><i class="ti-email"></i>BCH@example.com</a>
                    <a href="{{ asset('/contact') }}"><span class="dn_btn">  اتصل بنا <i class="ti-location-pin"></i></span></a>
                </div>
                <div class="float-right">
                    <ul class="list header_social">
                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                        
                    </ul>	
                </div>
            </div>	
        </div>	
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                        <a class="navbar-brand logo_h" href="{{ asset('/') }}"><img src="{{ asset('img/logoo.png') }}" alt="" width="75" height="90"></a>

                        <li class="nav-item"><a class="nav-link" href="{{ asset('/') }}"><strong>رئيسية</strong></a></li> 
                     
                        <li class="nav-item"><a class="nav-link" href="{{ asset('/Activité') }}"><strong>برامج و مشاريع </strong></a></li>  
                       <!-- <li class="nav-item"><a class="nav-link" href="/corde"><strong>تعزيات</strong></a></li> -->
                        <li class="nav-item submenu dropdown" >
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><strong>مقالات</strong></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link"style="font-size:14px;" href="{{ asset('/Hygiène-alimentaire') }}">Hygiène alimentaire&nbsp;&nbsp;النظافة الغذائية</a></li>
                                    <li class="nav-item"><a class="nav-link" style="font-size:14px;" href="{{ asset('/Salubrité-publique') }}">Salubrité publique&nbsp;&nbsp; الصحة العامة</a></li>
                                    <li class="nav-item"><a class="nav-link" style="font-size:14px;"href="{{ asset('/Lutte-antivectorielle') }}">Lutte antivectorielle&nbsp;&nbsp; محاربة النواقل</a></li>
                                    <li class="nav-item"><a class="nav-link" style="font-size:14px;"href="{{ asset('/Médicolégal') }}">Médecine médico légale<br> الطب الشرعي</a></li>
                                    <li class="nav-item"><a class="nav-link" style="font-size:14px;"href="{{ asset('/Ramassage-des-chiens-et-chats-errants') }}">Ramassage des chiens et chats errants<br>التقاط الكلاب الضالة والقطط</a></li>
                                    <li class="nav-item"><a class="nav-link" style="font-size:14px;"href="{{ asset('/A-propos-de-l’hygiène') }}">A propos de l’hygiène&nbsp;&nbsp; حول النظافة</a></li>
                                    <li class="nav-item"><a class="nav-link" style="font-size:14px;"href="{{ asset('/Organigramme') }}">Organigramme&nbsp;&nbsp;الهيكل التنظيمي</a></li>
                                </ul>
                            </li> 
                            <li class="nav-item"><a class="nav-link" href="{{ asset('/Textes-de-lois-et-réglements') }}"><strong> قوانين و مساطر</strong></a></li> 
                            
                            <li class="nav-item"><a class="nav-link" href="#"><strong>   ميزانية القسم   </strong></a></li> 
                            <li class="nav-item"><a class="nav-link" href=""><strong >   </strong></a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ asset('/contact') }}"><strong>  اتصل بنا   </strong></a></li> 

                           
                             
                            <!--<li class="nav-item"><a class="nav-link" href="/department">Department</a></li> -->
                        </ul>
                        <a class="navbar-brand logo_h" href="{{ asset('/corde') }}"><img src="{{ asset('img/ta3ziya.png') }}" alt="" width="70" height="70"></a>
                       <a class="navbar-brand logo_h" href="{{ asset('/reclamation') }}"><img src="{{ asset('img/chikaya.png') }}" alt="" width="80" height="80"></a>

                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!--================Header Menu Area =================-->
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
