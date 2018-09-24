<?php

/**
*
* IUM (Inactive User Manager Reminder extension for the phpBB Forum Software package.
* Estonian translation by phpBBestonia.eu <https://www.phpbbestonia.eu>
*
* @copyright (c) 2014 phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if ( empty($lang) || !is_array($lang) )
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'SENT_REMINDERS'		=>	'%s reminders were sent.',
	'USERS_DELETED'			=>	'"%1s" users were deleted, request type : "%2s"',
	'USER_DELETED'			=>	'User "%1s" was deleted, request type : "%2s"',
	'SOMETHING_WRONG'		=>	'Something was wrong with your request. Requested users for deletion did not match with the actual users in the database',
	'USER_SELF_DELETED'		=>	'A user was self deleted. Configuration for posts was set on "%s"',
));
