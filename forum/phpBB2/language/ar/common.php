<?php
/**
*
* common.php [Arabic]
*
* @package language
* @version $Id: $
* @copyright (c) 2010 phpBB Group
* @author 2010-12-11 - phpBBArabia.com
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
	'PIXEL'	=> 'px',
	'FEED_TOPICS_ACTIVE'	=> 'مواضيع نشيطة',
	'FEED_TOPICS_NEW'	=> 'مواضيع جديدة',
	'TRANSLATION_INFO'	=> 'Translated by <a href="http://www.phpbbarabia.com/" title="الدعم العربي لمنتديات phpBB">phpBBArabia</a>',
	'DIRECTION'	=> 'rtl',
	'DATE_FORMAT'	=> '|d M Y|',
	'USER_LANG'	=> 'ar',
	'1_DAY'	=> 'يوم',
	'1_MONTH'	=> 'شهر',
	'1_YEAR'	=> 'سنة',
	'2_WEEKS'	=> 'أسبوعان',
	'3_MONTHS'	=> '3 شهور',
	'6_MONTHS'	=> '6 شهور',
	'7_DAYS'	=> 'أسبوع',
	'ACCOUNT_ALREADY_ACTIVATED'	=> 'حسابك مفعل الآن',
	'ACCOUNT_DEACTIVATED'	=> 'تم إيقاف حسابك يدوياً وإدارة المنتدى فقط هي القادرة على إعادة تفعيله',
	'ACCOUNT_NOT_ACTIVATED'	=> 'حسابك غير مفعّل بعد',
	'ACP'	=> 'لوحة التحكم الرئيسية',
	'ACTIVE'	=> 'نشط',
	'ACTIVE_ERROR'	=> 'حسابك معطل الآن . الرجاء تفعيل حسابك ثم حاول الدخول مرة أخرى. إذا واجهت أية مشاكل راجع مدير المنتدى',
	'ADMINISTRATOR'	=> 'المدير العام',
	'ADMINISTRATORS'	=> 'مدراء المنتدى',
	'AGE'	=> 'العمر',
	'AIM'	=> 'AIM',
	'ALLOWED'	=> 'مسموح',
	'ALL_FILES'	=> 'جميع الملفات',
	'ALL_FORUMS'	=> 'جميع المنتديات',
	'ALL_MESSAGES'	=> 'جميع الرسائل',
	'ALL_POSTS'	=> 'جميع المشاركات',
	'ALL_TIMES'	=> 'جميع الأوقات تستخدم %1$s %2$s',
	'ALL_TOPICS'	=> 'جميع المواضيع',
	'AND'	=> 'و',
	'ARE_WATCHING_FORUM'	=> 'قد اشتركت في هذا المنتدى وستصلك التحديثات الحاصلة فيه',
	'ARE_WATCHING_TOPIC'	=> 'قد اشتركت في هذا الموضوع وستصلك التحديثات الحاصلة فيه',
	'ASCENDING'	=> 'تصاعدياً',
	'ATTACHMENTS'	=> 'المرفقات',
	'ATTACHED_IMAGE_NOT_IMAGE'	=> 'الصورة التي تريد إرفاقها غير صحيحة',
	'AUTHOR'	=> 'الكاتب',
	'AUTH_NO_PROFILE_CREATED'	=> 'خطأ في إنشاء الملف الشخصي للعضو',
	'AVATAR_DISALLOWED_CONTENT'	=> 'تم إبطال عملية الرفع للشك بأن الملف المرفوع ملف ضار',
	'AVATAR_DISALLOWED_EXTENSION'	=> 'هذه الإضافة %s غير مسموح بها',
	'AVATAR_EMPTY_REMOTE_DATA'	=> 'الصورة الشخصية لم تحمّل. قد يكون الإيصال خاطئا أو لا يعمل',
	'AVATAR_EMPTY_FILEUPLOAD'	=> 'الصورة الشخصية التي رفعتها فارغة',
	'AVATAR_INVALID_FILENAME'	=> '%s اسم الملف خاطئ',
	'AVATAR_NOT_UPLOADED'	=> 'لم تُحَمّل الصورة الشخصية',
	'AVATAR_NO_SIZE'	=> 'لم يتمكن النظام من الحصول على طول وعرض الصورة الشخصية ، الرجاء القيام بذلك يدوياً',
	'AVATAR_PARTIAL_UPLOAD'	=> 'حُمِلّت الصورة جزئيا فقط',
	'AVATAR_PHP_SIZE_NA'	=> 'حجم الصورة/الصور الشخصية كبير جداً.<br />لا يستطيع النظام تحديد أقصى حجم المعرّف من قبل PHP في ملف php.ini',
	'AVATAR_PHP_SIZE_OVERRUN'	=> 'حجم الصورة الشخصيه اكبر من الحد المسموح. الحد المسموح هو %1$d %2$s.<br />الرجاء الانتباه إلى أنه لا يمكن تجاوز اعدادت ملف php.ini',
	'AVATAR_URL_INVALID'	=> 'أُدخِل العنوان بطريقة خاطئة',
	'AVATAR_URL_NOT_FOUND'	=> 'لم يُعثَر على الملف المحدد',
	'AVATAR_WRONG_FILESIZE'	=> 'ينبغي أن يكون حجم الصورة الشخصية بين 0 و %1d %2s',
	'AVATAR_WRONG_SIZE'	=> 'ينبغي أن يكون عرض الصورة الشخصية على الأقل %1$d بكسل ، وطولها %2$d بكسل وعلى الأكثر يكون عرضها %3$d بكسل وطولها %4$d بكسل. عرض الصورة المقدّمة هو %5$d بكسل وطولها %6$d بكسل',
	'BACK_TO_TOP'	=> 'أعلى',
	'BACK_TO_PREV'	=> 'العودة للصفحة السابقة',
	'BAN_TRIGGERED_BY_EMAIL'	=> 'لقد حُظِر بريدك الإلكتروني',
	'BAN_TRIGGERED_BY_IP'	=> 'لقد حُظِر رقم IP  الخاص بك',
	'BAN_TRIGGERED_BY_USER'	=> 'حُظِر اسم المستخدم الخاص بك',
	'BBCODE_GUIDE'	=> 'دليل BBCode',
	'BCC'	=> 'نسخة إلى',
	'BIRTHDAYS'	=> 'أعياد الميلاد',
	'BOARD_BAN_PERM'	=> 'أوقِفَ حسابك <strong>نهائياً</strong> في هذا المنتدى.<br /><br />رجاءً راسل %2$sمدير المنتدى%3$s لمزيد من المعلومات',
	'BOARD_BAN_REASON'	=> 'أسباب الإيقاف: <strong>%s</strong>',
	'BOARD_BAN_TIME'	=> 'أوقِفَ حسابك في هذا المنتدى حتى <strong>%1$s</strong>.<br /><br />رجاءً راسل %2$sمدير المنتدى%3$s لمزيد من المعلومات',
	'BOARD_DISABLE'	=> 'نأسف لكن المنتدى معطّل الآن',
	'BOARD_DISABLED'	=> 'هذا المنتدى معطل حالياً',
	'BOARD_UNAVAILABLE'	=> 'نأسف لكن المنتدى متوقف مؤقتاً ، عاود الزيارة بعد دقائق',
	'BROWSING_FORUM'	=> 'أعضاء يستعرضون المنتدى: %1$s',
	'BROWSING_FORUM_GUEST'	=> 'المستخدمون المتصفحون لهذا المنتدى: %1$s و %2$d زائر',
	'BROWSING_FORUM_GUESTS'	=> 'المستخدمون المتصفحون لهذا المنتدى: %1$s و %2$d زائر/زوار',
	'BYTES'	=> 'Bytes',
	'CANCEL'	=> 'إلغاء',
	'CHANGE'	=> 'تغيير',
	'CHANGE_FONT_SIZE'	=> 'تغيير حجم الخط',
	'CHANGING_PREFERENCES'	=> 'يغير إعدادات المنتدى',
	'CHANGING_PROFILE'	=> 'يغير إعدادات الملف الشخصي',
	'CLICK_VIEW_PRIVMSG'	=> '%sالذهاب إلى صندوق الوارد%s',
	'COLLAPSE_VIEW'	=> 'عرض مصغر',
	'CLOSE_WINDOW'	=> 'أغلق النافذة',
	'COLOUR_SWATCH'	=> 'قائمة الألوان',
	'COMMA_SEPARATOR'	=> ', ',
	'CONFIRM'	=> 'تأكيد',
	'CONFIRM_CODE'	=> 'الرمز الأمني',
	'CONFIRM_CODE_EXPLAIN'	=> 'اكتب الرمز كما تراه في الصورة تماماً',
	'CONFIRM_CODE_WRONG'	=> 'الرمز الأمني الذي أدخلته غير صحيح',
	'CONFIRM_OPERATION'	=> 'هل أنت متأكد من أنك تريد القيام بهذه العملية ؟',
	'CONGRATULATIONS'	=> 'مبروك لـ',
	'CONNECTION_FAILED'	=> 'خطأ في الاتصال',
	'CONNECTION_SUCCESS'	=> 'تم الاتصال بنجاح!',
	'COOKIES_DELETED'	=> 'حُذِفت جميع الملفات المؤقتة الخاصه بالمنتدى بنجاح',
	'CURRENT_TIME'	=> 'اليوم هو %s',
	'DAY'	=> 'يوم',
	'DAYS'	=> 'أيام',
	'DELETE'	=> 'حذف',
	'DELETE_ALL'	=> 'حذف الكل',
	'DELETE_COOKIES'	=> 'حذف الملفات المؤقتة',
	'DELETE_MARKED'	=> 'حذف المحدد',
	'DELETE_POST'	=> 'حذف المشاركة',
	'DELIMITER'	=> 'الفاصل',
	'DESCENDING'	=> 'تنازلياً',
	'DISABLED'	=> 'معطل',
	'DISPLAY'	=> 'عرض',
	'DISPLAY_GUESTS'	=> 'عرض الزوار',
	'DISPLAY_MESSAGES'	=> 'عرض رسائل سابقة منذ',
	'DISPLAY_POSTS'	=> 'عرض مشاركات سابقة منذ',
	'DISPLAY_TOPICS'	=> 'عرض مواضيع سابقة منذ',
	'DOWNLOADED'	=> 'تحميل',
	'DOWNLOADING_FILE'	=> 'تحميل ملف',
	'DOWNLOAD_COUNT'	=> '%d مرة',
	'DOWNLOAD_COUNTS'	=> '%d مرة',
	'DOWNLOAD_COUNT_NONE'	=> 'لم يُحمَّل من قبل',
	'VIEWED_COUNT'	=> 'شوهد %d مرة',
	'VIEWED_COUNTS'	=> 'شوهد %d مرات',
	'VIEWED_COUNT_NONE'	=> 'لم يشاهد من قبل',
	'EDIT_POST'	=> 'تعديل المشاركة',
	'EMAIL'	=> 'بريد',
	'EMAIL_ADDRESS'	=> 'البريد الإلكتروني',
	'EMAIL_SMTP_ERROR_RESPONSE'	=> 'هناك مشكلة في إرسال البريد الإلكتروني في <strong>السطر %1$s</strong>. الرد: %2$s',
	'EMPTY_SUBJECT'	=> 'ينبغي كتابة عنوان للموضوع',
	'EMPTY_MESSAGE_SUBJECT'	=> 'ينبغي عليك كتابة العنوان عند إنشاء رسالة جديدة',
	'ENABLED'	=> 'مفعّل',
	'ENCLOSURE'	=> 'Enclosure',
	'ERR_CHANGING_DIRECTORY'	=> 'غير قادر على تغيير الدليل',
	'ERR_CONNECTING_SERVER'	=> 'خطأ في الاتصال بالخادم',
	'ERR_JAB_AUTH'	=> 'غير مسموح باستخدام Jabber على الخادم',
	'ERR_JAB_CONNECT'	=> 'لا يمكن الاتصال بخادم Jabber',
	'ERR_UNABLE_TO_LOGIN'	=> 'خطأ في تسجيل الدخول. اسم المستخدم أو كلمة المرور غير صحيحة',
	'ERR_UNWATCHING'	=> 'حدث خطأ أثناء محاولة إلغاء الاشتراك .',
	'ERR_WATCHING'	=> 'حدث خطأ أثناء محاولة الاشتراك .',
	'ERR_WRONG_PATH_TO_PHPBB'	=> 'يبدو أن مسار phpBB الذي أدخلته غير صحيح',
	'EXPAND_VIEW'	=> 'عرض موسع',
	'EXTENSION'	=> 'امتدادات',
	'EXTENSION_DISABLED_AFTER_POSTING'	=> 'الامتداد <strong>%s</strong> معطّل الآن ولا يمكن عرضه',
	'FAQ'	=> 'الأسئلة المتكررة',
	'FAQ_EXPLAIN'	=> 'الأسئلة المتكررة',
	'FILENAME'	=> 'اسم الملف',
	'FILESIZE'	=> 'حجم الملف',
	'FILEDATE'	=> 'تاريخ الملف',
	'FILE_COMMENT'	=> 'التعليق',
	'FILE_NOT_FOUND'	=> 'لم يُعثَر على الملف المطلوب',
	'FIND_USERNAME'	=> 'بحث عن عضو',
	'FOLDER'	=> 'مجلد',
	'FORGOT_PASS'	=> 'فقدت كلمة المرور',
	'FORM_INVALID'	=> 'النموذج المقدم غير صحيح. حاول تقديمه مرة أخرى',
	'FORUM'	=> 'ساحة',
	'FORUMS'	=> 'ساحات',
	'FORUMS_MARKED'	=> 'عدّ جميع المنتديات مقروءة',
	'FORUM_CAT'	=> 'تصنيف منتدى',
	'FORUM_INDEX'	=> 'قائمة المنتديات',
	'FORUM_LINK'	=> 'رابط المنتدى',
	'FORUM_LOCATION'	=> 'مكان المنتدى',
	'FORUM_LOCKED'	=> 'منتدى مغلق',
	'FORUM_RULES'	=> 'قوانين المنتدى',
	'FORUM_RULES_LINK'	=> 'رجاءً اضغط لمشاهدة قوانين القسم',
	'FROM'	=> 'من',
	'FSOCK_DISABLED'	=> 'لا يمكن إكمال العملية لأن المهمة<var>fsockopen</var> عُطِلَت أو أن الخادم لا يدعم هذا الأمر',
	'FTP_FSOCK_HOST'	=> 'مستضيف FTP',
	'FTP_FSOCK_HOST_EXPLAIN'	=> 'مستضيف FTP المستخدم للاتصال بموقعك',
	'FTP_FSOCK_PASSWORD'	=> 'كلمة مرور FTP',
	'FTP_FSOCK_PASSWORD_EXPLAIN'	=> 'كلمة المرور الخاصة باسم مستخدم FTP',
	'FTP_FSOCK_PORT'	=> 'منفذ FTP',
	'FTP_FSOCK_PORT_EXPLAIN'	=> 'المنفذ المستخدم للاتصال بالخادم',
	'FTP_FSOCK_ROOT_PATH'	=> 'مسار phpBB',
	'FTP_FSOCK_ROOT_PATH_EXPLAIN'	=> 'المسار من المجلد الرئيسي لمنتداك phpBB',
	'FTP_FSOCK_TIMEOUT'	=> 'انتهاء الوقت FTP',
	'FTP_FSOCK_TIMEOUT_EXPLAIN'	=> 'الوقت بالثواني الذي ينبغي على النظام انتظاره للاستجابة من الخادم',
	'FTP_FSOCK_USERNAME'	=> 'اسم مستخدم FTP',
	'FTP_FSOCK_USERNAME_EXPLAIN'	=> 'اسم المستخدم المستعمل للاتصال بالخادم',
	'FTP_HOST'	=> 'مستضيف FTP',
	'FTP_HOST_EXPLAIN'	=> 'خادم FTP المستعمل للاتصال بموقعك',
	'FTP_PASSWORD'	=> 'كلمة مرور FTP',
	'FTP_PASSWORD_EXPLAIN'	=> 'كلمة المرور الخاصة باسم مستخدم FTP',
	'FTP_PORT'	=> 'FTP port',
	'FTP_PORT_EXPLAIN'	=> 'المنفذ المستخدم للاتصال بالخادم',
	'FTP_ROOT_PATH'	=> 'المسار إلى phpBB',
	'FTP_ROOT_PATH_EXPLAIN'	=> 'المسار من المجلد الرئيسي لمنتداك phpBB',
	'FTP_TIMEOUT'	=> 'انتهاء الوقت FTP',
	'FTP_TIMEOUT_EXPLAIN'	=> 'الوقت بالثواني الذي ينبغي على النظام انتظاره للاستجابة من الخادم',
	'FTP_USERNAME'	=> 'اسم مستخدم FTP',
	'FTP_USERNAME_EXPLAIN'	=> 'اسم المستخدم المستعمل للاتصال بالخادم',
	'GENERAL_ERROR'	=> 'خطأ عام',
	'GB'	=> 'GB',
	'GIB'	=> 'GiB',
	'GO'	=> 'انتقال',
	'GOTO_PAGE'	=> 'الانتقال إلى صفحة',
	'GROUP'	=> 'مجموعة',
	'GROUPS'	=> 'مجموعات',
	'GROUP_ERR_TYPE'	=> 'نوع المجموعة غير مناسب',
	'GROUP_ERR_USERNAME'	=> 'لم يُعَيّن اسم للمجموعة',
	'GROUP_ERR_USER_LONG'	=> 'اسم المجموعة طويل جداً',
	'GUEST'	=> 'زائر',
	'GUEST_USERS_ONLINE'	=> 'يوجد عدد %d زوار متصل',
	'GUEST_USERS_TOTAL'	=> '%d زوار',
	'GUEST_USERS_ZERO_ONLINE'	=> 'يوجد عدد 0 زائر متصل',
	'GUEST_USERS_ZERO_TOTAL'	=> '0 زائر',
	'GUEST_USER_ONLINE'	=> 'يوجد عدد %d زائر متصل',
	'GUEST_USER_TOTAL'	=> '%d زائر',
	'G_ADMINISTRATORS'	=> 'المدير العام',
	'G_BOTS'	=> 'محركات البحث',
	'G_GUESTS'	=> 'الزوار',
	'G_REGISTERED'	=> 'الأعضاء',
	'G_REGISTERED_COPPA'	=> 'أعضاء COPPA',
	'G_GLOBAL_MODERATORS'	=> 'مراقب عام',
	'G_NEWLY_REGISTERED'	=> 'آخر الأعضاء المسجلين',
	'HIDDEN_USERS_ONLINE'	=> '%d متخفي متصل',
	'HIDDEN_USERS_TOTAL'	=> '%d متخفي و ',
	'HIDDEN_USERS_TOTAL_AND'	=> '%d مخفي و ',
	'HIDDEN_USERS_ZERO_ONLINE'	=> '0 متخفي متصل',
	'HIDDEN_USERS_ZERO_TOTAL'	=> '0 متخفي و ',
	'HIDDEN_USERS_ZERO_TOTAL_AND'	=> '0 مخفي و ',
	'HIDDEN_USER_ONLINE'	=> '%d متخفي متصل',
	'HIDDEN_USER_TOTAL'	=> '%d متخفي و ',
	'HIDDEN_USER_TOTAL_AND'	=> '%d مخفي و ',
	'HIDE_GUESTS'	=> 'إخفاء الزوار',
	'HIDE_ME'	=> 'أخفِ حالة وجودي في المنتدى هذه المرة',
	'HOURS'	=> 'ساعات',
	'HOME'	=> 'الرئيسية',
	'ICQ'	=> 'ICQ',
	'ICQ_STATUS'	=> 'حالة ICQ',
	'IF'	=> 'إذا',
	'IMAGE'	=> 'صورة',
	'IMAGE_FILETYPE_INVALID'	=> 'نوع ملف الصورة %d لنوع الصورة %s  غير مدعوم',
	'IMAGE_FILETYPE_MISMATCH'	=> 'نوع ملف الصورة غير مطابق: التمدد المتوقع %1$s لكن التمدد المعطى هو %2$s',
	'IN'	=> 'في',
	'INDEX'	=> 'قائمة المنتديات',
	'INFORMATION'	=> 'معلومات',
	'INTERESTS'	=> 'اهتمامات',
	'INVALID_DIGEST_CHALLENGE'	=> 'غير مسموح digest challenge',
	'INVALID_EMAIL_LOG'	=> '<strong>%s</strong> يحتمل أن يكون عنوان بريدي خاطئا ؟',
	'IP'	=> 'IP',
	'IP_BLACKLISTED'	=> 'عنوان IP الخاص بك %1$s أوقِف لأنه من القائمة السوداء. لمزيد من المعلومات يرجى مراجعة <a href="%2$s">%2$s</a>',
	'JABBER'	=> 'Jabber',
	'JOINED'	=> 'اشترك في',
	'JUMP_PAGE'	=> 'ادخل رقم الصفحة التي تريد الذهاب إليها',
	'JUMP_TO'	=> 'الانتقال الى',
	'JUMP_TO_PAGE'	=> 'اضغط للانتقال للصفحة',
	'KB'	=> 'KB',
	'KIB'	=> 'KiB',
	'LAST_POST'	=> 'آخر مشاركة',
	'LAST_UPDATED'	=> 'آخر تحديث',
	'LAST_VISIT'	=> 'آخر زيارة',
	'LDAP_NO_LDAP_EXTENSION'	=> 'امتداد LDAP غير متوفر',
	'LDAP_NO_SERVER_CONNECTION'	=> 'لا يمكن الاتصال بخادم LDAP',
	'LDAP_SEARCH_FAILED'            => 'لقد حدث خطأ أثناء البحث عن امتداد LDAP',
	'LEGEND'	=> 'ألوان المجموعات',
	'LOCATION'	=> 'مكان',
	'LOCK_POST'	=> 'إغلاق المشاركة',
	'LOCK_POST_EXPLAIN'	=> 'منع التعديل',
	'LOCK_TOPIC'	=> 'إغلاق الموضوع',
	'LOGIN'	=> 'تسجيل الدخول',
	'LOGIN_CHECK_PM'	=> 'سجل الدخول لقراءة رسائلك الخاصة',
	'LOGIN_CONFIRMATION'	=> 'تأكيد تسجيل الدخول',
    'LOGIN_CONFIRM_EXPLAIN'            => 'لمنع محاولات اختراق الحسابات الآلية فإن المنتدى يطالبك بإدخال رمز أمني بعد استنفاذك لجميع محاولات تسجيل الدخول المتاحة. الرمز الأمني مكتوب في الصورة أدناه، إذا كنت غير قادر على قراءة الرموز فيرجى منك مراسلة %sمدير المنتدى%s', // unused
    'LOGIN_ERROR_ATTEMPTS'            => 'لقد تجاوزت الحد المسموح لك في محاولات تسجيل الدخول. الآن بالإضافة لاسم المستخدم وكلمة المرور يجب عليك أن تقوم بحلّ الرمز الأمني الموجود في الأسفل.',
	'LOGIN_ERROR_EXTERNAL_AUTH_APACHE'	=> 'ليست لديك صلاحية بواسطة الأباتشي',
	'LOGIN_ERROR_PASSWORD'	=> 'قد أدخلت كلمة مرور خاطئة. رجاءً تحقق من كلمة المرور وعاود المحاولة مرة أخرى. إذا كنت تواجه مشاكل اتصل بـ%sمدير المنتدى%s',
	'LOGIN_ERROR_PASSWORD_CONVERT'	=> 'لا يمكن تحويل كلمة المرور أثناء تحديث نظام المنتديات. رجاءً قم بـ %sطلب كلمة مرور جديدة%s. إذا كنت لا تزال تواجه المشاكل الرجاء الاتصال %sبإدارة الموقع%s',
	'LOGIN_ERROR_USERNAME'	=> 'لقد أدخلت اسم مستخدم خاطئ. رجاًء تحقق من اسم المستخدم وعاود المحاولة مرة أخرى. إذا كنت تواجه مشاكل اتصل بـ%sمدير المنتدى%s',
	'LOGIN_FORUM'	=> 'لمشاهدة هذا المنتدى أو المشاركة فيه ينبغي عليك أولاً إدخال كلمة المرور',
	'LOGIN_INFO'	=> 'ينبغي أن تكون مسجلاً لتستطيع الدخول. التسجيل لا يأخذ منك سوى بضع دقائق وسيعطيك مميزات أكثر. وقد تكون إدارة المنتدى خصصت صلاحيات أكثر للأعضاء المسجلين. قبل التسجيل تأكد أنك قرأتَ شروط المنتدى وسياساته وأنك موافق عليها. رجاءً تأكد من قراءتك لشروط كل قسم قبل المشاركة فيه',
	'LOGIN_VIEWFORUM'	=> 'ينبغي أن تكون عضواً مسجلاً لتستطيع مشاهدة هذا المنتدى',
	'LOGIN_EXPLAIN_EDIT'	=> 'لتستطيع التعديل على مشاركاتك ينبغي أن تكون عضواً في المنتدى',
	'LOGIN_EXPLAIN_VIEWONLINE'	=> 'لكي تشاهدة قائمة الموجودين ينبغي عليك التسجيل وتسجيل الدخول',
	'LOGOUT'	=> 'تسجيل الخروج',
	'LOGOUT_USER'	=> 'تسجيل خروج [ %s ]',
	'LOG_ME_IN'	=> 'الدخول تلقائياً',
	'MARK'	=> 'تحديد',
	'MARK_ALL'	=> 'تحديد الكل',
	'MARK_FORUMS_READ'	=> 'اعتبر جميع المنتديات مقروءة',
	'MB'	=> 'ميجابايت',
	'MIB'	=> 'MiB',
	'MCP'	=> 'لوحة تحكم المشرف',
	'MEMBERLIST'	=> 'قائمة الأعضاء',
	'MEMBERLIST_EXPLAIN'	=> 'مشاهدة قائمة الأعضاء كاملة',
	'MERGE'	=> 'دمج',
	'MERGE_POSTS'	=> 'دمج المشاركات',
	'MERGE_TOPIC'	=> 'دمج المواضيع',
	'MESSAGE'	=> 'رسالة',
	'MESSAGES'	=> 'رسائل',
	'MESSAGE_BODY'	=> 'جسم الرسالة',
	'MINUTES'	=> 'دقائق',
	'MODERATE'	=> 'إدارة',
	'MODERATOR'	=> 'المشرف',
	'MODERATORS'	=> 'المشرفون',
	'MONTH'	=> 'شهر',
	'MOVE'	=> 'نقل',
	'MSNM'	=> 'MSNM/WLM',
	'NA'	=> 'غير محدد',
	'NEWEST_USER'	=> 'آخر عضو مسجل <strong>%s</strong>',
	'NEW_MESSAGE'	=> 'رسالة جديدة',
	'NEW_MESSAGES'	=> 'رسائل جديدة',
	'NEW_PM'	=> 'لديك <strong>%d</strong> رسالة جديدة',
	'NEW_PMS'	=> 'لديك <strong>%d</strong> رسائل جديدة',
    'NEW_POST'               => 'مشاركة جديدة',   // Not used anymore
    'NEW_POSTS'               => 'مشاركات جديدة',   // Not used anymore
	'NEXT'	=> 'التالي',
	'NEXT_STEP'	=> 'الخطوة التالية',
	'NEVER'	=> 'أبداً',
	'NO'	=> 'لا',
	'NOT_ALLOWED_MANAGE_GROUP'	=> 'غير مصرح لك بإدارة هذه المجموعة',
	'NOT_AUTHORISED'	=> 'لا تملك الصلاحية لدخول هذه المنطقة',
	'NOT_WATCHING_FORUM'	=> 'لم تعد مشتركاً في هذا المنتدى',
	'NOT_WATCHING_TOPIC'	=> 'لم تعد مشتركاً في هذا الموضوع',
	'NOTIFY_ADMIN'	=> 'رجاءً أبلِغ إدارة المنتدى أو الموقع',
	'NOTIFY_ADMIN_EMAIL'	=> 'يرجى منك إخبار مدير المنتدى: <a href="mailto:%1$s">%1$s</a>',
	'NO_ACCESS_ATTACHMENT'	=> 'غير مسموح لك بتحميل هذا الملف',
	'NO_ACTION'	=> 'ليس هناك خيار محدد',
	'NO_ADMINISTRATORS'	=> 'ليس هناك مديرون لهذا المنتدى',
	'NO_AUTH_ADMIN'	=> 'لا تملك صلاحيات المدير وغير مسموح لك الدخول للوحة التحكم الرئيسية',
	'NO_AUTH_ADMIN_USER_DIFFER'	=> 'لا يمكنك إعادة تعريف نفسك باستخدام عضوية أخرى',
	'NO_AUTH_OPERATION'	=> 'لا تملك الصلاحيات اللازمة لإكمال هذه العملية',
	'NO_CONNECT_TO_SMTP_HOST'	=> 'لا يمكن الوصول إلى مستضيف smtp : %s : %s',
	'NO_BIRTHDAYS'	=> 'لا توجد أعياد ميلاد اليوم',
	'NO_EMAIL_MESSAGE'	=> 'الرسالة البريدية فارغة',
	'NO_EMAIL_RESPONSE_CODE'	=> 'لم نستطع جلب رد خادم البريد',
	'NO_EMAIL_SUBJECT'	=> 'لم يُعيّن عنوان الرسالة',
	'NO_FORUM'	=> 'المنتدى الذي اخترته غير موجود',
	'NO_FORUMS'	=> 'هذا المنتدى لا يحتوي على أقسام',
	'NO_GROUP'	=> 'المجموعة التي طلبتها غير موجودة',
	'NO_GROUP_MEMBERS'	=> 'هذه المجموعة ليس فيها أعضاء',
	'NO_IPS_DEFINED'	=> 'ليس هناك IP أو مستضيف محدد',
	'NO_MEMBERS'	=> 'لا يوجد عضو بهذه المعايير التي تبحث عنها',
	'NO_MESSAGES'	=> 'لا رسائل',
	'NO_MODE'	=> 'لم يُحدد أي نمط',
	'NO_MODERATORS'	=> 'لم يُعيّن أي مشرف في هذا المنتدى',
	'NO_NEW_MESSAGES'	=> 'لا رسائل جديدة',
	'NO_NEW_PM'	=> 'لا رسائل جديدة',
    'NO_NEW_POSTS'            => 'لا رسائل جديدة',   // Not used anymore
	'NO_ONLINE_USERS'	=> 'لا يوجد أعضاء مسجلين متصلين',
	'NO_POSTS'	=> 'لا مشاركات',
	'NO_POSTS_TIME_FRAME'	=> 'لا يوجد مشاركات في هذا الموضوع خلال الفترة الزمنية المحددة',
	'NO_FEED_ENABLED'	=> 'لا يوجد تغذية متاحة لهذا المنتدى Feeds.',
	'NO_FEED'	=> 'التغذية المطلوبة غير متاحة.',
	'NO_SUBJECT'	=> 'لا يوجد عنوان محدد',
	'NO_SUCH_SEARCH_MODULE'	=> 'البحث المحدد غير موجود',
	'NO_SUPPORTED_AUTH_METHODS'	=> 'لا توجد صلاحيات دعم الطرق',
	'NO_TOPIC'	=> 'الموضوع المطلوب غير موجود',
	'NO_TOPIC_FORUM'	=> 'الموضوع أو المنتدى المطلوب لم يعد موجوداً',
	'NO_TOPICS'	=> 'لا توجد مواضيع أو مشاركات في هذا المنتدى',
	'NO_TOPICS_TIME_FRAME'	=> 'لا يوجد مواضيع في هذا المنتدى خلال الفترة الزمنية المحددة',
	'NO_UNREAD_PM'	=> 'ليس لديك رسائل غير مقروءة',
	'NO_UNREAD_POSTS'         => 'لا يوجد مشاركات غير مقروءة',
	'NO_UPLOAD_FORM_FOUND'	=> 'تم الرفع بنجاح لكن لم يوجد شكل الملف',
	'NO_USER'	=> 'العضو المطلوب غير موجود',
	'NO_USERS'	=> 'الأعضاء المطلوبين غير موجودين',
	'NO_USER_SPECIFIED'	=> 'لم يُحدّد اسم مستخدم',

	'NUM_POSTS_IN_QUEUE'	=> array(
		'0'	=> 'لا مشاركات مخزنة',
		'1'	=> 'مشاركة واحدة مخزنة',
		'2'	=> '%d مشاركات مخزنة',
	),

	'OCCUPATION'	=> 'الوظيفة',
	'OFFLINE'	=> 'غير متصل',
	'ONLINE'	=> 'متصل',
	'ONLINE_BUDDIES'	=> 'قائمة الأصدقاء',
	'ONLINE_USERS_TOTAL'	=> 'الموجودون حالياً <strong>%d</strong> :: ',
	'ONLINE_USERS_ZERO_TOTAL'	=> 'الموجودون حالياً <strong>0</strong> :: ',
	'ONLINE_USER_TOTAL'	=> 'الموجودون حالياً <strong>%d</strong> :: ',
	'OPTIONS'	=> 'خيارات',
	'PAGE_OF'	=> 'صفحة <strong>%1$d</strong> من <strong>%2$d</strong>',
	'PASSWORD'	=> 'كلمة المرور',
	'PLAY_QUICKTIME_FILE'	=> 'تشغيل ملف Quicktime',
	'PM_REPORTED'         => 'اضغط لعرض التقرير',
	'PM'	=> 'رسالة خاصة',
	'POSTING_MESSAGE'	=> 'إرسال الرسالة في %s',
	'POSTING_PRIVATE_MESSAGE'	=> 'يرسل رسالة خاصة',
	'POST'	=> 'مشاركة',
	'POST_ANNOUNCEMENT'	=> 'إعلان',
	'POST_STICKY'	=> 'مثبت',
	'POSTED'	=> 'مرسل',
	'POSTED_IN_FORUM'	=> 'في',
	'POSTED_ON_DATE'	=> 'في',
	'POSTS'	=> 'مشاركات',
	'POSTS_UNAPPROVED'	=> 'رد واحد على الأقل لم يُوافق عليه في هذا الموضوع',
	'POST_BY_AUTHOR'	=> 'بواسطة',
	'POST_BY_FOE'	=> 'أرسلت هذه المشاركة بواسطة <strong>%1$s</strong> وهو موجود ضمن قائمة التجاهل لديك. لعرض هذه المشاركة اضغط %2$sهنا%3$s',
	'POST_DAY'	=> '%.2f مشاركة في اليوم',
	'POST_DETAILS'	=> 'تفاصيل المشاركة',
	'POST_NEW_TOPIC'	=> 'إرسال موضوع جديد',
	'POST_PCT'	=> '%.2f%% من كل المشاركات',
	'POST_PCT_ACTIVE'	=> '%.2f%% من مشاركاته',
	'POST_PCT_ACTIVE_OWN'	=> '%.2f%% من مشاركاته',
	'POST_REPLY'	=> 'إضافة رد',
	'POST_REPORTED'	=> 'اضغط لمشاهدة التقارير',
	'POST_SUBJECT'	=> 'عنوان المشاركة',
	'POST_TIME'	=> 'وقت الإرسال',
	'POST_TOPIC'	=> 'إضافة موضوع جديد',
	'POST_UNAPPROVED'	=> 'هذه المشاركة تنتظر الموافقة',
	'PREVIEW'	=> 'استعراض',
	'PREVIOUS'	=> 'السابق',
	'PREVIOUS_STEP'	=> 'السابق',
	'PRIVACY'	=> 'سياسة الخصوصية',
	'PRIVATE_MESSAGE'	=> 'رسالة خاصة',
	'PRIVATE_MESSAGES'	=> 'رسائل خاصة',
	'PRIVATE_MESSAGING'	=> 'إرسال خاص',
	'PROFILE'	=> 'لوحة التحكم',
	'READING_FORUM'	=> 'يشاهد المواضيع في %s',
	'READING_GLOBAL_ANNOUNCE'	=> 'يقرأ اعلان عام',
	'READING_LINK'	=> 'يتبع الرباط التالي %s',
	'READING_TOPIC'	=> 'يقرأ موضوع في %s',
	'READ_PROFILE'	=> 'يشاهد الملف الشخصي',
	'REASON'	=> 'السبب',
	'RECORD_ONLINE_USERS'	=> 'أكثر وجود في المنتدى كان <strong>%1$s</strong> في %2$s',
	'REDIRECT'	=> 'تحويل',
	'REDIRECTS'	=> 'إجمالي التحويلات',
	'REGISTER'	=> 'التسجيل',
	'REGISTERED_USERS'	=> 'الأعضاء الموجودون :',
	'REG_USERS_ONLINE'	=> 'يوجد عدد %d أعضاء مسجلين و ',
	'REG_USERS_TOTAL'	=> '%d أعضاء و ',
	'REG_USERS_TOTAL_AND'	=> '%d مسجلين و ',
	'REG_USERS_ZERO_ONLINE'	=> 'يوجد عدد 0 أعضاء مسجلين و ',
	'REG_USERS_ZERO_TOTAL'	=> '0 أعضاء و ',
	'REG_USERS_ZERO_TOTAL_AND'	=> '0 مسجلين و ',
	'REG_USER_ONLINE'	=> 'يوجد عدد %d عضو مسجل و ',
	'REG_USER_TOTAL'	=> '%d عضو و ',
	'REG_USER_TOTAL_AND'	=> '%d مسجلين و ',
	'REMOVE'	=> 'حذف',
	'REMOVE_INSTALL'	=> 'رجاءً احذف أو انقل أو غيّر اسم مجلد install',
	'REPLIES'	=> 'ردود',
	'REPLY_WITH_QUOTE'	=> 'رد مع اقتباس',
	'REPLYING_GLOBAL_ANNOUNCE'	=> 'يرد على اعلان عام',
	'REPLYING_MESSAGE'	=> 'يرد على رسالة في %s',
	'REPORT_BY'	=> 'التقرير بواسطة',
	'REPORT_POST'	=> 'تقرير عن هذه المشاركة',
	'REPORTING_POST'	=> 'تقرير المشاركة',
	'RESEND_ACTIVATION'	=> 'إعادة إرسال كود التفعيل',
	'RESET'	=> 'إعادة',
	'RESTORE_PERMISSIONS'	=> 'استعادة الصلاحيات',
	'RETURN_INDEX'	=> '%sالعودة للصفحة الرئيسية%s',
	'RETURN_FORUM'	=> '%sالرجوع إلى آخر منتدى قمت بزيارته%s',
	'RETURN_PAGE'	=> '%sالعودة للصفحة السابقة%s',
	'RETURN_TOPIC'	=> '%sالرجوع إلى آخر موضوع قمت بزيارته%s',
	'RETURN_TO'	=> 'العودة إلى',
	'FEED'	=> 'التغذية - Feed',
	'FEED_NEWS'	=> 'الأخبار - News',
	'RULES_ATTACH_CAN'	=> '<strong>تستطيع</strong> إرفاق ملف في هذا المنتدى',
	'RULES_ATTACH_CANNOT'	=> '<strong>لا تستطيع</strong> إرفاق ملف في هذا المنتدى',
	'RULES_DELETE_CAN'	=> '<strong>تستطيع</strong> حذف مشاركاتك في هذا المنتدى',
	'RULES_DELETE_CANNOT'	=> '<strong>لا تستطيع</strong> حذف مشاركاتك في هذا المنتدى',
	'RULES_DOWNLOAD_CAN'	=> '<strong>تستطيع</strong> تحميل المرفقات في هذا المنتدى',
	'RULES_DOWNLOAD_CANNOT'	=> '<strong>لا تستطيع</strong> تحميل المرفقات في هذا المنتدى',
	'RULES_EDIT_CAN'	=> '<strong>تستطيع</strong> تعديل مشاركاتك في هذا المنتدى',
	'RULES_EDIT_CANNOT'	=> '<strong>لا تستطيع</strong> تعديل مشاركاتك في هذا المنتدى',
	'RULES_LOCK_CAN'	=> '<strong>تستطيع</strong> إغلاق مواضيعك في هذا المنتدى',
	'RULES_LOCK_CANNOT'	=> '<strong>لا تستطيع</strong> إغلاق مواضيعك في هذا المنتدى',
	'RULES_POST_CAN'	=> '<strong>تستطيع</strong> كتابة مواضيع جديدة في هذا المنتدى',
	'RULES_POST_CANNOT'	=> '<strong>لا تستطيع</strong> كتابة مواضيع جديدة في هذا المنتدى',
	'RULES_REPLY_CAN'	=> '<strong>تستطيع</strong> كتابة ردود في هذا المنتدى',
	'RULES_REPLY_CANNOT'	=> '<strong>لا تستطيع</strong> كتابة ردود في هذا المنتدى',
	'RULES_VOTE_CAN'	=> '<strong>تستطيع</strong> التصويت في هذا المنتدى',
	'RULES_VOTE_CANNOT'	=> '<strong>لا تستطيع</strong> التصويت في هذا المنتدى',
	'SEARCH'	=> 'بحث',
	'SEARCH_MINI'	=> 'بحث …',
	'SEARCH_ADV'	=> 'بحث متقدم',
	'SEARCH_ADV_EXPLAIN'	=> 'عرض خيارات البحث المتقدم',
	'SEARCH_KEYWORDS'	=> 'البحث عن الكلمات',
	'SEARCHING_FORUMS'	=> 'بحث المنتديات',
	'SEARCH_ACTIVE_TOPICS'	=> 'المواضيع النشطة',
	'SEARCH_FOR'	=> 'البحث عن',
	'SEARCH_FORUM'	=> 'ابحث في المنتدى …',
	'SEARCH_NEW'	=> 'المشاركات الجديدة',
	'SEARCH_POSTS_BY'	=> 'ابحث في المشاركات بواسطة',
	'SEARCH_SELF'	=> 'عرض مشاركاتك',
	'SEARCH_TOPIC'	=> 'ابحث في الموضوع …',
	'SEARCH_UNANSWERED'	=> 'مواضيع لم يُرد عليها',
	'SEARCH_UNREAD'	=> 'المشاركات غير المقروءة',
	'SECONDS'	=> 'ثواني',
	'SELECT'	=> 'تحديد',
	'SELECT_ALL_CODE'	=> 'تحديد الكل',
	'SELECT_DESTINATION_FORUM'	=> 'فضلاً حدد المنتدى المطلوب',
	'SELECT_FORUM'	=> 'اختيار منتدى',
	'SEND_EMAIL'	=> 'إرسال بريد',
	'SEND_EMAIL_USER'	=> 'أرسل بريد الكتروني للعضو',
	'SEND_PRIVATE_MESSAGE'	=> 'ارسال رسالة خاصة',
	'SETTINGS'	=> 'إعدادات',
	'SIGNATURE'	=> 'التوقيع',
	'SKIP'	=> 'تجاهل المحتويات',
	'SMTP_NO_AUTH_SUPPORT'	=> 'لا يدعم خادم SMTP هذه الصلاحيات',
	'SORRY_AUTH_READ'	=> 'ليست لديك الصلاحية لقراءة محتويات هذا المنتدى',
	'SORRY_AUTH_VIEW_ATTACH'	=> 'لا تملك الصلاحية لتحميل هذا المرفق',
	'SORT_BY'	=> 'مرتبة بواسطة',
	'SORT_JOINED'	=> 'تاريخ الاشتراك',
	'SORT_LOCATION'	=> 'المكان',
	'SORT_RANK'	=> 'الرتبة',
	'SORT_POSTS'	=> 'المشاركات',
	'SORT_TOPIC_TITLE'	=> 'عنوان الموضوع',
	'SORT_USERNAME'	=> 'اسم المستخدم',
	'SPLIT_TOPIC'	=> 'تقسيم الموضوع',
	'SQL_ERROR_OCCURRED'	=> 'حدث خطأ SQL أثناء القيام باستدعاء الصفحة. إذا استمر الخطأ قم بمراسلة %sمدير المنتدى%s عن هذه المشكلة',
	'STATISTICS'	=> 'إحصائيات',
	'START_WATCHING_FORUM'	=> 'الاشتراك في هذه الساحة',
	'START_WATCHING_TOPIC'	=> 'الاشتراك في هذا الموضوع',
	'STOP_WATCHING_FORUM'	=> 'إلغاء الاشتراك في هذه الساحة',
	'STOP_WATCHING_TOPIC'	=> 'إلغاء الاشتراك في هذا الموضوع',
	'SUBFORUM'	=> 'منتدى فرعي',
	'SUBFORUMS'	=> 'منتديات فرعية',
	'SUBJECT'	=> 'عنوان',
	'SUBMIT'	=> 'إرسال',
	'TERMS_USE'	=> 'شروط الاستخدام',
	'TEST_CONNECTION'	=> 'اختبار الاتصال',
	'THE_TEAM'	=> 'أعضاء الإدارة',
	'TIME'	=> 'الوقت',
	'TOO_LARGE'                  => 'القيمة المدخلية كبيرة جداً',
    'TOO_LARGE_MAX_RECIPIENTS'      => '	إن قيمة <strong>عدد المستقبلين الأقصى للرسالة الخاصة</strong> كبير جداً.',
	'TOO_LONG'	=> 'القيمة المدخلة طويلة جداً.',
	'TOO_LONG_AIM'	=> 'screenname الذي ادخلته طويل جداً',
	'TOO_LONG_CONFIRM_CODE'	=> 'الرمز الأمني الذي أدخلته طويل جداً',
	'TOO_LONG_DATEFORMAT'	=> 'شكل التاريخ الذي أدخلته كبير جداً',
	'TOO_LONG_ICQ'	=> 'رقم ICQ الذي أدخلته طويل جداً',
	'TOO_LONG_INTERESTS'	=> 'الاهتمامات التي أدخلتها طويلة جداً',
	'TOO_LONG_JABBER'	=> 'حساب Jabber الذي أدخلته طويل جداً',
	'TOO_LONG_LOCATION'	=> 'المكان الذي أدخلته طويل جداً',
	'TOO_LONG_MSN'	=> 'ماسنجر MSN الذي أدخلته طويل جداً',
	'TOO_LONG_NEW_PASSWORD'	=> 'كلمة المرور التي أدخلتها طويلة جداً',
	'TOO_LONG_OCCUPATION'	=> 'الوظيفة التي أدخلتها طويلة جداً',
	'TOO_LONG_PASSWORD_CONFIRM'	=> 'تأكيد كلمة المرور التي أدخلتها طويل جداً',
	'TOO_LONG_USER_PASSWORD'	=> 'كلمة المرور التي أدخلتها طويلة جداً',
	'TOO_LONG_USERNAME'	=> 'اسم المستخدم الذي أدخلته طويل جداً',
	'TOO_LONG_EMAIL'	=> 'البريد الإلكتروني الذي أدخلته طويل جداً',
	'TOO_LONG_EMAIL_CONFIRM'	=> 'تأكيد البريد الإلكتروني الذي أدخلته طويل جداً',
	'TOO_LONG_WEBSITE'	=> 'صفحة الإنترنت التي أدخلتها طويلة جداً',
	'TOO_LONG_YIM'	=> 'ماسنجر Yahoo الذي أدخلته طويل جداً',
	'TOO_MANY_VOTE_OPTIONS'	=> 'حاولت أن تصوّت للعديد من الخيارات',
	'TOO_SHORT'	=> 'القيمة التي أدخلتها قصيرة جداً .',
	'TOO_SHORT_AIM'	=> 'الـscreenname الذي أدخلته قصير جداً',
	'TOO_SHORT_CONFIRM_CODE'	=> 'الرمز الأمني الذي أدخلته قصير جداً',
	'TOO_SHORT_DATEFORMAT'	=> 'شكل التاريخ الذي أدخلته صغير جداً',
	'TOO_SHORT_ICQ'	=> 'رقم ICQ الذي أدخلته قصير جداً',
	'TOO_SHORT_INTERESTS'	=> 'الاهتمامات التي أدخلتها قصيرة جداً',
	'TOO_SHORT_JABBER'	=> 'حساب Jabber الذي أدخلته قصير جداً',
	'TOO_SHORT_LOCATION'	=> 'المكان الذي أدخلته قصير جداً',
	'TOO_SHORT_MSN'	=> 'ماسنجر MSN الذي أدخلته قصير جداً',
	'TOO_SHORT_NEW_PASSWORD'	=> 'كلمة المرور التي أدخلتها قصيرة جداً',
	'TOO_SHORT_OCCUPATION'	=> 'الوظيفة التي أدخلتها قصيرة جداً',
	'TOO_SHORT_PASSWORD_CONFIRM'	=> 'تأكيد كلمة المرور التي أدخلتها قصير جداً',
	'TOO_SHORT_USER_PASSWORD'	=> 'كلمة المرور التي أدخلتها قصيرة جداً',
	'TOO_SHORT_USERNAME'	=> 'اسم المستخدم الذي أدخلته قصير جداً',
	'TOO_SHORT_EMAIL'	=> 'البريد الإلكتروني الذي أدخلته قصير جداً',
	'TOO_SHORT_EMAIL_CONFIRM'	=> 'تأكيد البريد الإلكتروني الذي أدخلته قصير جداً',
	'TOO_SHORT_WEBSITE'	=> 'صفحة الإنترنت التي أدخلتها قصيرة جداً',
	'TOO_SHORT_YIM'	=> 'ماسنجر !Yahoo الذي أدخلته قصير جداً',
	'TOO_SMALL'                  => '	القيمة المدخلية قصيرة جداً.',
    'TOO_SMALL_MAX_RECIPIENTS'      => 'إن قيمة <strong>عدد المستلمين الأقصى للرسالة الخاصة</strong> قصير جداً.',
	'TOPIC'	=> 'موضوع',
	'TOPICS'	=> 'مواضيع',
	'TOPICS_UNAPPROVED'	=> 'يوجد على الأقل موضوع واحد لم يُوافق عليه بعد.',
	'TOPIC_ICON'	=> 'أيقونة الموضوع',
	'TOPIC_LOCKED'	=> 'هذا الموضوع مغلق ، لا تستطيع تعديله أو إضافة الردود عليه',
	'TOPIC_LOCKED_SHORT'	=> 'الموضوع مغلق',
	'TOPIC_MOVED'	=> 'موضوع منقول',
	'TOPIC_REVIEW'	=> 'مراجعة الموضوع',
	'TOPIC_TITLE'	=> 'عنوان الموضوع',
	'TOPIC_UNAPPROVED'	=> 'لم يُوافق على هذا الموضوع',
	'TOTAL_ATTACHMENTS'	=> 'المرفقات',
	'TOTAL_LOG'	=> 'تسجيل واحد',
	'TOTAL_LOGS'	=> '%d سجلات',
	'TOTAL_NO_PM'	=> 'لا توجد رسائل خاصة',
	'TOTAL_PM'	=> 'مجموع الرسائل الخاصة رسالة واحدة',
	'TOTAL_PMS'	=> 'مجموع الرسائل الخاصة $d رسالة/رسائل',
	'TOTAL_POSTS'	=> 'عدد المشاركات',
	'TOTAL_POSTS_OTHER'	=> 'عدد المشاركات <strong>%d</strong>',
	'TOTAL_POSTS_ZERO'	=> 'عدد المشاركات <strong>0</strong>',
	'TOPIC_REPORTED'	=> 'تم التبليغ هذا الموضوع',
	'TOTAL_TOPICS_OTHER'	=> 'عدد المواضيع <strong>%d</strong>',
	'TOTAL_TOPICS_ZERO'	=> 'عدد المواضيع <strong>0</strong>',
	'TOTAL_USERS_OTHER'	=> 'عدد الأعضاء <strong>%d</strong>',
	'TOTAL_USERS_ZERO'	=> 'عدد الأعضاء <strong>0</strong>',
	'TRACKED_PHP_ERROR'	=> 'أخطاء تتبع PHP: %s',
	'UNABLE_GET_IMAGE_SIZE'	=> 'لم يتمكن من تحديد أبعاد الصورة',
	'UNABLE_TO_DELIVER_FILE'	=> 'غير قادر على توصيل الملف',
	'UNKNOWN_BROWSER'	=> 'متصفح غير معروف',
	'UNMARK_ALL'	=> 'إلغاء تحديد الكل',
	'UNREAD_MESSAGES'	=> 'رسائل غير مقروءة',
	'UNREAD_PM'	=> '<strong>%d</strong> رسالة غير مقروءة',
	'UNREAD_PMS'	=> '<strong>%d</strong> رسالة/رسائل غير مقروءة',
	'UNREAD_POST'         => 'مشاركة غير مقروءة',
    'UNREAD_POSTS'         => 'مشاركات غير مقروءة',
	'UNWATCHED_FORUMS'	=> 'لم تعد مشتركا في المنتديات المحددة',
	'UNWATCHED_TOPICS'	=> 'لم تعد مشتركا في المواضيع المحددة',
	'UNWATCHED_FORUMS_TOPICS'	=> 'لم تعد مشتركاً في المنتديات والمواضيع التي حددتها',
	'UPDATE'	=> 'تحديث',
	'UPLOAD_IN_PROGRESS'	=> 'جاري الرفع حالياً',
	'URL_REDIRECT'	=> 'إذا كان متصفحك لا يدعم الانتقال التلقائي اضغط %sهنا%s للانتقال',
	'USERGROUPS'	=> 'المجموعات',
	'USERNAME'	=> 'اسم المستخدم',
	'USERNAMES'	=> 'أسماء المستخدمين',
	'USER_AVATAR'	=> 'صورة العضو الشخصية',
	'USER_CANNOT_READ'	=> 'لا يمكنك قراءة المشاركات في هذا المنتدى',
	'USER_POST'	=> '%d مشاركة',
	'USER_POSTS'	=> '%d مشاركات',
	'USERS'	=> 'مستخدمين',
	'USE_PERMISSIONS'	=> 'تجربة صلاحيات هذا المستخدم',
	'USER_NEW_PERMISSION_DISALLOWED'	=> 'عذراً , لست مخوّلاً لاستخدام هذه الميزة. قد تكون عضواً جديداً في المنتدى و تحتاج إلى المزيد من المشاركة لتصبح هذه الميزة متاحة لك .',
	'VARIANT_DATE_SEPARATOR'	=> ' / ',
	'VIEWED'	=> 'شوهد',
	'VIEWING_FAQ'	=> 'مشاهدة الأسئلة المتكررة',
	'VIEWING_MEMBERS'	=> 'يشاهد قائمة الأعضاء',
	'VIEWING_ONLINE'	=> 'يشاهد الموجودين الآن',
	'VIEWING_MCP'	=> 'مشاهدة لوحة تحكم المشرف',
	'VIEWING_MEMBER_PROFILE'	=> 'يشاهد الملف الشخصي لأحد الأعضاء',
	'VIEWING_PRIVATE_MESSAGES'	=> 'يشاهد الرسائل الخاصة',
	'VIEWING_REGISTER'	=> 'يسجل عضوية جديدة',
	'VIEWING_UCP'	=> 'يشاهد لوحة تحكم العضو',
	'VIEWS'	=> 'مشاهدات',
	'VIEW_BOOKMARKS'	=> 'شاهد المفضلات',
	'VIEW_FORUM_LOGS'	=> 'شاهد التسجيلات',
	'VIEW_LATEST_POST'	=> 'شاهد آخر مشاركة',
	'VIEW_NEWEST_POST'	=> 'شاهد أحدث مشاركة',
	'VIEW_NOTES'	=> 'شاهد مذكرات الأعضاء',
	'VIEW_ONLINE_TIME'	=> 'هذه البيانات تعتمد على الأعضاء النشيطين خلال دقائق %d ماضية',
	'VIEW_ONLINE_TIMES'	=> 'هذه البيانات تعتمد على الأعضاء النشيطين خلال دقائق %d ماضية',
	'VIEW_TOPIC'	=> 'مشاهدة الموضوع',
	'VIEW_TOPIC_ANNOUNCEMENT'	=> 'إعلان: ',
	'VIEW_TOPIC_GLOBAL'	=> 'اعلان عام: ',
	'VIEW_TOPIC_LOCKED'	=> 'مغلق: ',
	'VIEW_TOPIC_LOGS'	=> 'شاهد السجلات',
	'VIEW_TOPIC_MOVED'	=> 'انتقل: ',
	'VIEW_TOPIC_POLL'	=> 'تصويت: ',
	'VIEW_TOPIC_STICKY'	=> 'مثبت: ',
	'VISIT_WEBSITE'	=> 'زيارة الموقع',
	'WARNINGS'	=> 'تحذيرات',
	'WARN_USER'	=> 'تحذير العضو',
	'WELCOME_SUBJECT'	=> 'أهلا وسهلا بك في منتديات %s',
	'WEBSITE'	=> 'WWW',
	'WHOIS'	=> 'Whois',
	'WHO_IS_ONLINE'	=> 'الموجودون الآن',
	'WRONG_PASSWORD'	=> 'لقد أدخلت كلمة مرور خاطئة',
	'WRONG_DATA_ICQ'	=> 'رقم ICQ الذي أدخلته قيمة خاطئة',
	'WRONG_DATA_JABBER'	=> 'اسم حساب Jabber الذي أدخلته غير صحيح',
	'WRONG_DATA_LANG'	=> 'اللغة التي حددتها ليست صحيحة',
	'WRONG_DATA_WEBSITE'	=> 'عنوان الموقع الذي أدخلته غير صحيح. مثال http://www.phpbbarabia.com',
	'WROTE'	=> 'كتب',
	'YEAR'	=> 'سنة',
	'YEAR_MONTH_DAY'	=> '(YYYY-MM-DD)',
	'YES'	=> 'نعم',
	'YIM'	=> 'YIM',
	'YOU_LAST_VISIT'	=> 'آخر زيارة كانت في: %s',
	'YOU_NEW_PM'	=> 'لديك رسالة خاصة جديدة في صندوق الوارد',
	'YOU_NEW_PMS'	=> 'لديك رسائل خاصة جديدة في صندوق الوارد',
	'YOU_NO_NEW_PM'	=> 'لا توجد رسائل خاصة جديدة في صندوق الوارد',

	'datetime'	=> array(
		'TODAY'	=> 'اليوم',
		'TOMORROW'	=> 'غداً',
		'YESTERDAY'	=> 'الامس',

		'AGO'	=> array(
			'0'	=> 'اقل من دقيقة مضت',
			'1'	=> '%d دقيقه مضت',
			'2'	=> '%d دقائق مضت',
			'60'	=> 'ساعة مضت',
		),

		'Sunday'	=> 'الأحد',
		'Monday'	=> 'الاثنين',
		'Tuesday'	=> 'الثلاثاء',
		'Wednesday'	=> 'الأربعاء',
		'Thursday'	=> 'الخميس',
		'Friday'	=> 'الجمعة',
		'Saturday'	=> 'السبت',
		'Sun'	=> 'الأحد',
		'Mon'	=> 'الاثنين',
		'Tue'	=> 'الثلاثاء',
		'Wed'	=> 'الأربعاء',
		'Thu'	=> 'الخميس',
		'Fri'	=> 'الجمعة',
		'Sat'	=> 'السبت',
		'January'	=> 'يناير',
		'February'	=> 'فبراير',
		'March'	=> 'مارس',
		'April'	=> 'إبريل',
		'May'	=> 'مايو',
		'June'	=> 'يونيو',
		'July'	=> 'يوليو',
		'August'	=> 'أغسطس',
		'September'	=> 'سبتمبر',
		'October'	=> 'أكتوبر',
		'November'	=> 'نوفمبر',
		'December'	=> 'ديسمبر',
		'Jan'	=> 'يناير',
		'Feb'	=> 'فبراير',
		'Mar'	=> 'مارس',
		'Apr'	=> 'إبريل',
		'May_short'	=> 'مايو',
		'Jun'	=> 'يونيو',
		'Jul'	=> 'يوليو',
		'Aug'	=> 'أغسطس',
		'Sep'	=> 'سبتمبر',
		'Oct'	=> 'أكتوبر',
		'Nov'	=> 'نوفمبر',
		'Dec'	=> 'ديسمبر',
	),


	'tz'	=> array(
		'-12'	=> 'GMT - 12 ساعة',
		'-11'	=> 'GMT - 11 ساعة',
		'-10'	=> 'GMT - 10 ساعة',
		'-9.5'	=> 'GMT - 9:30 ساعة',
		'-9'	=> 'GMT - 9 ساعات',
		'-8'	=> 'GMT - 8 ساعات',
		'-7'	=> 'GMT - 7 ساعات',
		'-6'	=> 'GMT - 6 ساعات',
		'-5'	=> 'GMT - 5 ساعات',
		'-4.5'	=> 'UTC - 4:30 ساعات',
		'-4'	=> 'GMT - 4 ساعات',
		'-3.5'	=> 'GMT - 3:30 ساعة',
		'-3'	=> 'GMT - 3 ساعات',
		'-2'	=> 'GMT - ساعتان',
		'-1'	=> 'GMT - ساعة',
		'0'	=> 'GMT',
		'1'	=> 'GMT + ساعة',
		'2'	=> 'GMT + ساعتين ',
		'3'	=> 'GMT + 3 ساعات',
		'3.5'	=> 'GMT + 3:30 ساعات',
		'4'	=> 'GMT + 4 ساعات',
		'4.5'	=> 'GMT + 4:30 ساعة',
		'5'	=> 'GMT + 5 ساعات',
		'5.5'	=> 'GMT + 5:30 ساعة',
		'5.75'	=> 'GMT + 5:45 ساعة',
		'6'	=> 'GMT + 6 ساعات',
		'6.5'	=> 'GMT + 6:30 ساعة',
		'7'	=> 'GMT + 7 ساعات',
		'8'	=> 'GMT + 8 ساعات',
		'8.75'	=> 'GMT + 8:45 ساعة',
		'9'	=> 'GMT + 9 ساعات',
		'9.5'	=> 'GMT + 9:30 ساعة',
		'10'	=> 'GMT + 10 ساعات',
		'10.5'	=> 'GMT + 10:30 ساعة',
		'11'	=> 'GMT + 11 ساعة',
		'11.5'	=> 'GMT + 11:30 ساعة',
		'12'	=> 'GMT + 12 ساعة',
		'12.75'	=> 'GMT + 12:45 ساعة',
		'13'	=> 'GMT + 13 ساعة',
		'14'	=> 'GMT + 14 ساعة',
		'dst'	=> '[ DST ]',
	),


	'tz_zones'	=> array(
		'-12'	=> '[GMT - 12] Baker Island Time',
		'-11'	=> '[GMT - 11] Niue Time, Samoa Standard Time',
		'-10'	=> '[GMT - 10] Hawaii-Aleutian Standard Time, Cook Island Time',
		'-9.5'	=> '[GMT - 9:30] Marquesas Islands Time',
		'-9'	=> '[GMT - 9] Alaska Standard Time, Gambier Island Time',
		'-8'	=> '[GMT - 8] Pacific Standard Time',
		'-7'	=> '[GMT - 7] Mountain Standard Time',
		'-6'	=> '[GMT - 6] Central Standard Time',
		'-5'	=> '[GMT - 5] Eastern Standard Time',
		'-4.5'	=> '[GMT - 4:30] Venezuelan Standard Time',
		'-4'	=> '[GMT - 4] Atlantic Standard Time',
		'-3.5'	=> '[GMT - 3:30] Newfoundland Standard Time',
		'-3'	=> '[GMT - 3] Amazon Standard Time, Central Greenland Time',
		'-2'	=> '[GMT - 2] Fernando de Noronha Time, South Georgia &amp; the South Sandwich Islands Time',
		'-1'	=> '[GMT - 1] Azores Standard Time, Cape Verde Time, Eastern Greenland Time',
		'0'	=> '[GMT] Western European Time, Greenwich Mean Time',
		'1'	=> '[GMT + 1] Central European Time, West African Time',
		'2'	=> '[GMT + 2] Cairo, Helsinki, Kaliningrad, South Africa',
		'3'	=> '[GMT + 3] Baghdad, Riyadh, Moscow, Nairobi',
		'3.5'	=> '[GMT + 3:30] Iran Standard Time',
		'4'	=> '[GMT + 4] Abu Dhabi, Baku, Muscat, Tbilisi',
		'4.5'	=> '[GMT + 4:30] Afghanistan Time',
		'5'	=> '[GMT + 5] Pakistan Standard Time, Yekaterinburg Standard Time',
		'5.5'	=> '[GMT + 5:30] Indian Standard Time, Sri Lanka Time',
		'5.75'	=> '[GMT + 5:45] Nepal Time',
		'6'	=> '[GMT + 6] Bangladesh Time, Bhutan Time, Novosibirsk Standard Time',
		'6.5'	=> '[GMT + 6:30] Cocos Islands Time, Myanmar Time',
		'7'	=> '[GMT + 7] Indochina Time, Krasnoyarsk Standard Time',
		'8'	=> '[GMT + 8] Chinese Standard Time, Australian Western Standard Time, Irkutsk Standard Time',
		'8.75'	=> '[GMT + 8:45] Southeastern Western Australia Standard Time',
		'9'	=> '[GMT + 9] Japan Standard Time, Korea Standard Time, Chita Standard Time',
		'9.5'	=> '[GMT + 9:30] Australian Central Standard Time',
		'10'	=> '[GMT + 10] Australian Eastern Standard Time, Vladivostok Standard Time',
		'10.5'	=> '[GMT + 10:30] Lord Howe Standard Time',
		'11'	=> '[GMT + 11] Solomon Island Time, Magadan Standard Time',
		'11.5'	=> '[GMT + 11:30] Norfolk Island Time',
		'12'	=> '[GMT + 12] New Zealand Time, Fiji Time, Kamchatka Standard Time',
		'12.75'	=> '[GMT + 12:45] Chatham Islands Time',
		'13'	=> '[GMT + 13] Tonga Time, Phoenix Islands Time',
		'14'	=> '[GMT + 14] Line Island Time',
	),


	'dateformats'	=> array(
		'd M Y, H:i'	=> '01 Jan 2007, 13:37',
		'd M Y H:i'	=> '01 Jan 2007 13:37',
		'M jS, \'y, H:i'	=> 'Jan 1st, \'07, 13:37',
		'D M d, Y g:i a'	=> 'Mon Jan 01, 2007 1:37 pm',
		'F jS, Y, g:i a'	=> 'January 1st, 2007, 1:37 pm',
		'|d M Y|, H:i'	=> 'Today, 13:37 / 01 Jan 2007, 13:37',
		'|F jS, Y|, g:i a'	=> 'Today, 1:37 pm / January 1st, 2007, 1:37 pm',
	),

	'default_dateformat'	=> 'D M d, Y g:i a',
));

?>