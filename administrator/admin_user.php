<?php
require_once("includes/ADAO.php");
$id=$_POST['id'];
$name=$_POST['name'];
$username=$_POST['username'];
$password=md5($_POST['password']);
$res=ADAO::updateAdminList($name,$username,$password,$id);
echo $res;

?>