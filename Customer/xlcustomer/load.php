<?php
	$db=new PDO('mysql:host=localhost;dbname=dbcustomer','root','');
$db->exec("set names 'utf8'");// m ko ra la do thieu cai dong nay ukm
	$sql="SELECT * FROM `customers` ";
	$result=$db->query($sql);
    $arr=array();
    while($r=$result->fetch(PDO::FETCH_ASSOC)){
		$arr[]=$r;
    }
    echo $json_respone= json_encode($arr);
	// cai nay ne m no load ra ma k
?>