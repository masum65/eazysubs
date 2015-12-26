<?php
/**
*
* acp_styles [Catalan]
*
* @package language
* @version $Id: styles.php 9046 2008-11-02 16:19:11Z acydburn $
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
	'ACP_IMAGESETS_EXPLAIN'	=> 'Els grups d’imatges constitueixen totes les imatges de botons, fòrums, carpetes, etc. i d’altres no específiques d’un estil utilitzades pel fòrum. Aquí podeu editar, exportar o eliminar grups d’imatges existents i importar o activar grups nous.',
	'ACP_STYLES_EXPLAIN'	=> 'Aquí podeu gestionar els estils disponibles al fòrum. Un estil està format per una plantilla, un tema i un grup d’imatges. Podeu modificar estils existents, eliminar-los, desactivar-los, reactivar-los, crear-los o importar-ne de nous. També podeu veure quin aspecte tindrà un estil utilitzant la funció de previsualització. L’estil per defecte actual está marcat amb un asterisc (*). També es llista el nombre total d’usuaris per cada estil, tingueu en compte que la sobreescriptura de l’estil triat pels usuaris no es reflecteix aquí.',
	'ACP_TEMPLATES_EXPLAIN'	=> 'Un grup de plantilles constitueix tot l’etiquetatge utilitzat per generar el format del fòrum. Aquí podeu editar grups de plantilles existents, eliminar-los, exportar-los, importar-los i previsualitzar-los. També podeu modificar el codi de plantilles utilitzat per generar el BBCode.',
	'ACP_THEMES_EXPLAIN'	=> 'Des d’aquí podeu crear, instal·lar, editar, eliminar i exportar temes. Un tema és la combinació de colors i imatges que s’apliquen a les plantilles per definir l’aparença bàsica dels fòrum. El rang d’opcions disponibles depèn de la configuració del servidor i la instal·lació del phpBB, vegeu el manual per obtenir informació més detallada. Tingueu en compte que, quan creeu temes nous, l’ús d’un tema existent com a base és opcional.',
	'ADD_IMAGESET'			=> 'Crea un grup d’imatges',
	'ADD_IMAGESET_EXPLAIN'	=> 'Aquí podeu crear un grup d’imatges nou. Depenent de la configuració del servidor i els permisos dels fitxers, és possible que tingueu opcions addicionals. Per exemple, és possible que pugueu basar aquest grup d’imatges en un altre que ja existeixi. També és possible que pugueu pujar o importar (des del directori “store”) un arxiu de grup d’imatges. Si pugeu o importeu un arxiu, el nom del grup d’imatges es pot prendre, opcionalment, del nom de l’arxiu (per fer-ho deixeu el nom del grup d’imatges en blanc).',
	'ADD_STYLE'				=> 'Crea un estil',
	'ADD_STYLE_EXPLAIN'		=> 'Aquí podeu crear un estil nou. Depenent de la configuració del servidor i els permisos dels fitxers, és possible que tingueu opcions addicionals. Per exemple, és possible que pugueu basar aquest estil en un altre que ja existeixi. També és possible que pugueu pujar o importar (des del directori “store”) un arxiu d’estil. Si pugeu o importeu un arxiu, el nom de l’estil es determinarà automàticament.',
	'ADD_TEMPLATE'			=> 'Crea una plantilla',
	'ADD_TEMPLATE_EXPLAIN'	=> 'Aquí podeu crear una plantilla nova. Depenent de la configuració del servidor i els permisos dels fitxers, és possible que tingueu opcions addicionals. Per exemple, és possible que pugueu basar aquesta plantilla en un altra que ja existeixi. També és possible que pugueu pujar o importar (des del directori “store”) un arxiu de plantilla. Si pugeu o importeu un arxiu, el nom de la plantilla es pot prendre, opcionalment, del nom de l’arxiu (per fer-ho deixeu el nom de la plantilla en blanc).',
	'ADD_THEME'				=> 'Crea un tema',
	'ADD_THEME_EXPLAIN'		=> 'Aquí podeu crear un tema nou. Depenent de la configuració del servidor i els permisos dels fitxers, és possible que tingueu opcions addicionals. Per exemple, és possible que pugueu basar aquest tema en un altre que ja existeixi. També és possible que pugueu pujar o importar (des del directori “store”) un arxiu de tema. Si pugeu o importeu un arxiu, el nom del tema es pot prendre, opcionalment, del nom de l’arxiu (per fer-ho deixeu el nom del tema en blanc).',
	'ARCHIVE_FORMAT'		=> 'Tipus d’arxiu',
	'AUTOMATIC_EXPLAIN'		=> 'Deixeu-lo en blanc per intentar la detecció automàtica.',

	'BACKGROUND'			=> 'Fons',
	'BACKGROUND_COLOUR'		=> 'Color del fons',
	'BACKGROUND_IMAGE'		=> 'Imatge del fons',
	'BACKGROUND_REPEAT'		=> 'Repetició del fons',
	'BOLD'					=> 'Negreta',

	'CACHE'							=> 'Memòria cau',
	'CACHE_CACHED'					=> 'Emmagatzemat en memòria cau',
	'CACHE_FILENAME'				=> 'Fitxer de plantilla',
	'CACHE_FILESIZE'				=> 'Mida del fitxer',
	'CACHE_MODIFIED'				=> 'Modificat',
	'CONFIRM_IMAGESET_REFRESH'		=> 'Esteu segur de que voleu refrescar totes les dades del grup d’imatges? Les opcions del fitxer de configuració del grup d’imatges sobreescriuran totes les modificacions que s’han fet al grup d’imatges amb l’editor.',
	'CONFIRM_TEMPLATE_CLEAR_CACHE'	=> 'Esteu segur de que voleu esborrar totes les versions dels fitxers de plantilla emmagatzemades a la memòria cau?',
	'CONFIRM_TEMPLATE_REFRESH'		=> 'Esteu segur de que voleu refrescar totes les dades de la plantilla a la base de dades amb els continguts dels fitxers de plantilla al sitema de fitxers? Això sobreescriurà totes les modificacions que s’han dut a terme amb l’editor de plantilles mentre la plantilla estava emmagatzemada a la base de dades.',
	'CONFIRM_THEME_REFRESH'			=> 'Esteu segur de que voleu refrescar les dades del tema emmagatzemades a la base de dades amb els continguts del tema al sistema de fitxers? Això sobreescriurà totes les modificacions que s’han dut a terme amb l’editor de temes mentre el tema estava emmagatzemat a la base de dades.',
	'COPYRIGHT'						=> 'Copyright',
	'CREATE_IMAGESET'				=> 'Crea un grup d’imatges nou',
	'CREATE_STYLE'					=> 'Crea un estil nou',
	'CREATE_TEMPLATE'				=> 'Crea una plantilla nova',
	'CREATE_THEME'					=> 'Crea un tema nou',
	'CURRENT_IMAGE'					=> 'Imatge actual',

	'DEACTIVATE_DEFAULT'		=> 'No podeu desactivar l’estil per defecte.',
	'DELETE_FROM_FS'			=> 'Elimina’l del sistema de fitxers',
	'DELETE_IMAGESET'			=> 'Elimina el grup d’imatge',
	'DELETE_IMAGESET_EXPLAIN'	=> 'Aquí podeu eliminar el grup d’imatges seleccionat de la base de dades. Tingueu en compte que no es poden desfer els canvis. És recomanable que abans exporteu el grup per si l’heu d’utilitzar en el futur.',
	'DELETE_STYLE'				=> 'Elimina l’estil',
	'DELETE_STYLE_EXPLAIN'		=> 'Aquí podeu eliminar l’estil seleccionat. No podeu eliminar tots els elements de l’estil des d’aquí. S’han d’eliminar individualment des dels seus formularis respectius. Aneu amb compte quan elimineu estils ja que es no es poden desfer els canvis.',
	'DELETE_TEMPLATE'			=> 'Elimina la plantilla',
	'DELETE_TEMPLATE_EXPLAIN'	=> 'Aquí podeu eliminar el grup de plantilles seleccionat de la base de dades. Tingueu en compte que no es poden desfer els canvis. És recomanable que abans exporteu el grup per si l’heu d’utilitzar en el futur.',
	'DELETE_THEME'				=> 'Elimina el tema',
	'DELETE_THEME_EXPLAIN'		=> 'Aquí podeu eliminar el tema seleccionat de la base de dades. Tingueu en compte que no es poden desfer els canvis. És recomanable que abans exporteu el tema per si l’heu d’utilitzar en el futur.',
	'DETAILS'					=> 'Detalls',
	'DIMENSIONS_EXPLAIN'		=> 'Si seleccioneu “Sí”, s’inclouran els paràmetres d’amplària/alçària.',


	'EDIT_DETAILS_IMAGESET'				=> 'Edita els detalls del grup d’imatges',
	'EDIT_DETAILS_IMAGESET_EXPLAIN'		=> 'Aquí podeu editar determinats detalls del grup d’imatges com ara el nom.',
	'EDIT_DETAILS_STYLE'				=> 'Edita l’estil',
	'EDIT_DETAILS_STYLE_EXPLAIN'		=> 'Podeu modificar aquest estil utilitzant el formulari a sota. Podeu modificar la combinació de plantilla, tema i grup d’imatges que defineixen l’estil pròpiament dit. També podeu fer que sigui l’estil per defecte.',
	'EDIT_DETAILS_TEMPLATE'				=> 'Edita els detalls de la plantilla',
	'EDIT_DETAILS_TEMPLATE_EXPLAIN'		=> 'Aquí podeu editar determinats detalls de la plantilla com ara el nom. És posssible que també tingueu l’opció de canviar l’emmagatzemament del full d’estil del sistema de fitxers a la base de dades i viceversa. Aquesta opció depèn de la configuració del PHP i de si el servidor té permisos per escriure al grup de plantilles.',
	'EDIT_DETAILS_THEME'				=> 'Edita els detalls del tema',
	'EDIT_DETAILS_THEME_EXPLAIN'		=> 'Aquí podeu editar determinats detalls del tema com ara el nom. És posssible que també tingueu l’opció de canviar l’emmagatzemament del full d’estil del sistema de fitxers a la base de dades i viceversa. Aquesta opció depèn de la configuració del PHP i de si el servidor té permisos per escriure al full d’estil.',
	'EDIT_IMAGESET'						=> 'Edita el grup d’imatges',
	'EDIT_IMAGESET_EXPLAIN'				=> 'Aquí podeu editar les imatges individuals que constitueixen el grup d’imatges. També podeu especificar dimensiones per a la imatge. Les dimensions són opcionals, indicar-les pot solucionar determinats problemes de visualització amb alguns navegadors. Si no les indiqueu, reduïu la mida del registre de base de dades lleugerament.',
	'EDIT_TEMPLATE'						=> 'Edita la plantilla',
	'EDIT_TEMPLATE_EXPLAIN'				=> 'Aquí podeu editar el grup de plantilles directament. Recordeu que aquestes edicions són permanents i no poden desfer-se un cop trameses. Si el PHP pot escriure als fitxers de plantilla del directori styles,  qualsevol canvi fet aquí s’escriurà directament en aquells fitxers. Si el PHP no pot escriure als fitxers, es copiaran a la base de dades i tots els canvis només es reflectiran allí. Aneu amb compte quan editeu un grup de plantilles, recordeu que cal tancar tots els termes de substitució de variables {XXXX} i els enunciats condicionals.',
	'EDIT_TEMPLATE_STORED_DB'			=> 'No s’ha pogut escriure al fitxer de plantilla i, per tant, la plantilla ara s’emmagatzema a la base de dades que conté el fitxer modificat.',
	'EDIT_THEME'						=> 'Edita el tema',
	'EDIT_THEME_EXPLAIN'				=> 'Aquí podeu editar el tema seleccionat, canviar colors, imatges, etc.',
	'EDIT_THEME_STORED_DB'				=> 'No s’ha pogut escriure al fitxer del full d’estils i, per tant, el full d’estils ara s’emmagatzema a la base de dades que conté les vostres modificacions.',
	'EDIT_THEME_STORE_PARSED'			=> 'El tema necessita que es processi el full d’estils. Això només és possible si està emmagatzemat a la base de dades.',
	'EDITOR_DISABLED'					=> 'L’editor de plantilles està inhabilitat.',
	'EXPORT'							=> 'Exporta',

	'FOREGROUND'			=> 'Primer pla',
	'FONT_COLOUR'			=> 'Color de lletra',
	'FONT_FACE'				=> 'Tipus de lletra',
	'FONT_FACE_EXPLAIN'		=> 'Podeu especificar múltiples tipus de lletra separats per comes. Si un usuari no té el primer tipus instal·lat, es triarà el primer tipus de la llista que tingui.',
	'FONT_SIZE'				=> 'Mida de lletra',

	'GLOBAL_IMAGES'			=> 'Global',

	'HIDE_CSS'				=> 'Amaga el CSS cru',

	'IMAGE_WIDTH'				=> 'Amplària de la imatge',
	'IMAGE_HEIGHT'				=> 'Alçària de la imatge',
	'IMAGE'						=> 'Imatge',
	'IMAGE_NAME'				=> 'Nom de la imatge',
	'IMAGE_PARAMETER'			=> 'Paràmetre',
	'IMAGE_VALUE'				=> 'Valor',
	'IMAGESET_ADDED'			=> 'S’ha afegit el grup d’imatges nou al sistema de fitxers.',
	'IMAGESET_ADDED_DB'			=> 'S’ha afegit el grup d’imatges nou a la base de dades.',
	'IMAGESET_DELETED'			=> 'S’ha eliminat el grup d’imatges correctament.',
	'IMAGESET_DELETED_FS'		=> 'S’ha eliminat el grup d’imatges de la base de dades correctament però poden haver quedat alguns fitxers al sistema de fitxers.',
	'IMAGESET_DETAILS_UPDATED'	=> 'S’han actualitzat els detalls del grup d’imatges correctament.',
	'IMAGESET_ERR_ARCHIVE'		=> 'Seleccioneu un mètode per arxivar.',
	'IMAGESET_ERR_COPY_LONG'	=> 'La longitud màxima del copyright és de 60 caràcters.',
	'IMAGESET_ERR_NAME_CHARS'	=> 'El nom del grup d’imatges només pot contenir caràcters alfanumèrics, -, +, _ i l’espai.',
	'IMAGESET_ERR_NAME_EXIST'	=> 'Ja existeix un grup d’imatges amb aquest nom.',
	'IMAGESET_ERR_NAME_LONG'	=> 'La longitud màxima del nom del grup d’imatges és de 30 caràcters.',
	'IMAGESET_ERR_NOT_IMAGESET'	=> 'L’arxiu que heu especificat no conté un grup d’imatges vàlid.',
	'IMAGESET_ERR_STYLE_NAME'	=> 'Heu de proporcionar un nom per aquest grup d’imatges.',
	'IMAGESET_EXPORT'			=> 'Exporta el grup d’imatges',
	'IMAGESET_EXPORT_EXPLAIN'	=> 'Aquí podeu exportar un grup d’imatges en forma d’arxiu. Aquest arxiu contindrà totes les dades necessàries per instal·lar el grup d’imatges en un altre fòrum. Podeu seleccionar si baixeu el fitxer directament o situar-lo al directori “store” per baixar-lo després o per FTP.',
	'IMAGESET_EXPORTED'			=> 'S’ha exportat el grup d’imatges correctament i s’ha emmagatzemat a %s.',
	'IMAGESET_NAME'				=> 'Nom del grup d’imatges',
	'IMAGESET_REFRESHED'		=> 'S’ha refrescat el grup d’imatges correctament.',
	'IMAGESET_UPDATED'			=> 'S’ha actualitzat el grup d’imatges correctament.',
	'ITALIC'					=> 'Cursiva',

	'IMG_CAT_BUTTONS'		=> 'Botons localitzats',
	'IMG_CAT_CUSTOM'		=> 'Imatges personalitzades',
	'IMG_CAT_FOLDERS'		=> 'Icones de tema',
	'IMG_CAT_FORUMS'		=> 'Icones de fòrum',
	'IMG_CAT_ICONS'			=> 'Icones generals',
	'IMG_CAT_LOGOS'			=> 'Logos',
	'IMG_CAT_POLLS'			=> 'Imatges d’enquesta',
	'IMG_CAT_UI'			=> 'Elements generals de la interfície d’usuari',
	'IMG_CAT_USER'			=> 'Imatges addicionals',

	'IMG_SITE_LOGO'			=> 'Logo principal',
	'IMG_UPLOAD_BAR'		=> 'Barra de progrés de la pujada',
	'IMG_POLL_LEFT'			=> 'Límit esquerre de l’enquesta',
	'IMG_POLL_CENTER'		=> 'Centre de l’enquesta',
	'IMG_POLL_RIGHT'		=> 'Límit dret de l’enquesta',
	'IMG_ICON_FRIEND'		=> 'Afegeix com a amic',
	'IMG_ICON_FOE'			=> 'Afegeix com a enemic',

	'IMG_FORUM_LINK'			=> 'Fòrum de tipus enllaç',
	'IMG_FORUM_READ'			=> 'Fòrum',
	'IMG_FORUM_READ_LOCKED'		=> 'Fòrum bloquejat',
	'IMG_FORUM_READ_SUBFORUM'	=> 'Subfòrum',
	'IMG_FORUM_UNREAD'			=> 'Fòrum amb entrades no llegides',
	'IMG_FORUM_UNREAD_LOCKED'	=> 'Fòrum amb entrades no llegides bloquejat',
	'IMG_FORUM_UNREAD_SUBFORUM'	=> 'Subfòrum amb entrades no llegides',
	'IMG_SUBFORUM_READ'			=> 'Llegenda del subfòrum',
	'IMG_SUBFORUM_UNREAD'		=> 'Llegenda del subfòrum amb entrades no llegides',

	'IMG_TOPIC_MOVED'			=> 'Tema desplaçat',

	'IMG_TOPIC_READ'				=> 'Tema',
	'IMG_TOPIC_READ_MINE'			=> 'Tema amb una entrada vostra',
	'IMG_TOPIC_READ_HOT'			=> 'Tema popular',
	'IMG_TOPIC_READ_HOT_MINE'		=> 'Tema popular amb una entrada vostra',
	'IMG_TOPIC_READ_LOCKED'			=> 'Tema bloquejat',
	'IMG_TOPIC_READ_LOCKED_MINE'	=> 'Tema bloquejat amb una entrada vostra',

	'IMG_TOPIC_UNREAD'				=> 'Tema amb entrades no llegides',
	'IMG_TOPIC_UNREAD_MINE'			=> 'Tema amb una entrada vostra i entrades no llegides',
	'IMG_TOPIC_UNREAD_HOT'			=> 'Tema popular amb entrades no llegides',
	'IMG_TOPIC_UNREAD_HOT_MINE'		=> 'Tema popular amb una entrada vostra i entrades no llegides',
	'IMG_TOPIC_UNREAD_LOCKED'		=> 'Tema bloquejat amb entrades no llegides',
	'IMG_TOPIC_UNREAD_LOCKED_MINE'	=> 'Tema bloquejat amb una entrada vostra i entrades no llegides',

	'IMG_STICKY_READ'				=> 'Tema recurrent',
	'IMG_STICKY_READ_MINE'			=> 'Tema recurrent amb una entrada vostra',
	'IMG_STICKY_READ_LOCKED'		=> 'Tema recurrent bloquejat',
	'IMG_STICKY_READ_LOCKED_MINE'	=> 'Tema recurrent bloquejat amb una entrada vostra',
	'IMG_STICKY_UNREAD'				=> 'Tema recurrent amb entrades no llegides',
	'IMG_STICKY_UNREAD_MINE'		=> 'Tema recurrent amb una entrada vostra i entrades no llegides',
	'IMG_STICKY_UNREAD_LOCKED'		=> 'Tema recurrent bloquejat amb entrades no llegides',
	'IMG_STICKY_UNREAD_LOCKED_MINE'	=> 'Tema recurrent bloquejat amb una entrada vostra i entrades no llegides',

	'IMG_ANNOUNCE_READ'					=> 'Avís',
	'IMG_ANNOUNCE_READ_MINE'			=> 'Avís amb una entrada vostra',
	'IMG_ANNOUNCE_READ_LOCKED'			=> 'Avís bloquejat',
	'IMG_ANNOUNCE_READ_LOCKED_MINE'		=> 'Avís bloquejat amb una entrada vostra',
	'IMG_ANNOUNCE_UNREAD'				=> 'Avís amb entrades no llegides',
	'IMG_ANNOUNCE_UNREAD_MINE'			=> 'Avís amb una entrada vostra i entrades no llegides',
	'IMG_ANNOUNCE_UNREAD_LOCKED'		=> 'Avís bloquejat amb entrades no llegides',
	'IMG_ANNOUNCE_UNREAD_LOCKED_MINE'	=> 'Avís bloquejat amb una entrada vostra i entrades no llegides',

	'IMG_GLOBAL_READ'					=> 'Avís global',
	'IMG_GLOBAL_READ_MINE'				=> 'Avís global amb una entrada vostra',
	'IMG_GLOBAL_READ_LOCKED'			=> 'Avís global bloquejat',
	'IMG_GLOBAL_READ_LOCKED_MINE'		=> 'Avís global bloquejat amb una entrada vostra',
	'IMG_GLOBAL_UNREAD'					=> 'Avís global amb entrades no llegides',
	'IMG_GLOBAL_UNREAD_MINE'			=> 'Avís global amb una entrada vostra i entrades no llegides',
	'IMG_GLOBAL_UNREAD_LOCKED'			=> 'Avís global bloquejat amb entrades no llegides',
	'IMG_GLOBAL_UNREAD_LOCKED_MINE'		=> 'Avís global bloquejat amb una entrada vostra i entrades no llegides',

	'IMG_PM_READ'		=> 'Missatge privat llegit',
	'IMG_PM_UNREAD'		=> 'Missatge privat no llegit',

	'IMG_ICON_BACK_TOP'		=> 'Torna a l’inici',

	'IMG_ICON_CONTACT_AIM'		=> 'AIM',
	'IMG_ICON_CONTACT_EMAIL'	=> 'Envia un correu electrònic',
	'IMG_ICON_CONTACT_ICQ'		=> 'ICQ',
	'IMG_ICON_CONTACT_JABBER'	=> 'Jabber',
	'IMG_ICON_CONTACT_MSNM'		=> 'MSNM',
	'IMG_ICON_CONTACT_PM'		=> 'Envia un missatge',
	'IMG_ICON_CONTACT_YAHOO'	=> 'YIM',
	'IMG_ICON_CONTACT_WWW'		=> 'Lloc web',

	'IMG_ICON_POST_DELETE'			=> 'Elimina l’entrada',
	'IMG_ICON_POST_EDIT'			=> 'Edita l’entrada',
	'IMG_ICON_POST_INFO'			=> 'Mostra els detalls de l’entrada',
	'IMG_ICON_POST_QUOTE'			=> 'Cita l’entrada',
	'IMG_ICON_POST_REPORT'			=> 'Informa de l’entrada',
	'IMG_ICON_POST_TARGET'			=> 'Minientrada',
	'IMG_ICON_POST_TARGET_UNREAD'	=> 'Minientrada no llegida',


	'IMG_ICON_TOPIC_ATTACH'			=> 'Fitxer adjunt',
	'IMG_ICON_TOPIC_LATEST'			=> 'Darrera entrada',
	'IMG_ICON_TOPIC_NEWEST'			=> 'Darrera entrada no llegida',
	'IMG_ICON_TOPIC_REPORTED'		=> 'Entrada informada',
	'IMG_ICON_TOPIC_UNAPPROVED'		=> 'Entrada no aprovada',

	'IMG_ICON_USER_ONLINE'		=> 'Usuari connectat',
	'IMG_ICON_USER_OFFLINE'		=> 'Usuari desconnectat',
	'IMG_ICON_USER_PROFILE'		=> 'Mostra el perfil',
	'IMG_ICON_USER_SEARCH'		=> 'Cerca entrades',
	'IMG_ICON_USER_WARN'		=> 'Avisa l’usuari',

	'IMG_BUTTON_PM_FORWARD'		=> 'Reenvia el missatge privat',
	'IMG_BUTTON_PM_NEW'			=> 'Missatge privat nou',
	'IMG_BUTTON_PM_REPLY'		=> 'Respon el missatge privat',
	'IMG_BUTTON_TOPIC_LOCKED'	=> 'Tema bloquejat',
	'IMG_BUTTON_TOPIC_NEW'		=> 'Tema nou',
	'IMG_BUTTON_TOPIC_REPLY'	=> 'Respon al tema',

	'IMG_USER_ICON1'		=> 'Imatge definida per l’usuari 1',
	'IMG_USER_ICON2'		=> 'Imatge definida per l’usuari 2',
	'IMG_USER_ICON3'		=> 'Imatge definida per l’usuari 3',
	'IMG_USER_ICON4'		=> 'Imatge definida per l’usuari 4',
	'IMG_USER_ICON5'		=> 'Imatge definida per l’usuari 5',
	'IMG_USER_ICON6'		=> 'Imatge definida per l’usuari 6',
	'IMG_USER_ICON7'		=> 'Imatge definida per l’usuari 7',
	'IMG_USER_ICON8'		=> 'Imatge definida per l’usuari 8',
	'IMG_USER_ICON9'		=> 'Imatge definida per l’usuari 9',
	'IMG_USER_ICON10'		=> 'Imatge definida per l’usuari 10',

	'INCLUDE_DIMENSIONS'		=> 'Inclou les dimensions',
	'INCLUDE_IMAGESET'			=> 'Inclou el grup d’imatges',
	'INCLUDE_TEMPLATE'			=> 'Inclou la plantilla',
	'INCLUDE_THEME'				=> 'Inclou el tema',
	'INHERITING_FROM'			=> 'Hereta de',
	'INSTALL_IMAGESET'			=> 'Instal·la el grup d’imatges',
	'INSTALL_IMAGESET_EXPLAIN'	=> 'Aquí podeu instal·lar el grup d’imatges que trieu. Si ho voleu, podeu editar determinats detalls o utilitzar els valors per defecte de la instal·lació.',
	'INSTALL_STYLE'				=> 'Instal·la l’estil',
	'INSTALL_STYLE_EXPLAIN'		=> 'Aquí podeu instal·lar un estil nou i, si cal, els elements d’estil corresponents. Si ja teniu els elements d’estil rellevants instal·lats, no es sobreescriuran. Alguns estils necessiten que els elements d’estil ja estiguin instal·lats. Si intenteu instal·lar un d’aquests estils i no teniu el elements necessaris rebreu un avís.',
	'INSTALL_TEMPLATE'			=> 'Instal·la la plantilla',
	'INSTALL_TEMPLATE_EXPLAIN'	=> 'Aquí podeu instal·lar un nou grup de plantilles. Depenent de la configuració del servidor tindreu un nombre d’opcions diferents.',
	'INSTALL_THEME'				=> 'Instal·la el tema',
	'INSTALL_THEME_EXPLAIN'		=> 'Aquí podeu instal·lar el tema que trieu. Si ho voleu, podeu editar determinats detalls o utilitzar els valors per defecte de la instal·lació.',
	'INSTALLED_IMAGESET'		=> 'Grups d’imatges instal·lats',
	'INSTALLED_STYLE'			=> 'Estils instal·lats',
	'INSTALLED_TEMPLATE'		=> 'Plantilles instal·lades',
	'INSTALLED_THEME'			=> 'Temes instal·lats',

	'LINE_SPACING'				=> 'Espaiat de línia',
	'LOCALISED_IMAGES'			=> 'Localitzat',
	'LOCATION_DISABLED_EXPLAIN'	=> 'Aquesta configuració és heretada i no es pot canviar.',


	'NO_CLASS'					=> 'No s’ha pogut trobar la classe al full d’estil.',
	'NO_IMAGESET'				=> 'No s’ha pogut trobar el grup d’imatges al sistema de fitxers.',
	'NO_IMAGE'					=> 'Sense imatge',
	'NO_IMAGE_ERROR'			=> 'No s’ha pogut trobar la imatge al sistema de fitxers.',
	'NO_STYLE'					=> 'No s’ha pogut trobar l’estil al sistema de fitxers.',
	'NO_TEMPLATE'				=> 'No s’ha pogut trobar la plantilla al sistema de fitxers.',
	'NO_THEME'					=> 'No s’ha pogut trobar el tema al sistema de fitxers.',
	'NO_UNINSTALLED_IMAGESET'	=> 'No s’han detectat grups d’imatges desinstal·lats.',
	'NO_UNINSTALLED_STYLE'		=> 'No s’han detectat estils desinstal·lats.',
	'NO_UNINSTALLED_TEMPLATE'	=> 'No s’han detectat plantilles desinstal·lades.',
	'NO_UNINSTALLED_THEME'		=> 'No s’han detectat temes desinstal·lats.',
	'NO_UNIT'					=> 'Cap',

	'ONLY_IMAGESET'			=> 'Aquest és l’únic grup d’imatges que queda, no podeu eliminar-lo.',
	'ONLY_STYLE'			=> 'Aquest és l’únic estil que queda, no podeu eliminar-lo.',
	'ONLY_TEMPLATE'			=> 'Aquest és l’únic grup de plantilles que queda, no podeu eliminar-lo.',
	'ONLY_THEME'			=> 'Aquest és l’únic tema que queda, no podeu eliminar-lo.',
	'OPTIONAL_BASIS'		=> 'De manera opcional',

	'REFRESH'					=> 'Refresca',
	'REPEAT_NO'					=> 'Cap',
	'REPEAT_X'					=> 'Només horitzontalment',
	'REPEAT_Y'					=> 'Només verticalment',
	'REPEAT_ALL'				=> 'En les dues direccions',
	'REPLACE_IMAGESET'			=> 'Reemplaça el grup d’imatges amb',
	'REPLACE_IMAGESET_EXPLAIN'	=> 'Aquest grup d’imatges reemplaçarà el que esteu eliminant als estils que l’utilitzen.',
	'REPLACE_STYLE'				=> 'Reemplaça l’estil amb',
	'REPLACE_STYLE_EXPLAIN'		=> 'Aquest estil reemplaçarà el que esteu eliminant per als membres que l’utilitzen.',
	'REPLACE_TEMPLATE'			=> 'Reemplaça la plantilla amb',
	'REPLACE_TEMPLATE_EXPLAIN'	=> 'Aquest grup de plantilles reemplaçarà el que esteu eliminant als estils que l’utilitzen.',
	'REPLACE_THEME'				=> 'Reemplaça el tema amb',
	'REPLACE_THEME_EXPLAIN'		=> 'Aquest tema reemplaçarà el que esteu eliminant als estils que l’utilitzen.',
	'REQUIRES_IMAGESET'			=> 'Aquest estil necessita que tingueu instal·lat el grup d’imatges %s.',
	'REQUIRES_TEMPLATE'			=> 'Aquest estil necessita que tingueu instal·lat el grup de plantilles %s.',
	'REQUIRES_THEME'			=> 'Aquest estil necessita que tingueu instal·lat el tema %s.',

	'SELECT_IMAGE'				=> 'Seleccioneu una imatge',
	'SELECT_TEMPLATE'			=> 'Seleccioneu un fitxer de plantilla',
	'SELECT_THEME'				=> 'Seleccioneu un fitxer de tema',
	'SELECTED_IMAGE'			=> 'Imatge seleccionada',
	'SELECTED_IMAGESET'			=> 'Grup d’imatges seleccionat',
	'SELECTED_TEMPLATE'			=> 'Plantilla seleccionada',
	'SELECTED_TEMPLATE_FILE'	=> 'Fitxer de plantilla seleccionat',
	'SELECTED_THEME'			=> 'Tema seleccionat',
	'SELECTED_THEME_FILE'		=> 'Fitxer de tema seleccionat',
	'STORE_DATABASE'			=> 'Base de dades',
	'STORE_FILESYSTEM'			=> 'Sistema de fitxers',
	'STYLE_ACTIVATE'			=> 'Activa',
	'STYLE_ACTIVE'				=> 'Actiu',
	'STYLE_ADDED'				=> 'S’ha afegit l’estil correctament.',
	'STYLE_DEACTIVATE'			=> 'Desactiva',
	'STYLE_DEFAULT'				=> 'És l’estil per defecte',
	'STYLE_DELETED'				=> 'S’ha eliminat l’estil correctament.',
	'STYLE_DETAILS_UPDATED'		=> 'S’ha editat l’estil correctament.',
	'STYLE_ERR_ARCHIVE'			=> 'Seleccioneu un mètode per arxivar.',
	'STYLE_ERR_COPY_LONG'		=> 'La longitud màxima del copyright és de 60 caràcters.',
	'STYLE_ERR_MORE_ELEMENTS'	=> 'Heu de seleccionar un element d’estil com a mínim.',
	'STYLE_ERR_NAME_CHARS'		=> 'El nom de l’estil només pot contenir caràcters alfanumèrics, -, +, _ i l’espai.',
	'STYLE_ERR_NAME_EXIST'		=> 'Ja existeix un estil amb aquest nom.',
	'STYLE_ERR_NAME_LONG'		=> 'La longitud màxima del nom de l’estil és de 30 caràcters.',
	'STYLE_ERR_NO_IDS'			=> 'Heu de seleccionar una plantilla, un tema i un grup d’imatges per aquest estil.',
	'STYLE_ERR_NOT_STYLE'		=> 'El fitxer importat o pujat no conté un arxiu d’estil vàlid.',
	'STYLE_ERR_STYLE_NAME'		=> 'Heu de proporcionar un nom per aquest estil.',
	'STYLE_EXPORT'				=> 'Exporta l’estil',
	'STYLE_EXPORT_EXPLAIN'		=> 'Aquí podeu exportar un estil en forma d’arxiu. No cal que un estil contingui tots els elements però n’ha de contenir com a mínim un. Per exemple si heu creat un tema i grup d’imatges per a una plantilla utilitzada freqüentment, podeu exportar simplement el tema i el grup d’imatges i ometre la plantilla. Podeu seleccionar si baixeu el fitxer directament o situar-lo al directori “store” per baixar-lo després o per FTP.',
	'STYLE_EXPORTED'			=> 'S’ha exportat l’estil correctament i s’ha emmagatzemat a %s.',
	'STYLE_IMAGESET'			=> 'Grup d’imatges',
	'STYLE_NAME'				=> 'Nom de l’estil',
	'STYLE_TEMPLATE'			=> 'Plantilla',
	'STYLE_THEME'				=> 'Tema',
	'STYLE_USED_BY'				=> 'Utilitzat per (incloent-hi els robots)',

	'TEMPLATE_ADDED'			=> 'S’ha afegit i emmagatzemat el grup de plantilles nou al sistema de fitxers.',
	'TEMPLATE_ADDED_DB'			=> 'S’ha afegit i emmagatzemat el grup de plantilles nou a la base de dades.',
	'TEMPLATE_CACHE'			=> 'Memòria cau de plantilles',
	'TEMPLATE_CACHE_EXPLAIN'	=> 'Per defecte el phpBB emmagatzema la versió compilada de les plantilles a la memòria cau. Això disminueix la càrrega sobre el servidor cada vegada que es visualitza una pàgina i, per tant, pot reduir el temps de generació de les pàgines. Aquí podeu veure l’estat de la memòria cau de cada fitxer i buidar-la per a fitxers concrets o completament.',
	'TEMPLATE_CACHE_CLEARED'	=> 'S’ha buidat la memòria cau de plantilles correctament.',
	'TEMPLATE_CACHE_EMPTY'		=> 'No hi ha plantilles emmagatzemades a la memòria cau.',
	'TEMPLATE_DELETED'			=> 'S’ha eliminat el grup de plantilles correctament.',
	'TEMPLATE_DELETE_DEPENDENT'	=> 'No es pot eliminar el grup de plantilles ja que hi ha un o més grups de plantilles que n’hereten valors:',
	'TEMPLATE_DELETED_FS'		=> 'S’ha eliminat el grup de plantilles de la base de dades correctament però poden haver quedat alguns fitxers al sistema de fitxers.',
	'TEMPLATE_DETAILS_UPDATED'	=> 'S’han actualitzat els detalls de la plantilla correctament.',
	'TEMPLATE_EDITOR'			=> 'Editor de plantilles en HTML cru',
	'TEMPLATE_EDITOR_HEIGHT'	=> 'Alçària de l’editor',
	'TEMPLATE_ERR_ARCHIVE'		=> 'Seleccioneu un mètode per arxivar.',
	'TEMPLATE_ERR_CACHE_READ'	=> 'No s’ha pogut obrir el directori utilitzat per emmagatzemar les versions emmagatzemades a la memòria cau de les plantilles.',
	'TEMPLATE_ERR_COPY_LONG'	=> 'La longitud màxima del copyright és de 60 caràcters.',
	'TEMPLATE_ERR_NAME_CHARS'	=> 'El nom de la plantilla només pot contenir caràcters alfanumèrics, -, +, _ i l’espai.',
	'TEMPLATE_ERR_NAME_EXIST'	=> 'Ja existeix una plantilla amb aquest nom.',
	'TEMPLATE_ERR_NAME_LONG'	=> 'La longitud màxima del nom de la plantilla és de 30 caràcters.',
	'TEMPLATE_ERR_NOT_TEMPLATE'	=> 'L’arxiu que heu especificat no conté un grup de plantilles vàlid.',
	'TEMPLATE_ERR_REQUIRED_OR_INCOMPLETE' => 'El nou grup de plantilles requereix que la plantilla %s estigui instal·lada i no heretar d’ell mateix.',
	'TEMPLATE_ERR_STYLE_NAME'	=> 'Heu de proporcionar un nom per aquesta plantilla.',
	'TEMPLATE_EXPORT'			=> 'Exporta les plantilles',
	'TEMPLATE_EXPORT_EXPLAIN'	=> 'Aquí podeu exportar un grup de plantilles en forma d’arxiu. Aquest arxiu contindrà totes les dades necessàries per instal·lar les plantilles en un altre fòrum. Podeu seleccionar si baixeu el fitxer directament o situar-lo al directori “store” per baixar-lo després o per FTP.',
	'TEMPLATE_EXPORTED'			=> 'S’han exportat les plantilles correctament i s’han emmagatzemat a %s.',
	'TEMPLATE_FILE'				=> 'Fitxer de plantilla',
	'TEMPLATE_FILE_UPDATED'		=> 'S’ha actualitzat el fitxer de plantilla correctament.',
	'TEMPLATE_INHERITS'			=> 'Aquest grup de plantilles hereta de %s i, per tant, no pot tenir una configuració d’emmagatzemament diferent a la de la super plantilla.',
	'TEMPLATE_LOCATION'			=> 'Emmagatzema les plantilles a',
	'TEMPLATE_LOCATION_EXPLAIN'	=> 'Les imatges sempre s’emmagatzemen al sistema de fitxers.',
	'TEMPLATE_NAME'				=> 'Nom de la plantilla',
	'TEMPLATE_FILE_NOT_WRITABLE'=> 'No s’ha pogut escriure sobre el fitxer de plantilla %s. Comproveu els permisos del directori i dels fitxers.',
	'TEMPLATE_REFRESHED'		=> 'S’ha refrescat la plantilla correctament.',

	'THEME_ADDED'				=> 'S’ha afegit el tema nou al sistema de fitxers.',
	'THEME_ADDED_DB'			=> 'S’ha afegit el tema nou a la base de dades.',
	'THEME_CLASS_ADDED'			=> 'S’ha afegit la classe personalitzada correctament.',
	'THEME_DELETED'				=> 'S’ha eliminat el tema correctament.',
	'THEME_DELETED_FS'			=> 'S’ha eliminat el tema de la base de dades correctament però poden haver quedat alguns fitxers al sistema de fitxers.',
	'THEME_DETAILS_UPDATED'		=> 'S’han actualitzat els detalls del tema correctament.',
	'THEME_EDITOR'				=> 'Editor de temes',
	'THEME_EDITOR_HEIGHT'		=> 'Alçària de l’editor de temes',
	'THEME_ERR_ARCHIVE'			=> 'Seleccioneu un mètode per arxivar.',
	'THEME_ERR_CLASS_CHARS'		=> 'Els noms de classe només poden contenir caràcters alfanumèrics més ., :, -, _ i #.',
	'THEME_ERR_COPY_LONG'		=> 'La longitud màxima del copyright és de 60 caràcters.',
	'THEME_ERR_NAME_CHARS'		=> 'El nom del tema només pot contenir caràcters alfanumèrics, -, +, _ i l’espai.',
	'THEME_ERR_NAME_EXIST'		=> 'Ja existeix un tema amb aquest nom.',
	'THEME_ERR_NAME_LONG'		=> 'La longitud màxima del nom del tema és de 30 caràcters.',
	'THEME_ERR_NOT_THEME'		=> 'L’arxiu que heu especificat no conté un tema vàlid.',
	'THEME_ERR_REFRESH_FS'		=> 'Aquest tema està emmagatzemat al sistema de fitxers i, per tant, no cal refrescar-lo.',
	'THEME_ERR_STYLE_NAME'		=> 'Heu de proporcionar un nom per aquest tema.',
	'THEME_FILE'				=> 'Fitxer de tema',
	'THEME_EXPORT'				=> 'Exporta el tema',
	'THEME_EXPORT_EXPLAIN'		=> 'Aquí podeu exportar un tema en forma d’arxiu. Aquest arxiu contindrà totes les dades necessàries per instal·lar el tema en un altre fòrum. Podeu seleccionar si baixeu el fitxer directament o situar-lo al directori “store” per baixar-lo després o per FTP.',
	'THEME_EXPORTED'			=> 'S’ha exportat el tema correctament i s’ha emmagatzemat a %s.',
	'THEME_LOCATION'			=> 'Emmagatzema el full d’estil a',
	'THEME_LOCATION_EXPLAIN'	=> 'Les imatges sempre s’emmagatzemen al sistema de fitxers.',
	'THEME_NAME'				=> 'Nom del tema',
	'THEME_REFRESHED'			=> 'S’ha refrescat el tema correctament.',
	'THEME_UPDATED'				=> 'S’ha actualitzat el tema correctament.',

	'UNDERLINE'				=> 'Subratllat',
	'UNINSTALLED_IMAGESET'	=> 'Grups d’imatges desinstal·lats',
	'UNINSTALLED_STYLE'		=> 'Estils desinstal·lats',
	'UNINSTALLED_TEMPLATE'	=> 'Plantilles desinstal·lades',
	'UNINSTALLED_THEME'		=> 'Temes desinstal·lats',
	'UNSET'					=> 'No definit',

));

?>