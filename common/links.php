<?php
require_once("administrator/includes/UserFunctions.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>header</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.style4 {
	font-family: Calibri;
	color: #F36233;
}
a:link {
	color: #FFFFFF;
	text-decoration: none;
}
a:visited {
	color: #FFFFFF;
	text-decoration: none;
}
a:hover {
	color: #FC7C3F;
	text-decoration: none;
}
a:active {
	color: #FFFFFF;
	text-decoration: none;
}
-->
</style></head>

<body>
<table width="990" height="30" border="0" cellpadding="5" cellspacing="0">
  <tr>
    <td width="777" align="left" valign="middle" bgcolor="#b12322"><span class="style4"><a href="index.php">Home</a> |<a href="#"> Classifides</a> | <a href="matrimony.php">Matrimony</a> | <a href="community.php">Community</a> |<a href="property.php"> Property </a>| <a href="login-signup.php">Membership</a> | <a href="#">Get A Frenchisee </a></span></td>
    <?php if(!UserFunctions::isUserAuthenticated()){?>
    <td width="193" align="center" valign="middle" bgcolor="#b12322"><a href="postad.php"><img src="images/postanad.jpg" width="164" height="32" border="0" /></a></td>
    <?php }?>
  </tr>
</table>
</body>
</html>
