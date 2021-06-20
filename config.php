<?php

	$conn = mysqli_connect('localhost','root','','users_data');

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}else{
		return $conn;
	}
	

?>