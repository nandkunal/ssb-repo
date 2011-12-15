<?php
require_once("includes/ADAO.php");
$check_id=$_POST['id'];
$res=ADAO::deleteAdminAccount($check_id);
if($res=1){
	?>
    <script>
    alert("Account Deleted Successfully");
    window.location.href="admin_account_manager.php";
	</script>
    <?php
}
else{
	?>
	 <script>
  alert("Error,There was some Problem,Please Try again");
    window.location.href="admin_account_manager.php";
	</script>
    <?php
}
?>