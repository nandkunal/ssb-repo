<table width="1000" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><img src="images/bodytop.jpg" width="1000" height="8" /></td>
      </tr>
      <tr>
        <td background="images/bodybg.jpg"><table width="980" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td><table width="726" border="0" align="left" cellpadding="0" cellspacing="0">
              
              <tr>
                <td width="726" height="45"><table width="590" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" colspan="3"><img src="images/searchbartop_big.jpg" width="700" height="6" /></td>
                  </tr>
                  <tr>
                    <td width="2" height="110" background="images/searchbarlft.jpg"></td>
                    <td width="586" height="400" align="center" valign="top" background="images/searchbarbodybgbig.jpg"><table width="680" height="100" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td height="70" colspan="3"><table width="668" border="0" align="center" cellpadding="0" cellspacing="0">
                              <tr>
                                <td width="514"><div id="detail_header"><h3><?php echo $row5['company_name'];?></h3></div></td>
                                <td width="154" align="right"><img src="<?php echo UserFunctions::getPriorityLargerTag($row5['priority']);?>" width="148" height="41" /></td>
                              </tr>
                                                </table></td>
                        </tr>
                      <tr>
                        <td width="257" height="200" align="center" valign="middle"><table width="253" height="196" border="0" cellpadding="0" cellspacing="0">
                          <tr>
                            <td bgcolor="#FFFFFF"><img src="<?php echo $row5['company_logo'];?>"></td>
                          </tr>
                        </table></td>
                        <td width="10">&nbsp;</td>
                        <td width="413" height="200"><table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
                          <tr>
                            <td colspan="2"><span id="tags">City</span>:<span id="vals"><?php echo $row5['company_city'];?></span></td>
                          </tr>
                          <tr>
                            <td colspan="2"><span id="tags">District</span>:<span id="vals"><?php echo $row5['company_district'];?></span></td>
                          </tr>
                          <tr>
                            <td colspan="2"><span id="tags">State</span>:<span id="vals"><?php echo $row5['company_state'];?></span></td>
                          </tr>
                          <tr>
                            <td colspan="2"><span id="tags">Address</span>:<span id="vals"><?php echo $row5['company_address'];?></span></td>
                          </tr>
                          <tr>
                            <td colspan="2"><span id="tags">Contact Number</span>:<span id="vals"<?php echo $row5['company_name'];?>></span></td>
                            </tr>
                            <tr>
                            <td colspan="2"><span id="tags">Email</span>:<span id="vals"><?php echo $row5['company_email'];?></span></td>
                            </tr>
                          
                        </table></td>
                      </tr>
                      <tr>
                        <td height="200" colspan="3"><table width="670" border="0" align="center" cellpadding="5" cellspacing="0">
                          <tr>
                            <td>Description</td>
                          </tr>
                          <tr>
                            <td><p id="des-info"><?php echo $row5['company_des'];?></p></td>
                          </tr>
                          <tr>
                            <td>Features</td>
                          </tr>
                          <tr>
                            <td><p id="des-info"><?php echo $row5['company_spec'];?></p></td>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                          </tr>
                        </table></td>
                        </tr>
                    </table></td>
                    <td width="2" height="110" background="images/searchbarrt.jpg"></td>
                  </tr>
                  <tr>
                    <td height="5" colspan="3"><img src="images/searchbarbot_big.jpg" width="700" height="6" /></td>
                  </tr>
                </table></td>
              </tr>
              <tr>
                <td height="400">&nbsp;</td>
              </tr>
            </table></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td><img src="images/bodybot.jpg" width="1000" height="8" /></td>
      </tr>
    </table>