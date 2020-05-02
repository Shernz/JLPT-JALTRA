<?php
$first=$_REQUEST['first'];
$last=$_REQUEST['last'];$email=$_REQUEST['email'];$phone=$_REQUEST['phone'];$sex=$_REQUEST['sex'];$dob=$_REQUEST['dob'];$level=$_REQUEST['level'];

$pass=$_REQUEST['pass'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "register";



$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO register (firstname, lastname, email,contact,sex,dob,level,password) VALUES ('$first','$last','$email','$phone','$sex','$dob','$level','$pass') ";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
if (strcmp($given,$actual)==0){
    header("Location: http://127.0.0.1/JLPT-JALTRA/mainpage.php");
die();
}
?>