<?php
	include_once __DIR__ . '/../inc/functions.php';
	
	// C.R.U.D: Create Read Update Delete
	class AutoCompleteBox {
		// Read
		static public function Get($id = null)
		{
			$sql = "SELECT city FROM US_Zip_Codes Limit 0, 10
				   ";
			if($id == null){
				//	Get all records
				return fetch_all($sql);
			}else{
				// Get one record

				$sql .= " WHERE id = $id ";
				if(($results = fetch_all($sql)) && count($results) > 0){
					return $results[0];
				}else{
					return null;
				}
			}
		}
	}