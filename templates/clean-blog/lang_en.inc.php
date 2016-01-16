<?php
// General
@define('ERROR_404', 'Error 404 - The page you requested could not be found.');
@define('SEARCH_WHAT','What are you looking for?'); //used on quicksearch modal
@define('SEARCH','Search');
@define('TOGGLE_NAV','Toggle Navigation'); //only seen by screen readers
@define('CLOSE','Close'); //close button on search form
@define('READ_MORE','Read More');

//Option groups and instructions
@define('THEME_HEADERS', 'Header images'); 
@define('THEME_SOCIAL_LINKS', 'Social links');
@define('THEME_PAGE_OPTIONS', 'Page Options');
@define('THEME_NAVIGATION', 'Navigation Options');
@define('THEME_README','Read me');
@define('THEME_EP_YES','<p>Extended Property for Entries plugin (serendipity_event_entryproperties) is required for this theme, and is installed.</p>');
@define('THEME_EP_NO','<p class="serendipity_msg_important">Extended Property for Entries plugin (serendipity_event_entryproperties) is required for this theme, which is not installed or is inactive.  Please install the plugin to fully utlize this theme.</p>');
@define('THEME_INSTRUCTIONS','<p>This theme uses wide header images for different page types.  Default images are included with the theme.  The default images are 1900px wide.  These default images can be changed in the configurations settings below.  In addition to default images, each entry and static page can define their own unique header image.</p>  <p>This theme was designed to use a secondary subtitle, or byline, directly below the entry title.  The entry subtitle, and entry image, is available under the section "Advanced Options" when creating or editing an entry.  Alternatively, the theme can be configured to display the first 70 characters of an entry as the subtitle if no subtitle is defined for an entry.</p>  <p>This theme does not use sidebars.  This theme can, however, be configured to display categories and entry tags from the respective sidebar plugins on the archive page.  See "' . THEME_PAGE_OPTIONS . '" below.</p>  <p>If using the avatar plugin (serendipity_event_gravatar), configure option "Produce smarty tag = yes" for best display of comment avatars.</p>  <p>Configure serendipity_event_freetag option "Extended Smarty = yes" for a nicer display of tags in the entry footer.</p>');
@define('THEME_ENTRY_PROPERTIES_HEADING','Theme Clean Blog entry properties');
@define('THEME_CUSTOM_FIELD_HEADING', 'Custom Entry Fields');
@define('THEME_CUSTOM_FIELD_DEFINITION','These optional fields are only available when using this theme (clean blog).  The event plugin serendipity_event_entryproperties (extended properties for entries) must also be installed to use these fields.  The Entry Subtitle field is displayed below the entry title and should be a brief post summary.  The entry header image field will overide the default entry header image for this specific entry.');
@define('THEME_ENTRY_SUBTITLE','Entry Subtitle');
@define('THEME_ENTRY_HEADER_IMAGE','Entry Header Image');

// Header Images
@define('DEFAULT_HEADER_IMAGE', 'Default header image');
@define('DEFAULT_HEADER_IMAGE_DESC', 'This image will be used on pages which do not define their own header image');
@define('ENTRY_DEFAULT_HEADER_IMAGE', 'Header image for entries');
@define('ENTRY_DEFAULT_HEADER_IMAGE_DESC', 'This image will be used for all entries that do not define their own entry-specific header image');
@define('STATICPAGE_DEFAULT_HEADER_IMAGE', 'Header image for static pages');
@define('STATICPAGE_DEFAULT_HEADER_IMAGE_DESC', 'This image will be used for all static pages that do not define their own page-specific header image');
@define('STATICPAGE_SPECIFIC_HEADER_IMAGE','Staticpage Header Image (optional)');
@define('CONTACTFORM_HEADER_IMAGE', 'Header image for contact form');
@define('ARCHIVE_HEADER_IMAGE', 'Header image for archive page');

//Page Options
@define('HOME_LINK_TEXT', 'Home link text');
@define('ENTRY_DATE_FORMAT','Entry Date Format');
@define('COMMENT_TIME_FORMAT','Comment and trackback time format');
@define('WORDS','Words');
@define('TIMESTAMP','Timestamp');
@define('SUBTITLE_USE_ENTRYBODY','Display first 70 characters of entry body as entry subtitle if actual entry subtitle field is blank?');
@define('ENTRYBODY_DETAILED_ONLY','Show entry body on single entry page view only');
@define('SHOW_COMMENT_LINK','Show link to entry\'s comments');
@define('CATEGORIES_ON_ARCHIVE', 'Show categories on archive page');
@define('CATEGORIES_ON_ARCHIVE_DESC', 'The sidebar categories plugin (serendipity_plugin_categories) must be installed and the option "Enable Smarty-Templates?" must be activated to view categories on the archive page.');
@define('TAGS_ON_ARCHIVE', 'Show tags on archive page');
@define('TAGS_ON_ARCHIVE_DESC', 'The show tagged entries plugin (serendipity_plugin_freetag) must be installed and the sidebar template option must be set to "archive_freetag.tpl" to view tags on the archive page.');

//Static Pages
@define('STATIC_SHOW_AUTHOR_TEXT','Show Author\'s name');
@define('STATIC_SHOW_DATE_TEXT','Show date');

//Navigation
@define('USE_CORENAV', 'Use global navigation?');

//Social media
@define('TWITTER_URL','Twitter URL path.  Icon not displayed if blank.');
@define('FACEBOOK_URL','Facebook URL path.  Icon not displayed if blank.');
@define('RSS_URL','RSS feed URL path.  Icon not displayed if blank.');
@define('GITHUB_URL','GitHub URL path.  Icon not displayed if blank.');
@define('INSTAGRAM_URL','Instagram URL path.  Icon not displayed if blank.');
@define('PINTEREST_URL','Pinterest URL path.  Icon not displayed if blank.');
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
