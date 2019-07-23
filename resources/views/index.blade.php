<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/animate-css/animate.css">
    <link rel="stylesheet" href="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/css/bootstrap.css">

    <!-- main css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!-- mot de president css-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
   <!--responsive column -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet"/>
  
</head>
<style>

.carousel-caption {
    width:100%;
    height:100%;
    left:0 !important;
}

.carousel-caption h3 {
  text-align:left;
  margin-left:30px;
}
.carousel-caption p  {
  margin-top25%;
  
}
@media screen and (max-width: 479px) {
  .carousel-caption p {
    margin-top:20%;
  }
}

@media screen and (min-width: 480px) and (max-width: 640px){
  .carousel-caption p {
    margin-top:30%;
  }
}

@media screen and (min-width: 641px) {
  .carousel-caption p {
    margin-top:40%;
  }
}
 .red
      {
        color: white;
        background-color: red;
      }
      .green
      {
        color: white;
        background-color: green;
      }
      .blue
      {
        color: white;
        background-color: blue;
      }

      .ii{
 height: 900px;


 background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  position: relative; 
width:100%;}
.carousel-inner  .item img {
      width: 100%;
      height:67vw;
  }

.about-area{
    background-image:url("img/OE7GPO0.png");
}

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
  .about-area h2{
        color: #000;
    font-size: 20px;
    margin-bottom: 0px;
    padding-bottom:30px;
    font-size:40px;
    
    border-bottom:2px solid #18d26e;
    display:inline-block;
    font-weight: 400;
  }
  .about-area h2:hover{
    display: inline-block;
transition: .3s;

text-decoration:none;
font-size: 50px;
  }
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

 background-position: center;
background-size: cover;
position: relative;
background-repeat: no-repeat;  

}
.yusra{
    background-image:url("img/OE7GPO01.png");
    height:750px;
}
</style>
<body>

@extends('layouts.gabarit')

