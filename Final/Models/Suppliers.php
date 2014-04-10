<?php
	include_once __DIR__ . '/../inc/functions.php';
	
	// C.R.U.D: Create Read Update Delete
	class Suppliers {
		// Read
		static public function Get($id = null)
		{
			$sql = "SELECT *, Name as Header FROM 2014Spring_Suppliers ";
			if ($id == null){
				// Get all records
				return fetch_all($sql);
			}else{
				// Get one record
				$sql .= " WHERE id = $id ";
				if (($results = fetch_all($sql)) && (count($results) > 0)){
					return $results[0];
				}else{
					return null;
				}
			}
		}
		
		// Create
		static public function Create($row)
		{
			$conn = GetConnection();
			$sql = "INSERT INTO 2014Spring_Suppliers 
					(Name) 
					VALUES('$row[Name]')";
			//echo $sql;
			$result = $conn->query($sql);
			$error = $conn->error;
			$conn->close();
		
			//return true;
			return $error ? array('sql error' => $error) : false;
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
							
			//echo $sql;
			$result = $conn->query($sql);

			$error = $conn->error;
			
			if (!$error && empty($row['id'])){
				$row['id'] = $conn->insert_id;
			}
			$conn->close();
		
			//return true;
			return $error ? array('sql error' => $error) : false;
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
			$conn = GetConnection();
			
			$sql = "DELETE FROM 2014Spring_Suppliers WHERE id = $id";
			//echo $sql;
			$result = $conn->query($sql);
			$error = $conn->error;
			$conn->close();
		
			return $error ? array('sql error' => $error) : false;
		}
		
		// Validate
		static public function Validate($row)
		{			
			$errors = array();
			if (empty($row['Name'])) $errors['Name'] = "is required";
						
			return count($errors) > 0 ? $errors : false ;
		}
	}
