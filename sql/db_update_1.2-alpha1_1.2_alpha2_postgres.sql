ALTER TABLE {PREFIX}authors ADD COLUMN oldusername varchar(32);
UPDATE {PREFIX}authors SET oldusername = username;
ALTER TABLE {PREFIX}authors DROP username;

ALTER TABLE {PREFIX}authors ADD COLUMN username varchar(32);
UPDATE {PREFIX}authors SET username = oldusername;
ALTER TABLE {PREFIX}authors DROP COLUMN oldusername;
