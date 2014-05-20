<?php

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
//swMenuPro 6.0 new terms
define( '_SW_AUTO_POSITION', 'Auto Position Sub Menus' );
define( '_SW_AUTO_POSITION_TIP', 'Reposition submenus onto the page if they would otherwise overlap the page.' );
define( '_SW_AUTO_SUB', 'Active Sub Menu' );
define( '_SW_AUTO_SUB_TIP', 'Open the active submenu automatically under the relevent active top menu item.' );
define( '_SW_AUTO_DYN_SUB', 'Autoclose Sub Menu' );
define( '_SW_AUTO_DYN_SUB_TIP', 'Close submenus on mouseout and return to the active menu state.' );
define( '_SW_AUTO_CLOSE_TIP', 'Auto close open submenus when another menu item is clicked.' );
define( '_SW_SUB_WRAP', 'Wrap Submenu' );
define( '_SW_SUB_WRAP_TIP', 'Display the submenu by wrapping accross multiple lines if it is too large for a single line.' );
define( '_SW_TREE_COOKIE', 'Use Cookies' );
define( '_SW_TREE_COOKIE_TIP', 'Use cookies to preserve the menu state between screen refresh.  Allows for multiple active submenus.' );
define( '_SW_SAVE_SWMENUFREE_MESSAGE', 'Sucessfully copied swMenuFree module to swMenuPro.' );
define( '_SW_COPY_SWMENUFREE', 'Copy Menu Module From swMenuFree' );
define( '_SW_COPY_SWMENUFREE_BUTTON', 'Click here to cop menu module from swMenuFree to swMenuPro, new menu module will be called swMenuFree Copy' );

//swMenuPro 5.3 new terms

define( '_SW_COPY_IMAGES', 'Egyedi képek és css-beállítások megtartása' );

define( '_SW_CLICK_TRANS_MENU', 'Kattintásos Transmenü' );

define( '_SW_PADDING_HACK', 'IE Méret/Padding javítás' );

define( '_SW_PADDING_HACK_TIP', 'Ha Internet Explorerben eltérő méretűek a menüpontok, mint a többi böngészőben, használd ezt a hibajavítást.' );


//swMenuPro 5.0 new terms - Újdonságok az swMenuPro 5.0-ban

define( '_SW_SLIDECLICK_MENU', 'Harmonika menü' );
define( '_SW_AUTO_CLOSE_LABEL', 'Nyitott almenüpontok automatikus összecsukása' );
define( '_SW_UPGRADE_VERSIONS', 'Jelenleg telepített swMenuPro verziója' );
define( '_SW_SELECTED_LANGUAGE_HEADING', 'Aktuális nyelvi fájl' );
define( '_SW_LANGUAGE_FILES', 'Új nyelvi fájl kiválasztása' );
define( '_SW_LANGUAGE_CHANGE_BUTTON', 'Nyelv átváltása' );
define( '_SW_UPLOAD_LANGUAGE_HEADING', 'Új nyelvi fájl feltöltése' );
define( '_SW_LANGUAGE_UPLOAD_BUTTON', 'Nyelvi fájl feltöltése' );
define( '_SW_FILE_PERMISSIONS', 'Jelenlegi fájljogosultságok' );
define( '_SW_LANGUAGE_SUCCESS', 'Az új nyelvi fájl hozzáadása sikerült' );
define( '_SW_LANGUAGE_FAIL', 'A nyelvi fájl feltöltése nem sikerült, győződj meg arról, hogy írhatóak-e az alábbi listában szereplő mappák' );

// Újdonságok vége

//Menu Names
define( '_SW_TIGRA_MENU', 'Tigra menü' );
define( '_SW_TRANS_MENU', 'Trans menü' );
define( '_SW_MYGOSU_MENU', 'MyGosu menü' );
define( '_SW_CLICK_MENU', 'Kattintásos menü' );
define( '_SW_SLIDECLICK_MENU', 'Harmonika menü' ); //ez az 1 sor változott itt
define( '_SW_TAB_MENU', 'CSS fül menü' );
define( '_SW_DYN_TAB_MENU', 'Dinamikus fül menü' );
define( '_SW_TREE_MENU', 'Fa menü' );