@section('content')

    <section class="banner-area  " style="margin-bottom:20opx;">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="../img/banner/15.jpg" alt="Los Angeles">
      <div class="carousel-caption" style="margin-bottom:-6%;">
      
        <p style="font-size:30px;font-family: 'Droid Arabic Kufi', Tahoma, Arial, Times New Roman, serif;"><strong> القسم الجماعي لحفظ الصحة لجماعة العرائش</strong></p>
        <a style="margin-bottom:100px;padding: 3px 30px 3px 30px;font-family: 'Lateef', serif; font-size:20px;"  href="/reclamation" class="main_btn">دفع شكاية</a>
                   
                   <a style="padding: 3px 30px 3px 30px;font-family: 'Lateef', serif; font-size:20px;margin-left:10px;" href="/definition" class="main_btn">من نحن ؟</a>
      </div>
    </div>

    <div class="item">
      <img src="../img/banner/14.jpg" alt="Chicago">
      <div class="carousel-caption" style="margin-bottom:-4%;">
      
        <p style="font-size:30px;font-family: 'Droid Arabic Kufi', Tahoma, Arial, Times New Roman, serif;"><strong> القسم الجماعي لحفظ الصحة لجماعة العرائش</strong></p>
        <a style="margin-bottom:100px;padding: 3px 30px 3px 30px;font-family: 'Lateef', serif; font-size:20px;"  href="/reclamation" class="main_btn">دفع شكاية</a>
                   
                   <a style="padding: 3px 30px 3px 30px;font-family: 'Lateef', serif; font-size:20px;margin-left:10px;" href="/definition" class="main_btn">من نحن ؟</a>
      </div>
    </div>

    <div class="item">
      <img src="../img/banner/18.jpg" alt="Chicago">
      <div class="carousel-caption" style="margin-bottom:-4%;">
      
        <p style="font-size:30px;font-family: 'Droid Arabic Kufi', Tahoma, Arial, Times New Roman, serif;"><strong> القسم الجماعي لحفظ الصحة لجماعة العرائش</strong></p>
        <a style="margin-bottom:100px;padding: 3px 30px 3px 30px;font-family: 'Lateef', serif; font-size:20px;"  href="/reclamation" class="main_btn">دفع شكاية</a>
                   
                   <a style="padding: 3px 30px 3px 30px;font-family: 'Lateef', serif; font-size:20px;margin-left:10px;" href="/definition" class="main_btn">من نحن ؟</a>
      </div>
    </div>

    <div class="item">
      <img src="../img/banner/4.jpg" alt="Chicago" style="height:67vw;">
      <div class="carousel-caption" style="margin-bottom:-4%;">
      
        <p style="font-size:30px;font-family: 'Droid Arabic Kufi', Tahoma, Arial, Times New Roman, serif;"><strong> القسم الجماعي لحفظ الصحة لجماعة العرائش</strong></p>
        <a style="margin-bottom:100px;padding: 3px 30px 3px 30px;font-family: 'Lateef', serif; font-size:20px;"  href="/reclamation" class="main_btn">دفع شكاية</a>
                   
                   <a style="padding: 3px 30px 3px 30px;font-family: 'Lateef', serif; font-size:20px;margin-left:10px;" href="/definition" class="main_btn">من نحن ؟</a>
      </div>
    </div>

    <div class="item">
      <img src="../img/banner/17.jpg" alt="Chicago">
      <div class="carousel-caption" style="margin-bottom:-4%;">
      
      <p style="font-size:30px;font-family: 'Droid Arabic Kufi', Tahoma, Arial, Times New Roman, serif;"><strong> القسم الجماعي لحفظ الصحة لجماعة العرائش</strong></p>
      <a style="margin-bottom:100px;padding: 3px 30px 3px 30px;font-family: 'Lateef', serif; font-size:20px;"  href="/reclamation" class="main_btn">دفع شكاية</a>
                 
                 <a style="padding: 3px 30px 3px 30px;font-family: 'Lateef', serif; font-size:20px;margin-left:10px;" href="/definition" class="main_btn">من نحن ؟</a>
    </div>
    </div>

    <div class="item">
      <img src="../img/banner/23.jpg" alt="New York">
      <div class="carousel-caption" style="margin-bottom:-4%;">
      
      <p style="font-size:30px;font-family: 'Droid Arabic Kufi', Tahoma, Arial, Times New Roman, serif;"><strong> القسم الجماعي لحفظ الصحة لجماعة العرائش</strong></p>
      <a style="margin-bottom:100px;padding: 3px 30px 3px 30px;font-family: 'Lateef', serif; font-size:20px;"  href="/reclamation" class="main_btn">دفع شكاية</a>
                 
                 <a style="padding: 3px 30px 3px 30px;font-family: 'Lateef', serif; font-size:20px;margin-left:10px;" href="/definition" class="main_btn">من نحن ؟</a>
    </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>

</div>
    </section>









<div class="margin-top:60px;">

    <img src="img/quotes.jpg" style="width:100%;height:600px;">

</div>
    
    
<!--================End Home Banner Area =================-->

  


