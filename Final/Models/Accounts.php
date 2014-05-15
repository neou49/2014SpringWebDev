<?php
session_start();
	include_once __DIR__ . '/../inc/functions.php';
	include_once __DIR__ . '/../inc/allModels.php';
 /**
 * 
 */
class Accounts {
	static public function DoLogin($email, $password) {
		$sql ="	SELECT *
				From 2014Spring_Users U Join 2014Spring_ContactMethods CM on U.id=CM.User_Id
				WHERE CM.Value = '$email'";
		$model = fetch_all($sql);

		if(!empty($model) && $model[0]['Password'] == $password)
		{
			$_SESSION['User'] = $model;
			return null;
		}else{
			return array('password'=>'Wrong password');
		}
	}
	static public function IsLoggedIn() {
		return (self::GetCurrentUser() != null);
	}
	static public function GetCurrentUser(){
		return isset($_SESSION['User']) ? $_SESSION['User'] : null;
	}
	static public function RequireLogin(){
		print_r('asdfasdfasdfa');
		die();
		// print_r(__FUNCTION__);
		if(!self::IsLoggedIn())
		{
			header("Location: Accounts.php?returnUrl=$_SERVER[PHP_SELF]");
			die();
		}
	}	
	
	static public function TestFunction()
	{
		print_r('Test Function');
		die();
	}
	
	static public function IsAdmin(){
		$user = self::GetCurrentUser();
		if(!$user) return false;
		// Admin UserType = 6
		return ($user['UserType'== 6]);
	}
}