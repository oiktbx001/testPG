<?php
	$objConnect = mysqli_connect("localhost","root","","modbus") or die(mysqli_error());
	if(isset($objConnect)){
		echo " " ;
	}
	 $strSQL = "SELECT NameDV FROM device ";

	$objQuery = mysqli_query($objConnect,$strSQL) or die (mysqli_error());

	while ($obResult = mysqli_fetch_array($objQuery)) 
		{
			$jx[] = array
			(
			'Name' =>$obResult['NameDV'],
			);
		
		}

		mysqli_close($objConnect); 
		//$json_data=array('rows' => $jx);
		$json = json_encode($jx);
		// $json = 
		// '{ "CustomerID":"C004",
		//     "Name":"Chalee Angel",
		//     "CountryCode":"US",
		//     "Budget":"4000000",
		//     "Used":"100000"
		// }';
		echo $json;
			
	
?>