<section class="about-area" id="about-area"style=" text-align:right;margin-top:px; margin-bottom:250px;">
        <div class="container">
            <div class="row align-items-center">
                <div class="">
                    <div class="about-content">
                        <h4 style=" text-align:center;font-family: 'Lateef', serif; "><strong>كلمة الرئيس</strong><br></h4>
                        <div class="clearfix" >
                        <p >
                        <img src="img/r2is.jpg" class="float-left mr-5"  style="width:350px;height:350px">
                        <p  style="font-size: 20px;" >
                       أيتها المواطنات<br> 
                        أيها المواطنون<br> 
                        بناءا على القانون التنظيمي  14/113 ، فإن مجال حفظ الصحة باعتباره مجال يدخل ضمن الاختصاصات الذاتية للجماعة من خلال اتخاد التدابير اللازمة لمحاربة عوامل انتشار الأمراض ، ومن خلال تنظيم المكاتب الجماعية لحفظ الصحة , فإنه يكتسي أهمية قصوى لدى مكتب ومجلس الجماعة إذ سجلنا باعتزاز شديد الإجماع الذي تشهده كل القضايا التي تطرح للمداولة والمصادقة والمرتبطة بهذا المجال , كما سجلنا مدى نجاعة  أداء مكتب حفظ الصحة على إثر التغييرات التي همت وظائف البنية البشرية , وتركيزه على استراتيجية واضحة تحدد مجال التدخل عبر مبدأ الأولويات  خصوصا في مجال محاربة الأوبئة , والحشرات ,وتفعيل شرطة المقابر , وتنظيم مجال نقل الموتى والجرحى  <br> 
                       ونظرا لأهمية التواصل معكم فإننا ارتأينا تعزيزه عبر إحداث بوابة إلكترونية تمكننا منتخبون ومنتخبات / مواطنون ومواطنات من تتبع كل ما يجري بهذا المكتب، ناهيك عن تسهيل الولوج لمعلوماته، ومتابعة نشاطاته وفتح المجال لتقديم  المقترحات والملاحظات <br>
                    نرجو أن تشكل وتحدث هذه البوابة  فارقا  في عمل الجماعة , من خلال المكتب الجماعي لحفظ الصحة الذي يسهر على تسيره نائب الرئيس السيد محمد الرزامي الذي نشكره على مجهوداته التي يقوم بها خدمة للصالح العام 
                     </p></p>
                     </div>
                        <h6 style=" text-align:left;font-family: 'Lateef', serif; font-size:25px;padding-left: 400px;" > - الرئيس - </h6>

                    </div>
                </div>
            </div>
        </div>
    </section>




<!-- ================ testimonial section start ================= -->   









    
    <!--================About Area End =================-->
    <!-- ================ testimonial section end ================= --> 

 <!--================About  Area =================-->
 <section class="about-area" id="about-area"style=" text-align:right;">
        <div class="container">
            <div class="row align-items-center">
                <div class="clearfix">
                    <div class="about-content" style="font-size: 17px;">
                        <h4 style=" text-align:center;font-family: 'Lateef', serif; "><strong>عن القسم الجماعي لحفظ الصحة</strong><br></h4>
                        <h6 style=" text-align:center;font-family: 'Lateef', serif; font-size:25px;" >ماذا نقدم لرعايتكم</h6>
                            <p style="font-size: 20px;font-family: 'Lateef', serif; ">&nbsp;&nbsp;
                            يسهر المكتب الجماعي لحفظ الصحة التابع لجماعة العرائش على أحد اهم المهام التي تضطلع بها الجماعة ويتعلق الامر بإجراءات الوقاية وحفظ الصحة العامة وحماية البيئة 
                           مفوض له إدارة القسم هذا غير مجموعة من الموظفين والتقنيين يزاولون مهام مراقبة المواد الغذائية المعروضة للعموم ومراقبة جميع المحلات والمؤسسات والفضاءات المتواجدة بالمدينة والتي يستعملها العموم وكذا الاماكن المخصصة لاستهلاك مواد غذائية كالمطاعم و الملبنات، و مراقبة الماء الشروب، و القيام بحملات للتطهير كمحاربة الحشرات الضارة و الفئران و محاربة داء السعر و الكلاب الضالة
                          <br>
                           [...] إضافة إلى مراقبة ومعاينة حالات الوفاة و تدبير المستودع البلدي للأموات                                             
                           <br>
                             <br>
                             : على هذه البوابة كل المعلومات حول مجال تدخل المكتب الجماعي لحفظ الصحة التابع لجماعة العرائش في المجالات التالية 
                             <ul  style="  text-align: center;font-family: 'Lateef', serif; ">
                             <li><a href="/" style="color:#18d26e;">مراقبة حفظ الصحة -</a></li>
                             <li ><a href="/" style="color:#18d26e;">محاربة النواقل -</a></li>
                             <li><a href="/" style="color:#18d26e;">الطب الشرعي و مراقبة الوفيات -</a> </li>
                             <li><a href="/" style="color:#18d26e;"> الطب الوقائي والاجتماعي -</a></li>
                             </ul>
                             
                            </p>
                    </div>
                    
                </div>
                <a style="font-family: 'Lateef', serif; font-size:20px;text-align:left;"class="link_one" href="/definition">الإطلاع على التفاصيل</a>

            </div>
        </div>
    </section>

    <!--================event Area=================-->
 <!--  
