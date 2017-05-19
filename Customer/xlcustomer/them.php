<?php
    $fname=$_POST['firstName'];
    $lname=$_POST['lastName'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $add=$_POST['address'];
    $city=$_POST['city'];
    $state=$_POST['state']; 
    $zip=$_POST['zip'];
	$db = new PDO('mysql:host=localhost;dbname=Dbcustomer', 'root', '');
	$sql="insert into customers(fname,lname,gender,email,address,city,state,zip) values('$fname','$lname','$gender','$email','$add','$city','$state','$zip')";
	$result=$db->exec($sql);
	if($result)
	{
		header('location:../Index.php');
	}
	else
		header('loaction:../Createcustomer.php');
?>