<?php
require_once("administrator/includes/DefaultSearch.php");


?>
 
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
                          <td width="427"><span class="style7">Edit Profile</span></td>
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
               <td height="400"><form id="edit_profile" name="edit_profile" method="post" action="update_user_profile.php" onsubmit="return checkValidation(edit_profile)">
                  <table width="590" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td height="5" colspan="3"><img src="images/searchbartop.jpg" width="590" height="6" /></td>
                    </tr>
                    <tr>
                      <td width="2" height="110" background="images/searchbarlft.jpg"></td>
                      <td width="586" height="110" background="images/searchbarbodybgbig.jpg"><table width="566" border="0" align="center" cellpadding="0" cellspacing="0">
                      
                        <tr>
                          <td height="35">Name</td>
                          <td height="35">&nbsp;</td>
                          <td height="35"><label>
                         <?php echo $details['name'];?>
                          </label></td>
                        </tr>
                        <tr>
                          <td height="35">email</td>
                          <td height="35">&nbsp;</td>
                          <td height="35"><label>
                       <?php echo $details['email'];?>
                          </label></td>
                        </tr>
                        <tr>
                          <td height="35">Contact No. </td>
                          <td height="35">&nbsp;</td>
                          <td height="35"><label>
                            <input type="text" name="contact" class="tb7" value="<?php echo $details['cno'];?>" />
                          </label></td>
                        </tr>
                        <tr>
                          <td height="35">City</td>
                          <td height="35">&nbsp;</td>
                          <td height="35"><label>
                            <input type="text" name="city" class="tb7" value="<?php echo $details['city'];?>" />
                          </label></td>
                        </tr>
                        <tr>
                          <td height="35">District</td>
                          <td height="35">&nbsp;</td>
                          <td height="35"><label>
                            <input type="text" name="distt" class="tb7" value="<?php echo $details['district'];?>" />
                          </label></td>
                        </tr>
                        <tr>
                          <td height="35">state</td>
                          <td height="35">&nbsp;</td>
                          <td height="35"><label>
                            <input type="text" name="state" class="tb7" value="<?php echo $details['state'];?>" />
                          </label></td>
                        </tr>
                        <tr>
                          <td height="35">country</td>
                          <td height="35">&nbsp;</td>
                          <td height="35"><label>
                            <input type="text" name="country" class="tb7" value="<?php echo $details['country'];?>" />
                          </label></td>
                        </tr>
                        <tr>
                          <td height="35">Address</td>
                          <td height="35">&nbsp;</td>
                          <td height="35"><label>
                            <textarea name="address" cols="40" rows="3"><?php echo $details['address'];?></textarea>
                          </label></td>
                        </tr>
                        <tr>
                          <td height="35">Blood Group</td>
                          <td height="35">&nbsp;</td>
                          <td height="35"><label>
                            <input type="text" name="bloodgroup" class="tb7" value="<?php echo $details['bloodgroup'];?>" />
                          </label></td>
                        </tr>
                          
                        <tr>
                          <td height="35">&nbsp;</td>
                          <td height="35">&nbsp;</td>
                          <td height="35">&nbsp;</td>
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
                  </form> </td>
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
 
