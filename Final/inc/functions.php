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
	
	function Get($controllerName, $request = null)
	{
		switch($controllerName){
			case 'Users':
				$results = Users::Get($request);
				break;
			case 'Suppliers':
				$results = Suppliers::Get($request);
				break;
			case 'Products':
				$results = Products::Get($request);
				break;
			case 'ProductKeywords':
				$results = ProductKeywords::Get($request);
				break;
			case 'Orders':
				$results = Orders::Get($request);
				break;
			case 'OrderItems':
				$results = OrderItems::Get($request);
				break;
			case 'Keywords':
				$results = Keywords::Get($request);
				break;
			case 'ContactMethods':
				$results = ContactMethods::Get($request);
				break;
			case 'Addresses':
				$results = Addresses::Get($request);
				break;
		}
		return $results;
	}
	
	function Create($controllerName)
	{
		
	}
	
	function Save($controllerName, $request)
	{
		switch($controllerName){
			case 'Users':
				$results = Users::Save($request);
				break;
			case 'Suppliers':
				$results = Suppliers::Save($request);
				break;
			case 'Products':
				$results = Products::Save($request);
				break;
			case 'ProductKeywords':
				$results = ProductKeywords::Save($request);
				break;
			case 'Orders':
				$results = Orders::Save($request);
				break;
			case 'OrderItems':
				$results = OrderItems::Save($request);
				break;
			case 'Keywords':
				$results = Keywords::Save($request);
				break;
			case 'ContactMethods':
				$results = ContactMethods::Save($request);
				break;
			case 'Addresses':
				$results = Addresses::Save($request);
				break;
		}
		return $results;
	}
	
	function Delete($controllerName, $request)
	{
		switch($controllerName){
			case 'Users':
				$results = Users::Delete($request);
				break;
			case 'Suppliers':
				$results = Suppliers::Delete($request);
				break;
			case 'Products':
				$results = Products::Delete($request);
				break;
			case 'ProductKeywords':
				$results = ProductKeywords::Delete($request);
				break;
			case 'Orders':
				$results = Orders::Delete($request);
				break;
			case 'OrderItems':
				$results = OrderItems::Delete($request);
				break;
			case 'Keywords':
				$results = Keywords::Delete($request);
				break;
			case 'ContactMethods':
				$results = ContactMethods::Delete($request);
				break;
			case 'Addresses':
				$results = Addresses::Delete($request);
				break;
		}
		return $results;
	}
	
	function Validate($controllerName, $request)
	{

		switch($controllerName){
			case 'Users':
				$results = Users::Validate($request);
				break;
			case 'Suppliers':
				$results = Suppliers::Validate($request);
				break;
			case 'Products':
				$results = Products::Validate($request);
				break;
			case 'ProductKeywords':
				$results = ProductKeywords::Validate($request);
				break;
			case 'Orders':
				$results = Orders::Validate($request);
				break;
			case 'OrderItems':
				$results = OrderItems::Validate($request);
				break;
			case 'Keywords':
				$results = Keywords::Validate($request);
				break;
			case 'ContactMethods':
				$results = ContactMethods::Validate($request);
				break;
			case 'Addresses':
				$results = Addresses::Validate($request);
				break;
		}
		return $results;
	}
	//$conn = GetConnection();
	//print_r($conn);
	//print_r('test');
