<?php
$portal_access_details=ADAO::getUsersPortalAccessMenu($_SESSION['id']);

?>

<table width="250" border="0" align="center" cellpadding="5" cellspacing="1" style="vertical-align:top">
                    <tr>
                      <td height="5" class="style7"></td>
                    </tr>
                    <tr>
                      <td width="191" height="35" class="style7">Dashboard</td>
                    </tr>
                    
                    <tr>
                      <td width="191" height="35" bgcolor="#E1EFFA"><span class="style25"><a href="edit_user_profile.php" style="text-decoration:none; color:#000;">Edit Profile</a> </span></td>
                    </tr>
                    <tr>
                      <td width="191" height="35" bgcolor="#E1EFFA"><span class="style25"><a href="<?php echo $portal_access_details['classified_portal_menu_url'];?>" style="text-decoration:none; color:#000;"><?php echo $portal_access_details['classified_portal_menu_name'];?></a> </span></td>
                    </tr>
                    <tr>
                      <td width="191" height="35" bgcolor="#E1EFFA"><span class="style25"><a href="<?php echo $portal_access_details['matrimony_portal_menu_url'];?>" style="text-decoration:none; color:#000;"><?php echo $portal_access_details['matrimony_portal_menu_name'];?></a> </span></td>
                    </tr>
                    <tr>
                      <td width="191" height="35" bgcolor="#E1EFFA"><span class="style25"><a href="<?php echo $portal_access_details['community_portal_menu_url'];?>" style="text-decoration:none; color:#000;"><?php echo $portal_access_details['community_portal_menu_name'];?></a></span></td>
                    </tr>
                    <tr>
                      <td width="191" height="35" bgcolor="#E1EFFA"><span class="style25"><a href="<?php echo $portal_access_details['property_portal_menu_url'];?>" style="text-decoration:none; color:#000;"><?php echo $portal_access_details['property_portal_menu_name'];?></a> </span></td>
                    </tr>
                    
                    <tr>
                      <td bgcolor="#E1EFFA"><span class="style25"><a href="change_users_password.php" style="text-decoration:none; color:#000;">Change Password</a></span></td>
                    </tr>
                   
                    <tr>
                      <td width="191" bgcolor="#E1EFFA"><span class="style25">Technical Support</span></td>
                    </tr>
                   
                    <tr>
                      <td height="35" bgcolor="#E1EFFA">&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="35" bgcolor="#E1EFFA">&nbsp;</td>
                    </tr>
                    <tr>
                      <td width="191" height="35" bgcolor="#E1EFFA">&nbsp;</td>
                    </tr>
                </table></td>