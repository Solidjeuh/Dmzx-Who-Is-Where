<?php
/**
*
* @package phpBB Extension - Who is where
* @copyright (c) 2016/2018 dmzx - https://www.dmzx-web.net & martin - https://www.martins-phpbb.com
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters for use
// ’ » “ ” …

$lang = array_merge($lang, array(
	'WHOISWHERE_TITLE'							=> 'Who is Where',
	'WHOISWHERE_LICENSE' 						=> 'License invalid',
	'WHOISWHERE_VERSION' 						=> 'Version',
	'DOWNLOAD_SECTION' 							=> 'In the download section',
	'VIDEO' 									=> 'In the video section',
	'DONORLISTS' 								=> 'Looking at donators!',
	'MCHAT_LOGS' 								=> 'Viewing mchat logs',
	'TOTAL_CATEGORIES_OTHER'					=> 'Total several video categories <strong>%d</strong>',
	'TOTAL_CATEGORY_ZERO'						=> 'Total several video categories <strong>0</strong>',
	'TOTAL_VIDEO_ZERO'							=> 'Total <strong>0</strong> videos uploaded',
	'EMAILLIST_TEXT'							=> 'Sneaky ????? wants to steal your emails',
	'BATTLE'									=> 'Sinks ships on the battlefield',
	'PUZZLE'									=> 'Playing in puzzles',
	'PARTNER_PAGE'								=> 'Checks our partner page',
	'PARTNER_PAGE_ADD'							=> 'Add a Site to Partner Page',
	'REFFERAL_INVITES'							=> 'Invites some cool friends to join the site!',
	'BOARDRULES_TITLE'							=> 'Trying to read the Rules',
	'VIEWING_CREATOR'							=> 'Looking at ext creator',
	'VIEWING_CALENDAR'							=> 'Looking at the calendar',
	'VIEWING_RADIO'								=> 'Listening to rap',
	'VIEWING_CONTACT_ADMIN'						=> 'Viewing contact page',
	'VIEWING_TEAM_PAGE'							=> 'Viewing team page',
	'VIEWING_FAQ'								=> 'Viewing FAQ',
	'VIEWING_MEMBERS'							=> 'Viewing memberlist',
	'VIEWING_HANGMAN'							=> 'Is playing hangman',
	'KNUFFEL_VIEW'								=> 'Is playing knuffel',
	'VIEWING_DOWNLOADSYSTEM'					=> 'Is viewing downloads page',
	'VIEWING_FLAGS'								=> 'Is on the flags page',
	'VIEWING_QUOTESCOLLECTION'					=> 'Is reading quotes',
	'VIEWING_PARTNER'							=> 'Is in the partner pages',
	'VIEWING_ADD'								=> 'Is viewing partner add page',
	'VIEWING_PUZZLE'							=> 'is playing a puzzle',
	'VIEWING_CHAT_LOGS'					 		=> 'Is viewing mchat logs',
	'VIEWING_MCHAT_ARCHIVE'				 		=> 'Is viewing mchat archive',
	'VIEWING_MCHAT'						 		=> 'Is viewing mchat custom ',
	'VIDEO_INDEX'								=> 'Watching videos in the gallery',
	'VIEWING_STK'								=> 'Is in stk',
	'VIEWING_VIEW'								=> 'Is trying to view private stuff (BUT CANT)',
	'VIEWING_DONOR_LIST'						=> 'Is viewing the donors list',
	'VIEWING_FILES'						 		=> 'Is backing up the board files',
	'VIEWING_NO_TOPIC'							=> 'Is redirecting from the no-topic page',
	'VIEWING_MCACHE'			 				=> 'Cleaning the cache',
	'VIEWING_ATTACH'							=> 'Looking at all forum attachments',
	'VIEWING_NO_TOPIC'							=> 'Viewing deleted forum or topic',
	'VIEWING_ULTIMATEPOINTS'					=> 'Looking at the points page',
	'VIEWING_SKELETON'							=> 'Looking at the skeleton page',
	'VIEWING_ARCADE'							=> 'Is in the arcade',
	'VIEWING_KEYSPAGE'							=> 'Is making a key',
	'VIEWING_KEYSCHECK'						 	=> 'Is checking there key',
	'VIEWING_WELCOME'							=> 'Is on the welcome page',
	'VIEWING_ACTIVEEXT'							=> 'Is looking at active exts',
	'CITY'										=> 'City',
	'UCITY'										=> 'Unknown',
	'NO_ACCESS'									=> 'No access',
	'WIW_COUNTRY'								=> 'Country',
	'WIW_ARRIVED'								=> 'Arrived',
	'WIW_BROWSER'								=> 'Browser',
	'WIW_OS'									=> 'OS',
	'WIW_EDGE'									=> 'Edge',
	'WIW_FF'									=> 'Firefox',
	'WIW_MN'									=> 'Maxthon',
	'WIW_SY'									=> 'SeaMonkey',
	'WIW_IE'									=> 'Internet Explorer',
	'WIW_OPERA'									=> 'Opera',
	'WIW_CHROME'								=> 'Chrome',
	'WIW_SAFARI'								=> 'Safari',
	'WIW_OPERA'									=> 'Opera',
	'WIW_NO_BROWSER'							=> 'Browser/Bot',
	'READING_IN_TOPIC'							=> 'Reading topic: %s',
	'READING_IN_FORUM'							=> ' in forum: %s',
	'READING_IN_POST'							=> 'Reading post: %s',
	'READING_IN_POSTS'							=> ' in post: %s',
	'DOWNLOAD_FILE'								=> 'Downloading file: %s',
	'EDIT_MESSAGE'								=> 'Edit message in %s',
	'QUOTE_MESSAGE'								=> 'Quote message in %s',
	'DELETE_MESSAGE'							=> 'Delete message in %s',
	'SEARCH_EGOSEARCH'							=> 'Viewing own posts',
	'SEARCH_NEWPOSTS'							=> 'View new posts',
	'SEARCH_ACTIVE'								=> 'View active posts',
	'POSTING_MESSAGE_JQ' 						=> 'Ajax or jQuery present: Replying, quoting or editing message',
	'VO_VIEWING_FRONT_PAGE'						=> 'UCP: Viewing front page',
	'VO_VIEWING_SUBSCRIBED'						=> 'UCP: Manage subscriptions',
	'VO_VIEWING_BOOKMARKS'						=> 'UCP: Manage bookmarks',
	'VO_VIEWING_DRAFTS'							=> 'UCP: Manage drafts',
	'VO_VIEWING_ATTACHMENTS'					=> 'UCP: Manage attachments',
	'VO_VIEWING_NOTIFICATION_LIST'				=> 'UCP: Manage notifications',
	'VO_EDITING_PROFILE'	 					=> 'UCP: Editing profile',
	'VO_EDITING_SIGNATURE'						=> 'UCP: Editing signature',
	'VO_EDITING_AVATAR'							=> 'UCP: Editing avatar',
	'VO_EDITING_AS'								=> 'UCP: Editing account settings',
	'VO_EDITING_MK'								=> 'UCP: Manage “Remember Me” login keys',
	'VO_EDITING_GS'								=> 'UCP: Editing global settings',
	'VO_EDITING_PD'								=> 'UCP: Editing posting defaults',
	'VO_EDITING_DO'								=> 'UCP: Editing display options',
	'VO_EDITING_NOTIFICATIONS'					=> 'UCP: Editing notification options',
	'VO_MANAGE_PM_DRAFTS'						=> 'UCP: Manage private messages drafts',
	'VO_PM_INBOX'								=> 'UCP: Viewing PM inbox',
	'VO_PM_OUTBOX'								=> 'UCP: Viewing PM outbox',
	'VO_PM_SENTBOX'								=> 'UCP: Viewing PM sentbox',
	'VO_PM_OPTIONS'								=> 'UCP: Editing PM options',
	'VO_EDITING_MEMBERSHIP'						=> 'UCP: Editing memberships',
	'VO_EDITING_GROUP'							=> 'UCP: Manage groups',
	'VO_EDITING_FRIENDS'	 					=> 'UCP: Editing friends',
	'VO_EDITING_FOES'							=> 'UCP: Editing foes',
	'VO_MCHAT_PREFERENCES'						=> 'UCP: mChat preferences',
	'VO_MANAGE_LINKED_ACCOUNTS'					=> 'UCP: Manage linked accounts',
	'VO_CREATE_LINKED_ACCOUNT'					=> 'UCP: Create linked account',
	'VO_DONATIONS'								=> 'UCP: Donations',
	'VO_POSTING_PRIVATE_MESSAGE'				=> 'UCP: Composing private message',
	'MO_VIEWING_FRONT_PAGE'						=> 'MCP: Viewing front page',
	'MO_TOPICS_AWAITING_APPROVAL'				=> 'MCP: Topics awaiting approval',
	'MO_POSTS_AWAITING_APPROVAL'				=> 'MCP: Posts awaiting approval',
	'MO_DELETED_TOPICS'							=> 'MCP: Deleted topics',
	'MO_DELETED_POSTS'							=> 'MCP: Deleted posts',
	'MO_OPEN_PM_REPORTS'						=> 'MCP: Open PM reports',
	'MO_CLOSED_PM_REPORTS'						=> 'MCP: Closed PM reports',
	'MO_OPEN_REPORTS'							=> 'MCP: Open reports',
	'MO_CLOSED_REPORTS'							=> 'MCP: Closed reports',
	'MO_USER_NOTES'								=> 'MCP: User notes',
	'MO_WARN_USER'								=> 'MCP: Warn user',
	'MO_WARNED_USERS'							=> 'MCP: Warned users',
	'MO_MODERATOR_LOG'							=> 'MCP: Moderator logs',
	'MO_BAN_USERNAMES'							=> 'MCP: Ban Usernames',
	'MO_BAN_IP'									=> 'MCP: Ban IPs',
	'MO_BAN_EMAILS'								=> 'MCP: Ban emails',
	'MO_MANAGE_LINKED_ACCOUNTS'					=> 'MCP: Manage linked accounts',
	'MO_MODERATE_LINKED_ACCOUNTS'				=> 'MCP: Moderate linked accounts',
	'VIEWING_MCP'								=> 'MCP: Moderator Control Panel',
	'VIEWING_UCP'								=> 'UCP: Edit profile',
	'VIEWING_PROFILE_VIEWS'						=> 'Viewing Profile Views',
	'VIEWING_ANNUAIRE'							=> 'Viewing Annuaire',
	'VIEWING_ANNUAIRE_CAT_1'	 				=> 'Viewing Annuaire Cat 1',
	'VIEWING_ANNUAIRE_CAT_2' 					=> 'Viewing Annuaire Cat 2',
	'VIEWING_ANNUAIRE_CAT_3' 					=> 'Viewing Annuaire Cat 3',
	'GEO_CREDIT_LINE'							=> ' | Geolocation by <a href="http://www.geoplugin.com/">geoPlugin</a>',
	'TRANSLATION_INFO'							=> '',
	'DIRECTION'									=> 'ltr',
	'DATE_FORMAT'								=> '|d M Y|',
	'DATETIME_FORMAT'							=> '|d M Y, H:i|',
	'USER_LANG'									=> 'en-gb',
));