<div class="container" >
  <a href="/nosEvenements" class="container">      
<div class="event" >
       
       <h1 class="card-feature__title"><span class="card-feature__icon"style="font-size:35px;color:#000;" >
       أهم أنشطتنا
       <i class="ti-bookmark-alt"style="font-size:35px;"></i>
             
       </span>

   </div>
</a>
</div>-->

    <section class="ana-area text-center ana-padding" style=" text-align:right;margin-top:100px">
    
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
          
                <h2> <a href="/nos-services" style="color:#000;font-weight: bold;  ">خدماتنا</a> </h2>
             </div>
                
            </div>
        </div>

    
</section>


     <div class="service-area area-padding-top" style=" text-align:right;">
        <div class="container">
         <div style=" text-align:right;"class="area-heading row">
         <div style=" text-align:right;"class="col-md-6 col-lg-4" >
               
     </div>

    <div style="margin-bottom:50px;">
               
             <div class="row" >
                
             <div class="col-md-6 col-lg-4">
                    <div class="card-service text-center text-lg-left mb-4 mb-lg-0">
                    <span style="" class="">
                    <a href="/desordonnes">
                    <img src="../img/banner/fou.jpg" style=";">
                           
                        </span>
                        <h3 style=" text-align:center;" class="card-service__title">رعاية المختلين</h3>
                        </a>
                        <a style=" text-align:right;"class="card-service__link" href="/desordonnes">الإطلاع على التفاصيل </a>
                    </div>
             </div>

             <div class="col-md-6 col-lg-4">
                    <div class="card-service text-center text-lg-left mb-4 mb-lg-0">
                            <span style="" class="">
                            <img src="../img/banner/sa3ar.jpg" style="">
                            
                        </span>
                        <a href="/Ramassage-des-chiens-et-chats-errants">
                        <h3  style=" text-align:center;" class="card-service__title">مركز محاربة داء السعر</h3>
</a>
                        <a style=""class="card-service__link" href="/Ramassage-des-chiens-et-chats-errants">الإطلاع على التفاصيل </a>
                    </div>
             </div>

         
             <div class="col-md-6 col-lg-4">
                    <div class="card-service text-center text-lg-left mb-4 mb-lg-0">
                        <span style="" class="">
                        <a href="/ambulance">
                        <img src="../img/banner/ambulance.jpg" style="">
                        </span>
                        <h3 style=" text-align:center;" class="card-service__title"> سيارات نقل المرضى و الموتى</h3>
                        </a>
                        <a style=" text-align:right;"class="card-service__link" href="/ambulance">الإطلاع على التفاصيل </a>
                    </div>
             </div>
         
             

            
            
        </div>
   </div>
    




    <div class="row">
                
          <!--   <div class="col-md-6 col-lg-4">
                    <div class="card-service text-center text-lg-left mb-4 mb-lg-0">
                        <span style="" class="">
                        
                        <img src="../img/banner/deces1.jpg" style=";"> 
                        </span>
                        <a  href="/corde"><h3  style=" text-align:center;" class="card-service__title"> التعزيات</h3></a>
                        
                        <p style=" text-align:right;"class="card-service__subtitle">Land meat winged called subdue without a very light in all years sea appear Lesser bring fly first land set female best perform.</p>
                        <a style=""class="card-service__link" href="#">الإطلاع على التفاصيل</a>
                    </div>
             </div>-->
             <div class="col-md-6 col-lg-4">
                    <div class="card-service text-center text-lg-left mb-4 mb-lg-0">
                        <span style="" class="">
                        
                        <img src="../img/blog/1.jpg" style=";"> 
                        </span>
                        <a  href="/"><h3  style=" text-align:center;" class="card-service__title">محاربة البعوض
