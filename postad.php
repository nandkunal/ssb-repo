<?php
require_once("administrator/includes/UserFunctions.php");
$cat_id=1004;
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
.style7 {
	font-family: Arial, Helvetica, sans-serif;
	color: #0A63A5;
	font-size: 24px;
	font-weight: bold;
}
.style19 {color: #0A63A5; font-size: 14px; font-family: Arial, Helvetica, sans-serif;}
.style22 {color: #0A63A5; font-size: 16px; font-family: Arial, Helvetica, sans-serif; }
.style25 {color: #F1642F; font-size: 16px; }
.style26 {color: #EB450E; font-size: 16px; font-family: Arial, Helvetica, sans-serif; }
.style28 {font-family: Arial, Helvetica, sans-serif; color: #FF6600; font-size: 16px; font-weight: bold; }
.style29 {color: #F16331}
.style30 {color: #0A63A5}
-->
</style>
<script type="text/javascript">
function checkValidation(frm)
{
var error="";
if((frm.name.value=="")||(frm.bt.value==0)||(frm.cru.value=="")||(frm.add.value=="")||(frm.contact.value=="")||(frm.city.value=="")||(frm.state.value=="")||(frm.cdes.value==""))
{
error+="Please fill all the fields";
}

if(error!=="")
{
alert("Error!"+error);
return false;
}
else
{
return true;
}
}
</script>
</head>

<body>
<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
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
    <td height="10">&nbsp;</td>
  </tr>

  <tr>
    <td height="10">&nbsp;</td>
  </tr>
  <tr>
    <td align="center" valign="middle"><table width="1000" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><img src="images/bodytop.jpg" width="1000" height="8" /></td>
      </tr>
      <tr>
        <td background="images/bodybg.jpg"><table width="980" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td><table width="970" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td width="426"><table width="422" border="0" align="left" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="422" height="50" valign="middle"><table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="427"><span class="style7">Post A Free Ad </span></td>
                        </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td height="3" background="images/login_divider.jpg"></td>
                  </tr>
                  <tr>
                    <td height="19">&nbsp;</td>
                  </tr>
                  <tr>
                    <td height="400"><form id="ad_form" name="ad_form" method="post" action="post.php" onsubmit="return checkValidation(ad_form)">
                      <table width="399" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td height="5" colspan="3"><img src="images/searchbartop_small.jpg" width="400" height="6" /></td>
                        </tr>
                        <tr>
                          <td width="1" background="images/searchbarlft.jpg"><img src="images/searchbarlft.jpg" width="2" height="2" /></td>
                          <td width="398" height="110" background="images/searchbarbodybgbig.jpg"><table width="380" border="0" align="center" cellpadding="0" cellspacing="0">
                            <tr>
                              <td width="154" height="35">Name</td>
                              <td width="4" height="35">&nbsp;</td>
                              <td width="222" height="35"><label>
                                <input name="name" type="text" class="tb7"  />
                              </label></td>
                            </tr>
                            <tr>
                              <td height="35">Business Type</td>
                              <td height="35">&nbsp;</td>
                              <td height="35"><label>
                              <select name="bt" size="1" id="category" class="selectfield"><option selected="selected" value="0">Select</option>
            <?php


               $res=ADAO::getSearchCategory();
                foreach($res as $row){

                    echo '<option value="'.$row['id'].'">'.$row['value'].'</option>';
                  
                }
               

                ?>
            </select>
                              </label></td>
                            </tr>
                         
                            <tr>
                              <td height="35">Company Name</td>
                              <td height="35">&nbsp;</td>
                              <td height="35"><label>
                                <input type="text" name="cname" class="tb7" />
                              </label></td>
                            </tr>
                            <tr>
                              <td height="35">Company URL/Email</td>
                              <td height="35">&nbsp;</td>
                              <td height="35"><label>
                                <input type="text" name="crul" class="tb7" />
                              </label></td>
                            </tr>
                            <tr>
                              <td height="35"> Company Address </td>
                              <td height="35">&nbsp;</td>
                              <td height="35"><label>
                                <textarea name="address"></textarea>
                              </label></td>
                            </tr>
                              <tr>
                              <td height="35">Contact Number</td>
                              <td height="35">&nbsp;</td>
                              <td height="35"><label>
                                <input type="text" name="contact" class="tb7" />
                              </label></td>
                            </tr>
                            <tr>
                              <td height="35">City</td>
                              <td height="35">&nbsp;</td>
                              <td height="35"><label>
                                <input type="text" name="city" class="tb7" />
                              </label></td>
                            </tr>
                            <tr>
                              <td height="35">Distt.</td>
                              <td height="35">&nbsp;</td>
                              <td height="35"><label>
                                <input type="text" name="distt" class="tb7" />
                              </label></td>
                            </tr>
                            <tr>
                              <td height="35">state</td>
                              <td height="35">&nbsp;</td>
                              <td height="35"><label>
                                <input type="text" name="state" class="tb7" />
                              </label></td>
                            </tr>
                        
                            <tr>
                              <td height="35">Company Description</td>
                              <td height="35">&nbsp;</td>
                              <td height="35"><label>
                                <textarea name="cdes"></textarea>
                              </label></td>
                            </tr>
                            <tr>
                              <td height="35">&nbsp;</td>
                              <td height="35">&nbsp;</td>
                              <td height="35">&nbsp;</td>
                            </tr>
                           
                            <tr>
                              <td height="35"><input type="image" src="images/submit.jpg" width="73" height="31" /></td>
                              <td height="35">&nbsp;</td>
                              <td height="35">&nbsp;</td>
                            </tr>
                            <tr>
                              <td height="35">&nbsp;</td>
                              <td height="35">&nbsp;</td>
                              <td height="35">&nbsp;</td>
                            </tr>
                          </table></td>
                          <td width="1" background="images/searchbarrt.jpg"><img src="images/searchbarrt.jpg" width="2" height="2" /></td>
                        </tr>
                        <tr>
                          <td height="5" colspan="3"><img src="images/searchbarbot_small.jpg" width="400" height="6" /></td>
                        </tr>
                      </table>
                    </form></td>
                  </tr>
                </table></td>
                <td width="544" valign="top"><table width="535" border="0" align="center" cellpadding="5" cellspacing="1">
                  <tr>
                    <td height="5" colspan="4" class="style7"></td>
                    </tr>
                  <tr>
                    <td width="191" height="35"><span class="style28"><img src="images/upgrade.jpg" width="170" height="35" /></span></td>
                    <td width="119" height="35" align="center" bgcolor="#C2DEF5" class="style22">Free</td>
                    <td width="90" height="35" align="center" bgcolor="#C2DEF5"><span class="style22">Paid</span></td>
                    <td width="90" height="35" align="center" bgcolor="#FABFAB" class="style26">Preffered</td>
                  </tr>
                  <tr>
                    <td width="191" height="35" bgcolor="#E1EFFA" class="style25">Ad Post </td>
                    <td width="119" height="35" align="center" bgcolor="#f7f7f7" class="style19"><img src="images/yeslg.jpg" width="56" height="25" /></td>
                    <td width="90" align="center" bgcolor="#e9e9e9" class="style19"><img src="images/yesdg.jpg" width="56" height="25" /></td>
                    <td width="90" height="35" align="center" bgcolor="#F4F9FD"><img src="images/yeslb.jpg" width="56" height="25" /></td>
                  </tr>
                  <tr>
                    <td width="191" height="35" bgcolor="#E1EFFA"><span class="style25">Customer Account </span></td>
                    <td width="119" height="35" align="center" bgcolor="#e9e9e9" class="style19"><img src="images/nodg.jpg" width="56" height="25" /></td>
                    <td width="90" align="center" bgcolor="#f7f7f7" class="style19"><img src="images/yeslg.jpg" width="56" height="25" /></td>
                    <td width="90" height="35" align="center" bgcolor="#E1EFFA"><img src="images/yesdb.jpg" width="56" height="25" /></td>
                  </tr>
                  <tr>
                    <td width="191" height="35" bgcolor="#E1EFFA"><span class="style25">Classifide Portal Access </span></td>
                    <td width="119" align="center" bgcolor="#f7f7f7" class="style19"><img src="images/nolg.jpg" width="56" height="25" /></td>
                    <td width="90" align="center" bgcolor="#e9e9e9" class="style19"><img src="images/yesdg.jpg" width="56" height="25" /></td>
                    <td width="90" align="center" bgcolor="#F4F9FD"><img src="images/yeslb.jpg" width="56" height="25" /></td>
                  </tr>
                  <tr>
                    <td width="191" height="35" bgcolor="#E1EFFA"><span class="style25">Matromony  Portal Access </span></td>
                    <td width="119" align="center" bgcolor="#e9e9e9" class="style19"><img src="images/nodg.jpg" width="56" height="25" /></td>
                    <td width="90" align="center" bgcolor="#f7f7f7" class="style19"><img src="images/yeslg.jpg" width="56" height="25" /></td>
                    <td width="90" align="center" bgcolor="#E1EFFA"><img src="images/yesdb.jpg" width="56" height="25" /></td>
                  </tr>
                  <tr>
                    <td width="191" height="35" bgcolor="#E1EFFA"><span class="style25">Community  Portal Access </span></td>
                    <td width="119" align="center" bgcolor="#f7f7f7" class="style19"><img src="images/nolg.jpg" width="56" height="25" /></td>
                    <td width="90" align="center" bgcolor="#e9e9e9" class="style19"><img src="images/yesdg.jpg" width="56" height="25" /></td>
                    <td width="90" align="center" bgcolor="#F4F9FD"><img src="images/yeslb.jpg" width="56" height="25" /></td>
                  </tr>
                  <tr>
                    <td width="191" height="35" bgcolor="#E1EFFA"><span class="style25">Property  Portal Access </span></td>
                    <td width="119" align="center" bgcolor="#e9e9e9" class="style19"><img src="images/nodg.jpg" width="56" height="25" /></td>
                    <td width="90" align="center" bgcolor="#f7f7f7" class="style19"><img src="images/yeslg.jpg" width="56" height="25" /></td>
                    <td width="90" align="center" bgcolor="#E1EFFA"><img src="images/yesdb.jpg" width="56" height="25" /></td>
                  </tr>
                  <tr>
                    <td width="191" height="35" bgcolor="#E1EFFA"><span class="style25">Dashboard</span></td>
                    <td width="119" align="center" bgcolor="#f7f7f7" class="style19"><img src="images/nolg.jpg" width="56" height="25" /></td>
                    <td width="90" align="center" bgcolor="#e9e9e9" class="style19"><img src="images/yesdg.jpg" width="56" height="25" /></td>
                    <td width="90" align="center" bgcolor="#F4F9FD"><img src="images/yeslb.jpg" width="56" height="25" /></td>
                  </tr>
                  <tr>
                    <td bgcolor="#E1EFFA"><span class="style25">Reposting Ads </span></td>
                    <td align="center" bgcolor="#e9e9e9" class="style19"><img src="images/nodg.jpg" width="56" height="25" /></td>
                    <td align="center" bgcolor="#f7f7f7" class="style19"><img src="images/yeslg.jpg" width="56" height="25" /></td>
                    <td align="center" bgcolor="#E1EFFA"><img src="images/yesdb.jpg" width="56" height="25" /></td>
                  </tr>
                  <tr>
                    <td width="191" bgcolor="#E1EFFA"><span class="style25">Editing Posts </span></td>
                    <td align="center" bgcolor="#f7f7f7" class="style19"><img src="images/nolg.jpg" width="56" height="25" /></td>
                    <td align="center" bgcolor="#e9e9e9" class="style19"><img src="images/yesdg.jpg" width="56" height="25" /></td>
                    <td align="center" bgcolor="#F4F9FD"><img src="images/yeslb.jpg" width="56" height="25" /></td>
                  </tr>
                  <tr>
                    <td width="191" bgcolor="#E1EFFA"><span class="style25">Technical Support</span></td>
                    <td width="119" align="center" bgcolor="#e9e9e9" class="style19"><img src="images/nodg.jpg" width="56" height="25" /></td>
                    <td width="90" align="center" bgcolor="#f7f7f7" class="style19"><img src="images/yeslg.jpg" width="56" height="25" /></td>
                    <td width="90" align="center" bgcolor="#E1EFFA"><img src="images/yesdb.jpg" width="56" height="25" /></td>
                  </tr>
                  <tr>
                    <td width="191" bgcolor="#E1EFFA" class="style25">SSB Preffered Tag </td>
                    <td width="119" align="center" bgcolor="#f7f7f7" class="style19"><img src="images/nolg.jpg" width="56" height="25" /></td>
                    <td width="90" align="center" bgcolor="#e9e9e9" class="style19"><img src="images/nolg.jpg" width="56" height="25" /></td>
                    <td width="90" align="center" bgcolor="#F4F9FD"><img src="images/yeslb.jpg" width="56" height="25" /></td>
                  </tr>
                  <tr>
                    <td width="191" height="35" bgcolor="#E1EFFA" class="style25">SSB Recommendation Tag </td>
                    <td width="119" align="center" bgcolor="#e9e9e9" class="style19"><img src="images/nodg.jpg" width="56" height="25" /></td>
                    <td width="90" align="center" bgcolor="#F7F7F7" class="style19"><img src="images/nolg.jpg" width="56" height="25" /></td>
                    <td width="90" align="center" bgcolor="#E1EFFA"><img src="images/yesdb.jpg" width="56" height="25" /></td>
                  </tr>
                  <tr>
                    <td width="191" height="35" bgcolor="#E1EFFA">&nbsp;</td>
                    <td width="119" align="center" bgcolor="#F7F7F7" class="style19">&nbsp;</td>
                    <td width="90" height="35" align="center" bgcolor="#E9E9E9"><span class="style30">Get Now </span></td>
                    <td width="90" align="center" bgcolor="#F4F9FD"><span class="style29">Get Now </span></td>
                  </tr>
                </table></td>
              </tr>
            </table></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td><img src="images/bodybot.jpg" width="1000" height="8" /></td>
      </tr>
    </table></td>
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
