	<?php
	
	$objConnect = mysqli_connect("localhost","root","","modbus") or die(mysqli_error());
	if(isset($objConnect)){
		echo " " ;
	}

	//mysqli_set_charset($objConnect,"utf8");

		$strSQL =  " UPDATE device 
					SET NameDV = CASE NumberDV
					WHEN 1 THEN '$_POST[data0]'
					WHEN 2 THEN '$_POST[data1]'
					WHEN 3 THEN '$_POST[data2]'
					WHEN 4 THEN '$_POST[data3]'
					WHEN 5 THEN '$_POST[data4]'
					WHEN 6 THEN '$_POST[data5]'
					WHEN 7 THEN '$_POST[data6]'
					WHEN 8 THEN '$_POST[data7]'
					WHEN 9 THEN '$_POST[data8]'
					WHEN 10 THEN '$_POST[data9]'

					END
					WHERE NumberDV IN (1,2,3,4,5,6,7,8,9,10)" ;



	 $objQuery = mysqli_query($objConnect,$strSQL) or die (mysqli_error());

	 echo "บันทึกสำเร็จ";
		// echo $_POST["data0"],
		// 	$_POST["data1"],
		// 	$_POST["data2"],
		// 	$_POST["data3"],
		// 	$_POST["data4"],
		// 	$_POST["data5"],
		// 	$_POST["data6"],
		// 	$_POST["data7"],
		// 	$_POST["data8"],
		// 	$_POST["data9"];

	


			
	
?>