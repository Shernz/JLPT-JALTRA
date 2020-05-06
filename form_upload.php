<?php
session_start();
$fname=$_GET['id'];
$i = 0; 
$dir = 'uploads/';
if ($handle = opendir($dir)) 
{
	while (($file = readdir($handle)) !== false)
	{
		if (!in_array($file, array('.', '..')) && !is_dir($dir.$file)) 
			$i++;
	}
}	
$date="2020-10-1";
if($fname!='')
{
if($i<3500 and (date("Y-m-d")<$date))
{
$info = pathinfo($_FILES['file']['name']);
$ext = $info['extension']; // get the extension of the file
$newname = $fname.".".$ext; 
$target = 'uploads/'.$newname;
if (file_exists('uploads/'.$newname))
{ 
unlink('uploads/'.$newname);
move_uploaded_file( $_FILES['file']['tmp_name'], $target);
echo "uploaded successfully!";
} 
else
{
move_uploaded_file( $_FILES['file']['tmp_name'], $target);
echo "uploaded successfully!";

}
}
else{
	echo "REGISTRATION CLOSED!!";
}
}
else
{
	echo "<center><b>oops something went wrong!</b></center>";
}
?>
