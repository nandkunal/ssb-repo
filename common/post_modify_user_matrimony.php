<?php
require_once("administrator/includes/DefaultSearch.php");
$matrimony_details=ADAO::getMatrimonyDetailsByUserId($_SESSION['id']);


?>
<script type="text/javascript">
$(document).ready(function(){
	$("#logo").click(function(){
	$("#file").hide();
	$("#logo").hide();
	$("#file_upload").show();
	});
});
</script>


 
  <table width="1000" border="0" cellspacing="0" cellpadding="0">
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
                          <td width="427"><span class="style7">Modify your Profile for Matrimonial Match </span></td>
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
                    <td height="400"><form id="modify_profile_form" name="ad_form" method="post" action="update_users_matrimony.php" onsubmit="return checkValidation()"
                    enctype="multipart/form-data">
                      <table width="399" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td height="5" colspan="3"><img src="images/searchbartop_small.jpg" width="400" height="6" /></td>
                        </tr>
                        <tr>
                          <td width="1" background="images/searchbarlft.jpg"><img src="images/searchbarlft.jpg" width="2" height="2" /></td>
                          <td width="398" height="110" background="images/searchbarbodybgbig.jpg"><table width="380" border="0" align="center" cellpadding="0" cellspacing="0">
                            <tr>
                              <td height="35">Profile Created for:</td>
                              <td height="35">&nbsp;</td>
                              <td height="35">
                              <select name="cat" size="1" id="category" class="selectfield"><option selected="selected" value="<?php echo $matrimony_details['sex'];?>"><?php if($matrimony_details['sex']==1)echo "Bride"; else echo "Groom";?>
                              
                              </option><option value="1">Groom</option><option value="2">Bride</option></select>
           
       
                              </td>
                            </tr>
                         
                            <tr>
                              <td height="35">Caste</td>
                              <td height="35">&nbsp;</td>
                              <td height="35"><label>
                                <input type="text" name="caste" class="tb7" value="<?php echo $matrimony_details['user_caste'];?>" />
                              </label></td>
                            </tr>
                            <tr>
                              <td height="35">Date of Birth</td>
                              <td height="35">&nbsp;</td>
                              <td height="35">
                                <input type="text" name="dob" class="tb7" id="dob" value="<?php echo $matrimony_details['dob'];?>" /><img src="images/cal.gif" onClick="javascript:NewCssCal('dob','yyyyMMdd')" style="cursor:pointer"/>
                              </td>
                            </tr>
                            <tr>
                              <td height="35"> Age</td>
                              <td height="35">&nbsp;</td>
                              <td height="35"><label>
                               <input type="text" name="age" class="tb7" value="<?php echo $matrimony_details['age'];?>" />
                              </label></td>
                            </tr>
                              <tr>
                              <td height="35">Height</td>
                              <td height="35">&nbsp;</td>
                              <td height="35"><label>
                                <input type="text" name="height" class="tb7" value="<?php echo $matrimony_details['height'];?>" />
                              </label></td>
                            </tr>
                               <tr>
                              <td height="35">Qualifications</td>
                              <td height="35">&nbsp;</td>
                              <td height="35"><label>
                                <input type="text" name="qual" class="tb7" value="<?php echo $matrimony_details['qualification'];?>"  />
                              </label></td>
                            </tr>
                            <tr>
                              <td height="35">Contact Number</td>
                              <td height="35">&nbsp;</td>
                              <td height="35"><label>
                                <input type="text" name="cno" class="tb7" value="<?php echo $matrimony_details['cno'];?>"/>
                              </label></td>
                            </tr>
                            
                            <tr>
                              <td height="35">Profile Picture</td>
                              <td height="35"></td>
                              <td height="35"><span id="file"><?php echo $matrimony_details['profile_pic'];?></span><span id="file_upload" style="display:none"><label>
                                <input type="file" name="file" class="tb7" />
                              </label></span><a href="#" id="logo" style="color:#000; text-decoration:underline; font-size:10px">Change</a></td>
                            </tr>
                        
                            <tr>
                              <td height="35">About Me(Brief Description)</td>
                              <td height="35">&nbsp;</td>
                              <td height="35"><label>
                                <textarea name="des"><?php echo $matrimony_details['des'];?></textarea>
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
        <td>
        <?php if(UserFunctions::isUserAuthenticated()){
			 
			   include("common/user_menu.php"); }?>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><img src="images/bodybot.jpg" width="1000" height="8" /></td>
  </tr>
</table>
 