//Page Names
define( '_SW_MENU_MODULE_MANAGER', 'Menümodul kezelő' );
define( '_SW_MANUAL_CSS_EDITOR', 'Kézi CSS szerkesztő' );
define( '_SW_INDIVIDUAL_ITEM_EDITOR', 'Egyedi menüpont szerkesztő' );
define( '_SW_MODULE_EDITOR', 'Menümodul szerkesztő' );
define( '_SW_UPGRADE_FACILITY', 'Frissítés' );


//Common Terms
define( '_SW_WRITABLE', 'rható' );
define( '_SW_UNWRITABLE', 'Nem írható' );
define( '_SW_YES', 'Igen' );
define( '_SW_NO', 'Nem' );
define( '_SW_HYBRID', 'Hibrid' );


//Menu Module Manager Page (list menu modules)
define( '_SW_MENU_MODULES', 'Menümodulok' );
define( '_SW_DISPLAY', 'Megjelenítés' );
define( '_SW_USE_DEFAULT_MODULE', 'Alapértelmezett menüstílus használata' );
define( '_SW_COPY_MODULE', 'Meglévő menüstílus használata' );
define( '_SW_CREATE_MODULE', 'Új menümodul létrehozása' );
define( '_SW_MODULE_NAME', 'Modul neve' );
define( '_SW_SELECT_MENU', 'Válassz menürendszert' );
define( '_SW_SELECT_STYLE', 'Válaszd ki a másolni kívánt menüstílust' );


//Tool Tips
define( '_SW_SELECT_ITEM_TIP', 'A menüpont kiválasztásához kattints a menüpont nevére.' );
define( '_SW_EDIT_MODULE_TIP', 'Kattints ide a(z) %s menümodul beállításainak és stílusának módosításához' );
define( '_SW_COPY_STYLE_TIP', 'Válassz ki egy, már meglévő menümodult, hogy annak stílusbeállításait hozzáadd egy új menümodulhoz' );
define( '_SW_EDIT_CSS_TIP', 'A(z) %s menümodulhoz tartozó külső stíluslap szerkesztéséhez kattints ide ' );
define( '_SW_EXPORT_MODULE_TIP', 'A(z) %s menümodulhoz tartozó, jelenleg használt stílusbeállítások külső stíluslapba történő kimentéséhez, kattints ide' );
define( '_SW_EDIT_IMAGES_TIP', 'A(z) %s menümodulhoz tartozó egyedi menüpontok képeinek, CSS fájljainak és tulajdonságainak szerkesztéséhez kattints ide' );
define( '_SW_PREVIEW_MODULE_TIP', 'A(z) %s menümodul előbukkanó ablakban megjelenő, előnézeti képének megtekintéséhez kattints ide' );
define( '_SW_DELETE_MODULE_TIP', 'A(z) %s menümodul törléséhez kattints ide' );
define( '_SW_MENU_SYSTEM_INFO_TIP', 'A rendelkezésre álló menürendszerekhez kapcsolódó további információkért <b>kattints ide</b>' );
define( '_SW_MODULE_TIP', '<b>A menü stílusa:</b> %s<br /><b>Forrásmenü:</b> %s<br /><b>Pozíció:</b> %s<br /><b>Hozzáférés:</b> %s<br /><b>Közzétéve:</b> %s');
define( '_SW_CREATE_MENU_TIP', 'Új menümodul létrehozásához kattints ide.');

define( '_SW_SAVE_TIP', 'A stíluson és a modulon végzett összes változtatás elmentéséhez kattints ide' );
define( '_SW_APPLY_TIP', 'A stíluson és a modulon végzett összes változtatás alkalmazásához kattints ide' );
define( '_SW_CANCEL_TIP', 'A változtatások érvénytelenítéséhez és a menükezelőbe való visszatéréshez kattints ide' );
define( '_SW_PREVIEW_TIP', 'Az előbukkanó ablakban megjelenő előnézeti kép megtekintéséhez kattints ide' );
define( '_SW_EXPORT_TIP', 'A jelenleg használt stílusbeállítások külső stíluslapba történő kimentéséhez kattints ide' );

