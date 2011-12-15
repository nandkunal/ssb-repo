<?php
require_once("includes/ADAO.php");
$check_id=$_POST['id'];
$res=ADAO::deleteCategories($check_id);
if($res=1){
	?>
    <script>
    alert("Category Deleted Successfully");
    window.location.href="view_categories.php";
	</script>
    <?php
}
else{
	?>
	 <script>
  alert("Error,There was some Problem,Please Try again");
    window.location.href="view_categories.php";
	</script>
    <?php
}
?>