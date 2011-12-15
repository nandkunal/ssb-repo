<?php
ob_start();
session_start();
require_once("administrator/includes/UserLoginManager.php");

$login=$_POST['username'];
$pass=$_POST['password'];
$loginInfo = UsersLogin::Authenticate($login, $pass);
if ($loginInfo->getRes()==1) {
		$_SESSION['id'] = $loginInfo->getID();
        $_SESSION['status']=$loginInfo->getStatus();
		$redirectTo=HOME_USERS;
    header("location:".$redirectTo);
		}
else{
    $redirectTo=USERS_AUTH_FAILED_HOME;
    header("location:".$redirectTo."?error_code=".USERS_AUTH_ERROR."");
}



?>