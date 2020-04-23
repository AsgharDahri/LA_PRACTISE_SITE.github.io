<?php
	$con=mysqli_connect('localhost','root','','la');
	if($con)
	{
		echo "Connection Successful";
	}
	else
	{
		echo "DATA BESE ERROR";
	}
	mysqli_select_db($con,'userinfodata');
	$user=$_POST['user'];
	$email=$_POST['email'];
	$comments=$_POST['comments'];


	mysqli_query($con,"INSERT INTO `userinfodata`(`id`, `user`, `email`, `comment`) VALUES ('1','$user','$email','$comments')");
	
	
 ?>