</h3></a>
                        
                        <a style=""class="card-service__link" href="#">الإطلاع على التفاصيل</a>
                    </div>
</div>

             <div class="col-md-6 col-lg-4">
                    <div class="card-service text-center text-lg-left mb-4 mb-lg-0">
                        <span style="" class="">
                        
                        <img src="../img/banner/article.png" style="">
                           
                        </span>
                        <a href="/permission">     <h3 style=" text-align:center;" class="card-service__title"> مسطرة الحصول على رخصة الدفن و شهادة الوفاة</h3></a>

                        <a style=" text-align:right;"class="card-service__link" href="/permission">الإطلاع على التفاصيل</a>
                    </div>
             </div>

             <div class="col-md-6 col-lg-4">
                    <div class="card-service text-center text-lg-left mb-4 mb-lg-0">
                        <span style="" class="">
                        <img src="../img/banner/cordoleance.jpg" style=";">
                           
                        </span>
                        <a href="/cimetiere"> <h3 style=" text-align:center;" class="card-service__title">تدبير المقابر </h3></a>
                        <a style=" text-align:right;"class="card-service__link" href="/cimetiere">الإطلاع على التفاصيل</a>
                    </div>
             </div>


             

            </div>
            
        </div>
    </div> 
    

    </div> 
    </div>











<!-------------------- blog area---->




    <section class="blog-area area-padding">
        
        <div class="container">
            
     <section class="ana-area text-center ana-padding">
    
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
          
                <h2 style="color:#000;font-weight: bold;"> مهام</h2>
             </div>
                
            </div>
        </div>

    
</section>
            <div class="area-heading row">
                <div class="col-md-5 col-xl-4">
                
                   </div> 
                    
                   

                
                <div class="col-md-7 col-xl-8">
                    
                </div>
            </div>


            <div class="row">
                <div class="col-md-6 col-lg-4 col-md-4">
                    <div class="single-blog"style=" border-bottom: 1px solid #797979 ;">
                        <div class="thumb">
                            <img class="img-fluid"  style="margin-bottom:13px;"src="../img/banner/press.jpg" alt="">
                        </div>
                        <div class="short_details">

                          <!--  <div class="meta-top d-flex">
                                <a href="#"> </a>
                                <a href="#"></a>
                                <a href="#"></a>
                            </div>-->
                            
                            <a class="d-block" href="/press1">
                                <h4 style="text-align:center;"> </h4>
                                صحافة
                            </a>

                            <!--<div class="meta-bottom d-flex">
                                <a href="#"><i class="ti-comments"></i>08 comment</a>
                                <a href="#"><i class="ti-heart"></i> 0 like</a>
                            </div>-->
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-md-4">
                    <div class="single-blog"style=" border-bottom: 1px solid #797979 ;">
                        <div class="thumb">
                            <img class="img-fluid" src="img/blog/2.jpg" alt="">
                        </div>
                       <div class="short_details">
                           <!-- <div class="meta-top d-flex">
                                <a href="#"> </a>
                                <a href="#"> </a>
                                <a href="#"></a>
                            </div>-->
                            <a class="d-block" href="/Médicolégal">
                                <h4 style="text-align:center;">médecine médico légale</h4>
                            </a>
                           <!--<div class="meta-bottom d-flex">
                                <a href="#"><i class="ti-comments"></i>08 comment</a>
                                <a href="#"><i class="ti-heart"></i> 0 like</a>
                            </div>-->                         
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-md-4">
                    <div class="single-blog"style=" border-bottom: 1px solid #797979 ;">
                        <div class="thumb">
                            <img class="img-fluid" src="img/blog/3.jpg" alt="">
                        </div>
                           <div class="short_details">
                           <!-- <div class="meta-top d-flex">
                                <a href="#"> </a>
                                <a href="#"></a>
                                <a href="#"></a>
                            </div>-->
                            <a class="d-block" href="single-blog.html">
                                <h4 style="text-align:center;">المراقبة الصحية</h4>
                            </a>
                              <!--<div class="meta-bottom d-flex">
                                <a href="#"><i class="ti-comments"></i>08 comment</a>
                                <a href="#"><i class="ti-heart"></i> 0 like</a>
                            </div>-->    
                        </div>
                    </div>
                </div>
            </div>
