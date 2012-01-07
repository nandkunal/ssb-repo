<?php
require_once("administrator/includes/DefaultSearch.php");
$property_details=ADAO::getPropertyDetailsByUserId($_SESSION['id']);

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
                          <td width="427"><span class="style7">Modify your Profile for Property</span></td>
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
                    <td height="400"><form id="ad_form" name="ad_form" method="post" action="post_users_rent.php" onsubmit="return checkValidation(ad_form)">
                      <table width="399" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td height="5" colspan="3"><img src="images/searchbartop_small.jpg" width="400" height="6" /></td>
                        </tr>
                        <tr>
                          <td width="1" background="images/searchbarlft.jpg"><img src="images/searchbarlft.jpg" width="2" height="2" /></td>
                          <td width="398" height="110" background="images/searchbarbodybgbig.jpg"><table width="380" border="0" align="center" cellpadding="0" cellspacing="0">
                           
                            <tr>
                              <td height="35">Purpose:</td>
                              <td height="35">&nbsp;</td>
                              <td height="35">
                              <select name="purpose" size="1" id="category" class="selectfield"><option selected="selected" value="<?php echo $property_details['estate_pur'];?>"><?php if ($property_details['estate_pur']==1) echo "Buy"; else echo "Sell";?></option><option value="1">Buy</option><option value="2">Sell</option></select>
           
       
                              </td>
                            </tr>
                         
                            <tr>
                              <td height="35">Property Type:</td>
                              <td height="35">&nbsp;</td>
                              <td height="35">
 <select name="category" size="1" id="category" class="selectfield"><option selected="selected" value="<?php echo $property_details['estate_type'];?>"><?php echo UserFunctions::getPropertyTypeName($property_details['estate_type']);?></option><option value="1">Kothi</option><option value="2">Flat</option><option value="3">Plot<option value="4">PG</option><option value="6">Agricultural Land</option>
           
            </select>
           
       
                              </td>
                            </tr>
                             <tr>
                              <td height="35"> Description</td>
                              <td height="35">&nbsp;</td>
                              <td height="35"><label>
                                <textarea name="des"><?php echo $property_details['estate_des'];?></textarea>
                              </label></td>
                            </tr>
                                <tr>
                              <td height="35"> Location</td>
                              <td height="35">&nbsp;</td>
                              <td height="35"><label>
                                <textarea name="location"><?php echo $property_details['estate_loc'];?></textarea>
                              </label></td>
                            </tr>
                             <tr>
                              <td height="35">City</td>
                              <td height="35">&nbsp;</td>
                              <td height="35"><label>
                                <input type="text" name="city" class="tb7" value="<?php echo $property_details['estate_city'];?>" />
                              </label></td>
                            </tr>
                            
                          <tr>
                              <td height="35">District</td>
                              <td height="35">&nbsp;</td>
                              <td height="35"><label>
                                <input type="text" name="distt" class="tb7" value="<?php echo $property_details['estate_district'];?>" />
                              </label></td>
                            </tr>
                              <tr>
                              <td height="35">State</td>
                              <td height="35">&nbsp;</td>
                              <td height="35"><label>
                                <input type="text" name="state" class="tb7" value="<?php echo $property_details['estate_state'];?>" />
                              </label></td>
                            </tr>
                              <tr>
                              <td height="35">Country</td>
                              <td height="35">&nbsp;</td>
                              <td height="35"><label>
                                <input type="text" name="country" class="tb7" value="India" />
                              </label></td>
                            </tr>
                              <tr>
                              <td height="35">Contact Number</td>
                              <td height="35">&nbsp;</td>
                              <td height="35"><label>
                                <input type="text" name="cno" class="tb7" value="<?php echo $property_details['estate_cno'];?>" />
                              </label></td>
                            </tr>
                              <tr>
                              <td height="35">Email</td>
                              <td height="35">&nbsp;</td>
                              <td height="35"><label>
                                <input type="text" name="email" class="tb7" value="<?php echo $property_details['estate_email'];?>" />
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
 
