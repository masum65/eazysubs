<?php
/**
*
* acp_groups [Farsi]
*
* @package language
* @version $Id: groups.php,v 1.29 2007/10/04 15:07:24  $
* @copyright (c) 2005 phpBB Group
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

$lang = array_merge($lang, array(
	'ACP_GROUPS_MANAGE_EXPLAIN'		=> 'در اين قسمت مي توانيد گروه هاي مختلف را تنظيم کنيد (حذف،بسته،مخفي و...)',
	'ADD_USERS'						=> '&#1575;&#1601;&#1586;&#1608;&#1583;&#1606; &#1705;&#1575;&#1585;&#1576;&#1585;&#1575;&#1606;',
	'ADD_USERS_EXPLAIN'				=> '',

	'COPY_PERMISSIONS'				=> '&#1705;&#1662;&#1610; &#1705;&#1585;&#1583;&#1606; &#1587;&#1591;&#1608;&#1581; &#1583;&#1587;&#1578;&#1585;&#1587;&#1610; &#1575;&#1586;',
	'COPY_PERMISSIONS_EXPLAIN'		=> '',
	'CREATE_GROUP'					=> '&#1575;&#1610;&#1580;&#1575;&#1583; &#1711;&#1585;&#1608;&#1607; &#1580;&#1583;&#1610;&#1583;',

	'GROUPS_NO_MEMBERS'				=> '&#1575;&#1610;&#1606; &#1711;&#1585;&#1608;&#1607; &#1705;&#1575;&#1585;&#1576;&#1585;&#1610; &#1606;&#1583;&#1575;&#1585;&#1583;',
	'GROUPS_NO_MODS'				=> '&#1607;&#1610;&#1670; &#1585;&#1607;&#1576;&#1585;&#1610; &#1576;&#1585;&#1575;&#1610; &#1711;&#1585;&#1608;&#1607; &#1578;&#1593;&#1585;&#1610;&#1601; &#1606;&#1588;&#1583;&#1607; &#1575;&#1587;&#1578;',

	'GROUP_APPROVE'					=> '&#1578;&#1575;&#1610;&#1610;&#1583; &#1705;&#1585;&#1583;&#1606; &#1705;&#1575;&#1585;&#1576;&#1585;',
	'GROUP_APPROVED'				=> '&#1705;&#1575;&#1585;&#1576;&#1585;&#1575;&#1606; &#1578;&#1575;&#1610;&#1610;&#1583; &#1588;&#1583;&#1607;',
	'GROUP_AVATAR'					=> '&#1606;&#1605;&#1575;&#1583; &#1711;&#1585;&#1608;&#1607;',
	'GROUP_AVATAR_EXPLAIN'			=> '&#1575;&#1610;&#1606; &#1578;&#1589;&#1608;&#1610;&#1585; &#1583;&#1585; &#1705;&#1606;&#1578;&#1585;&#1604; &#1662;&#1606;&#1604; &#1711;&#1585;&#1608;&#1607; &#1602;&#1575;&#1576;&#1604; &#1606;&#1605;&#1575;&#1610;&#1588; &#1575;&#1587;&#1578;.',
	'GROUP_CLOSED'					=> '&#1605;&#1587;&#1583;&#1608;&#1583; &#1588;&#1583;&#1607;',
	'GROUP_COLOR'					=> '&#1585;&#1606;&#1711; &#1711;&#1585;&#1608;&#1607;',
	'GROUP_COLOR_EXPLAIN'			=> '',
	'GROUP_CONFIRM_ADD_USER'		=> 'Are you sure that you want to add the user %1$s to the group?',
	'GROUP_CONFIRM_ADD_USERS'		=> 'Are you sure that you want to add the users %1$s to the group?',
	'GROUP_CREATED'					=> '&#1711;&#1585;&#1608;&#1607; &#1576;&#1575; &#1605;&#1608;&#1601;&#1602;&#1610;&#1578; &#1575;&#1590;&#1575;&#1601;&#1607; &#1588;&#1583;.',
	'GROUP_DEFAULT'					=> '&#1575;&#1587;&#1578;&#1601;&#1575;&#1583;&#1607; &#1576;&#1593;&#1606;&#1608;&#1575;&#1606; &#1711;&#1585;&#1608;&#1607; &#1662;&#1610;&#1588;&#1601;&#1585;&#1590; &#1705;&#1575;&#1585;&#1576;&#1585;&#1575;&#1606;',
	'GROUP_DEFS_UPDATED'			=> 'Default group set for all selected members.',
	'GROUP_DELETE'					=> '&#1581;&#1584;&#1601; &#1705;&#1575;&#1585;&#1576;&#1585; &#1575;&#1586; &#1711;&#1585;&#1608;&#1607;',
	'GROUP_DELETED'					=> 'Group deleted and user default groups set successfully.',
	'GROUP_DEMOTE'					=> '&#1705;&#1587;&#1585; &#1605;&#1602;&#1575;&#1605; &#1585;&#1607;&#1576;&#1585; &#1711;&#1585;&#1608;&#1607;',
	'GROUP_DESC'					=> '&#1578;&#1608;&#1590;&#1610;&#1581;&#1575;&#1578; &#1711;&#1585;&#1608;&#1607;',
	'GROUP_DETAILS'					=> '&#1605;&#1588;&#1582;&#1589;&#1575;&#1578; &#1711;&#1585;&#1608;&#1607;',
	'GROUP_EDIT_EXPLAIN'			=> '',
	'GROUP_ERR_USERS_EXIST'			=> 'The specified users are already members of this group.',
	'GROUP_FOUNDER_MANAGE'			=> '&#1601;&#1602;&#1591; &#1576;&#1606;&#1610;&#1575;&#1606;&#1711;&#1584;&#1575;&#1585;',
	'GROUP_FOUNDER_MANAGE_EXPLAIN'	=> 'مديريت اين گروه فقط توسط موسس انجام گردد',
	'GROUP_HIDDEN'					=> '&#1605;&#1582;&#1601;&#1610;',
	'GROUP_LANG'					=> '&#1586;&#1576;&#1575;&#1606; &#1711;&#1585;&#1608;&#1607;',
	'GROUP_LEAD'					=> '&#1585;&#1607;&#1576;&#1585;&#1575;&#1606; &#1711;&#1585;&#1608;&#1607;',
	'GROUP_LEADERS_ADDED'			=> '&#1585;&#1607;&#1576;&#1585; &#1580;&#1583;&#1610;&#1583; &#1576;&#1575; &#1605;&#1608;&#1601;&#1602;&#1610;&#1578; &#1576;&#1607; &#1711;&#1585;&#1608;&#1607; &#1575;&#1590;&#1575;&#1601;&#1607; &#1588;&#1583;.',
	'GROUP_LEGEND'					=> '&#1606;&#1605;&#1575;&#1610;&#1588; &#1711;&#1585;&#1608;&#1607; &#1583;&#1585; &#1601;&#1607;&#1585;&#1587;&#1578;',
	'GROUP_LIST'					=> '&#1705;&#1575;&#1585;&#1576;&#1585;&#1575;&#1606; &#1705;&#1606;&#1608;&#1606;&#1610;',
	'GROUP_LIST_EXPLAIN'			=> 'This is a complete list of all the current users with membership of this group. You can delete members (except in certain special groups) or add new ones as you see fit.',
	'GROUP_MEMBERS'					=> '&#1705;&#1575;&#1585;&#1576;&#1585;&#1575;&#1606; &#1711;&#1585;&#1608;&#1607;',
	'GROUP_MEMBERS_EXPLAIN'			=> '',
	'GROUP_MESSAGE_LIMIT'			=> '&#1581;&#1583; &#1662;&#1610;&#1594;&#1575;&#1605; &#1582;&#1589;&#1608;&#1589;&#1610; &#1711;&#1585;&#1608;&#1607; &#1583;&#1585; &#1607;&#1585; &#1662;&#1608;&#1588;&#1607;',
	'GROUP_MESSAGE_LIMIT_EXPLAIN'	=> 'مقدار 0 يعني اين گروه از تعداد پيش فرض پيام خصوصي استفاده خواهد كرد.',
	'GROUP_MODS_ADDED'				=> '&#1585;&#1607;&#1576;&#1585; &#1580;&#1583;&#1610;&#1583; &#1711;&#1585;&#1608;&#1607; &#1576;&#1575; &#1605;&#1608;&#1601;&#1602;&#1610;&#1578; &#1575;&#1590;&#1575;&#1601;&#1607; &#1588;&#1583;.',
	'GROUP_MODS_DEMOTED'			=> '&#1585;&#1607;&#1576;&#1585; &#1711;&#1585;&#1608;&#1607; &#1576;&#1575; &#1605;&#1608;&#1601;&#1602;&#1610;&#1578; &#1705;&#1587;&#1585; &#1605;&#1602;&#1575;&#1605; &#1610;&#1575;&#1601;&#1578;.',
	'GROUP_MODS_PROMOTED'			=> 'Group members promoted successfully.',
	'GROUP_NAME'					=> '&#1606;&#1575;&#1605; &#1711;&#1585;&#1608;&#1607;',
	'GROUP_NAME_TAKEN'				=> 'The group name you entered is already in use, please select an alternative.',
	'GROUP_OPEN'					=> '&#1576;&#1575;&#1586;',
	'GROUP_PENDING'					=> 'Pending members',
		'GROUP_MAX_RECIPIENTS'			=> 'Maximum number of allowed recipients per private message',
	'GROUP_MAX_RECIPIENTS_EXPLAIN'	=> 'The maximum number of allowed recipients in a private message. If 0 is entered, the board-wide setting is used.',
	'GROUP_PROMOTE'					=> '&#1578;&#1585;&#1601;&#1610;&#1593; &#1583;&#1575;&#1583;&#1606; &#1576;&#1607; &#1585;&#1607;&#1576;&#1585; &#1711;&#1585;&#1608;&#1607;',
	'GROUP_RANK'					=> '&#1585;&#1578;&#1576;&#1607; &#1711;&#1585;&#1608;&#1607;',
	'GROUP_RECEIVE_PM'				=> '&#1711;&#1585;&#1608;&#1607; &#1578;&#1608;&#1575;&#1606;&#1575;&#1610;&#1610; &#1583;&#1585;&#1610;&#1575;&#1601;&#1578; &#1662;&#1610;&#1594;&#1575;&#1605; &#1607;&#1575;&#1610; &#1582;&#1589;&#1608;&#1589;&#1610; &#1585;&#1575; &#1583;&#1575;&#1588;&#1578;&#1607; &#1576;&#1575;&#1588;&#1583;',
	'GROUP_RECEIVE_PM_EXPLAIN'		=> 'گروه هاي مخفي در شرايط استاندارد قابليت دريافت پيام ندارند',
	'GROUP_REQUEST'					=> '&#1583;&#1585;&#1582;&#1608;&#1575;&#1587;&#1578;&#1610;',
	'GROUP_SETTINGS_SAVE'			=> '&#1578;&#1606;&#1592;&#1610;&#1605;&#1575;&#1578; &#1662;&#1607;&#1606;&#1575;&#1610; &#1711;&#1585;&#1608;&#1607;',
	'GROUP_TYPE'					=> '&#1606;&#1608;&#1593; &#1711;&#1585;&#1608;&#1607;',
	'GROUP_TYPE_EXPLAIN'			=> '',
	'GROUP_UPDATED'					=> '&#1575;&#1608;&#1604;&#1608;&#1610;&#1578; &#1711;&#1585;&#1608;&#1607; &#1576;&#1575; &#1605;&#1608;&#1601;&#1602;&#1610;&#1578; &#1576;&#1585;&#1608;&#1586; &#1588;&#1583;.',
	
	'GROUP_USERS_ADDED'				=> '&#1705;&#1575;&#1585;&#1576;&#1585;&#1575;&#1606; &#1580;&#1583;&#1610;&#1583; &#1576;&#1575; &#1605;&#1608;&#1601;&#1602;&#1610;&#1578; &#1576;&#1607; &#1711;&#1585;&#1608;&#1607; &#1575;&#1590;&#1575;&#1601;&#1607; &#1588;&#1583;&#1606;&#1583;.',
	'GROUP_USERS_EXIST'				=> '&#1705;&#1575;&#1585;&#1576;&#1585;&#1575;&#1606; &#1575;&#1606;&#1578;&#1582;&#1575;&#1576; &#1588;&#1583;&#1607; &#1662;&#1610;&#1588; &#1575;&#1586; &#1575;&#1610;&#1606; &#1593;&#1590;&#1608; &#1576;&#1608;&#1583;&#1606;&#1583;.',
	'GROUP_USERS_REMOVE'			=> 'Users removed from group and new defaults set successfully.',

	'MAKE_DEFAULT_FOR_ALL'	=> '&#1575;&#1587;&#1578;&#1601;&#1575;&#1583;&#1607; &#1576;&#1593;&#1606;&#1608;&#1575;&#1606; &#1711;&#1585;&#1608;&#1607; &#1662;&#1610;&#1588;&#1601;&#1585;&#1590; &#1576;&#1585;&#1575;&#1610; &#1607;&#1585; &#1705;&#1575;&#1585;&#1576;&#1585;',
	'MEMBERS'				=> '&#1705;&#1575;&#1585;&#1576;&#1585;&#1575;&#1606;',

	'NO_GROUP'					=> '&#1607;&#1610;&#1670; &#1711;&#1585;&#1608;&#1607;&#1610; &#1578;&#1593;&#1610;&#1585;&#1601; &#1606;&#1588;&#1583;&#1607;.',
	'NO_GROUPS_CREATED'			=> '&#1607;&#1610;&#1670; &#1711;&#1585;&#1608;&#1607;&#1610; &#1587;&#1575;&#1582;&#1607; &#1606;&#1588;&#1583;&#1607;.',
	'NO_PERMISSIONS'			=> '&#1587;&#1591;&#1608;&#1581; &#1583;&#1587;&#1578;&#1585;&#1587;&#1610; &#1585;&#1575; &#1705;&#1662;&#1610; &#1606;&#1705;&#1606;',
	'NO_USERS'					=> 'You haven’t entered any users.',
	'NO_USERS_ADDED'			=> 'No users were added to the group.',
	'NO_VALID_USERS'			=> 'You haven’t entered any users eligible for that action.',


	'SPECIAL_GROUPS'			=> 'گروه هاي پيش فرض',
	'SPECIAL_GROUPS_EXPLAIN'	=> 'اين گروه ها قابل حذف يا دستکاري نيستند ولي مي توانيد کاربراني به آن اضافه کنيد يا دستکاري هاي اندکي در ان انجام دهيد.',

	'TOTAL_MEMBERS'				=> '&#1705;&#1575;&#1585;&#1576;&#1585;&#1575;&#1606;',

	'USERS_APPROVED'				=> '&#1705;&#1575;&#1585;&#1576;&#1585;&#1575;&#1606; &#1576;&#1575; &#1605;&#1608;&#1601;&#1602;&#1610;&#1578; &#1578;&#1575;&#1610;&#1610;&#1583; &#1588;&#1583;&#1606;&#1583;.',
	'USER_DEFAULT'					=> '&#1705;&#1575;&#1585;&#1576;&#1585; &#1662;&#1610;&#1588;&#1601;&#1585;&#1590;',
	'USER_DEF_GROUPS'				=> 'گروه هاي تعريف شده توسط کاربر',
	'USER_DEF_GROUPS_EXPLAIN'		=> 'اين گروه ها توسط شما يا موسسي ديگر تعيين شده است.',
	'USER_GROUP_DEFAULT'			=> '&#1575;&#1587;&#1578;&#1601;&#1575;&#1583;&#1607; &#1576;&#1593;&#1606;&#1608;&#1575;&#1606; &#1711;&#1585;&#1608;&#1607; &#1662;&#1610;&#1588;&#1601;&#1585;&#1590;',
	'USER_GROUP_DEFAULT_EXPLAIN'	=> 'انتخاب گزينه بلي اين گره را به گروه پيپ فرض كاربر تبديل خواهد كرد.',
	'USER_GROUP_LEADER'				=> '&#1575;&#1587;&#1578;&#1601;&#1575;&#1583;&#1607; &#1576;&#1593;&#1606;&#1608;&#1575;&#1606; &#1585;&#1607;&#1576;&#1585; &#1711;&#1585;&#1608;&#1607;',


   //3.0.5 to 3.0.6 changes - www.phpBB.Maghsad.com	 
   
   	'GROUP_OPTIONS_SAVE'			=> 'Group wide options',
/////////////////////////////////////////
	'GROUP_SKIP_AUTH'				=> 'Exempt group leader from permissions',
	'GROUP_SKIP_AUTH_EXPLAIN'		=> 'If enabled group leader no longer inherit permissions from the group.',
/////////////////////////////////////////

  //END 3.0.5 to 3.0.6 changes - www.phpBB.Maghsad.com	 		
		
		
		
));

?>