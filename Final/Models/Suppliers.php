<?php
	include_once __DIR__ . '/../inc/functions.php';
	
	// C.R.U.D: Create Read Update Delete
	class Suppliers {
		// Read
		static public function Get($id = null)
		{
			$sql = "SELECT *, Name as Header FROM 2014Spring_Suppliers ";
			return CheckIdBeforeFetchAll($sql, $id);
		}
		
		// Create
		static public function Create($row)
		{
			$sql = "INSERT INTO 2014Spring_Suppliers 
					(Name) 
					VALUES('$row[Name]')";		
		}
		
		// Save 
		static public function Save(&$row)
		{
			$conn = GetConnection();
				
			$row2 = escape_all($row, $conn);			
							
			if (!empty($row['id'])){
				$sql = "UPDATE 2014Spring_Suppliers 
						SET Name = '$row2[Name]'
						WHERE id = '$row2[id]'
							";			
			} else {
			$sql = "INSERT INTO 2014Spring_Suppliers 
					(Name) 
					VALUES('$row2[Name]')";
			}
							
			return ValidateSqlQuery($sql, __METHOD__, $row);	
		}
		
		
		// Blank
		static public function Blank()
		{
			return array('id' => null);
		}
		
		// Update
		static public function Update($row)
		{
			
		}
		
		// Delete
		static public function Delete($id)
		{			
			$sql = "DELETE FROM 2014Spring_Suppliers WHERE id = $id";
			return ValidateSqlQuery($sql, __METHOD__);	
		}
		
		// Validate
		static public function Validate($row)
		{			
			$errors = array();
			if (empty($row['Name'])) $errors['Name'] = "is required";
						
			return count($errors) > 0 ? $errors : false ;
		}
	}
