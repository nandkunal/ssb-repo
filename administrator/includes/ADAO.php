<?php
require_once('projectConstant.php');
require_once('DBUtil.php');
class ADAO extends DBUtil
{
    public static function createSubAdminAccount($name,$username,$password){
           try
        {
            $dbh = new PDO(DB_DSN, DB_LOGIN, DB_PASSWORD);

        }
        catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
      
        $password=md5($password);
		$date=date('Y-m-d H:i:s');
        $role=SUB_ADMIN_ROLE;
          $stmt=$dbh->prepare("CALL ".SP_CREATE_SUBADMIN."(?,?,?,?,?)");
        $stmt->bindParam(1,$name);
        $stmt->bindParam(2,$username);
        $stmt->bindParam(3,$password);
        $stmt->bindParam(4,$date);
        $stmt->bindParam(5,$role);
        $stmt->execute();
        $row=$stmt->fetch();
        $dbh=null;
        return $row['res'];

        
    }

    public static function getSearchCategory(){
          try
        {
            $dbh = new PDO(DB_DSN, DB_LOGIN, DB_PASSWORD);

        }
        catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
          $stmt=$dbh->prepare("select * from t_sub_cat where main_cat_id=1004");
          $stmt->execute();
         $row=$stmt->fetchAll();
        $dbh=null;
        return $row;


    }
	
	    public static function getSearchCategoryNameById($id){
          try
        {
            $dbh = new PDO(DB_DSN, DB_LOGIN, DB_PASSWORD);

        }
        catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
          $stmt=$dbh->prepare("select value from t_sub_cat where main_cat_id=1004 and id=".$id."");
          $stmt->execute();
         $row=$stmt->fetch();
        $dbh=null;
        return $row['value'];


    }
	
	    public static function getMainCategoryList(){
          try
        {
            $dbh = new PDO(DB_DSN, DB_LOGIN, DB_PASSWORD);

        }
        catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
          $stmt=$dbh->prepare("select * from t_main_cat");
          $stmt->execute();
         $row=$stmt->fetchAll();
        $dbh=null;
        return $row;


    }
	
    public  static  function getDefaultSearchList($status,$priority,$category){
        try
        {
            $dbh = new PDO(DB_DSN, DB_LOGIN, DB_PASSWORD);

        }
        catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
            
          $stmt=$dbh->prepare("select * from t_user_classified where status=? and priority=? and cat_id=? limit 10");
          $stmt->bindParam(1,$status);
          $stmt->bindParam(2,$priority);
          $stmt->bindParam(3,$category);

          $stmt->execute();

         $row=$stmt->fetchAll();
        $dbh=null;
         return $row;

    }
    public static function getSubAdminList(){
           try
        {
            $dbh = new PDO(DB_DSN, DB_LOGIN, DB_PASSWORD);

        }
        catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }

          $stmt=$dbh->prepare("select * from t_admin_login");
         

          $stmt->execute();

         $row=$stmt->fetchAll();
        $dbh=null;
         return $row;
    }
	
	

    public  static function updateAdminList($name,$username,$pass,$id){
             try
        {
            $dbh = new PDO(DB_DSN, DB_LOGIN, DB_PASSWORD);

        }
        catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
          $stmt=$dbh->prepare("CALL ".SP_UPDATE_ADMIN_ACCOUNT."(?,?,?,?)");
        $stmt->bindParam(1,$name);
        $stmt->bindParam(2,$username);
        $stmt->bindParam(3,$pass);
        $stmt->bindParam(4,$id);
        $stmt->execute();
         $res=$stmt->fetch();
        $dbh=null;
         return $res;
    }
        public  static function deleteAdminAccount($array_id){
             try
        {
            $dbh = new PDO(DB_DSN, DB_LOGIN, DB_PASSWORD);

        }
        catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
            foreach($array_id as $id){
            $stmt=$dbh->prepare("CALL ".SP_DEL_ADMIN."(?)");
             $stmt->bindParam(1,$id);
             $stmt->execute();
             $res=$stmt->fetch();
                
            }
            return $res;

        }
    public static function getCategoryListUsers($cat_id){
                   try
        {
            $dbh = new PDO(DB_DSN, DB_LOGIN, DB_PASSWORD);

        }
        catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        switch($cat_id){
            case 1001:
                $tbl_name="t_user_community";
                break;
            case 1002:
                $tbl_name="t_user_marraigeportal";
                break;
            case 1003:
                $tbl_name="t_user_classified";
                break;
            case 1004:
                $tbl_name="t_user_realestate";
                break;
        }
            


          $stmt=$dbh->prepare("select * from ".$tbl_name."");


          $stmt->execute();

         $row=$stmt->fetchAll();
        $dbh=null;
         return $row;

    }

