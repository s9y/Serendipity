<?php
if (IN_serendipity !== true) {
  die ("Don't hack!");
}

@serendipity_plugin_api::load_language(dirname(__FILE__));

$serendipity['smarty']->assign('archiveURL', serendipity_rewriteURL(PATH_ARCHIVE));

// show elapsed time in words, such as x hours ago.
function distanceOfTimeInWords($fromTime, $toTime = 0) {
    $distanceInSeconds = round(abs($toTime - $fromTime));
    $distanceInMinutes = round($distanceInSeconds / 60);
       
    if ( $distanceInMinutes <= 1 ) {
        if ( $distanceInSeconds < 60 ) {
            return ELAPSED_LESS_THAN_MINUTE_AGO;
        }
        return ELAPSED_ONE_MINUTE_AGO;
    }
    if ( $distanceInMinutes < 45 ) {
        return (sprintf(ELAPSED_MINUTES_AGO, $distanceInMinutes));
    }
    if ( $distanceInMinutes < 90 ) {
        return ELAPSED_ABOUT_ONE_HOUR_AGO;
    }
    // less than 24 hours
    if ( $distanceInMinutes < 1440 ) {
        return (sprintf(ELAPSED_HOURS_AGO, round(floatval($distanceInMinutes) / 60.0)));
    }
    //less than 48hours
    if ( $distanceInMinutes < 2880 ) {
        return ELAPSED_ONE_DAY_AGO;
    }
    // less than 30 days
    if ( $distanceInMinutes < 43200 ) {
        return (sprintf(ELAPSED_DAYS_AGO, round(floatval($distanceInMinutes) / 1440)));
    }
    //less than 60 days
    if ( $distanceInMinutes < 86400 ) {
        return ELAPSED_ABOUT_ONE_MONTH_AGO;
    }
    // less than 365 days
    if ( $distanceInMinutes < 525600 ) {
        return (sprintf(ELAPSED_MONTHS_AGO, round(floatval($distanceInMinutes) / 43200)));
    }
    // less than 2 years
    if ( $distanceInMinutes < 1051199 ) {
        return ELAPSED_ABOUT_ONE_YEAR_AGO;
    }
    return (sprintf(ELAPSED_OVER_YEARS_AGO, round(floatval($distanceInMinutes) / 525600)));
}

// smarty function to use distanceOfTimeInWords function
// call from tpl as {elapsed_time_words from_time=$comment.timestamp}
$serendipity['smarty']->register_function('elapsed_time_words', 'timeAgoInWords');

function timeAgoInWords($params, &$smarty) {
        return distanceOfTimeInWords($params['from_time'], time());
    }

