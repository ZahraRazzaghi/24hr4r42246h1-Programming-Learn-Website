<!DOCTYPE html>
<html dir="rtl" lang="fa">
<head>
    <meta charset="UTF-8">
    <title>Do Contact</title
</head>
<body>
<?php
//متغیر دریافت آی پی مخاطب
@$pfw_ip= $_SERVER['REMOTE_ADDR'];
@$email_title= addslashes($_POST['email_title']);
@$visitor_email = addslashes($_POST['visitor_email']);
@$visitor_message = addslashes($_POST['visitor_message']);

/* --- اعتبارسنجی اطلاعات دریافتی و پردازش ---*/

if (strlen($visitor_email) == 0) {
    die("لطفا آدرس پست الکترونیک خود را وارد نمایید");
}
if (strlen($visitor_message) == 0) {
    die("لطفا پیغام خود را وارد نمایید");
}
if (!preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/', $visitor_email)) {
    die("آدرس پست الکترونیک شما معتبر نمی باشد لطفا آن را بررسی نموده و دوباره امتحان کنید");
}

/*--- ارسال اطلاعات به ایمیل تعریف شده در صورت عدم وجود خطا---*/
$email_from='king_of_it@yahoo.com';
//بخش ارسال مشخصات به ایمیل من
    $header = "From: $email_from\r\n" . "Reply-To: $visitor_email\n";
    $header .= "Content-Type: text/plain; charset=UTF-8\n";
    $subject = '=?UTF-8?B?' . base64_encode($email_title) . '?=';
    $email_to = "king_of_developers@yahoo.com";
    $email_body = "Visitor ip: $pfw_ip\n"
        . "Message title: $email_title\n"
        . "email: $visitor_email\n"
        . "Message: $visitor_message\n";
    @mail($email_to, $subject, $email_body, $header);

    echo " پیام شما را دریافت کردیم و در اسرع وقت آن را پاسخ خواهیم داد";
    header('Location: ../ContactUs.php');

/*---ذخیره در پایگاه داده برای استفاده های آینده---*/
require_once 'db.php';
mysqli_query($db,"INSERT INTO contact_us_tbl(Msg_Subject,Msg_Email,Msg_Message) VALUES('$email_title','$visitor_email','$visitor_message')") or die (mysqli_error($db));

?>
<script src="../assests/js/sweetalert.js"></script>
</body>
</html>
<?php
