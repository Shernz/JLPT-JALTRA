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
	
    echo "<h2><b>Invalid Username Or Password</b></h2>";
}
if (strcmp($passx,$pass)==0){
    
    header("Location: http://127.0.0.1/JLPT-JALTRA-master/verify.php?id=".$uname);
    die();
}
else{
    //header("Location: http://127.0.0.1/JLPT-JALTRA-master/mainpage.php");
    $_SESSION['wrong']="wrong credentials";
	$var="Invalid Username or Password";
	echo "<script>windows.alert({$var});</script>";
    die();
}
$conn->close();

?>
