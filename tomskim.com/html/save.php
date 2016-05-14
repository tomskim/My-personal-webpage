<?
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['comments'];

$email_message = "
Name:".$name."
Email: ".$email."
Message: ".$message."
";

mail("s353kim@uwaterloo.ca" , "New inquiry" , $email_message);
header("Location: success.php")

?>