<?php
require_once("administrator/includes/ADAO.php");
require_once("administrator/includes/projectConstant.php");
$cat_id=1004;
$bt=$_POST['bt'];
$cname=$_POST['cname'];
$curl=$_POST['crul'];
$contact=$_POST['contact'];
$city=$_POST['city'];
$distt=$_POST['distt'];
$state=$_POST['state'];
$address=$_POST['address'];
$cdes=$_POST['cdes'];
$features="none";
$logo=LOGO_FREE_ADS;
$user_id=TEMP_USER_ID;
$priority=1;
 $res=ADAO::postAds($user_id,$cat_id,$bt,$cname,$curl,$contact,$city,$distt,$state,$address,$logo,$cdes,$priority,$features);



if($res==1){
	?>
	<script>
	alert("Congratulations, Your Ad has been Posted Successfully ");
	window.location.href="postad.php";
	</script>
    <?php
}else{?>
	
	<script>
	alert("Error!!");
	window.location.href="postad.php";
	</script>
	<?php
	
}

?>

