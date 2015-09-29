<?php
	$pass = $_POST["data1"];
	if ($pass == "123456") {
		echo "TRUE";
		 // header( "location: http://localhost/phonegap/www/menu.html" );
	}
	else
	{
		echo "FALE";

	}
?>