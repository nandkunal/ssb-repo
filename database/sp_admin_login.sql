DROP PROCEDURE IF EXISTS ssb.sp_create_admin_account;

CREATE PROCEDURE ssb.`sp_create_admin_account`(IN `name`       VARCHAR(100),
                                               IN `username`   VARCHAR(100),
                                               IN `pass`       VARCHAR(100),
                                               IN `doc`        DATETIME,
                                               IN `role`       INT)
   COMMENT 'Sub Admin Account Creation'
   BEGIN
      DECLARE res      INT DEFAULT 0;
      DECLARE count1   INT DEFAULT 0;
      DECLARE count2   INT DEFAULT 0;
      DECLARE count3   INT DEFAULT 0;

      SELECT COUNT(*) INTO count1 FROM t_admin_login;

      SELECT COUNT(*)
        INTO count2
        FROM t_admin_login
       WHERE username = username;

      IF count2 = 0
      THEN
         START TRANSACTION;

         INSERT INTO t_admin_login
         VALUES (NULL,
                 role,
                 name,
                 username,
                 pass,
                 doc);

         SELECT COUNT(*) INTO count3 FROM t_admin_login;

         IF count1 < count3
         THEN
            COMMIT;
            SET res = 1;
         ELSE
            SET res = 2;
            ROLLBACK;
         END IF;
      ELSE
         SET res = 3;
      END IF;

      SELECT res;
   END;