//_datadir     = usr/share
//_tmppath     = var/tmp
//_topdir      = root/rpmbuild
//_sourcedir   = root/rpmbuild/SOURECS
// buildroot   =  /root/rpmbuild/BUILDROOT/%{name}-%{version}-%{release}.x86_64
// _sysconfdir = etc



Summary: Upload and share big files securely
Name: sfsu
Version: 1
Release: 1
Group: Web Application
License: easyJet
Source: %{name}-%{version}-bin.tar.gz
BuildRoot: %{_tmppath}/%{name}-root 
Requires: swissinside >= 1, uman >= 1
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
%{__cp} -av src/ assets/ %{buildroot}/%{_datadir}/swissinside/
%{__mkdir} -p %{buildroot}/%{_datadir}/swissinside/install/%{name}/
%{__install} -d -m0755 %{buildroot}/%{_datadir}/swissinside/install/%{name}/
%{__cp} -av install/mysql/ install/scripts/ %{buildroot}/%{_datadir}/swissinside/install/%{name}/
%{__install} -d -m0755 %{buildroot}/%{_sysconfdir}/cron.d/
%{__cp} -av install/crontab %{buildroot}/%{_sysconfdir}/cron.d/%{name}

%clean
%{__rm} -rf %{buildroot}

%files
%defattr(-,root,root, 0755)
%{_datadir}/swissinside/
%{_sysconfdir}/cron.d/%{name}
%config(noreplace) %{_datadir}/swissinside/src/Easyjet/SfsuBundle/Config/services.yaml

%post
## Commands to clean the cache folder and merge all css and javascript files.
## Additionnal commands
## Standard commands
mkdir -p /data02/%{name}/
chown apache -R /data02/%{name}/
rm -rf %{_datadir}/swissinside/var/cache/*
php %{_datadir}/swissinside/bin/console assetic:dump --env=prod --no-debug
chown apache -R %{_datadir}/swissinside/var/cache/
chown apache -R %{_datadir}/swissinside/var/log/
## Command to install update for the Mysql database.
chmod +x %{_datadir}/swissinside/install/%{name}/scripts/mysql-updates.sh
su - apache -s /bin/bash -c "%{_datadir}/swissinside/install/%{name}/scripts/mysql-updates.sh"
service httpd restart

%changelog
* Tues Mar 28 2023 Sreenu Kuramdasu <Kuramdasu.Sreenu@ext.soprasteria.com>
- Initial spec file for swissinside package.
