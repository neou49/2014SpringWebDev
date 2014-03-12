<?php
	include_once __DIR__ . '/../inc/functions.php';
	
	// C.R.U.D: Create Read Update Delete
	class Products {
		// Read
		static public function Get($id = null)
		{
			if ($id == null){
				// Get all records
				return fetch_all("SELECT P.*, S.Name as Supplier_Name, K.Name as Category_Name FROM 
					(2014Spring_Products P JOIN 2014Spring_Suppliers S ON P.Supplier_id = S.id) 
					JOIN 2014Spring_Keywords K ON P.Category_Keyword_id = K.id");
			}else{
				// Get one record
			}
		}
		
		// Create
		static public function Create($row)
		{
			
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
