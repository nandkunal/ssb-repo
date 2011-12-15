<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Social Search Book</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.style4 {
	font-family: Calibri;
	color: #F36233;
}
a:link {
	color: #FFFFFF;
	text-decoration: none;
}
a:visited {
	color: #FFFFFF;
	text-decoration: none;
}
a:hover {
	color: #FC7C3F;
	text-decoration: none;
}
a:active {
	color: #FFFFFF;
	text-decoration: none;
}
-->
</style>
<script type="text/JavaScript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
</head>

<body>
<form id="form1" name="form1" method="get" action="getPropertySearchResults.php">
  <table width="1000" height="75" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td background="images/searchbg.jpg"><table width="970" height="55" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="311">
              <input name="search_key" type="text" value="Type a keyword?" class="tb7"  onclick="if(this.value=='Type a keyword?'){this.value=''; }" 
    onblur="if(this.value==''){this.value='Type a keyword?';}" />
            </td>
            <td width="221px" align="left"><select name="category" size="1" id="category" class="selectfield"><option selected="selected" value="0">Select</option><option value="1">Kothi</option><option value="2">Flat</option><option value="3">Plot</option>
           
            </select></td>
            <td width="294" align="right"><label>
              <input name="city" type="text" value="Select City" size="20" class="tb7" onclick="if(this.value=='Select your City'){this.value=''; }" 
    onblur="if(this.value==''){this.value='Select your City';}"  />
            </label></td>
            <td width="137" align="right"><input type="image" src="images/search.jpg" width="81" height="35" name="search" /></td>
          </tr>
      </table></td>
    </tr>
  </table>
</form>
</body>
</html>
