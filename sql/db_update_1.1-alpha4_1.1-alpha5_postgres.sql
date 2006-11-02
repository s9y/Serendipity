ALTER TABLE {PREFIX}images ADD COLUMN realname varchar(255);
ALTER TABLE {PREFIX}references ADD COLUMN type varchar(128);
CREATE INDEX reftype_idx ON {PREFIX}references (type);

