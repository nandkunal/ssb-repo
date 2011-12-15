<?php 
session_start();
require_once('includes/RoleManager.php');
require_once('includes/ADAO.php');
$roleAssigned=new RoleManager($_SESSION['role']);
$roleAssigned->getAvailableMenu();
$menuName=$roleAssigned->getMenuName();
$menuUrl=$roleAssigned->getMenuUrl();
$res2=ADAO::getMainCategoryList();
if(isset($_POST['submit'])){
 $res=ADAO::addSubCategory($_POST['cname'],$_POST['sub_cat']);
 switch($res){
	 case 1:
	 $message="Category Added Successfully";
	 break;
	 case 2:
	 $message="Category already Exists,Please try with other Name";
	 break;
 }
}
else{
    
}
//include('authen.php');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin-Home</title>
<link href="css/style.css" type="text/css" rel="stylesheet" media="screen" />
<link rel="stylesheet" type="text/css" href="chrometheme/chromestyle.css" />
<script type="text/javascript" src="js/chrome.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript">


</script>
</head>

<body>
    <table height="318" width="1000px" cellpadding="0" cellspacing="0" align="center" bgcolor="#FFFFFF" id="content_tbl">
      
        <tr>
            <td  style="vertical-align:top">
                <table height="30px" width="900px" cellpadding="0" cellspacing="0" align="center" style="vertical-align:top">
                    <tr>
                       <td><?php include("common/top_nav.php");?></td>
                      

                    </tr>
                    <tr>
                        <td align="center" colspan="6">&nbsp;</td>
                    </tr>
                    <tr>
                        <td align="center" colspan="6"><?php echo $roleAssigned->getWelcome(); ?></td>
                    </tr>
 <tr>
                        <td align="center" colspan="6" height="auto">
                        <table height="200px" cellpadding="0" cellspacing="20px" align="center">
                        <tr>
                        <td colspan="2"><h2>Create Sub Category</h2></td>
                        </tr>
                        <tr>
                        <td colspan="2" align="center"><?php if(isset($_POST['submit'])){ echo $message;}?></td>
                        </tr>
                         <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                        <tr>
                         <td><label for="name">Category Name*</label></td>
                         <td><input class="input-small" id="cname" name="cname" /></td>
                         </tr>
                          <tr>
                         <td><label for="username">Sub Category*</label></td>
                         <td><select class="input-small" id="main_cat" name="sub_cat" size="1" /><option value="0" selected="selected">Select</option><?php  $res1=ADAO::getMainCategoryList();
											   foreach($res2 as $row2){
												   ?>
<option value="<?php echo $row2['id'];?>"><?php echo $row2['value'];?></option>
                                                 <?php }?>                                                  
                                                </select></td>
                         </tr>
                        
                         
                         <tr>
                         <td align="center" colspan="2"><input class="button" name="submit" type="submit" value="Add" /></td>
                         </tr>
                         </form>
                         
                        </table>
                        </td>
                    </tr> 
                      <tr>
                        <td align="center" colspan="6"><?php include("common/footer.php");?></td>
                    </tr>    
                </table>
            </td>
        </tr>
    
    </table>

</body>
</html>

