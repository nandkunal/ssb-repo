<?php
require_once("includes/ADAO.php");
$id=$_POST['id'];
$name=$_POST['name'];
$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];
$cno=$_POST['cno'];
$status=$_POST['status'];


$res=ADAO::updateUserAccounts($id,$name,$username,$password,$email,$cno,$status);
?>