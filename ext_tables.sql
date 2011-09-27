#
# Table structure for table 'tx_fluidlayout_template'
#
CREATE TABLE tx_fluidlayout_template (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	tstamp int(11) DEFAULT '0' NOT NULL,
	crdate int(11) DEFAULT '0' NOT NULL,
	cruser_id int(11) DEFAULT '0' NOT NULL,
	deleted tinyint(4) DEFAULT '0' NOT NULL,
	hidden tinyint(4) DEFAULT '0' NOT NULL,
	name tinytext,
	file tinytext,
	layout_root_path tinytext,
	partial_root_path tinytext,
	backend_layout text,
	
	PRIMARY KEY (uid),
	KEY parent (pid)
);

#
# Table structure for table 'pages'
#
CREATE TABLE pages (
    tx_fluidlayout_template int(11) NOT NULL
);
