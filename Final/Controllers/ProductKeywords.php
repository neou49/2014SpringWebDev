<?php
	include_once __DIR__ . '/../inc/functions.php';	
	include_once __DIR__ . '/../inc/allModels.php';
	
	@$action = $_REQUEST['action'];
	
	switch(@$action){
		case 'create':
			break;
		case 'update':
			break;
		case 'delete':
			break;		
		default:
			$model = ProductKeywords::Get();
			if ($action == null) $action = 'index';
			include	__DIR__ . "/../Views/ProductKeywords/$action.php";
			break;
	}
