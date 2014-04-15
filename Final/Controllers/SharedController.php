<?php

	include_once __DIR__ . '/../inc/functions.php';	
	include_once __DIR__ . '/../inc/allModels.php';

	@$view = $action = $_REQUEST['action'];
	@$format = $_REQUEST['format'];
	
	switch ($action){
		case 'new':
			$view = 'edit';
			break;
		case 'edit':
			// $model = Users::Get($_REQUEST['id']);
			$model = Get($controllerName, $_REQUEST['id']);
			break;
		case 'save':
			$sub_action = empty($_REQUEST['id']) ? 'created' : 'updated';
		
			// $errors = Users::Validate($_REQUEST);						
			$errors = Validate($controllerName, $_REQUEST);	
			if(!$errors){
				
				// $errors = Users::Save($_REQUEST);
				$errors = Save($controllerName, $_REQUEST);
			}
			if (!$errors){
				header("Location: ?sub_action=$sub_action&id=$_REQUEST[id]");
				die();
				// echo "Sucess";
			}else {
				print_r($errors);
				$model = $_REQUEST;
				$view = 'edit';
			}			
			$view = 'edit';			
			break;
		case 'delete':
			if($_SERVER['REQUEST_METHOD'] == 'GET'){
				// Prompt
				// $model = Users::Get($_REQUEST['id']);
				$model = Get($controllerName, $_REQUEST['id']);
			}else{
				// Users::Delete($_REQUEST['id']);
				Delete($controllerName, $_REQUEST['id']);
			}
			break;
		default:
			// $model = Users::Get();
			$model = Get($controllerName);
			/* Debug ?> <pre> <? print_r($model) ?> </pre> <? */
			/*Debug ?> <pre> <? print_r($controllerName) ?> </pre> <? */
			if($view == null) $view = 'index';
	}

	switch ($format) {
		case 'json':
			$ret = array('success' => empty($errors), 'errors' => $errors, 'data' => $model);
			echo json_encode($ret) ;
			break;
		case 'plain':
			include __DIR__ . "/../Views/$controllerName/$view.php";			
			break;
		default:
			$view = __DIR__ . "/../Views/$controllerName/$view.php";	
			include __DIR__ . "/../Views/Shared/_Layout.php";
			break;
	}