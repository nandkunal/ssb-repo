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
          $stmt=$dbh->prepare("select * from t_sub_cat");
          $stmt->execute();
         $row=$stmt->fetchAll();
        $dbh=null;
        return $row;


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
            
          $stmt=$dbh->prepare("select * from t_user_classified where status=? and priority=? and cat_id=? limit 3");
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

public static function createUsersAccount($username,$password,$name,$email,$contact,$city,$distt,$state,$country,$address,$role,$status){
             try
        {
            $dbh = new PDO(DB_DSN, DB_LOGIN, DB_PASSWORD);

        }
        catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }

          $stmt=$dbh->prepare("CALL ".SP_USER_REG. "(?,?,?,?,?,?,?,?,?,?,?,?)");
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
        $stmt->bindParam(11,$status);
        $stmt->bindParam(12,$role);
        $stmt->execute();
         $res=$stmt->fetch();
        $dbh=null;
         return $res['message'];

    }

    public static function postAds($cat_id,$bt,$cname,$curl,$contact,$city,$distt,$state,$address,$cdes){
             try
        {
            $dbh = new PDO(DB_DSN, DB_LOGIN, DB_PASSWORD);

        }
        catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
          $userid=TEMP_USER_ID;
         $logo=LOGO_FREE_ADS;
        $role=USER_ROLE;
        $status=1;

          $stmt=$dbh->prepare("CALL ".SP_POST_ADS. "(?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
         $stmt->bindParam(1,$userid);
         $stmt->bindParam(2,$cat_id);
         $stmt->bindParam(3,$bt);
        $stmt->bindParam(4,$cname);
         $stmt->bindParam(5,$curl);
        $stmt->bindParam(6,$contact);
        $stmt->bindParam(7,$city);
        $stmt->bindParam(8,$distt);
        $stmt->bindParam(9,$state);
        $stmt->bindParam(10,$address);
         $stmt->bindParam(11,$logo);
        $stmt->bindParam(12,$cdes);
        $stmt->bindParam(13,$role);
        $stmt->bindParam(14,$status);
		$stmt->execute();
         $res=$stmt->fetch();
        $dbh=null;
         return $res['res'];
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

          $stmt=$dbh->prepare("select * from t_user_classified where company_des like '".$key."%' or company_spec like '".$key."%' and b_type=".$cat." and company_city='".$city."' order by priority desc");
         

          $stmt->execute();

         $row=$stmt->fetchAll();
        $dbh=null;
         return $row;
		
	}
}
?>