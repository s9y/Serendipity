<?php
// General
@define('ERROR_404', 'Error 404 - The page you requested could not be found.');
@define('SEARCH_WHAT','What are you looking for?'); //used on quicksearch modal
@define('SEARCH','Search');
@define('TOGGLE_NAV','Toggle Navigation'); //only seen by screen readers
@define('CLOSE','Close'); //close button on search form
@define('READ_MORE','Read More');

//Option groups and instructions
@define('THEME_SOCIAL_LINKS', 'Social links');
@define('THEME_PAGE_OPTIONS', 'Page Options');
@define('THEME_NAVIGATION', 'Navigation Options');
@define('THEME_README','Read me');
@define('THEME_IDENTITY','Site Identity');
@define('THEME_EP_YES','<p class="msg_success">Extended Property for Entries plugin (serendipity_event_entryproperties) is required for this theme, and is installed.</p>');
@define('THEME_EP_NO','<p class="msg_error">Extended Property for Entries plugin (serendipity_event_entryproperties) is required for this theme, which is not installed or is inactive.  Please install the plugin to fully utlize this theme.</p>');
@define('THEME_INSTRUCTIONS','<p>This theme displays blog posts on a linear timeline.  Each group of month titles can also be displayed or hidden on the timeline.</p><p>This theme uses a right and bottom sidebar.  Either, or both sidebars can be disabled by deleting sidebar plugins or relocating sidebar plugins to the sidebar colum labeled "hidden" in plugin configuration.</p><p>This theme can be configured to display categories and entry tags from the respective sidebar plugins on the archive page.  See "' . THEME_PAGE_OPTIONS . '" below.</p><p>If using the avatar plugin (serendipity_event_gravatar), configure option "Produce smarty tag = yes" for best display of comment avatars.</p><p>Configure serendipity_event_freetag option "Extended Smarty = yes" for a nicer display of tags in the entry footer.</p>');
@define('THEME_CUSTOM_FIELD_HEADING', 'Custom Entry Fields');
@define('THEME_CUSTOM_FIELD_DEFINITION','These optional field(s) are only available when using this theme (timeline).  The event plugin serendipity_event_entryproperties (extended properties for entries) must also be installed to use these field(s).  The entry image will appear on both the timeline, and at the top of each detailed entry.');
@define('THEME_ENTRY_IMAGE','Entry Image.');
@define('THEME_DEMO_AVAILABLE', 'A complete English explanation of <a href="http://www.optional-necessity.com/demo/timeline/archives/13-Using-the-Timeline-theme.html">configuring and using Timeline</a> can be found on the <a href="http://www.optional-necessity.com/demo/timeline/">Timeline theme demo</a>.');


//Page Options
@define('USE_GOOGLEFONTS', 'Use Google webfonts?');
@define('THEME_COLORSET', 'Colorset');
@define('THEME_SKINSET', 'Theme skin');
@define('HEADER_IMG','Optional Header Image.   Leave blank to use Blog Name.');
@define('HEADER_IMG_DESC', 'Header image recommended size: 150px x 40px.');
@define('SUBHEADER_IMG','Optional Subheader Image.');
@define('SUBHEADER_IMG_DESC', 'This full width background image appears below the header logo and site navigation.');
@define('ENTRY_DATE_FORMAT','Entry Date Format');
@define('COMMENT_TIME_FORMAT','Comment and trackback time format');
@define('WORDS','Words');
@define('TIMESTAMP','Timestamp');
@define('DISPLAY_AS_TIMELINE','Use timeline format');
@define('DISPLAY_AS_TIMELINE_DESC','Use timeline format for blog posts.  If false, blog posts will be shown in a more typical blog format.');
@define('MONTHS_ON_TIMELINE','Show month names on timeline');
@define('MONTHS_ON_TIMELINE_DESC','Month name will appear as a heading on the timeline for each month of entries.');
@define('MONTHS_ON_TIMELINE_FORMAT','Timeline month format');
@define('CATEGORIES_ON_ARCHIVE', 'Show categories on archive page');
@define('CATEGORIES_ON_ARCHIVE_DESC', 'The sidebar categories plugin (serendipity_plugin_categories) must be installed and the option "Enable Smarty-Templates?" must be activated to view categories on the archive page.');//Used in theme readme and archive page
@define('CATEGORY_RSS_ON_ARCHIVE','Show RSS icon next to each category on archive page');
@define('TAGS_ON_ARCHIVE', 'Show tags on archive page');
@define('TAGS_ON_ARCHIVE_DESC', 'The show tagged entries plugin (serendipity_plugin_freetag) must be installed and the sidebar template option must be set to "archive_freetag.tpl" to view tags on the archive page.'); //Used in theme readme and archive page

//Navigation
@define('USE_CORENAV', 'Use global navigation?');

//Social media
@define('SOCIAL_ICONS_AMOUNT', 'Enter number of social media links');
@define('SOCIAL_NETWORK_SERVICE', 'Select social media service for link');
@define('SOCIAL_ICON_URL', 'URL for social media service link');
@define('COPYRIGHT', 'Copyright');

//time ago in words function
@define('ELAPSED_LESS_THAN_MINUTE_AGO','Less than a minute ago');
@define('ELAPSED_ONE_MINUTE_AGO','1 minute ago');
@define('ELAPSED_ONE_DAY_AGO','1 day ago');
@define('ELAPSED_MINUTES_AGO','%s minutes ago');
@define('ELAPSED_HOURS_AGO','%s hours ago');
@define('ELAPSED_DAYS_AGO','%s days ago');
@define('ELAPSED_MONTHS_AGO','%s months ago');
@define('ELAPSED_YEARS_AGO','%s years ago'); //not currently using this, but defining just in case
@define('ELAPSED_ABOUT_ONE_HOUR_AGO','About an hour ago'); // greater than 45 minutes, less than 90 minutes
@define('ELAPSED_ABOUT_ONE_MONTH_AGO','About a month ago'); // greater than 30 days, less than 60 days
@define('ELAPSED_ABOUT_ONE_YEAR_AGO','About a year ago'); // greater than one year, less than 2 years
@define('ELAPSED_OVER_YEARS_AGO','Over %s years ago');// greater than 2 years

//Static Pages
@define('STATIC_SHOW_AUTHOR_TEXT','Show Author\'s name?');
@define('STATIC_SHOW_DATE_TEXT','Show date last modified?');
@define('STATIC_SHOW_SIDEBARS_TEXT','Show sidebars?');