//Buttons text
define( '_SW_SAVE_BUTTON', 'Mentés' );
define( '_SW_APPLY_BUTTON', 'Alkalmaz' );
define( '_SW_CANCEL_BUTTON', 'Mégse' );
define( '_SW_PREVIEW_BUTTON', 'Előnézet' );
define( '_SW_EXPORT_BUTTON', 'Exportálás' );
define( '_SW_CREATE_BUTTON', 'Létrehozás most' );
define( '_SW_EDIT_BUTTON', 'Szerkesztés' );
define( '_SW_DELETE_BUTTON', 'Törlés' );
define( '_SW_EDITCSS_BUTTON', 'CSS szerkesztése' );
define( '_SW_GET_IMAGE_BUTTON', 'Kép beállítása' );
define( '_SW_UPDATE_CSS_BUTTON', 'CSS frissítése' );
define( '_SW_UPLOAD_BUTTON', 'Fájl feltöltése');
define( '_SW_UPDATE_OVER_CSS_BUTTON', 'Egérráviteli CSS frissítése' );


//Internal program links
define( '_SW_UPGRADE_LINK', 'swMenuPro frissítése/helyreállítása.' );
define( '_SW_MANAGER_LINK', 'Menümodul tulajdonságainak szerkesztése' );
define( '_SW_CSS_LINK', 'Külső CSS fájl kézi szerkesztése' );
define( '_SW_EXPORT_LINK', 'Exportálás külső CSS fájlba' );
define( '_SW_RETURN_MANAGER_LINK', 'Visszatérés az swMenuPro menümodul kezelőjéhez' );


//Program Notices
define( '_SW_NO_MODULE_NOTICE', 'A megfelelő működéshez az SWmenuPro modult is telepítened kell.' );
define( '_SW_NO_MENU_NOTICE', 'Válassz menürendszert az alábbi lenyíló listából.' );
define( '_SW_DELETE_MODULE_NOTICE', 'Biztos vagy benne, hogy törölni akarod a következőt: ' );
define( '_SW_MAKE_MODULE_NOTICE', 'Hozz létre új menümodult a jobb oldalon található "Új menümodul létrehozása" segítségével .' );
define( '_SW_UPLOAD_FILE_NOTICE', 'Válaszd ki a feltölteni kívánt fájlt.' );
define( '_SW_MENU_CHANGE_NOTICE', 'Megváltoztattad a menümodulhoz tartozó menüforrást. Ez az oldal nem jeleníthető meg, amíg nem érvényesíted a változtatásokat, vagy nem állítod vissza az eredeti menüforrást.' );


//Program Messages
define( '_SW_DELETE_MODULE_MESSAGE', 'A menümodul törlése sikerült' );
define( '_SW_SAVE_MENU_MESSAGE', 'A beállítások mentése sikerült' );
define( '_SW_SAVE_MENU_CSS_MESSAGE', 'A beállítások mentése és a külső CSS fájl létrehozása sikerült' );
define( '_SW_SAVE_CSS_MESSAGE', 'A külső CSS fájl mentése sikerült' );
define( '_SW_NO_SAVE_MENU_CSS_MESSAGE', 'A külső CSS fájlt nem sikerült létrehozni. Győződj meg arról, hogy írható-e a modules/mod_swmenupro/styles mappa.' );


//////////////////////////
//Upgrade page
/////////////////////////
define( '_SW_OK', 'Minden rendben' );
define( '_SW_MESSAGES', 'Üzenetek' );
define( '_SW_MODULE_SUCCESS', 'A modul frissítése sikerült.' );
define( '_SW_MODULE_FAIL', 'A modult nem sikerült frissíteni. Győződj meg arról, hogy írható-e a /modules mappa.' );
define( '_SW_TABLE_UPGRADE', 'A(z) %s tábla frissítése kész' );
define( '_SW_TABLE_CREATE', 'A(z) %s tábla létrehozása kész' );
define( '_SW_UPDATE_LINKS', 'Az admin menü hivatkozásainak frissítése megtörtént' );

define( '_SW_MODULE_VERSION', 'Jelenlegi swMenuPro modul verzió' );
define( '_SW_COMPONENT_VERSION', 'Jelenlegi swMenuPro komponens verzió' );
define( '_SW_UPLOAD_UPGRADE', 'swMenuPro frissítés/új verzió feltöltése' );
define( '_SW_UPLOAD_UPGRADE_BUTTON', 'Fájl feltöltése és telepítése' );

define( '_SW_COMPONENT_SUCCESS', 'Az swMenuPro komponens frissítése sikerült.' );
define( '_SW_COMPONENT_FAIL', 'A frissítés nem sikerült, győződj meg arról, hogy írhatóak-e az alábbi listában szereplő mappák.' );
define( '_SW_INVALID_FILE', 'Érvénytelen swMenuPro frissítés/új verzió fájl.' );



