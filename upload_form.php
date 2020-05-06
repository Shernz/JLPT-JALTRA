<form action="form_upload.php?id=<?php session_start(); echo $_SESSION['email']; ?>" method="post" enctype="multipart/form-data">
	
	<?php 
		
		$mail=$_SESSION['email'];
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
		$search = "@"; 
		$position = strpos($mail, $search); 
		echo "<b><h3>Hello, ".substr($mail,0,$position)."</h3></b>";
		$flag1=0;
		if ($handle = opendir($dir)) {
		
			while (false !== ($entry = readdir($handle))) {

				if ($entry != "." && $entry != "..") {

					if($entry==$mail.".pdf")
					{
						$flag1=1;
					}
				}
			}
	if($flag1==1)
	{
		echo "<br><br><center><b>FORM STATUS:</b>FORM UPLOADED";
	}
	else
	{
		echo "<br><br><center><b>FORM STATUS:</b>YET TO UPLOAD";
	}
    closedir($handle);
}
	?>
	<br>
	<br>
		
		<center>
			<b>TRANSACTION STATUS:</b> PAID
			<br><br>
			<b>UPLOAD OR REUPLOAD FORM HERE:</b>
			<input type="file" name="file" size="50" />
			<br />
			<br />
			
			<input type="submit" value="Upload" />
			<h2 style="color:green;">JLPT form Download</h2> 
        <p><b>Click below to download PDF</b> 
        </p> 
        <a href="download_form.php?file=jlpt_form">Download Form</a></center> 
		</center>
</form>