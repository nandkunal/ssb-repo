<?php
require_once("administrator/includes/ADAO.php");
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
 $res=ADAO::postAds($cat_id,$bt,$cname,$curl,$contact,$city,$distt,$state,$address,$cdes);


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

