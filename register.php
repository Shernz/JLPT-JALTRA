<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <form action="insert.php" method="post">
        <input type="text" name="first" id="" placeholder="First Name" required>    
        <input type="text" name="last" id="" placeholder="Last Name" required>
        <input type="email" name="email" id="" placeholder="Email" required>
        <input type="text" name="phone" id="" placeholder="Contact number" required>
        <ul>
            <label for="sex">Sex</label>
            <li>
                <input type="radio" name="sex" id="" required> 
                <label for="male" value="male">Male</label>
            </li>
            <li>
                <input type="radio" name="sex" id="">
                <label for="female" value="female">Female</label> 
            </li>
            <li>
               <input type="radio" name="sex">
               <label for="others">Rather not specify</label>
            </li>
            <input type="date" name="dob" required>
        </ul>
        <select name="level" id="">
            <option value="level" disabled selected>Select the level</option>
            <option value="N1">N1</option>
            <option value="N2">N2</option>
            <option value="N3">N3</option>
            <option value="N4">N4</option>
            <option value="N5">N5</option>
        </select>
        <!-- captcha -->
        <label>password :
  <input name="pass" id="password" type="password" onkeyup='check();' required />
</label>
<br>
<label>confirm password:
  <input type="password" name="conf" id="confirm_password"  onkeyup='check();'  required/> 
  <span id='message'></span>
    <input type="submit" onSubmit="return submit();">
    </form>
</body>
</html>
<script>
    var check = function() {
  if (document.getElementById('password').value ==
    document.getElementById('confirm_password').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'matching';
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'not matching';
  }
}
function submit(){
            if(document.getElementById('message').style.color == 'green'){
                return true;
           }
           else{
              
               return false;
           }
    }
  </script>  