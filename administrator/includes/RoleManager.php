<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Kunal
 * Date: 11/7/11
 * Time: 6:54 PM
 * To change this template use File | Settings | File Templates.
 */
require_once('loginManager.php');
class RoleManager {
    private $role=0;
    private $availMenuName;
	private $availMenuUrl;
    public function RoleManager($role){
        $this->role=$role;
    }

    public function getAvailableMenu()
    {
        switch($this->role){
            case ADMIN_ROLE:
                $this->availMenuName=array(1=>HOME_NAME,
                                 2=>ADMIN_ACCOUNT_MANAGER_NAME,
                                 3=>USER_ACCOUNT_MANAGER_NAME,
                                 4=>CATEGORY_MANAGER_NAME,
                                 5=>ADS_MANAGER_NAME,
                                 6=>USER_MANAGER_NAME,
                                
                                 7=>LOGOUT_NAME
                );
				    $this->availMenuUrl=array(1=>HOME_URL,
                                 2=>ADMIN_ACCOUNT_MANAGER_URL,
                                 3=>USER_ACCOUNT_MANAGER_URL,
                                 4=>CATEGORY_MANAGER_URL,
                                 5=>ADS_MANAGER_URL,
                                 6=>USER_MANAGER_URL,
                                 
                                 7=>LOGOUT_URL
                );
                break;
            case SUB_ADMIN_ROLE:
                $this->availMenuName=array(1=>HOME_NAME,
                                 2=>USER_ACCOUNT_MANAGER_NAME,
                                 3=>ADS_MANAGER_NAME,
                                 4=>USER_MANAGER_NAME,
                                 5=>LOGOUT_NAME
                );
				   $this->availMenuUrl=array(1=>HOME_URL,
                                 2=>USER_ACCOUNT_MANAGER_URL,
                                 3=>ADS_MANAGER_URL,
                                 4=>USER_MANAGER_URL,
                                 5=>LOGOUT_URL
                );
                break;
        }
		


    }
    public function getMenuName(){
        return $this->availMenuName;
    }
    public  function getMenuUrl(){
        return $this->availMenuUrl;
    }
    public function getWelcome(){
        switch($this->role){
        case ADMIN_ROLE:
        $welcome_text=WELCOME_ADMIN;
        break;
            case SUB_ADMIN_ROLE:
                $welcome_text=WELCOME_SUB_ADMIN;
                break;
        }
        return $welcome_text;
    }

}