if (class_exists('serendipity_event_entryproperties')) {
    $ep_msg=THEME_EP_YES;
    } else {
    $ep_msg=THEME_EP_NO;
} 

    
$template_config = array(
    array(
        'var'           => 'theme_instructions',
        'type'          => 'content',
        'default'       => $ep_msg . THEME_INSTRUCTIONS . '<p>' . CATEGORIES_ON_ARCHIVE_DESC . '</p><p>' . TAGS_ON_ARCHIVE_DESC . '<p>',
    ),
    array(
        'var'           => 'default_header_image',
        'name'          => DEFAULT_HEADER_IMAGE,
        'description'   => DEFAULT_HEADER_IMAGE_DESC,
        'type'          => 'media',
        'default'       => serendipity_getTemplateFile('img/home-bg.jpg', 'serendipityHTTPPath', true)
    ),
    array(
        'var'           => 'entry_default_header_image',
        'name'          => ENTRY_DEFAULT_HEADER_IMAGE,
        'description'   => ENTRY_DEFAULT_HEADER_IMAGE_DESC,
        'type'          => 'media',
        'default'       => serendipity_getTemplateFile('img/post-bg.jpg', 'serendipityHTTPPath', true)
    ),
    array(
        'var'           => 'staticpage_header_image',
        'name'          => STATICPAGE_DEFAULT_HEADER_IMAGE,
        'description'   => STATICPAGE_DEFAULT_HEADER_IMAGE_DESC,
        'type'          => 'media',
        'default'       => serendipity_getTemplateFile('img/about-bg.jpg', 'serendipityHTTPPath', true)
    ),
     array(
        'var'           => 'contactform_header_image',
        'name'          => CONTACTFORM_HEADER_IMAGE,
        'type'          => 'media',
        'default'       => serendipity_getTemplateFile('img/contact-bg.jpg', 'serendipityHTTPPath', true)
    ),
     array(
        'var'           => 'archive_header_image',
        'name'          => ARCHIVE_HEADER_IMAGE,
        'type'          => 'media',
        'default'       => serendipity_getTemplateFile('img/archive-bg.jpg', 'serendipityHTTPPath', true)
    ),    
    array(
        'var'           => 'date_format',
        'name'          => ENTRY_DATE_FORMAT . ' (http://php.net/strftime)',
        'type'          => 'string',
        'default'       => DATE_FORMAT_ENTRY,
    ),
    array(
        'var'           => 'comment_time_format',
        'name'          => COMMENT_TIME_FORMAT,
        'type'          => 'select',
        'default'       => 'words',
        'select_values' => array('words' => WORDS,
                                 'time'  => TIMESTAMP)
    ),
    array(
        'var'           => 'subtitle_use_entrybody',
        'name'          => SUBTITLE_USE_ENTRYBODY,
        'type'          => 'boolean',
        'default'       => false,
    ),
    array(
        'var'           => 'entrybody_detailed_only',
        'name'          => ENTRYBODY_DETAILED_ONLY,
        'type'          => 'boolean',
        'default'       => true,
    ), 
    array(
        'var'           => 'show_comment_link',
        'name'          => SHOW_COMMENT_LINK,
        'type'          => 'boolean',
        'default'       => false,
    ),     
    array(
        'var'           => 'categories_on_archive',
        'name'          => CATEGORIES_ON_ARCHIVE,
        'description'   => CATEGORIES_ON_ARCHIVE_DESC,
        'type'          => 'boolean',
        'default'       => false,
    ),
    array(
        'var'           => 'tags_on_archive',
        'name'          => TAGS_ON_ARCHIVE,
        'description'   => TAGS_ON_ARCHIVE_DESC,
        'type'          => 'boolean',
        'default'       => false,
    ),
    array(
        'var'           => 'use_corenav',
        'name'          => USE_CORENAV,
        'type'          => 'boolean',
        'default'       => true,
    ),
    array(
        'var'           => 'home_link_text',
        'name'          => HOME_LINK_TEXT,
        'type'          => 'string',
        'default'       => $serendipity['blogTitle'],
    ),    
     array(
        'var'           => 'twitter_url',
        'name'          => TWITTER_URL,
        'type'          => 'string',
        'default'       => '',
    ),
     array(
        'var'           => 'facebook_url',
        'name'          => FACEBOOK_URL,
        'type'          => 'string',
        'default'       => '',
    ),
      array(
        'var'           => 'rss_url',
        'name'          => RSS_URL,
        'type'          => 'string',
        'default'       => $serendipity['baseURL'] . 'index.php?/feeds/index.rss2',
    ), 
      array(
        'var'           => 'github_url',
        'name'          => GITHUB_URL,
        'type'          => 'string',
        'default'       => '',
    ), 
      array(
        'var'           => 'instagram_url',
        'name'          => INSTAGRAM_URL,
        'type'          => 'string',
        'default'       => '',
    ),  
        array(
        'var'           => 'pinterest_url',
        'name'          => PINTEREST_URL,
        'type'          => 'string',
        'default'       => '',
    ),   
        array(
        'var'           => 'copyright',
        'name'          => COPYRIGHT,
        'type'          => 'string',
        'default'       => 'Copyright &copy; ' . $serendipity['blogTitle'] . ' ' . date(Y) . ' | <a href="' . $serendipity['baseURL'] . 'serendipity_admin.php">Admin</a>',
    ),  
);

// Collapse template options into groups.
$template_global_config = array('navigation' => true);
$template_loaded_config = serendipity_loadThemeOptions($template_config, $serendipity['smarty_vars']['template_option'], true);
serendipity_loadGlobalThemeOptions($template_config, $template_loaded_config, $template_global_config);

$navlinks_collapse = array( 'use_corenav', 'amount');
for ($i = 0; $i < $template_loaded_config['amount']; $i++) {
	array_push($navlinks_collapse, 'navlink' . $i . 'text' ,'navlink' . $i . 'url');
}

$template_config_groups = array(
    THEME_README        => array('theme_instructions'),
    THEME_HEADERS       => array('default_header_image', 'entry_default_header_image', 'staticpage_header_image', 'contactform_header_image', 'archive_header_image'),
    THEME_PAGE_OPTIONS  => array('home_link_text', 'date_format', 'comment_time_format','subtitle_use_entrybody', 'entrybody_detailed_only', 'show_comment_link', 'categories_on_archive', 'tags_on_archive', 'copyright'),   
    THEME_SOCIAL_LINKS  => array('twitter_url', 'facebook_url', 'rss_url', 'github_url', 'instagram_url', 'pinterest_url'),
    THEME_NAVIGATION    => $navlinks_collapse
);

// Save custom field variables within the serendipity "Edit/Create Entry" backend.
//                Any custom variables can later be queried inside the .tpl files through
//                  {if $entry.properties.key_value == 'true'}...{/if}

