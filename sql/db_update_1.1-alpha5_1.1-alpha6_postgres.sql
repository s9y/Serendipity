@ALTER TABLE {PREFIX}exits DROP PRIMARY KEY;
@ALTER TABLE {PREFIX}exits DROP CONSTRAINT "{prefix}exits_pkey";
@ALTER TABLE {PREFIX}exits ADD PRIMARY KEY (entry_id, day, host, path);
