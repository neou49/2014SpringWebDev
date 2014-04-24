<?php
	include_once __DIR__ . '/../inc/functions.php';
	
	// C.R.U.D: Create Read Update Delete
	class ProductKeywords {
		// Read
		static public function Get($id = null)
		{
			$sql = "SELECT P.Name AS Product_Name, K.Name AS Keyword_Name, CONCAT(P.Name,' - ',K.Name) AS Header 
					FROM 2014Spring_Product_Keywords PK 
					JOIN 2014Spring_Products P ON PK.Product_id = P.id
					JOIN 2014Spring_Keywords K ON PK.Keyword_id = K.id
					";
			return CheckIdBeforeFetchAll($sql, $id);				
			
		}
		
		// Create
		static public function Create($row)
		{
			$sql = "INSERT INTO 2014Spring_Product_Keywords
					(Product_id, Keyword_id) 
					VALUES('$row[Product_id]', '$row[Keyword_id]')";
			
			return ValidateSqlQuery($sql, __METHOD__);		
		}
		
		// Save 
		static public function Save(&$row)
		{
			$conn = GetConnection();
			
			$row2 = escape_all($row, $conn);			
							
			if (!empty($row['id'])){
				$sql = "UPDATE 2014Spring_Product_Keywords
						SET Product_id = '$row2[Product_id]',
							Keyword_id = '$row2[Keyword_id]',							
						WHERE id = '$row2[id]'
							";			
			} else {
			$sql = "INSERT INTO 2014Spring_Product_Keywords
					(Product_id, Keyword_id) 
					VALUES('$row2[Product_id]', '$row2[Keyword_id]')";
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
			$sql = "DELETE FROM 2014Spring_Product_Keywords WHERE id = $id";
			return ValidateSqlQuery($sql, __METHOD__);	
		}
		
		static public function Validate($row)
		{
			$errors = array();
			if (!is_numeric(($row['Product_id']))) $errors['Product_id'] = "must be a number";
			if (empty($row['Product_id'])) $errors['Product_id'] = "is required";		
			
			if (!is_numeric(($row['Keyword_id']))) $errors['Keyword_id'] = "must be a number";
			if (empty($row['Keyword_id'])) $errors['Keyword_id'] = "is required";
			
			return count($errors) > 0 ? $errors : false ;
		}
	}
		