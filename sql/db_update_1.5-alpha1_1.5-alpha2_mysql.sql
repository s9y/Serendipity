ALTER TABLE {PREFIX}authors ADD COLUMN hashtype int(1);
ALTER TABLE {PREFIX}authors CHANGE password password VARCHAR(64) NOT NULL;
