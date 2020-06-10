
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
    <title>Registretion</title>
</head>
<link href="assests/css/style-EmailLogin-Registration.css" rel="stylesheet" type="text/css">
<link href="assests/css/style.css" rel="stylesheet" type="text/css">
<link href="assests/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="assests/css/all.min.css" rel="stylesheet" type="text/css">
<body>

<header class="gh-head">
    <nav>
        <a href="#">
            <img alt="fastscroll.com" class="" src="assests/images/undraw_welcome_cats_thqn.svg" width="9%">
        </a>
    </nav>
</header>
<div class="container">
<div id="users" class="section-container">
    <form action="engin/DoRegister.php" method="post" onsubmit="onsubmit="Swal.fire(
    'می توانید وارد شوید',
    'اطلاعات حساب شما ثبت شد',
    'success');">

        <div class="input-div one">
            <div class="i">
                <i class="fas fa-user-edit" style="color:#8ab1f0;font-size:12px"></i>
            </div>
            <div>
                <input type="text" name="display-name" class="input">
                <label><small>نام شما</small></label>
            </div>
        </div>

        <div class="input-div two">
            <div class="i">
                <i class="fas fa-mail-bulk" style="color:#8ab1f0;font-size:12px"></i>
            </div>
            <div>
                <input type="text" name="email" class="input">
                <label><small>ایمیل</small></label>
            </div>
        </div>

        <div class="input-div tree">
            <div class="i">
                <i class="fas fa-user-lock" style="color:#8ab1f0;font-size:12px"></i>
            </div>
            <div>
                <input type="password" name="password" class="input" >
                <label><small>رمز عبور</small></label>
            </div>
        </div>

        <div class="input-div four">
            <div class="i">
                <i class="fas fa-user-lock" style="color:#8ab1f0;font-size:12px"></i>
            </div>
            <div>
                <input type="password" name="password-confirm" class="input">
                <label><small>تکرار رمز عبور</small></label>

            </div>
        </div>
        
        <input type="submit" name="do-register" value="ثبت نام" class="button-form-submit">
    </form>
</div>
</div>

<img src="#" class="wave-in-registration">

<script type="text/javascript" src="assests/js/main.js"></script>
<script src="assests/js/sweetalert.js"></script>
</body>
</html>