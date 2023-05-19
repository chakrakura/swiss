USE uman;
ALTER TABLE  `applications` ADD  `icon` VARCHAR( 30 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL ;
UPDATE applications SET icon='icon-home' WHERE initiaux='UM';
UPDATE applications SET icon='icon-plane' WHERE initiaux='FTR';
UPDATE applications SET icon='icon-calendar' WHERE initiaux='EW';
UPDATE applications SET icon='icon-sun' WHERE initiaux='EL';
UPDATE applications SET icon='icon-cogs' WHERE initiaux='EN';
UPDATE applications SET icon='icon-paste' WHERE initiaux='ES';
UPDATE applications SET icon='icon-file-text' WHERE initiaux='EPS';
