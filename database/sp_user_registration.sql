CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_user_registration`(IN `username` VARCHAR(50), IN `pass` VARCHAR(100), IN `name` VARCHAR(100), IN `email` VARCHAR(50), IN `cno` VARCHAR(50), IN `city` VARCHAR(50), IN `dis` VARCHAR(50), IN `state` VARCHAR(50), IN `country` VARCHAR(50), IN `address` VARCHAR(1000), IN `role` INT, IN `sta` INT)
	LANGUAGE SQL
	NOT DETERMINISTIC
	CONTAINS SQL
	SQL SECURITY DEFINER
	COMMENT 'User Registration'
BEGIN
DECLARE message INT DEFAULT 0;
DECLARE count INT DEFAULT 0;
DECLARE count1 INT DEFAULT 0;
DECLARE user_count INT DEFAULT 0;
SELECT COUNT(*) INTO user_count from t_user_account where username=username or email=email;
IF user_count > 0 THEN
SET message=3;
ELSE
START TRANSACTION;
SELECT COUNT(*)INTO count from t_user_account;
INSERT INTO t_user_account values(NULL,username,pass,name,email,cno,city,dis,state,country,address,role,sta);
SELECT COUNT(*)INTO count1 from t_user_account;
IF count < count1 THEN
COMMIT;
SET message=1;
ELSE
ROLLBACK;
SET message=2;
END IF;
END IF;
SELECT message;
END