<?php
/**
*
* acp_styles.php [Lithuanian]
*
* @package language
* @version $Id: $
* @copyright (c) 2010 phpBB Group
* @author 2010-11-21 - Vilius Šumskas
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
	'ACP_IMAGESETS_EXPLAIN'	=> 'Paveikslėlių komplektai sudaryti iš forumų, katalogų, mygtukų ir kitų ne stiliaus diskusijų paveikslėlių. Čia galite keisti, eksportuoti arba ištrinti esančius paveikslėlių komplektus ir įkelti arba įjungti naujus komplektus.',
	'ACP_STYLES_EXPLAIN'	=> 'Čia galite valdyti diskusijų lentos stilius. Stilius sudarytas iš šablono, temos ir paveikslėlių komplekto. Galite keisti, ištrinti, išjungti, įjungti įdiegtus stilius arba įkelti naujus. Taip pat, pasinaudoję peržiūros funkcija, galite pasižiūrėti kaip stilius atrodo. Standartinis stilius yra pažymėtas žvaigždute (*). Šalia kiekvieno stiliaus rodoma kiek vartotojų naudojasi tuo stiliumi.',
	'ACP_TEMPLATES_EXPLAIN'	=> 'Šablonas sudarytas iš viso HTML kodo, kuris sudaro jūsų diskusijų lentos išdėstymą. Čia galite keisti, ištrinti ar eksportuoti esančius šablonus ir įkelti bei peržiūrėti naujus. Taip pat čia galite pakeisti šablonų kodą naudojamą BBKodo generavimui.',
	'ACP_THEMES_EXPLAIN'	=> 'Čia galite sukurti, įdiegti, keisti ir eksportuoti temas. Tema yra spalvų ir paveikslėlių derinys, kuris sujungtas su šablonu nurodo kaip turi atrodyti diskusijų lenta. Šių nustatymų gausa priklauso nuo jūsų serverio ir phpBB konfigūracijos. Daugiau informacijos šia tema rasite vartotojo vadove. Atsiminkite, kad kuriant naują temą, kaip pagrindo nebūtina naudoti esančios temos.',
	'ADD_IMAGESET'	=> 'Paveikslėlių komplekto kūrimas',
	'ADD_IMAGESET_EXPLAIN'	=> 'Čia galite sukurti naują paveikslėlių komplektą. Priklausomai nuo serverio konfigūracijos ir failų teisių, čia galite matyti papildomus nustatymus. Pavyzdžiui galėsite pagrįsti šį paveikslėlių komplektą jau esančiu. Taip pat galėsite įkelti ar importuoti (iš saugyklos katalogo) paveikslėlių komplekto archyvą. Jeigu pageidaujate, paveikslėlių komplekto pavadinimas gali būti įrašytas iš įkelto ar importuoto archyvo. Tokiu atveju tiesiog palikite paveikslėlių komplekto pavadinimo lauką tuščią.',
	'ADD_STYLE'	=> 'Stiliaus kūrimas',
	'ADD_STYLE_EXPLAIN'	=> 'Čia galite sukurti naują stilių. Priklausomai nuo serverio konfigūracijos ir failų teisių, čia galite matyti papildomus nustatymus. Pavyzdžiui galėsite pagrįsti šį stilių jau esančiu. Taip pat galėsite įkelti ar importuoti (iš saugyklos katalogo) stiliaus archyvą. Tokiu atveju stiliaus pavadinimas bus įrašytas automatiškai.',
	'ADD_TEMPLATE'	=> 'Šablono kūrimas',
	'ADD_TEMPLATE_EXPLAIN'	=> 'Čia galite sukurti naują šabloną. Priklausomai nuo serverio konfigūracijos ir failų teisių, čia galite matyti papildomus nustatymus. Pavyzdžiui galėsite pagrįsti šį šabloną jau esančiu. Taip pat galėsite įkelti ar importuoti (iš saugyklos katalogo) šablono archyvą. Jeigu pageidaujate, šablono pavadinimas gali būti įrašytas iš įkelto ar importuoto archyvo. Tokiu atveju tiesiog palikite šablono pavadinimo lauką tuščią.',
	'ADD_THEME'	=> 'Temos kūrimas',
	'ADD_THEME_EXPLAIN'	=> 'Čia galite sukurti naują temą. Priklausomai nuo serverio konfigūracijos ir failų teisių, čia galite matyti papildomus nustatymus. Pavyzdžiui galėsite pagrįsti šią temą jau esančia. Taip pat galėsite įkelti ar importuoti (iš saugyklos katalogo) temos archyvą. Jeigu pageidaujate, temos pavadinimas gali būti įrašytas iš įkelto ar importuoto archyvo. Tokiu atveju tiesiog palikite temos pavadinimo lauką tuščią.',
	'ARCHIVE_FORMAT'	=> 'Archyvo failo tipas',
	'AUTOMATIC_EXPLAIN'	=> 'Jeigu norite naudoti automatinį atpažinimą, palikite šį lauką tuščią.',
	'BACKGROUND'	=> 'Fonas',
	'BACKGROUND_COLOUR'	=> 'Fono spalva',
	'BACKGROUND_IMAGE'	=> 'Fono paveikslėlis',
	'BACKGROUND_REPEAT'	=> 'Fono paveikslėlio pasikartojimas',
	'BOLD'	=> 'Paryškintas',
	'CACHE'	=> 'Kešas',
	'CACHE_CACHED'	=> 'Kešuotas',
	'CACHE_FILENAME'	=> 'Šablono failas',
	'CACHE_FILESIZE'	=> 'Failo dydis',
	'CACHE_MODIFIED'	=> 'Pakeistas',
	'CONFIRM_IMAGESET_REFRESH'	=> 'Ar tikrai norite atnaujinti visus paveikslėlių komplekto duomenis? Visi pakeitimai atlikti paveikslėlių komplektų redaktoriaus pagalba bus pakeisti nustatymais iš paveikslėlių komplekto konfigūracinio failo.',
	'CONFIRM_TEMPLATE_CLEAR_CACHE'	=> 'Ar tikrai norite ištrinti visas kešuojamas šablono failų versijas?',
	'CONFIRM_TEMPLATE_REFRESH'	=> 'Ar tikrai norite atnaujinti duomenų bazės šablono duomenis su duomenimis esančiais failų sistemoje? Taip perrašysite visus pakeitimus atliktus šablonų redaktoriumi šablonui saugomam duomenų bazėje.',
	'CONFIRM_THEME_REFRESH'	=> 'Ar tikrai norite atnaujinti duomenų bazės temos duomenis su duomenimis esančiais failų sistemoje? Taip perrašysite visus pakeitimus atliktus temų redaktoriumi temai saugomai duomenų bazėje.',
	'COPYRIGHT'	=> 'Autorinės teisės',
	'CREATE_IMAGESET'	=> 'Sukurti naują paveikslėlių komplektą',
	'CREATE_STYLE'	=> 'Sukurti naują stilių',
	'CREATE_TEMPLATE'	=> 'Sukurti naują šabloną',
	'CREATE_THEME'	=> 'Sukurti naują temą',
	'CURRENT_IMAGE'	=> 'Dabartinis paveikslėlis',
	'DEACTIVATE_DEFAULT'	=> 'Jūs negalite išjungti standartinio stiliaus.',
	'DELETE_FROM_FS'	=> 'Ištrinti iš failų sistemos',
	'DELETE_IMAGESET'	=> 'Paveikslėlių komplekto trynimas',
	'DELETE_IMAGESET_EXPLAIN'	=> 'Čia iš duomenų bazės galite ištrinti pasirinktą paveikslėlių komplektą. Atsiminkite, kad sugrąžinti komplekto atgal nebegalėsite. Todėl iš pradžių rekomenduojame išsaugoti komplektą ateičiai.',
	'DELETE_STYLE'	=> 'Stiliaus trynimas',
	'DELETE_STYLE_EXPLAIN'	=> 'Čia galite ištrinti pasirinktą stilių. Iš čia negalėsite ištrinti visų stiliaus elementų. Juos reikia ištrinti atskirai, per atitinkamus puslapius. Būkite atsargūs, nes ištrynę stilių nebegalėsite jo sugrąžinti.',
	'DELETE_TEMPLATE'	=> 'Šablono trynimas',
	'DELETE_TEMPLATE_EXPLAIN'	=> 'Čia iš duomenų bazės galite ištrinti pasirinktą šabloną. Atsiminkite, kad sugrąžinti šablono atgal nebegalėsite. Todėl iš pradžių rekomenduojame išsaugoti šabloną ateičiai.',
	'DELETE_THEME'	=> 'Temos trynimas',
	'DELETE_THEME_EXPLAIN'	=> 'Čia iš duomenų bazės galite ištrinti pasirinktą temą. Atsiminkite, kad sugrąžinti temos atgal nebegalėsite. Todėl iš pradžių rekomenduojame išsaugoti temą ateičiai.',
	'DETAILS'	=> 'Aprašymas',
	'DIMENSIONS_EXPLAIN'	=> 'Jeigu čia pasirinksite Taip, bus įtraukti ir pločio/aukščio parametrai.',
	'EDIT_DETAILS_IMAGESET'	=> 'Paveikslėlių komplekto aprašymo redagavimas',
	'EDIT_DETAILS_IMAGESET_EXPLAIN'	=> 'Čia galite pakeisti kai kuriuos paveikslėlių komplekto parametrus, pavyzdžiui jo pavadinimą.',
	'EDIT_DETAILS_STYLE'	=> 'Stiliaus keitimas',
	'EDIT_DETAILS_STYLE_EXPLAIN'	=> 'Pasinaudoję forma apačioje galite pakeisti esamą stilių. Galite keisti šablono, temos ir paveikslėlių komplekto kombinaciją, kuri ir aprašo stilių. Taip pat čia galite padaryti stilių standartiniu.',
	'EDIT_DETAILS_TEMPLATE'	=> 'Šablono aprašymo redagavimas',
	'EDIT_DETAILS_TEMPLATE_EXPLAIN'	=> 'Čia galite pakeisti kai kuriuos šablono parametrus, pavyzdžiui jo pavadinimą. Taip pat čia galite pakeisti šablono saugojimo būdą iš failų sistemos į duomenų bazę ir atvirkščiai. Ši galimybė priklauso nuo jūsų PHP konfigūracijos ir ar internetinis serveris turi teises rašyti į šablono failus.',
	'EDIT_DETAILS_THEME'	=> 'Temos aprašymo redagavimas',
	'EDIT_DETAILS_THEME_EXPLAIN'	=> 'Čia galite pakeisti kai kuriuos temos parametrus, pavyzdžiui jos pavadinimą. Taip pat čia galite pakeisti temos saugojimo būdą iš failų sistemos į duomenų bazę ir atvirkščiai. Ši galimybė priklauso nuo jūsų PHP konfigūracijos ir ar internetinis serveris turi teises rašyti į temos failus.',
	'EDIT_IMAGESET'	=> 'Paveikslėlių komplekto keitimas',
	'EDIT_IMAGESET_EXPLAIN'	=> 'Čia galite keisti paveikslėlius, kurie sudaro paveikslėlių komplektą. Taip pat galite nurodyti paveikslėlio dimensijas. Nurodyti dimensijų neprivaloma, tačiau kai kuriose naršyklėse tai gali išspręsti kai kurias vaizdavimo klaidas. Kita vertus, jeigu jų nenurodysite, bus mažesnis duomenų bazės dydis.',
	'EDIT_TEMPLATE'	=> 'Šablono redagavimas',
	'EDIT_TEMPLATE_EXPLAIN'	=> 'Čia tiesiogiai galite redaguoti savo šablonus. Atsiminkite, kad pakeitimai yra amžini, ir negali būti grąžinti. Jeigu PHP gali rašyti į šablonų failus jūsų stilių kataloge, bet kokie čia įvykdyti pakeitimai bus iš karto į tuos failus įrašyti. Jeigu PHP negalės įrašyti tų failų, kad pakeitimai būtų išsaugoti, jie bus perkopijuoti į duomenų bazę. Redaguodami šablonus elkitės atsargiai, neužmirškite uždaryti visų kintamųjų {XXXX} ir sąlygos sakinių.',
	'EDIT_TEMPLATE_STORED_DB'	=> 'Įrašyti šablono failo nepavyko, todėl visi pakeitimai buvo išsaugoti duomenų bazėje.',
	'EDIT_THEME'	=> 'Temos keitimas',
	'EDIT_THEME_EXPLAIN'	=> 'Čia galite keisti pasirinktą temą, keisti jos spalvas, paveikslėlius ir t.t.',
	'EDIT_THEME_STORED_DB'	=> 'Įrašyti temos failo nepavyko, todėl visi pakeitimai buvo išsaugoti duomenų bazėje.',
	'EDIT_THEME_STORE_PARSED'	=> 'Temai būtina apdoroti stiliaus failą. Tai įmanoma tik tada, jeigu jis saugomas duomenų bazėje.',
	'EDITOR_DISABLED'	=> 'Šablonų redaktorius yra išjungtas.',
	'EXPORT'	=> 'Eksportuoti',
	'FOREGROUND'	=> 'Priešakinis planas',
	'FONT_COLOUR'	=> 'Šrifto spalva',
	'FONT_FACE'	=> 'Šrifto šeima',
	'FONT_FACE_EXPLAIN'	=> 'Jeigu norite nurodyti daugiau nei vieną šriftą, galite atskirti juos kableliais. Jeigu vartotojas neturės pirmo nurodyto šrifto, bus naudojamas pirmasis tolesnis įdiegtas šriftas.',
	'FONT_SIZE'	=> 'Šrifto dydis',
	'GLOBAL_IMAGES'	=> 'Globalūs',
	'HIDE_CSS'	=> 'Paslėpti CSS kodą',
	'IMAGE_WIDTH'	=> 'Paveikslėlio plotis',
	'IMAGE_HEIGHT'	=> 'Paveikslėlio aukštis',
	'IMAGE'	=> 'Paveikslėlis',
	'IMAGE_NAME'	=> 'Paveikslėlio pavadinimas',
	'IMAGE_PARAMETER'	=> 'Parametras',
	'IMAGE_VALUE'	=> 'Reikšmė',
	'IMAGESET_ADDED'	=> 'Į failų sistemą pridėtas naujas paveikslėlių komplektas.',
	'IMAGESET_ADDED_DB'	=> 'Į duomenų bazę pridėtas naujas paveikslėlių komplektas.',
	'IMAGESET_DELETED'	=> 'Paveikslėlių komplektas ištrintas sėkmingai.',
	'IMAGESET_DELETED_FS'	=> 'Paveikslėlių komplektas buvo ištrintas iš duomenų bazės, tačiau failų sistemoje galėjo likti keletas failų.',
	'IMAGESET_DETAILS_UPDATED'	=> 'Paveikslėlių komplekto aprašymas sėkmingai atnaujintas.',
	'IMAGESET_ERR_ARCHIVE'	=> 'Pasirinkite archyvo tipą.',
	'IMAGESET_ERR_COPY_LONG'	=> 'Autorinių teisių aprašymas negali būti ilgesnis nei 60 simbolių.',
	'IMAGESET_ERR_NAME_CHARS'	=> 'Paveikslėlių komplekto pavadinimas turi būti sudarytas tik iš raidžių, skaičių, simbolių -, +, _ ir tarpų.',
	'IMAGESET_ERR_NAME_EXIST'	=> 'Paveikslėlių komplektas tokiu pavadinimu jau egzistuoja.',
	'IMAGESET_ERR_NAME_LONG'	=> 'Paveikslėlių komplekto pavadinimas negali būti ilgesnis nei 30 simbolių.',
	'IMAGESET_ERR_NOT_IMAGESET'	=> 'Archyve, kurį pasirinkote, nėra jokio gero paveikslėlių komplekto.',
	'IMAGESET_ERR_STYLE_NAME'	=> 'Šiam paveikslėlių komplektui turite nurodyti pavadinimą.',
	'IMAGESET_EXPORT'	=> 'Paveikslėlių komplekto eksportas',
	'IMAGESET_EXPORT_EXPLAIN'	=> 'Čia, kaip archyvą, galite išeksportuoti paveikslėlių komplektą. Tame archyve bus visi reikalingi duomenys šio paveikslėlių komplekto diegimui kitoje diskusijų lentoje. Galite pasirinkti ar tiesiai atsisiųsti failą, ar padėti jį į saugyklos katalogą ir vėliau atsisiųsti per FTP.',
	'IMAGESET_EXPORTED'	=> 'Paveikslėlių komplektas sėkmingai išeksportuotas ir išsaugotas kataloge %s.',
	'IMAGESET_NAME'	=> 'Paveikslėlių komplekto pavadinimas',
	'IMAGESET_REFRESHED'	=> 'Paveikslėlių komplektas sėkmingai atnaujintas.',
	'IMAGESET_UPDATED'	=> 'Paveikslėlių komplektas sėkmingai pakeistas.',
	'ITALIC'	=> 'Pasviręs',
	'IMG_CAT_BUTTONS'	=> 'Pritaikyti naudojamai kalbai mygtukai',
	'IMG_CAT_CUSTOM'	=> 'Individualūs paveikslėliai',
	'IMG_CAT_FOLDERS'	=> 'Temų piktogramos',
	'IMG_CAT_FORUMS'	=> 'Forumų piktogramos',
	'IMG_CAT_ICONS'	=> 'Pagrindinės piktogramos',
	'IMG_CAT_LOGOS'	=> 'Logotipai',
	'IMG_CAT_POLLS'	=> 'Apklausų paveikslėliai',
	'IMG_CAT_UI'	=> 'Pagrindiniai vartotojo sąsajos elementai',
	'IMG_CAT_USER'	=> 'Papildomi paveikslėliai',
	'IMG_SITE_LOGO'	=> 'Pagrindinis logotipas',
	'IMG_UPLOAD_BAR'	=> 'Įkėlimo progreso juosta',
	'IMG_POLL_LEFT'	=> 'Apklausos kairė pusė',
	'IMG_POLL_CENTER'	=> 'Apklausos centras',
	'IMG_POLL_RIGHT'	=> 'Apklausos dešinė pusė',
	'IMG_ICON_FRIEND'	=> 'Pridėti kaip draugą',
	'IMG_ICON_FOE'	=> 'Pridėti kaip priešą',
	'IMG_FORUM_LINK'	=> 'Forumo nuoroda',
	'IMG_FORUM_READ'	=> 'Forumas',
	'IMG_FORUM_READ_LOCKED'	=> 'Užrakintas forumas',
	'IMG_FORUM_READ_SUBFORUM'	=> 'Subforumas',
	'IMG_FORUM_UNREAD'	=> 'Forume yra neperskaitytų pranešimų',
	'IMG_FORUM_UNREAD_LOCKED'	=> 'Užrakintame forume yra neperskaitytų pranešimų',
	'IMG_FORUM_UNREAD_SUBFORUM'	=> 'Subforume yra neperskaitytų pranešimų',
	'IMG_SUBFORUM_READ'	=> 'Subforumas legendoje',
	'IMG_SUBFORUM_UNREAD'	=> 'Subforumas su neperskaitytais pranešimais legendoje',
	'IMG_TOPIC_MOVED'	=> 'Tema perkelta',
	'IMG_TOPIC_READ'	=> 'Tema',
	'IMG_TOPIC_READ_MINE'	=> 'Tema, kurioje rašiau aš pats',
	'IMG_TOPIC_READ_HOT'	=> 'Populiari tema',
	'IMG_TOPIC_READ_HOT_MINE'	=> 'Populiari tema, kurioje rašiau aš pats',
	'IMG_TOPIC_READ_LOCKED'	=> 'Užrakinta tema',
	'IMG_TOPIC_READ_LOCKED_MINE'	=> 'Užrakinta tema, kurioje rašiau aš pats',
	'IMG_TOPIC_UNREAD'	=> 'Temoje yra neperskaitytų pranešimų',
	'IMG_TOPIC_UNREAD_MINE'	=> 'Tema, kurioje yra neperskaitytų pranešimų ir kurioje rašiau aš pats',
	'IMG_TOPIC_UNREAD_HOT'	=> 'Populiari tema, kurioje yra neperskaitytų pranešimų',
	'IMG_TOPIC_UNREAD_HOT_MINE'	=> 'Populiari tema, kurioje yra neperskaitytų pranešimų ir kurioje rašiau aš pats',
	'IMG_TOPIC_UNREAD_LOCKED'	=> 'Užrakinta tema, kurioje yra neperskaitytų pranešimų',
	'IMG_TOPIC_UNREAD_LOCKED_MINE'	=> 'Užrakinta tema, kurioje yra neperskaitytų pranešimų ir kurioje rašiau aš pats',
	'IMG_STICKY_READ'	=> 'Dažna tema',
	'IMG_STICKY_READ_MINE'	=> 'Dažna tema, kurioje rašiau aš pats',
	'IMG_STICKY_READ_LOCKED'	=> 'Užrakinta dažna tema',
	'IMG_STICKY_READ_LOCKED_MINE'	=> 'Užrakinta dažna tema, kurioje rašiau aš pats',
	'IMG_STICKY_UNREAD'	=> 'Dažna tema, kurioje yra neperskaitytų pranešimų',
	'IMG_STICKY_UNREAD_MINE'	=> 'Dažna tema, kurioje yra neperskaitytų pranešimų ir kurioje rašiau aš pats',
	'IMG_STICKY_UNREAD_LOCKED'	=> 'Užrakinta dažna tema, kurioje yra neperskaitytų pranešimų',
	'IMG_STICKY_UNREAD_LOCKED_MINE'	=> 'Užrakinta dažna tema, kurioje yra neperskaitytų pranešimų ir kurioje rašiau aš pats',
	'IMG_ANNOUNCE_READ'	=> 'Svarbi tema',
	'IMG_ANNOUNCE_READ_MINE'	=> 'Svarbi tema, kurioje rašiau aš pats',
	'IMG_ANNOUNCE_READ_LOCKED'	=> 'Užrakinta svarbi tema',
	'IMG_ANNOUNCE_READ_LOCKED_MINE'	=> 'Užrakinta svarbi tema, kurioje rašiau aš pats',
	'IMG_ANNOUNCE_UNREAD'	=> 'Svarbi tema, kurioje yra neperskaitytų pranešimų',
	'IMG_ANNOUNCE_UNREAD_MINE'	=> 'Svarbi tema, kurioje yra neperskaitytų pranešimų ir kurioje rašiau aš pats',
	'IMG_ANNOUNCE_UNREAD_LOCKED'	=> 'Užrakinta svarbi tema, kurioje yra neperskaitytų pranešimų',
	'IMG_ANNOUNCE_UNREAD_LOCKED_MINE'	=> 'Užrakinta svarbi tema, kurioje yra neperskaitytų pranešimų ir kurioje rašiau aš pats',
	'IMG_GLOBAL_READ'	=> 'Globali tema',
	'IMG_GLOBAL_READ_MINE'	=> 'Globali tema, kurioje rašiau aš pats',
	'IMG_GLOBAL_READ_LOCKED'	=> 'Užrakinta globali tema',
	'IMG_GLOBAL_READ_LOCKED_MINE'	=> 'Užrakinta globali tema, kurioje rašiau aš pats',
	'IMG_GLOBAL_UNREAD'	=> 'Globali tema, kurioje yra neperskaitytų pranešimų',
	'IMG_GLOBAL_UNREAD_MINE'	=> 'Globali tema, kurioje yra neperskaitytų pranešimų ir kurioje rašiau aš pats',
	'IMG_GLOBAL_UNREAD_LOCKED'	=> 'Užrakinta globali tema, kurioje yra neperskaitytų pranešimų',
	'IMG_GLOBAL_UNREAD_LOCKED_MINE'	=> 'Užrakinta globali tema, kurioje yra neperskaitytų pranešimų ir kurioje rašiau aš pats',
	'IMG_PM_READ'	=> 'Perskaityta asmeninė žinutė',
	'IMG_PM_UNREAD'	=> 'Neperskaityta asmeninė žinutė',
	'IMG_ICON_BACK_TOP'	=> 'Į viršų',
	'IMG_ICON_CONTACT_AIM'	=> 'AIM',
	'IMG_ICON_CONTACT_EMAIL'	=> 'Siųsti el. paštą',
	'IMG_ICON_CONTACT_ICQ'	=> 'ICQ',
	'IMG_ICON_CONTACT_JABBER'	=> 'Jabber',
	'IMG_ICON_CONTACT_MSNM'	=> 'MSNM',
	'IMG_ICON_CONTACT_PM'	=> 'Siųsti žinutę',
	'IMG_ICON_CONTACT_YAHOO'	=> 'YIM',
	'IMG_ICON_CONTACT_WWW'	=> 'Puslapis',
	'IMG_ICON_POST_DELETE'	=> 'Ištrinti pranešimą',
	'IMG_ICON_POST_EDIT'	=> 'Redaguoti pranešimą',
	'IMG_ICON_POST_INFO'	=> 'Rodyti pranešimo aprašymą',
	'IMG_ICON_POST_QUOTE'	=> 'Cituoti pranešimą',
	'IMG_ICON_POST_REPORT'	=> 'Raportuoti pranešimą',
	'IMG_ICON_POST_TARGET'	=> 'Minipranešimas',
	'IMG_ICON_POST_TARGET_UNREAD'	=> 'Naujas minipranešimas',
	'IMG_ICON_TOPIC_ATTACH'	=> 'Prikabintas failas',
	'IMG_ICON_TOPIC_LATEST'	=> 'Paskutinis pranešimas',
	'IMG_ICON_TOPIC_NEWEST'	=> 'Paskutinis neskaitytas pranešimas',
	'IMG_ICON_TOPIC_REPORTED'	=> 'Pranešimas apie kurį raportuota',
	'IMG_ICON_TOPIC_UNAPPROVED'	=> 'Nepatvirtintas pranešimas',
	'IMG_ICON_USER_ONLINE'	=> 'Vartotojas prisijungęs',
	'IMG_ICON_USER_OFFLINE'	=> 'Vartotojas atsijungęs',
	'IMG_ICON_USER_PROFILE'	=> 'Rodyti aprašą',
	'IMG_ICON_USER_SEARCH'	=> 'Pranešimų paieška',
	'IMG_ICON_USER_WARN'	=> 'Įspėti vartotoją',
	'IMG_BUTTON_PM_FORWARD'	=> 'Persiųsta asmeninė žinutė',
	'IMG_BUTTON_PM_NEW'	=> 'Nauja asmeninė žinutė',
	'IMG_BUTTON_PM_REPLY'	=> 'Atsakyta asmeninė žinutė',
	'IMG_BUTTON_TOPIC_LOCKED'	=> 'Tema užrakinta',
	'IMG_BUTTON_TOPIC_NEW'	=> 'Nauja tema',
	'IMG_BUTTON_TOPIC_REPLY'	=> 'Atsakyti į temą',
	'IMG_USER_ICON1'	=> 'Vartotojo aprašytas paveikslėlis 1',
	'IMG_USER_ICON2'	=> 'Vartotojo aprašytas paveikslėlis 2',
	'IMG_USER_ICON3'	=> 'Vartotojo aprašytas paveikslėlis 3',
	'IMG_USER_ICON4'	=> 'Vartotojo aprašytas paveikslėlis 4',
	'IMG_USER_ICON5'	=> 'Vartotojo aprašytas paveikslėlis 5',
	'IMG_USER_ICON6'	=> 'Vartotojo aprašytas paveikslėlis 6',
	'IMG_USER_ICON7'	=> 'Vartotojo aprašytas paveikslėlis 7',
	'IMG_USER_ICON8'	=> 'Vartotojo aprašytas paveikslėlis 8',
	'IMG_USER_ICON9'	=> 'Vartotojo aprašytas paveikslėlis 9',
	'IMG_USER_ICON10'	=> 'Vartotojo aprašytas paveikslėlis 10',
	'INCLUDE_DIMENSIONS'	=> 'Įtraukti dimensijas',
	'INCLUDE_IMAGESET'	=> 'Įtraukti paveikslėlių komplektą',
	'INCLUDE_TEMPLATE'	=> 'Įtraukti šabloną',
	'INCLUDE_THEME'	=> 'Įtraukti temą',
	'INHERITING_FROM'	=> 'Paveldi iš',
	'INSTALL_IMAGESET'	=> 'Paveikslėlių komplekto diegimas',
	'INSTALL_IMAGESET_EXPLAIN'	=> 'Čia galite įdiegti pasirinktus paveikslėlių komplektus. Galite pakeisti kai kuriuos komplekto duomenis arba naudoti standartinius.',
	'INSTALL_STYLE'	=> 'Stiliau diegimas',
	'INSTALL_STYLE_EXPLAIN'	=> 'Čia galite įdiegti naują stilių ir jo elementus. Jeigu stiliaus elementai jau įdiegti, jie bus ištrinti. Kai kuriems stiliams reikia, kad elementai jau būtų įdiegti. Jums bus pranešta, jeigu bandysite įdiegti tokį stilių, o jo elementai bus dar neįdiegti.',
	'INSTALL_TEMPLATE'	=> 'Šablono diegimas',
	'INSTALL_TEMPLATE_EXPLAIN'	=> 'Čia galite įdiegti naują šabloną. Pasirinkimų ir nustatymų skaičius priklauso nuo jūsų serverio konfigūracijos.',
	'INSTALL_THEME'	=> 'Temos diegimas',
	'INSTALL_THEME_EXPLAIN'	=> 'Čia galite įdiegti pasirinktą temą. Galite pakeisti kai kuriuos temos duomenis arba naudoti standartinius.',
	'INSTALLED_IMAGESET'	=> 'Įdiegti paveikslėlių komplektai',
	'INSTALLED_STYLE'	=> 'Įdiegti stiliai',
	'INSTALLED_TEMPLATE'	=> 'Įdiegti šablonai',
	'INSTALLED_THEME'	=> 'Įdiegtos temos',
	'LINE_SPACING'	=> 'Tarpai tarp eilučių',
	'LOCALISED_IMAGES'	=> 'Naudojamai kalbai pritaikyti paveikslėliai',
	'LOCATION_DISABLED_EXPLAIN'	=> 'Šis nustatymas yra paveldėtas ir negali būti pakeistas.',
	'NO_CLASS'	=> 'Tokios klasės stiliaus faile nėra.',
	'NO_IMAGESET'	=> 'Tokio paveikslėlių komplekto failų sistemoje nėra.',
	'NO_IMAGE'	=> 'Paveikslėlio nėra',
	'NO_IMAGE_ERROR'	=> 'Tokio paveikslėlio failų sistemoje nėra.',
	'NO_STYLE'	=> 'Tokio stiliaus failų sistemoje nėra.',
	'NO_TEMPLATE'	=> 'Tokio šablono failų sistemoje nėra.',
	'NO_THEME'	=> 'Tokios temos failų sistemoje nėra.',
	'NO_UNINSTALLED_IMAGESET'	=> 'Neįdiegtų paveikslėlių komplektų nėra.',
	'NO_UNINSTALLED_STYLE'	=> 'Neįdiegtų stilių nėra.',
	'NO_UNINSTALLED_TEMPLATE'	=> 'Neįdiegtų šablonų nėra.',
	'NO_UNINSTALLED_THEME'	=> 'Neįdiegtų temų nėra.',
	'NO_UNIT'	=> 'Nėra',
	'ONLY_IMAGESET'	=> 'Tai paskutinis paveikslėlių komplektas. Jūs negalite jo ištrinti.',
	'ONLY_STYLE'	=> 'Tai paskutinis stilius. Jūs negalite jo ištrinti.',
	'ONLY_TEMPLATE'	=> 'Tai paskutinis šablonas. Jūs negalite jo ištrinti.',
	'ONLY_THEME'	=> 'Tai paskutinė tema. Jūs negalite jos ištrinti.',
	'OPTIONAL_BASIS'	=> 'Galima bazė',
	'REFRESH'	=> 'Atnaujinti',
	'REPEAT_NO'	=> 'Nekartoti',
	'REPEAT_X'	=> 'Tik horizontaliai',
	'REPEAT_Y'	=> 'Tik vertikaliai',
	'REPEAT_ALL'	=> 'Į abi puses',
	'REPLACE_IMAGESET'	=> 'Pakeisti paveikslėlių komplektą į',
	'REPLACE_IMAGESET_EXPLAIN'	=> 'Šis paveikslėlių komplektas visuose stiliuose pakeis trinamą komplektą.',
	'REPLACE_STYLE'	=> 'Pakeisti stilių į',
	'REPLACE_STYLE_EXPLAIN'	=> 'Šis stilius pakeis trinamą stilių.',
	'REPLACE_TEMPLATE'	=> 'Pakeisti šabloną į',
	'REPLACE_TEMPLATE_EXPLAIN'	=> 'Šis šablonas visuose stiliuose pakeis trinamą šabloną.',
	'REPLACE_THEME'	=> 'Pakeisti temą į',
	'REPLACE_THEME_EXPLAIN'	=> 'Ši tema visuose stiliuose pakeis trinamą temą.',
	'REQUIRES_IMAGESET'	=> 'Šiam stiliui reikia įdiegti %s paveikslėlių komplektą.',
	'REQUIRES_TEMPLATE'	=> 'Šiam stiliui reikia įdiegti %s šabloną.',
	'REQUIRES_THEME'	=> 'Šiam stiliui reikia įdiegti %s temą.',
	'SELECT_IMAGE'	=> 'Paveikslėlio pasirinkimas',
	'SELECT_TEMPLATE'	=> 'Šablono failo pasirinkimas',
	'SELECT_THEME'	=> 'Temos failo pasirinkimas',
	'SELECTED_IMAGE'	=> 'Pasirinktas paveikslėlis',
	'SELECTED_IMAGESET'	=> 'Pasirinktas paveikslėlių komplektas',
	'SELECTED_TEMPLATE'	=> 'Pasirinktas šablonas',
	'SELECTED_TEMPLATE_FILE'	=> 'Pasirinktas šablono failas',
	'SELECTED_THEME'	=> 'Pasirinkta tema',
	'SELECTED_THEME_FILE'	=> 'Pasirinktas temos failas',
	'STORE_DATABASE'	=> 'Duomenų bazėje',
	'STORE_FILESYSTEM'	=> 'Failų sistemoje',
	'STYLE_ACTIVATE'	=> 'Įjungti',
	'STYLE_ACTIVE'	=> 'Aktyvus',
	'STYLE_ADDED'	=> 'Stilius sėkmingai pridėtas.',
	'STYLE_DEACTIVATE'	=> 'Išjungti',
	'STYLE_DEFAULT'	=> 'Padaryti stilių standartiniu',
	'STYLE_DELETED'	=> 'Stilius sėkmingai ištrintas.',
	'STYLE_DETAILS_UPDATED'	=> 'Stilius sėkmingai pakeistas.',
	'STYLE_ERR_ARCHIVE'	=> 'Pasirinkite archyvo tipą.',
	'STYLE_ERR_COPY_LONG'	=> 'Autorinių teisių aprašymas negali būti ilgesnis nei 60 simbolių.',
	'STYLE_ERR_MORE_ELEMENTS'	=> 'Jūs turite pasirinkti bent vieną stiliaus elementą.',
	'STYLE_ERR_NAME_CHARS'	=> 'Stiliaus pavadinimas turi būti sudarytas tik iš raidžių, skaičių, simbolių -, +, _ ir tarpų.',
	'STYLE_ERR_NAME_EXIST'	=> 'Stilius tokiu pavadinimu jau egzistuoja.',
	'STYLE_ERR_NAME_LONG'	=> 'Stiliaus pavadinimas negali būti ilgesnis nei 30 simbolių.',
	'STYLE_ERR_NO_IDS'	=> 'Šiam stiliui turite pasirinkti šabloną, temą ir paveikslėlių komplektą.',
	'STYLE_ERR_NOT_STYLE'	=> 'Archyve, kurį pasirinkote, nėra jokio gero stiliaus.',
	'STYLE_ERR_STYLE_NAME'	=> 'Šiam stiliui turite nurodyti pavadinimą.',
	'STYLE_EXPORT'	=> 'Stiliaus eksportas',
	'STYLE_EXPORT_EXPLAIN'	=> 'Čia, kaip archyvą, galite išeksportuoti stilių. Stiliuje nebūtinai turi būti visi elementai, tačiau bent vienas privalomas. Pavyzdžiui, jeigu sukūrėte naują temą ir paveikslėlių komplektą dažnai naudojamam šablonui, jūs galite išeksportuoti temą ir paveikslėlių komplektą be šablono. Galite pasirinkti ar tiesiai atsisiųsti failą, ar padėti jį į saugyklos katalogą ir vėliau atsisiųsti per FTP.',
	'STYLE_EXPORTED'	=> 'Stilius sėkmingai išeksportuotas ir išsaugotas kataloge %s.',
	'STYLE_IMAGESET'	=> 'Paveikslėlių komplektas',
	'STYLE_NAME'	=> 'Stiliaus pavadinimas',
	'STYLE_TEMPLATE'	=> 'Šablonas',
	'STYLE_THEME'	=> 'Tema',
	'STYLE_USED_BY'	=> 'Naudoja vartotojų (įskaitant robotus)',
	'TEMPLATE_ADDED'	=> 'Šablonas sėkmingai pridėtas ir išsaugotas failų sistemoje.',
	'TEMPLATE_ADDED_DB'	=> 'Šablonas sėkmingai pridėtas ir išsaugotas duomenų bazėje.',
	'TEMPLATE_CACHE'	=> 'Šablono kešas',
	'TEMPLATE_CACHE_EXPLAIN'	=> 'Standartiškai phpBB kešuoja šablono failus. Tai sumažina serverio apkrovimą kiekvieną kartą, kai vartotojas aplanko kokį nors puslapį, ir pagreitina puslapio generavimo laiką. Čia galite peržiūrėti kiekvieno failo kešo būseną ir ištrinti juos po vieną arba visus iš karto.',
	'TEMPLATE_CACHE_CLEARED'	=> 'Šablono kešas sėkmingai išvalytas.',
	'TEMPLATE_CACHE_EMPTY'	=> 'Kešuojamų šablonų nėra.',
	'TEMPLATE_DELETED'	=> 'Šablonas sėkmingai ištrintas.',
	'TEMPLATE_DELETE_DEPENDENT'	=> 'Šablonas negali būti ištrintas, nes egzistuoja bent vienas kitas paveldimas šablonas:',
	'TEMPLATE_DELETED_FS'	=> 'Šablonas buvo ištrintas iš duomenų bazės, tačiau failų sistemoje galėjo likti keletas failų.',
	'TEMPLATE_DETAILS_UPDATED'	=> 'Šablono aprašymas sėkmingai atnaujintas.',
	'TEMPLATE_EDITOR'	=> 'Šablonų HTML kodo redaktorius',
	'TEMPLATE_EDITOR_HEIGHT'	=> 'Šablonų redaktoriaus aukštis',
	'TEMPLATE_ERR_ARCHIVE'	=> 'Pasirinkite archyvo tipą.',
	'TEMPLATE_ERR_CACHE_READ'	=> 'Nepavyko atidaryti katalogo, kuriame saugomas šablono kešas.',
	'TEMPLATE_ERR_COPY_LONG'	=> 'Autorinių teisių aprašymas negali būti ilgesnis nei 60 simbolių.',
	'TEMPLATE_ERR_NAME_CHARS'	=> 'Šablono pavadinimas turi būti sudarytas tik iš raidžių, skaičių, simbolių -, +, _ ir tarpų.',
	'TEMPLATE_ERR_NAME_EXIST'	=> 'Šablonas tokiu pavadinimu jau egzistuoja.',
	'TEMPLATE_ERR_NAME_LONG'	=> 'Šablono pavadinimas negali būti ilgesnis nei 30 simbolių.',
	'TEMPLATE_ERR_NOT_TEMPLATE'	=> 'Archyve, kurį pasirinkote, nėra jokio gero šablono.',
	'TEMPLATE_ERR_REQUIRED_OR_INCOMPLETE'	=> 'Naujas šablonas reikalauja, kad būtų įdiegtas šablonas %s ir kad nepaveldėtų pats saves.',
	'TEMPLATE_ERR_STYLE_NAME'	=> 'Šiam šablonui turite nurodyti pavadinimą.',
	'TEMPLATE_EXPORT'	=> 'Šablono eksportas',
	'TEMPLATE_EXPORT_EXPLAIN'	=> 'Čia, kaip archyvą, galite išeksportuoti šabloną. Tame archyve bus visi reikalingi duomenys šio šablono diegimui kitoje diskusijų lentoje. Galite pasirinkti ar tiesiai atsisiųsti failą, ar padėti jį į saugyklos katalogą ir vėliau atsisiųsti per FTP.',
	'TEMPLATE_EXPORTED'	=> 'Šablonas sėkmingai išeksportuotas ir išsaugotas kataloge %s.',
	'TEMPLATE_FILE'	=> 'Šablono failas',
	'TEMPLATE_FILE_UPDATED'	=> 'Šablono failas sėkmingai pakeistas.',
	'TEMPLATE_INHERITS'	=> 'Šie šablonai paveldi šabloną %s, todėl jie negali turėti kitokio saugojimo mechanizmo.',
	'TEMPLATE_LOCATION'	=> 'Saugoti šabloną',
	'TEMPLATE_LOCATION_EXPLAIN'	=> 'Paveikslėliai visada saugomi failų sistemoje.',
	'TEMPLATE_NAME'	=> 'Šablono pavadinimas',
	'TEMPLATE_FILE_NOT_WRITABLE'	=> 'Nepavyko įrašyti šablono failo %s. Patikrinkite katalogo ir failų teises.',
	'TEMPLATE_REFRESHED'	=> 'Šablonas sėkmingai atnaujintas.',
	'THEME_ADDED'	=> 'Į failų sistemą sėkmingai pridėta nauja tema.',
	'THEME_ADDED_DB'	=> 'Į duomenų bazę sėkmingai pridėta nauja tema.',
	'THEME_CLASS_ADDED'	=> 'Papildoma klasė sėkmingai pridėta.',
	'THEME_DELETED'	=> 'Tema sėkmingai ištrinta.',
	'THEME_DELETED_FS'	=> 'Tema buvo ištrinta iš duomenų bazės, tačiau failų sistemoje galėjo likti keletas failų.',
	'THEME_DETAILS_UPDATED'	=> 'Temos aprašymas sėkmingai atnaujintas.',
	'THEME_EDITOR'	=> 'Temų redaktorius',
	'THEME_EDITOR_HEIGHT'	=> 'Temų redaktoriaus aukštis',
	'THEME_ERR_ARCHIVE'	=> 'Pasirinkite archyvo tipą.',
	'THEME_ERR_CLASS_CHARS'	=> 'Klasės pavadinimas turi būti sudarytas tik iš raidžių, skaičių bei simbolių ., :, -, _ ir #.',
	'THEME_ERR_COPY_LONG'	=> 'Autorinių teisių aprašymas negali būti ilgesnis nei 60 simbolių.',
	'THEME_ERR_NAME_CHARS'	=> 'Temos pavadinimas turi būti sudarytas tik iš raidžių, skaičių, simbolių -, +, _ ir tarpų.',
	'THEME_ERR_NAME_EXIST'	=> 'Tema tokiu pavadinimu jau egzistuoja.',
	'THEME_ERR_NAME_LONG'	=> 'Temos pavadinimas negali būti ilgesnis nei 30 simbolių.',
	'THEME_ERR_NOT_THEME'	=> 'Archyve, kurį pasirinkote, nėra jokios geros temos.',
	'THEME_ERR_REFRESH_FS'	=> 'Tema saugoma failų sistemoje, todėl nėra reikalo jos atnaujinti.',
	'THEME_ERR_STYLE_NAME'	=> 'Šiai temai turite nurodyti pavadinimą.',
	'THEME_FILE'	=> 'Temos failas',
	'THEME_EXPORT'	=> 'Temos eksportas',
	'THEME_EXPORT_EXPLAIN'	=> 'Čia, kaip archyvą, galite išeksportuoti temą. Tame archyve bus visi reikalingi duomenys šios temos diegimui kitoje diskusijų lentoje. Galite pasirinkti ar tiesiai atsisiųsti failą, ar padėti jį į saugyklos katalogą ir vėliau atsisiųsti per FTP.',
	'THEME_EXPORTED'	=> 'Tema sėkmingai išeksportuota ir išsaugota kataloge %s.',
	'THEME_LOCATION'	=> 'Saugoti temos failą',
	'THEME_LOCATION_EXPLAIN'	=> 'Paveikslėliai visada saugomi failų sistemoje.',
	'THEME_NAME'	=> 'Temos pavadinimas',
	'THEME_REFRESHED'	=> 'Tema sėkmingai atnaujinta.',
	'THEME_UPDATED'	=> 'Tema sėkmingai pakeista.',
	'UNDERLINE'	=> 'Pabrauktas',
	'UNINSTALLED_IMAGESET'	=> 'Neįdiegti paveikslėlių komplektai',
	'UNINSTALLED_STYLE'	=> 'Neįdiegti stiliai',
	'UNINSTALLED_TEMPLATE'	=> 'Neįdiegti šablonai',
	'UNINSTALLED_THEME'	=> 'Neįdiegtos temos',
	'UNSET'	=> 'Nenurodyta',
));

?>