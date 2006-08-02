create table {PREFIX}mediaproperties (
  mediaid int(11) not null,
  property varchar(128) not null,
  property_group varchar(50) not null default '',
  property_subgroup varchar(50) not null default '',
  value text
) {UTF_8};

CREATE INDEX mediapropid_idx ON {PREFIX}mediaproperties (mediaid);
CREATE UNIQUE INDEX media_idx ON {PREFIX}mediaproperties (mediaid, property, property_group, property_subgroup);
