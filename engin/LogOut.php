<?php
session_start();
unset($_SESSION['loggedin']);
if(isset($_SESSION['loggedin'])){
    echo 'yes';
}else{
    header('Location: ../index.php');
}
?>


