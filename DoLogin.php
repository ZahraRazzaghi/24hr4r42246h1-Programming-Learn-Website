<?php
 require_once 'db.php';
$email=$_POST['email'];
$password=$_POST['password'];

$check = mysqli_query($DB,"SELECT * FROM login_user_tbl WHERE Usr_UserName='$email' AND Usr_Password='$password'");
if(mysql_num_rows($check)>0){
    echo 'Welcome to your profile';
}else{
    echo "you do not registred yet";
}



?>