<?php #

/**
 *  @version 
 *  @author Tadashi Jokagi <elf2000@users.sourceforge.net>
 *  EN-Revision: 690
 */

@define('PLUGIN_EVENT_XHTMLCLEANUP_NAME', '共通 XHTML のエラーの修正');
@define('PLUGIN_EVENT_XHTMLCLEANUP_DESC', 'This plugin corrects common issues with XHTML markup in entries. It assists in keeping your blog XHTML compliant.');
@define('PLUGIN_EVENT_XHTMLCLEANUP_XHTML', 'XML 解析済データをエンコードしますか?');
@define('PLUGIN_EVENT_XHTMLCLEANUP_XHTML_DESC', 'This plugin uses a XML parsing method to ensure XHTML validity of your code. This xml parsing may convert already valid entities to unescaped entities, so the plugin encodes all entities after the parsing. Set this flag to OFF if that introduces double encoding for you!');
@define('PLUGIN_EVENT_XHTMLCLEANUP_UTF8', 'UTF-8 エントリを掃除しますか?');
@define('PLUGIN_EVENT_XHTMLCLEANUP_UTF8_DESC', 'If enabled, HTML entities derived from UTF-8 characters will be properly converted and not double-encoded in your output.');

