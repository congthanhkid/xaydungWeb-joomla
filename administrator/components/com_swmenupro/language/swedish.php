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

define( '_SW_COPY_IMAGES', 'Also copy custom images & CSS' );

define( '_SW_CLICK_TRANS_MENU', 'Click-Trans Menu' );

define( '_SW_PADDING_HACK', 'IE Size/Padding Hack' );

define( '_SW_PADDING_HACK_TIP', 'If you have menu item size differences between Internet Explorer and other browsers then try this hack.' );

//swMenuPro 5.0 new terms

define( '_SW_SLIDECLICK_MENU', 'Accordian Menu' );
define( '_SW_AUTO_CLOSE_LABEL', 'Stäng öppna undermenyer automatiskt?' );
define( '_SW_UPGRADE_VERSIONS', 'Installerade versioner av swMenuPro' );
define( '_SW_SELECTED_LANGUAGE_HEADING', 'Aktuell språkfil' );
define( '_SW_LANGUAGE_FILES', 'Välj ny språkfil' );
define( '_SW_LANGUAGE_CHANGE_BUTTON', 'Byt språk' );
define( '_SW_UPLOAD_LANGUAGE_HEADING', 'Ladda upp ny språkfil' );
define( '_SW_LANGUAGE_UPLOAD_BUTTON', 'Ladda upp språkfil' );
define( '_SW_FILE_PERMISSIONS', 'Aktuell filbehörighet' );
define( '_SW_LANGUAGE_SUCCESS', 'Den nya swMenuPro språkfilen har lagts till.' );
define( '_SW_LANGUAGE_FAIL', 'Kunde inte ladda upp språkfilen. Kontrollera att alla nedan listade mappar är skrivbara.' );





//Menu Names
define( '_SW_TIGRA_MENU', 'Tigra Menu' );
define( '_SW_TRANS_MENU', 'Trans Menu' );
define( '_SW_MYGOSU_MENU', 'MyGosu Menu' );
define( '_SW_CLICK_MENU', 'Click Menu' );
//define( '_SW_SLIDECLICK_MENU', 'Sliding Click Menu' );
define( '_SW_TAB_MENU', 'CSS Tab Menu' );
define( '_SW_DYN_TAB_MENU', 'Dynamic Tab Menu' );
define( '_SW_TREE_MENU', 'Tree Menu' );

//Page Names
define( '_SW_MENU_MODULE_MANAGER', 'Hantering av menymoduler' );
define( '_SW_MANUAL_CSS_EDITOR', 'Manuell editering av CSS' );
define( '_SW_INDIVIDUAL_ITEM_EDITOR', ' - editering av menypunkt' );
define( '_SW_MODULE_EDITOR', '- editering av menymodul' );
define( '_SW_UPGRADE_FACILITY', 'Upgraderingsenhet' );


//Common Terms
define( '_SW_WRITABLE', 'Skrivbar' );
define( '_SW_UNWRITABLE', 'Skrivskyddad' );
define( '_SW_YES', 'Ja' );
define( '_SW_NO', 'Nej' );
define( '_SW_HYBRID', 'hybrid' );


//Menu Module Manager Page (list menu modules)
define( '_SW_MENU_MODULES', 'Menymoduler' );
define( '_SW_DISPLAY', 'visa' );
define( '_SW_USE_DEFAULT_MODULE', 'Använd standard menymall' );
define( '_SW_COPY_MODULE', 'Kopiera befintlig menymall' );
define( '_SW_CREATE_MODULE', 'Gör en ny menymodul' );
define( '_SW_MODULE_NAME', 'Modulnamn' );
define( '_SW_SELECT_MENU', 'Välj menysystem' );
define( '_SW_SELECT_STYLE', 'Välj menymall att kopiera' );