public static function createUsersAccount($username,$password,$name,$email,$contact,$city,$distt,$state,$country,$address,$role,$status,$bloodgroup,$donor){
             try
        {
            $dbh = new PDO(DB_DSN, DB_LOGIN, DB_PASSWORD);

        }
        catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
          $doj=date('Y-m-d H:i:s');
          $stmt=$dbh->prepare("CALL ".SP_USER_REG. "(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
		  $password=md5($password);
        $stmt->bindParam(1,$username);
        $stmt->bindParam(2,$password);
        $stmt->bindParam(3,$name);
        $stmt->bindParam(4,$email);
        $stmt->bindParam(5,$contact);
        $stmt->bindParam(6,$city);
        $stmt->bindParam(7,$distt);
        $stmt->bindParam(8,$state);
        $stmt->bindParam(9,$country);
        $stmt->bindParam(10,$address);
        $stmt->bindParam(11,$role);
        $stmt->bindParam(12,$status);
		$stmt->bindParam(13,$bloodgroup);
		$stmt->bindParam(14,$donor);
		$stmt->bindParam(15,$doj);
        $stmt->execute();
         $res=$stmt->fetch();
        $dbh=null;
         return $res['message'];

    }

    public static function postAds($user_id,$cat_id,$bt,$cname,$website,$curl,$contact,$mobile,$city,$distt,$state,$address,$logo,$cdes,$priority,$features){
		  $status=1;
             try
        {
            $dbh = new PDO(DB_DSN, DB_LOGIN, DB_PASSWORD);

        }
        catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
         
      

          $stmt=$dbh->prepare("INSERT into t_user_classified VALUES(NULL,".$user_id.",".$cat_id.",".$bt.",'".$cname."','".$curl."','".$website."','".$contact."','".$mobile."','".$city."','".$distt."','".$state."','".$address."','".$logo."','".$cdes."','".$features."',".$priority.",".$status.")");
        
		$stmt->execute();
         
        $dbh=null;
		return 1;
        
    }
	public static function getAllSubCategories(){
		         try
        {
            $dbh = new PDO(DB_DSN, DB_LOGIN, DB_PASSWORD);

        }
        catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
		   $stmt=$dbh->prepare("select * from t_sub_cat");
          $stmt->execute();
           $row=$stmt->fetchAll();
        $dbh=null;
         return $row;
	
	}
	public static function getCategoryNameById($cat_id){
		
			         try
        {
            $dbh = new PDO(DB_DSN, DB_LOGIN, DB_PASSWORD);

        }
        catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
		  $stmt=$dbh->prepare("CALL ".SP_CATNAME_BYID. "(?)");
         $stmt->bindParam(1,$cat_id);
		  
		$stmt->execute();
         $res=$stmt->fetch();
        $dbh=null;
         return $res['cat_name'];
		
	}
	public static function getClassifiedSearchCase($search_key,$cat,$city){
			         try
        {
            $dbh = new PDO(DB_DSN, DB_LOGIN, DB_PASSWORD);

        }
        catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
		  $stmt=$dbh->prepare("CALL ".SP_GET_CLASS_SEARCH."(?,?,?)");
         $stmt->bindParam(1,$search_key);
		 $stmt->bindParam(2,$cat);
		 $stmt->bindParam(3,$city); 
		$stmt->execute();
         $res=$stmt->fetch();
        $dbh=null;
         return $res['res'];
		
		
	}
	public static function getClassifiedsSearchDirect($key,$cat,$city){
	       try
        {
            $dbh = new PDO(DB_DSN, DB_LOGIN, DB_PASSWORD);

        }
        catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }

          $stmt=$dbh->prepare("select * from t_user_classified where company_name='".$key."' and b_type=".$cat." and company_city='".$city."' order by priority desc");
         

          $stmt->execute();

         $row=$stmt->fetchAll();
        $dbh=null;
         return $row;	
		
		
	}
	public static function getClassifiedsSearchPriorityWise($key,$cat,$city){
		       try
        {
            $dbh = new PDO(DB_DSN, DB_LOGIN, DB_PASSWORD);

        }
        catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }

          $stmt=$dbh->prepare("select * from t_user_classified where company_des like '%".$key."%' or company_spec like '%".$key."%' or company_name like '%".$key."%' and b_type=".$cat." and company_city='".$city."' order by priority desc");
         

          $stmt->execute();

         $row=$stmt->fetchAll();
        $dbh=null;
         return $row;
		
	}
	
	
	public static function postMatrimonyProfile($user_id,$cat_id,$cat,$caste,$dob,$age,$height,$qual,$des,$cno,$profile_path,$status,$priority){
		
		       try
        {
            $dbh = new PDO(DB_DSN, DB_LOGIN, DB_PASSWORD);

        }
        catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
		
		$null="NULL";
		 $stmt=$dbh->prepare("INSERT INTO t_user_marraigeportal values(?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
			  $stmt->bindParam(1,$null);
			  $stmt->bindParam(2,$user_id);
			  $stmt->bindParam(3,$cat_id);
			  $stmt->bindParam(4,$caste);
			  $stmt->bindParam(5,$cat);
              $stmt->bindParam(6,$dob);
			  $stmt->bindParam(7,$age);
			  $stmt->bindParam(8,$height);
			  $stmt->bindParam(9,$qual);
			  $stmt->bindParam(10,$des);
			  $stmt->bindParam(11,$profile_path);
			  $stmt->bindParam(12,$cno);
			  $stmt->bindParam(13,$priority);
			  $stmt->bindParam(14,$status);

		   $stmt->execute();
           $dbh=null;
           return 1;
	}
	
	public static function postCommunityProfile($user_id,$cat_id,$caste,$priority){
		
		       try
        {
            $dbh = new PDO(DB_DSN, DB_LOGIN, DB_PASSWORD);

        }
        catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
		
		$null="NULL";
		
		 $stmt=$dbh->prepare("INSERT INTO t_user_community values(?,?,?,?,?)");
			  $stmt->bindParam(1,$null);
			  $stmt->bindParam(2,$user_id);
			  $stmt->bindParam(3,$cat_id);
			  $stmt->bindParam(4,$caste);
			  $stmt->bindParam(5,$priority);
			  $stmt->execute();
			  $dbh=null;
			  return 1;
		}
		
		public static function postRealEstateProfile($user_id,$cat_id,$purpose,$property,$des,$location,$city,$distt,$state,$country,$cno,$email,$priority){
			
			       try
        {
            $dbh = new PDO(DB_DSN, DB_LOGIN, DB_PASSWORD);

        }
        catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
		
		$null="NULL";
		$status=1;
		
		 $stmt=$dbh->prepare("INSERT INTO t_user_realestate values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
			  $stmt->bindParam(1,$null);
			  $stmt->bindParam(2,$user_id);
			  $stmt->bindParam(3,$cat_id);
			  $stmt->bindParam(4,$purpose);
			  $stmt->bindParam(5,$property);
			  $stmt->bindParam(6,$des);
			  $stmt->bindParam(7,$location);
			  $stmt->bindParam(8,$city);
			  $stmt->bindParam(9,$distt);
			  $stmt->bindParam(10,$state);
			  $stmt->bindParam(11,$country);
			  $stmt->bindParam(12,$cno);
			  $stmt->bindParam(13,$email);
			  $stmt->bindParam(14,$status);
			  $stmt->bindParam(15,$priority);
			  $stmt->execute();
			  $dbh=null;
			  return 1;
	
		}
		
		public static function getBannerName($cat_id){
				         try
        {
            $dbh = new PDO(DB_DSN, DB_LOGIN, DB_PASSWORD);

        }
        catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
		  $stmt=$dbh->prepare("CALL ".SP_GET_BANNER."(?)");
         $stmt->bindParam(1,$cat_id);
		$stmt->execute();
         $res=$stmt->fetch();
        $dbh=null;
         return $res['name'];
		
		}
		public static function addSubCategory($name,$sub_cat){
			   try
			  {
            $dbh = new PDO(DB_DSN, DB_LOGIN, DB_PASSWORD);

        }
        catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
		  $stmt=$dbh->prepare("CALL ".SP_ADD_SUBCAT."(?,?)");
         $stmt->bindParam(1,$name);
		 $stmt->bindParam(2,$sub_cat);
		$stmt->execute();
         $res=$stmt->fetch();
        $dbh=null;
         return $res['res'];
			
		}
		public static function getUsersList(){
			
			     try
        {
            $dbh = new PDO(DB_DSN, DB_LOGIN, DB_PASSWORD);

        }
        catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }

          $stmt=$dbh->prepare("select * from  t_user_account");
         

          $stmt->execute();

         $row=$stmt->fetchAll();
        $dbh=null;
         return $row;	
		}
		
				public static function getUsersListApproval(){
			
			     try
        {
            $dbh = new PDO(DB_DSN, DB_LOGIN, DB_PASSWORD);

        }
        catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }

          $stmt=$dbh->prepare("select * from  t_user_account where status=0");
         

          $stmt->execute();

         $row=$stmt->fetchAll();
        $dbh=null;
         return $row;	
		}
		public static function getClassifiedDetails($id){
				
			     try
        {
            $dbh = new PDO(DB_DSN, DB_LOGIN, DB_PASSWORD);

        }
        catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }

          $stmt=$dbh->prepare("select * from  t_user_classified where id=".$id."");
         

          $stmt->execute();

         $row=$stmt->fetch();
        $dbh=null;
         return $row;	
			
			
			
		}
		
			public static function getClassifiedDetailsByUserId($id){
				
			     try
        {
            $dbh = new PDO(DB_DSN, DB_LOGIN, DB_PASSWORD);

        }
        catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }

          $stmt=$dbh->prepare("select * from  t_user_classified where user_id=".$id."");
         

          $stmt->execute();

         $row=$stmt->fetch();
        $dbh=null;
         return $row;	
			
			
			
		}
		
		
		
		
		
