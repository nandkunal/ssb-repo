<?php
ob_start();
/*
 * Database Constants
 *
 */
define('DB_HOSTNAME','localhost');
define('DB_LOGIN', 'root');
define('DB_PASSWORD', '');
define('DB_DIR', '');
define('DB_DATABASE', DB_DIR.'ssb');
define('DB_TABLE_ADMIN_DIR',"t_admin");
define('DB_TABLE_USER_DIR',"t_user");
define('DB_DSN','mysql:dbname='.DB_DATABASE.';host='.DB_HOSTNAME.'');


/*ROLES FOR ADMIN, USER AND SUB-ADMINS
*/
//define('ALLOWED_ROLES',array('admin'=>2,'sub-admin'=>7,'user'=>9));

/*
 * CUSTOMISED ERROR CODES
 * */
define('AUTH_ERROR',12001);
define('REGISTRATION_FAILED',12002);
define('USERS_AUTH_ERROR',12003);

/*CUSTOMISED ERROR MESSAGE
*/
define('AUTH_ERROR_MESSAGE','Authentication Failed,Please try again');
define('REGISTRATION_FAILED_MESSAGE','An Error Occurred,Please try again');


/*
 * REDIRECTION PAGES*/
define('HOME_ADMIN','home.php');
define('AUTH_FAILED_HOME','index.php');
define('HOME_USERS','home.php');
define('USERS_AUTH_FAILED_HOME','index.php');

/*
 * CONSTANT FOR PRIORITY SEARCH
 * */
define('PLATINUM',1);
define('PRIORITY',2);
define('NORMAL',3);
/*
 * DASHBORAD MENU CONSTANTS
 * */
define('HOME_URL','home.php');
define('ADMIN_ACCOUNT_MANAGER_URL','admin_account_manager.php');
define('USER_ACCOUNT_MANAGER_URL','user_account_manager.php');
define('CATEGORY_MANAGER_URL','category_manager.php');
define('ADS_MANAGER_URL','ads_manager.php');
define('USER_MANAGER_URL','user_profile_manager.php');
//define('SETTINGS_URL','settings.php');
define('LOGOUT_URL','logout.php');


define('HOME_NAME','Home');
define('ADMIN_ACCOUNT_MANAGER_NAME','Admin Account Manager');
define('USER_ACCOUNT_MANAGER_NAME','User Account Manager');
define('CATEGORY_MANAGER_NAME','Category Manager');
define('ADS_MANAGER_NAME','Ads Manager');
define('USER_MANAGER_NAME','User Profile Manager');
//define('SETTINGS_NAME','Settings');
define('LOGOUT_NAME','Logout');
/*
 * DIFFERENT ROLES
 * */
define('ADMIN_ROLE',2);
define('SUB_ADMIN_ROLE',6);
define('USER_ROLE',7);

/*
 * WELCOME MESSAGE FOR ADMIN AND SUB-ADMIN
 * */
define('WELCOME_ADMIN','Welcome Administrator');
define('WELCOME_SUB_ADMIN','Welcome Sub Administrator');

/*STORED PROCEDURES DEFINITION FOR DIFFERENT OPERATIONS
*/
define('SP_ADMIN_LOGIN','sp_login_auth');
define('SP_CREATE_SUBADMIN','sp_create_admin_account');
define('SP_USER_LOGIN','SP_USER_AUTHENTICATION');
define('SP_UPDATE_ADMIN_ACCOUNT','SP_UPDATE_ADMIN_ACCOUNT');
define('SP_DEL_ADMIN','SP_DELETE_ADMIN_ACCOUNT');
define('SP_USER_REG','sp_user_registration');
define('SP_POST_ADS','SP_POST_AD');
define('SP_CATNAME_BYID','SPGET_CATNAME_BY_ID');
define('SP_GET_CLASS_SEARCH','SP_GET_SEARCH_CATEGORY_CLASSIFIEDS');
define('SP_GET_BANNER','SP_GET_PAGE_BANNER');
define('SP_ADD_SUBCAT','SP_ADD_SUB_CAT');

/*CONSTANT FOR FREE USERS
*/

define('TEMP_USER_ID',12001);
define('LOGO_FREE_ADS','classified/preview_not_avail.jpg');


?>