//////////////////////////
//Item images and CSS page
/////////////////////////
define( '_SW_AUTO_MULTIPLE_LABEL', 'Menüpontok csoportos szerkesztése automatikusan.' );
define( '_SW_AUTO_CSS_CREATOR_LABEL', 'Automatikus CSS-készítő' );
define( '_SW_PROPERTIES_LABEL', 'Menüpont tulajdonságai' );

//top tabs
define( '_SW_ITEM_PROPERTIES_TAB', 'Tulajdonságok<br /> Képek' );
define( '_SW_ITEM_CSS_TAB', 'Normál / Egérrávitel<br /> stílusa' );
define( '_SW_MULTIPLE_TAB', 'Csoportos <br />menüpontbeállítás' );

//general text
define( '_SW_STEP_1', '1. lépés' );
define( '_SW_STEP_2', '2. lépés' );
define( '_SW_STEP_3', '3. lépés' );
define( '_SW_SELECTED_ITEM', 'Kiválasztott menüpont' );
define( '_SW_NONE_SELECTED', 'Nincs kiválasztva' );
define( '_SW_ITEM_PROPERTIES', 'Menüpont tulajdonságai' );
define( '_SW_SHOW_ITEM', 'Menüpont megjelenítése' );
define( '_SW_SHOW_ITEM_NAME', 'Menüpont nevének megjelenítése' );
define( '_SW_IS_LINK', 'A menüpont egyben hivatkozás is' );
define( '_SW_IMAGE_ALIGN', 'Kép igazítása' );

//Select box text
define( '_SW_CSS_SELECT', 'Válaszd ki a szerkeszteni kívánt CSS értéket' );
define( '_SW_COMPLETE_BORDER_SELECT', 'Összes szegély' );
define( '_SW_BORDER_TOP_SELECT', 'Felső szegély' );
define( '_SW_BORDER_RIGHT_SELECT', 'Jobb oldali szegély' );
define( '_SW_BORDER_BOTTOM_SELECT', 'Alsó szegély' );
define( '_SW_BORDER_LEFT_SELECT', 'Bal oldali szegély' );
define( '_SW_PADDING_SELECT', 'Szövegtávolság' );
define( '_SW_MARGIN_SELECT', 'Margó' );
define( '_SW_BACKGROUND_SELECT', 'Háttér' );
define( '_SW_TEXT_SELECT', 'Szöveg' );
define( '_SW_FONT_SELECT', 'Betű' );
define( '_SW_OFFSET_SELECT', 'Eltolás' );
define( '_SW_DIMENSION_SELECT', 'Méret' );
define( '_SW_EFFECT_SELECT', 'Különleges effektusok' );

define( '_SW_AUTO_SELECT', 'Kiválasztott menüpontok ' );
define( '_SW_AUTO_ALL_SELECT', 'Összes menüpont' );
define( '_SW_AUTO_TOP_SELECT', 'Főmenüpontok' );
define( '_SW_AUTO_SUB_SELECT', 'Almenüpontok' );
define( '_SW_AUTO_FOLDER_SELECT', 'Szekció/kategória menüpontok' );
define( '_SW_AUTO_DOCUMENT_SELECT', 'Tartalmi elemek' );

define( '_SW_ATTRIBUTE_SELECT', 'Szerkeszteni kívánt attribútum kiválasztása' );
define( '_SW_ATTRIBUTE_IMAGE_SELECT', 'Normál kép' );
define( '_SW_ATTRIBUTE_OVER_IMAGE_SELECT', 'Egérráviteli kép' );
define( '_SW_ATTRIBUTE_SHOW_NAME_SELECT', 'Menüpont nevének megjelenítése' );
define( '_SW_ATTRIBUTE_DONT_SHOW_NAME_SELECT', 'Menüpont nevének elrejtése' );
define( '_SW_ATTRIBUTE_IS_LINK_SELECT', 'A menüpont hivatkozás is egyben' );
define( '_SW_ATTRIBUTE_IS_NOT_LINK_SELECT', 'A menüpont nem hivatkozás' );
define( '_SW_ATTRIBUTE_SHOW_ITEM_SELECT', 'Menüpont megjelenítése' );
define( '_SW_ATTRIBUTE_DONT_SHOW_ITEM_SELECT', 'Menüpont elrejtése' );
define( '_SW_ATTRIBUTE_IMAGE_LEFT_SELECT', 'Kép igazítása balra' );
define( '_SW_ATTRIBUTE_IMAGE_RIGHT_SELECT', 'Kép igazítása jobbra' );
define( '_SW_ATTRIBUTE_CSS_SELECT', 'Normál stílus' );
define( '_SW_ATTRIBUTE_OVER_CSS_SELECT', 'Egérrávitel stílusa' );


