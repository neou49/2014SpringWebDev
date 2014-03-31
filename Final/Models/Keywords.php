<?php
	include_once __DIR__ . '/../inc/functions.php';
	
	// C.R.U.D: Create Read Update Delete
	class Keywords {
		
		 static public function SelectionListFor($TypeId)
		{
			$sql = "SELECT id, Name FROM 2014Spring_Keywords WHERE Parent_id = $TypeId";
			return fetch_all($sql);
		}
		
		// Read
		static public function Get($id = null)
		{
			if ($id == null){
				// Get all records
				return fetch_all("SELECT P.id AS PID, P.Name AS Parent_Keyword, C.id AS CID, C.Name AS Child_Keyword 
									FROM 2014Spring_Keywords P JOIN 2014Spring_Keywords C ON P.id = C.Parent_id; ");
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
