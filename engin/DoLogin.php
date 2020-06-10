<?php
 require_once 'db.php';
$email=$_POST['email'];
$password=md5($_POST['password']);

$result = mysqli_query($db,"SELECT * FROM users_tbl WHERE Usr_UserName='$email' AND Usr_Password='$password'");
$rows = mysqli_num_rows($result);
if ($rows<=0 ){
    echo "نام کاربری یا کلمه عبور اشتباه است";
}

else {

    // اگر کاربر تایید شد از طریق نشست ورود کاربر را مشخص میکنیم.

    $_SESSION["loggedin"]=$email;
    header('Location: ../UserDashboard.php');

}


/*
$check = mysqli_query($db,"SELECT * FROM users_tbl WHERE Usr_UserName='$email' AND Usr_Password='$password'");
$rows = mysqli_num_rows($check);
if($rows>0){

    $_SESSION["loggedin"]=$email;
    header("Location: ../UserDashboard.php");
}
else{
    echo "you do not registred yet";
}

*/
?>
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="assests/css/style.css" type="text/css" rel="stylesheet">
    <link href="assests/css/bootstrap.css" type="text/css" rel="stylesheet">
</head>
<body>
</body>
</html>