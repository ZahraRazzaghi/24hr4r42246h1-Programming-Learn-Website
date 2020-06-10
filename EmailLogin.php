<?php
require_once 'engin/db.php';
if(isset($_SESSION['loggedin'])){
    header('Location: UserDashboard.php');
}
?>
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<link href="assests/css/style-EmailLogin-Registration.css" rel="stylesheet" type="text/css">
<link href="assests/css/style.css" rel="stylesheet" type="text/css">
<link href="assests/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="assests/css/all.min.css" rel="stylesheet">
<body>
<header class="gh-head">
    <nav>
        <a href="#">
            <img alt="fastscroll.com" class="" src="assests/images/undraw_welcome_cats_thqn.svg" width="9%">
        </a>
    </nav>
</header>
<img src="assests/images/Login.svg" class="wave">
<div  class="container">
    <div class="section-container">
        <form action="engin/DoLogin.php" method="post">
            <img src="assests/images/profile.svg" class="avatar">
            <h1><small>ورود به حساب کاربری</small></h1>
            <div class="input-div one">
                <div class="i">
                    <i class="fa fa-user-circle" aria-hidden="true" style="color:#8ab1f0;font-size:12px"></i>
                </div>
                <div>
                    <input class="input" type="text" name="email" placeholder="">
                    <label><small>نام کاربری(ایمیل)</small></label>
                </div>
            </div>
            <div class="input-div two">
                <div class="i">
                    <i class="fas fa-lock" style="color:#8ab1f0;font-size:12px"></i>
                </div>
                <div>
                    <input class="input" name="password" type="password">
                    <label><small>رمز عبور</small></label>
                </div>
            </div>
            <div class="inline-flex">
            <a href="#" class="link">آیا رمز عبور خود را فراموش کرده اید؟</a>&nbsp;&nbsp;&nbsp;<span class="fas fa-line-columns" style="color: #0d6ca0"> </span>&nbsp;&nbsp;&nbsp;
            <a href="Registration.php" class="link"> آیا ثبت نام نکرده اید؟</a>
            </div>
            <input type="submit" name="do-login" class="button-form-submit text-light" value="ورود">
        </form> </div>

</div>

<script type="text/javascript" src="assests/js/main.js"></script>
</body>
</html>