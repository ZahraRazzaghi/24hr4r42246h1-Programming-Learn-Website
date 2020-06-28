<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="X-UA-Compatible" content="ie=edge">
    <title>Contact Form</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style_index.css" rel="stylesheet" type="text/css">
    <link href="assets/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style_ContactUs.css " rel="stylesheet" type="text/css">


</head>
<body>
<!--- Start Header ---
<header class="gh-head">
    <nav class="gh-navbar inner">
        <div class="gh-navbar-left">
            <a aria-current="page" class="gh-nav-logo gh-navbar-item" href="index.php">خانه</a>
            <a aria-current="page" class="gh-nav-logo gh-navbar-item" href="AboutUs.php">درباره ما</a>
            <a aria-current="page" class="gh-nav-logo gh-navbar-item text-primary" href="ContactUs.php">تماس با ما</a>
            <a aria-current="page" class="gh-nav-logo gh-navbar-item" href="Forum.php">بحث و گفتگو</a>
            <a aria-current="page" class="gh-nav-logo gh-navbar-item" href="LandRegister.php">شروع یادگیری</a>
        </div>
    </nav>

</header>
<!--- End Header --->

<!--- Start Form --->
<section class="section-bg" style="background-image: url(assets/images/david-rangel-4m7gmLNr3M0-unsplash.jpg);" data-scroll-index="7">
    <div class="overlay pt-100 pb-100 ">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex align-items-center">
                    <div class="contact-info">

                        <h2 class="contact-title">آیا سوالی دارید؟</h2>
                        <p>Lorem ipsum is a dummy text used to replace text in some areas just for the purpose of an example. It can be used in publishing and graphic design. The lorem ipsum text is usually a section of a Latin text by Cicero with words altered, added and removed to make it nonsensical.</p>
                        <ul class="contact-info">
                            <li>
                                <div class="info-left">
                                    <i class="fas fa-mobile-alt"></i>
                                </div>
                                <div class="info-right">
                                    <h4 dir="ltr">+989028284143</h4>
                                </div>
                            </li>
                            <li>
                                <div class="info-left">
                                    <i class="fas fa-at"></i>
                                </div>
                                <div class="info-right">
                                    <h4>zahrarazzaghi@yahoo.com</h4>
                                </div>
                            </li>
                            <li>
                                <div class="info-left">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="info-right">
                                    <h4>ایران</h4>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 d-flex align-items-center">
                    <div class="contact-form">
                        <!--Contact Form-->
                        <form action="engin/DoContact.php" id='contact-form' method='POST' onsubmit="Swal.fire(
  'با تشکر از بازخورد شما!',
  'پیام شما را دریافت کردیم و در اسرع وقت آن را پاسخ خواهیم داد!',
  'success');">
                            <input type='hidden' name='form-name' value='contactForm' />
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input name="email_title" type="text" name="name" class="form-control" id="first-name" placeholder="عنوان " >
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input name="visitor_email" type="email" name="email" class="form-control" id="email" placeholder="ایمیل خود را وارد کنید *" required="required">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea name="visitor_message" rows="4" name="message" class="form-control" id="description" placeholder="پیغام خود را وارد کنید *" required="required"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <!--contact button-->
                                    <input type="submit" name ="submit" value="ارسال" class="btn-big btn btn-bg"/>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--- End form --->

<!--- Start footer ---
<footer class="footer-landing-page center bg_dark">
    <div class="row">
        <div class="col-md-3">
            <a href="AboutUs.php">درباره ما</a><br>
            <a href="#">سوالات متداول</a>
        </div>
        <div class="col-md-3">
            <h6>محصولات</h6>
        </div>
        <div class="col-md-3">
            <h6>پشتیبانی</h6>
            <a href="ContactUs.php">تماس با ما</a>
        </div>
        <div class="col-md-3">
            <p>ما را در شبکه های اجتمایی دنبال کنید.</p>
            <i class="fas fa-facebook-square" style="color:#8ab1f0;font-size:12px"><a href="#"></a> </i>
            <i class="fas fa-instagram" style="color:#8ab1f0;font-size:12px"><a href="#"></a></i>
            <i class="fas fa-twitter" style="color:#8ab1f0;font-size:12px"><a href="#"></a></i>
            <i class="fas fa-linkedin" style="color:#8ab1f0;font-size:12px"><a href="#"></a></i>
            <p>Create by:   <a class="text-danger" style="color: #7b79ff;">zahra razzaghi</a></p></div>
    </div>


    <a class="text-dark fa fa-copyright" style="color: #7b79ff; direction: ltr;">&nbsp;2020 fastscroll.com. All rights reserved. </a>
</footer>
<!--- End footer --->
<script src="assets/js/sweetalert.js"></script>
</body>
</html>