<?php
	include_once __DIR__ . '/../inc/functions.php';
	
	// C.R.U.D: Create Read Update Delete
	class Orders {
		// Read
		static public function Get($id = null)
		{
			if ($id == null){
				// Get all records
				return fetch_all("SELECT * FROM 2014Spring_Orders");
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