//Tool Tips
define( '_SW_SELECT_ITEM_TIP', 'Välj menypunkt genom att klicka på menypunktens namn.' );
define( '_SW_EDIT_MODULE_TIP', 'Klicka här för att ändra format och inställningar för menymodulen %s' );
define( '_SW_COPY_STYLE_TIP', 'Välj en befintlig menymodul för att kopiera formatet till en ny menymodul' );
define( '_SW_EDIT_CSS_TIP', 'Klicka här för att manuellt ändra i den externa formatmallen för menymodulen %s' );
define( '_SW_EXPORT_MODULE_TIP', 'Klicka här för att exportera en extern formatmall för menymodulen %s med de nuvarande inställningarna' );
define( '_SW_EDIT_IMAGES_TIP', 'Klicka här för att ändra individuella menypunktsbilder, CSS, och egenskaper för menymodulen %s' );
define( '_SW_PREVIEW_MODULE_TIP', 'Klicka här för att förhandsgranska menymodulen %s i ett poppuppfönster' );
define( '_SW_DELETE_MODULE_TIP', 'Klicka här för att avlägsna menymodulen %s' );
define( '_SW_MENU_SYSTEM_INFO_TIP', '<b>Klicka här</b> för mera information om de olika menysystem som finns att tillgå' );
define( '_SW_MODULE_TIP', '<b>Menyformat:</b> %s<br /><b>Källmeny:</b> %s<br /><b>Position:</b> %s<br /><b>Behörighet:</b> %s<br /><b>Publicerad:</b> %s');
define( '_SW_CREATE_MENU_TIP', 'Klicka här för att skapa en ny menymodul.');

define( '_SW_SAVE_TIP', 'Klicka här för att spara alla format- och moduländringar i databasen' );
define( '_SW_APPLY_TIP', 'Klicka här för att ersätta alla format- och moduländringar i databasen' );
define( '_SW_CANCEL_TIP', 'Klicka här för att ångra ändringarna och återgå till hanteringen av menymodulen' );
define( '_SW_PREVIEW_TIP', 'Klicka här för att förhandsgranska menymodulen i ett poppuppfönster' );
define( '_SW_EXPORT_TIP', 'Klicka här för att exportera en extern formatmall med de nuvarande inställningarna' );

//Buttons text
define( '_SW_SAVE_BUTTON', 'spara' );
define( '_SW_APPLY_BUTTON', 'ersätt' );
define( '_SW_CANCEL_BUTTON', 'avbryt' );
define( '_SW_PREVIEW_BUTTON', 'granska' );
define( '_SW_EXPORT_BUTTON', 'exportera' );
define( '_SW_CREATE_BUTTON', 'Skapa nu' );
define( '_SW_EDIT_BUTTON', 'ändra' );
define( '_SW_DELETE_BUTTON', 'avlägsna' );
define( '_SW_EDITCSS_BUTTON', 'editCSS' );
define( '_SW_GET_IMAGE_BUTTON', 'hämta bild' );
define( '_SW_UPDATE_CSS_BUTTON', 'Uppdatera CSS' );
define( '_SW_UPLOAD_BUTTON', 'Ladda upp fil' );
define( '_SW_UPDATE_OVER_CSS_BUTTON', 'Uppdatera över CSS' );


//Internal program links
define( '_SW_UPGRADE_LINK', 'Uppgradera/Reparera swMenuPro.' );
define( '_SW_MANAGER_LINK', 'Edit menu module properties' );
define( '_SW_CSS_LINK', 'Editera extern CSS fil manuellt' );
define( '_SW_EXPORT_LINK', 'Exportera en extern CSS fil' );
define( '_SW_RETURN_MANAGER_LINK', 'Återgå till hantering av swMenuPro menymodul' );


