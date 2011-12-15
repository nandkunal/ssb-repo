# --------------------------------------------------------
# Host:                         127.0.0.1
# Server version:               5.5.16-log
# Server OS:                    Win32
# HeidiSQL version:             6.0.0.3603
# Date/time:                    2011-11-18 10:37:03
# --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

# Dumping database structure for ssb
CREATE DATABASE IF NOT EXISTS `ssb` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `ssb`;


# Dumping structure for procedure ssb.sp_create_admin_account
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_create_admin_account`(IN `name` VARCHAR(100), IN `user` VARCHAR(100), IN `pass` VARCHAR(100), IN `doc` DATETIME, IN `role` INT)
    COMMENT 'Sub Admin Account Creation'
BEGIN
DECLARE res INT DEFAULT 0;
DECLARE count1 INT DEFAULT 0;
DECLARE count2 INT DEFAULT 0;
DECLARE count3 INT DEFAULT 0;
SELECT COUNT(*)INTO count1 from t_admin_login;
SELECT COUNT(*)INTO count2 from t_admin_login where username=user;
IF count2=0 THEN
INSERT into t_admin_login VALUES(NULL,role,name,user,pass,doc);
SELECT COUNT(*)INTO count3 from t_admin_login;
SET res=1;
ELSE
SET res=2;
END IF;
SELECT res;
END//
DELIMITER ;


# Dumping structure for procedure ssb.sp_login_auth
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_login_auth`(IN `uname` VARCHAR(50), IN `passwd` VARCHAR(50))
    COMMENT 'Login Authentication  for admin and sub admin'
BEGIN
DECLARE res INT DEFAULT 0;
DECLARE counter INT DEFAULT 0;
DECLARE auth INT DEFAULT 0;
DECLARE id1 INT DEFAULT 0;
DECLARE res_msg VARCHAR(50);
DECLARE role1 INT DEFAULT 0;
SELECT COUNT(*) INTO counter FROM t_admin_login;
IF counter > 0 THEN
SELECT COUNT(*) INTO auth from t_admin_login where username=uname and password=passwd;
IF auth=1 THEN
SELECT id,role,username INTO id1,role1,uname from t_admin_login where username=uname and password=passwd;
SET res=1;
SET res_msg='Authenticated';
ELSE
SET res=2;
SET res_msg='Not Authenticated';
END IF;
ELSE 
SET res=3;
SET res_msg='No Records';
END IF;
SELECT id1,res,res_msg,role1;
END//
DELIMITER ;


# Dumping structure for procedure ssb.SP_USER_AUTHENTICATION
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_USER_AUTHENTICATION`(usr VARCHAR(100),pass VARCHAR(100))
    COMMENT 'Login Authentication  for Users'
BEGIN
DECLARE res INT DEFAULT 0;
DECLARE counter INT DEFAULT 0;
DECLARE auth INT DEFAULT 0;
DECLARE id1 INT DEFAULT 0;

DECLARE STATUS INT DEFAULT 0;

SELECT COUNT(*) INTO counter FROM t_user_account;

IF counter > 0 THEN
SELECT COUNT(*) INTO auth FROM t_user_account WHERE username=usr AND PASSWORD=pass;
IF auth=1 THEN
SELECT id,STATUS INTO id1,STATUS FROM t_user_account WHERE username=usr AND PASSWORD=pass;
SET res = 1;

ELSE
SET res=2;

END IF;
ELSE
SET res=3;

END IF;

SELECT id1, res, status;

END//
DELIMITER ;


# Dumping structure for procedure ssb.sp_user_registration
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_user_registration`(IN `username` VARCHAR(50), IN `pass` VARCHAR(100), IN `name` VARCHAR(100), IN `email` VARCHAR(50), IN `cno` VARCHAR(50), IN `city` VARCHAR(50), IN `dis` VARCHAR(50), IN `state` VARCHAR(50), IN `country` VARCHAR(50), IN `address` VARCHAR(1000), IN `role` INT, IN `sta` INT)
    COMMENT 'User Registration'
