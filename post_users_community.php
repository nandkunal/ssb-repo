<?php
session_start();
require_once("administrator/includes/ADAO.php");
require_once("administrator/includes/projectConstant.php");
$cat_id=1001;
$name=$_POST['name'];
$caste=$_POST['caste'];
$priority=3;
$user_id=$_SESSION['id'];
$res=ADAO::postCommunityProfile($user_id,$cat_id,$caste,$priority);
if($res==1){
	?>
	<script>
	alert("Congratulations, Your Community has been Posted Successfully ");
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