CREATE TABLE {PREFIX}tempcategory (
  categoryid {AUTOINCREMENT} {PRIMARY},
  category_name varchar(255) default NULL,
  category_icon varchar(255) default NULL,
  category_description text,
  authorid int(11) default NULL,
  category_left int(11) default '0',
  category_right int(11) default '0',
  parentid int(11) DEFAULT '0' NOT NULL,
  sort_order int(11),
  hide_sub int(1)
) {UTF_8};

INSERT INTO {PREFIX}tempcategory (categoryid, category_name, category_icon, category_description, authorid, category_left, category_right, parentid) SELECT categoryid, category_name, category_icon, category_description, authorid, category_left, category_right, parentid FROM {PREFIX}category;
DROP TABLE {PREFIX}category;

CREATE TABLE {PREFIX}category (
  categoryid {AUTOINCREMENT} {PRIMARY},
  category_name varchar(255) default NULL,
  category_icon varchar(255) default NULL,
  category_description text,
  authorid int(11) default NULL,
  category_left int(11) default '0',
  category_right int(11) default '0',
  parentid int(11) DEFAULT '0' NOT NULL,
  sort_order int(11),
  hide_sub int(1)
) {UTF_8};

CREATE INDEX categorya_idx ON {PREFIX}category (authorid);
CREATE INDEX categoryp_idx ON {PREFIX}category (parentid);
CREATE INDEX categorylr_idx ON {PREFIX}category (category_left, category_right);
CREATE INDEX categoryso_idx ON {PREFIX}category (sort_order);


INSERT INTO {PREFIX}category (categoryid, category_name, category_icon, category_description, authorid, category_left, category_right, parentid) SELECT categoryid, category_name, category_icon, category_description, authorid, category_left, category_right, parentid FROM {PREFIX}tempcategory;
DROP TABLE {PREFIX}tempcategory;

UPDATE {PREFIX}category SET hide_sub = 