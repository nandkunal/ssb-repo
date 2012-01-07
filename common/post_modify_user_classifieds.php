<?php
require_once("administrator/includes/DefaultSearch.php");
$classified_details=ADAO::getClassifiedDetailsByUserId($_SESSION['id']);


?>
<script type="text/javascript">
$(document).ready(function(){
	$("#logo").click(function(){
	$("#file").hide();
	$("#logo").hide();
	$("#file_upload").show();
	});
});
</script>>
 
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
                          <td width="427"><span class="style7">Modify your Posted Classifieds</span></td>
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
               <td height="400"><form id="edit_form" name="edit_form" method="post" action="update_users_classifieds.php" onsubmit="return checkValidation(edit_form)"  enctype="multipart/form-data">
                      <table width="418" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td height="5" colspan="3"><img src="images/searchbartop_small.jpg" width="400" height="6" /></td>
                        </tr>
                        <tr>
                          <td width="2" background="images/searchbarlft.jpg"><img src="images/searchbarlft.jpg" width="2" height="2" /></td>
                          <td width="396" height="110" background="images/searchbarbodybgbig.jpg"><table width="380" border="0" align="center" cellpadding="0" cellspacing="0">
                         
                            <tr>
                              <td height="35">Business Type</td>
                              <td height="35">&nbsp;</td>
                              <td height="35"><label>
                              <select name="bt" size="1" id="category" class="selectfield" ><option selected="selected" value="<?php echo $classified_details['b_type'];?>"><?php echo ADAO::getSearchCategoryNameById($classified_details['b_type']);?></option>
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
                                <input type="text" name="cname" class="tb7" value="<?php echo $classified_details['company_name'];?>" />
                              </label></td>
                            </tr>
                            <tr>
                              <td height="35">Company Website(if any)</td>
                              <td height="35">&nbsp;</td>
                              <td height="35"><label>
                                <input type="text" name="website" class="tb7" value="<?php echo $classified_details['company_website'];?>" />
                              </label></td>
                            </tr>
                            <tr>
                              <td height="35">Company Email</td>
                              <td height="35">&nbsp;</td>
                              <td height="35"><label>
                                <input type="text" name="email" class="tb7" value="<?php echo $classified_details['company_email'];?>" />
                              </label></td>
                            </tr>
                            <tr>
                              <td height="35"> Company Address </td>
                              <td height="35">&nbsp;</td>
                              <td height="35"><label>
                                <textarea name="address"><?php echo $classified_details['company_address'];?></textarea>
                              </label></td>
                            </tr>
                              <tr>
                              <td height="35">Contact Number</td>
                              <td height="35">&nbsp;</td>
                              <td height="35"><label>
                                <input type="text" name="contact" class="tb7" value="<?php echo $classified_details['company_contact'];?>" />
                              </label></td>
                            </tr>
                                 <tr>
                              <td height="35">Mobile Number</td>
                              <td height="35">&nbsp;</td>
                              <td height="35"><label>
                                <input type="text" name="mobile" class="tb7" value="<?php echo $classified_details['company_mobile'];?>" />
                              </label></td>
                            </tr>
                            <tr>
                              <td height="35">City</td>
                              <td height="35">&nbsp;</td>
                              <td height="35"><label>
                                <input type="text" name="city" class="tb7" value="<?php echo $classified_details['company_city'];?>" />
                              </label></td>
                            </tr>
                            <tr>
                              <td height="35">Distt.</td>
                              <td height="35">&nbsp;</td>
                              <td height="35"><label>
                                <input type="text" name="distt" class="tb7" value="<?php echo $classified_details['company_district'];?>" />
                              </label></td>
                            </tr>
                            <tr>
                              <td height="35">state</td>
                              <td height="35">&nbsp;</td>
                              <td height="35"><label>
                                <input type="text" name="state" class="tb7" value="<?php echo $classified_details['company_state'];?>" />
                              </label></td>
                            </tr>
                        
                           <tr>
                              <td height="35">Upload Logo</td>
                              <td height="35"></td>
                              <td height="35"><span id="file"><?php echo $classified_details['company_logo'];?></span><span id="file_upload" style="display:none"><label>
                                <input type="file" name="file" class="tb7" />
                              </label></span><a href="#" id="logo" style="color:#000; text-decoration:underline; font-size:10px">Change</a></td>
                            </tr>
                            <tr>
                              <td height="35">Company Description</td>
                              <td height="35">&nbsp;</td>
                              <td height="35"><label>
                                <textarea name="cdes"><?php echo $classified_details['company_des'];?></textarea>
                              </label></td>
                            </tr>
                              <tr>
                              <td height="35">Company Features</td>
                              <td height="35">&nbsp;</td>
                              <td height="35"><label>
                                <textarea name="features"><?php echo $classified_details['company_spec'];?></textarea>
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
                          <td width="20" background="images/searchbarrt.jpg"><img src="images/searchbarrt.jpg" width="2" height="2" /></td>
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
 
