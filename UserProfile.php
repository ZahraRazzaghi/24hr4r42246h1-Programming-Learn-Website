<?php
require_once 'engin/db.php';
if(!isset($_SESSION[loggedin])){
    header('Location: EmailLogin.php');
}
$UserEmail =$_SESSION['loggedin'];
$result=mysqli_query($db,"SELECT * FROM users_tbl WHERE Usr_UserName_='$UserEmail'");
$fetch=mysqli_fetch_array($result);
echo $fetch['Usr_DisplayName'];
?>