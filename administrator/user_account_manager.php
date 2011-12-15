<?php 
session_start();
require_once('includes/RoleManager.php');
require_once('includes/ADAO.php');
require_once('includes/UserFunctions.php');
$roleAssigned=new RoleManager($_SESSION['role']);
$roleAssigned->getAvailableMenu();
$menuName=$roleAssigned->getMenuName();
$menuUrl=$roleAssigned->getMenuUrl();
$res=ADAO::getUsersList();

//include('authen.php');?>
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
$(document).ready(function()
{
	$(".edit_link").click(function(){
	
		var id=$(this).attr("id");

		$("#name_"+id).hide();
        $("#username_"+id).hide();
		$("#password_"+id).hide();
		$("#email_"+id).hide();
		$("#cno_"+id).hide();
		$("#status_"+id).hide();
		$("#name_input_"+id).show();
		$("#username_input_"+id).show();
		$("#password_input_"+id).show();
		$("#email_input_"+id).show();
		$("#cno_input_"+id).show();
		$("#status_input_"+id).show();
		$("#edit_save").show();
		$("#save_data").click(function(){
			
			
			var name=$("#name_input_"+id).val();
			var username=$("#username_input_"+id).val();
			var password=$("#password_input_"+id).val();
			var email=$("#email_input_"+id).val();
			var cno=$("#cno_input_"+id).val();
			var status=$("#status_input_"+id).val();
			var dataString = 'id='+ id +'&name='+name+'&username='+username+'&password='+password+'&email='+email+'&cno='+cno+'&status='+status;
			if(name.length>0&& password.length>0)
				{
				
				$.ajax({
				type: "POST",
				url: "user_account_update.php",
				data: dataString,
				cache: false,
				success: function(html)
				{ 
				
			
				window.location.href="user_account_manager.php";	
				}
				
				});
				}
				else
				{
				alert('Enter something.');
				}
			
		

	});
	});
	
$(".editbox").mouseup(function()
{
return false
});
$(document).mouseup(function()
{
$(".editbox").hide();
$(".text").show();
$("#edit_save").hide();
});



});

function createAccount(){
	
window.location.href="create_admin_account.php";	
	
}
function toggleChecked(status)
 {
$(".check").each( function() {
$(this).attr("checked",status);
var tex=status?"Deselect":"Select";
$("#status").text(tex);
});
}
function validate()
{
var chks = document.getElementsByName('id[]');
var checkCount = 0;
for (var i = 0; i < chks.length; i++)
{
if (chks[i].checked)
{
checkCount++;
}
}
if (checkCount > 0)
{

return true;
}
else{
	alert("Select atleast one Account");
return false;
}
}
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
                        <table height="auto" cellpadding="0" cellspacing="0" align="center" id="view_reservation_tbl">
                        <thead>
                   <th width="106"><input type="checkbox" name="checkall" value="checkall" id="checkall" onClick="toggleChecked(this.checked)"><span id="status">Select</span></th>
                        <th width="141">Name</th>
                        <th width="165">USERNAME</th>
                        <th width="158">PASSWORD</th>
                        <th width="114">email</th>
                         <th width="114">Contact No</th>
                          <th width="114">Status</th>
                          <th width="168">Actions</th>
                        <td width="1"></thead>
                        <tbody>
                        <?php 
						   $count=0;  
						   foreach($res as $row){
                            switch($count){
                            case 0:
                            $class="odd";
							break;
							case 1:
							$class="even";
							break;
							
							}
							?>
                        <tr class="edit_tr" id="<?php echo $row['id'];?>">
                           <td class="<?php echo $class;?>"><input type="checkbox" name="id[]" value="<?php echo $row['id'];?>" class="check" id="<?php echo $row['id'];?>"></td>
                        <td class="<?php echo $class;?>"><span id="name_<?php echo $row['id'];?>" class="text"><?php echo $row['name'];?></span><input type="text" value="<?php echo $row['name'];?>" class="editbox" id="name_input_<?php echo $row['id'];?>"/></td>
                         <td class="<?php echo $class;?>"><span id="username_<?php echo $row['id'];?>" class="text"><?php echo $row['username'];?></span><input type="text" value="<?php echo $row['username'];?> " class="editbox" id="username_input_<?php echo $row['id'];?>"/></td>
                         <td class="<?php echo $class;?>"><span id="password_<?php echo $row['id'];?>" class="text"><?php echo $row['password'];?></span><input type="password" value="<?php echo $row['password'];?>" class="editbox" id="password_input_<?php echo $row['id'];?>"/></td>
                         <td class="<?php echo $class;?>"><span id="email_<?php echo $row['id'];?>" class="text"><?php echo $row['email'];?></span><input type="text" value="<?php echo $row['email'];?>" class="editbox" id="email_input_<?php echo $row['id'];?>"/></td>
                         <td class="<?php echo $class;?>"><span id="cno_<?php echo $row['id'];?>" class="text"><?php echo $row['cno'];?></span><input type="text" value="<?php echo $row['cno'];?>" class="editbox" id="cno_input_<?php echo $row['id'];?>"/></td>
                         <td class="<?php echo $class;?>"><span id="status_<?php echo $row['id'];?>" class="text"><?php echo UserFunctions::getStatus($row['status']);?></span><select size="1" class="editbox" id="status_input_<?php echo $row['id'];?>" ><option value="<?php echo $row['status'];?>" selected="selected"><?php echo  UserFunctions::getStatus($row['status']);?></option>
<option value="1">Active</option><option value="0">Deactive</option>
                                                                                                  
                                                </select></td>
                         
                         <td class="<?php echo $class;?>"><a href="#" id="<?php echo $row['id'];?>" class="edit_link">Edit</a></td>
                        </tr>
                        
                           <?php $count++;if($count>1){$count=0;} }?>
                        
                        </tbody>
                        <tfoot>
                        <tr>
                        <td colspan="11">&nbsp;</td>
                        </tr>
                        <tr id="edit_save">
                         <td colspan="11" align="right"><input class="button" name="save" type="button" value="Save" id="save_data" /></td>
                         </tr>
                          <tr>
                        <td colspan="6">&nbsp;</td>
                        </tr>
                       
                        </tfoot>
                        
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

