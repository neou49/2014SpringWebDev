<?php
	include_once __DIR__ . '/../inc/functions.php';
	
	$all_categories = 21;
	
	// C.R.U.D: Create Read Update Delete
	class Products {
		
		// Read
		static public function Get($id = null, $category_id = null)
		{
			$sql = "SELECT P.*, S.Name as Supplier_Name, K.Name as Category_Name, P.Name AS Header FROM 
					(2014Spring_Products P JOIN 2014Spring_Suppliers S ON P.Supplier_id = S.id) 
					JOIN 2014Spring_Keywords K ON P.Category_Keyword_id = K.id
					";
			
			return CheckIdBeforeFetchAll($sql, $id, $category_id);
		
		}
		
		// Create
		static public function Create($row)
		{
			$sql = "INSERT INTO 2014Spring_Products 
					(Supplier_id, Name, Price, Description, Picture_Url, Category_Keyword_id) 
					VALUES('$row[Supplier_id]', '$row[Name]', '$row[Price]','$row[Description]','$row[Picture_Url]','$row[Category_Keyword_id]'))";
			
			return ValidateSqlQuery($sql, __METHOD__);		
		}
		
		// Save 
		static public function Save(&$row)
		{
			$conn = GetConnection();
			
			$row2 = escape_all($row, $conn);			
							
			if (!empty($row['id'])){
				$sql = "UPDATE 2014Spring_Products
						SET Supplier_id = '$row2[Supplier_id]',
							Name = '$row2[Name]',
							Price = '$row2[Price]',
							Description = '$row2[Description]',
							Pricture_Url = '$row2[Pricture_Url]'
							Category_Keyword_id = '$row2[Category_Keyword_id]'
						WHERE id = '$row2[id]'
							";			
			} else {
			$sql = "INSERT INTO 2014Spring_Users 
					(Supplier_id, Name, Price, Description, Picture_Url, Category_Keyword_id) 
					VALUES('$row2[Supplier_id]', '$row2[Name]', '$row2[Price]','$row2[Description]','$row2[Picture_Url]','$row2[Category_Keyword_id]')";
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
			$sql = "DELETE FROM 2014Spring_Products WHERE id = $id";
			return ValidateSqlQuery($sql, __METHOD__);	
		}
		
		static public function Validate($row)
		{
			$errors = array();
			if (!is_numeric(($row['Supplier_id']))) $errors['Supplier_id'] = "must be a number";
			if (empty($row['Supplier_id'])) $errors['Supplier_id'] = "is required";
			
			if (empty($row['Name'])) $errors['Name'] = "is required";
			
			if (!is_numeric(($row['Price']))) $errors['Price'] = "must be a number";
			if (empty($row['Price'])) $errors['Price'] = "is required";
			
			if (empty($row['Description'])) $errors['Description'] = "is required";
			
			if (!is_numeric(($row['Category_Keyword_id']))) $errors['Category_Keyword_id'] = "must be a number";
			if (empty($row['Category_Keyword_id'])) $errors['Category_Keyword_id'] = "is required";
			
			return count($errors) > 0 ? $errors : false ;
		}
	}
		