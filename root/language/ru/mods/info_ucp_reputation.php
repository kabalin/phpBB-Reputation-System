<?php
/**
*
* @package	Reputation System
* @author	Pico88 (https://github.com/Pico88)
* @copyright (c) 2012
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'UCP_REPUTATION'				=> 'Репутация',
	'UCP_REPUTATION_FRONT'			=> 'Главная страница',
	'UCP_REPUTATION_LIST'			=> 'Получено баллов',
	'UCP_REPUTATION_GIVEN'			=> 'Выдано баллов',
	'UCP_REPUTATION_SETTING'		=> 'Настройки',

	'RS_CATCHUP'						=> 'Посмотреть новые тэги',
	'RS_REPUTATION_LISTS_UCP'			=> 'Это список репутации. Здесь вы можете видеть баллы репутации выданной вам другими пользователями.',
	'RS_NEW'							=> 'Новые баллы!',
	'RS_REPUTATION_GIVEN_LISTS_UCP'		=> 'Это список репутации. Здесь вы можете видеть баллы репутации выданной вами другим пользователям.',
	'RS_REPUTATION_SETTINGS_UCP'		=> 'Настройки репутации',
	'RS_DEFAULT_POWER'					=> 'Размер по умолчанию',
	'RS_DEFAULT_POWER_EXPLAIN'			=> 'Вы можете установить количество баллов которые вы желаете давать.',
	'RS_EMPTY'							=> 'Не установлено',
	'RS_DEF_POINT'						=> 'балл',
	'RS_DEF_POINTS'						=> 'баллов',
	'RS_NOTIFICATION'					=> 'Уведомление',
	'RS_NOTIFICATION_EXPLAIN'			=> 'Разрешить уведомления об изменении репутации (это не связано с настройкой уведомлений о личных сообщениях).',
	'RS_DISPLAY_REPUTATIONS'			=> 'Показывать баллы репутации полученные ранее',
));

?>
