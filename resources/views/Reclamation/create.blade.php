<!doctype html>
<html lang="ar">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
<style>
.appointment-area{
    text-align:right;
}
.required{
    color:red;
}
h3{
    color:#000;
   
}
h1 {
  /*text-shadow: 2px 1px ;*/
  color:#0000;
  
}

</style>
<body>

@extends('layouts.gabarit')

@section('content')
    <!--================ appointment Area Starts =================-->
<section class="appointment-area area-padding-top">
    <div class="container">
    <div class="appointment-inner">
            <div class="row">
                <div class="col-sm-12 col-lg-5 offset-lg-1">
                    <h1>أسئلة وأجوبة  </h1>
                    <div class="accordion" id="accordionExample">

                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="text-align:center; color:#18d26e;">
                                    ما المقصود بالشكاية؟
                                    </button>

                                </h5>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample" >
                                <div class="card-body">
                                <p dir="RTL" style="text-align:right"><span style="font-size:14px">كل تعبير كتابي او شفوي او تسجيل سمعي او بصري او كلاهما.&nbsp;يوجهه المرتفق الى الإدارة. يفصح فيه عن:</span></p>

                                    <p dir="RTL" style="margin-left:0cm; margin-right:18.0pt; text-align:right"><span style="font-size:14px"><span style="font-family:Symbol">&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>ضرر قد يكون لحقه جراء تصرف صادر عن الإدارة سواء كان قرارا ضمنيا او صريحا او عملا او امتناع عن عمل يكون مخالفا للقانون او منافيا لمبادئ العدل والانصاف.</span></p>

                                    <p dir="RTL" style="margin-left:0cm; margin-right:18.0pt; text-align:right"><span style="font-size:14px"><span style="font-family:Symbol">&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>عدم رضاه عن خدمة مقدمة من طرف الإدارة.</span></p>


                               </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="text-align:center; color:#18d26e;">
                                    ماهي الحالات التي لا تتم فيها معالجة  الشكاية؟ 
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                <p dir="rtl"><span style="font-size:14px"><span style="font-family:Symbol">&nbsp; </span>&nbsp; &nbsp;<span style="font-family:Symbol">&middot;&nbsp;&nbsp;&nbsp;</span>&nbsp; &nbsp; &nbsp;إذا كان موضوعها معروضا على القضاء او على أي جهة مختصة بموجب النصوص التشريعية والتنظيمية الجاري بها العمل او إذا سبق ان صدر بشأنها مقرر قضائي مكتسب لقوة الشيء المقضي به.&nbsp; &nbsp;&nbsp;</span></p>

                                <p dir="rtl"><span style="font-size:14px">&nbsp; &nbsp; &nbsp;<span style="font-family:Symbol">&middot;&nbsp;&nbsp;&nbsp;</span>&nbsp; &nbsp; &nbsp; إذا&nbsp;كان موضوع الشكاية لا يندرج ضمن اختصاص الإدارة المعنية .&nbsp;&nbsp;</span></p>

                                <p dir="rtl"><span style="font-size:14px">&nbsp; &nbsp; &nbsp;<span style="font-family:Symbol">&middot;&nbsp;&nbsp;&nbsp; &nbsp;</span>&nbsp; &nbsp;إذا تبين ان الشكاية كيدية او تتضمن سبا او قذفا.&nbsp;&nbsp;</span></p>

                                <p dir="rtl"><span style="font-size:14px">ويتم في جميع هذه الحالات توجيه رد معلل الى المرتفق وإرشاده إذا تأتى دلك.</span></p>


                                </div>
                            </div>
                        </div>

                        
                        <div class="card">
                            <div class="card-header" id="headingFour">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" style="text-align:center; color:#18d26e;">
                                    من هي الجهات المعنية بالملاحظة والاقتراح والشكاية؟
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                <div class="card-body">
                                        <p style="text-align:right"><span style="font-size:14px">إدارات الدولة والمؤسسات العمومية وكل شخص اعتباري يمارس صلاحيات السلطة العمومية.</span></p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingFive">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive" style="text-align:center; color:#18d26e;">
                                    ماهي الآجال المحددة للمعالجة والرد على الشكاية؟
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                                <div class="card-body">
                                                                            
                                        <p dir="RTL" style="margin-left:0cm; margin-right:0cm; text-align:right"><span style="font-size:14px">&nbsp;تتم معالجة الشكاية والرد عليها داخل اجل أقصاه ستون (60) يوما من تاريخ توصل الإدارة المعنية بها. في حالة عدم وضوح أو عدم إرفاق الشكاية بالوثائق والحجج الضرورية لمعالجتها، سيتم إخبار المرتفق بذلك داخل أجل 15 يوما من تاريخ إيداعها عبر نظام البوابة.</span></p>
                               </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!--Reclamatiom ------------------------------------>
                <div class="col-lg-5">
                    <div class="appointment-form">
                        <h1> الشكاية</h1>
                        <p class="info-required"> <i class="required">*</i> الخانات الاجبارية محددة ب  </p>
                        <h3 style="color:#18d26e;">الموضوع الرئيسي : السلامة الصحية</h3>
                        <form action="{{ route('reclamation.store') }}" method="POST">
                            <div class="form-group">
                                <label ><i class="required">*</i> : الموضوع الفرعي</label>
                                <select id = "myList" style="text-align:right;padding-right:0px; " name="sujet-prin">
                                        <option selected="selected" value="0">اختر</option>
                                        <option value="السلامة الغدائية">السلامة الغدائية  </option>
                                        <option value="الضرائب و الرسوم">الضرائب و الرسوم </option>
                                        <option value="شكاية رفع الضرر">شكاية رفع الضرر</option>
                                        <option value="(نواقل الامراض (الكلاب الضالة، الحشرات">(نواقل الامراض (الكلاب الضالة، الحشرات</option>
                                </select>
                               
                                <div>{{ $errors->first('name') }}</div> 
                            </div>
                            <h3 style="color:#18d26e;">: الموقع المعني</h3>
                            <div class="form-group">
                                <label>Commune :</label>
                                <input type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" name="commune"> 
                            </div>
                            <h3 style="color:#18d26e;"><i class="required">*</i>: الشكاية</h3>
                            <div class="form-group">
                                <textarea name="message" cols="20" rows="7"  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Message'" required></textarea>
                                <div>{{ $errors->first('name') }}</div>
                            </div>
                            <div >
                                <label for="file">: المرفقات</label>
                                <input type="file" id="file" name="file" multiple> (يمكنكم إرفاق أية وثيقة ( صورة، ملف إلكتروني، وثيقة مرقمة، الخ 
                            </div>
                            <div class="form-group">
                                <label><i class="required">*</i>:أين يمكننا رد على شكايتكم</label>
                                <input type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" name="contacter"> 
                                <div>{{ $errors->first('name') }}</div>
                            </div>
                            @csrf
                            <button type="submit" class="main_btn">إرسال</button>
                        </form>
                    </div>
                </div>
                <!---------------------------------------------------------->
            </div>

        </div>


    </div>
</section>
<!--================ appointment Area End =================-->


        <!-- ================ Hotline Area Starts ================= -->  
        <section class="hotline-area text-center area-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 style="font-size:40 px">BCH Larache</h1>
                        
                        <p class="pt-3">We provide 24/7 customer support. Please feel free to contact us <br>for emergency case.</p>
                    </div>
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
</body>
</html>
