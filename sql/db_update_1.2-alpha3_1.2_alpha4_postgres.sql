ALTER TABLE {PREFIX}comments ADD COLUMN oldip varchar(64);
UPDATE {PREFIX}comments SET oldip = ip;
ALTER TABLE {PREFIX}comments DROP ip;
ALTER TABLE {PREFIX}comments ADD COLUMN ip varchar(64);
UPDATE {PREFIX}comments SET ip = oldip;
ALTER TABLE {PREFIX}comments DROP COLUMN oldip;

ALTER TABLE {PREFIX}suppress ADD COLUMN oldip varchar(64);
UPDATE {PREFIX}suppress SET oldip = ip;
ALTER TABLE {PREFIX}suppress DROP ip;
ALTER TABLE {PREFIX}suppress ADD COLUMN ip varchar(64);
UPDATE {PREFIX}suppress SET ip = oldip;
ALTER TABLE {PREFIX}suppress DROP COLUMN oldip;
