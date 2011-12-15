<?php
ob_start();
session_start();
require_once("includes/loginManager.php");

$login=$_POST['username'];
$pass=$_POST['password'];
$loginInfo = LoginInfo::Authenticate($login, $pass);
if ($loginInfo->getRes()==1) {
		$_SESSION['id'] = $loginInfo->getID();
        $_SESSION['role']=$loginInfo->getRole();
		$redirectTo=HOME_ADMIN;
    header("location:".$redirectTo);
		}
else{
    $redirectTo=AUTH_FAILED_HOME;
    header("location:".$redirectTo."?error_code=".AUTH_ERROR."");
}



?>