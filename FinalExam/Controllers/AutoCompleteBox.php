<?php
	include_once __DIR__ . '/../inc/functions.php';
	include_once __DIR__ . '/../inc/allModels.php';

	@$view = $action = $_REQUEST['action'];
	@$format = $_REQUEST['format'];

	switch ($action){
		
		default:
			$model = AutoCompleteBox::Get();

			if($view == null) $view = 'index';
	}

	switch ($format) {
		case 'json':
			$ret = array('success' => empty($errors), 'errors'=> $errors, 'data'=> $model);
			echo json_encode($ret);
			break;

		default:
			$view = __DIR__ . "/../Views/AutoCompleteBox/$view.php";	
			// include __DIR__ . "/../Views/Shared/_Layout.php";
			break;
	}