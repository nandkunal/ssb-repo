<?php
session_start();
require_once("administrator/includes/ADAO.php");
require_once("administrator/includes/projectConstant.php");
$id=$_SESSION['id'];
$contact=$_POST['contact'];
$city=$_POST['city'];
$distt=$_POST['distt'];
$state=$_POST['state'];
$country=$_POST['country'];
$address=$_POST['address'];
$bloodgroup=$_POST['bloodgroup'];
$res=ADAO::updateUsersProfile($id,$contact,$city,$distt,$state,$country,$address,$bloodgroup);
if($res==1){
	?>
	<script>
	alert(" Your Profile has been Successfully Updated");
	window.location.href="edit_user_profile.php";
	</script>
    <?php
}else{?>
	
	<script>
	alert("Error!!Cannot Update the details");
	window.location.href="edit_user_profile.php";
	</script>
	<?php
	
}

?>