ALTER TABLE {PREFIX}images ADD COLUMN realname varchar(255) not null default '';
ALTER TABLE {PREFIX}references ADD COLUMN type varchar(128) not null default '';
CREATE INDEX reftype_idx ON {PREFIX}references (type);