//Program Notices
define( '_SW_NO_MODULE_NOTICE', 'Du måste också installera modulen för att SWmenuPro skall fungera ordentligt.' );
define( '_SW_NO_MENU_NOTICE', 'Välj menysystem från listan.' );
define( '_SW_DELETE_MODULE_NOTICE', 'Är du säker på att du vill radera ' );
define( '_SW_MAKE_MODULE_NOTICE', 'Skapa en menymodul genom att välja Skapa ny menymodul till höger.' );
define( '_SW_UPLOAD_FILE_NOTICE', 'Välj fil som skall laddas upp.' );
define( '_SW_MENU_CHANGE_NOTICE', 'Du har ändrat källan för menymodulen.  Denna sida kan inte visas förrän du har sparat ändringarna eller återgått till den ursprungliga menykällan.' );


//Program Messages
define( '_SW_DELETE_MODULE_MESSAGE', 'Menymodulen har raderats' );
define( '_SW_SAVE_MENU_MESSAGE', 'Ändringarna har sparats' );
define( '_SW_SAVE_MENU_CSS_MESSAGE', 'Inställningarna har sparats och en extern CSS-fil har skapats' );
define( '_SW_SAVE_CSS_MESSAGE', 'Den externa CSS-filen har sparats' );
define( '_SW_NO_SAVE_MENU_CSS_MESSAGE', 'Den externa CSS-filen har inte skapats.  Kontrollera att mappen modules/mod_swmenupro/styles är skrivbar.' );


//////////////////////////
//Upgrade page
/////////////////////////
define( '_SW_OK', 'Allting är OK' );
define( '_SW_MESSAGES', 'Meddelanden' );
define( '_SW_MODULE_SUCCESS', 'Modulen har uppdaterats.' );
define( '_SW_MODULE_FAIL', 'Kunde inte uppdatera modulen.  Kontrollera att mappen /modules är skrivbar.' );
define( '_SW_TABLE_UPGRADE', 'Uppgraderade tabellen %s' );
define( '_SW_TABLE_CREATE', 'Skapade tabellen %s' );
define( '_SW_UPDATE_LINKS', 'Uppdaterade linkarna i admin-menyn' );

define( '_SW_MODULE_VERSION', 'Nuvarande version av modulen swMenuPro' );
define( '_SW_COMPONENT_VERSION', 'Nuvarande version av komponenten swMenuPro' );
define( '_SW_UPLOAD_UPGRADE', 'Ladda upp en ny version av swMenuPro' );
define( '_SW_UPLOAD_UPGRADE_BUTTON', 'Ladda upp och installera filen' );

define( '_SW_COMPONENT_SUCCESS', 'swMenuPro-komponenten har uppgraderats.' );
define( '_SW_COMPONENT_FAIL', 'Kunde inte uppgradera. Kontrollera att alla mappar i listan nedan är skrivbara.' );
define( '_SW_INVALID_FILE', 'Detta verkar inte vara en verklig nyare swMenuPro uppgraderings/release-fil.' );


//////////////////////////
//Item images and CSS page
/////////////////////////
define( '_SW_AUTO_MULTIPLE_LABEL', 'Ändra automatiskt i flere menypunkter.' );
define( '_SW_AUTO_CSS_CREATOR_LABEL', 'Automatisk CSS-produktionsenhet.' );
define( '_SW_PROPERTIES_LABEL', 'Menypunkternas egenskaper' );

//top tabs
define( '_SW_ITEM_PROPERTIES_TAB', 'Egenskaper<br /> Bilder' );
define( '_SW_ITEM_CSS_TAB', 'Normal / Mus-över<br /> CSS' );
define( '_SW_MULTIPLE_TAB', 'Ändra <br />flere punkter' );

//general text
define( '_SW_STEP_1', 'Steg 1' );
define( '_SW_STEP_2', 'Steg 2' );
define( '_SW_STEP_3', 'Steg 3' );
define( '_SW_SELECTED_ITEM', 'Vald menypunkt' );
define( '_SW_NONE_SELECTED', 'Ingenting valt' );
define( '_SW_ITEM_PROPERTIES', 'Egenskaper' );
define( '_SW_SHOW_ITEM', 'Visa menypunkt' );
define( '_SW_SHOW_ITEM_NAME', 'Visa menypunktens namn' );
define( '_SW_IS_LINK', 'Menypunkten är en link' );
define( '_SW_IMAGE_ALIGN', 'Justera bild' );

