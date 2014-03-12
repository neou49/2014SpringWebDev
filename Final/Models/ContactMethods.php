<?php
	include_once __DIR__ . '/../inc/functions.php';
	
	// C.R.U.D: Create Read Update Delete
	class ContactMethods {
		// Read
		static public function Get($id = null)
		{
			if ($id == null){
				// Get all records
				return fetch_all("SELECT U.FirstName, U.LastName, K.Name as Contact_Method_Name, C.Value 
									FROM 2014Spring_Users U JOIN 2014Spring_ContactMethods C ON U.id = C.User_id
									JOIN 2014Spring_Keywords K ON C.ContactMethodType = K.id;");
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
