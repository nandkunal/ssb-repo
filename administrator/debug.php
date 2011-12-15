<?php
error_reporting(E_ALL);
//require_once('includes/projectConstant.php');
$db="kitindia_ssb";
$user="kitindia_ssbuser";
$pass="kunalnand";
$con=mysql_connect("localhost",$user,$pass);
$d=mysql_select_db($db,$con);

$username='admin';
$passd='admin';
$username=mysql_real_escape_string($username);
  $pass=md5(mysql_real_escape_string($pass));
  $q="CALL sp_login_auth('".$username."','".$passd."')";
   $stmt=mysql_query($q);
   $row=mysql_fetch_array($stmt);
   echo $row['res_msg'];
   echo $row['id1'];
   echo $row['role1'];
   
  

?>