//Select box text
define( '_SW_CSS_SELECT', 'Välj CSS-värde som skall ändras' );
define( '_SW_COMPLETE_BORDER_SELECT', 'Hel ram' );
define( '_SW_BORDER_TOP_SELECT', 'Ram uppe' );
define( '_SW_BORDER_RIGHT_SELECT', 'Ram till höger' );
define( '_SW_BORDER_BOTTOM_SELECT', 'Ram nere' );
define( '_SW_BORDER_LEFT_SELECT', 'Ram till vänster' );
define( '_SW_PADDING_SELECT', 'Mellanrum' );
define( '_SW_MARGIN_SELECT', 'Marginaler' );
define( '_SW_BACKGROUND_SELECT', 'Bakgrund' );
define( '_SW_TEXT_SELECT', 'Text' );
define( '_SW_FONT_SELECT', 'Typsnitt' );
define( '_SW_OFFSET_SELECT', 'Avstånd' );
define( '_SW_DIMENSION_SELECT', 'Storlekar' );
define( '_SW_EFFECT_SELECT', 'Specialeffekter' );

define( '_SW_AUTO_SELECT', 'Valda menypunkter ' );
define( '_SW_AUTO_ALL_SELECT', 'Alla menypunkter' );
define( '_SW_AUTO_TOP_SELECT', 'Toppmenypunkter' );
define( '_SW_AUTO_SUB_SELECT', 'Undermenypunkter' );
define( '_SW_AUTO_FOLDER_SELECT', 'Menypunkter för mappar' );
define( '_SW_AUTO_DOCUMENT_SELECT', 'Menypunkter för dokument' );

define( '_SW_ATTRIBUTE_SELECT', 'Välj egenskap som skall ändras' );
define( '_SW_ATTRIBUTE_IMAGE_SELECT', 'Normal bild' );
define( '_SW_ATTRIBUTE_OVER_IMAGE_SELECT', 'Mus-över-bild' );
define( '_SW_ATTRIBUTE_SHOW_NAME_SELECT', 'Visa punktens namn' );
define( '_SW_ATTRIBUTE_DONT_SHOW_NAME_SELECT', 'Visa inte punktens namn' );
define( '_SW_ATTRIBUTE_IS_LINK_SELECT', 'Punkten är en link' );
define( '_SW_ATTRIBUTE_IS_NOT_LINK_SELECT', 'Punkten är inte en link' );
define( '_SW_ATTRIBUTE_SHOW_ITEM_SELECT', 'Visa menypunkten' );
define( '_SW_ATTRIBUTE_DONT_SHOW_ITEM_SELECT', 'Visa inte menypunkten' );
define( '_SW_ATTRIBUTE_IMAGE_LEFT_SELECT', 'Justera bilden till vänster' );
define( '_SW_ATTRIBUTE_IMAGE_RIGHT_SELECT', 'Justera bilden till höger' );
define( '_SW_ATTRIBUTE_CSS_SELECT', 'Normal CSS' );
define( '_SW_ATTRIBUTE_OVER_CSS_SELECT', 'Mus-över-CSS' );


//Extra CSS text
define( '_SW_CSS', 'CSS' );
define( '_SW_CSS_OVER', 'Mus-över CSS' );
define( '_SW_IMAGE', 'Bild' );
define( '_SW_IMAGE_OVER', 'Mus-över bild' );
define( '_SW_PREVIEW', 'Förhandsgranska' );
define( '_SW_IMAGE_URL', 'Bild URL' );
define( '_SW_HSPACE', 'H avstånd' );
define( '_SW_VSPACE', 'V avstånd' );
define( '_SW_REPEAT', 'Upprepa' );
define( '_SW_TEXT_DECORATION', 'Dekoration' );
define( '_SW_TEXT_TRANSFORM', 'Förändra' );
define( '_SW_TEXT_INDENT', 'Indrag' );
define( '_SW_WHITE_SPACE', 'Blankt mellanrum' );
define( '_SW_FONT_STYLE', 'Typsnittets format' );

