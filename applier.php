<?php
$level 
=NULL;
$name 
=NULL;
$gender
=NULL;
$date
=NULL;
$pscode 
=NULL;
$nativelang
=NULL;
$street
=NULL;
$city_state
=NULL;
$country
=NULL;
$pin_code
=NULL;
$tele_no
=NULL;
$email 
=NULL;
$inst_name 
=NULL;
$place 
=NULL;
$reason 
=NULL;
$occu 
=NULL;
$occu_details 
=NULL;
$media1
=NULL;
$media2 
=NULL;
$media3 
=NULL;
$media4 
=NULL;
$media5 
=NULL;
$media6 
=NULL;
$media7 
=NULL;
$media8 
=NULL;
$media9 
=NULL;
$teacher1 
=NULL;
$teacher2 
=NULL;
$teacher3 
=NULL;
$teacher4 
=NULL;
$teacher5
=NULL;
$friends1 
=NULL;
$friends2  
=NULL;
$friends3  
=NULL;
$friends4  
=NULL;
$friends5
=NULL;
$family1  
=NULL;
$family2   
=NULL;
$family3   
=NULL;
$family4   
=NULL;
$family5
=NULL;
$supervisor1   
=NULL;
$supervisor2   
=NULL;
$supervisor3   
=NULL;
$supervisor4   
=NULL;
$supervisor5
=NULL;
$colleagues1
=NULL;
$colleagues2
=NULL;
$colleagues3  
=NULL;
$colleagues4  
=NULL;
$colleagues5
=NULL;
$customers1  
=NULL;
$customers2  
=NULL;
$customers3 
=NULL;
$customers4  
=NULL;
$customers5
=NULL;
$N1_atmt
=NULL;
$N2_atmt
=NULL;
$N3_atmt
=NULL;
$N4_atmt
=NULL;
$N5_atmt
=NULL;
$N1_p_f 
=NULL;
$N2_p_f
=NULL;
$N2_p_f
=NULL;
$N4_p_f
=NULL;
$N5_p_f
=NULL;
$level=$_REQUEST['level'];
$name=$_REQUEST['name'];
$gender=$_REQUEST['gender'];
$date=$_REQUEST['date'];
$pscode =$_REQUEST['pscode '];
$nativelang=$_REQUEST['nativelang'];
$street=$_REQUEST['stree'];
$city_state=$_REQUEST['city_state'];
$country=$_REQUEST['country'];
$pin_code=$_REQUEST['pin_code'];
$tele_no=$_REQUEST['tele_no'];
$email =$_REQUEST['email'];
$inst_name =$_REQUEST['inst_name'];
$place =$_REQUEST['place'];
$reason =$_REQUEST['reason'];
$occu =$_REQUEST['occu'];
$occu_details =$_REQUEST['occu_details'];
$media1=$_REQUEST['media1'];
$media2 =$_REQUEST['media2'];
$media3 =$_REQUEST['media3'];
$media4=$_REQUEST['media4'];
$media5 =$_REQUEST['media5'];
$media6=$_REQUEST['media6'];
$media7 =$_REQUEST['media7'];
$media8 =$_REQUEST['media8'];
$media9 =$_REQUEST['media9'];
$teacher1 =$_REQUEST['teacher1'];
$teacher2=$_REQUEST['teacher2'];
$teacher3 =$_REQUEST['teacher3'];
$teacher4 =$_REQUEST['teacher4'];
$teacher5=$_REQUEST['teacher5'];
$friends1 =$_REQUEST['friends1'];
$friends2 =$_REQUEST['friends2'];
$friends3 =$_REQUEST['friends3'];
$friends4=$_REQUEST['friends4'];
$friends5=$_REQUEST['friends5'];
$family1 =$_REQUEST['family1'];
$family2 =$_REQUEST['family2'];
$family3 =$_REQUEST['family3'];
$family4 =$_REQUEST['family4'];
$family5=$_REQUEST['family5'];
$supervisor1=$_REQUEST['supervisor1'];
$supervisor2 =$_REQUEST['supervisor2'];
$supervisor3 =$_REQUEST['supervisor3'];
$supervisor4 =$_REQUEST['supervisor4   '];
$supervisor5=$_REQUEST['supervisor5'];
$colleagues1=$_REQUEST['colleagues1'];
$colleagues2=$_REQUEST['colleagues2'];
$colleagues3 =$_REQUEST['colleagues3'];
$colleagues4  =$_REQUEST['colleagues4'];
$colleagues5=$_REQUEST['colleagues5'];
$customers1 =$_REQUEST['customers1'];
$customers2 =$_REQUEST['customers2'];
$customers3 =$_REQUEST['customers3'];
$customers4 =$_REQUEST['customers4'];
$customers5=$_REQUEST['customers5'];
$N1_atmt=$_REQUEST['N1_atmt'];
$N2_atmt=$_REQUEST['N2_atmt'];
$N3_atmt=$_REQUEST['N3_atmt'];
$N4_atmt=$_REQUEST['N4_atmt'];
$N5_atmt=$_REQUEST['N5_atmt'];
$N1_p_f =$_REQUEST['N1_p_f'];
$N2_p_f=$_REQUEST['N2_p_f'];
$N3_p_f=$_REQUEST['N3_p_f'];
$N4_p_f=$_REQUEST['N4_p_f'];
$N5_p_f=$_REQUEST['N5_p_f'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "application";

$conn = new mysqli($servername, $username, $password, $dbname);
$sql="INSERT INTO apply2 (level,name 
,gender
,date
,pscode 
,nativelang
,street
,city_state
,country
,pin_code
,tele_no
,email 
,inst_name 
,place 
,reason 
,occu 
,occu_details 
,media1
,media2 
,media3 
,media4 
,media5 
,media6 
,media7 
,media8 
,media9 
,teacher1 
,teacher2 
,teacher3 
,teacher4 
,teacher5
,friends1 
,friends2  
,friends3  
,friends4  
,friends5
,family1
,family2
,family3  
,family4 
,family5
,supervisor1 
,supervisor2 
,supervisor3  
,supervisor4  
,supervisor5
,colleagues1
,colleagues2
,colleagues3
,colleagues4
,colleagues5
,customers1
,customers2
,customers3
,customers4
,customers5
,N1_atmt
,N2_atmt
,N3_atmt
,N4_atmt
,N5_atmt
,N1_p_f
,N2_p_f
,N3_p_f
,N4_p_f
,N5_p_f
) VALUES ('$level 
','$name 
','$gender
','$date
','$pscode 
','$nativelang
','$street
','$city_state
','$country
','$pin_code
','$tele_no
','$email 
','$inst_name 
','$place 
','$reason 
','$occu 
','$occu_details 
','$media1
','$media2 
','$media3 
','$media4 
','$media5 
','$media6 
','$media7 
','$media8 
','$media9 
','$teacher1 
','$teacher2 
','$teacher3 
','$teacher4 
','$teacher5
','$friends1 
','$friends2  
','$friends3  
','$friends4  
','$friends5
','$family1  
','$family2   
','$family3   
','$family4   
','$family5
','$supervisor1   
','$supervisor2   
','$supervisor3   
','$supervisor4   
','$supervisor5
','$colleagues1
','$colleagues2
','$colleagues3  
','$colleagues4  
','$colleagues5
','$customers1  
','$customers2  
','$customers3 
','$customers4  
','$customers5
','$N1_atmt
','$N2_atmt
','$N3_atmt
','$N4_atmt
','$N5_atmt
','$N1_p_f 
','$N2_p_f
','$N3_p_f
','$N4_p_f
','$N5_p_f
');";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>