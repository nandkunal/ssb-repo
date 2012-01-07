<?php
session_start();
require_once("administrator/includes/ADAO.php");
require_once("administrator/includes/clsSimpleImage.php");
require_once("administrator/includes/projectConstant.php");
$image = new SimpleImage();
$cat_id=1004;
$name=$_POST['name'];
$bt=$_POST['bt'];
$cname=$_POST['cname'];
$website=$_POST['website'];
$mobile=$_POST['mobile'];
$contact=$_POST['contact'];
$curl=$_POST['email'];
$address=$_POST['address'];
$city=$_POST['city'];
$distt=$_POST['distt'];
$state=$_POST['state'];
$cdes=$_POST['cdes'];
$features=$_POST['features'];
$logo=$_FILES["file"]["name"];
$logo_file_path_thumb="classified";
$logo_path=$logo_file_path_thumb."/".$logo;
 move_uploaded_file($_FILES["file"]["tmp_name"],
      $logo_file_path_thumb."/".$logo);
	  $image->load($logo_file_path_thumb."/".$logo);
$image->resize(75,75);
$image->save($logo_file_path_thumb."/".$logo);
chmod ($logo_file_path_thumb."/".$logo ,0755);
$user_id=$_SESSION['id'];
$role=USER_ROLE;
$priority=3;
 $res=ADAO::postAds($user_id,$cat_id,$bt,$cname,$website,$curl,$contact,$mobile,$city,$distt,$state,$address,$logo,$cdes,$priority,$features);

if($res==1){
	?>
	<script>
	alert("Congratulations, Your Ad has been Posted Successfully ");
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