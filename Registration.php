<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registretion</title>
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
<div id="users">
    <form action="EmailLogin.php" method="post">
        <input type="text" name="email" class="input" placeholder="ایمیل">
        <input type="password" name="password" class="input" placeholder="رمز عبور">
        <input type="password" name="password2" class="input" placeholder="تکرار رمز عبور">
        <input type="submit" name="do-register" value="ثبت نام">
    </form>
</div>
<script type="text/javascript" src="assests/js/main.js"></script>
</body>
</html>