public static function getMatrimonyDetailsByUserId($id){
				
			     try
        {
            $dbh = new PDO(DB_DSN, DB_LOGIN, DB_PASSWORD);

        }
        catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }

          $stmt=$dbh->prepare("select * from  t_user_marraigeportal where user_id=".$id."");
         

          $stmt->execute();

         $row=$stmt->fetch();
        $dbh=null;
         return $row;	
			
			
			
		}
		
		
		
		
		public static function getCommunityDetailsByUserId($id){
				
			     try
        {
            $dbh = new PDO(DB_DSN, DB_LOGIN, DB_PASSWORD);

        }
        catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }

          $stmt=$dbh->prepare("select * from  t_user_marraigeportal where user_id=".$id."");
         

          $stmt->execute();

         $row=$stmt->fetch();
        $dbh=null;
         return $row;	
			
			
			
		}
		
		public static function getPropertyDetailsByUserId($id){
				
			     try
        {
            $dbh = new PDO(DB_DSN, DB_LOGIN, DB_PASSWORD);

        }
        catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }

          $stmt=$dbh->prepare("select * from  t_user_realestate where user_id=".$id."");
         

          $stmt->execute();

         $row=$stmt->fetch();
        $dbh=null;
         return $row;	
			
			
			
		}
		
		