//Extra CSS text
define( '_SW_CSS', 'CSS' );
define( '_SW_CSS_OVER', 'Egérrávitel stílusa' );
define( '_SW_IMAGE', 'Kép' );
define( '_SW_IMAGE_OVER', 'Egérráviteli kép' );
define( '_SW_PREVIEW', 'Előnézet' );
define( '_SW_IMAGE_URL', 'Kép elérési útvonala' );
define( '_SW_HSPACE', 'Vízszintes térköz' );
define( '_SW_VSPACE', 'Függőleges térköz' );




define( '_SW_REPEAT', 'Többszörözés' );
define( '_SW_TEXT_DECORATION', 'Szövegstílus' );
define( '_SW_TEXT_TRANSFORM', 'Betűváltozat' );
define( '_SW_TEXT_INDENT', 'Behúzás' );
define( '_SW_WHITE_SPACE', 'Helyköz' );
define( '_SW_FONT_STYLE', 'Betűstílus' );

//tool tips
define( '_SW_STEP_1_TIP', 'Válaszd ki azt a menüpont csoportot, amelyen alkalmazni szeretnéd a változtatásokat.' );
define( '_SW_STEP_2_TIP', 'Válaszd ki a módosítani kívánt attribútumot.' );
define( '_SW_STEP_3_TIP', 'Nyomd meg az Alkalmaz gombot, hogy a menüpontokhoz rendeld a kiválasztott attribútumokat.' );



//////////////////////////////
//Size Position & Offsets Page
/////////////////////////////
define( '_SW_POSITION_LABEL', 'Menü helye és iránya' );
define( '_SW_SIZES_LABEL', 'Menüpont méretei' );
define( '_SW_TOP_OFFSETS_LABEL', 'Főmenü iránya' );
define( '_SW_SUB_OFFSETS_LABEL', 'Almenü iránya' );
define( '_SW_CLICK_DIMENSIONS_LABEL', 'Kattintásos menü mérete' );
define( '_SW_ALIGNMENT_LABEL', 'Menü igazítása' );
define( '_SW_WIDTHS_LABEL', 'Menüpont szélessége' );
define( '_SW_HEIGHTS_LABEL', 'Menüpont magassága' );
define( '_SW_COMPLETE_PADDING_LABEL', 'Az egész menü szövegtávolsága' );

	//tree menus
define( '_SW_OTHER_SETTINGS_LABEL', 'Egyéb beállítások' );
define( '_SW_TREE_WIDTH_LABEL', 'Menü szélessége' );
define( '_SW_FOLDER_LINKS', 'A mappák hivatkozások' );
define( '_SW_USE_LINES', 'Vonalak használata' );
define( '_SW_USE_ICONS', 'Ikonok használata' );

define( '_SW_TOP_MENU', 'Főmenü' );
define( '_SW_SUB_MENU', 'Almenü' );
define( '_SW_ALIGNMENT', 'szövegigazítás' );
define( '_SW_POSITION', 'pozíciója' );
define( '_SW_ORIENTATION', 'iránya' );
define( '_SW_ITEM_WIDTH', 'menüpont szélessége' );
define( '_SW_ITEM_HEIGHT', 'menüpont magassága' );
define( '_SW_TOP_OFFSET', 'eltolás fentről' );
define( '_SW_LEFT_OFFSET', 'eltolás balról' );
define( '_SW_LEVEL', 'Szint' );
define( '_SW_AUTOSIZE', '0 érték esetén automatikus méretezés' );
define( '_SW_TAB_MARGIN', 'Menüpontok közti távolság' );


//////////////////////
//Fonts & Padding Page
/////////////////////
define( '_SW_FONT_FAMILY_LABEL', 'Betűcsalád' );
define( '_SW_FONT_SIZE_LABEL', 'Betűméret' );
define( '_SW_FONT_ALIGNMENT_LABEL', 'Szövegigazítás' );
define( '_SW_FONT_WEIGHT_LABEL', 'Betűvastagság' );
define( '_SW_PADDING_LABEL', 'Szövegtávolság' );