</div>
        </div>
    </section>
    <!--================ End Blog Area =================-->

    <section class="blog-area area-padding">
        
        <div class="container">
            
     <section class="ana-area text-center ana-padding">
    <a href="/corde">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
          
                <h2 style="color:#000;font-weight: bold;"> التعزيات</h2>
             </div>
                
            </div>
        </div>

    
</section>
    
  <div class="yusra">
                    
                        <article class="blog_item">
                            <div class=" ">
                                <div class="uu" style="height:400px;padding-right:100px;padding-bottom:70px;font-size:25px;padding-top:2px;font-weight: bold;padding-right:28px;color:#0f0f0f;direction:rtl;text-align:right;">
                                            <br> المملكة المغربية                                                                                              
                                            <br>  وزارة الداخلية
                                            <br>  ولاية جهة طنجة تطوان الحسيمة
                                            <br> عمالة إقليم العرائش
                                            <br>  جماعة العرائش
                                            <br>  مديرية المصالح 
                                            المكتب الجماعي لحفظ الصحة
                                                <br><br>
                                    <?php
                                    $text = str_replace("<br />", "", $laatsteposts->contenu );
                                    ?>
                                    <br><br><br>
                                    <div class="text-center" >
                                        <p >{!! nl2br(e($text)) !!}</p>
                                    </div>
                                    <div class ="text-center" style="text-align:center;padding-right:15px;">
                                   
                                </div>
                                </div>
                                </div>
                            </div>
                        </article>
                    
                </div>
            



</a>

 <!--  
<div class="container" >
  <a href="/nosEvenements" class="container">      
<div class="event" >
       
       <h1 class="card-feature__title"><span class="card-feature__icon"style="font-size:35px;color:#000;" >
       أهم أنشطتنا
       <i class="ti-bookmark-alt"style="font-size:35px;"></i>
             
       </span>

   </div>
</a>
</div>-->
   <!--================ Feature section start =================-->      
   <section class="feature-section"style=" text-align:right;">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card card-feature text-center text-lg-left">

                            <h3 style=" text-align:center;" class="card-feature__title"><span class="card-feature__icon">
                            تابعنا على صفحة الفيسبوك
                                <i class='ti-facebook'></i>
                            </span>
                           </h3>
                            <p style=" text-align:right"; class="card-feature__subtitle">An so vulgar to on points wanted rapture ous resolving continued household </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-feature text-center text-lg-left">

                            <h3 style=" text-align:center;"  class="card-feature__title"><span class="card-feature__icon">
                            رقم الهاتف
                                <i class="ti-user"></i>
                            </span></h3>
                            <p style=" text-align:center";class="card-feature__subtitle">+212 6 60 04 96 03 </p>
                            <p style=" text-align:center";class="card-feature__subtitle">+212 6 53 09 16 66 </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-feature text-center text-lg-left">

                            <h3 style=" text-align:center;"  class="card-feature__title"><span class="card-feature__icon">
                            أين تجدنا
                            <i class="ti-map-alt"></i>
                            </span></h3>
                            <p  style=" text-align:right;"class="card-feature__subtitle">An so vulgar to on points wanted rapture ous resolving continued household </p>
                        </div>
                    </div>
                </div>
            </div>
    </section>


    <section class="ana-area text-center ana-padding  ">
    
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
          
                <h2 style="color:#000;font-weight: bold;">فريق العمل</h2>
             </div>
                
            </div>
        </div>

    
