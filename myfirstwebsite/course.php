<?php
session_start();
if(!isset($_SESSION['username'])){
  header('location:login.php');
  }
 ?>
<html>
<head>
	<title>Student Express</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/course.css"></link>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
  <div>
		<header class="head">
			<span><img class="logo" src="img/logo.jpg"></span>
			<p class="hcontent1"><b>Students Guide</b></p>
			<p class="hcontent2">Get ready for programming journey</p>
      <a class="logout" href="logout.php">LOGOUT</a>
		</header>
  </div>
  <div>
    <h1 class="welcome">WELCOME <?php echo $_SESSION['username']; ?> <h1>
  </div>
  <div class="sidebar" id="sidebar1">
      <a id="whatsapp" href="https://web.whatsapp.com/">
				<span class="space"><i class="fa fa-whatsapp" style="font-size:28px"></i>	Whatsapp
			</a>
      <a id="facebook" href="https://www.facebook.com/">
        	<span class="space"><i class="fa fa-facebook"></i>
			Facebook</span>
			</a>
    	<a id="skype" href="https://www.skype.com/en/">
        <i class="fa fa-skype"></i>
				<span>Skype</span>
			</a>
      <a id="twitter" href="https://twitter.com/login?lang=en">
        <i class="fa fa-twitter"></i>
				<span>Twitter</span>
			</a>
      <a id="plus" href="https://twitter.com/login?lang=en">
      <i class="fa fa-plus-circle" style="font-size: 30px;"></i>
      	<span></span>
    </a>

	</div>
  <div class="row">
    <div class="column">
       <h2><b>PYTHON</b></h2>
       <p>
       Python is an easy to learn, powerful programming language.
       It has efficient high-level data structures and a simple but effective approach to object-oriented programming.
       Python's elegant syntax and dynamic typing, together with its interpreted nature, make it an ideal language for scripting and rapid
       application development in many areas on most platforms.</p>
       <button class="button" onclick="window.location='https://www.tutorialspoint.com/python/'"><span>Read more</span></button>
     </div>
     <div class="column">
      <h2><b>JAVA</b></h2>
      <p>
     Java is a programming language and computing platform
     first released by Sun Microsystems in 1995.
     There are lots of applications and websites that will not work unless you have Java installed,
      and more are created every day. Java is fast, secure, and reliable. From laptops to datacenters,
       game consoles to scientific supercomputers, cell phones to the Internet, Java is everywhere!</p>
      <button class="button" onclick="window.location='https://www.javatpoint.com/java-tutorial'"><span>Read more</span></button>
    </div>
    <div class="column">
     <h2><b>JAVASCRIPT</b></h2>
     <p>
     JavaScript is a lightweight, interpreted programming language.
     It is complimentary to and integrated with Java. JavaScript is very easy to implement because it is integrated with HTML.
      This tutorial has been prepared for JavaScript beginners to help them understand the basic functionality of JavaScript to build dynamic web pages and web applications.</p>
     <button class="button" onclick="window.location='https://www.geeksforgeeks.org/javascript-tutorial/'"><span>Read more</span></button>
    </div>
  </div>
  <div class="row">
    <div class="column">
     <h2><b>SWIFT</b></h2>
     <p>
          Swift 4 is a new programming language developed by Apple Inc for iOS
     and OS X development. Swift 4 adopts the best of C and Objective-C,
      without the constraints of C compatibility. You’ll need Xcode 10.
      Swift 4 uses the same runtime as the existing Obj-C system on Mac OS and iOS, which enables Swift 4 programs to run on many existing iOS 6 and
      OS X 10.8 platforms.</p>
     <button class="button" onclick="window.location='https://www.raywenderlich.com/6338-swift-tutorial-part-1-expressions-variables-and-constants'"><span>Read more</span></button>
    </div>
    <div class="column">
       <h2><b>C#</b></h2>
       <p>
       This tutorial will introduce you to .NET framework using C# language.
        You will also learn to create a C Sharp based web application using .NET framework.
        This is a complete online course and covers topics like accessing data,
       classes & objects, file commands, window forms etc.
     The first version of the .Net framework was released in the year 2002.
      </p>
       <button class="button" onclick="window.location='https://www.guru99.com/c-sharp-tutorial.html'"><span>Read more</span></button>
     </div>
     <div class="column">
     <h2><b>C/C++</b></h2>
     <p>
       C++ is a statically-typed, free-form, (usually) compiled, multi-paradigm, intermediate-level general-purpose middle-level programming language.
       The main features of C language include low-level access to memory, simple set of keywords, and clean style, these features make C language suitable for system programming
       like operating system or compiler development.</p>
     <button class="button" onclick="window.location='https://www.geeksforgeeks.org/c-language-set-1-introduction/'"><span>Read more</span></button>
      </div>
    <div class="column">
     <h2><b>RUBY</b></h2>
     <p> Ruby is an object-oriented programming language developed by Yukihiro Matsumoto. Ruby is a dynamic programming language with a complex but at the same time expressive grammar.
       Ruby is inspired by other low level and object oriented programming languages like Lisp, Smalltalk, and Perl and uses syntax that is easy for C and Java programmers to learn.
    </p>
     <button class="button" onclick="window.location='https://www.studytonight.com/ruby/introduction-to-ruby'"><span>Read more</span></button>
     </div>
 </div>
</body>
</html>
