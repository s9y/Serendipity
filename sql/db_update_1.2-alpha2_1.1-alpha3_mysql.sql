ALTER TABLE {PREFIX}category ADD COLUMN sort_order int(11);
CREATE INDEX categoryso_idx ON {PREFIX}category (sort_order);
