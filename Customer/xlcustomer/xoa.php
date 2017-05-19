<?php
	$id=$_GET['id'];
	$db = new PDO('mysql:host=localhost;dbname=Dbcustomer', 'root', '');
	$sql="DELETE FROM customers WHERE id='$id'";
	$result=$db->exec($sql);
	if($result)
		header('location:../listcustomer.php');
?>