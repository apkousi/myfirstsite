<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Student Express</title>
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<link rel="stylesheet" href="css/contact.css"></link>
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div>
    <header class="head">
      <span><img class="logo" src="img/logo.jpg"></span>
      <p class="hcontent1"><b>Students Guide</b></p>
      <p class="hcontent2">Get ready for programming journey</p>
    </header>
  </div>
  <div class="sidebar">
    <a href="index.php">HOME</a>
    <a href="welcome.php">ABOUT</a>
		<a href="course.php">COURSE</a>
		<a href="contact.php">CONTACT</a>
    <img src="img/a.png" width="350" height="360">
  </div>
    <div class="container">
      <h1 style="text-align:center; padding-left:80px;">CONTACT US</h1>
      <div class="vl">
        <span class="vl-innertext">or</span>
      </div>
    <div class="row">
      <div class="column1">
        <form action="" method="post" autocomplete="off">
          <div class="form-group">
            <label>Name</label>
            <input type="text" id="name" placeholder="UserName" name="username" required />
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="email" id="email" placeholder="Email" name="email" required />
          </div>
          <div class="form-group">
            <label>Phone</label>
            <input type="tel" id="phone" placeholder="Phone number" name="phone" required />
        </div>
        <div class="form-group">
          <label>Message</label><br/>
           <textarea class="message" rows="6" cols="20"></textarea>
        </div>
        <div class="form-group">
          <button type="submit" onclick="myFunction()" class="btn btn-block btn-primary" style="width:200px">Send</button>
        </div>
        </form>
      </div>
      <div class="column2">
        <div class="login" id="login">
        <a id="facebook" href="https://www.facebook.com/">
          	<span class="space"><i class="fa fa-facebook"></i>
  			Login with Facebook</span>
      </a><br/>
      	<a id="skype" href="https://www.skype.com/en/">
          <i class="fa fa-skype"></i>
  				<span>Login with Skype</span>
  			</a><br/>
        <a id="twitter" href="https://twitter.com/login?lang=en">
          <i class="fa fa-twitter"></i>
  				<span>Login with Twitter</span>
        </a><br/>
        <a id="google" href="https://twitter.com/login?lang=en">
          <i class="fa fa-google"></i>
  				<span>Login with Google</span>
        </a>
      </div>
      </div>
    </div>
<script>
    function myFunction() {
      alert("Message has been sent successfully!!!");
    }
    </script>
</div>
</body>
</html>
