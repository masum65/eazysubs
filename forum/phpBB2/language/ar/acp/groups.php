<?php
/**
*
* acp_groups.php [Arabic]
*
* @package language
* @version $Id: $
* @copyright (c) 2008 phpBB Group
* @author 2008-11-14 - phpBBArabia.com
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
	'ACP_GROUPS_MANAGE_EXPLAIN'		=> 'من هذه الصفحة تستطيع إدارة المجموعات كلها, تستطيع حذف و إنشاء و تعديل أي مجموعة موجودة. ولك أن تختار رؤساء المجموعة, أيضاً خاصية فتح/غلق/إخفاء  المجموعة ووضع اسم المجموعة مع الوصف',
	'ADD_USERS'						=> 'إضافة أعضاء',
	'ADD_USERS_EXPLAIN'				=> 'هنا تستطيع إضافة أعضاء جدد إلى مجموعة. تستطيع أن تحدد إذا كانت هذه المجموعة هي المجموعة الافتراضية الجديدة للأعضاء المحددين. إضافة إلى أنك تستطيع جعلهم رؤساء المجموعة. الرجاء كتابة كل اسم مستخدم في سطر جديد',

	'COPY_PERMISSIONS'				=> 'نسخ الصلاحيات من',
	'COPY_PERMISSIONS_EXPLAIN'		=> 'بمجرد إنشائها, المجموعة الجديدة ستحمل نفس صلاحيات المجموعة التي ستحددها هنا',
	'CREATE_GROUP'					=> 'إنشاء مجموعة جديدة',
	
	'GROUPS_NO_MEMBERS'				=> 'لا يوجد أعضاء بهذه المجموعة',
	'GROUPS_NO_MODS'				=> 'لم يتعيّن أي رئيس لهذه المجموعة',
	
	'GROUP_APPROVE'					=> 'الموافقة على العضو',
	'GROUP_APPROVED'				=> 'أعضاء تمت الموافقة عليهم',
	'GROUP_AVATAR'					=> 'الصورة الشخصية للمجموعة',
	'GROUP_AVATAR_EXPLAIN'			=> 'هذه الصورة سوف تظهر في لوحة تحكم المجموعة',
	'GROUP_CLOSED'					=> 'مغلقة',
	'GROUP_COLOR'					=> 'لون المجموعة',
	'GROUP_COLOR_EXPLAIN'			=> 'تحديد لون "اسم المستخدم" الذي سيتلون به الأعضاء, إذا أردت الافتراضي اتركه فارغاً',
	'GROUP_CONFIRM_ADD_USER'		=> 'هل أنت متأكد من اضافة العضو %1$s الى المجموعة ؟',
	'GROUP_CONFIRM_ADD_USERS'		=> 'هل أنت متأكد من إضافة الأعضاء %1$s إلى المجموعة ؟',
	'GROUP_CREATED'					=> 'أنشِأت المجموعة بنجاح',
	'GROUP_DEFAULT'					=> 'جعل المجموعة الافتراضية للعضو',
	'GROUP_DEFS_UPDATED'			=> 'تعينت المجموعة الافتراضية لكل الأعضاء المحددين',
	'GROUP_DELETE'					=> 'حذف العضو من المجموعة',
	'GROUP_DELETED'					=> 'حُذفت المجموعة بنجاح واختيار مجموعات الأعضاء الافتراضية',
	'GROUP_DEMOTE'					=> 'إلغاء رئاسة المجموعة',
	'GROUP_DESC'					=> 'وصف المجموعة',
	'GROUP_DETAILS'					=> 'معلومات المجموعة',
	'GROUP_EDIT_EXPLAIN'			=> 'هنا تستطيع تعديل مجموعة موجودة. تستطيع تغيير اسمها ووصفها ونوعها (مفتوحة, مغلقة, ..وهكذا.). تستطيع أيضا تحديد خيارات خاصة للمجموعة مثل اللون, الرتبة, وغيرها. التغييرات التي تجري هنا تلغي كل الإعدادات الحالية للمستخدمين. يرجى ملاحظة أن أعضاء المجموعة يستطيعون تغيير صورهم الشخصية ما لم تضبط الصلاحيات المناسبة لمنع ذلك',
	'GROUP_ERR_USERS_EXIST'			=> 'الأعضاء المحددون موجودون سابقاً في هذه المجموعة',
	'GROUP_FOUNDER_MANAGE'			=> 'إدارة من المؤسس فقط',
	'GROUP_FOUNDER_MANAGE_EXPLAIN'	=> 'تقييد إدارة هذه المجموعة للمؤسسين فقط. المستخدمون الذين يمتلكون صلاحيات المجموعات يستطيعون رؤية هذه المجموعة كما هو الحال أيضاً مع أعضاء هذه المجموعة ',
	'GROUP_HIDDEN'					=> 'مخفية',
	'GROUP_LANG'					=> 'لغة المجموعة',
	'GROUP_LEAD'					=> 'رؤساء المجموعة',
	'GROUP_LEADERS_ADDED'			=> 'أضيف رؤساء جدد بنجاح',
	'GROUP_LEGEND'					=> 'عرض المجموعة في قائمة الألوان',
	'GROUP_LIST'					=> 'الأعضاء الحاليون',
	'GROUP_LIST_EXPLAIN'			=> 'هذه لائحة كاملة للمستخدمين كلهم الذين يملكون عضوية في هذه المجموعة. تستطيع حذف الأعضاء (باستثناء بعض المجموعات الخاصة) أو إضافة آخرين كما تريد',
	'GROUP_MEMBERS'					=> 'أعضاء المجموعة',
	'GROUP_MEMBERS_EXPLAIN'			=> 'هذه لائحة بأعضاء هذه المجموعة كلهم. تحتوي على جداول متفرقة للرؤساء والمنتظرين الموافقة والأعضاء. من هنا تستطيع إدارة جوانب العضويات جميعها ودورها في هذه المجموعة. لحذف رئيس المجموعة وإبقاءه عضوا في المجموعة استعمل إلغاء رئاسة المجموعة بدلاً من الحذف. كما تستطيع استخدام ترقية لجعل عضوية عادية رئيساً للمجموعة',
	'GROUP_MESSAGE_LIMIT'			=> 'عدد الرسائل الخاصة لكل مجلد للمجموعة',
	'GROUP_MESSAGE_LIMIT_EXPLAIN'	=> 'هذا الخيار يستبدل عدد الرسائل المحددة لكل عضو. القيمة 0 تعني أن العدد الافتراضي للعضو سيتم استخدامه',
	'GROUP_MODS_ADDED'				=> 'أضيفَ رؤساء جدد للمجموعة بنجاح',
	'GROUP_MODS_DEMOTED'			=> 'أنز ِل رؤساء المجموعة بنجاح',
	'GROUP_MODS_PROMOTED'			=> 'ترقـّى أعضاء المجموعة بنجاح',
	'GROUP_NAME'					=> 'اسم المجموعة',
	'GROUP_NAME_TAKEN'				=> 'اسم المجموعة الذي استعملته موجود مسبقاً, رجاءً اختر اسماً اخر',
	'GROUP_OPEN'					=> 'مفتوحة',
	'GROUP_PENDING'					=> 'أعضاء قيد الانتظار',
	'GROUP_MAX_RECIPIENTS'			=> 'الحد الأعلى للمستقبلين مقابل رسالة خاصة',
	'GROUP_MAX_RECIPIENTS_EXPLAIN'	=> 'الحد الأعلى لمستقبلي الرسالة الخاصة ، إذا جعلتها 0 فسيستَخدَم اعدادت المنتدى الأصلية',
	'GROUP_OPTIONS_SAVE'			=> 'خيارات المجموعة',
	'GROUP_PROMOTE'					=> 'ترقية إلى رئيس المجموعة',
	'GROUP_RANK'					=> 'رتبة المجموعة',
	'GROUP_RECEIVE_PM'				=> 'السماح للمجموعة باستقبال الرسائل الخاصة',
	'GROUP_RECEIVE_PM_EXPLAIN'		=> 'يرجى ملاحظة أن المجموعات المخفية لن تقبل المراسلة, بغض النظر عن هذا الخيار',
	'GROUP_REQUEST'					=> 'بالطلب',
	'GROUP_SETTINGS_SAVE'			=> 'الخيارات العامة للمجموعة',
	'GROUP_SKIP_AUTH'				=> 'إعفاء رئيس المجموعة من التصاريح',
	'GROUP_SKIP_AUTH_EXPLAIN'		=> 'إذا تفعّلت هذه الخاصية , لن تطبَق تصاريح هذه المجموعة على رئيس المجموعة.',
	'GROUP_TYPE'					=> 'نوع المجموعة',
	'GROUP_TYPE_EXPLAIN'			=> 'هذا يحدد الأعضاء الذين يستطيعون مشاهدة هذه المجموعة أو الانضمام إليها',
	'GROUP_UPDATED'					=> 'تم تحديث تفضيلات المجموعة بنجاح',
	
	'GROUP_USERS_ADDED'				=> 'أضيفـَت عضويات جديدة إلى المجموعة بنجاح',
	'GROUP_USERS_EXIST'				=> 'الأعضاء المحددون موجودون من قبل',
	'GROUP_USERS_REMOVE'			=> 'حـُذفَ الأعضاء المحددين وإضافة الافتراضيات بنجاح',
	
	'MAKE_DEFAULT_FOR_ALL'	=> 'جعل المجموعة افتراضية لكل الأعضاء',
	'MEMBERS'				=> 'أعضاء',
	
	'NO_GROUP'					=> 'لم تتحدد أية مجموعة',
	'NO_GROUPS_CREATED'			=> 'لم تنشَأ أية مجموعة بعد',
	'NO_PERMISSIONS'			=> 'لا تنسخ الصلاحيات',
	'NO_USERS'					=> 'لم تدخِل أي أعضاء',
	'NO_USERS_ADDED'			=> 'لم يُضَف أعضاء للمجموعة',
	'NO_VALID_USERS'			=> 'لم تدخِل أعضاء للقيام بهذه العملية',
	
	'SPECIAL_GROUPS'			=> 'مجموعات معرفة مسبقاً',
	'SPECIAL_GROUPS_EXPLAIN'	=> 'المجموعات المعرفة سابقاً عبارة عن مجموعات خاصة، لا تستطيع حذفها أو تعديلها مباشرة. ولكن بإمكانك إضافة الأعضاء وتعديل الخيارات الأساسية',

	'TOTAL_MEMBERS'				=> 'الأعضاء',
	
	'USERS_APPROVED'				=> 'تمت الموافقة على الأعضاء بنجاح',
	'USER_DEFAULT'					=> 'الافتراضية للعضو',
	'USER_DEF_GROUPS'				=> 'مجموعات العضو',
	'USER_DEF_GROUPS_EXPLAIN'		=> 'المجموعات التالية تم إنشائها من طرفك أو من طرف مدير آخر. تستطيع إدارة الأعضاء كما تستطيع أيضاً تعديل خصائص المجموعة أو حتى حذفها',
	'USER_GROUP_DEFAULT'			=> 'تحديد كمجموعة افتراضية',
	'USER_GROUP_DEFAULT_EXPLAIN'	=> 'باختيارك نعم ستصبح المجموعة افتراضية للأعضاء المحددين',
	'USER_GROUP_LEADER'				=> 'تحديد رئيساً للمجموعة',
));

?>