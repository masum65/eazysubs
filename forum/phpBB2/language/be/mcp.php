<?php
/** 
*
* mcp [Belarusian]
*
* @package language
* @version $Id: mcp.php,v 1.83 2007/10/04 15:07:24 acydburn Exp $
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
	'ACTION'				=> 'Дзеянне',
	'ACTION_NOTE'			=> 'Дзеянне/Нататка',
	'ADD_FEEDBACK'			=> 'Дадаць нататку аб карыстальніку',
	'ADD_FEEDBACK_EXPLAIN'	=> 'Для дадання нататкі, калі ласка, запоўніце наступную форму. Выкарыстайце толькі звычайны тэкст; HTML, BBCode і інш. не дазволеныя.',
	'ADD_WARNING'			=> 'Вынесці папярэджанне',
	'ADD_WARNING_EXPLAIN'	=> 'Для адпраўкі папярэджання гэтаму карыстальніку, калі ласка, запоўніце наступную форму. Выкарыстайце толькі звычайны тэкст; HTML, BBCode і інш. не дазволеныя.',
	'ALL_ENTRIES'			=> 'Усе запісы',
	'ALL_NOTES_DELETED'		=> 'Усе нататкі аб карыстальніку паспяхова выдаленыя.',
	'ALL_REPORTS'			=> 'Усе скаргі',
	'ALREADY_REPORTED'		=> 'Гэтае паведамленне ўжо было абскарджанае.',
	'ALREADY_REPORTED_PM'	=> 'Гэтау асабістае паведамленне ўжо было абскарджанае.',
	'ALREADY_WARNED'		=> 'Папярэджанне за гэтае паведамленне ўжо было вынесенае.',
	'APPROVE'				=> 'Ухваліць',
	'APPROVE_POST'			=> 'Ухваліць паведамленне',
	'APPROVE_POST_CONFIRM'	=> 'Вы ўпэўненыя, што жадаеце ўхваліць гэтае паведамленне?',
	'APPROVE_POSTS'			=> 'Ухваліць паведамленні',
	'APPROVE_POSTS_CONFIRM'	=> 'Вы ўпэўненыя, што жадаеце ўхваліць вылучаныя паведамленні?',

	'CANNOT_MOVE_SAME_FORUM'=> 'Вы не можаце перамясціць тэму ў форум, у якім яна ўжо находзіцца.',
	'CANNOT_WARN_ANONYMOUS'	=> 'Вы не можаце папярэдзіць незарэгістраванага карыстальніка.',
	'CANNOT_WARN_SELF'		=> 'Вы не можаце папярэдзіць самога сябе.',
	'CAN_LEAVE_BLANK'		=> 'Гэтае поле можна пакінуць пустым.',
	'CHANGE_POSTER'			=> 'Змяніць аўтара',
	'CLOSE_PM_REPORT'		=> 'Закрыць скаргу на асабістае паведамленне',
	'CLOSE_PM_REPORT_CONFIRM'	=> 'Вы сапраўды жадаеце закрыць скаргу на абранае асабістае паведамленне?',
	'CLOSE_PM_REPORTS'		=> 'Закрыць скаргі на асабістыя паведамленні',
	'CLOSE_PM_REPORTS_CONFIRM'	=> 'Вы сапраўды жадаеце закрыць скаргі на выбраныя асабістыя паведамленні?',
	'CLOSE_REPORT'			=> 'Зачыніць скаргу',
	'CLOSE_REPORT_CONFIRM'	=> 'Вы ўпэўненыя, што жадаеце зачыніць вылучаную скаргу?',
	'CLOSE_REPORTS'			=> 'Зачыніць скаргі',
	'CLOSE_REPORTS_CONFIRM'	=> 'Вы ўпэўненыя, што жадаеце зачыніць вылучаныя скаргі?',

	'DELETE_PM_REPORT'			=> 'Выдаліць скаргу на асабістае паведамленне',
	'DELETE_PM_REPORT_CONFIRM'	=> 'Вы сапраўды жадаеце выдаліць скаргу на абранае асабістае паведамленне?',
	'DELETE_PM_REPORTS'			=> 'Выдаліць скаргі на асабістыя паведамленні',
	'DELETE_PM_REPORTS_CONFIRM'	=> 'Вы сапраўды жадаеце выдаліць скаргі на выбраныя асабістыя паведамленні?',
	'DELETE_POSTS'				=> 'Выдаліць паведамленні',
	'DELETE_POSTS_CONFIRM'		=> 'Вы ўпэўненыя, што жадаеце выдаліць гэтыя паведамленні?',
	'DELETE_POST_CONFIRM'		=> 'Вы ўпэўненыя, што жадаеце выдаліць гэтае паведамленне?',
	'DELETE_REPORT'				=> 'Выдаліць скаргу',
	'DELETE_REPORT_CONFIRM'		=> 'Вы ўпэўненыя, што жадаеце выдаліць вылучаную скаргу?',
	'DELETE_REPORTS'			=> 'Выдаліць скаргі',
	'DELETE_REPORTS_CONFIRM'	=> 'Вы ўпэўненыя, што жадаеце выдаліць вылучаныя скаргі?',
	'DELETE_SHADOW_TOPIC'		=> 'Выдаліць спасылку ў старым форуме',
	'DELETE_TOPICS'				=> 'Выдаліць вылучаныя тэмы',
	'DELETE_TOPICS_CONFIRM'		=> 'Вы ўпэўненыя, што жадаеце выдаліць гэтыя тэмы?',
	'DELETE_TOPIC_CONFIRM'		=> 'Вы ўпэўненыя, што жадаеце выдаліць гэтую тэму?',
	'DISAPPROVE'				=> 'Адхіліць',
	'DISAPPROVE_REASON'			=> 'Чыннік адмовы',
	'DISAPPROVE_POST'			=> 'Адхіліць паведамленне',
	'DISAPPROVE_POST_CONFIRM'	=> 'Вы ўпэўненыя, што жадаеце адхіліць гэтае паведамленне?',
	'DISAPPROVE_POSTS'			=> 'Адхіліць паведамленні',
	'DISAPPROVE_POSTS_CONFIRM'	=> 'Вы ўпэўненыя, што жадаеце адхіліць вылучаныя паведамленні?',
	'DISPLAY_LOG'				=> 'Паказаць запісы за',
	'DISPLAY_OPTIONS'			=> 'Налады адлюстравання',

	'EMPTY_REPORT'					=> 'Вы павінны абгрунтаваць гэтую скаргу.',
	'EMPTY_TOPICS_REMOVED_WARNING'	=> 'Калі ласка, звернеце ўвагу, што адна або некалькі тым былі выдаленыя з базы дадзеных, паколькі не ўтрымоўвалі або перасталі ўтрымоўваць паведамленні.',

	'FEEDBACK'				=> 'Нататкі аб карыстальніку',
	'FORK'					=> 'Стварыць копію',
	'FORK_TOPIC'			=> 'Стварыць копію тэмы',
	'FORK_TOPIC_CONFIRM'	=> 'Вы ўпэўненыя, што жадаеце скапіяваць гэтую тэму?',
	'FORK_TOPICS'			=> 'Стварыць копіі вылучаных тэм',
	'FORK_TOPICS_CONFIRM'	=> 'Вы ўпэўненыя, што жадаеце скапіяваць вылучаныя тэмы?',
	'FORUM_DESC'			=> 'Апісанне',
	'FORUM_NAME'			=> 'Назоў форума',
	'FORUM_NOT_EXIST'		=> 'Вылучаны вамі форум не існуе.',
	'FORUM_NOT_POSTABLE'	=> 'У вылучаным вамі форуме нельга пакідаць паведамленні.',
	'FORUM_STATUS'			=> 'Статут форума',
	'FORUM_STYLE'			=> 'Стыль форума',

	'GLOBAL_ANNOUNCEMENT'	=> 'Важная',

	'IP_INFO'				=> 'Інфармацыя аб IP-адрасе',
	'IPS_POSTED_FROM'		=> 'IP-адрасы, з якіх карыстальнік адпраўляў паведамленні',

	'LATEST_LOGS'				=> 'Апошнія 5 дзеянняў',
	'LATEST_REPORTED'			=> 'Апошнія 5 скарг',
	'LATEST_REPORTED_PMS'		=> 'Апошнія 5 скаргаў на асабістыя паведамленні',
	'LATEST_UNAPPROVED'			=> 'Апошнія 5 паведамленняў, якія чакаюць ухвалы',
	'LATEST_WARNING_TIME'		=> 'Апошняе папярэджанне вынесенае',
	'LATEST_WARNINGS'			=> 'Апошнія 5 папярэджанняў',
	'LEAVE_SHADOW'				=> 'Пакінуць спасылку ў старым форуме',
	'LIST_REPORT'				=> 'Нататак: 1',
	'LIST_REPORTS'				=> 'Нататак: %d',
	'LOCK'						=> 'Зачыніць',
	'LOCK_POST_POST'			=> 'Заблакаваць паведамленне',
	'LOCK_POST_POST_CONFIRM'	=> 'Вы ўпэўненыя, што жадаеце забараніць рэдагаванне гэтага паведамлення?',
	'LOCK_POST_POSTS'			=> 'Заблакаваць вылучаныя паведамленні',
	'LOCK_POST_POSTS_CONFIRM'	=> 'Вы ўпэўненыя, што жадаеце забараніць рэдагаванне вылучаных паведамленняў?',
	'LOCK_TOPIC_CONFIRM'		=> 'Вы ўпэўненыя, што жадаеце зачыніць гэтую тэму?',
	'LOCK_TOPICS'				=> 'Зачыніць вылучаныя тэмы',
	'LOCK_TOPICS_CONFIRM'		=> 'Вы ўпэўненыя, што жадаеце зачыніць усе вылучаныя тэмы?',
	'LOGS_CURRENT_TOPIC'		=> 'Прагляд логаў тэмы:',
	'LOGIN_EXPLAIN_MCP'			=> 'Вы павінны ўвайсці для мадэравання гэтага форума.',
	'LOGVIEW_VIEWTOPIC'			=> 'Праглядзець тэму',
	'LOGVIEW_VIEWLOGS'			=> 'Праглядзець лог тэмы',
	'LOGVIEW_VIEWFORUM'			=> 'Праглядзець форум',
	'LOOKUP_ALL'				=> 'Паглядзець хасты для ўсіх IP-адрасоў',
	'LOOKUP_IP'					=> 'Паглядзець хост для IP-адрасы',

	'MARKED_NOTES_DELETED'		=> 'Усе адзначаныя нататкі аб карыстальніку выдаленыя.',

	'MCP_ADD'						=> 'Дадаць папярэджанне',

	'MCP_BAN'					=> 'Чорныя спісы',
	'MCP_BAN_EMAILS'			=> 'адрасоў email',
	'MCP_BAN_IPS'				=> 'адрасоў IP/хастоў',
	'MCP_BAN_USERNAMES'			=> 'імёнаў карыстальнікаў',

	'MCP_LOGS'						=> 'Лог мадэратара',
	'MCP_LOGS_FRONT'				=> 'Галоўная старонка',
	'MCP_LOGS_FORUM_VIEW'			=> 'Лог форума',
	'MCP_LOGS_TOPIC_VIEW'			=> 'Лог тэмы',

	'MCP_MAIN'						=> 'Галоўная',
	'MCP_MAIN_FORUM_VIEW'			=> 'Праглядзець форум',
	'MCP_MAIN_FRONT'				=> 'Галоўная старонка',
	'MCP_MAIN_POST_DETAILS'			=> 'Інфармацыя аб паведамленні',
	'MCP_MAIN_TOPIC_VIEW'			=> 'Праглядзець тэму',
	'MCP_MAKE_ANNOUNCEMENT'			=> 'Зрабіць тэму аб\'явай',
	'MCP_MAKE_ANNOUNCEMENT_CONFIRM'	=> 'Вы ўпэўненыя, што жадаеце зрабіць гэтую тэму аб\'явай?',
	'MCP_MAKE_ANNOUNCEMENTS'		=> 'Зрабіць тэмы аб\'явамі',
	'MCP_MAKE_ANNOUNCEMENTS_CONFIRM'=> 'Вы ўпэўненыя, што жадаеце зрабіць вылучаныя тэмы аб\'явамі?',
	'MCP_MAKE_GLOBAL'				=> 'Зрабіць тэму важнай',
	'MCP_MAKE_GLOBAL_CONFIRM'		=> 'Вы ўпэўненыя, што жадаеце зрабіць гэтую тэму важнай?',
	'MCP_MAKE_GLOBALS'				=> 'Зрабіць тэмы важнымі',
	'MCP_MAKE_GLOBALS_CONFIRM'		=> 'Вы ўпэўненыя, што жадаеце зрабіць вылучаныя тэмы важнымі?',
	'MCP_MAKE_STICKY'				=> 'Зрабіць тэму прылепленай',
	'MCP_MAKE_STICKY_CONFIRM'		=> 'Вы ўпэўненыя, што жадаеце зрабіць гэтую тэму прылепленай?',
	'MCP_MAKE_STICKIES'				=> 'Зрабіць тэмы прылепленымі',
	'MCP_MAKE_STICKIES_CONFIRM'		=> 'Вы ўпэўненыя, што жадаеце зрабіць вылучаныя тэмы прылепленымі?',
	'MCP_MAKE_NORMAL'				=> 'Зрабіць тэму звычайнай',
	'MCP_MAKE_NORMAL_CONFIRM'		=> 'Вы ўпэўненыя, што жадаеце зрабіць гэтую тэму звычайнай?',
	'MCP_MAKE_NORMALS'				=> 'Зрабіць тэмы звычайнымі',
	'MCP_MAKE_NORMALS_CONFIRM'		=> 'Вы ўпэўненыя, што жадаеце зрабіць вылучаныя тэмы звычайнымі?',

	'MCP_NOTES'						=> 'Нататкі аб карыстальніку',
	'MCP_NOTES_FRONT'				=> 'Галоўная старонка',
	'MCP_NOTES_USER'				=> 'Інфармацыя',

	'MCP_POST_REPORTS'				=> 'Скаргі на гэтае паведамленне',

	'MCP_PM_REPORTS'				=> 'Скаргі на асабістыя паведамленні',
	'MCP_PM_REPORT_DETAILS'			=> 'Падрабязнасці аб скарзе',
	'MCP_PM_REPORTS_CLOSED'			=> 'Закрытыя скаргі на АП',
	'MCP_PM_REPORTS_CLOSED_EXPLAIN'	=> 'Гэта спіс усіх прагледжаных і закрытых скаргаў на асабістыя паведамленні.',
	'MCP_PM_REPORTS_OPEN'			=> 'Адкрытыя скаргі на АП',
	'MCP_PM_REPORTS_OPEN_EXPLAIN'	=> 'Гэта спіс усіх скаргаў на асабістыя паведамленні, якія яшчэ не былі разгледжаныя.',

	'MCP_REPORTS'					=> 'Скаргі на паведамленні',
	'MCP_REPORT_DETAILS'			=> 'Інфармацыя аб скарзе',
	'MCP_REPORTS_CLOSED'			=> 'Зачыненыя скаргі',
	'MCP_REPORTS_CLOSED_EXPLAIN'	=> 'Гэта спіс усіх скарг на паведамленні, якія ўжо былі разгледжаныя.',
	'MCP_REPORTS_OPEN'				=> 'Адчыненыя скаргі',
	'MCP_REPORTS_OPEN_EXPLAIN'		=> 'Гэта спіс усіх скарг на паведамленні, якія яшчэ не былі разгледжаныя.',

	'MCP_QUEUE'								=> 'Чарга на мадэрацыю',
	'MCP_QUEUE_APPROVE_DETAILS'				=> 'Інфармацыя аб ухвале',
	'MCP_QUEUE_UNAPPROVED_POSTS'			=> 'Паведамленні',
	'MCP_QUEUE_UNAPPROVED_POSTS_EXPLAIN'	=> 'Гэта спіс усіх паведамленняў, якія патрабуюць ухвалы перад тым, як яны стануць бачныя карыстальнікам.',
	'MCP_QUEUE_UNAPPROVED_TOPICS'			=> 'Тэмы',
	'MCP_QUEUE_UNAPPROVED_TOPICS_EXPLAIN'	=> 'Гэта спіс усіх тэм, якія патрабуюць ухвалы перад тым, як яны стануць бачныя карыстальнікам.',

	'MCP_VIEW_USER'			=> 'Прагляд папярэджанняў пэўнага карыстальніка',

	'MCP_WARN'				=> 'Папярэджанні',
	'MCP_WARN_FRONT'		=> 'Галоўная старонка',
	'MCP_WARN_LIST'			=> 'Спіс папярэджанняў',
	'MCP_WARN_POST'			=> 'Папярэджанне за пэўнае паведамленне',
	'MCP_WARN_USER'			=> 'Вынесці папярэджанне',

	'MERGE_POSTS'			=> 'Аб\'яднанне паведамленняў',
	'MERGE_POSTS_CONFIRM'	=> 'Вы ўпэўненыя, што жадаеце аб\'яднаць вылучаныя паведамленні?',
	'MERGE_TOPIC_EXPLAIN'	=> 'Выкарыстаючы ніжэйпрыведзеную форму, вы можаце перанесці вылучаныя паведамленні ва ўжо наяўную тэму. Паведамленні будуць паказаныя ў тэме паводле часу іх дадання.<br />Калі ласка, увядзіце нумар адпаведнай тэмы або націсніце «Вылучыць тэму» для пошуку.',
	'MERGE_TOPIC_ID'		=> 'Нумар тэмы для аб\'яднання паведамленняў',
	'MERGE_TOPICS'			=> 'Аб\'яднанне тэм',
	'MERGE_TOPICS_CONFIRM'	=> 'Вы ўпэўненыя, што жадаеце аб\'яднаць вылучаныя тэмы?',
	'MODERATE_FORUM'		=> 'Мадэраваць форум',
	'MODERATE_TOPIC'		=> 'Мадэраваць тэму',
	'MODERATE_POST'			=> 'Мадэраваць паведамленне',
	'MOD_OPTIONS'			=> 'Налады мадэратара',
	'MORE_INFO'				=> 'Дадатковая інфармацыя',
	'MOST_WARNINGS'			=> 'Карыстальнікі з найбольшай колькасцю папярэджанняў',
	'MOVE_TOPIC_CONFIRM'	=> 'Вы ўпэўненыя, што жадаеце перамясціць тэму ў новы форум?',
	'MOVE_TOPICS'			=> 'Перамясціць вылучаныя тэмы',
	'MOVE_TOPICS_CONFIRM'	=> 'Вы ўпэўненыя, што жадаеце перамясціць вылучаныя тэмы ў новы форум?',

	'NOTIFY_POSTER_APPROVAL'		=> 'Апавясціць аўтара аб ухвале яго паведамлення?',
	'NOTIFY_POSTER_DISAPPROVAL'		=> 'Апавясціць аўтара аб адхіленні яго паведамлення?',
	'NOTIFY_USER_WARN'				=> 'Апавясціць карыстальніка аб папярэджанні?',
	'NOT_MODERATOR'					=> 'Вы не з\'яўляецеся мадэратарам гэтага форума.',
	'NO_DESTINATION_FORUM'			=> 'Калі ласка, вылучыце форум.',
	'NO_DESTINATION_FORUM_FOUND'	=> 'Даступны форум адсутнічае.',
	'NO_ENTRIES'					=> 'Запісы ў часопісе за гэты перыяд адсутнічаюць.',
	'NO_FEEDBACK'					=> 'Няма нататак аб гэтым карыстальніку.',
	'NO_FINAL_TOPIC_SELECTED'		=> 'Вы павінны вылучыць тэму для аб\'яднання паведамленняў.',
	'NO_MATCHES_FOUND'				=> 'Супадзенняў не знойдзена.',
	'NO_POST'						=> 'Вы павінны вылучыць паведамленне для таго, каб вынесці за яго папярэджанне карыстальніку.',
	'NO_POST_REPORT'				=> 'Скарга на гэтае паведамленне не накіроўвалася.',
	'NO_POST_SELECTED'				=> 'Вы павінны вылучыць хоць бы адно паведамленне для таго, каб вырабіць гэтае дзеянне.',
	'NO_REASON_DISAPPROVAL'			=> 'Калі ласка, пакажыце прыдатны чыннік адхілення.',
	'NO_REPORT'						=> 'Скарга не знойдзеная',
	'NO_REPORTS'					=> 'Скарг не знойдзена',
	'NO_REPORT_SELECTED'			=> 'Вы павінны вылучыць хоць бы адну скаргу для выканання гэтага дзеяння.',
	'NO_TOPIC_ICON'					=> 'Не',
	'NO_TOPIC_SELECTED'				=> 'Вы павінны вылучыць хоць бы адну тэму для таго, каб вырабіць гэтае дзеянне.',
	'NO_TOPICS_QUEUE'				=> 'Няма тэм, якія жывуць у нястачы ў праверцы мадэратара.',

	'ONLY_TOPIC'			=> 'Толькі тэма «%s»',
	'OTHER_USERS'			=> 'Іншыя карыстальнікі, якія адправілі паведамленні з гэтага IP-адраса',

	'PM_REPORT_CLOSED_SUCCESS'	=> 'Абраная скарга на асабістае паведамленне паспяхова зачыненая.',
	'PM_REPORT_DELETED_SUCCESS'	=> 'Абраная скарга на асабістае паведамленне паспяхова выдаленая.',
	'PM_REPORTED_SUCCESS'		=> 'Скарга на гэта асабістае паведамленне паспяхова адпраўленая.',
	'PM_REPORT_TOTAL'			=> 'Усяго скаргаў на асабістыя паведамленні: <strong>1</strong>.',
	'PM_REPORTS_CLOSED_SUCCESS' 	=> 'Вылучаныя скаргі на асабістыя паведамленні паспяхова закрыты.',
	'PM_REPORTS_DELETED_SUCCESS' => 'Вылучаныя скаргі на асабістыя паведамленні паспяхова выдаленыя.',
	'PM_REPORTS_TOTAL'			=> 'Усяго скаргаў на асабістыя паведамленні: <strong>%d</strong>.',
	'PM_REPORTS_ZERO_TOTAL'		=> 'Няма скаргаў на асабістыя паведамленні.',
	'PM_REPORT_DETAILS'			=> 'Падрабязнасці аб скарзе на асабістае паведамленне',
	'POSTER'					=> 'Аўтар',
	'POSTS_APPROVED_SUCCESS'	=> 'Вылучаныя паведамленні былі ўхваленыя.',
	'POSTS_DELETED_SUCCESS'		=> 'Вылучаныя паведамленні былі паспяхова выдаленыя з базы дадзеных.',
	'POSTS_DISAPPROVED_SUCCESS'	=> 'Вылучаныя паведамленні былі адхіленыя.',
	'POSTS_LOCKED_SUCCESS'		=> 'Вылучаныя паведамленні былі паспяхова зачыненыя.',
	'POSTS_MERGED_SUCCESS'		=> 'Вылучаныя паведамленні былі аб\'яднаныя.',
	'POSTS_UNLOCKED_SUCCESS'	=> 'Вылучаныя паведамленні былі паспяхова адчыненыя.',
	'POSTS_PER_PAGE'			=> 'Паведамленняў на старонку',
	'POSTS_PER_PAGE_EXPLAIN'	=> '(Усталюеце 0 для прагляду ўсіх паведамленняў.)',
	'POST_APPROVED_SUCCESS'		=> 'Вылучанае паведамленне было ўхвалена.',
	'POST_DELETED_SUCCESS'		=> 'Вылучанае паведамленне было паспяхова выдаленае з базы дадзеных.',
	'POST_DISAPPROVED_SUCCESS'	=> 'Вылучанае паведамленне было паспяхова адхілена.',
	'POST_LOCKED_SUCCESS'		=> 'Паведамленне паспяхова заблакавана.',
	'POST_NOT_EXIST'			=> 'Запытанае вамі паведамленне не існуе.',
	'POST_REPORTED_SUCCESS'		=> 'Скарга на гэтае паведамленне была паспяхова адпраўленая.',
	'POST_UNLOCKED_SUCCESS'		=> 'Паведамленне паспяхова разблакавана.',

	'READ_USERNOTES'			=> 'Нататкі аб карыстальніках',
	'READ_WARNINGS'				=> 'Папярэджанні карыстальніка',
	'REPORTER'					=> 'Аўтар скаргі',
	'REPORTED'					=> 'Скарга адпраўленая',
	'REPORTED_BY'				=> 'Скарга адпраўленая',
	'REPORTED_ON_DATE'			=> 'ад',
	'REPORTS_CLOSED_SUCCESS'	=> 'Вылучаныя скаргі былі паспяхова зачыненыя.',
	'REPORTS_DELETED_SUCCESS'	=> 'Вылучаныя скаргі былі паспяхова выдаленыя.',
	'REPORTS_TOTAL'				=> 'Усяго маецца скарг для прагляду: <strong>%d</strong>.',
	'REPORTS_ZERO_TOTAL'		=> 'Адсутнічаюць скаргі для прагляду.',
	'REPORT_CLOSED'				=> 'Гэтая скарга ўжо была зачыненая.',
	'REPORT_CLOSED_SUCCESS'		=> 'Вылучаная скарга была паспяхова зачыненая.',
	'REPORT_DELETED_SUCCESS'	=> 'Вылучаная скарга была паспяхова выдаленая.',
	'REPORT_DETAILS'			=> 'Інфармацыя аб скарзе',
	'REPORT_MESSAGE'			=> 'Адправіць скаргу на гэтае паведамленне',
	'REPORT_MESSAGE_EXPLAIN'	=> 'Выкарыстайце гэтую форму для адпраўкі скаргі на вылучанае асабістае паведамленне. Скаргі звычайна выкарыстоўваюцца толькі ў выпадках, калі паведамленне парушае правілы канферэнцыі. <strong>Дасланыя скарга на асабістае паведамленне зробіць бачным яго змесціва мадэратарам канферэнцыі.</strong>',
	'REPORT_NOTIFY'				=> 'Апавясціць мяне',
	'REPORT_NOTIFY_EXPLAIN'		=> 'Вас паінфармуюць аб разглядзе скаргі.',
	'REPORT_POST_EXPLAIN'		=> 'Выкарыстайце гэтую форму для адпраўкі скаргі на вылучанае паведамленне мадэратарам і адміністратарам форума. Скаргі звычайна выкарыстоўваюцца толькі ў выпадках, калі паведамленне парушае правілы форума.',
	'REPORT_REASON'				=> 'Чыннік напрамку скаргі',
	'REPORT_TIME'				=> 'Час напрамку скаргі',
	'REPORT_TOTAL'				=> 'Усяго маецца скарг для прагляду: <strong>1</strong>.',
	'RESYNC'					=> 'Сінхранізаваць',
	'RETURN_MESSAGE'			=> '%sВярнуцца да паведамлення%s',
	'RETURN_NEW_FORUM'			=> '%sВярнуцца да новага форума%s',
	'RETURN_NEW_TOPIC'			=> '%sВярнуцца да новай тэмы%s',
	'RETURN_PM'					=> '%sВярнуцца да асабістага паведамлення%s',
	'RETURN_POST'				=> '%sВярнуцца да паведамлення%s',
	'RETURN_QUEUE'				=> '%sВярнуцца да чаргі%s',
	'RETURN_REPORTS'			=> '%sВярнуцца да скарг%s',
	'RETURN_TOPIC_SIMPLE'		=> '%sВярнуцца да тэмы%s',

	'SEARCH_POSTS_BY_USER'				=> 'Пошук паведамленняў па',
	'SELECT_ACTION'						=> 'Вылучыць жаданае дзеянне',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENT'	=> 'Калі ласка, вылучыце форум, у якім будзе адлюстроўвацца гэтая важная тэма.',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENTS'	=> 'Адна або больш з вылучаных тэм з\'яўляюцца важнымі. Калі ласка, вылучыце форум, у якім яны будуць адлюстроўвацца.',
	'SELECT_MERGE'						=> 'Вылучыць для аб\'яднання',
	'SELECT_TOPICS_FROM'				=> 'Вылучыць тэмы з',
	'SELECT_TOPIC'						=> 'Вылучыць тэму',
	'SELECT_USER'						=> 'Вылучыць карыстальніка',
	'SORT_ACTION'						=> 'Лог дзеянняў',
	'SORT_DATE'							=> 'Дата',
	'SORT_IP'							=> 'IP-адрас',
	'SORT_WARNINGS'						=> 'Папярэджанні',
	'SPLIT_AFTER'						=> 'Аддзяліць паведамленні пачынальна з вылучанага',
	'SPLIT_FORUM'						=> 'Форум для новай тэмы',
	'SPLIT_POSTS'						=> 'Аддзяліць вылучаныя паведамленні',
	'SPLIT_SUBJECT'						=> 'Загаловак новай тэмы',
	'SPLIT_TOPIC_ALL'					=> 'Аддзяліць тэму пасля вылучаных паведамленняў',
	'SPLIT_TOPIC_ALL_CONFIRM'			=> 'Вы ўпэўненыя, што жадаеце падзяліць гэтую тэму?',
	'SPLIT_TOPIC_BEYOND'				=> 'Падзяліць тэму пачынальна з вылучанага паведамлення',
	'SPLIT_TOPIC_BEYOND_CONFIRM'		=> 'Вы ўпэўненыя, што жадаеце падзяліць гэтую тэму пачынальна з вылучанага паведамлення?',
	'SPLIT_TOPIC_EXPLAIN'				=> 'Выкарыстаючы ніжэйпрыведзеную форму, вы можаце падзяліць тэму на дзве, або шляхам выбару асобных паведамленняў, або шляхам аддзялення пасля вылучанага паведамлення.',

	'THIS_PM_IP' 				=> 'IP-адрас для асабістага паведамлення',
	'THIS_POST_IP'				=> 'IP-адрас паведамлення',
	'TOPICS_APPROVED_SUCCESS'	=> 'Вылучаныя тэмы былі ўхваленыя.',
	'TOPICS_DELETED_SUCCESS'	=> 'Вылучаныя тэмы былі паспяхова выдаленыя з базы дадзеных.',
	'TOPICS_DISAPPROVED_SUCCESS'=> 'Вылучаныя тэмы былі адхіленыя.',
	'TOPICS_FORKED_SUCCESS'		=> 'вылучаныя тэмы былі паспяхова скапіяваныя.',
	'TOPICS_LOCKED_SUCCESS'		=> 'Вылучаныя тэмы былі зачыненыя.',
	'TOPICS_MOVED_SUCCESS'		=> 'Вылучаныя тэмы былі паспяхова перамешчаныя.',
	'TOPICS_RESYNC_SUCCESS'		=> 'Вылучаныя тэмы былі сінхранізаваныя.',
	'TOPICS_TYPE_CHANGED'		=> 'Тыпы тэм паспяхова змененыя.',
	'TOPICS_UNLOCKED_SUCCESS'	=> 'Вылучаныя тэмы былі адчыненыя.',
	'TOPIC_APPROVED_SUCCESS'	=> 'Вылучаная тэма была ўхваленая.',
	'TOPIC_DELETED_SUCCESS'		=> 'Вылучаная тэма была паспяхова выдаленая з базы дадзеных.',
	'TOPIC_DISAPPROVED_SUCCESS'	=> 'Вылучаная тэма была паспяхова адхіленая.',
	'TOPIC_FORKED_SUCCESS'		=> 'Вылучаная тэма была паспяхова скапіяваная.',
	'TOPIC_LOCKED_SUCCESS'		=> 'Вылучаная тэма была зачыненая.',
	'TOPIC_MOVED_SUCCESS'		=> 'Вылучаная тэма была паспяхова перамешчаная.',
	'TOPIC_NOT_EXIST'			=> 'Вылучаная вамі тэма не існуе.',
	'TOPIC_RESYNC_SUCCESS'		=> 'Вылучаная тэма была сінхранізаваная.',
	'TOPIC_SPLIT_SUCCESS'		=> 'Вылучаная тэма была паспяхова падзеленая.',
	'TOPIC_TIME'				=> 'Час стварэння тэмы',
	'TOPIC_TYPE_CHANGED'		=> 'Тып тэмы паспяхова зменены.',
	'TOPIC_UNLOCKED_SUCCESS'	=> 'Вылучаная тэма была адчыненая.',
	'TOTAL_WARNINGS'			=> 'Усяго папярэджанняў',

	'UNAPPROVED_POSTS_TOTAL'		=> 'Паведамленняў, якія чакаюць ухвалы: <strong>%d</strong>.',
	'UNAPPROVED_POSTS_ZERO_TOTAL'	=> 'Няма паведамленняў, якія чакаюць ухвалы.',
	'UNAPPROVED_POST_TOTAL'			=> 'Паведамленняў, якія чакаюць ухвалы: <strong>1</strong>.',
	'UNLOCK'						=> 'Адчыніць',
	'UNLOCK_POST'					=> 'Разблакаваць паведамленне',
	'UNLOCK_POST_EXPLAIN'			=> 'Дазволіць рэдагаванне',
	'UNLOCK_POST_POST'				=> 'Разблакаваць паведамленне',
	'UNLOCK_POST_POST_CONFIRM'		=> 'Вы ўпэўненыя, што жадаеце дазволіць рэдагаванне гэтага паведамлення?',
	'UNLOCK_POST_POSTS'				=> 'Разблакаваць вылучаныя паведамленні',
	'UNLOCK_POST_POSTS_CONFIRM'		=> 'Вы ўпэўненыя, што жадаеце дазволіць рэдагаванне вылучаных паведамленняў?',
	'UNLOCK_TOPIC'					=> 'Адчыніць тэму',
	'UNLOCK_TOPIC_CONFIRM'			=> 'Вы ўпэўненыя, што жадаеце адчыніць гэтую тэму?',
	'UNLOCK_TOPICS'					=> 'Адчыніць вылучаныя тэмы',
	'UNLOCK_TOPICS_CONFIRM'			=> 'Вы ўпэўненыя, што жадаеце адчыніць усе вылучаныя тэмы?',
	'USER_CANNOT_POST'				=> 'Вы не можаце дадаваць паведамленні ў гэтым форуме.',
	'USER_CANNOT_REPORT'			=> 'Вы не можаце адпраўляць скаргі на паведамленні ў гэтым форуме.',
	'USER_FEEDBACK_ADDED'			=> 'Нататка аб карыстальніку паспяхова дададзеная.',
	'USER_WARNING_ADDED'			=> 'Карыстальніку паспяхова вынесенае папярэджанне.',

	'VIEW_DETAILS'			=> 'Інфармацыя',
	'VIEW_PM'				=> 'Праглядзець асабістае паведамленне',
	'VIEW_POST'				=> 'Паведамленне',

	'WARNED_USERS'			=> 'Карыстальнікі, якія маюць папярэджанні',
	'WARNED_USERS_EXPLAIN'	=> 'Гэта спіс карыстальнікаў, для якіх не мінулі тэрміны вынесеных папярэджанняў.',
	'WARNING_PM_BODY'		=> 'Гэтае папярэджанне, вынесенае вам адміністратарам або мадэратарам гэтай бачыны.[quote]%s[/quote]',
	'WARNING_PM_SUBJECT'	=> 'Вам вынесенае папярэджанне',
	'WARNING_POST_DEFAULT'	=> 'Гэтае папярэджанне, якое адносіцца да наступнага вашага паведамлення: %s.',
	'WARNINGS_ZERO_TOTAL'	=> 'Няма папярэджанняў.',

	'YOU_SELECTED_TOPIC'	=> 'Вы вылучылі тэму нумар %d: %s.',

	'report_reasons'		=> array(
		'TITLE'	=> array(
			'WAREZ'		=> 'Варэз',
			'SPAM'		=> 'Спам',
			'OFF_TOPIC'	=> 'Афтопік',
			'OTHER'		=> 'Іншае',
		),
		'DESCRIPTION' => array(
			'WAREZ'		=> 'Паведамленне ўтрымоўвае спасылкі на пазапраўныя або пірацкія праграмы.',
			'SPAM'		=> 'Паведамленне мае адзінай мэтай рэкламу бачын, праграм або іншых прадуктаў, тавараў, паслуг і інш.',
			'OFF_TOPIC'	=> 'Паведамленне не ставіцца да якая абмяркоўваецца тэмы.',
			'OTHER'		=> 'Чыннік абскарджання не ставіцца не да адной з пералічаных, выкарыстайце поле дадатковай інфармацыі.',
		)
	),
));

?>
