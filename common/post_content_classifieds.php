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
                          <td width="427"><span class="style7">Post your Classifieds</span></td>
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
               <td height="400"><form id="ad_form" name="ad_form" method="post" action="post_users_classifieds.php" onsubmit="return checkValidation(ad_form)"  enctype="multipart/form-data">
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
                              <select name="bt" size="1" id="category" class="selectfield" ><option selected="selected" value="0">Select</option>
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
                                <input type="text" name="email" class="tb7" />
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
                              <td height="35">Upload Logo</td>
                              <td height="35">&nbsp;</td>
                              <td height="35"><label>
                                <input type="file" name="file" class="tb7" />
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
                              <td height="35">Company Features</td>
                              <td height="35">&nbsp;</td>
                              <td height="35"><label>
                                <textarea name="features"></textarea>
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
 
