<?php session_start();
$given=$_REQUEST['otp'];
$actual=$_SESSION['otp'];

if (strcmp($given,$actual)==0){
    header("Location: http://127.0.0.1/JLPT-JALTRA-master/register.php");
die();
}
else{
    header("Location: http://127.0.0.1/JLPT-JALTRA-master/mainpage.php");
    die();
}
?>
