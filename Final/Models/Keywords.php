<?php
	include_once __DIR__ . '/../inc/functions.php';
	
	// C.R.U.D: Create Read Update Delete
	class Keywords {
		
		 static public function SelectionListFor($TypeId)
		{
			$sql = "SELECT id, Name FROM 2014Spring_Keywords WHERE Parent_id = $TypeId
					Order By Name";
			return fetch_all($sql);
		}
		
		// Read
		static public function Get($id = null)
		{
			$sql = "SELECT P.id AS PID, P.Name AS Parent_Keyword, C.id AS CID, C.Name AS Child_Keyword 
									FROM 2014Spring_Keywords P JOIN 2014Spring_Keywords C ON P.id = C.Parent_id; 
									";
			return CheckIdBeforeFetchAll($sql, $id);
			}
		
		// Create
		static public function Create($row)
		{
			$sql = "INSERT INTO 2014Spring_Keywords 
					(Parent_id, Name, Password, fbid, Parent_id) 
					VALUES('$row[Parent_id]', '$row[Name]')";
			return ValidateSqlQuery($sql, __METHOD__);		
		}
		
		// Save 
		static public function Save(&$row)
		{
			$conn = GetConnection();
			
			$row2 = escape_all($row, $conn);			
							
			if (!empty($row['id'])){
				$sql = "UPDATE 2014Spring_Keywords
						SET Parent_id = '$row2[Parent_id]',
							Name = '$row2[Name]',							
						WHERE id = '$row2[id]'
							";			
			} else {
			$sql = "INSERT INTO 2014Spring_Keywords 
					(Parent_id, Name, Password, fbid, Parent_id) 
					VALUES('$row2[Parent_id]', '$row2[Name]')";
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
			$sql = "DELETE FROM 2014Spring_Keywords WHERE id = $id";
			
			return ValidateSqlQuery($sql, __METHOD__);
			
		}
		
		static public function Validate($row)
		{
			$errors = array();			
			
			if (!is_numeric(($row['Parent_id']))) $errors['Parent_id'] = "must be a number";
			if (empty($row['Parent_id'])) $errors['Parent_id'] = "is required";
			
			if (empty($row['Name'])) $errors['Name'] = "is required";
			
			return count($errors) > 0 ? $errors : false ;
		}
	}
