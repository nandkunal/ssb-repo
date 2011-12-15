<?php
require_once("includes/ADAO.php");
$id=$_POST['id'];
$value=$_POST['value'];
$cat_id=$_POST['cat_id'];
$res=ADAO::updateCategories($id,$value,$cat_id);
?>