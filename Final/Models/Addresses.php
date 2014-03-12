<?php
	include_once __DIR__ . '/../inc/functions.php';
	
	// C.R.U.D: Create Read Update Delete
	class Addresses {
		// Read
		static public function Get($id = null)
		{
			if ($id == null){
				// Get all records
				return fetch_all("SELECT U.FirstName, U.LastName, K.Name AS Address_Type, A.Addresses, A.City, A.State, A.Zip, A.Country
									FROM 2014Spring_Addresses A JOIN 2014Spring_Users U ON A.User_id = U.id
									JOIN 2014Spring_Keywords K ON A.AddressType = K.id;");
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
