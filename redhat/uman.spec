Summary: Employees Management System
Name: uman
Version: 1
Release: 1
Group: Web Application
License: Sopra Steria
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
%{__mkdir} -p %{buildroot}/%{_datadir}/%{name}
%{__install} -d -m0755 %{buildroot}/%{_datadir}/%{name}/
#%{__cp} -a app/ src/ vendor/ web/ install/ %{buildroot}/%{_datadir}/%{name}/
#%{__install} -d -m0755 %{buildroot}/%{_datadir}/%{name}/app/cache/
#%{__install} -d -m0755 %{buildroot}/%{_datadir}/%{name}/app/logs/
%{__rm} -rf %{buildroot}/redhat/
%{__rm} -rf %{buildroot}/.git/
%{__rm} -f %{buildroot}/.gitignore


%clean
%{__rm} -rf %{buildroot}

%files
%defattr(-,root,root)

##Program Files###
%{_datadir}/swissinside/

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

##  Automaticaly restart Apache2 ##
service httpd stop
sleep 1
service httpd start


## Commands to clean the cache folder and merge all css and javascript files.
php %{_datadir}/swissinside/bin/console cache:clear --env=prod --no-debug
php %{_datadir}/swissinside/bin/console assetic:dump --env=prod --no-debug
chown apache -R %{_datadir}/swissinside/bin/cache/
chown apache -R %{_datadir}/swissinside/bin/logs/

%changelog
* Tues Mar 28 2023 Sreenu Kuramdasu <Kuramdasu.Sreenu@ext.soprasteria.com>
- Initial spec file for swissinside package.