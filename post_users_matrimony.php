<?php
session_start();
require_once("administrator/includes/ADAO.php");
require_once("administrator/includes/clsSimpleImage.php");
require_once("administrator/includes/projectConstant.php");
$image = new SimpleImage();
$cat_id=1002;
$name=$_POST['name'];
$cat=$_POST['cat'];
$caste=$_POST['caste'];
$dob=$_POST['dob'];
$age=$_POST['age'];
$height=$_POST['height'];
$qual=$_POST['qual'];
$cno=$_POST['cno'];
$profile=$_FILES["file"]["name"];
$des=$_POST['des'];
$profile_file_path_thumb="matrimony";
$profile_path=$profile_file_path_thumb."/".$profile;
 move_uploaded_file($_FILES["file"]["tmp_name"],
      $profile_file_path_thumb."/".$profile);
	  $image->load($profile_file_path_thumb."/".$profile);
$image->resize(75,75);
$image->save($profile_file_path_thumb."/".$profile);
chmod ($profile_file_path_thumb."/".$profile ,0755);
$user_id=$_SESSION['id'];
$status=1;
$priority=3;
 $res=ADAO::postMatrimonyProfile($user_id,$cat_id,$cat,$caste,$dob,$age,$height,$qual,$des,$cno,$profile_path,$status,$priority);
if($res==1){
	?>
	<script>
	alert("Congratulations, Your Profile has been Posted Successfully ");
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