// Function to get the content of a non-boolean entry variable
function entry_option_get_value($property_key, &$eventData) {
    global $serendipity;
    if (isset($eventData['properties'][$property_key])) return $eventData['properties'][$property_key];
    if (isset($serendipity['POST']['properties'][$property_key])) return $serendipity['POST']['properties'][$property_key];
     return false;    
}

// Function to store form values into the serendipity database, so that they will be retrieved later.
function entry_option_store($property_key, $property_val, &$eventData) {
    global $serendipity;

    $q = "DELETE FROM {$serendipity['dbPrefix']}entryproperties WHERE entryid = " . (int)$eventData['id'] . " AND property = '" . serendipity_db_escape_string($property_key) . "'";
    serendipity_db_query($q);

    if (!empty($property_val)) {
        $q = "INSERT INTO {$serendipity['dbPrefix']}entryproperties (entryid, property, value) VALUES (" . (int)$eventData['id'] . ", '" . serendipity_db_escape_string($property_key) . "', '" . serendipity_db_escape_string($property_val) . "')";
        serendipity_db_query($q);
    }
}

function serendipity_plugin_api_pre_event_hook($event, &$bag, &$eventData, &$addData) {
    global $serendipity;

    // Check what Event is coming in, only react to those we want.
    switch($event) {

        // Displaying the backend entry section
        case 'backend_display':
            // INFO: The whole 'entryproperties' injection is easiest to store any data you want. The entryproperties plugin
            // should actually not even be required to do this, as serendipity loads all properties regardless of the installed plugin

            // The name of the variable
            $entry_subtitle_key = 'entry_subtitle';
            $entry_specific_header_image_key = 'entry_specific_header_image';

            // Check what our special key is set to (checks both POST data as well as the actual data)
            $is_entry_subtitle = (function_exists('serendipity_specialchars') ? serendipity_specialchars(entry_option_get_value($entry_subtitle_key, $eventData)) : htmlspecialchars(entry_option_get_value($entry_subtitle_key, $eventData), ENT_COMPAT, LANG_CHARSET));
            $is_entry_specific_header_image = entry_option_get_value ($entry_specific_header_image_key, $eventData);

            // This is the actual HTML output on the backend screen.
            //DEBUG: echo '<pre>' . print_r($eventData, true) . '</pre>';  
            echo '<div class="entryproperties">';
            echo '  <input type="hidden" value="true" name="serendipity[propertyform]">';
            echo '  <h3>' . THEME_ENTRY_PROPERTIES_HEADING . '</h3>';
            echo '      <div class="entryproperties_customfields adv_opts_box">';
            echo '          <h4>' . THEME_CUSTOM_FIELD_HEADING . '</h4>';
            echo '          <span>' . THEME_CUSTOM_FIELD_DEFINITION . '</span>';
            echo '          <div class="serendipity_customfields clearfix">';
            echo '              <div class="clearfix form_area media_choose" id="ep_column_' . $entry_subtitle_key . '">'; 
            echo '                  <label for="'. $entry_subtitle_key . '">' . THEME_ENTRY_SUBTITLE . '</label>';
            echo '                  <input id="' . $entry_subtitle_key . '" type="text" value="' . $is_entry_subtitle . '" name="serendipity[properties][' . $entry_subtitle_key . ']" style="width: 100%;">';
            echo '              </div>';
            echo '          </div>';            
            echo '          <div class="serendipity_customfields clearfix">';
            echo '              <div class="clearfix form_area media_choose" id="ep_column_' . $entry_specific_header_image_key . '">';
            echo '                  <label for="' . $entry_specific_header_image_key . '">' . THEME_ENTRY_HEADER_IMAGE. '</label>';
            echo '                  <textarea data-configitem="' . $entry_specific_header_image_key . '" name="serendipity[properties][' . $entry_specific_header_image_key . ']" class="change_preview" id="prop' . $entry_specific_header_image_key . '">' . $is_entry_specific_header_image . '</textarea>';
            echo '                  <button title="' . MEDIA . '" name="insImage" type="button" class="customfieldMedia"><span class="icon-picture"></span><span class="visuallyhidden">' . MEDIA . '</span></button>';
            echo '                  <figure id="' . $entry_specific_header_image_key . '_preview">';
            echo '                      <figcaption>' . PREVIEW . '</figcaption>';
            echo '                      <img alt="" src="' . $is_entry_specific_header_image . '">';
            echo '                  </figure>';
            echo '              </div>';
            echo '          </div>';
            echo '      </div>';
            echo ' </div>';    

            break;

        // To store the value of our entryproperties
        case 'backend_publish':
        case 'backend_save':
            // Call the helper function with all custom variables here.
            entry_option_store('entry_subtitle', $serendipity['POST']['properties']['entry_subtitle'], $eventData);
            entry_option_store('entry_specific_header_image', $serendipity['POST']['properties']['entry_specific_header_image'], $eventData);
            break;
    }
}
