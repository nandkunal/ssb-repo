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
</style>
<script type="text/javascript">
function checkValidation(frm)
{
var error="";
if((frm.username.value=="")||(frm.password.value=="")||(frm.conpassword.value=="")||(frm.name.value=="")||(frm.contact.value=="")||(frm.city.value=="")||(frm.state.value=="")||(frm.country.value=="")||(frm.address.value==""))
{
error+="Please fill all the fields";
}
if(frm.password.value!=frm.conpassword.value){
	error+="\n Password Mismatch";
}
if(frm.terms.checked==false){
	error+="\n You have not agreed Terms and Condition";
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
      </table>        </form>    </td>
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
            <td><table width="726" border="0" align="left" cellpadding="0" cellspacing="0">
              <tr>
                <td height="154"><img src="images/logincreataccount.jpg" width="762" height="114" /></td>
              </tr>
              <tr>
                <td width="726" height="160" valign="top"><form id="login_form" name="login_form" method="post" action="checkUsersLogin.php">
                  <table width="590" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td height="5" colspan="3"><img src="images/searchbartop.jpg" width="590" height="6" /></td>
                    </tr>
                    <tr>
                      <td width="2" height="110" background="images/searchbarlft.jpg"></td>
                      <td width="586" height="110" background="images/searchbarbodybg.jpg"><table width="571" border="0" align="center" cellpadding="0" cellspacing="0">
                          <tr>
                            <td colspan="2"><span class="style4">Username</span></td>
                          </tr>
                          <tr>
                            <td colspan="2"><label>
                              <input name="username" type="text" class="tb7"  />
                            </label></td>
                          </tr>
                          <tr>
                            <td height="5" colspan="2"></td>
                          </tr>
                          <tr>
                            <td colspan="2"><span class="style4">Password</span></td>
                          </tr>
                          <tr>
                            <td colspan="2"><label>
                              <input name="password" type="password" class="tb7" />
                            </label></td>
                          </tr>
                          <tr>
                            <td height="5" colspan="2"></td>
                          </tr>
                          <tr>
                            <td width="85"><input type="image" src="images/loginnow.jpg" width="73" height="31" /></td>
                            <td width="486"> <span class="style5">Forgot your password?</span></td>
                          </tr>
                      </table></td>
                      <td width="2" height="110" background="images/searchbarrt.jpg"></td>
                    </tr>
                    <tr>
                      <td height="5" colspan="3"><img src="images/searchbarbot.jpg" width="590" height="6" /></td>
                    </tr>
                  </table>
                                </form>                </td>
              </tr>
              <tr>
                <td height="3" background="images/login_divider.jpg"></td>
              </tr>
              <tr>
                <td height="19"><table width="720" height="29" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="713" height="29"><span class="style6">If you do not have an existing Customer Account with us fill in the form below -</span></td>
                  </tr>
                </table></td>
              </tr>
              <tr>
                <td height="45"><img src="images/newcustform.jpg" width="762" height="38" /></td>
              </tr>
              <tr>
                <td height="400"><form id="reg_form" name="reg_form" method="post" action="createAccount.php" onsubmit="return checkValidation(reg_form)">
                  <table width="590" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td height="5" colspan="3"><img src="images/searchbartop.jpg" width="590" height="6" /></td>
                    </tr>
                    <tr>
                      <td width="2" height="110" background="images/searchbarlft.jpg"></td>
                      <td width="586" height="110" background="images/searchbarbodybgbig.jpg"><table width="566" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="156" height="35">Username</td>
                          <td width="10" height="35">&nbsp;</td>
                          <td width="400" height="35"><label>
                            <input type="text" name="username" class="tb7" />
                            
                          </label></td>
                        </tr>
                        <tr>
                          <td height="35">Password</td>
                          <td height="35">&nbsp;</td>
                          <td height="35"><label>
                            <input type="password" name="password" class="tb7" />
                          </label></td>
                        </tr>
                        <tr>
                          <td height="35">Confirm Password </td>
                          <td height="35">&nbsp;</td>
                          <td height="35"><label>
                            <input type="password" name="conpassword" class="tb7" />
                          </label></td>
                        </tr>
                        <tr>
                          <td height="35">Name</td>
                          <td height="35">&nbsp;</td>
                          <td height="35"><label>
                            <input type="text" name="name" class="tb7" />
                          </label></td>
                        </tr>
                        <tr>
                          <td height="35">email</td>
                          <td height="35">&nbsp;</td>
                          <td height="35"><label>
                            <input type="text" name="email" class="tb7" />
                          </label></td>
                        </tr>
                        <tr>
                          <td height="35">Contact No. </td>
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
                          <td height="35">country</td>
                          <td height="35">&nbsp;</td>
                          <td height="35"><label>
                            <input type="text" name="country" class="tb7" />
                          </label></td>
                        </tr>
                        <tr>
                          <td height="35">Address</td>
                          <td height="35">&nbsp;</td>
                          <td height="35"><label>
                            <textarea name="address" cols="40" rows="3"></textarea>
                          </label></td>
                        </tr>
                        <tr>
                          <td height="35">&nbsp;</td>
                          <td height="35">&nbsp;</td>
                          <td height="35">&nbsp;</td>
                        </tr>
                        <tr>
                          <td height="35" colspan="3"><label>
                            <input type="checkbox" name="terms" value="checkbox" />
                            </label>
                            I have read the Customer Master Agreement, and I agree to all the terms therein.</td>
                        </tr>
                        <tr>
                          <td height="35"><input type="image"src="images/submit.jpg" width="73" height="31" /></td>
                          <td height="35">&nbsp;</td>
                          <td height="35">&nbsp;</td>
                        </tr>
                        <tr>
                          <td height="35">&nbsp;</td>
                          <td height="35">&nbsp;</td>
                          <td height="35">&nbsp;</td>
                        </tr>
                      </table></td>
                      <td width="2" height="110" background="images/searchbarrt.jpg"></td>
                    </tr>
                    <tr>
                      <td height="5" colspan="3"><img src="images/searchbarbot.jpg" width="590" height="6" /></td>
                    </tr>
                  </table>
                  </form>                </td>
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
