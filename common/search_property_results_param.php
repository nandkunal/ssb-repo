<?php

$res=ADAO::getPropertySearchResults($key,$cat,$city);


?>
<table width="1000" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><img src="images/bodytop.jpg" width="1000" height="8" /></td>
  </tr>
  <tr>
    <td background="images/bodybg.jpg"><table width="980" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="619">
        <?php 
		foreach($res as $row){
		
		?>
        <table width="600" border="0" align="left" cellpadding="0" cellspacing="0">
          <tr>
            <td width="600" height="112"><table width="590" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td height="5" colspan="3"><img src="images/searchbartop.jpg" width="590" height="6" /></td>
              </tr>
              <tr>
                <td width="2" height="110" background="images/searchbarlft.jpg"></td>
                <td width="586" height="110" background="images/searchbarbodybg.jpg"><table width="570" height="100" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td width="163" rowspan="2"><img src="" height="100px" width="126px" border="0" /></td>
                      <td width="407" height="33"><table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
                          <tr>
                            <td width="292"><div id="add_title"><h3><a href="#"><?php if($row['estate_pur']==1){ echo "Buy";} else echo "Sell";?></a></h3></div></td>
                            <td width="108"><img src="" width="100" height="30" /></td>
                          </tr>
                          <tr>
                          <td colspan="2"><p id="meta-info">Property&nbsp;|&nbsp;<?php echo UserFunctions::getPropertyTypeName($row['estate_type']);?></p></td>
                      </table></td>
                    </tr>
                    <tr>
                      <td><p id="des-info"><?php echo $row['estate_des'];?></p></td>
                    </tr>
                     <tr><td>&nbsp;</td>
                    
                    <td><p id="contact-info">Address:&nbsp;<?php echo $row['estate_loc'];?>,<?php echo $row['estate_district'];?>,<?php echo $row['estate_city'];?>,<?php echo $row['estate_state'];?></p></td>
                    </tr>
                    <tr><td>&nbsp;</td>
                    
                    <td><p id="contact-info">Phone:&nbsp;<?php echo $row['estate_cno'];?></p></td>
                    </tr>
                   
                </table></td>
                <td width="2" height="110" background="images/searchbarrt.jpg"></td>
              </tr>
              <tr>
                <td height="5" colspan="3"><img src="images/searchbarbot.jpg" width="590" height="6" /></td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td height="10" bgcolor="#FDFDFD">&nbsp;</td>
          </tr>
        

        </table>
        <?php
		}
		?>
        </td>
        <td>
        <?php if(UserFunctions::isUserAuthenticated()){
			 
			?>
       <?php  include("common/user_menu.php"); ?>
               </td>
                <?php }?>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><img src="images/bodybot.jpg" width="1000" height="8" /></td>
  </tr>
</table>
 
