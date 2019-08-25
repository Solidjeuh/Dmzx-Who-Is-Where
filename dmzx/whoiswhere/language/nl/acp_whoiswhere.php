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
	'WHOISWHERE_TITLE_EXT'						=> 'Wie is Waar extensie',
	'WHOISWHERE_ALLOW_WHOISWHERE'				=> 'Wie is Waar inschakelen',
	'WHOISWHERE_ALLOW_WHOISWHERE_EXPLAIN'		=> 'Inschakelen op index.',
	'WHOISWHERE_ALLOW_GUESTS'					=> 'Toon gasten in Wie is Waar',
	'WHOISWHERE_ALLOW_GUESTS_EXPLAIN'			=> 'Als gasten weergegeven worden kan dit een zware belasting zijn op de “geoplugin”.',
	'WHOISWHERE_ALLOW_BOTS'						=> 'Toon bots in Wie is Waar',
	'WHOISWHERE_ALLOW_BOTS_EXPLAIN'				=> 'Bots zullen weergegeven worden op de index.',
	'WHOISWHERE_ALLOW_FOUNDER'					=> 'Toon oprichter in Wie is Waar',
	'WHOISWHERE_ALLOW_FOUNDER_EXPLAIN'			=> 'Oprichter wordt verborgen voor leden.',
	'WHOISWHERE_ALLOW_TOPIC_NAME'				=> 'Toon onderwerp naam in Wie is Waar',
	'WHOISWHERE_ALLOW_TOPIC_NAME_EXPLAIN'		=> 'Zo ja, dan wordt de onderwerpnaam weergegeven. Zo nee, dan de forumnaam.',
	'WHOISWHERE_ALLOW_SHOW_POST_NAME'			=> 'Naam van bericht weergeven in Wie is Waar',
	'WHOISWHERE_ALLOW_SHOW_POST_NAME_EXPLAIN'	=> 'Als toon onderwerp is ingesteld op nee, stel dit dan in op nee.',
	'WHOISWHERE_ALLOW_SCROLLER'					=> 'Wie is Waar met scroll balk',
	'WHOISWHERE_ALLOW_SCROLLER_EXPLAIN'			=> 'Hiermee kan de beheerder de pagina kort houden, indien ingeschakeld.',
	'WHOISWHERE_DISABLED_SCROLLER'				=> 'Uitgeschakeld. Zet "Wie is Waar met schuifbalk" op Ja om een waarde in te voeren',
	'WHOISWHERE_SCROLLER_HEIGHT'				=> 'Scroll box hoogte',
	'WHOISWHERE_SCROLLER_HEIGHT_EXPLAIN'		=> 'Stel het scroll vak voor maximale hoogte in voordat het scroll vak start.<br><em>U bent beperkt van 65 tot 999. Standaard is 270.</em>',
	'WHOISWHERE_SETTINGS_EXPLAIN'				=> 'Ga naar het tabblad <em><strong>Diverse</strong></em> in het gedeelte Groepspermissies om de permissies voor elke groep aan te passen.',
	'WHOISWHERE_REFRESH'						=> 'Vernieuwingsinterval',
	'WHOISWHERE_REFRESH_EXPLAIN'				=> 'Aantal seconden voordat de Wie is Waar wordt vernieuwd.<br><em>Je bent beperkt van 5 tot 60 seconden. Standaard is 5</em>.',
	'WHOISWHERE_VERSION_CHECK'					=> 'Wie is Waar versiecontrole',
	'WHOISWHERE_AUTHOR'							=> 'Auteurs',
	'WHOISWHERE_INFO_FILE'						=> 'Activeringsinformatie',
	'WHOISWHERE_INFO_FILE_EXPLAIN'				=> 'Maak je sleutel <a href="https://www.dmzx-web.net/keyinput"> >> HIER << </a>',
	'WHOISWHERE_ANNOUNCEMENT_TOPIC'				=> 'Release mededeling',
	'WHOISWHERE_CURRENT_VERSION'				=> 'Huidige versie',
	'WHOISWHERE_VERSION'						=> 'Versie',
	'WHOISWHERE_DOWNLOAD_LATEST'				=> 'Download Laatste Versie',
	'WHOISWHERE_DOWNLOAD'						=> 'Download',
	'WHOISWHERE_LATEST_VERSION'					=> 'Laatste versie',
	'WHOISWHERE_NOT_UP_TO_DATE'					=> '%s is niet actueel',
	'WHOISWHERE_RELEASE_ANNOUNCEMENT'			=> 'Aankondiging Onderwerp',
	'WHOISWHERE_UP_TO_DATE'						=> '%s is actueel',
	'WHOISWHERE_SAVED'							=> '<strong>Wie is Waar instellingen opgeslagen</strong>',
	'WHOISWHERE_LICENSE' 						=> 'Licentie ongeldig',
	'WHOISWHERE_FILE_EXT'						=> 'Stel bestand in om de extensie Wie is Waar te activeren',
	'WHOISWHERE_FILE_EXT_EXPLAIN'				=> '<span style="color:#BF0000;"><strong>Vraag een actieve .json bestandsnaam aan en stel deze hier in.</strong></span><br>
	U kunt een sleutel maken op <a href="https://www.dmzx-web.net/keyinput">dmzx</a>.<br> Voorbeeld: voorbeeld.json (inclusief .json)',
	'WHOISWHERE_FILE_EXT_SET'					=> '<span style="color:#00BF00;">Wie is Waar .json-bestand is geactiveerd.</span>',
	'ACP_WHOISWHERE_OPTIONS_SAVED'				=> 'Wie is Waar opties zijn opgeslagen.',
	'ACP_WHOISWHERE_EMPTY_FIELD'				=> 'Veld mag niet leeg zijn.',
	'ACP_WHOISWHERE_NO_JSON'					=> 'Sleutel moet eindigen met .json.',
));