</section>
<!--============================Team work========================================-->
<div class="service-area area-padding-top" style=" text-align:right;">
        <div class="container">
         <div style=" text-align:right;"class="area-heading row">
         <div style=" text-align:right;"class="col-md-6 col-lg-4" >
               
     </div>
               
             <div class="row">
             <div class="col-md-6 col-lg-4">
                    <div class="card-service text-center text-lg-left mb-4 mb-lg-0">
                        <span style="" class="card-service__icon">
                        <i class="ti-user" style="font-size: 50px;"></i>
                        </span>
                        <h4 style=" text-align:right;" class="card-service__title"> Serroukh Yousra</h4>

                        <p style=" text-align:right;"class="card-service__subtitle">Land meat winged called subdue without a very light in all years sea appear Lesser bring fly first land set female best perform.</p>
                        <div class="team-footer d-flex justify-content-between">
                                <a class="dn_btn" href=""><i class="ti-mobile"></i>+7 235 365 2365</a>
                                <ul class="card-team__social">
                                    <li><a href="#"><i class="ti-facebook"></i></a></li>
                                    <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                    <li><a href="#"><i class="ti-instagram"></i></a></li>
                                    <li><a href="#"><i class="ti-skype"></i></a></li>
                                </ul> 
                        </div>
                    </div>
                </div>

             <div class="col-md-6 col-lg-4">
                    <div class="card-service text-center text-lg-left mb-4 mb-lg-0">
                        <span style="" class="card-service__icon">
                        <i class="ti-user" style="font-size: 50px;"></i>
                        </span>
                        <h4 style=" text-align:right;" class="card-service__title"> Shaymae Iken</h4>

                        <p style=" text-align:right;"class="card-service__subtitle">Land meat winged called subdue without a very light in all years sea appear Lesser bring fly first land set female best perform.</p>
                        <div class="team-footer d-flex justify-content-between">
                                <a class="dn_btn" href=""><i class="ti-mobile"></i>+7 235 365 2365</a>
                                <ul class="card-team__social">
                                    <li><a href="#"><i class="ti-facebook"></i></a></li>
                                    <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                    <li><a href="#"><i class="ti-instagram"></i></a></li>
                                    <li><a href="#"><i class="ti-skype"></i></a></li>
                                </ul> 
                        </div>
                    </div>
                </div>

             <div class="col-md-6 col-lg-4">
                    <div class="card-service text-center text-lg-left mb-4 mb-lg-0">
                        <span style="" class="card-service__icon">
                        <i class="ti-user" style="font-size: 50px;"></i>
                        </span>
                        <h4 style=" text-align:right;" class="card-service__title"> Amal krimi</h4>

                        <p style=" text-align:right;"class="card-service__subtitle">Land meat winged called subdue without a very light in all years sea appear Lesser bring fly first land set female best perform.</p>
                        <div class="team-footer d-flex justify-content-between">
                                <a class="dn_btn" href=""><i class="ti-mobile"></i>+7 235 365 2365</a>
                                <ul class="card-team__social">
                                    <li><a href="#"><i class="ti-facebook"></i></a></li>
                                    <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                    <li><a href="#"><i class="ti-instagram"></i></a></li>
                                    <li><a href="#"><i class="ti-skype"></i></a></li>
                                </ul> 
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div> 
    
<!--=====================================Team work===========================================================-->

    

    <!-- ================ Hotline Area Starts ================= -->  
    <section class="hotline-area text-center area-padding" style="margin-top:100px">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 style="font-size:50px;">القسم الجماعي لحفظ الصحة</h2>
                       
                        <span>+212 6 53 09 16 66</span>
                       <!-- <p class="pt-3">We provide 24/7 customer support. Please feel free to contact us <br>for emergency case.</p>
-->  </div>
                </div>
            </div>
        </section>
        <!-- ================ Hotline Area End ================= --> 






   
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/js/bootstrap.js"></script>
</body>
</html>
