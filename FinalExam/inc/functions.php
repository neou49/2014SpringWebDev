<?php

	function GetConnection()
	{
		$password = 'FaceBooK';
				
		//$conn = mysqli_connect('localhost','neou49', $password, 'neou49_db');
		$conn = mysqli_connect('localhost', 'plotkinm', $password, 'plotkinm_db');
		
	//	echo(mysqli_connect_error($conn));
	//	echo 'called';
		return $conn;
	}	

	function fetch_all($sql){
		$conn = GetConnection();
		$results = $conn->query($sql);
		$error = $conn->error;
		if($error) return $error;

		$arr = array();

		while ($row = $results->fetch_assoc()) {
			$arr[] = $row;
		}

		$conn->close();

		return $arr;
	}
	function escape_all($row, $conn){
		$row2 = array();
		foreach ($row as $key => $value) {
			$row2[$key] = $conn->real_escape_string($value);
		}
		return $row2;
	}
