<?php
require_once("administrator/includes/UserFunctions.php");
require_once("administrator/includes/ADAO.php");
require_once("administrator/includes/projectConstant.php");
$cat_id=1004;
$banner=UserFunctions::getBannerName($cat_id);
$key=$_GET['search_key'];
$cat=$_GET['category'];
$city=$_GET['city'];

$banner=UserFunctions::getBannerName($cat_id);
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
-->
</style>
<script type="text/javascript "src="js/jquery.min.js"></script>

</head>

<body>
<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
<?php if(UserFunctions::isUserAuthenticated()){} else {?>

  <tr>
    <td height="30">
    <form id="form1" name="form1" method="post" action="checkUsersLogin.php">
      <table width="936" height="25" border="0" align="right" cellpadding="0" cellspacing="0">
        <tr>
          <td width="247">&nbsp;</td>
          <td width="418" align="right"><label>
            <input name="username" type="text" class="tb7"  />
          </label></td>
          <td width="165" align="right"><label>
            <input name="password" type="password" class="tb7" />
          </label></td>
          <td width="106" align="center"><input type="image" src="images/login.jpg" width="70" height="22" /></td>
        </tr>
      </table>
        </form>    </td>
  </tr>
  <?php
}
  ?>
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
    <td height="75"><?php include("common/search_property.php"); ?></td>
  </tr>
  <tr>
    <td height="10">&nbsp;</td>
  </tr>

  <tr>
    <td height="10">&nbsp;</td>
  </tr>
  <tr>
    <td>
        <!--Serach Content_tbl-->
                  
         <?php include("common/search_property_results_param.php");?>

 


        <!--Serach_content_tbl ends here-->

    </td>
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
