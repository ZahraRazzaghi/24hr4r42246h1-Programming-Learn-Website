
<?php
require_once 'engin/db.php';
/*
require_once 'engin/utilities.php';

//process the form
if(isset($_POST['do-register'])){
    //initialize an array to store any error message from thr form
    $form_errors=array();

    //form validation
    $_required_fields=array('display-name','email','password');

    //loop through the required fields array
    foreach($_required_fields as $som_of_fields){
        if(!isset($_POST[$name_of_field]) || $_POST[$name_of_field]==NULL){
            $form_errors[]=$name_of_field;
        }
    }

    //check if error array is empty, if yes process form data and insert record
    if(empty($form_errors)){
        //collect form data and store in variables
        $display_name=$_POST['display-name'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        //hashing the password
        $hashed_password=md5($password,PASSWORD_DEFAULT);
        try{
            //create SQL insert statement
            $sqlI
        }
    }
    //call the function to check empty field and merge the return data into form_error array
    $form_errors=array_merge($form_errors,check_empty_fields($required_fields));

    //Fields that requires checking for minimum length
    $fields_to_check_length=array('username' => 4,'password');

    //call the function to check minimum required length and merge the return data into form_error array
    $form_errors=array_merge($form_errors,check_min_length($fields_to_check_length));
}
*/
if(isset($_SESSION['loggedin'])){

        echo "<p style='padding:28px;color: darkolivegreen; '>Registration Successful</p>";

}else{
    $msg="<p style='padding:28px;color: darkred; '>An error Occurred:</p>";

}
////
?>
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="X-UA-Compatible" content="ie=edge">
    <title>Registretion</title>
</head>
<link href="assets/css/style-EmailLogin-Registration.css" rel="stylesheet" type="text/css">
<link href="assets/css/style.css" rel="stylesheet" type="text/css">
<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="assets/css/all.min.css" rel="stylesheet" type="text/css">
<body>
<header class="gh-head">
    <nav>
        <a href="#">
            <img alt="fastscroll.com" class="" src="assets/images/undraw_welcome_cats_thqn.svg" width="9%">
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

<script type="text/javascript" src="assets/js/main.js"></script>
<script src="assets/js/sweetalert.js"></script>
</body>
</html>