BEGIN
DECLARE message INT DEFAULT 0;
DECLARE count INT DEFAULT 0;
DECLARE count1 INT DEFAULT 0;
START TRANSACTION;
SELECT COUNT(*)INTO count from t_user_account;
INSERT INTO t_user_account values(NULL,username,pass,name,email,cno,city,dis,state,country,address,role,sta);
SELECT COUNT(*)INTO count1 from t_user_account;
IF count < count1 THEN
COMMIT;
SET message=1;
ELSE
ROLLBACK;
SET message=0;
END IF;
SELECT message;
END//
DELIMITER ;


# Dumping structure for table ssb.t_admin_login
CREATE TABLE IF NOT EXISTS `t_admin_login` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `role` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `doc` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Table for ADMIN LOGIN';

# Data exporting was unselected.


# Dumping structure for table ssb.t_admin_menu
CREATE TABLE IF NOT EXISTS `t_admin_menu` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `value` varchar(50) NOT NULL,
  `access_rights` int(2) NOT NULL,
  `url` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

# Data exporting was unselected.


# Dumping structure for table ssb.t_admin_submenu
CREATE TABLE IF NOT EXISTS `t_admin_submenu` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `parent_menu_id` int(5) NOT NULL,
  `value` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

# Data exporting was unselected.


# Dumping structure for table ssb.t_main_cat
CREATE TABLE IF NOT EXISTS `t_main_cat` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `value` varchar(60) NOT NULL,
  `doc` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

# Data exporting was unselected.


# Dumping structure for table ssb.t_user_account
CREATE TABLE IF NOT EXISTS `t_user_account` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cno` varchar(15) NOT NULL,
  `city` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `role` int(2) NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

# Data exporting was unselected.


# Dumping structure for table ssb.t_user_classified
CREATE TABLE IF NOT EXISTS `t_user_classified` (
  `id` int(5) NOT NULL,
  `user_id` int(5) NOT NULL,
  `cat_id` int(5) NOT NULL,
  `b_type` varchar(50) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `company_email` varchar(50) NOT NULL,
  `company_contact` varchar(15) NOT NULL,
  `company_city` int(11) NOT NULL,
  `company_district` varchar(50) NOT NULL,
  `company_state` varchar(50) NOT NULL,
  `company_address` varchar(500) NOT NULL,
  `company_logo` varchar(50) NOT NULL,
  `company_des` varchar(5000) NOT NULL,
  `company_spec` varchar(5000) NOT NULL,
  `priority` int(2) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

# Data exporting was unselected.


# Dumping structure for table ssb.t_user_community
CREATE TABLE IF NOT EXISTS `t_user_community` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `user_id` int(5) NOT NULL,
  `cat_id` int(5) NOT NULL,
  `user_caste` varchar(50) NOT NULL,
  `user_priority` int(2) NOT NULL,
  `doj` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

# Data exporting was unselected.


# Dumping structure for table ssb.t_user_marraigeportal
CREATE TABLE IF NOT EXISTS `t_user_marraigeportal` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `user_id` int(5) NOT NULL,
  `cat_id` int(5) NOT NULL,
  `user_caste` varchar(50) NOT NULL,
  `sex` int(2) NOT NULL,
  `dob` date NOT NULL,
  `age` int(2) NOT NULL,
  `height` varchar(10) NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `des` varchar(1000) NOT NULL,
  `profile_pic` varchar(60) NOT NULL,
  `cno` int(12) NOT NULL,
  `priority` int(2) NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

# Data exporting was unselected.


# Dumping structure for table ssb.t_user_realestate
CREATE TABLE IF NOT EXISTS `t_user_realestate` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `user_id` int(5) NOT NULL,
  `cat_id` int(5) NOT NULL,
  `estate_pur` varchar(50) NOT NULL,
  `estate_type` varchar(50) NOT NULL,
  `estate_des` varchar(500) NOT NULL,
  `estate_loc` varchar(50) NOT NULL,
  `estate_city` varchar(50) NOT NULL,
  `estate_district` varchar(50) NOT NULL,
  `estate_state` varchar(50) NOT NULL,
  `estate_country` varchar(50) NOT NULL,
  `estate_cno` varchar(50) NOT NULL,
  `estate_email` varchar(50) NOT NULL,
  `priority` int(2) NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

# Data exporting was unselected.
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
