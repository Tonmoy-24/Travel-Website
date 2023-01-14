<?php
    $con = mysqli_connect('localhost','root');
    mysqli_select_db($con, 'contact');
	$fname=null;
	$lname=null;
	$email = null;
	$text = null;
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$text = $_POST['text'];

	$insert = "INSERT INTO information(fname,lname,email,text) values('$fname', '$lname', '$email', '$text')";
	mysqli_query($con, $insert);

	include 'index.html';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
	<style>
		p{
            text-align: center;
            font-size: 20px;
            color: #202020;
            font-weight: 500;
        }
	</style>
</head>
<body>
	<p>Successfully Done</p>
</body>
</html>