public static function getAllClassifiedDetails(){
				
  try
        {
            $dbh = new PDO(DB_DSN, DB_LOGIN, DB_PASSWORD);

        }
        catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }

          $stmt=$dbh->prepare("select * from  t_user_classified");
         

          $stmt->execute();

         $res=$stmt->fetchAll();
        $dbh=null;
         return $res;	
			
			
			
		}

public static function updateClassifiedsPriority($id,$cname,$pr){
	
	  try
        {
            $dbh = new PDO(DB_DSN, DB_LOGIN, DB_PASSWORD);

        }
        catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }

          $stmt=$dbh->prepare("update t_user_classified set company_name='".$cname."',priority=".$pr." where id=".$id."");
         

          $stmt->execute();
           $dbh=null;
         return true;	
			

}

public static function updateUserAccounts($id,$name,$username,$password,$email,$cno,$status){
	
	
	
	  try
        {
            $dbh = new PDO(DB_DSN, DB_LOGIN, DB_PASSWORD);

        }
        catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
         $password=md5($password);
          $stmt=$dbh->prepare("update t_user_account set name='".$name."',username='".$username."',email='".$email."',cno='".$cno."',status=".$status." where id=".$id."");
         

          $stmt->execute();
           $dbh=null;
         return true;	
	
	
}
public static function getDefaultCommunityList(){
	
 try
        {
            $dbh = new PDO(DB_DSN, DB_LOGIN, DB_PASSWORD);

        }
        catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }

          $stmt=$dbh->prepare("select * from  t_user_community limit 10");
         

          $stmt->execute();

         $res=$stmt->fetchAll();
        $dbh=null;
         return $res;	
	
	
	
}
public static function getUserdetailsById($user_id){
		
 try
        {
            $dbh = new PDO(DB_DSN, DB_LOGIN, DB_PASSWORD);

        }
        catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }

          $stmt=$dbh->prepare("select * from  t_user_account where id=".$user_id."");
         

          $stmt->execute();

         $res=$stmt->fetch();
        $dbh=null;
         return $res;
}


