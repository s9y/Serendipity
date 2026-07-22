<!DOCTYPE html>
<html lang="{$lang}">
<head>
<meta charset="{$head_charset}">
<meta name="robots" content="noindex,nofollow">
<meta name="referrer" content="no-referrer">
<title>{$CONST.EXIT_LEAVING_TITLE}{if $blogTitle} | {$blogTitle}{/if}</title>
<link rel="stylesheet" href="{$head_link_stylesheet}">
<style>
{literal}
/* Override 2k11 column layout — no sidebar on this page */
#content { width: 100%; max-width: 42em; padding: 1.5em 1em 2em; box-sizing: border-box; }
#banner  { padding: .5em 1em; }
/* Warning notice box */
.exit-warning { background:#fff8e1; border-left:4px solid #f59e0b; border-radius:4px; padding:1em 1.25em; margin:1.25em 0; }
.exit-warning p { margin:0; }
/* Destination URL display */
.exit-dest { display:block; background:#f3f4f6; border:1px solid #d1d5db; border-radius:4px; padding:.7em 1em; margin:1.25em 0; font-family:monospace; font-size:.92em; word-break:break-all; color:#111; }
/* Action buttons */
.exit-actions { display:flex; align-items:center; gap:1.25em; margin-top:1.5em; flex-wrap:wrap; }
.exit-btn-continue { display:inline-block; padding:.6em 1.4em; background:#2563eb; color:#fff !important; text-decoration:none; border-radius:4px; font-weight:600; }
.exit-btn-continue:hover { background:#1d4ed8; }
.exit-btn-back { color:#555; text-decoration:none; }
.exit-btn-back:hover { text-decoration:underline; }
{/literal}
</style>
</head>
<body>
<div id="page" class="clearfix">
  <header id="banner" class="clearfix">
    <div id="identity">
      <a href="{$exit_safe_base}"><h1>{$blogTitle}</h1></a>
    </div>
  </header>
  <main id="content">
    <article class="serendipity_entry">
      <h2 class="entry-title">{$CONST.EXIT_LEAVING_TITLE}</h2>
      <div class="entry-body">
        <div class="exit-warning">
          <p>{$CONST.EXIT_LEAVING_NOTICE}</p>
        </div>
        <code class="exit-dest">{$exit_safe_url}</code>
        <div class="exit-actions">
          <a class="exit-btn-continue" href="{$exit_safe_url}" rel="nofollow noopener noreferrer">{$CONST.EXIT_LEAVING_CONTINUE} &rarr;</a>
          <a class="exit-btn-back" href="{$exit_safe_base}">&larr; {$CONST.EXIT_LEAVING_BACK}</a>
        </div>
      </div>
    </article>
  </main>
  <footer id="colophon">
    <p><span lang="en">Powered by <a href="http://s9y.org">Serendipity</a></span></p>
  </footer>
</div>
</body>
</html>
