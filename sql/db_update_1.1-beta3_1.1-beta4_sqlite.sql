create table {PREFIX}tempgroupconfig (
  id int(10) {UNSIGNED} not null default '0',
  property varchar(128) default null,
  value varchar(32) default null
) {UTF_8};

INSERT INTO {PREFIX}tempgroupconfig (id,property,value) SELECT id,property,value FROM {PREFIX}groupconfig;
DROP TABLE {PREFIX}groupconfig;

create table {PREFIX}groupconfig (
  id int(10) {UNSIGNED} not null default '0',
  property varchar(128) default null,
  value varchar(32) default null
) {UTF_8};

CREATE INDEX groupid_idx ON {PREFIX}groupconfig (id);
CREATE INDEX groupprop_idx ON {PREFIX}groupconfig (id, property);

INSERT INTO {PREFIX}groupconfig (id,property,value) SELECT id,property,value FROM {PREFIX}tempgroupconfig;
DROP TABLE {PREFIX}tempgroupconfig;
