Summary: Manage authentication, create session and manage templates.
Name: hris
Version: 1
Release: 1
Group: Web Application
License: easyJet
Source: %{name}-%{version}-bin.tar.gz
BuildRoot: %{_tmppath}/%{name}-root
Requires: swissinside >= 1, uman >= 1, otp >= 1, sshfs, poppler-utils
BuildArch: noarch

%description
SPECS version 1

%prep
%__rm -rf %{_topdir}/BUILD
%__cp -a %{_sourcedir} %{_topdir}/BUILD

%install
%{__rm} -rf %{buildroot}
%{__mkdir} -p %{buildroot}/%{_datadir}/swissinside
%{__install} -d -m0755 %{buildroot}/%{_datadir}/swissinside/
%{__cp} -av src/ %{buildroot}/%{_datadir}/swissinside/
%{__mkdir} -p %{buildroot}/%{_datadir}/swissinside/install/%{name}/
%{__install} -d -m0755 %{buildroot}/%{_datadir}/swissinside/install/%{name}/
%{__cp} -av install/mysql/ install/scripts/ %{buildroot}/%{_datadir}/swissinside/install/%{name}/
%{__install} -d -m0755 %{buildroot}/%{_sysconfdir}/cron.d/
%{__cp} -av install/crontab %{buildroot}/%{_sysconfdir}/cron.d/%{name}
%{__rm} -rf %{buildroot}/redhat/
%{__rm} -rf %{buildroot}/.git/
%{__rm} -f %{buildroot}/.gitignore

%clean
%{__rm} -rf %{buildroot}

%files
%defattr(-,root,root, 0755)
%{_datadir}/swissinside/
%{_sysconfdir}/cron.d/%{name}
%config(noreplace) %{_datadir}/swissinside/src/Easyjet/HrisBundle/Config/service.yaml
%config(noreplace) %{_datadir}/swissinside/src/Easyjet/HrisBundle/Config/config

%post
## Commands to clean the cache folder and merge all css and javascript files.
## Additionnal commands
mkdir -p /data02/%{name}/external_dtime
## Standard commands
mkdir -p /data02/%{name}/
mkdir -p /data02/hris/ejint096/archives
mkdir -p /data02/hris/tmp
chown apache -R /data02/%{name}/
rm -rf %{_datadir}/swissinside/var/cache/*
php %{_datadir}/swissinside/bin/console assetic:dump --env=prod --no-debug
chown apache -R %{_datadir}/swissinside/var/cache/
chown apache -R %{_datadir}/swissinside/var/logs/
chmod 500 %{_datadir}/swissinside/src/Easyjet/HrisBundle/Config/swissinsidePrivKey.asc
chmod 500 %{_datadir}/swissinside/src/Easyjet/HrisBundle/Config/privkey.rsa
chmod 550 %{_datadir}/swissinside/src/Easyjet/HrisBundle/Config/services.yaml
chown apache:apache %{_datadir}/swissinside/src/Easyjet/HrisBundle/Config/swissinsidePrivKey.asc
chown apache:apache %{_datadir}/swissinside/src/Easyjet/HrisBundle/Config/privkey.rsa
chown apache:apache %{_datadir}/swissinside/src/Easyjet/HrisBundle/Config/services.yaml
chmod +x %{_datadir}/swissinside/src/Easyjet/HrisBundle/Command/ejint096-retrieve-demographic-data-file
chmod +x %{_datadir}/swissinside/src/Easyjet/HrisBundle/Command/pgp-and-transmit-to-safeguard
chmod +x %{_datadir}/swissinside/src/Easyjet/HrisBundle/Command/retrieve-gross-to-net
chmod +x %{_datadir}/swissinside/src/Easyjet/HrisBundle/Command/ejint096-move-pay-elements
chmod +x %{_datadir}/swissinside/src/Easyjet/HrisBundle/Command/data-analyser
chmod +x %{_datadir}/swissinside/src/Easyjet/HrisBundle/Command/pgp-and-transmit-to-safeguard-salary-certificate
chmod +x %{_datadir}/swissinside/src/Easyjet/HrisBundle/Command/pgp-and-transmit-to-safeguard-salary-complement
## Command to install update for the Mysql database.
chmod +x %{_datadir}/swissinside/install/%{name}/scripts/mysql-updates.sh
su - apache -s /bin/bash -c "%{_datadir}/swissinside/install/%{name}/scripts/mysql-updates.sh"
service httpd restart
mkdir -p /data02/%name/
chown apache:apache -R /data02/%name/
setfacl -R -m u:apache:rwX -m u:apache:rwX  /data02/hris/ejint096/archives

%changelog
* Tues Mar 28 2023 Sreenu Kuramdasu <Kuramdasu.Sreenu@ext.soprasteria.com>
- Initial spec file for swissinside package.