//tool tips
define( '_SW_STEP_1_TIP', 'Välj en grupp av menypunkter att göra förändringar på.' );
define( '_SW_STEP_2_TIP', 'Välj vad som skall ändras.' );
define( '_SW_STEP_3_TIP', 'Tryck ersätt för att genomföra ändringarna i de valda menypunkterna.' );


//////////////////////////////
//Size Position & Offsets Page
/////////////////////////////
define( '_SW_POSITION_LABEL', 'Menyposition och riktning' );
define( '_SW_SIZES_LABEL', 'Menypunkternas storlek' );
define( '_SW_TOP_OFFSETS_LABEL', 'Toppmeny, avstånd' );
define( '_SW_SUB_OFFSETS_LABEL', 'Undermeny, avstånd' );
define( '_SW_CLICK_DIMENSIONS_LABEL', 'Storlekar för Click Menu' );
define( '_SW_ALIGNMENT_LABEL', 'Menyjustering' );
define( '_SW_WIDTHS_LABEL', 'Menypunternas bredd' );
define( '_SW_HEIGHTS_LABEL', 'Menypunkternas höjd' );
define( '_SW_COMPLETE_PADDING_LABEL', 'Komplett menymellanrum' );


//tree menus
define( '_SW_OTHER_SETTINGS_LABEL', 'Andra inställningar' );
define( '_SW_TREE_WIDTH_LABEL', 'Menybredd' );
define( '_SW_FOLDER_LINKS', 'Är mapparna linkar?' );
define( '_SW_USE_LINES', 'Använd linjer?' );
define( '_SW_USE_ICONS', 'Använd ikoner?' );

define( '_SW_TOP_MENU', 'Toppmeny' );
define( '_SW_SUB_MENU', 'Undermeny' );
define( '_SW_ALIGNMENT', 'Justering' );
define( '_SW_POSITION', 'Position' );
define( '_SW_ORIENTATION', 'Riktning' );
define( '_SW_ITEM_WIDTH', 'Bredd' );
define( '_SW_ITEM_HEIGHT', 'Höjd' );
define( '_SW_TOP_OFFSET', 'Avstånd upptill' );
define( '_SW_LEFT_OFFSET', 'Avstånd till vänster' );
define( '_SW_LEVEL', 'Nivå' );
define( '_SW_AUTOSIZE', '(använd 0 för automatisk justering)' );
define( '_SW_TAB_MARGIN', 'Marginal mellan mellanblad' );


//////////////////////
//Fonts & Padding Page
/////////////////////
define( '_SW_FONT_FAMILY_LABEL', 'Typsnittsfamilj' );
define( '_SW_FONT_SIZE_LABEL', 'Textstorlek' );
define( '_SW_FONT_ALIGNMENT_LABEL', 'Justering av text' );
define( '_SW_FONT_WEIGHT_LABEL', 'Textstil' );
define( '_SW_PADDING_LABEL', 'Mellanrum' );

define( '_SW_TOP', 'Uppe' );
define( '_SW_RIGHT', 'Till höger' );
define( '_SW_BOTTOM', 'Nere' );
define( '_SW_LEFT', 'Till vänster' );
define( '_SW_FONT_SIZE', 'Textstorlek' );
define( '_SW_FONT_ALIGNMENT', 'Textjustering' );
define( '_SW_FONT_WEIGHT', 'Textstil' );
define( '_SW_PADDING', 'Mellanrum' );
define( '_SW_FONT_TIP', 'Alla webbläsare hanterar typsnitt och storlekar olika. Nedanstående lista visar hur din webbläsare presenterar de olika typsnitten och storlekarna.' );


