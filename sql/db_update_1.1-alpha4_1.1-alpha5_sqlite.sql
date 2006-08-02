CREATE TABLE {PREFIX}tempimages (
  id {AUTOINCREMENT} {PRIMARY},
  name varchar(255) not null default '',
  extension varchar(5) not null default '',
  mime varchar(255) not null default '',
  size int(11) not null default '0',
  dimensions_width int(11) not null default '0',
  dimensions_height int(11) not null default '0',
  date int(11) not null default '0',
  thumbnail_name varchar(255) not null default '',
  authorid int(11) default '0',
  path text,
  hotlink int(1),
  realname varchar(255) not null default ''
) {UTF_8};

INSERT INTO {PREFIX}tempimages (id, name, extension, mime, size, dimensions_width, dimensions_height, date, thumbnail_name, authorid, path, hotlink) SELECT id, name, extension, mime, size, dimensions_width, dimensions_height, date, thumbnail_name, authorid, path, hotlink FROM {PREFIX}images;
DROP TABLE {PREFIX}images;

CREATE TABLE {PREFIX}images (
  id {AUTOINCREMENT} {PRIMARY},
  name varchar(255) not null default '',
  extension varchar(5) not null default '',
  mime varchar(255) not null default '',
  size int(11) not null default '0',
  dimensions_width int(11) not null default '0',
  dimensions_height int(11) not null default '0',
  date int(11) not null default '0',
  thumbnail_name varchar(255) not null default '',
  authorid int(11) default '0',
  path text,
  hotlink int(1),
  realname varchar(255) not null default ''
) {UTF_8};

CREATE INDEX imagesauthorid_idx ON {PREFIX}images (authorid);
CREATE {FULLTEXT} INDEX pathkey_idx on {PREFIX}images (path);

INSERT INTO {PREFIX}images (id, name, extension, mime, size, dimensions_width, dimensions_height, date, thumbnail_name, authorid, path, hotlink) SELECT id, name, extension, mime, size, dimensions_width, dimensions_height, date, thumbnail_name, authorid, path, hotlink FROM {PREFIX}tempimages;
DROP TABLE {PREFIX}tempimages;

CREATE TABLE {PREFIX}tempreferences (
  id {AUTOINCREMENT} {PRIMARY},
  entry_id int(10) {UNSIGNED} not null default '0',
  link text,
  name text,
  type varchar(128) not null default ''
) {UTF_8};

INSERT INTO {PREFIX}tempreferences (id, entry_id, link, name) SELECT id, entry_id, link, name FROM {PREFIX}references;
DROP TABLE {PREFIX}references;

CREATE TABLE {PREFIX}references (
  id {AUTOINCREMENT} {PRIMARY},
  entry_id int(10) {UNSIGNED} not null default '0',
  link text,
  name text,
  type varchar(128) not null default ''
) {UTF_8};

CREATE INDEX refentry_idx ON {PREFIX}references (entry_id);
CREATE INDEX reftype_idx ON {PREFIX}references (type);

INSERT INTO {PREFIX}references (id, entry_id, link, name) SELECT id, entry_id, link, name FROM {PREFIX}tempreferences;
DROP TABLE {PREFIX}tempreferences;