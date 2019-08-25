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
	'WHOISWHERE_TITLE'							=> 'Wie is Waar',
	'WHOISWHERE_LICENSE' 						=> 'Licentie ongeldig',
	'WHOISWHERE_VERSION' 						=> 'Versie',
	'DOWNLOAD_SECTION' 							=> 'In de download sectie',
	'VIDEO' 									=> 'In de video sectie',
	'DONORLISTS' 								=> 'Bekijkt sponsors!',
	'MCHAT_LOGS' 								=> 'Bekijkt mchat logs',
	'TOTAL_CATEGORIES_OTHER'					=> 'Totaal verschillende video categorieën <strong>%d</strong>',
	'TOTAL_CATEGORY_ZERO'						=> 'Totaal verschillende video categorieën <strong>0</strong>',
	'TOTAL_VIDEO_ZERO'							=> 'Totaal <strong>0</strong> video’s geüpload',
	'EMAILLIST_TEXT'							=> 'Stiekem ????? wil je e-mails stelen',
	'BATTLE'									=> 'Zinkt schepen op het slagveld',
	'PUZZLE'									=> 'Speelt een puzzel',
	'PARTNER_PAGE'								=> 'Controleert onze partnerpagina',
	'PARTNER_PAGE_ADD'							=> 'Voegt een site toe aan partnerpagina',
	'REFFERAL_INVITES'							=> 'Nodigt een aantal coole vrienden uit om lid te worden van de site!',
	'BOARDRULES_TITLE'							=> 'Probeert de regels te lezen',
	'VIEWING_CREATOR'							=> 'Kijken naar de extensie maker',
	'VIEWING_CALENDAR'							=> 'Kijken naar de kalender',
	'VIEWING_RADIO'								=> 'Luistert naar muziek',
	'VIEWING_CONTACT_ADMIN'						=> 'Bekijkt contact pagina',
	'VIEWING_TEAM_PAGE'							=> 'Bekijkt team pagina',
	'VIEWING_FAQ'								=> 'Bekijkt FAQ',
	'VIEWING_MEMBERS'							=> 'Bekijkt ledenlijst',
	'VIEWING_HANGMAN'							=> 'Speelt hangman',
	'KNUFFEL_VIEW'								=> 'Speelt yahtzee',
	'VIEWING_DOWNLOADSYSTEM'					=> 'Bekijkt de downloadpagina',
	'VIEWING_FLAGS'								=> 'Is op de vlaggen pagina',
	'VIEWING_QUOTESCOLLECTION'					=> 'Leest citaten',
	'VIEWING_PARTNER'							=> 'is in de partner pagina',
	'VIEWING_ADD'								=> 'Bekijkt de “partner toevoegen” pagina',
	'VIEWING_PUZZLE'							=> 'is een puzzel aan het spelen',
	'VIEWING_CHAT_LOGS'					 		=> 'Bekijkt de mchat logs',
	'VIEWING_MCHAT_ARCHIVE'				 		=> 'Bekijkt het mchat archief',
	'VIEWING_MCHAT'						 		=> 'Bekijkt de aangepaste mchat pagina ',
	'VIDEO_INDEX'								=> 'Video’s kijken in de galerij',
	'VIEWING_STK'								=> 'Is in de Support Tool Kit',
	'VIEWING_VIEW'								=> 'Probeert privé spullen te bekijken (MAAR KAN NIET)',
	'VIEWING_DONOR_LIST'						=> 'Bekijkt de sponsor lijst',
	'VIEWING_FILES'						 		=> 'Maakt een back-up van de forum bestanden',
	'VIEWING_NO_TOPIC'							=> 'Wordt omgeleid vanaf de pagina zonder onderwerp',
	'VIEWING_MCACHE'			 				=> 'De cache schoonmaken',
	'VIEWING_ATTACH'							=> 'Kijken naar alle forumbijlagen',
	'VIEWING_NO_TOPIC'							=> 'Bekijkt verwijderd forum of onderwerp',
	'VIEWING_ULTIMATEPOINTS'					=> 'Kijkt naar de punten pagina',
	'VIEWING_SKELETON'							=> 'Kijken naar de skelet pagina',
	'VIEWING_ARCADE'							=> 'Is in de arcade',
	'VIEWING_KEYSPAGE'							=> 'Maakt een sleutel',
	'VIEWING_KEYSCHECK'						 	=> 'Is zijn /haar sleutel aan het bekijken',
	'VIEWING_WELCOME'							=> 'Is op de welkoms pagina',
	'VIEWING_ACTIVEEXT'							=> 'Kijkt naar actieve extensies',
	'CITY'										=> 'Stad',
	'UCITY'										=> 'Onbekend',
	'NO_ACCESS'									=> 'Geen toegang',
	'WIW_COUNTRY'								=> 'Land',
	'WIW_ARRIVED'								=> 'Toegekomen',
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
	'READING_IN_TOPIC'							=> 'Lezen onderwerp: %s',
	'READING_IN_FORUM'							=> ' in forum: %s',
	'READING_IN_POST'							=> 'Leest bericht: %s',
	'READING_IN_POSTS'							=> ' in post: %s',
	'DOWNLOAD_FILE'								=> 'Download bestand: %s',
	'EDIT_MESSAGE'								=> 'Bewerkt bericht in %s',
	'QUOTE_MESSAGE'								=> 'Citeert bericht in %s',
	'DELETE_MESSAGE'							=> 'Verwijderd bericht in %s',
	'SEARCH_EGOSEARCH'							=> 'Bekijkt eigen berichten',
	'SEARCH_NEWPOSTS'							=> 'Bekijkt nieuwe berichten',
	'SEARCH_ACTIVE'								=> 'Bekijkt actieve berichten',
	'POSTING_MESSAGE_JQ' 						=> 'Ajax of jQuery aanwezig: Bericht beantwoorden, citeren of bewerken',
	'VO_VIEWING_FRONT_PAGE'						=> 'UCP: Hoofdpagina bekijken',
	'VO_VIEWING_SUBSCRIBED'						=> 'UCP: Beheer abonnementen',
	'VO_VIEWING_BOOKMARKS'						=> 'UCP: Beheer bladwijzers',
	'VO_VIEWING_DRAFTS'							=> 'UCP: Beheer concepten',
	'VO_VIEWING_ATTACHMENTS'					=> 'UCP: Beheer bijlagen',
	'VO_VIEWING_NOTIFICATION_LIST'				=> 'UCP: Beheer notificaties',
	'VO_EDITING_PROFILE'	 					=> 'UCP: Bewerkt profiel',
	'VO_EDITING_SIGNATURE'						=> 'UCP: Bewerkt onderschrift',
	'VO_EDITING_AVATAR'							=> 'UCP: Bewerkt avatar',
	'VO_EDITING_AS'								=> 'UCP: Bewerkt account instellingen',
	'VO_EDITING_MK'								=> 'UCP: Beheert “Onthoud mij” login sleutels',
	'VO_EDITING_GS'								=> 'UCP: Bewerkt algemene instellingen',
	'VO_EDITING_PD'								=> 'UCP: Bewerkt bericht standaard instellingen',
	'VO_EDITING_DO'								=> 'UCP: Bewerkt weergave opties',
	'VO_EDITING_NOTIFICATIONS'					=> 'UCP: Bewerkt notificatie opties',
	'VO_MANAGE_PM_DRAFTS'						=> 'UCP: Beheert privé berichten concepten',
	'VO_PM_INBOX'								=> 'UCP: Viewing PM inbox',
	'VO_PM_OUTBOX'								=> 'UCP: Bekijkt PB outbox',
	'VO_PM_SENTBOX'								=> 'UCP: Bekijkt PB postvak uit',
	'VO_PM_OPTIONS'								=> 'UCP: Bewerkt PB opties',
	'VO_EDITING_MEMBERSHIP'						=> 'UCP: Lidmaatschappen bewerken',
	'VO_EDITING_GROUP'							=> 'UCP: Beheert groep',
	'VO_EDITING_FRIENDS'	 					=> 'UCP: Bewerkt vrienden',
	'VO_EDITING_FOES'							=> 'UCP: Bewerkt vijanden',
	'VO_MCHAT_PREFERENCES'						=> 'UCP: mChat voorkeuren',
	'VO_MANAGE_LINKED_ACCOUNTS'					=> 'UCP: Beheert gekoppelde accounts',
	'VO_CREATE_LINKED_ACCOUNT'					=> 'UCP: Maakt een gekoppeld account',
	'VO_DONATIONS'								=> 'UCP: Donaties',
	'VO_POSTING_PRIVATE_MESSAGE'				=> 'UCP: Schrijft een privé bericht',
	'MO_VIEWING_FRONT_PAGE'						=> 'MCP: Bekijkt voorpagina',
	'MO_TOPICS_AWAITING_APPROVAL'				=> 'MCP: Onderwerpen in afwachting van goedkeuring',
	'MO_POSTS_AWAITING_APPROVAL'				=> 'MCP: Berichten in afwachting van goedkeuring',
	'MO_DELETED_TOPICS'							=> 'MCP: Verwijderde onderwerpen',
	'MO_DELETED_POSTS'							=> 'MCP: Verwijderde berichten',
	'MO_OPEN_PM_REPORTS'						=> 'MCP: Open PB rapporten',
	'MO_CLOSED_PM_REPORTS'						=> 'MCP: Gesloten PB rapporten',
	'MO_OPEN_REPORTS'							=> 'MCP: Open rapporten',
	'MO_CLOSED_REPORTS'							=> 'MCP: Gesloten rapporten',
	'MO_USER_NOTES'								=> 'MCP: Gebruikers notities',
	'MO_WARN_USER'								=> 'MCP: Gebruiker waarschuwen',
	'MO_WARNED_USERS'							=> 'MCP: Gewaarschuwde gebruikers',
	'MO_MODERATOR_LOG'							=> 'MCP: Moderator logs',
	'MO_BAN_USERNAMES'							=> 'MCP: Verban gebruikersnamen',
	'MO_BAN_IP'									=> 'MCP: Verban IPs',
	'MO_BAN_EMAILS'								=> 'MCP: Verban e-mails',
	'MO_MANAGE_LINKED_ACCOUNTS'					=> 'MCP: Beheer gekoppelde accounts',
	'MO_MODERATE_LINKED_ACCOUNTS'				=> 'MCP: Modereer gekoppelde accounts',
	'VIEWING_MCP'								=> 'MCP: Moderator paneel',
	'VIEWING_UCP'								=> 'UCP: Bewerk profiel',
	'VIEWING_PROFILE_VIEWS'						=> 'bekijkt profiel weergaven',
	'VIEWING_ANNUAIRE'							=> 'Directory weergeven',
	'VIEWING_ANNUAIRE_CAT_1'	 				=> 'VDirectory weergeven Cat 1',
	'VIEWING_ANNUAIRE_CAT_2' 					=> 'Directory weergeven Cat 2',
	'VIEWING_ANNUAIRE_CAT_3' 					=> 'Directory weergeven Cat 3',
	'GEO_CREDIT_LINE'							=> ' | Geolocation door <a href="http://www.geoplugin.com/">geoPlugin</a>',
	'TRANSLATION_INFO'							=> '',
	'DIRECTION'									=> 'ltr',
	'DATE_FORMAT'								=> '|d M Y|',
	'DATETIME_FORMAT'							=> '|d M Y, H:i|',
	'USER_LANG'									=> 'en-gb',
));