/////////////////////////
//Borders & Effects Page
////////////////////////
define( '_SW_BORDER_WIDTHS_LABEL', 'Bredd på ramar' );
define( '_SW_BORDER_STYLES_LABEL', 'Ramarnas stil' );
define( '_SW_SPECIAL_EFFECTS_LABEL', 'Specialeffekter' );

define( '_SW_OUTSIDE_BORDER', 'Yttre ram.' );
define( '_SW_INSIDE_BORDER', 'Inre ram.' );
define( '_SW_NORMAL_BORDER', 'Ram' );
define( '_SW_OVER_BORDER', 'Ram vid mus-över' );
define( '_SW_WIDTH', 'Bredd' );
define( '_SW_HEIGHT', 'Höjd' );
define( '_SW_DIVIDER', 'Skiljelinje' );
define( '_SW_STYLE', 'Utseende' );
define( '_SW_DELAY', 'Öppna/Stäng fördröjning' );
define( '_SW_OPACITY', 'Genomskinlighet' );


///////////////////////////
//Colors & Backgrounds Page
///////////////////////////
define( '_SW_BACKGROUND_IMAGE_LABEL', 'Bakgrundsbilder' );
define( '_SW_BACKGROUND_COLOR_LABEL', 'Bakgrundsfärger' );
define( '_SW_FONT_COLOR_LABEL', 'Textfärger' );
define( '_SW_BORDER_COLOR_LABEL', 'Ramfärger' );

//tab menus
define( '_SW_TAB_ACTIVE', 'Aktivt mellanblad' );
define( '_SW_TAB_TOP', 'Mellanblad för toppmeny' );
define( '_SW_DIVIDER_COLOR', 'Färg på skiljelinje' );

//tree menu
define( '_SW_ICONS_LABEL', 'Menyikoner' );
define( '_SW_ICON_TOP', 'Topp-ikon' );
define( '_SW_ICON_FOLDER', 'Mapp-ikon' );
define( '_SW_ICON_FOLDER_OPEN', 'Ikon för öppen mapp' );
define( '_SW_ICON_DOCUMENT', 'Dokument-ikon' );

define( '_SW_BACKGROUND', 'Bakgrund' );
define( '_SW_OVER_BACKGROUND', 'Bakgrund vid mus-över' );
define( '_SW_COLOR', 'Färg' );
define( '_SW_OVER_COLOR', 'Färg vid mus-över' );
define( '_SW_FONT', 'Textfärg' );
define( '_SW_OVER_FONT', 'Textfärg vid mus-över' );
define( '_SW_OUTSIDE_BORDER_COLOR', 'Färg för yttre ram' );
define( '_SW_INSIDE_BORDER_COLOR', 'Färg för inre ram' );
define( '_SW_NORMAL_BORDER_COLOR', 'Ramens färg' );
define( '_SW_GET', 'hämta' );
define( '_SW_COLOR_TIP', 'Välj färg från färgskivan. Klicka sedan %s närmast färgrutan för att använda den valda färgen.');
define( '_SW_PRESENT_COLOR', 'Visa färg' );
define( '_SW_SELECTED_COLOR', 'Vald färg' );



///////////////////////////
//Menu Module Settings Page
///////////////////////////
define( '_SW_MENU_SOURCE_LABEL', 'Inställningar för menykälla' );
define( '_SW_STYLE_SHEET_LABEL', 'Inställningar för formatmall' );
define( '_SW_AUTO_ITEM_LABEL', 'Automatiska inställningar för menypunkter' );
define( '_SW_CACHE_LABEL', 'Inställningar för cache' );
define( '_SW_GENERAL_LABEL', 'Allmänna inställningar för modul' );
define( '_SW_POSITION_ACCESS_LABEL', 'Position &amp; behörighet' );
define( '_SW_PAGES_LABEL', 'Visa menymodul på sidorna' );
define( '_SW_CONDITIONS_LABEL', 'Villkor' );


