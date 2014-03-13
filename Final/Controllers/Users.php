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
			$model = Users::Get($_REQUEST['id']);
			break;
		case 'save':
			// TODO: Validate()
			//if (!$error = Users::Create($_REQUEST)){
			if (!$error = Users::Save($_REQUEST)){
				header("Location: ?");
				die();
				// echo "Sucess";
			}else {
				print_r($error);
				$model = $_REQUEST;
				$view = 'edit';
			}
			$view = 'edit';
			break;
		case 'delete':
			break;
		default:
			$model = Users::Get();
			/* Debug ?> <pre> <? print_r($model) ?> </pre> <? */
			if($view == null) $view = 'index';
	}

	switch ($format) {
		case 'plain':
			include __DIR__ . "/../Views/Users/$view.php";			
			break;
		default:
			$view = __DIR__ . "/../Views/Users/$view.php";	
			include __DIR__ . "/../Views/Shared/_Layout.php";
			break;
	}
	
/* FOR SERVER USAGE: RETURN USEDFUL INFORMATION ABOUT THE TRAFFICE INFO....DETAILS STUFF
	?> <pre>
		<? print_r($_SERVER); ?>
	</pre>
	
	?> <pre>
		<? print_r($_GET); ?>
	</pre>
	
	?> <pre>
		<? print_r($_REQUEST); ?>
	</pre>

*/