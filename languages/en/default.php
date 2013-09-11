<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2013 Leo Feyer
 *
 * @package   OpenGraphTools
 * @author    Helmut Schottmüller
 * @license   LGPL
 * @copyright Helmut Schottmüller 2013
 */


/**
 * Miscellaneous
 */
$GLOBALS['TL_LANG']['MSC']['og_add'] = array('Add OpenGraph metadata', 'Check here to add OpenGraph metadata to this page.');
$GLOBALS['TL_LANG']['MSC']['og_title'] = array('og:title', 'The title, headline or name of the object.');
$GLOBALS['TL_LANG']['MSC']['og_url'] = array('og:url', 'The URL of the object, which acts as each object\'s unique identifier, otherwise known as the canonical URL - each URL can only contain a single object - and in most cases this is the same URL as the page on which the property tags are placed. It should not include any session variables, user identifying parameters, or counters. If you use this improperly, likes and shares will not be aggregated for this URL and will be spread across all of the variations of the URL.');
$GLOBALS['TL_LANG']['MSC']['og_site_name'] = array('og:site_name', 'Human-readable name of site hosting the object.');
$GLOBALS['TL_LANG']['MSC']['og_type'] = array('og:type', 'The object type for this object - to see what the type is for your og:type, go to the Open Graph section of the App Dashboard, click on Types, choose your object type and check the Open Graph Type field under the Advanced section. Note that once an object\'s type is set and has been used in a story that its type can not be changed. For a list of built-in types, please see our list of common open graph object types.');
$GLOBALS['TL_LANG']['MSC']['og_image'] = array('og:image', 'The URL of an image which is used in stories published about this object. We suggest that you give us an image of at least 200x200 pixels. However, bigger is better, so if you have a 1500x1500 image that you can use, please give it to us. We downsample and crop it for for people using smaller-resolution devices but will use it on a larger device. The larger this image is, the better engagement stories featuring it will get. (Note: image sizes must be no more than 5MB in size.) Note that you can include more than that one og:image in your object if you have more than one resolution available.');
$GLOBALS['TL_LANG']['MSC']['og_locale'] = array('og:locale', 'The language locale that the object properties use. This defaults to en_US if not specified.');
$GLOBALS['TL_LANG']['MSC']['og_images'] = array('Add images', 'Add all embedded images as OpenGraph images.');
$GLOBALS['TL_LANG']['MSC']['og_description'] = array('og:description', 'A short description or summary of the object.');
$GLOBALS['TL_LANG']['MSC']['og_determiner'] = array('og:determiner', 'The word that appears before the object\'s title in a story or sentence (such as "an Omelette"). The value of this property should be a string that is a member of the Enum {a, an, the, "", auto}. When \'auto\' is selected, Facebook will choose between \'a\' or \'an\'. Default is blank.');
$GLOBALS['TL_LANG']['MSC']['og_see_also'] = array('og:see_also', 'Used to supply an additional link that shows related content to the object.');
