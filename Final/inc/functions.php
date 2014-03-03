<?php

	include_once 'password.php';
	function GetConnection()
	{
		global $password;
				
		$conn = mysqli_connect('localhost','neou49', $password, 'neou49_db');
		
	//	echo(mysqli_connect_error($conn));
	//	echo 'called';
		return $conn;
	}
	
	function fetch_all($sql){
		$conn = GetConnection();
		$result = $conn->query($sql);
		
		$arr = array();
		
		while ($row = $result->fetch_assoc()){
			$arr[] = $row;
		}
		
		$conn->close();
		
		return $arr;
	}

	//$conn = GetConnection();
	//print_r($conn);
	//print_r('test');
