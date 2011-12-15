<?php
require_once('projectConstant.php');

class LoginInfo
{


    private $id=0;
    private $msg=NULL;
    private $role=0;
    private $res=NULL;

    public  static function Authenticate($username,$pass){
        try
        {
            $dbh = new PDO(DB_DSN, DB_LOGIN, DB_PASSWORD);

        }
        catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        $username=$username;
        $pass=md5(($pass));
        $stmt=$dbh->prepare("CALL ".SP_ADMIN_LOGIN."(?,?)");
        $stmt->bindParam(1,$username);
        $stmt->bindParam(2,$pass);
        $stmt->execute();
        $row=$stmt->fetch();
        $loginInfo=new LoginInfo();
        $loginInfo->msg=$row['res_msg'];
        $loginInfo->id=$row['id1'];
        $loginInfo->role=$row['role1'];
        $loginInfo->res=$row['res'];
        $dbh=null;
        return $loginInfo;


    }

    function getMsg(){
        return $this->msg;

    }
    function getID(){
        return $this->id;
    }
    function  getRes(){
        return $this->res;
    }
    function getRole(){
        return $this->role;
    }
}


