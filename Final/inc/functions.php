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
	
	function CheckIdBeforeFetchAll($sql, $id = null, $category_id = null)
	{
	
		if($id)
		{
			// Get one record
			$sql .= " WHERE U.id = $id ";
			if (($results = fetch_all($sql)) && (count($results) > 0)){
				return $results[0];
			}else{
				return null;
			}	
		}elseif($category_id){
				$sql .= " WHERE Category_Keyword_id = $category_id ";
				return fetch_all($sql);
		}else{
			//	Get all records
			return fetch_all($sql);
		}		
	}
	
	function escape_all($row, $conn)
	{
		$row2 = array();
		foreach($row as $key => $value){
			$row2[$key] = $conn->real_escape_string($value);
		}
		
		return $row2;
		
	}
	
	function ValidateSqlQuery($sql, $methodName, $row = null)
	{
		$conn = GetConnection();
		//echo $sql;
		$result = $conn->query($sql);

		$error = $conn->error;
		
		if ($methodName = 'save'){
			if (!$error && empty($row['id'])){
				$row['id'] = $conn->insert_id;
			}
		}
				
		$conn->close();
	
		//return true;
		return $error ? array('sql error' => $error) : false;
	}
	
	function Get($controllerName, $request = null, $category_id = null)
	{
		switch($controllerName){
			case 'Users':
				$results = Users::Get($request, $category_id);
				break;
			case 'Suppliers':
				$results = Suppliers::Get($request, $category_id);
				break;
			case 'Products':
				$results = Products::Get($request, $category_id);
				break;
			case 'ProductKeywords':
				$results = ProductKeywords::Get($request, $category_id);
				break;
			case 'Orders':
				$results = Orders::Get($request, $category_id);
				break;
			case 'OrderItems':
				$results = OrderItems::Get($request, $category_id);
				break;
			case 'Keywords':
				$results = Keywords::Get($request, $category_id);
				break;
			case 'ContactMethods':
				$results = ContactMethods::Get($request, $category_id);
				break;
			case 'Addresses':
				$results = Addresses::Get($request, $category_id);
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
	
	// $conn = GetConnection();
	// print_r($conn);
	// print_r('test');
