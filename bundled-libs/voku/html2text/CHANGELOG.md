# Changelog

### 5.0.3 (2019-02-05)

- fix string repeat (when html tags are inside other html tags) | thanks @ vibrantBits
- fix ul, ol, dl nested handling | thanks @ on2
- new option for "htmlspecialchars_decode()" usage
- move more regex into regex with options (<hr>, <td>)


### 5.0.2 (2019-01-12)

- use phpcs fixer
- use namespace for tests


### 5.0.1 (2018-10-20)

- fix for PHP 7.3


### 5.0.0 (2017-12-23)

- update "Portable UTF8" from v4 -> v5
  
  -> this is a breaking change without API-changes - but the requirement from 
  "Portable UTF8" has been changed (it no longer requires all polyfills from Symfony)


### 4.0.0 (2017-11-19)
- "php": ">=7.0" 
  * drop support for PHP < 7.0
  * use "strict_types"
  
- removed the legacy construct (take a look at the phpdoc, if needed)  
  
- removed deprecated methods
  * set_base_url() -> setBaseUrl()
  * set_html() -> setHtml()
  * get_text() -> getText() 
  * p() && print_text() -> echo getText()