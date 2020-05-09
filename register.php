<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="jumbotron">
      <h3>Before you proceed to download the form, we would like to know a few things about you in-order to contact in time of need</h3>
    </div>
    <div class="form">
    <form action="insert.php" method="post">
      <div class="form-row mb-4">
        <div class="col">
          <input type="text" name="first" class="form-control" placeholder="First Name" required>
        </div>
        <div class="col">
          <input type="text" name="last" class="form-control" placeholder="Last Name" required>
        </div>
      </div>

        <input type="email" name="email" class="form-control mb-4" placeholder="Email" required>
        <input type="text" name="phone" class="form-control mb-4"  placeholder="Contact number" required>

      <div class="form-row mb-4">
        <div class="col">
          <ul>
            <label for="sex">Sex</label>
            <li>
                <input type="radio" name="sex" required> 
                <label for="male" value="male">Male</label>
            </li>
            <li>
                <input type="radio" name="sex" >
                <label for="female" value="female">Female</label> 
            </li>
            <li>
                <input type="radio" name="sex">
                <label for="others">Rather not specify</label>
            </li>  
          </ul>
        </div> 
        <div class="col">
          <input type="date" name="dob" class="form-control" placeholder="Date of birth" required>
        </div> 
        <div class="col">
          <select name="level" class="browser-default custom-select">
            <option value="level" disabled selected>Select the level</option>
            <option value="N1">N1</option>
            <option value="N2">N2</option>
            <option value="N3">N3</option>
            <option value="N4">N4</option>
            <option value="N5">N5</option>
          </select>
        </div>
      </div>
      
      
      
        <!-- captcha -->
        <div class="form-row mb-4">
          <div class="col">
            <input name="pass" class="form-control" id="password" type="password" onkeyup='check();' placeholder="Password" required />
          </div>
          <div class="col">
            <input type="password" class="form-control" name="conf" id="confirm_password"  onkeyup='check();' placeholder="Confirm Password" required/> 
          </div>
        </div>
        

        
        <span id='message'></span>
        <input type="submit" onSubmit="return submit();" class="btn btn-dark btn-block">
    </form>
    </div>
    
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