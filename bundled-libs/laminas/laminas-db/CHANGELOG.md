# Changelog

All notable changes to this project will be documented in this file, in reverse chronological order by release.

## 2.11.3 - 2020-03-29

### Added

- Nothing.

### Changed

- Nothing.

### Deprecated

- Nothing.

### Removed

- Nothing.

### Fixed

- Fixed `replace` version constraint in composer.json so repository can be used as replacement of `zendframework/zend-db:^2.11.0`.

## 2.11.2 - 2020-01-14

### Added

- Nothing.

### Changed

- Nothing.

### Deprecated

- Nothing.

### Removed

- Nothing.

### Fixed

- [#44](https://github.com/laminas/laminas-db/pull/44) fixes preventing \PDO disconnect in some `Laminas\Db\Adapter\Platform\AbstractPlatform` inheritors (Mysql, Oracle, Postgresql, SqlServer).
  Using \PDO as a driver in Platform is not recommended. It can be used safely when wrapped by `Laminas\Db\Adapter\Driver\Pdo\Pdo`.

- [#45](https://github.com/laminas/laminas-db/pull/45) fixes using \PDO driver in Oracle platform.

## 2.11.1 - 2020-01-10

### Added

- Nothing.

### Changed

- [#39](https://github.com/laminas/laminas-db/pull/39) change `HydratingResultSet::current()` to returns `null` on no data (before `false` was returned).
  **It may be potential BC Break for those who depends on strict type comparision here.**

### Deprecated

- Nothing.

### Removed

- Nothing.

### Fixed

- [#43](https://github.com/laminas/laminas-db/pull/43) fixes issue introduced in [zendframework/zend-db#146](https://github.com/zendframework/zend-db/pull/146). Now we get correct `lastInsertValue` in `SequenceFeature`.

- [#41](https://github.com/laminas/laminas-db/pull/41) fixes issue introduced in [zendframework/zend-db#386](https://github.com/zendframework/zend-db/pull/386) by removing casting integer parameters in PDO adapter. 

- [#33](https://github.com/laminas/laminas-db/pull/33) fixes PDO fetch style check.

- [#32](https://github.com/laminas/laminas-db/pull/32) fixes PHP 7.4 compatibility. 

## 2.11.0 - 2019-12-31

### Added

- [zendframework/zend-db#336](https://github.com/zendframework/zend-db/pull/336) adds `InsertIgnore` class for "INSERT IGNORE" usage (usable in `MySQL` platform).

- [zendframework/zend-db#356](https://github.com/zendframework/zend-db/pull/356) adds support for `IN (NULL)` for empty value-set.

### Changed

- Nothing.

### Deprecated

- Nothing.

### Removed

- Nothing.

### Fixed

- [zendframework/zend-db#146](https://github.com/zendframework/zend-db/pull/146) fixes setting correct value for `lastInsertValue` pre-insert in `SequenceFeature`.

## 2.10.1 - 2019-12-31

- Nothing.

### Changed

- Nothing.

### Deprecated

- Nothing.

### Removed

- Nothing.

### Fixed

- [zendframework/zend-db#382](https://github.com/zendframework/zend-db/pull/382) fixes `Laminas\Db\Sql\Expression` to allow `0` value for parameter.

- [zendframework/zend-db#395](https://github.com/zendframework/zend-db/pull/395) fixes PHP 7.4 compatibility.

- [zendframework/zend-db#392](https://github.com/zendframework/zend-db/pull/392) fixes `MetadataFeature` to work with `TableIdentifier`.

- [zendframework/zend-db#399](https://github.com/zendframework/zend-db/pull/399) fixes accessing constraint metadata within the Oracle adapter.

- [zendframework/zend-db#375](https://github.com/zendframework/zend-db/pull/375) fixes detecting number of replacements in `Laminas\Db\Sql\Expression`.

- [zendframework/zend-db#377](https://github.com/zendframework/zend-db/pull/377) allows any `AdapterInterface` instance in `RowGateway`.

- [zendframework/zend-db#342](https://github.com/zendframework/zend-db/pull/342) fixes deleting from aliased tables.

- [zendframework/zend-db#386](https://github.com/zendframework/zend-db/pull/386) fixes too strongly casting integer parameters in PDO adapter.

## 2.10.0 - 2019-02-25

### Added

- [zendframework/zend-db#157](https://github.com/zendframework/zend-db/pull/157) added support of
  `Laminas\Db\Sql\TableIdentifier` in DDL
- [zendframework/zend-db#345](https://github.com/zendframework/zend-db/pull/345) allow usage with
 laminas-hydrator v3
- [zendframework/zend-db#346](https://github.com/zendframework/zend-db/pull/346) adds support for PHP
 7.3

### Changed

- Nothing.

### Deprecated

- Nothing.

### Removed

- Nothing.

### Fixed

- [zendframework/zend-db#303](https://github.com/zendframework/zend-db/pull/303) fixes zendframework/zend-db#295 issue:
 handle empty array as datasource at `AbstractResultSet::initialize()` at PHP
  7.2
- [zendframework/zend-db#313](https://github.com/zendframework/zend-db/pull/313) test
 `AbstractResultSet::current()` to return null on empty array
- [zendframework/zend-db#329](https://github.com/zendframework/zend-db/pull/329) fixes Exception
 thrown when calling `prepareStatementForSqlObject` on a Select with a
 sub-Select that has limit and/or offset set
- [zendframework/zend-db#337](https://github.com/zendframework/zend-db/pull/337) fixes zendframework/zend-db#330 current
  NULL for mysqli
- [zendframework/zend-db#338](https://github.com/zendframework/zend-db/pull/338) restore missing use
 `ResultSet` in `AbstractTableGateway`
- [zendframework/zend-db#341](https://github.com/zendframework/zend-db/pull/341) fixes undefined
 variable bug in MetadataFeature
- [zendframework/zend-db#357](https://github.com/zendframework/zend-db/pull/357) fixes named params
 in subquery - limit and offset (issue zendframework/zend-db#355)

## 2.9.3 - 2018-04-09

### Added

- Nothing.

### Changed

- Nothing.

### Deprecated

- Nothing.

### Removed

- Nothing.

### Fixed

- [zendframework/zend-db#295](https://github.com/zendframework/zend-db/pull/295) fix error when
  datasource passed to `AbstractResultSet::initialize()` is empty array at
  php 7.2 environment

- [zendframework/zend-db#300](https://github.com/zendframework/zend-db/pull/300) Fix error for nested
  queries inside field parameters

- [zendframework/zend-db#301](https://github.com/zendframework/zend-db/pull/301) fix for issue with
  set fields that exists in different tables in one query

- [zendframework/zend-db#304](https://github.com/zendframework/zend-db/pull/304) fix PDO bind
  parameter name to use field name with extended charset (PDO only supports
  alphanumeric and underscore for placeholder/parameter names).

## 2.9.2 - 2017-12-11

### Added

- Nothing.

### Changed

- Nothing.

### Deprecated

- Nothing.

### Removed

- Nothing.

### Fixed

- [zendframework/zend-db#292](https://github.com/zendframework/zend-db/pull/292) ensures that you may
  reference bound parameter names using a leading colon (`:`) character when
  using the PDO adapter. (The leading colon is not technically necessary, as the
  adapter will prefix for you; however, this ensures portability with vanilla
  PDO.)

## 2.9.1 - 2017-12-07

### Added

- Nothing.

### Changed

- [zendframework/zend-db#289](https://github.com/zendframework/zend-db/pull/289) reverts a change
  introduced in 2.9.0 and modifies the behavior of the PDO adapter slightly
  to remove a regression. In 2.9.0, when binding parameters with names that
  contained characters not supported by PDO, we would pass the parameter names
  to `md5()`; this caused a regression, as the SQL string containing the
  parameter name was not also updated.

  This patch modifies the behavior during a bind-operation to instead raise an
  exception if a parameter name contains characters not supported by PDO.

### Deprecated

- Nothing.

### Removed

- Nothing.

### Fixed

- Nothing.

## 2.9.0 - 2017-12-06

### Added

- [zendframework/zend-db#216](https://github.com/zendframework/zend-db/pull/216) added AFTER support
  in ALTER TABLE syntax for MySQL
- [zendframework/zend-db#223](https://github.com/zendframework/zend-db/pull/223) added support for
  empty values set with IN predicate
- [zendframework/zend-db#271](https://github.com/zendframework/zend-db/pull/271) added support for
  dash character on MySQL identifier
- [zendframework/zend-db#273](https://github.com/zendframework/zend-db/pull/273) added support for
  implementing an error handler for db2_prepare
- [zendframework/zend-db#275](https://github.com/zendframework/zend-db/pull/275) added support for
  LIMIT OFFSET for db2
- [zendframework/zend-db#280](https://github.com/zendframework/zend-db/pull/280) added version dsn
  parameter for pdo_dblib

### Deprecated

- Nothing.

### Removed

- Nothing.

### Fixed

- [zendframework/zend-db#205](https://github.com/zendframework/zend-db/pull/205) fixes the spaces in
  ORDER BY syntax
- [zendframework/zend-db#224](https://github.com/zendframework/zend-db/pull/224) fixes how parameters
  are bound to statements in the PDO adapter. PDO has a restriction on parameter
  names of `[0-9a-zA_Z_]`; as such, the driver now hashes the parameter names
  using `md5()` in order to ensure compatibility with other drivers.
- [zendframework/zend-db#229](https://github.com/zendframework/zend-db/pull/229) fixes the support
  of SSL for mysqli
- [zendframework/zend-db#255](https://github.com/zendframework/zend-db/pull/255) fixes ResultSet with
  array values
- [zendframework/zend-db#261](https://github.com/zendframework/zend-db/pull/261) fixes Exception in
  Firebird driver doesn't support lastInsertId
- [zendframework/zend-db#276](https://github.com/zendframework/zend-db/pull/276) fixes the support
  of PHP 7.2
- [zendframework/zend-db#287](https://github.com/zendframework/zend-db/pull/287) fixes the usage of
  count() with PHP 7.2

## 2.8.2 - 2016-08-09

### Added

- [zendframework/zend-db#110](https://github.com/zendframework/zend-db/pull/110) prepared the
  documentation for publication at https://docs.laminas.dev/laminas-db/
- [zendframework/zend-db#114](https://github.com/zendframework/zend-db/pull/114) add
  Adapter\Adapter::class to alias against Adapter\AdapterInterface::class

### Deprecated

- Nothing.

### Removed

- Nothing.

### Fixed

- [zendframework/zend-db#154](https://github.com/zendframework/zend-db/pull/154) fixes the how the
  COMBINE operator is applied to SQLite adapters, ensuring a valid UNION
  statement is generated.
- [zendframework/zend-db#112](https://github.com/zendframework/zend-db/pull/112) fixes the test on
  the number of replacements when using the same variable name.
- [zendframework/zend-db#115](https://github.com/zendframework/zend-db/pull/115) TableGateway update
  method was incorrect when specifying default join declaration.
- [zendframework/zend-db#145](https://github.com/zendframework/zend-db/pull/145) Fix MSSQL Select
  when encounting DISTINCT and OFFSET and LIMIT together.
- [zendframework/zend-db#153](https://github.com/zendframework/zend-db/pull/153) Runtime exception
  threw fatal error due to incorrect spelling of the class when a DSN did not
  exist.

## 2.8.1 - 2016-04-14

### Added

- Nothing.

### Deprecated

- Nothing.

### Removed

- Nothing.

### Fixed

- [zendframework/zend-db#100](https://github.com/zendframework/zend-db/pull/100) fixes the JOIN
  behavior to re-allow selecting an empty column set from the joined table.
- [zendframework/zend-db#106](https://github.com/zendframework/zend-db/pull/106) fixes an issue in
  the test suite when ext/pgsql is enabled, but no databases are avaiable.

## 2.8.0 - 2016-04-12

### Added

- [zendframework/zend-db#92](https://github.com/zendframework/zend-db/pull/92) adds the class
  `Laminas\Db\Sql\Join` for creating and aggregating JOIN specifications. This is
  now consumed by all `Laminas\Db\Sql` implementations in order to represent JOIN
  statements.
- [zendframework/zend-db#92](https://github.com/zendframework/zend-db/pull/92) adds support for JOIN
  operations to UPDATE statements.
- [zendframework/zend-db#92](https://github.com/zendframework/zend-db/pull/92) adds support for joins
  to `AbstractTableGateway::update`; you can now pass an array of
  specifications via a third argument to the method.
- [zendframework/zend-db#96](https://github.com/zendframework/zend-db/pull/96) exposes the package as
  config-provider/component, but adding:
  - `Laminas\Db\ConfigProvider`, which maps the `AdapterInterface` to the
    `AdapterServiceFactory`, and enables the `AdapterAbstractServiceFactory`.
  - `Laminas\Db\Module`, which does the same, for a laminas-mvc context.

### Deprecated

- Nothing.

### Removed

- Nothing.

### Fixed

- Nothing.

## 2.7.1 - 2016-04-12

### Added

- Nothing.

### Deprecated

- Nothing.

### Removed

- Nothing.

### Fixed

- [zendframework/zend-db#71](https://github.com/zendframework/zend-db/pull/71) updates the `Pgsql`
  adapter to allow passing the connection charset; this can be done with the
  `charset` option when creating your adapter.
- [zendframework/zend-db#76](https://github.com/zendframework/zend-db/pull/76) fixes the behavior of
  `Laminas\Db\Sql\Insert` when an array of names is used for columns to ensure the
  string names are used, and not the array indices.
- [zendframework/zend-db#91](https://github.com/zendframework/zend-db/pull/91) fixes the behavior of
  the `Oci8` adapter when initializing a result set; previously, it was
  improperly assigning the count of affected rows to the generated value.
- [zendframework/zend-db#95](https://github.com/zendframework/zend-db/pull/95) fixes the `IbmDb2`
  platform's `quoteIdentifier()` method to properly allow `#` characters in
  identifiers (as they are commonly used on that platform).

## 2.7.0 - 2016-02-22

### Added

- Nothing.

### Deprecated

- Nothing.

### Removed

- Nothing.

### Fixed

- [zendframework/zend-db#85](https://github.com/zendframework/zend-db/pull/85) and
  [zendframework/zend-db#87](https://github.com/zendframework/zend-db/pull/87) update the code base
  to be forwards compatible with:
  - laminas-eventmanager v3
  - laminas-hydrator v2.1
  - laminas-servicemanager v3
  - laminas-stdlib v3

## 2.6.2 - 2015-12-09

### Added

- [zendframework/zend-db#49](https://github.com/zendframework/zend-db/pull/49) Add docbook
  documentation.

### Deprecated

- Nothing.

### Removed

- Nothing.

### Fixed

- [zendframework/zend-db#55](https://github.com/zendframework/zend-db/pull/55) Implement FeatureSet
  canCallMagicCall and callMagicCall methods
- [zendframework/zend-db#56](https://github.com/zendframework/zend-db/pull/56)
  AbstractResultSet::current now does validation to ensure an array.
- [zendframework/zend-db#58](https://github.com/zendframework/zend-db/pull/58) Fix unbuffered result
  on MySQLi.
- [zendframework/zend-db#59](https://github.com/zendframework/zend-db/pull/59) Allow unix_socket
  parameter

## 2.6.1 - 2015-10-14

### Added

- Nothing.

### Deprecated

- Nothing.

### Removed

- Nothing.

### Fixed

- [zendframework/zend-db#31](https://github.com/zendframework/zend-db/pull/31) fixes table gateway
  update when there is a table alias utilized.

## 2.6.1 - 2015-10-14

### Added

- Nothing.

### Deprecated

- Nothing.

### Removed

- Nothing.

### Fixed

- [zendframework/zend-db#43](https://github.com/zendframework/zend-db/pull/43) unset and get during
  an insert operation would throw an InvalidArgumentException during an insert.

## 2.6.0 - 2015-09-22

### Added

- [zendframework/zend-db#42](https://github.com/zendframework/zend-db/pull/42) updates the component
  to use laminas-hydrator for hydrator functionality; this provides forward
  compatibility with laminas-hydrator, and backwards compatibility with
  hydrators from older versions of laminas-stdlib.
- [zendframework/zend-db#15](https://github.com/zendframework/zend-db/pull/15) adds a new predicate,
  `Laminas\Db\Sql\Predicate\NotBetween`, which can be invoked via `Sql`
  instances: `$sql->notBetween($field, $min, $max)`.
- [zendframework/zend-db#22](https://github.com/zendframework/zend-db/pull/22) extracts a factory,
  `Laminas\Db\Metadata\Source\Factory`, from `Laminas\Db\Metadata\Metadata`,
  removing the (non-public) `createSourceFromAdapter()` method from that
  class. Additionally, it extracts `Laminas\Db\Metadata\MetadataInterface`, to
  allow creating alternate implementations.

### Deprecated

- [zendframework/zend-db#27](https://github.com/zendframework/zend-db/pull/27) deprecates the
  constants `JOIN_OUTER_LEFT` and `JOIN_OUTER_RIGHT` in favor of
  `JOIN_LEFT_OUTER` and `JOIN_RIGHT_OUTER`.

### Removed

- Nothing.

### Fixed

- Nothing.

## 2.5.2 - 2015-09-22

### Added

- Nothing.

### Deprecated

- Nothing.

### Removed

- [zendframework/zend-db#29](https://github.com/zendframework/zend-db/pull/29) removes the required
  second argument to `Laminas\Db\Predicate\Predicate::expression()`, allowing it to
  be nullable, and mirroring the constructor of `Laminas\Db\Predicate\Expression`.

### Fixed

- [zendframework/zend-db#40](https://github.com/zendframework/zend-db/pull/40) updates the
  laminas-stdlib dependency to reference `>=2.5.0,<2.7.0` to ensure hydrators
  will work as expected following extraction of hydrators to the laminas-hydrator
  repository.
- [zendframework/zend-db#34](https://github.com/zendframework/zend-db/pull/34) fixes retrieval of
  constraint metadata in the Oracle adapter.
- [zendframework/zend-db#41](https://github.com/zendframework/zend-db/pull/41) removes hard dependency
  on EventManager in AbstractTableGateway.
- [zendframework/zend-db#17](https://github.com/zendframework/zend-db/pull/17) removes an executable
  bit on a regular file.
- [zendframework/zend-db#3](https://github.com/zendframework/zend-db/pull/3) updates the code to use
  closure binding (now that we're on 5.5+, this is possible).
- [zendframework/zend-db#9](https://github.com/zendframework/zend-db/pull/9) thoroughly audits the
  OCI8 (Oracle) driver, ensuring it provides feature parity with other drivers,
  and fixes issues with subselects, limits, and offsets.
