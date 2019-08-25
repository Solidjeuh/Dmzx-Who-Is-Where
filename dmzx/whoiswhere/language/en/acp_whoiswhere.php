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
	'WHOISWHERE_TITLE_EXT'						=> 'Who is Where Extension',
	'WHOISWHERE_ALLOW_WHOISWHERE'				=> 'Enable Who is where',
	'WHOISWHERE_ALLOW_WHOISWHERE_EXPLAIN'		=> 'Enable on index.',
	'WHOISWHERE_ALLOW_GUESTS'					=> 'Show guests in Who is where',
	'WHOISWHERE_ALLOW_GUESTS_EXPLAIN'			=> 'Guest will show, can give load on geoplugin.',
	'WHOISWHERE_ALLOW_BOTS'						=> 'Show bots in Who is where',
	'WHOISWHERE_ALLOW_BOTS_EXPLAIN'				=> 'Bots will show on index.',
	'WHOISWHERE_ALLOW_FOUNDER'					=> 'Show founder in Who is where',
	'WHOISWHERE_ALLOW_FOUNDER_EXPLAIN'			=> 'Founder will be hidden for members.',
	'WHOISWHERE_ALLOW_TOPIC_NAME'				=> 'Show topic name in Who is where',
	'WHOISWHERE_ALLOW_TOPIC_NAME_EXPLAIN'		=> 'If yes topic name will show if no then forum name.',
	'WHOISWHERE_ALLOW_SHOW_POST_NAME'			=> 'Show post name in Who is where',
	'WHOISWHERE_ALLOW_SHOW_POST_NAME_EXPLAIN'	=> 'If show topic is set to no set this to no.',
	'WHOISWHERE_ALLOW_SCROLLER'					=> 'Who is where with scrollbar',
	'WHOISWHERE_ALLOW_SCROLLER_EXPLAIN'			=> 'Allows admin to keep the page short if yes enabled.',
	'WHOISWHERE_DISABLED_SCROLLER'				=> 'Disabled set “Who is where with scrollbar” to Yes to enter value',
	'WHOISWHERE_SCROLLER_HEIGHT'				=> 'Scroll box height',
	'WHOISWHERE_SCROLLER_HEIGHT_EXPLAIN'		=> 'Set the max height scroll box before scroll kicks in.<br><em>You are limited from 65 to 999. Default is 270.</em>',
	'WHOISWHERE_SETTINGS_EXPLAIN'				=> 'Go to the <em><strong>Misc</strong></em> tab in Group permissions section to adjust permissions for each group.',
	'WHOISWHERE_REFRESH'						=> 'Refresh interval',
	'WHOISWHERE_REFRESH_EXPLAIN'				=> 'Number of seconds before the Who is where refreshes.<br><em>You are limited from 5 to 60 seconds. Default is 5</em>.',
	'WHOISWHERE_VERSION_CHECK'					=> 'Who is Where Version Check',
	'WHOISWHERE_AUTHOR'							=> 'Authors',
	'WHOISWHERE_INFO_FILE'						=> 'Activation information',
	'WHOISWHERE_INFO_FILE_EXPLAIN'				=> 'Make your key <a href="https://www.dmzx-web.net/keyinput"> >> Here << </a>',
	'WHOISWHERE_ANNOUNCEMENT_TOPIC'				=> 'Release Announcement',
	'WHOISWHERE_CURRENT_VERSION'				=> 'Current Version',
	'WHOISWHERE_VERSION'						=> 'Version',
	'WHOISWHERE_DOWNLOAD_LATEST'				=> 'Download Latest Version',
	'WHOISWHERE_DOWNLOAD'						=> 'Download',
	'WHOISWHERE_LATEST_VERSION'					=> 'Latest Version',
	'WHOISWHERE_NOT_UP_TO_DATE'					=> '%s is not up to date',
	'WHOISWHERE_RELEASE_ANNOUNCEMENT'			=> 'Announcement Topic',
	'WHOISWHERE_UP_TO_DATE'						=> '%s is up to date',
	'WHOISWHERE_SAVED'							=> '<strong>Who is Where settings saved</strong>',
	'WHOISWHERE_LICENSE' 						=> 'License invalid',
	'WHOISWHERE_FILE_EXT'						=> 'Set file to activate the Who is Where extension',
	'WHOISWHERE_FILE_EXT_EXPLAIN'				=> '<span style="color:#BF0000;"><strong>Request an active .json file name and set it here.</strong></span><br>
	You can make a key at <a href="https://www.dmzx-web.net/keyinput">dmzx</a>.<br> Example: example.json (including .json)',
	'WHOISWHERE_FILE_EXT_SET'					=> '<span style="color:#00BF00;">Who is Where .json file is activated.</span>',
	'ACP_WHOISWHERE_OPTIONS_SAVED'				=> 'Who is where options has been saved.',
	'ACP_WHOISWHERE_EMPTY_FIELD'				=> 'Field cannot be empty.',
	'ACP_WHOISWHERE_NO_JSON'					=> 'Key must have .json at the end.',
));
