create table {PREFIX}subscriptions (
  id int(11) NOT NULL,
  email varchar(200) NOT NULL,
  type varchar(30) NOT NULL,
  target_id int(11) DEFAULT NULL,
  subscribed {BOOLEAN} NOT NULL DEFAULT 'false',
  timestamp int(10) unsigned DEFAULT NULL,
  token varchar(64) DEFAULT NULL,
  lang varchar(5) DEFAULT NULL
) {UTF-8};
ALTER TABLE {PREFIX}subscriptions ADD PRIMARY KEY (id);
ALTER TABLE {PREFIX}subscriptions MODIFY id int(11) NOT NULL AUTO_INCREMENT;

CREATE INDEX subscription_idx ON {PREFIX}subscriptions (id);
CREATE INDEX subscription_emailx ON {PREFIX}subscriptions (email);
CREATE INDEX subscription_typex ON {PREFIX}subscriptions (type);