//Select box text
define( '_SW_CSS_DYNAMIC_SELECT', 'Skriv formatmallen direkt i själva sidan' );
define( '_SW_CSS_LINK_SELECT', 'Linka till en extern formatmall' );
define( '_SW_CSS_IMPORT_SELECT', 'Importera en extern formatmall' );
define( '_SW_CSS_NONE_SELECT', 'Linka inte till en formatmall' );

define( '_SW_SOURCE_CONTENT_SELECT', 'Använd endast innehåll' );
define( '_SW_SOURCE_EXISTING_SELECT', 'Välj befintlig meny nedan' );

define( '_SW_SHOW_TABLES_SELECT', 'Visa som tabell' );
define( '_SW_SHOW_BLOGS_SELECT', 'Visa som blog' );

define( '_SW_10SECOND_SELECT', '10 sekunder' );
define( '_SW_1MINUTE_SELECT', '1 minut' );
define( '_SW_30MINUTE_SELECT', '30 minuter' );
define( '_SW_1HOUR_SELECT', '1 timme' );
define( '_SW_6HOUR_SELECT', '6 timmar' );
define( '_SW_12HOUR_SELECT', '12 timmar' );
define( '_SW_1DAY_SELECT', '1 dag' );
define( '_SW_3DAY_SELECT', '3 dagar' );
define( '_SW_1WEEK_SELECT', '1 vecka' );

//top tabs text
define( '_SW_MODULE_SETTINGS_TAB', 'Inställningar för menymodulen' );
define( '_SW_SIZE_OFFSETS_TAB', 'Storlek, position &amp; avstånd' );
define( '_SW_COLOR_BACKGROUNDS_TAB', 'Färger &amp; bakgrunder' );
define( '_SW_FONTS_PADDING_TAB', 'Textstilar &amp; justering' );
define( '_SW_BORDERS_EFFECTS_TAB', 'Ramar &amp; effekter' );
define( '_SW_IMAGES_CSS_TAB', 'Bilder &amp; CSS' );
define( '_SW_TREE_SIZE_TAB', 'Storlekar &amp; Andra inställningar' );


//general text
define( '_SW_MENU_SOURCE', 'Menykälla' );
define( '_SW_PARENT', 'Förälder' );
define( '_SW_STYLE_SHEET', 'Ladda formatmodell' );
define( '_SW_CLASS_SFX', 'Modulens Class-ändelse' );
define( '_SW_HYBRID_MENU', 'Hybridmeny' );
define( '_SW_TABLES_BLOGS', 'Använd Tabell/Blog' );
define( '_SW_CACHE_ITEMS', 'Cacha menypunkterna' );
define( '_SW_CACHE_REFRESH', 'Tid för förnyande av cache' );
define( '_SW_SHOW_NAME', 'Visa modulens namn' );
define( '_SW_PUBLISHED', 'Publicerad');
define( '_SW_ACTIVE_MENU', 'Aktiv meny' );
define( '_SW_MAX_LEVELS', 'Max nivåer' );
define( '_SW_PARENT_LEVEL', 'Föräldranivå' );
define( '_SW_SELECT_HACK', 'Välj Box Hack' );
define( '_SW_SUB_INDICATOR', 'Indikator för undermeny' );
define( '_SW_SHOW_SHADOW', 'Visa skugga' );
define( '_SW_MODULE_POSITION', 'Modulposition' );
define( '_SW_MODULE_ORDER', 'Modulordning' );
define( '_SW_ACCESS_LEVEL', 'Behörighetsnivå' );
define( '_SW_TEMPLATE', 'Sidmall' );
define( '_SW_LANGUAGE', 'Språk' );
define( '_SW_COMPONENT', 'Komponent' );

