<?php
/**
*
* acp_styles [Japanese]
*
* @package language
* @version $Id: styles.php 10074 2009-08-31 11:25:28Z acydburn $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
* Translator: ocean=Yohsuke < n/a > ( n/a ) http://bbmods.info/bbs/
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
	'ACP_IMAGESETS_EXPLAIN'	=> 'イメージセットとは画像ファイルの集まりの事です。イメージセットはボタン画像、アイコン画像等から構成され、スマイリーは含みません。ここではイメージセットの編集、エクスポート、削除、インポート、有効化を行うことができます。',
	'ACP_STYLES_EXPLAIN'	=> 'ここではスタイルの管理を行うことができます。スタイルとは phpBB3 のデザイン（HTML、CSS、画像）を定義するファイルの集まりの事です。スタイルはテンプレートセット （HTMLファイル、JavaScriptファイル）、テーマ （CSSファイル）、イメージセット （画像ファイル） から構成されます。ここではスタイルの編集、削除、有効化/無効化、作成、インポートを行うことができます。プレビューする事によってそのスタイルがどのようなデザインなのかを実際に見て確認する事もできます。スタイル名の後ろのアスタリスク（*）は、そのスタイルが掲示板のデフォルトスタイルである事を意味しています。スタイル名の隣の数字は登録ユーザー （ボット含む） が選択しているスタイルの数です。ユーザーのスタイルをデフォルトスタイルに上書きするように設定している場合でもユーザーが選択しているスタイルがカウントされる点にご注意ください。',
	'ACP_TEMPLATES_EXPLAIN'	=> 'テンプレートセットとはテンプレートファイル （HTMLファイル） と JavaScriptファイル の集まりの事です。ここではテンプレートセットの編集、削除、エクスポート、インストール等を行うことができます。テンプレートファイル内のコードを直接編集する事も可能です。',
	'ACP_THEMES_EXPLAIN'	=> 'ここではテーマの作成、インストール、編集、削除、エクスポートを行うことができます。テーマとは CSSファイル と、背景画像のような掲示板の基礎を構成する画像ファイルの集まりの事です。利用できるオプションの種類はサーバ環境設定と phpBB3 インストール時の設定に依存します。詳細を知るにはマニュアルを参照してください。もし新しいテーマを作成する場合、既存のテーマを利用するかどうかを選択できます。',
	'ADD_IMAGESET'			=> 'イメージセットの作成',
	'ADD_IMAGESET_EXPLAIN'	=> 'ここではイメージセットの作成を行うことができます。ここで利用できるオプションの種類はサーバ環境とファイルアクセス権の設定に依存します。オプションの例として、イメージセットを作成する際に既存のイメージセットを土台にできたり、イメージセットをアップロードまたは保管ディレクトリからインポートできたりします。',
	'ADD_STYLE'				=> '新しいスタイルを作成する',
	'ADD_STYLE_EXPLAIN'		=> 'ここではスタイルの作成を行うことができます。ここで利用できるオプションの種類はサーバ環境とファイルアクセス権の設定に依存します。 オプションの例として、スタイルを作成する際に既存のスタイルを土台にできたり、スタイルをアップロードまたは保管ディレクトリからインポートできたりします。',
	'ADD_TEMPLATE'			=> 'テンプレートセットの作成',
	'ADD_TEMPLATE_EXPLAIN'	=> 'ここではテンプレートセットの作成を行うことができます。ここで利用できるオプションの種類はサーバ環境とファイルアクセス権の設定に依存します。オプションの例として、テンプレートセットを作成する際に既存のテンプレートセットを土台にできたり、テンプレートセットをアップロードまたは保管ディレクトリからインポートできたりします。',
	'ADD_THEME'				=> 'テーマの作成',
	'ADD_THEME_EXPLAIN'		=> 'ここではテーマの作成を行うことができます。ここで利用できるオプションの種類はサーバ環境とファイルアクセス権の設定に依存します。オプションの例として、テーマの作成に当たって既存のテーマを土台にできたり、テーマのアップロードまたは保管ディレクトリからインポートできたりします。',
	'ARCHIVE_FORMAT'		=> '圧縮形式',
	'AUTOMATIC_EXPLAIN'		=> 'phpBB3 の自動検知プログラムを試みる場合は空白にしてください',

	'BACKGROUND'			=> '背景',
	'BACKGROUND_COLOUR'		=> '背景色',
	'BACKGROUND_IMAGE'		=> '背景画像',
	'BACKGROUND_REPEAT'		=> '背景画像の繰り返し',
	'BOLD'					=> '太字',

	'CACHE'							=> 'キャッシュ',
	'CACHE_CACHED'					=> 'キャッシュファイルの作成日時',
	'CACHE_FILENAME'				=> 'テンプレートファイル',
	'CACHE_FILESIZE'				=> 'ファイルサイズ',
	'CACHE_MODIFIED'				=> 'テンプレートファイルのハック日時',
	'CONFIRM_IMAGESET_REFRESH'		=> 'イメージセットを本当にリフレッシュしてもよろしいですか？ イメージセットは全て初期化されます。',
	'CONFIRM_TEMPLATE_CLEAR_CACHE'	=> 'キャッシュファイルを全て削除してもよろしいですか？',
	'CONFIRM_TEMPLATE_REFRESH'		=> 'データベース内のテンプレート情報を本当にリフレッシュしてもよろしいですか？テンプレートは全て初期化されます。',
	'CONFIRM_THEME_REFRESH'			=> 'データベース内のテーマ （CSS） 情報を本当にリフレッシュしてもよろしいですか？ テーマは全て初期化されます。',
	'COPYRIGHT'						=> '著作権',
	'CREATE_IMAGESET'				=> 'イメージセットの作成',
	'CREATE_STYLE'					=> 'スタイルの作成',
	'CREATE_TEMPLATE'				=> 'テンプレートセットの作成',
	'CREATE_THEME'					=> 'テーマの作成',
	'CURRENT_IMAGE'					=> '現在使用している画像',

	'DEACTIVATE_DEFAULT'		=> 'デフォルトスタイルを無効化する事はできません',
	'DELETE_FROM_FS'			=> 'ファイルの削除',
	'DELETE_IMAGESET'			=> 'イメージセットの削除',
	'DELETE_IMAGESET_EXPLAIN'	=> 'ここではイメージセットのデータをデータベースから削除できます。一度削除してしまうと元には戻せませんのでご注意ください。削除する前にイメージセットをエクスポートしておく事をお勧めします。',
	'DELETE_STYLE'				=> 'スタイルの削除',
	'DELETE_STYLE_EXPLAIN'		=> 'ここではスタイルの削除を行うことができます。ここでスタイルを削除しても、スタイルを構成するテンプレート、テーマ、イメージセットは削除されません。',
	'DELETE_TEMPLATE'			=> 'テンプレートセットの削除',
	'DELETE_TEMPLATE_EXPLAIN'	=> 'ここではテンプレートセットのデータをデータベースから削除できます。一度削除してしまうと元には戻せませんのでご注意ください。 削除する前にテンプレートセットをエクスポートしておく事をお勧めします。',
	'DELETE_THEME'				=> 'テーマの削除',
	'DELETE_THEME_EXPLAIN'		=> 'ここではテーマのデータをデータベースから削除できます。一度削除してしまうと元には戻せませんのでご注意ください。削除する前にテーマをエクスポートしておく事をお勧めします。',
	'DETAILS'					=> '詳細データ',
	'DIMENSIONS_EXPLAIN'		=> ' “はい” を選択すると 横幅/高さ パラメータが表示されます',

	'EDIT_DETAILS_IMAGESET'				=> 'イメージセットの詳細データ',
	'EDIT_DETAILS_IMAGESET_EXPLAIN'		=> 'ここではイメージセットの詳細データを編集できます',
	'EDIT_DETAILS_STYLE'				=> 'スタイルの編集',
	'EDIT_DETAILS_STYLE_EXPLAIN'		=> 'ここではスタイルを編集できます。テンプレートセット、テーマ、イメージセットを指定する事によってスタイルが定義されます。このスタイルが掲示板のデフォルトスタイルでない場合、デフォルトスタイルに指定する事もできます。',
	'EDIT_DETAILS_TEMPLATE'				=> 'テンプレートセットの詳細データ',
	'EDIT_DETAILS_TEMPLATE_EXPLAIN'		=> 'ここではテンプレートセットの詳細データを編集できます。テンプレートのデータ格納形式を変更する事もできます。PHP設定 と ファイルアクセス権 によってはデータ格納形式として “ファイルシステム” を選択できません。',
	'EDIT_DETAILS_THEME'				=> 'テーマの詳細データ',
	'EDIT_DETAILS_THEME_EXPLAIN'		=> 'ここではテーマの詳細データを編集できます。 スタイルシートのデータ格納形式を変更する事もできます。PHP設定 と ファイルアクセス権 によってはデータ格納形式として “ファイルシステム” を選択できません。',
	'EDIT_IMAGESET'						=> 'イメージセットの編集',
	'EDIT_IMAGESET_EXPLAIN'				=> 'ここではイメージセットの編集を行うことができます。イメージセット内の各画像に対して画像サイズを指定する事もできます。画像サイズをきちんと指定する事によってあらゆるブラウザで画像表示が統一されます。',
	'EDIT_TEMPLATE'						=> 'テンプレートセットの編集',
	'EDIT_TEMPLATE_EXPLAIN'				=> 'ここではテンプレートセットの編集を行うことができます。変更されたテンプレートを元に戻す機能は用意されていない点にご注意ください。テンプレートファイルに対するアクセス権が書き込み可である場合、テンプレートファイルが直接書き換えられます。そうでない場合、データベースにテンプレートファイルのコード内容が格納されます。テンプレートを編集する際、 テンプレート変数 {XXXX} と条件文 &lt;!-- XXXX --&gt; をきちんと閉じるようにしてください。',
	'EDIT_TEMPLATE_STORED_DB'			=> 'テンプレートファイルに対するアクセス権 （書き込み） が無かったため、テンプレートコードをデータベースに格納しました',
	'EDIT_THEME'						=> 'テーマの編集',
	'EDIT_THEME_EXPLAIN'				=> 'ここではテーマ （CSS） の編集を行うことができます',
	'EDIT_THEME_STORED_DB'				=> 'CSSファイル に対するアクセス権 （書き込み） が無かったため、CSSコード をデータベースに格納しました',
 	'EDIT_THEME_STORE_PARSED'			=> 'このテーマは CSSファイル 内にテンプレート変数 （ {T_IMAGESET_PATH} 等 ） を含んでいるため、ファイルシステムで運用できません',
	'EDITOR_DISABLED'					=> 'テンプレートエディタの使用は無効化されています',
	'EXPORT'							=> 'エクスポート',

	'FOREGROUND'			=> '前景',
	'FONT_COLOUR'			=> 'フォントカラー',
	'FONT_FACE'				=> 'フォントフェイス',
	'FONT_FACE_EXPLAIN'		=> '複数のフォントを指定する場合はコンマで区切ってください。フォントの並び順がそのままブラウザが使用するフォントの優先順位となります。',
	'FONT_SIZE'				=> 'フォントサイズ',

	'GLOBAL_IMAGES'			=> 'グローバル （言語非依存）',

	'HIDE_CSS'				=> 'CSSコード を非表示にする',

	'IMAGE_WIDTH'				=> '画像の横幅',
	'IMAGE_HEIGHT'				=> '画像の高さ',
	'IMAGE'						=> '画像ファイル',
	'IMAGE_NAME'				=> '画像名',
	'IMAGE_PARAMETER'			=> '画像パラメータ',
	'IMAGE_VALUE'				=> '画像の値',
	'IMAGESET_ADDED'			=> '新しいイメージセットが追加されました （データ格納形式： ファイルシステム）',
	'IMAGESET_ADDED_DB'			=> '新しいイメージセットが追加されました （データ格納形式： データベース）',
	'IMAGESET_DELETED'			=> 'イメージセットの削除に成功しました',
	'IMAGESET_DELETED_FS'		=> 'イメージセットの設定情報をデータベースから削除しました。イメージセットディレクトリはサーバにそのまま残されています。',
	'IMAGESET_DETAILS_UPDATED'	=> 'イメージセットの詳細データの更新に成功しました',
	'IMAGESET_ERR_ARCHIVE'		=> 'ファイル圧縮形式を指定してください',
	'IMAGESET_ERR_COPY_LONG'	=> '著作権は ６０ 字以下である必要があります',
	'IMAGESET_ERR_NAME_CHARS'	=> 'イメージセット名はアルファベットまたは数字か、-, +, スペースである必要があります',
	'IMAGESET_ERR_NAME_EXIST'	=> 'その名前のイメージセットは既に存在しています',
	'IMAGESET_ERR_NAME_LONG'	=> 'イメージセット名は ３０ 字以下にする必要があります',
	'IMAGESET_ERR_NOT_IMAGESET'	=> 'イメージセットディレクトリに正常なイメージセットがありません',
	'IMAGESET_ERR_STYLE_NAME'	=> 'イメージセット名を入力する必要がありま。',
	'IMAGESET_EXPORT'			=> 'イメージセットのエクスポート',
	'IMAGESET_EXPORT_EXPLAIN'	=> 'ここではイメージセットのエクスポートを行うことができます。エクスポートされたイメージセットファイルは他の phpBB3 にインストールできます （もちろん当 phpBB3 にもインストールできます）。エクスポートするに当たって、エクスポートファイルをダウンロードするか保管フォルダ <em>store/</em> に格納するかを選択できます。保管フォルダに格納されたエクスポートファイルは後で FTP 経由でダウンロードする必要があります。 ',
	'IMAGESET_EXPORTED'			=> 'イメージセットのエクスポートに成功しました。エクスポートファイルはフォルダ %s に格納されています。',
	'IMAGESET_NAME'				=> 'イメージセット名',
	'IMAGESET_REFRESHED'		=> 'イメージセットのリフレッシュに成功しました',
	'IMAGESET_UPDATED'			=> 'イメージセットの更新に成功しました',
	'ITALIC'					=> 'イタリック （斜体）',

	'IMG_CAT_BUTTONS'		=> 'ローカル （言語依存） ボタン',
	'IMG_CAT_CUSTOM'		=> 'カスタム画像',
	'IMG_CAT_FOLDERS'		=> 'トピックアイコン',
	'IMG_CAT_FORUMS'		=> 'フォーラムアイコン',
	'IMG_CAT_ICONS'			=> 'その他のアイコン',
	'IMG_CAT_LOGOS'			=> 'ロゴ',
	'IMG_CAT_POLLS'			=> '投票画像',
	'IMG_CAT_UI'			=> 'ユーザーインターフェイス',
	'IMG_CAT_USER'			=> '追加画像',

	'IMG_SITE_LOGO'			=> 'サイトロゴ',
	'IMG_UPLOAD_BAR'		=> 'アップロード進行バー',
	'IMG_POLL_LEFT'			=> '投票－左終端',
	'IMG_POLL_CENTER'		=> '投票－中',
	'IMG_POLL_RIGHT'		=> '投票－右終端',
	'IMG_ICON_FRIEND'		=> 'フレンドリストに追加',
	'IMG_ICON_FOE'			=> 'ブロックリストに追加',

	'IMG_FORUM_LINK'			=> 'フォーラムリンク',
	'IMG_FORUM_READ'			=> 'フォーラム',
	'IMG_FORUM_READ_LOCKED'		=> '閉鎖中フォーラム',
	'IMG_FORUM_READ_SUBFORUM'	=> '親フォーラム',
	'IMG_FORUM_UNREAD'			=> '未読フォーラム',
	'IMG_FORUM_UNREAD_LOCKED'	=> '未読-閉鎖中フォーラム',
	'IMG_FORUM_UNREAD_SUBFORUM'	=> '未読-親フォーラム',
	'IMG_SUBFORUM_READ'			=> 'サブフォーラム （フォーラム説明の下で表示）',
	'IMG_SUBFORUM_UNREAD'		=> '未読サブフォーラム （フォーラム説明の下で表示 ）',

	'IMG_TOPIC_MOVED'			=> '移動済みトピック',

	'IMG_TOPIC_READ'				=> 'トピック',
	'IMG_TOPIC_READ_MINE'			=> 'トピック （投稿マークあり）',
	'IMG_TOPIC_READ_HOT'			=> '人気トピック',
	'IMG_TOPIC_READ_HOT_MINE'		=> '人気トピック （投稿マークあり）',
	'IMG_TOPIC_READ_LOCKED'			=> '閉鎖中トピック',
	'IMG_TOPIC_READ_LOCKED_MINE'	=> '閉鎖中トピック （投稿マークあり）',

	'IMG_TOPIC_UNREAD'				=> '未読トピック',
	'IMG_TOPIC_UNREAD_MINE'			=> '未読トピック （投稿マークあり）',
	'IMG_TOPIC_UNREAD_HOT'			=> '未読-人気トピック',
	'IMG_TOPIC_UNREAD_HOT_MINE'		=> '未読-人気トピック （投稿マークあり）',
	'IMG_TOPIC_UNREAD_LOCKED'		=> '未読-閉鎖中トピック',
	'IMG_TOPIC_UNREAD_LOCKED_MINE'	=> '未読-閉鎖中トピック （投稿マークあり）',

	'IMG_STICKY_READ'				=> '注目トピック',
	'IMG_STICKY_READ_MINE'			=> '注目トピック （投稿マークあり）',
	'IMG_STICKY_READ_LOCKED'		=> '閉鎖中-注目トピック',
	'IMG_STICKY_READ_LOCKED_MINE'	=> '閉鎖中-注目トピック （投稿マークあり）',
	'IMG_STICKY_UNREAD'				=> '未読-注目トピック',
	'IMG_STICKY_UNREAD_MINE'		=> '未読-注目トピック （投稿マークあり）',
	'IMG_STICKY_UNREAD_LOCKED'		=> '未読-閉鎖中-注目トピック',
	'IMG_STICKY_UNREAD_LOCKED_MINE'	=> '未読-閉鎖中-注目トピック （投稿マークあり）',

	'IMG_ANNOUNCE_READ'					=> '告知トピック',
	'IMG_ANNOUNCE_READ_MINE'			=> '告知トピック （投稿マークあり）',
	'IMG_ANNOUNCE_READ_LOCKED'			=> '閉鎖中-告知トピック',
	'IMG_ANNOUNCE_READ_LOCKED_MINE'		=> '閉鎖中-告知トピック （投稿マークあり）',
	'IMG_ANNOUNCE_UNREAD'				=> '未読-告知トピック',
	'IMG_ANNOUNCE_UNREAD_MINE'			=> '未読-告知トピック （投稿マークあり）',
	'IMG_ANNOUNCE_UNREAD_LOCKED'		=> '未読-閉鎖中-告知トピック',
	'IMG_ANNOUNCE_UNREAD_LOCKED_MINE'	=> '未読-閉鎖中-告知トピック （投稿マークあり）',

	'IMG_GLOBAL_READ'					=> 'グローバル告知トピック',
	'IMG_GLOBAL_READ_MINE'				=> 'グローバル告知トピック （投稿マークあり）',
	'IMG_GLOBAL_READ_LOCKED'			=> '閉鎖中-グローバル告知トピック',
	'IMG_GLOBAL_READ_LOCKED_MINE'		=> '閉鎖中-グローバル告知トピック （投稿マークあり）',
	'IMG_GLOBAL_UNREAD'					=> '未読-グローバル告知トピック',
	'IMG_GLOBAL_UNREAD_MINE'			=> '未読-グローバル告知トピック （投稿マークあり）',
	'IMG_GLOBAL_UNREAD_LOCKED'			=> '閉鎖中-未読-グローバル告知トピック',
	'IMG_GLOBAL_UNREAD_LOCKED_MINE'		=> '閉鎖中-未読-グローバル告知トピック （投稿マークあり）',

	'IMG_PM_READ'		=> '既読プライベートメッセージ',
	'IMG_PM_UNREAD'		=> '未読プライベートメッセージ',

	'IMG_ICON_BACK_TOP'		=> 'トップ',

	'IMG_ICON_CONTACT_AIM'		=> 'AIM',
	'IMG_ICON_CONTACT_EMAIL'	=> 'メール送信',
	'IMG_ICON_CONTACT_ICQ'		=> 'ICQ',
	'IMG_ICON_CONTACT_JABBER'	=> 'Jabber',
	'IMG_ICON_CONTACT_MSNM'		=> 'MSNM',
	'IMG_ICON_CONTACT_PM'		=> 'プライベートメッセージ送信',
	'IMG_ICON_CONTACT_YAHOO'	=> 'YIM',
	'IMG_ICON_CONTACT_WWW'		=> 'ウェブサイト',

	'IMG_ICON_POST_DELETE'			=> '記事の削除',
	'IMG_ICON_POST_EDIT'			=> '記事の編集',
	'IMG_ICON_POST_INFO'			=> '記事の詳細',
	'IMG_ICON_POST_QUOTE'			=> '記事の引用',
	'IMG_ICON_POST_REPORT'			=> '記事の通報',
	'IMG_ICON_POST_TARGET'			=> '記事 （画像小）',
	'IMG_ICON_POST_TARGET_UNREAD'	=> '未読記事 （画像小）',


	'IMG_ICON_TOPIC_ATTACH'			=> '添付ファイル',
	'IMG_ICON_TOPIC_LATEST'			=> '最新記事',
	'IMG_ICON_TOPIC_NEWEST'			=> '未読-最新記事',
	'IMG_ICON_TOPIC_REPORTED'		=> '通報された記事',
	'IMG_ICON_TOPIC_UNAPPROVED'		=> '未承認記事',

	'IMG_ICON_USER_ONLINE'		=> 'ユーザーオンライン',
	'IMG_ICON_USER_OFFLINE'		=> 'ユーザーオフライン',
	'IMG_ICON_USER_PROFILE'		=> 'プロフィール表示',
	'IMG_ICON_USER_SEARCH'		=> '記事検索',
	'IMG_ICON_USER_WARN'		=> '警告',

	'IMG_BUTTON_PM_FORWARD'		=> 'プライベートメッセージの転送',
	'IMG_BUTTON_PM_NEW'			=> 'プライベートメッセージの新規作成',
	'IMG_BUTTON_PM_REPLY'		=> 'プライベートメッセージの返信',
	'IMG_BUTTON_TOPIC_LOCKED'	=> '閉鎖中トピック',
	'IMG_BUTTON_TOPIC_NEW'		=> 'トピックの新規投稿',
	'IMG_BUTTON_TOPIC_REPLY'	=> 'トピックの返信',

	'IMG_USER_ICON1'		=> '追加画像 1',
	'IMG_USER_ICON2'		=> '追加画像 2',
	'IMG_USER_ICON3'		=> '追加画像 3',
	'IMG_USER_ICON4'		=> '追加画像 4',
	'IMG_USER_ICON5'		=> '追加画像 5',
	'IMG_USER_ICON6'		=> '追加画像 6',
	'IMG_USER_ICON7'		=> '追加画像 7',
	'IMG_USER_ICON8'		=> '追加画像 8',
	'IMG_USER_ICON9'		=> '追加画像 9',
	'IMG_USER_ICON10'		=> '追加画像 10',

	'INCLUDE_DIMENSIONS'		=> '画像サイズを指定する',
	'INCLUDE_IMAGESET'			=> 'イメージセットを含める',
	'INCLUDE_TEMPLATE'			=> 'テンプレートセットを含める',
	'INCLUDE_THEME'				=> 'テーマを含める',
	'INHERITING_FROM'			=> '次から継承',
	'INSTALL_IMAGESET'			=> 'イメージセットのインストール',
	'INSTALL_IMAGESET_EXPLAIN'	=> 'ここではイメージセットのインストールを行うことができます。ここで表示されているイメージセットの詳細データは後で変更可能です。',
	'INSTALL_STYLE'				=> 'スタイルのインストール',
	'INSTALL_STYLE_EXPLAIN'		=> 'ここではスタイルのインストールを行うことができます。スタイルをインストールした場合、スタイル構成要素 （テンプレートセット、テーマ、イメージセット） も同時にインストールされます。インストールされようとしているスタイル構成要素が既にphpBB3 にインストールされていた場合、そのスタイル構成要素のインストールは実行されません。スタイル構成要素が既にインストールされている事を前提としているスタイルもあります。もしそのようなスタイルをインストールしようとしていて、必要なスタイル構成要素がインストールされていなかった場合はエラーが表示されます。',
	'INSTALL_TEMPLATE'			=> 'テンプレートセットのインストール',
	'INSTALL_TEMPLATE_EXPLAIN'	=> 'ここではテンプレートセットのインストールを行うことができます。サーバ環境設定によってはここで表示されるオプションが増える事もあります。',
	'INSTALL_THEME'				=> 'テーマのインストール',
	'INSTALL_THEME_EXPLAIN'		=> 'ここではテーマのインストールを行うことができます。ここで表示されているイメージセットの詳細データは後で変更可能です。',
	'INSTALLED_IMAGESET'		=> 'インストール済みイメージセット',
	'INSTALLED_STYLE'			=> 'インストール済みスタイル',
	'INSTALLED_TEMPLATE'		=> 'インストール済みテンプレートセット',
	'INSTALLED_THEME'			=> 'インストール済みテーマ',

	'LINE_SPACING'				=> '行間隔',
	'LOCALISED_IMAGES'			=> 'ローカル （言語依存）',
	'LOCATION_DISABLED_EXPLAIN'	=> 'この設定は継承されているため変更することはできません',


	'NO_CLASS'					=> 'CSSファイル 内でクラスが見つかりません',
	'NO_IMAGESET'				=> 'イメージセットフォルダが見つかりません',
	'NO_IMAGE'					=> '画像なし',
	'NO_IMAGE_ERROR'			=> '画像ファイルが見つかりません',
	'NO_STYLE'					=> 'スタイルフォルダが見つかりません',
	'NO_TEMPLATE'				=> 'テンプレートセットフォルダが見つかりません',
	'NO_THEME'					=> 'テーマフォルダが見つかりません',
	'NO_UNINSTALLED_IMAGESET'	=> 'インストール可能なイメージセットはありません',
	'NO_UNINSTALLED_STYLE'		=> 'インストール可能なスタイルはありません',
	'NO_UNINSTALLED_TEMPLATE'	=> 'インストール可能なテンプレートセットはありません',
	'NO_UNINSTALLED_THEME'		=> 'インストール可能なテーマはありません',
	'NO_UNIT'					=> 'なし',

	'ONLY_IMAGESET'			=> '指定したイメージセットはインストールされているただ１つのイメージセットであるため、アンインストールできません',
	'ONLY_STYLE'			=> '指定したスタイルはインストールされているただ１つのスタイルであるため、アンインストールできません',
	'ONLY_TEMPLATE'			=> '指定したテンプレートセットはインストールされているただ１つのテンプレートセットであるため、アンインストールできません',
	'ONLY_THEME'			=> '指定したテーマはインストールされているただ１つのテーマであるため、アンインストールできません',
	'OPTIONAL_BASIS'		=> 'カスタマイズ',

	'REFRESH'					=> 'リフレッシュ',
	'REPEAT_NO'					=> 'なし',
	'REPEAT_X'					=> '縦方向のみ',
	'REPEAT_Y'					=> '横方向のみ',
	'REPEAT_ALL'				=> '全方向',
	'REPLACE_IMAGESET'			=> 'イメージセットの置換',
	'REPLACE_IMAGESET_EXPLAIN'	=> '削除するイメージセットを使用しているスタイルが存在する場合、削除したイメージセットを別のイメージセットに置き換えます',
	'REPLACE_STYLE'				=> 'スタイルの置換',
	'REPLACE_STYLE_EXPLAIN'		=> 'このスタイルを使用しているユーザーのスタイルを別のスタイルに置き換えます',
	'REPLACE_TEMPLATE'			=> 'テンプレートセットの置換',
	'REPLACE_TEMPLATE_EXPLAIN'	=> '削除するテンプレートセットを使用しているスタイルが存在する場合、削除したテンプレートセットを別のテンプレートセットに置き換えます',
	'REPLACE_THEME'				=> 'テーマの置換',
	'REPLACE_THEME_EXPLAIN'		=> '削除するテーマを使用しているスタイルが存在する場合、削除したテーマを別のテーマに置き換えます',
	'REQUIRES_IMAGESET'			=> 'このスタイルをインストールするにはイメージセット %s が予めインストールされている必要があります',
	'REQUIRES_TEMPLATE'			=> 'このスタイルをインストールするにはテンプレートセット %s が予めインストールされている必要があります',
	'REQUIRES_THEME'			=> 'このスタイルをインストールするにはテーマ %s が予めインストールされている必要があります',

	'SELECT_IMAGE'				=> '画像の選択',
	'SELECT_TEMPLATE'			=> 'テンプレートファイルの選択',
	'SELECT_THEME'				=> 'テーマファイルの選択',
	'SELECTED_IMAGE'			=> '選択中の画像',
	'SELECTED_IMAGESET'			=> '選択中のイメージセット',
	'SELECTED_TEMPLATE'			=> '選択中のテンプレートセット',
	'SELECTED_TEMPLATE_FILE'	=> '選択中のテンプレートファイル',
	'SELECTED_THEME'			=> '選択中のテーマ',
	'SELECTED_THEME_FILE'		=> '選択中のテーマファイル',
	'STORE_DATABASE'			=> 'データベース',
	'STORE_FILESYSTEM'			=> 'ファイルシステム',
	'STYLE_ACTIVATE'			=> '有効にする',
	'STYLE_ACTIVE'				=> 'アクティブ',
	'STYLE_ADDED'				=> 'スタイルの追加に成功しました',
	'STYLE_DEACTIVATE'			=> '無効にする',
	'STYLE_DEFAULT'				=> 'デフォルトスタイルに指定する',
	'STYLE_DELETED'				=> 'スタイルの削除に成功しました',
	'STYLE_DETAILS_UPDATED'		=> 'スタイルの編集に成功しました',
	'STYLE_ERR_ARCHIVE'			=> 'ファイル圧縮形式を選択していません',
	'STYLE_ERR_COPY_LONG'		=> '著作権は ６０ 字以下である必要があります',
	'STYLE_ERR_MORE_ELEMENTS'	=> '最低１つのスタイル構成要素を指定する必要があります',
	'STYLE_ERR_NAME_CHARS'		=> 'スタイル名はアルファベットまたは数字か、-, +, スペースである必要があります',
	'STYLE_ERR_NAME_EXIST'		=> 'その名前のスタイルは既に存在しています',
	'STYLE_ERR_NAME_LONG'		=> 'スタイル名は ３０ 字以下である必要があります',
	'STYLE_ERR_NO_IDS'			=> 'スタイルに対してテンプレートセット、テーマ、イメージセットを指定する必要があります',
	'STYLE_ERR_NOT_STYLE'		=> 'インポートまたはアップロードされたファイルは正常なスタイルではありません',
	'STYLE_ERR_STYLE_NAME'		=> 'スタイル名を入力する必要があります。',
	'STYLE_EXPORT'				=> 'スタイルのエクスポート',
	'STYLE_EXPORT_EXPLAIN'		=> 'ここではスタイルのエクスポートを行うことができます。スタイルは全ての構成要素を含んでいる必要はありませんが、最低１つの構成要素を含んでいる必要があります。例えば、ある既存のテンプレートセットを基にして新しいテーマと新しいイメージセットを作成し、それらで構成されたスタイルを作成した場合、テンプレートセットのみを除いてスタイルをエクスポートする事が可能です。エクスポートするに当たって、エクスポートファイルをダウンロードするか保管フォルダ <em>store/</em> に格納するかを選択できます。保管フォルダに格納されたエクスポートファイルは後で FTP 経由でダウンロードする必要があります。',
	'STYLE_EXPORTED'			=> 'スタイルのエクスポートに成功しました。エクスポートファイルはフォルダ %s に格納されています。',
	'STYLE_IMAGESET'			=> 'イメージセット',
	'STYLE_NAME'				=> 'スタイル名',
	'STYLE_TEMPLATE'			=> 'テンプレートセット',
	'STYLE_THEME'				=> 'テーマ',
	'STYLE_USED_BY'				=> '使用ユーザー数 （ボット含む）',

	'TEMPLATE_ADDED'			=> 'テンプレートセットが追加されました （データ格納形式： ファイルシステム）',
	'TEMPLATE_ADDED_DB'			=> 'テンプレートセットが追加されました （データ格納形式： データベース）',
	'TEMPLATE_CACHE'			=> 'テンプレートキャッシュ',
	'TEMPLATE_CACHE_EXPLAIN'	=> 'phpBB3 ではコンパイル済みテンプレートをデフォルトでキャッシュします。キャッシュする事によってサーバの負担とページ表示時間を減少できます。ここでは各テンプレートファイルのキャッシュ状態を把握できます。',
	'TEMPLATE_CACHE_CLEARED'	=> 'テンプレートキャッシュファイルの削除に成功しました',
	'TEMPLATE_CACHE_EMPTY'		=> 'キャッシュされたテンプレートファイルはありません',
	'TEMPLATE_DELETED'			=> 'テンプレートセットの削除に成功しました',
	'TEMPLATE_DELETE_DEPENDENT'	=> '継承しているテンプレートが１つ以上存在するため、そのテンプレートを削除することはできません',
	'TEMPLATE_DELETED_FS'		=> 'テンプレートセットはデータベースから削除されました。ファイルは削除されずにサーバにそのまま残っています。',
	'TEMPLATE_DETAILS_UPDATED'	=> 'テンプレートセットの詳細データの更新に成功しました',
	'TEMPLATE_EDITOR'			=> 'テンプレートエディタ',
	'TEMPLATE_EDITOR_HEIGHT'	=> 'ワークスペース',
	'TEMPLATE_ERR_ARCHIVE'		=> 'ファイル圧縮形式が選択されていません',
	'TEMPLATE_ERR_CACHE_READ'	=> 'キャッシュディレクトリにアクセスできませんでした',
	'TEMPLATE_ERR_COPY_LONG'	=> '著作権は ６０ 字以下である必要があります',
	'TEMPLATE_ERR_NAME_CHARS'	=> 'テンプレートセット名はアルファベットは数字か、-, +, スペースである必要があります',
	'TEMPLATE_ERR_NAME_EXIST'	=> 'その名前のテンプレートセットは既に存在しています',
	'TEMPLATE_ERR_NAME_LONG'	=> 'テンプレートセット名は ３０ 字以下である必要があります',
	'TEMPLATE_ERR_NOT_TEMPLATE'	=> 'テンプレートディレクトリに正常なテンプレートセットがありません',
	'TEMPLATE_ERR_REQUIRED_OR_INCOMPLETE' => 'そのテンプレートセットをインストールするには、テンプレートセット %s を先にインストールする必要があります。',
	'TEMPLATE_ERR_STYLE_NAME'	=> 'テンプレートセット名を入力する必要があります',
	'TEMPLATE_EXPORT'			=> 'テンプレートセットのエクスポート',
	'TEMPLATE_EXPORT_EXPLAIN'	=> 'ここではテンプレートセットのエクスポートを行うことができます。エクスポートされたテンプレートセットファイルは他の phpBB3 サイトにインストールできます（もちろん当 phpBB3 にもインストールできます）。エクスポートするに当たって、エクスポートファイルをダウンロードするか保管フォルダ <em>store/</em> に格納するかを選択できます。保管フォルダに格納されたエクスポートファイルは後で FTP 経由でダウンロードする必要があります。',
	'TEMPLATE_EXPORTED'			=> 'テンプレートセットを %s に保管することに成功しました',
	'TEMPLATE_FILE'				=> 'テンプレートファイル',
	'TEMPLATE_FILE_UPDATED'		=> 'テンプレートファイルの更新に成功しました',
	'TEMPLATE_INHERITS'			=> 'このテンプレートセットは %s を継承しているため、%s と異なるデータ格納形式を選択できません。',
	'TEMPLATE_LOCATION'			=> 'テンプレートのデータ格納形式',
	'TEMPLATE_LOCATION_EXPLAIN'	=> '画像ファイルがデータベースに格納される事はありません。画像はファイルシステムで保管されます。',
	'TEMPLATE_NAME'				=> 'テンプレートセット名',
	'TEMPLATE_FILE_NOT_WRITABLE'=> 'テンプレートファイル %s への書き込みに失敗しました。ディレクトリまたはファイルのアクセス権をチェックしてください。',
	'TEMPLATE_REFRESHED'		=> 'テンプレートセットのリフレッシュに成功しました',

	'THEME_ADDED'				=> 'テーマが追加されました （データ格納形式： ファイルシステム）',
	'THEME_ADDED_DB'			=> 'テーマが追加されました （データ格納形式： データベース）',
	'THEME_CLASS_ADDED'			=> 'カスタムクラスの追加に成功しました',
	'THEME_DELETED'				=> 'テーマの削除に成功しました',
	'THEME_DELETED_FS'			=> 'テーマはデータベースから削除されました。ファイルはそのまま削除されずにそのまま残っています。',
	'THEME_DETAILS_UPDATED'		=> 'テーマの詳細データの更新に成功しました',
	'THEME_EDITOR'				=> 'テーマエディタ',
	'THEME_EDITOR_HEIGHT'		=> 'ワークスペース',
	'THEME_ERR_ARCHIVE'			=> 'ファイル圧縮形式が選択されていません',
	'THEME_ERR_CLASS_CHARS'		=> 'クラス名は半角文字か ., :, -, _, # である必要があります',
	'THEME_ERR_COPY_LONG'		=> '著作権は ６０ 字以下ある必要があります',
	'THEME_ERR_NAME_CHARS'		=> 'テーマ名はアルファベットまたは数字か、-, +, スペースである必要があります',
	'THEME_ERR_NAME_EXIST'		=> 'その名前のテーマは既に存在しています',
	'THEME_ERR_NAME_LONG'		=> 'テーマ名は ３０ 字以下である必要があります',
	'THEME_ERR_NOT_THEME'		=> 'アーカイブに正常なテーマがありません',
	'THEME_ERR_REFRESH_FS'		=> 'このテーマのデータ格納形式はファイルシステムなのでリフレッシュする必要はありません',
	'THEME_ERR_STYLE_NAME'		=> 'テーマ名を入力する必要があります',
	'THEME_FILE'				=> 'テーマファイル',
	'THEME_EXPORT'				=> 'テーマのエクスポート',
	'THEME_EXPORT_EXPLAIN'		=> 'ここではテーマのエクスポートを行うことができます。エクスポートされたテーマファイルは他の phpBB3 サイトにインストールできます（もちろん当 phpBB3 にもインストールできます）。エクスポートするに当たって、エクスポートファイルをダウンロードするか保管フォルダ <em>store/</em> に格納するかを選択できます。保管フォルダに格納されたエクスポートファイルは後で FTP 経由でダウンロードする必要があります。',
	'THEME_EXPORTED'			=> 'テーマのエクスポートに成功しました。エクスポートファイルはフォルダ %s に格納されています。',
	'THEME_LOCATION'			=> 'スタイルのデータ格納形式',
	'THEME_LOCATION_EXPLAIN'	=> '画像ファイルがデータベースに格納される事はありません。画像はファイルシステムで保管されます。',
	'THEME_NAME'				=> 'テーマ名',
	'THEME_REFRESHED'			=> 'テーマのリフレッシュに成功しました',
	'THEME_UPDATED'				=> 'テーマの更新に成功しました',

	'UNDERLINE'				=> 'アンダーライン',
	'UNINSTALLED_IMAGESET'	=> '未インストール状態のイメージセット',
	'UNINSTALLED_STYLE'		=> '未インストール状態のスタイル',
	'UNINSTALLED_TEMPLATE'	=> '未インストール状態のテンプレートセット',
	'UNINSTALLED_THEME'		=> '未インストール状態のテーマ',
	'UNSET'					=> '未定義',

));

?>