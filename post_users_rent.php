<?php
session_start();
require_once("administrator/includes/ADAO.php");
require_once("administrator/includes/projectConstant.php");
$cat_id=1005;

$purpose=$_POST['purpose'];
$property=$_POST['property'];
$des=$_POST['des'];
$location=$_POST['location'];
$city=$_POST['city'];
$distt=$_POST['distt'];
$state=$_POST['state'];
$country=$_POST['country'];
$cno=$_POST['cno'];
$email=$_POST['email'];
$priority=3;
$user_id=$_SESSION['id'];
$res=ADAO::postRealEstateProfile($user_id,$cat_id,$purpose,$property,$des,$location,$city,$distt,$state,$country,$cno,$email,$priority);
if($res==1){
	?>
	<script>
	alert("Congratulations, Your Ad for Real State has been Posted Successfully ");
	window.location.href="home.php";
	</script>
    <?php
}else{?>
	
	<script>
	alert("Error!!");
	window.location.href="home.php";
	</script>
	<?php
	
}
?>