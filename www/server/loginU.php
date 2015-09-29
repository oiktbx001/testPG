<?php
	 $objConnect = mysqli_connect("localhost","root","","modbus") or die(mysqli_error());

	$strSQL = "SELECT * FROM userc WHERE NameU = '".mysqli_real_escape_string($objConnect,$_POST['duser'])."' 
	and Password = '".mysqli_real_escape_string($objConnect,$_POST['dpass'])."'";
	
	$objQuery = mysqli_query($objConnect,$strSQL);

	$objResult = mysqli_fetch_array($objQuery,MYSQLI_BOTH);
	if(!$objResult)
	{
			echo "Username and Password Incorrect!";
	}
	else
	{
			$_SESSION["UserID"] = $objResult["NameU"];
			$_SESSION["Status"] = $objResult["status"];

			session_write_close();
			
			if($objResult["status"] == "admin")
			{
				echo 'admin';

			}
			else
			{
				echo 'user';
			}
	}
	mysqli_close($objConnect);
	
	
?>