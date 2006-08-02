create table {PREFIX}options (
  name varchar(255) not null,
  value text not null,
  okey varchar(64) not null default ''
) {UTF_8};

CREATE INDEX options_idx ON {PREFIX}options (okey);
