<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
</head>
<link href="assests/css/style-EmailLogin.css" rel="stylesheet" type="text/css">
<link href="assests/css/style.css" rel="stylesheet" type="text/css">
<link href="assests/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="assests/css/fontawesome.min.css" rel="stylesheet" type="text/css">
<body>
<header class="gh-head">
    <nav>
        <a href="#">
            <img alt="Logo" class="" src="">
        </a>
    </nav>
</header>
<img src="assests/images/Login.svg" class="wave">
<div  class="container">
  <!--  <div class="img">
        <img src="#">
    </div>-->
    <div class="login-container">
        <form action="DoLogin.php" method="post">
            <img src="assests/images/profile.svg" class="avatar">
            <h1><small>ورود به حساب کاربری</small></h1>
            <div class="input-div one">
                <div class="i">
                    <i class="fas fa-user"></i>
                </div>
                <div>
                    <h5><small>نام کاربری(ایمیل)</small></h5>
                    <input class="input" type="text" name="email" placeholder="">
                </div>
            </div>
            <div class="input-div two">
                <div class="i">
                    <i class="fas fa-lock"></i>
                </div>
                <div>
                    <h5><small>رمز عبور</small></h5>
                    <input class="input" name="password" type="password">
                </div>
            </div>
            <a href="#" class="link">آیا رمز عبور خود را فراموش کرده اید؟</a>
            <a href="Registration.php" class="link">آیا ثبت نام نکرده اید؟</a>
            <input type="submit" name="do-login" class="button-email-login-page text-light" value="ورود">
        </form> </div>

</div>

<script type="text/javascript" src="assests/js/main.js"></script>
</body>
</html>