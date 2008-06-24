ALTER TABLE {PREFIX}category ADD COLUMN sort_order int(11);
ALTER TABLE {PREFIX}category ADD COLUMN hide_sub int(1);
CREATE INDEX categoryso_idx ON {PREFIX}category (sort_order);

