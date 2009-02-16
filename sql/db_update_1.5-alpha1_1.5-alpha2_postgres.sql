ALTER TABLE {PREFIX}authors ADD COLUMN hashtype int(1);

ALTER TABLE {PREFIX}authors ADD COLUMN oldpw varchar(64);
UPDATE {PREFIX}authors SET oldpw = password;
ALTER TABLE {PREFIX}authors DROP password;
ALTER TABLE {PREFIX}authors ADD COLUMN password varchar(64);
UPDATE {PREFIX}authors SET password = oldpw;
ALTER TABLE {PREFIX}authors DROP COLUMN oldpw;