//tool tips
define( '_SW_MENU_SOURCE_TIP', 'Välj en befintlig meny som källa för menypunkterna i din menymodul.' );
define( '_SW_PARENT_TIP', 'Välj en utgångs-menypunkt för att visa ett avsnitt av käll-menyn. Använd TOP för att visa alla menypunkter i källmenyn.' );
define( '_SW_STYLE_SHEET_TIP', '<b>Dynamic:</b> skriver in formatmallen i det dokument från vilket menyn används.<br /><b>Link External: </b>linkar till en extern formatmall som har exporterats.<br /><b>Do Not Link:</b> skriv manuellt in din egen link till en extern formatmall i sidhuvudet på din sidmall.  Menymodulen kommer då i sin helhet att valideras.' );
define( '_SW_CLASS_SFX_TIP', 'Ändelse för modulens moduletable-namn i CSS.  Kan användas för att undvika konflikter med andra moduletable-avsnitt i CSS-modellen och för mera formateringsmöjligheter via sidmodellens CSS-fil.' );
define( '_SW_HYBRID_MENU_TIP', 'Lägg automatiskt till menypunkter för innehåll i sådana menypunkter som är kategorier/sektioner i tabellform/bloggar.' );
define( '_SW_TABLES_BLOGS_TIP', 'Visa automatiskt tillagda kategori/sektion-menypunkter som tabeller eller bloggar.' );
define( '_SW_CACHE_ITEMS_TIP', 'Använd filcache för att höja effektiviteten genom att cacha menypunkter.  Speciellt användbart i samband med effektivitetsproblem med hybridmenyer, då stora menyer produceras genom många SQL-sökningar.  Cachen reducerar sökningarna till att göras bara en gång vid varje förnyande av cachen.' );
define( '_SW_CACHE_REFRESH_TIP', 'Tidsintervall med vilket cachefilen uppdateras med ny menystruktur.' );
define( '_SW_SHOW_NAME_TIP', 'Visa menymodulens namn.' );
define( '_SW_PUBLISHED_TIP', 'Publicera eller avpublicera menymodulen.');
define( '_SW_ACTIVE_MENU_TIP', 'Håll den nuvarande översta menypunktsnivån aktiv för den sida som visas.' );
define( '_SW_MAX_LEVELS_TIP', 'Maximalt antal nivåer av källmenyn som visas.  Använd 0 för att visa alla nivåer.' );
define( '_SW_PARENT_LEVEL_TIP', 'Avancerad inställning som spårar modulens menykälla tillbaka till en specifik nivå.  Valigen används 0.' );
define( '_SW_SELECT_HACK_TIP', 'Använd ett hack för menyerna för att undermenyerna skall kunna visas ovanpå olika urvalsboxar i blanketter i IE.' );
define( '_SW_SUB_INDICATOR_TIP', 'Visa en liten pil som indikator om undermenyerna följs av ytterligare menynivåer.' );
define( '_SW_SHOW_SHADOW_TIP', 'Visa en skugga runt undermenyerna.' );
define( '_SW_MODULE_POSITION_TIP', 'Menymodulens position i sidmallen.' );
define( '_SW_MODULE_ORDER_TIP', 'Menymodulens ordningsföljd i sidmallens position.' );
define( '_SW_ACCESS_LEVEL_TIP', 'Behörighetsnivå för menymodulen.' );
define( '_SW_TEMPLATE_TIP', 'Menymodulen visas bara i den valda sidmallen.' );
define( '_SW_LANGUAGE_TIP', 'Menymodulen visas bara med det valda språket.' );
define( '_SW_COMPONENT_TIP', 'Menymodulen visas bara med den valda komponenten.' );
define( '_SW_PAGES_TIP', 'Välj sidor: <i>(håll ctrl intryckt medan du använder muspekaren för att välja flere sidor.)</i>' );

?>