<?php
require_once("includes/ADAO.php");
$id=$_POST['id'];
$cname=$_POST['cname'];
$pr=$_POST['pr'];
$res=ADAO::updateClassifiedsPriority($id,$cname,$pr);
?>