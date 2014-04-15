<?php
	include_once __DIR__ . '/../inc/functions.php';
	
	// C.R.U.D: Create Read Update Delete
	class Users {
		// Read
		static public function Get($id = null)
		{
			$sql = "SELECT U.*, K.Name as UserType_Name, CONCAT(U.FirstName,' ',U.LastName) as Header 
					FROM 2014Spring_Users U JOIN 2014Spring_Keywords K ON U.UserType = K.id
					";
			return CheckIdBeforeFetchAll($sql, $id);
			}
		
		// Create
		static public function Create($row)
		{
			$sql = "INSERT INTO 2014Spring_Users 
					(FirstName, LastName, Password, fbid, UserType) 
					VALUES('$row[FirstName]', '$row[LastName]', '$row[Password]','$row[fbid]','$row[UserType]')";
			return ValidateSqlQuery($sql, __METHOD__);		
		}
		
		// Save 
		static public function Save(&$row)
		{
			$conn = GetConnection();
			
			$row2 = escape_all($row, $conn);			
							
			if (!empty($row['id'])){
				$sql = "UPDATE 2014Spring_Users
						SET FirstName = '$row2[FirstName]',
							LastName = '$row2[LastName]',
							Password = '$row2[Password]',
							fbid = '$row2[fbid]',
							UserType = '$row2[UserType]'
						WHERE id = '$row2[id]'
							";			
			} else {
			$sql = "INSERT INTO 2014Spring_Users 
					(FirstName, LastName, Password, fbid, UserType) 
					VALUES('$row2[FirstName]', '$row2[LastName]', '$row2[Password]','$row2[fbid]','$row2[UserType]')";
			}
				
			return ValidateSqlQuery($sql, __METHOD__, $row);		
		
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
			$sql = "DELETE FROM 2014Spring_Users WHERE id = $id";
			
			return ValidateSqlQuery($sql, __METHOD__);
			
		}
		
		static public function Validate($row)
		{
			$errors = array();
			if (empty($row['FirstName'])) $errors['FirstName'] = "is required";
			if (empty($row['LastName'])) $errors['LastName'] = "is required";
			
			if (!is_numeric(($row['UserType']))) $errors['UserType'] = "must be a number";
			if (empty($row['UserType'])) $errors['UserType'] = "is required";
			
			return count($errors) > 0 ? $errors : false ;
		}
	}
