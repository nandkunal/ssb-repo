<?php
require_once('ADAO.php');
class UserFunctions extends ADAO
{
	
	public static function isUserAuthenticated(){
		if(isset($_SESSION['id'])){
			return true;
		}
		else
		return false;
		
		
	}
	
	
 public static function getPriorityLargerTag($p){
switch($p){
	case 1:
	$tag="tags/normaltag.png";
	break; 
	 case 2:
	 $tag="tags/normaltag.jpg";
	 	break;
	 case 3:
	 $tag="tags/prioritytag.png";
	 	break;
	 case 4:
	 $tag="tags/prefferedtag.png";
	 	break;
}

return $tag;	 
	 
	 
 }
	
	
 public static function getPrioritySmallerTag($p){
switch($p){
	case 1:
	$tag="tags/freetag_small.png";
	break; 
	 case 2:
	 $tag="tags/normaltag_small.jpg";
	 	break;
	 case 3:
	 $tag="tags/prioritytag_small.png";
	 	break;
	 case 4:
	 $tag="tags/prefferedtag_small.png";
	 	break;
}

return $tag;	 
	 
	 
 }	
	
	
	 public static function getStatus($status){
switch($status){
	case 1:
	$tag="Active";
	break; 
	 case 0:
	 $tag="Deactive";
	 	break;
	
}

return $tag;	 
	 
	 
 }
	
	 public static function getPriorityName($priority){
switch($priority){
	case 1:
	$tag="Free";
	break; 
	 case 2:
	 $tag="Normal";
	 	break;
		case 3:
	$tag="Priority";
	break; 
	 case 4:
	 $tag="Preffered";
	 	break;
	
}

return $tag;	 
	 
	 
 }	
 
 public static function getPropertyTypeName($id){
	 
	switch($id){
	case 1:
	$tag="Kothi";
	break; 
	 case 2:
	 $tag="Flat";
	 	break;
		case 3:
	$tag="Plot";
	break; 
	case 4:
	$tag="PG";
	break;
	case 5:
	$tag="Agricultural Land";
	break;
	
	
}

return $tag; 
	 
	 
	 
	 
 }
	
	
}
?>