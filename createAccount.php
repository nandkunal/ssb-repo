<?php
require_once("administrator/includes/ADAO.php");
$username=$_POST['username'];
$password=$_POST['password'];
$name=$_POST['name'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$city=$_POST['city'];
$distt=$_POST['distt'];
$state=$_POST['state'];
$country=$_POST['country'];
$address=$_POST['address'];
$bloodgroup=$_POST['bloodgroup'];
if(isset($_POST['donor'])){
	$donor="yes";
}
else
{
	$donor="no";
}
$role=7;
$status=0;
$res=ADAO::createUsersAccount($username,$password,$name,$email,$contact,$city,$distt,$state,$country,$address,$role,$status,$bloodgroup,$donor);
if($res==1){
	?>
	<script>
	alert("Congratulations, Your Account has been Successfully Created");
	window.location.href="login-signup.php";
	</script>
    <?php
}else{?>
	
	<script>
	alert("Error!!Username already taken,Please try with some other Username");
	window.location.href="login-signup.php";
	</script>
	<?php
	
}

?>

