
<html>
<head>
		<title>Student Express</title>
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  	<link rel="stylesheet" href="css/form.css" type="text/css">
</head>

<body>
<div class="body-content">
  	<div class="module">
    		<h2>Create an account</h2>
    				<form action="regvalidation.php" method="post" autocomplete="off">
								<div class="form-group">
      					<input type="text" placeholder="User Name" name="username" required/>
								<input type="email" placeholder="Email" name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"/>
								<input type="password" id="password" placeholder="Password" name="password" autocomplete="new-password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"/>
      					<input type="password" id="confirm_password" placeholder="Confirm Password" name="confirmpassword" autocomplete="new-password" required/>
      				</div><div class="avatar"><label>Select your avatar: </label>
      					<input type="file" name="avatar"/>
								</div>
      			<button type="submit" value="Register" class="btn btn-block btn-primary" style="width:260px">Register</button>
    			<a class="user" href='login.php'>Already a User!!</a>
    </form>
  </div>
</div>
<!--<div id="message">
  <h3>Password must contain the following:</h3>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
</div>-->
<script>
var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>
</body>
</html>
