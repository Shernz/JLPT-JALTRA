<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pay</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="../style.css">
</head>
<body>
<?php
	header("Pragma: no-cache");
	header("Cache-Control: no-cache");
	header("Expires: 0");
	include('header.php');
    include('container.php');
?>

<!-- <div class="container"> -->
	<div class="jumbotron">
		<h2>JLPT Payment</h2>
	</div>
		
	<form method="post" action="pgRedirect.php">	
		<h3>Your customer ID is <?php echo  "CUST" . rand(10000,99999999)?></h3>
		<div class="form-row mb-4">
			<div class="col">
				<INPUT id="NAME"  maxlength="100" size="12" name="NAME"  autocomplete="off" class="form-control" placeholder="Applicant's Name" required>
			</div>
			<div class="col">
				<INPUT id="EMAIL"  maxlength="100" size="12" name="EMAIL"  autocomplete="off" class="form-control" placeholder="Applicant's Email" required>
			</div>
		</div>		
		
		<div class="form-row mb-4">
			<div class="col">
				<INPUT id="MOBILE"  maxlength="10" size="12" name="MOBILE"  autocomplete="off" class="form-control" placeholder="Mobile number" required>
			</div>
			<div class="col">
				<select name="exam" class="browser-default custom-select">
					<option value="lvl" disabled selected>Level</option>
					<option value="1">N1</option>
					<option value="2">N2</option>
					<option value="3">N3</option>
					<option value="4">N4</option>
					<option value="5">N5</option>
				</select>
			</div>
		</div>
		
		
		<!-- <p><B>LEVEL:</B></p>

<div>
  <input type="radio" id="N1" name="exam" value="1"  required>
  <label for="N1">N1</label>
</div>
<div>
  <input type="radio" id="N2" name="exam" value="2">
  <label for="N2">N2</label>
</div>
<div>
  <input type="radio" id="N3" name="exam" value="3">
  <label for="N3">N3</label>
</div>
<div>
  <input type="radio" id="N4" name="exam" value="4">
  <label for="N4">N4</label>
</div>
<div>
  <input type="radio" id="N5" name="exam" value="5">
  <label for="N5">N5</label>
</div> -->

		<!-- <table border="0">
			<tbody>
				<tr hidden>
					<th>S.No</th>
					<th>Exam</th>
					<th>Amount</th>
				</tr>
				<tr hidden>
					<td>1</td>
					<td><label>ORDER_ID::*</label></td>
					<td><input id="ORDER_ID" tabindex="1" maxlength="20" size="20"
						name="ORDER_ID" autocomplete="off"
						value="<//?php echo  "ORDS" . rand(10000,99999999)?>">
					</td>
				</tr>
			
				<tr hidden>
					<td>3</td>
					<td><label>INDUSTRY_TYPE_ID ::*</label></td>
					<td><input id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail"></td>
				</tr>
				<tr hidden>
					<td>4</td>
					<td><label>Channel ::*</label></td>
					<td><input id="CHANNEL_ID" tabindex="4" maxlength="12"
						size="12" name="CHANNEL_ID" autocomplete="off" value="WEB">
					</td>
				</tr>
				<tr hidden>
					<td>2</td>
					<td><label>N5</label></td>
					<td><input title="TXN_AMOUNT" tabindex="10"
						type="text" name="TXN_AMOUNT"
						value="1">
					</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><input value="Pay Now" type="submit" onclick=""></td>
				</tr>
			</tbody>
		</table> -->
		<button type="submit" class="btn btn-dark btn-block">Pay now</button>

	</form>
	
<?php include('footer.php');?>
</body>
</html>
