<html>
<head>
	<title>Login Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
  <link rel="stylesheet" href="css/login.css" type="text/css">
</head>
<body>
<div class="body-content">
  <div class="module">
    <h2>Login Here</h2>
    <form action="loginvalidation.php" method="post" autocomplete="off">
			<div class="form-group">
        <label>UserName</label>
        <input type="text" placeholder="User Name" name="username" required />
			</div>
				<div class="form-group">
				<label>Password</label>
        <input type="password" placeholder="Password" name="password" autocomplete="new-password" required />
			</div>
      	<button type="submit" class="btn btn-block btn-primary" style="width:200px">Login</button>
        <label class="check"><input type="checkbox" checked="checked" name="remember"/> Remember me</label><br/>
				<span>Forgot <a class="psw" href="#">password?</a><p>
				<a class="user" href='regform.php'>Are You a New User!!</a></p></span>
    </form>
  </div>
</div>
</body>
</html>