define( '_SW_TOP', 'Fentről' );
define( '_SW_RIGHT', 'Jobbról' );
define( '_SW_BOTTOM', 'Alulról' );
define( '_SW_LEFT', 'Balról' );
define( '_SW_FONT_SIZE', 'betűmérete' );
define( '_SW_FONT_ALIGNMENT', 'szövegigazítás' );
define( '_SW_FONT_WEIGHT', 'betűvastagsága' );
define( '_SW_PADDING', 'szövegtávolsága' );
define( '_SW_FONT_TIP', 'Minden böngésző eltérő módon jeleníti meg az egyes betűket, ill. betűméreteket. Az alábbi lista megmutatja, hogy a Te böngésződ hogyan jeleníti meg a különböző betűket és betűméreteket.' );

/////////////////////////
//Borders & Effects Page
////////////////////////
define( '_SW_BORDER_WIDTHS_LABEL', 'Szegély vastagsága' );
define( '_SW_BORDER_STYLES_LABEL', 'Szegély stílusa' );
define( '_SW_SPECIAL_EFFECTS_LABEL', 'Különleges effektusok' );

define( '_SW_OUTSIDE_BORDER', 'külső szegélyének' );
define( '_SW_INSIDE_BORDER', 'belső szegélyének' );
define( '_SW_NORMAL_BORDER', 'szegélyének' );
define( '_SW_OVER_BORDER', 'egérráviteli szegélyének' );
define( '_SW_WIDTH', 'szélessége' );
define( '_SW_HEIGHT', 'magassága' );
define( '_SW_DIVIDER', 'Elválasztó' );
define( '_SW_STYLE', 'stílusa' );
define( '_SW_DELAY', 'Almenü nyitásának késleltetése' );
define( '_SW_OPACITY', 'átlátszósága' );

///////////////////////////
//Colors & Backgrounds Page
///////////////////////////
define( '_SW_BACKGROUND_IMAGE_LABEL', 'Háttérkép' );
define( '_SW_BACKGROUND_COLOR_LABEL', 'Háttér színe' );
define( '_SW_FONT_COLOR_LABEL', 'Betűszín' );
define( '_SW_BORDER_COLOR_LABEL', 'Szegély színe' );

//tab menus
define( '_SW_TAB_ACTIVE', 'Aktív menüpont' );
define( '_SW_TAB_TOP', 'Főmenüpont' );
define( '_SW_DIVIDER_COLOR', 'Elválasztó színe' );

//tree menu
define( '_SW_ICONS_LABEL', 'Menü ikonok' );
define( '_SW_ICON_TOP', 'Főikon' );
define( '_SW_ICON_FOLDER', 'Mappa ikonja' );
define( '_SW_ICON_FOLDER_OPEN', 'Nyitott mappa ikonja' );
define( '_SW_ICON_DOCUMENT', 'Tartalmi elem ikonja' );


define( '_SW_BACKGROUND', 'háttere' );
define( '_SW_OVER_BACKGROUND', 'egérráviteli háttere' );
define( '_SW_COLOR', 'színe' );
define( '_SW_OVER_COLOR', 'egérráviteli színe' );
define( '_SW_FONT', 'betűszíne' );
define( '_SW_OVER_FONT', 'egérráviteli betűszíne' );
define( '_SW_OUTSIDE_BORDER_COLOR', 'külső szegélyének színe' );
define( '_SW_INSIDE_BORDER_COLOR', 'belső szegélyének színe' );
define( '_SW_NORMAL_BORDER_COLOR', 'szegélyének színe' );
define( '_SW_OVER_BORDER_COLOR', 'egérráviteli szegélyszíne' );
define( '_SW_GET', 'Beállít' );
define( '_SW_COLOR_TIP', 'Válaszd ki a színt a palettáról, majd kattints a paletta melletti %s gombra a kiválasztott szín alkalmazásához.');
define( '_SW_PRESENT_COLOR', 'Jelenlegi szín' );
define( '_SW_SELECTED_COLOR', 'Kiválasztott szín' );


