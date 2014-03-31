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
	
	function escape_all($row, $conn)
	{
		$row2 = array();
		foreach($row as $key => $value){
			$row2[$key] = $conn->real_escape_string($value);
		}
		
		return $row2;
		
	}
	//$conn = GetConnection();
	//print_r($conn);
	//print_r('test');
