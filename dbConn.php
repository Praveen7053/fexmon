<?php
		//connection to database
		$db = mysqli_connect("localhost","root","","fexmone");
		
		//check Connection
		if (!$db){
			die("Error Could not connect. " . mysqli_connect_error());
		}
		
?>