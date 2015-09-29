<?php
	$objConnect = mysqli_connect("localhost","root","","modbus") or die(mysqli_error());
	if(isset($objConnect)){
		echo " " ;
	}
	
	$username = $_POST['textbox'];
	$Password = $_POST['textb'];
	$status =  $_POST['status'];

	$sql = "INSERT INTO userc (NameU, Password, status) VALUES ";
	
	foreach($username as $key => $val){
	 $sql .= "('$val','$Password[$key]','$status[$key]'),";
	}

	$sqls = substr($sql, 0, -1);

	echo $sqls;

	
	



	$objQuery = mysqli_query($objConnect,$sqls) or die (mysqli_error());
	if (empty($objQuery)) {
		echo'null';
	}
	// while ($obResult = mysqli_fetch_array($objQuery)) 
	// 	{
	// 		$jx[] = array
	// 		(
	// 		'Name' =>$obResult['NameU'],
	// 		'Password' =>$obResult['Password'],
	// 		'status' =>$obResult['status'],

	// 		);
		
	// 	}

	// 	mysqli_close($objConnect); 
	// 	//$json_data=array('rows' => $jx);
	// 	if(!empty($jx)){
	// 		$json = json_encode($jx);
	// 		echo $json;
	// 		}else{
	// 			echo '0';
	// 		}
		// echo $_POST['textbox1'],$_POST['status1'],$_POST['textb1'];

		// for ($i=1; $i < $_POST["textbox$i"] ; $i++){
		// 	$user[$i-1] = $_POST["textbox$i"];
		// }
	// $i = 1;
	// $user[0] = $_POST["textbox$i"];
	// echo $user[0];

	
		
	
?>