///////////////////////////
//Menu Module Settings Page
///////////////////////////
define( '_SW_MENU_SOURCE_LABEL', 'Menüforrás beállítása' );
define( '_SW_STYLE_SHEET_LABEL', 'Stíluslap beállítása' );
define( '_SW_AUTO_ITEM_LABEL', 'Automatikus menüpontok beállítása' );
define( '_SW_CACHE_LABEL', 'Gyorsítótár beállítása' );
define( '_SW_GENERAL_LABEL', 'ltalános modulbeállítások' );
define( '_SW_POSITION_ACCESS_LABEL', 'Pozíció és hozzáférés' );
define( '_SW_PAGES_LABEL', 'Menümodul megjelenítése a kiválasztott oldalakon' );
define( '_SW_CONDITIONS_LABEL', 'Feltételek' );

//Select box text
define( '_SW_CSS_DYNAMIC_SELECT', 'Stílusinformációk írása közvetlenül az oldal forráskódjába' );
define( '_SW_CSS_LINK_SELECT', 'Hivatkozás külső stíluslapra' );
define( '_SW_CSS_IMPORT_SELECT', 'Külső stíluslap importálása' );
define( '_SW_CSS_NONE_SELECT', 'Nincs hivatkozás stíluslapra' );

define( '_SW_SOURCE_CONTENT_SELECT', 'Csak tartalmi elemek használata' );
define( '_SW_SOURCE_EXISTING_SELECT', 'Válaszd az alábbi menük közül' );

define( '_SW_SHOW_TABLES_SELECT', 'Megjelenítés táblázatként' );
define( '_SW_SHOW_BLOGS_SELECT', 'Megjelenítés blogként' );

define( '_SW_10SECOND_SELECT', '10 másodperc' );
define( '_SW_1MINUTE_SELECT', '1 perc' );
define( '_SW_30MINUTE_SELECT', '30 perc' );
define( '_SW_1HOUR_SELECT', '1 óra' );
define( '_SW_6HOUR_SELECT', '6 óra' );
define( '_SW_12HOUR_SELECT', '12 óra' );
define( '_SW_1DAY_SELECT', '1 nap' );
define( '_SW_3DAY_SELECT', '3 nap' );
define( '_SW_1WEEK_SELECT', '1 hét' );

//top tabs text
define( '_SW_MODULE_SETTINGS_TAB', 'Menümodul beállítása' );
define( '_SW_SIZE_OFFSETS_TAB', 'Méret, pozíció és eltolás' );
define( '_SW_COLOR_BACKGROUNDS_TAB', 'Színek és háttér' );
define( '_SW_FONTS_PADDING_TAB', 'Betű és szövegtávolság' );
define( '_SW_BORDERS_EFFECTS_TAB', 'Szegélyek és effektusok' );
define( '_SW_IMAGES_CSS_TAB', 'Menüpont képei és CSS' );
define( '_SW_TREE_SIZE_TAB', 'Méret és egyéb beállítások' );

//general text
define( '_SW_MENU_SOURCE', 'Menü forrása' );
define( '_SW_PARENT', 'Szülő' );
define( '_SW_STYLE_SHEET', 'Stíluslap betöltése' );
define( '_SW_CLASS_SFX', 'Modul stílusosztály-utótag' );
define( '_SW_HYBRID_MENU', 'Hibrid menü' );
define( '_SW_TABLES_BLOGS', 'Táblázat/blog használata' );
define( '_SW_CACHE_ITEMS', 'Menüpontok cach-elése' );
define( '_SW_CACHE_REFRESH', 'Gyorsítótár frissítési ideje' );
define( '_SW_SHOW_NAME', 'Modulnév megjelenítése' );
define( '_SW_PUBLISHED', 'Közzétéve');
define( '_SW_ACTIVE_MENU', 'Aktív menü' );
define( '_SW_MAX_LEVELS', 'Szintek száma' );
define( '_SW_PARENT_LEVEL', 'Szülő elem szintje' );
define( '_SW_SELECT_HACK', 'Legördülő lista hibajavítása' );
define( '_SW_SUB_INDICATOR', 'Almenüjelző ikon' );
define( '_SW_SHOW_SHADOW', 'rnyék megjelenítése' );
define( '_SW_MODULE_POSITION', 'Modulpozíció' );
define( '_SW_MODULE_ORDER', 'Modulok sorrendje' );
define( '_SW_ACCESS_LEVEL', 'Hozzáférési szint' );
define( '_SW_TEMPLATE', 'Sablon' );
define( '_SW_LANGUAGE', 'Nyelv' );
define( '_SW_COMPONENT', 'Komponens' );

