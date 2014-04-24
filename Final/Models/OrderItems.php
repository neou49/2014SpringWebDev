<?php
	include_once __DIR__ . '/../inc/functions.php';
	
	// C.R.U.D: Create Read Update Delete
	class OrderItems {
		// Read
		static public function Get($id = null)
		{
			$sql = "SELECT * FROM 2014Spring_Order_Items OI
					JOIN 2014Spring_Or";
			return CheckIdBeforeFetchAll($sql, $id);				
			
		}
		
		// Create
		static public function Create($row)
		{
			$sql = "INSERT INTO 2014Spring_OrderItems
					(User_id, Address_id) 
					VALUES('$row[User_id]', '$row[Address_id]')";
			
			return ValidateSqlQuery($sql, __METHOD__);		
		}
		
		// Save 
		static public function Save(&$row)
		{
			$conn = GetConnection();
			
			$row2 = escape_all($row, $conn);			
							
			if (!empty($row['id'])){
				$sql = "UPDATE 2014Spring_OrderItems
						SET User_id = '$row2[User_id]',
							Address_id = '$row2[Address_id]',							
						WHERE id = '$row2[id]'
							";			
			} else {
			$sql = "INSERT INTO 2014Spring_OrderItems
					(User_id, Address_id) 
					VALUES('$row2[User_id]', '$row2[Address_id]')";
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
			$sql = "DELETE FROM 2014Spring_OrderItems WHERE id = $id";
			return ValidateSqlQuery($sql, __METHOD__);	
		}
		
		static public function Validate($row)
		{
			$errors = array();
			if (!is_numeric(($row['User_id']))) $errors['User_id'] = "must be a number";
			if (empty($row['User_id'])) $errors['User_id'] = "is required";		
			
			if (!is_numeric(($row['Address_id']))) $errors['Address_id'] = "must be a number";
			if (empty($row['Address_id'])) $errors['Address_id'] = "is required";
			
			return count($errors) > 0 ? $errors : false ;
		}
	}