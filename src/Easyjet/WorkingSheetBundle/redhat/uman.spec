Summary: HR Task Management System
Name: uman
Version: 1
Release: 1
Group: Web Application
License: Iabsis
Source: uman-%{version}-bin.tar.gz
BuildRoot: %{_tmppath}/%{name}-root
Requires: php-pdflib, php-mbstring, enews, swissinside >= 2.5.1-33, fetchmail
BuildArch: noarch

%description
SPECS version 2

%prep
%__rm -rf %{_topdir}/BUILD
%__cp -a %{_sourcedir} %{_topdir}/BUILD

%install
%__cp -a . %{buildroot}/
%{__rm} -rf %{buildroot}/redhat/
%{__rm} -rf %{buildroot}/.git/
%{__rm} -f %{buildroot}/.gitignore

%clean
%{__rm} -rf %{buildroot}

%files
%defattr(-,root,root)
###Config Files###
%config /etc/httpd/conf.d/uman.conf
%config /etc/cron.weekly/
%config /etc/cron.d/
###Stored Data###
/data01/
##Program Files###
%{_datadir}/swissinside/
/etc/taleo/taleo.conf-template
%{_sbindir}/
# Mysql
%{_datadir}/dbconfig-common/data/%{name}/install/
%{_datadir}/dbconfig-common/data/%{name}/upgrade/mysql/


%post
## Variables
CONFFILE=/usr/share/swissinside/web/%{name}/includes/auth.inc.php

## Functions
replace_value_config()
{

valtemp=$(echo $2 | sed 's/#/\\#/g')

sed -i "s#^[[:space:]]*[dD][eE][fF][iI][nN][eE][[:space:]]*([[:space:]]*\"$1\".*#define(\"$1\", $valtemp);#g" $CONFFILE
sed_return_value=$?

if [ ! "$sed_return_value" = 0 ] ; then
	echo "error : the variable $1 was not found in the file $CONFFILE"
	echo "Value : $valtemp"
fi

}

get_config_value()
{

grep "^[[:space:]]*[dD][eE][fF][iI][nN][eE][[:space:]]*([[:space:]]*\"$1" /usr/share/swissinside/web/%{name}/includes/auth.inc-backup.php | \
  sed "s#^[[:space:]]*[dD][eE][fF][iI][nN][eE][[:space:]]*([[:space:]]*\"$1\",[[:space:]]*##" | \
  sed "s#[[:space:]]*)[[:space:]]*;##g"

}

##  Mysql updates ##
dbuser=`cat /etc/auth/mysql.php | grep "DB_USER" | awk -F\' '{print $4}'`
dbpass=`cat /etc/auth/mysql.php | grep "DB_PASS" | awk -F\' '{print $4}'`
mysql -u$dbuser -p$dbpass %{name} -e 'CREATE TABLE IF NOT EXISTS `MYSQL_UPDATES` (`sql_file` varchar(50) collate utf8_unicode_ci NOT NULL,`date` datetime NOT NULL) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;'
ls -v1 /usr/share/dbconfig-common/data/%{name}/install/ | while read i ; do
  file=$(mysql -u$dbuser -p$dbpass %{name} -e "SELECT sql_file FROM MYSQL_UPDATES WHERE sql_file='%{name}-$i';")
  if [ -z "$file" ] ; then
    mysql -u$dbuser -p$dbpass %{name} < /usr/share/dbconfig-common/data/%{name}/install/$i || true
    mysql -u$dbuser -p$dbpass %{name} -e "INSERT INTO MYSQL_UPDATES (sql_file, \`date\`) VALUES ('%{name}-$i', NOW());"
  fi
done
ls -v1 /usr/share/dbconfig-common/data/%{name}/upgrade/mysql/ | while read i ; do
  file=$(mysql -u$dbuser -p$dbpass %{name} -e "SELECT sql_file FROM MYSQL_UPDATES WHERE sql_file='%{name}-$i';")
  if [ -z "$file" ] ; then
    mysql -u$dbuser -p$dbpass %{name} < /usr/share/dbconfig-common/data/%{name}/upgrade/mysql/$i || true
    mysql -u$dbuser -p$dbpass %{name} -e "INSERT INTO MYSQL_UPDATES (sql_file, \`date\`) VALUES ('%{name}-$i', NOW());"
  fi
done

## Aditionnal script update
req=$(mysql -u$dbuser -p$dbpass %{name} -e "SELECT * FROM sample_task_list WHERE id_station=6;" 2>/dev/null)
if [ -z "$req" ] ; then
  php /usr/share/uman/fix_sample_tasks.php
fi

## Update config file
if [ ! -e /usr/share/swissinside/web/%{name}/includes/auth.inc.php ] ; then
  cp /usr/share/swissinside/web/%{name}/includes/auth.inc-template.php $CONFFILE
else
  cp $CONFFILE /usr/share/swissinside/web/%{name}/includes/auth.inc-backup.php
  cp /usr/share/swissinside/web/%{name}/includes/auth.inc-template.php $CONFFILE
  while read i ; do
    if [ ! -z "$(echo $i | grep ^define)" ] ; then
      var="$(echo $i | cut -d "," -f 1 | cut -d "(" -f 2 | sed "s/[\"']//g")"
      value=$(get_config_value ${var})
      replace_value_config $var $value
    fi
  done < /usr/share/swissinside/web/%{name}/includes/auth.inc-backup.php
fi


## Custom functions depending the actual version
if [ "%{version}-%{release}" = "2.5-72" ] ; then
	php /usr/share/swissinside/app/console easyjet:generate-tasks 700730 entrant_it_tasks_validation
fi

## Check rights
chown apache:apache -R /data01/uman/
chmod +x /etc/cron.weekly/0uman
chmod 755 /usr/share/swissinside/src/Easyjet/UmanBundle/Command/getswissinsidemail.sh

##  Automaticaly restart Apache2 ##
service httpd stop
sleep 1
service httpd start

## Taleo part
chmod +x /etc/cron.daily/taleo
/etc/init.d/crond restart
if [ ! -e /etc/taleo/taleo.conf ] ; then
  cp /etc/taleo/taleo.conf-template /etc/taleo/taleo.conf
fi

## Commands to clean the cache folder and merge all css and javascript files.
php %{_datadir}/swissinside/app/console cache:clear --env=prod --no-debug
php %{_datadir}/swissinside/app/console assetic:dump --env=prod --no-debug
chown apache -R %{_datadir}/swissinside/app/cache/
chown apache -R %{_datadir}/swissinside/app/logs/

%changelog
* Thu Mar 22 2007 root <root@GENEVA.europe.easyjet.local>
- Initial spec file created by autospec ver. 0.8 with rpm 3 compatibility
