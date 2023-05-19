Summary: Manage authentication, create session and manage templates.
Name: swissinside
Version: 1
Release: 1
Group: Web Application
License: easyJet
Source: swissinside-%{version}-bin.tar.gz
BuildRoot: %{_tmppath}/%{name}-root
Requires: php, php-cli, php-ldap, php-mbstring, php-xml, php-mcrypt, php-mysql, php-intl, libicu
BuildArch: noarch

%define _binaries_in_noarch_packages_terminate_build   0

%description
SPECS version 1

%prep
%__rm -rf %{_topdir}/BUILD
%__cp -a %{_sourcedir} %{_topdir}/BUILD

%install
%{__rm} -rf %{buildroot}
%{__mkdir} -p %{buildroot}/%{_datadir}/%{name}
%{__install} -d -m0755 %{buildroot}/%{_datadir}/%{name}/
%{__cp} -a app/ src/ vendor/ web/ install/ %{buildroot}/%{_datadir}/%{name}/
%{__install} -d -m0755 %{buildroot}/%{_datadir}/%{name}/bin/cache/
%{__install} -d -m0755 %{buildroot}/%{_datadir}/%{name}/bin/logs/
%{__install} -d -m0755 %{buildroot}/%_sysconfdir/cron.d/
%{__mv} -f install/cron/* %{buildroot}/%_sysconfdir/cron.d/
%{__rm} -rf %{buildroot}/redhat/
%{__rm} -rf %{buildroot}/.git/
%{__rm} -f %{buildroot}/.gitignore

%clean
%{__rm} -rf %{buildroot}

%files
%defattr(-,root,root, 0755)
%{_datadir}/%{name}/
%_sysconfdir/cron.d/
%config(noreplace) %{_datadir}/%{name}/Config/parameters.yaml
%config(noreplace) %{_datadir}/%{name}/Config/mail-parser.ini

%post
## Commands to clean the cache folder and merge all css and javascript files.
rm -rf %{_datadir}/%{name}/bin/cache/*
php %{_datadir}/%{name}/bin/console assetic:dump --env=prod --no-debug
chown apache:apache -R %{_datadir}/%{name}/bin/
chmod 770 -R %{_datadir}/%{name}/bin/
## Command to install update for the Mysql database.
chmod +x %{_datadir}/%{name}/install/scripts/mysql-updates.sh
su - apache -s /bin/bash -c "%{_datadir}/%{name}/install/scripts/mysql-updates.sh"
service httpd restart

%changelog
* Tues Mar 28 2023 Sreenu Kuramdasu <Kuramdasu.Sreenu@ext.soprasteria.com>
- Initial spec file for swissinside package.