//tool tips
define( '_SW_MENU_SOURCE_TIP', 'Válaszd ki azt az érvényes/létező menüt, amely forrásként szolgál a menümodulod számára.' );
define( '_SW_PARENT_TIP', 'Válaszd ki azt a szülő elemet, amely megjeleníti a forrásmenü egy részét. Ha mindegyik menüpontot meg akarod jeleníteni, akkor a szülő elemet állítsd TOP-ra .' );
define( '_SW_STYLE_SHEET_TIP', '<b>Dinamikus: </b>közvetlenül abba a lapba kerülnek a stílusinformációk, amely a modult megjeleníti.<br /><b>Külső hivatkozás: </b>egy, már kimentett külső stíluslapra hivatkozik.<br /><b>Nincs hivatkozás:</b> Sajátkezűleg illeszd be a külső stíluslapra mutató hivatkozást, a sablonod fejléc részében. A menümodulod így lesz teljesen működőképes.' );
define( '_SW_CLASS_SFX_TIP', 'Az utótagot helyezd a sablonodban egy .moduletable stílusosztály elé. Ezzel elkerülheted a többi stílusosztállyal való ütközést, és még több paramétert tudsz testreszabni a sablonod segítségével. ' );
define( '_SW_HYBRID_MENU_TIP', 'A kategória, szekció és blog típusú menüpontokhoz automatikusan hozzáfűzi azok tartalmi elemeit is.' );
define( '_SW_TABLES_BLOGS_TIP', 'Az automatikusan létrehozott szekció/kategória elemeket táblázatos vagy blog formátumban jeleníti meg.' );
define( '_SW_CACHE_ITEMS_TIP', 'Egy fájlt használ átmeneti tárolóként, hogy abban tárolja a menüpontokat, és ezáltal növelje a teljesítményt. Különösen hasznos a hibrid menünél, ahol a nagyobb menü, több SQL kérés lefuttatását teszi szükségessé. Az átmeneti tároló két frissítés között ezt egyetlen sornyi lekérdezésre csökkenti.' );
define( '_SW_CACHE_REFRESH_TIP', 'Az átmeneti tároló frissítésének gyakorisága.' );
define( '_SW_SHOW_NAME_TIP', 'Megjeleníti a modul nevét.' );
define( '_SW_PUBLISHED_TIP', 'Közzéteszi vagy visszavonja a menümodult.');
define( '_SW_ACTIVE_MENU_TIP', 'Az aktuálisan használt főmenüpontot külön színnel emeli ki, mindaddig, míg az általa hivatkozott oldalon tartózkodunk.' );
define( '_SW_MAX_LEVELS_TIP', 'A megjelenítendő forrásmenü szintjeinek száma. Az összes szint megjelenítéséhez állítsd 0-ra.' );
define( '_SW_PARENT_LEVEL_TIP', 'Olyan speciális beállítás, amely a modul menüforrását egy előre beállított szintig követi vissza.  Az alapérték 0.' );
define( '_SW_SELECT_HACK_TIP', 'Olyan hibajavítást alkalmaz a menün, amely lehetővé teszi az almenük számára, hogy IE-ben az űrlapokon szereplő legördülő lista felett is megfelelően működjenek.' );
define( '_SW_SUB_INDICATOR_TIP', 'Megjelenít egy kis nyíl ikont azokban az almenüpontokban, amelyeknek további menüpontjaik vannak.' );
define( '_SW_SHOW_SHADOW_TIP', 'Megjeleníti az árnyékot az almenük körül.' );
define( '_SW_MODULE_POSITION_TIP', 'A menümodul pozíciója a sablonban.' );
define( '_SW_MODULE_ORDER_TIP', 'A menümodul sorrendje az adott pozícióban.' );
define( '_SW_ACCESS_LEVEL_TIP', 'A menümodul hozzáférési szintje.' );
define( '_SW_TEMPLATE_TIP', 'A menümodul csak a kiválasztott sablonban jelenik meg.' );
define( '_SW_LANGUAGE_TIP', 'A menümodul csak a kiválasztott nyelven jelenik meg.' );
define( '_SW_COMPONENT_TIP', 'A menümodul csak a kiválasztott komponenssel együtt jelenik meg.' );
define( '_SW_PAGES_TIP', 'Oldalak kiválasztása: <i>(A CTRL gomb nyomva tartásával egyszerre több oldalt is kijelölhetsz.)</i>' );


?>