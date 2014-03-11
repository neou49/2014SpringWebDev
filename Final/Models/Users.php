<?php
	include_once __DIR__ . '/../inc/functions.php';
	
	// C.R.U.D: Create Read Update Delete
	class Users {
		// Read
		static public function Get($id = null)
		{
			if ($id == null){
				// Get all records
				//return fetch_all("SELECT * FROM 2014Spring_Users");
				return fetch_all("SELECT U.*, K.Name as UserType_Name FROM 2014Spring_Users U JOIN 2014Spring_Keywords K ON U.UserType = K.id");
			}else{
				// Get one record
			}
		}
		
		// Create
		static public function Create($row)
		{
			$conn = GetConnection();
			$sql = "INSERT INTO 2014Spring_Users (FirstName, LastName) VALUES('$row[FirstName]', '$row[LastName]')";
			$result = $conn->query($sql);
			
			$arr = array();
			
			while ($row = $result->fetch_assoc()){
				$arr[] = $row;
		}
		
		$conn->close();
		
		return $arr;
		}
		
		
		static public function Blank()
		{
			return array('id' => null);
		}
		
		static public function Update($row)
		{
			
		}
		
		static public function Delete($id)
		{
			
		}
		
		static public function Validate($row)
		{
			
		}
	}