public static function getDefaultPropertyList(){
 try
        {
            $dbh = new PDO(DB_DSN, DB_LOGIN, DB_PASSWORD);

        }
        catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }

          $stmt=$dbh->prepare("select * from  t_user_realestate limit 10");
         

          $stmt->execute();

         $res=$stmt->fetchAll();
        $dbh=null;
         return $res;	
	
}
public static function getDefaultMatrimonySearch(){
	
	 try
        {
            $dbh = new PDO(DB_DSN, DB_LOGIN, DB_PASSWORD);

        }
        catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }

          $stmt=$dbh->prepare("select * from  t_user_marraigeportal limit 10");
         

          $stmt->execute();

         $res=$stmt->fetchAll();
        $dbh=null;
         return $res;	
}

public static function getMatrimonySearchResults($key,$cat,$city){
		       try
        {
            $dbh = new PDO(DB_DSN, DB_LOGIN, DB_PASSWORD);

        }
        catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }

          $stmt=$dbh->prepare("select * from t_user_marraigeportal  where des like '%".$key."%' or sex=".$cat." or user_caste='".$city."'");
         

          $stmt->execute();

         $row=$stmt->fetchAll();
        $dbh=null;
         return $row;
		
	}
	
	public static function getPropertySearchResults($key,$cat,$city){
		       try
        {
            $dbh = new PDO(DB_DSN, DB_LOGIN, DB_PASSWORD);

        }
        catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }

          $stmt=$dbh->prepare("select * from t_user_realestate where estate_des like '%".$key."%' or estate_type=".$cat." or estate_city='".$city."'");
         

          $stmt->execute();

         $row=$stmt->fetchAll();
        $dbh=null;
         return $row;
		
	}
	public static function getSearchCommunityResults($city,$community){
		
			       try
        {
            $dbh = new PDO(DB_DSN, DB_LOGIN, DB_PASSWORD);

        }
        catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }

          $stmt=$dbh->prepare("select id from t_user_account where city='".$city."'");
          $stmt->execute();
          $row=$stmt->fetchAll();
		  $row3=array();
		   $i=0;
		  foreach($row as $row1){
			 
			 $stmt1=$dbh->prepare("select * from t_user_community where user_id=".$row1['id']." and user_caste='".$community."'"); 
		    
          $stmt1->execute();
          $row2=$stmt1->fetch(PDO::FETCH_ASSOC); 
		  
		  $row3[$i]=$row2;
		  
		  $stmt1=null;
		  
		  $row2=null;
		  $i=$i+1;
			  
		  }
        $dbh=null;
         return $row3;
	}
	
	public static function updateCategories($id,$value,$cat_id){
		
		
			  try
        {
            $dbh = new PDO(DB_DSN, DB_LOGIN, DB_PASSWORD);

        }
        catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
         $password=md5($password);
          $stmt=$dbh->prepare("update t_sub_cat set value='".$value."',main_cat_id='".$cat_id."' where id=".$id."");
         

          $stmt->execute();
           $dbh=null;
         return true;
		
		
		
	}
	
	public static function updateUsersProfile($id,$contact,$city,$distt,$state,$country,$address,$bloodgroup){
		
		
	
			  try
        {
            $dbh = new PDO(DB_DSN, DB_LOGIN, DB_PASSWORD);

        }
        catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
         
          $stmt=$dbh->prepare("update t_user_account set cno='".$contact."',city='".$city."',district='".$distt."',state='".$state."',country='".$country."',address='".$address."',bloodgroup='".$bloodgroup."' where id=".$id."");
         

          $stmt->execute();
           $dbh=null;
         return true;	
		
		
		
		
		
	}
	public static function deleteCategories($array_id){
		
	  try
        {
            $dbh = new PDO(DB_DSN, DB_LOGIN, DB_PASSWORD);

        }
        catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
            foreach($array_id as $id){
            $stmt=$dbh->prepare("delete from t_sub_cat where id=?");
             $stmt->bindParam(1,$id);
             $stmt->execute();
            
                
            }
            return 1;
	
		
		
		
		
	}
	
	public static function getUsersPortalAccessMenu($id){
		$portal_access_details=array();
		
		  try
        {
            $dbh = new PDO(DB_DSN, DB_LOGIN, DB_PASSWORD);

        }
        catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
		   $stmt1=$dbh->prepare("select user_id from t_user_classified where user_id=".$id."");
            $stmt1->execute();
			$count1=$stmt1->rowCount();
			
			 $stmt2=$dbh->prepare("select user_id from t_user_marraigeportal where user_id=".$id."");
            $stmt2->execute();
			$count2=$stmt2->rowCount();
			
					 $stmt3=$dbh->prepare("select user_id from t_user_community where user_id=".$id."");
            $stmt3->execute();
			$count3=$stmt3->rowCount();
			
					 $stmt4=$dbh->prepare("select user_id from  t_user_realestate where user_id=".$id."");
            $stmt4->execute();
			$count4=$stmt4->rowCount();
			
			if($count1>0){
				$portal_access_details['classified_portal_menu_name']="Modify Classifieds Portal";
				$portal_access_details['classified_portal_menu_url']="modify_users_classifieds.php";
			}
			else
			{
			$portal_access_details['classified_portal_menu_name']="Classifieds Portal Access";
				$portal_access_details['classified_portal_menu_url']="post_classifieds.php";	
			}
			
			if($count2>0){
				$portal_access_details['matrimony_portal_menu_name']="Modify Matrimony Portal";
				$portal_access_details['matrimony_portal_menu_url']="modify_users_matrimony.php";
			}
			else
			{
			$portal_access_details['matrimony_portal_menu_name']="Matrimony Portal Access";
				$portal_access_details['matrimony_portal_menu_url']="post_matrimony.php";	
			}
				
				if($count3>0){
				$portal_access_details['community_portal_menu_name']="Modify Community Portal";
				$portal_access_details['community_portal_menu_url']="modify_users_community.php";
			}
			else
			{
			$portal_access_details['community_portal_menu_name']="Community Portal Access";
				$portal_access_details['community_portal_menu_url']="post_community.php";	
			}
				
				if($count4>0){
				$portal_access_details['property_portal_menu_name']="Modify Property Portal";
				$portal_access_details['property_portal_menu_url']="modify_users_property.php";
			}
			else
			{
			$portal_access_details['property_portal_menu_name']="Property Portal Access";
				$portal_access_details['property_portal_menu_url']="post_property.php";	
			}
				
			return $portal_access_details;	
			
		
		
		
		
	}
	
	
}
?>