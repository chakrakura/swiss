#!/bin/sh

pkgname="otp"
pkgconf=/usr/share/swissinside/Config/services.yaml
sqlpath=/usr/share/swissinside/install/${pkgname}/mysql/

dbuser=$(grep database_user $pkgconf | cut -d: -f2 | tr -d ' ')
dbpass=$(grep database_password $pkgconf | cut -d: -f2 | tr -d ' ')
dbname=$(grep database_name $pkgconf | cut -d: -f2 | tr -d ' ')

mysql -u${dbuser} -p${dbpass} ${dbname} -e 'CREATE TABLE IF NOT EXISTS `MYSQL_UPDATES` (`sql_file` varchar(50) collate utf8_unicode_ci NOT NULL,`date` datetime NOT NULL) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;'

ls -v1 ${sqlpath} | while read i ; do
  file=$(mysql -u$dbuser -p$dbpass $dbname -e "SELECT sql_file FROM MYSQL_UPDATES WHERE sql_file='${pkgname}-$i';")
  if [ -z "$file" ] ; then
    mysql -u$dbuser -p$dbpass $dbname < ${sqlpath}/$i || true
    mysql -u$dbuser -p$dbpass $dbname -e "INSERT INTO MYSQL_UPDATES (sql_file, date) VALUES ('${pkgname}-$i', NOW());"
  fi
done

