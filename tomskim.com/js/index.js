<!doctype html>

<html lang="en-US">
	<head>
		<meta charset="uft-8">
	</head>
	
	<body>
	<script>
	var YourName = prompt("What is your name?");
	
	if (YourName ! = null) {
		document.getElementByID("sayHello").innerHTML = "Hello" + YourName;
	} else {
		alert("Please enter your name next time")
	}
	</script>

	<noscript>
		<h3> JavaScript is missing </h3>
	</noscript>
	
	</body>
	
</html>