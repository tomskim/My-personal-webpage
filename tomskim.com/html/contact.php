<!DOCTYPE html>

<html lang="en-US">

	<head>
	
	  <meta name="description" content="Personal Website">
	  <meta name="keywords" content="Waterloo, University Student, Beginner, Coder, Musician">
	  <meta name="author" content="Thomas Kim">
	  <meta charset="utf-8">
	  <meta content="text/html">
	  
	  <title> Thomas Kim </title>
	  <script src="js/modernizr-custom.js"></script>
	  <link href='https://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
	  <link rel="shortcut icon" href="../img/favicon.ico">
	  <link rel="stylesheet" href="../css/contact.css" />
	 
	</head>
	
	<body>
		
	<div class="head">
	
		<h1 id="heading"> <a href="../index.html"> Thomas Kim </a> </h1> 
		
	</div>
	
	<div class="list">

		<nav class="hnav">
			
			<ul class="ulist">
				
				<li> <a href="../html/projects.html">Projects</a></li>
				<li> <a href="../downloads/resume.pdf" target="_blank">Resume</a></li>
				<li><a href="https://github.com/tomskim" target="_blank">Github</a></li>
				<li> <a href="../html/contact.php" class="contact">Contact</a></li>
					
			</ul>
				
		</nav>
		
	</div>
	
	<div class="contacts">
	
		<p> &#9993; Email: s353kim@uwaterloo.ca </p>
		
		<p> &#9742; Phone: 1-519-729-2064 </p>
		
		<h3> <i> or</i> Leave a message, here! </h3>
		
		<form action="save.php" method="post" class="send">
			
			<p>
				<label for="name"> Name: </label>
				<input id="name" name="name"/>
			</p>
			
			<p>
				<label for="email"> E-mail: </label>
				<input id="email" name="email"/>
			</p>
		
			<p>
				<label for="comments"> Comments: </label>
				<textarea id="comments" name="comments"> </textarea>
			</p>
		
			<p> <input type="submit" value="Send" /> </p>
		
		</form>
	
	</div>
	
	</body>
	
</html>