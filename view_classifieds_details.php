<?php
session_start();
require_once("administrator/includes/UserFunctions.php");
require_once("administrator/includes/ADAO.php");
$cat_id=1004;
$banner=UserFunctions::getBannerName($cat_id);
$id=$_GET['id'];
$row5=ADAO::getClassifiedDetails($id);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Social Search Book</title>
<link href="css/style.css" type="text/css" rel="stylesheet" media="screen"/>
<style type="text/css">
<!--
body {
	background-image: url(images/pgbg.jpg);
	background-color: #EFEFEF;
	background-repeat: repeat-x;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.style4 {font-size: 14px; color: #333333; }
.style5 {font-size: 10px}
.style6 {color: #F06230}
-->
</style></head>

<body>
<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="30"><form id="form1" name="form1" method="post" action="">
      <table width="936" height="25" border="0" align="right" cellpadding="0" cellspacing="0">
        <tr>
          <td width="247">&nbsp;</td>
          <td width="418" align="right"><label>
            <input name="textfield2" type="text" class="tb7" />
          </label></td>
          <td width="165" align="right"><label>
            <input name="textfield" type="password" class="tb7" />
          </label></td>
          <td width="106" align="center"><img src="images/login.jpg" width="70" height="22" /></td>
        </tr>
      </table>
        </form>    </td>
  </tr>
  <tr>
    <td height="128"><?php include("common/header.php"); ?></td>
  </tr>
  <tr>
    <td height="152"><?php include("common/flash.php"); ?></td>
  </tr>
  <tr>
    <td height="44"><?php include("common/links.php"); ?></td>
  </tr>
  <tr>
    <td height="75"><?php include("common/search.php"); ?></td>
  </tr>
  
  <tr>
    <td height="10">&nbsp;</td>
  </tr>

  <tr>
    <td height="10">&nbsp;</td>
  </tr>
  <tr>
    <td align="center" valign="middle"><?php include("common/details_result.php");?></td>
  </tr>
  <tr>
    <td height="10">&nbsp;</td>
  </tr>

  <tr>
    <td height="10">&nbsp;</td>
  </tr>
  
  <tr>
    <td height="5"></td>
  </tr>
  <tr>
    <td><?php include("common/footer.php"); ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>