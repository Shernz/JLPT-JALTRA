<?php session_start();
$uname=$_REQUEST['email'];
$pass=$_REQUEST['passwd'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "register";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$passx='';
$sql="SELECT password from register WHERE email='$uname' ;";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
       $passx= $row['password'];
    }
} else {
    echo "0 results";
}
if (strcmp($passx,$pass)==0){
    
        header("Location: http://127.0.0.1/JLPT-JALTRA/formdownload.html");
    die();
 
}
else{
    header("Location: http://127.0.0.1/JLPT-JALTRA/mainpage.php");
    $_SESSION['wrong']="wrong credentials";
    die();
}
$conn->close();

?>