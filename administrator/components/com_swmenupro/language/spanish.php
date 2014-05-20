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

define( '_SW_SLIDECLICK_MENU', 'Menú Accordian' );
define( '_SW_AUTO_CLOSE_LABEL', 'Cerrar automáticamente los submenues abiertos?' );
define( '_SW_UPGRADE_VERSIONS', 'Version de swMenuPro actualmente instalada' );
define( '_SW_SELECTED_LANGUAGE_HEADING', 'Archivo de Lenguaje Actual' );
define( '_SW_LANGUAGE_FILES', 'Seleccione un nuevo archivo de Lenguaje' );
define( '_SW_LANGUAGE_CHANGE_BUTTON', 'Cambiar Lenguaje' );
define( '_SW_UPLOAD_LANGUAGE_HEADING', 'Cargar nuevo archivo de Lenguaje' );
define( '_SW_LANGUAGE_UPLOAD_BUTTON', 'Cargar Archivo de Lenguaje' );
define( '_SW_FILE_PERMISSIONS', 'Permisos actuales de los Archivos' );
define( '_SW_LANGUAGE_SUCCESS', 'Se ha agregado exitosamente el nuevo archivo de lenguaje de swMenuPro.' );
define( '_SW_LANGUAGE_FAIL', 'No se pudo cargar el archivo de lenguaje, por favor asegurese de que los directorios mostrados abajo tengan permisos de escritura.' );


//Menu Names
define( '_SW_TIGRA_MENU', 'Menú Tigra' );
define( '_SW_TRANS_MENU', 'Menú Trans' );
define( '_SW_MYGOSU_MENU', 'Menú MyGosu' );
define( '_SW_CLICK_MENU', 'Menú en Click' );
define( '_SW_TAB_MENU', 'Menú de Pestañas CCS' );
define( '_SW_DYN_TAB_MENU', 'Menú de Pestañas Dinámicas' );
define( '_SW_TREE_MENU', 'Menú de árbol' );

//Page Names
define( '_SW_MENU_MODULE_MANAGER', 'Administrador del Módulo de Menú' );
define( '_SW_MANUAL_CSS_EDITOR', 'Editor manual de CSS' );
define( '_SW_INDIVIDUAL_ITEM_EDITOR', 'Editor de artículos individuales' );
define( '_SW_MODULE_EDITOR', 'Editor de Módulo' );
define( '_SW_UPGRADE_FACILITY', 'Opción de Actualización' );


//Common Terms
define( '_SW_WRITABLE', 'Escribible' );
define( '_SW_UNWRITABLE', 'No escribible' );
define( '_SW_YES', 'Si' );
define( '_SW_NO', 'No' );
define( '_SW_HYBRID', 'híbrido' );


//Menu Module Manager Page (list menu modules)
define( '_SW_MENU_MODULES', 'Módulos de Menú' );
define( '_SW_DISPLAY', 'mostrar' );
define( '_SW_USE_DEFAULT_MODULE', 'Usar estilo de menú predetermindo' );
define( '_SW_COPY_MODULE', 'Copiar estilo de menú actual' );
define( '_SW_CREATE_MODULE', 'Crear Nuevo Módulo de Menú' );
define( '_SW_MODULE_NAME', 'Nombre del Módulo' );
define( '_SW_SELECT_MENU', 'Seleccionar el Sistema de Menú' );
define( '_SW_SELECT_STYLE', 'Seleccionar el Estilo de Menú a Copiar' );


//Tool Tips
define( '_SW_SELECT_ITEM_TIP', 'Seleccione el artículo del menu haciendo click en el nombre del artículo en el menu.' );
define( '_SW_EDIT_MODULE_TIP', 'Haga click aquí para editar el estilo y la configuración del módulo de menú %s ' );
define( '_SW_COPY_STYLE_TIP', 'Seleccione un módulo de menú existente para copiar la configuración de estilo al nuevo módulo de menú' );
define( '_SW_EDIT_CSS_TIP', 'Haga click aquí para editar manualmente la hoja de estilo externa para en módulo de menú %s ' );
define( '_SW_EXPORT_MODULE_TIP', 'Haga click aquí para exportar una hoja de estilo externa para el módulo de menú %s utilizando la configuración actual de estilo' );
define( '_SW_EDIT_IMAGES_TIP', 'Haga click aquí para editar las imágenes individuales de los artículos del menú, CSS, y las propiedades para el módulo de menú %s ' );
define( '_SW_PREVIEW_MODULE_TIP', 'Haga click aquí para visualizar el módulo de menú %s en una ventana emergente' );
define( '_SW_DELETE_MODULE_TIP', 'Haga click aquí para eliminar el módulo de menú %s ' );
define( '_SW_MENU_SYSTEM_INFO_TIP', '<b>Haga click aquí</b> para obtener más información sobre los diferentes sistemas de menú disponibles' );
define( '_SW_MODULE_TIP', '<b>Estilo del Menú:</b> %s<br /><b>Fuente del Menú:</b> %s<br /><b>Posición:</b> %s<br /><b>Acceso:</b> %s<br /><b>Publicado:</b> %s');
define( '_SW_CREATE_MENU_TIP', 'Haga click aquí para crear un módulo de menú nuevo.');

define( '_SW_SAVE_TIP', 'Haga click aquí para guardar todos los estilos y cambios hechos en los módulos a la base de datos' );
define( '_SW_APPLY_TIP', 'Haga click aquí para aplicar todos los estilos y los cambios hechos a los módulos a la base de datos' );
define( '_SW_CANCEL_TIP', 'Haga click aquí para cancelar los cambios y regresar al administrador de módulos de menú' );
define( '_SW_PREVIEW_TIP', 'Haga click aquí para visualizar el módulo de menú en una ventana emergente' );
define( '_SW_EXPORT_TIP', 'Haga click aquí para exportar una hoja de estilo externa usando la configuración actual de estilo' );

//Buttons text
define( '_SW_SAVE_BUTTON', 'guardar' );
define( '_SW_APPLY_BUTTON', 'aplicar' );
define( '_SW_CANCEL_BUTTON', 'cancelar' );
define( '_SW_PREVIEW_BUTTON', 'visualizar' );
define( '_SW_EXPORT_BUTTON', 'exportar' );
define( '_SW_CREATE_BUTTON', 'Crear Ahora' );
define( '_SW_EDIT_BUTTON', 'editar' );
define( '_SW_DELETE_BUTTON', 'borrar' );
define( '_SW_EDITCSS_BUTTON', 'editar CSS' );
define( '_SW_GET_IMAGE_BUTTON', 'obtener imágen' );
define( '_SW_UPDATE_CSS_BUTTON', 'Actualizar CSS' );
define( '_SW_UPLOAD_BUTTON', 'Cargar Archivo' );
define( '_SW_UPDATE_OVER_CSS_BUTTON', 'Actualizar sobre CSS' );


//Internal program links
define( '_SW_UPGRADE_LINK', 'Actualizar/Reparar swMenuPro.' );
define( '_SW_MANAGER_LINK', 'Editar las propiedades del módulo de menú' );
define( '_SW_CSS_LINK', 'Editar manualmente un archivo CSS externo' );
define( '_SW_EXPORT_LINK', 'Exportar un archivo CSS externo' );
define( '_SW_RETURN_MANAGER_LINK', 'Regresar al Administrador de Módulos de Menú swMenuPro' );


//Program Notices
define( '_SW_NO_MODULE_NOTICE', 'Necesita instalar adicionalmente el módulo de SWmenuPro para su correcto funcionamiento.' );
define( '_SW_NO_MENU_NOTICE', 'Por favor, seleccione un sistema de menú de la lista desplegable.' );
define( '_SW_DELETE_MODULE_NOTICE', 'Está seguro que desea borrar ' );
define( '_SW_MAKE_MODULE_NOTICE', 'Por favor, cree un módulo de menú con la opción Crear nuevo módulo de menú, en lado derecho.' );
define( '_SW_UPLOAD_FILE_NOTICE', 'Por favor, seleccione el archivo a cargar.' );
define( '_SW_MENU_CHANGE_NOTICE', 'Ha realizado cambios en la configuración del menú para el módulo de menú. Esta página no puede mostrar los cambios hasta que haga click en Aplicar o regrese a configuración original del menú.' );


//Program Messages
define( '_SW_DELETE_MODULE_MESSAGE', 'Módulo de Menú eliminado exitosamente' );
define( '_SW_SAVE_MENU_MESSAGE', 'Configuración guardada exitosamente' );
define( '_SW_SAVE_MENU_CSS_MESSAGE', 'Configuración guardada con éxito y archivo externo CCS creado con éxito' );
define( '_SW_SAVE_CSS_MESSAGE', 'Archivo externo CSS grabado exitosamente' );
define( '_SW_NO_SAVE_MENU_CSS_MESSAGE', 'Archivo externo CSS no creado.  Asegurese de que el directorio: modules/mod_swmenupro/styles es escribible.' );


//////////////////////////
//Upgrade page
/////////////////////////
define( '_SW_OK', 'Todo en orden' );
define( '_SW_MESSAGES', 'Mensajes' );
define( '_SW_MODULE_SUCCESS', 'El módulo fué actualizado exitosamente.' );
define( '_SW_MODULE_FAIL', 'No se pudo actualizar el módulo.  Por favor, asegurese de que el directorio: /modules directory sea escribible.' );
define( '_SW_TABLE_UPGRADE', 'Tabla %s Actualizada' );
define( '_SW_TABLE_CREATE', 'Tabla %s Creada' );
define( '_SW_UPDATE_LINKS', 'Enlaces de menú de administrador Actualizados' );

define( '_SW_MODULE_VERSION', 'Versión actual del Módulo swMenuPro' );
define( '_SW_COMPONENT_VERSION', 'Versión actual del componente swMenuPro' );
define( '_SW_UPLOAD_UPGRADE', 'Cargar archivo de Actualización swMenuPro' );
define( '_SW_UPLOAD_UPGRADE_BUTTON', 'Cargar e Instalar Archivo' );

define( '_SW_COMPONENT_SUCCESS', 'Componente swMenuPro actualizado exitosamente.' );
define( '_SW_COMPONENT_FAIL', 'No se pudo actualizar, por favor asegurese de que todos los directorios mostrados abajo son escribibles.' );
define( '_SW_INVALID_FILE', 'Esto no parece ser un archivo de actualización valido de swMenuPro.' );



//////////////////////////
//Item images and CSS page
/////////////////////////
define( '_SW_AUTO_MULTIPLE_LABEL', 'Editar automáticamente multiples artículos de menú.' );
define( '_SW_AUTO_CSS_CREATOR_LABEL', 'Utilidad de creación automática de CSS.' );
define( '_SW_PROPERTIES_LABEL', 'Propiedades de artículos de Menu' );

//top tabs
define( '_SW_ITEM_PROPERTIES_TAB', 'Propiedades<br /> Imágenes' );
define( '_SW_ITEM_CSS_TAB', 'Normal / Sobre<br /> CSS' );
define( '_SW_MULTIPLE_TAB', 'Configurar <br />Artículos Multiples' );

//general text
define( '_SW_STEP_1', 'Paso 1' );
define( '_SW_STEP_2', 'Paso 2' );
define( '_SW_STEP_3', 'Paso 3' );
define( '_SW_SELECTED_ITEM', 'Artículos de Menú Seleccionados' );
define( '_SW_NONE_SELECTED', 'Ninguno Seleccionado' );
define( '_SW_ITEM_PROPERTIES', 'Propiedades del artículo' );
define( '_SW_SHOW_ITEM', 'Mostrar Artículos de Menú' );
define( '_SW_SHOW_ITEM_NAME', 'Mostrar Nombre del Artículo de Menú' );
define( '_SW_IS_LINK', 'Este Artículo es un enlace' );
define( '_SW_IMAGE_ALIGN', 'Alineación de Imágen' );

//Select box text
define( '_SW_CSS_SELECT', 'Seleccione un valor CSS a Editar' );
define( '_SW_COMPLETE_BORDER_SELECT', 'Borde Completo' );
define( '_SW_BORDER_TOP_SELECT', 'Borde Superior' );
define( '_SW_BORDER_RIGHT_SELECT', 'Borde Derecho' );
define( '_SW_BORDER_BOTTOM_SELECT', 'Borde Inferior' );
define( '_SW_BORDER_LEFT_SELECT', 'Borde Izquierdo' );
define( '_SW_PADDING_SELECT', 'Separación' );
define( '_SW_MARGIN_SELECT', 'Margenes' );
define( '_SW_BACKGROUND_SELECT', 'Fondo' );
define( '_SW_TEXT_SELECT', 'Texto' );
define( '_SW_FONT_SELECT', 'Letra' );
define( '_SW_OFFSET_SELECT', 'Desviaciones' );
define( '_SW_DIMENSION_SELECT', 'Dimensiones' );
define( '_SW_EFFECT_SELECT', 'Efectos Epeciales' );

define( '_SW_AUTO_SELECT', 'Artículos de Menú Seleccionados ' );
define( '_SW_AUTO_ALL_SELECT', 'Todos los artículos del Menu' );
define( '_SW_AUTO_TOP_SELECT', 'Artículos del Menú Superior' );
define( '_SW_AUTO_SUB_SELECT', 'Artículos de los Sub Menú' );
define( '_SW_AUTO_FOLDER_SELECT', 'Artículos de la Carpeta del Menú' );
define( '_SW_AUTO_DOCUMENT_SELECT', 'Artículos de Documento del Menú' );

define( '_SW_ATTRIBUTE_SELECT', 'Seleccione el Atributo a Editar' );
define( '_SW_ATTRIBUTE_IMAGE_SELECT', 'Imágen Normal' );
define( '_SW_ATTRIBUTE_OVER_IMAGE_SELECT', 'Imágen para Mouse Over' );
define( '_SW_ATTRIBUTE_SHOW_NAME_SELECT', 'Mostrar Nombre del artículo' );
define( '_SW_ATTRIBUTE_DONT_SHOW_NAME_SELECT', 'No mostrar el nombre del artículo' );
define( '_SW_ATTRIBUTE_IS_LINK_SELECT', 'El Artículo es un enlace' );
define( '_SW_ATTRIBUTE_IS_NOT_LINK_SELECT', 'El Artículo no es un enlace' );
define( '_SW_ATTRIBUTE_SHOW_ITEM_SELECT', 'Mostrar Artículo del Menú' );
define( '_SW_ATTRIBUTE_DONT_SHOW_ITEM_SELECT', 'No Mostrar el Artículo Menú' );
define( '_SW_ATTRIBUTE_IMAGE_LEFT_SELECT', 'Alinear Imágen a la Izquierda' );
define( '_SW_ATTRIBUTE_IMAGE_RIGHT_SELECT', 'Alinear Imágen a la Derecha' );
define( '_SW_ATTRIBUTE_CSS_SELECT', 'CSS Normal' );
define( '_SW_ATTRIBUTE_OVER_CSS_SELECT', 'Mouse Over CSS' );


//Extra CSS text
define( '_SW_CSS', 'CSS' );
define( '_SW_CSS_OVER', 'Mouse Over CSS' );
define( '_SW_IMAGE', 'Imágen' );
define( '_SW_IMAGE_OVER', 'Imágen para Mouse Over' );
define( '_SW_PREVIEW', 'Visualizar' );
define( '_SW_IMAGE_URL', 'URL de la imágen' );
define( '_SW_HSPACE', 'Espacio H' );
define( '_SW_VSPACE', 'Espacio V' );
define( '_SW_REPEAT', 'Repetir' );
define( '_SW_TEXT_DECORATION', 'Decoración' );
define( '_SW_TEXT_TRANSFORM', 'Transformar' );
define( '_SW_TEXT_INDENT', 'Indentificativo' );
define( '_SW_WHITE_SPACE', 'Espacio Blanco' );
define( '_SW_FONT_STYLE', 'Estilo de la Letra' );

//tool tips
define( '_SW_STEP_1_TIP', 'Seleccione el grupo de artículos de menú a los cuales aplicar los cambios.' );
define( '_SW_STEP_2_TIP', 'Seleccione el atributo que desea cambiar.' );
define( '_SW_STEP_3_TIP', 'Presione Aplicar para ejecutar los atributos seleccionados a los artículos del menú.' );



//////////////////////////////
//Size Position & Offsets Page
/////////////////////////////
define( '_SW_POSITION_LABEL', 'Posición y Orientación del Menú' );
define( '_SW_SIZES_LABEL', 'Tamaños del artículo del Menú' );
define( '_SW_TOP_OFFSETS_LABEL', 'Desviaciónes del Menú Superior' );
define( '_SW_SUB_OFFSETS_LABEL', 'Desviaciones del Sub Menu' );
define( '_SW_CLICK_DIMENSIONS_LABEL', 'Dimensiónes del Menú Click' );
define( '_SW_ALIGNMENT_LABEL', 'Alineación del Menú' );
define( '_SW_WIDTHS_LABEL', 'Anchos de los artículos del Menú' );
define( '_SW_HEIGHTS_LABEL', 'Alto de los artículos del Menú' );
define( '_SW_COMPLETE_PADDING_LABEL', 'Separación Completa del Menú' );

//tree menus
define( '_SW_OTHER_SETTINGS_LABEL', 'Otras configuraciones' );
define( '_SW_TREE_WIDTH_LABEL', 'Ancho del Menú' );
define( '_SW_FOLDER_LINKS', 'Las carpetas son enlaces?' );
define( '_SW_USE_LINES', 'Usar líneas?' );
define( '_SW_USE_ICONS', 'Usar iconos?' );

define( '_SW_TOP_MENU', 'Menú Superior' );
define( '_SW_SUB_MENU', 'Sub Menú' );
define( '_SW_ALIGNMENT', 'Alineación' );
define( '_SW_POSITION', 'Posición' );
define( '_SW_ORIENTATION', 'Orientación' );
define( '_SW_ITEM_WIDTH', 'Ancho del Artículo' );
define( '_SW_ITEM_HEIGHT', 'Alto del Artículo' );
define( '_SW_TOP_OFFSET', 'Desviación Superior' );
define( '_SW_LEFT_OFFSET', 'Desviación Izquierda' );
define( '_SW_LEVEL', 'Nivel' );
define( '_SW_AUTOSIZE', '(coloque 0 para tamaño automático)' );
define( '_SW_TAB_MARGIN', 'Margen entre Pestañas' );


//////////////////////
//Fonts & Padding Page
/////////////////////
define( '_SW_FONT_FAMILY_LABEL', 'Familia de Letras' );
define( '_SW_FONT_SIZE_LABEL', 'Tamaño de Letra' );
define( '_SW_FONT_ALIGNMENT_LABEL', 'Alineación del Texto' );
define( '_SW_FONT_WEIGHT_LABEL', 'Grueso de Letra' );
define( '_SW_PADDING_LABEL', 'Separación' );


define( '_SW_TOP', 'Superior' );
define( '_SW_RIGHT', 'Derecha' );
define( '_SW_BOTTOM', 'Inferior' );
define( '_SW_LEFT', 'izquierda' );
define( '_SW_FONT_SIZE', 'Tamaño de Letras' );
define( '_SW_FONT_ALIGNMENT', 'Aleneación del Texto' );
define( '_SW_FONT_WEIGHT', 'Grueso de Letra' );
define( '_SW_PADDING', 'Separación' );
define( '_SW_FONT_TIP', 'Todos los navegadores renderean las letras y los tamaños de forma diferente. La siguiente lista muestra como tu navegador ha renderizado las letras y los tamaños descritos.' );

/////////////////////////
//Borders & Effects Page
////////////////////////
define( '_SW_BORDER_WIDTHS_LABEL', 'Gruesos de Borde' );
define( '_SW_BORDER_STYLES_LABEL', 'Estilos de Borde' );
define( '_SW_SPECIAL_EFFECTS_LABEL', 'Efectos Especiales' );

define( '_SW_OUTSIDE_BORDER', 'Borde Externo' );
define( '_SW_INSIDE_BORDER', 'Borde Interno' );
define( '_SW_NORMAL_BORDER', 'Borde' );
define( '_SW_OVER_BORDER', 'Sobre Borde' );
define( '_SW_WIDTH', 'Ancho' );
define( '_SW_HEIGHT', 'Alto' );
define( '_SW_DIVIDER', 'Divisor' );
define( '_SW_STYLE', 'Estilo' );
define( '_SW_DELAY', 'Retraso para Abrir/Cerrar' );
define( '_SW_OPACITY', 'Transparencia' );

///////////////////////////
//Colors & Backgrounds Page
///////////////////////////
define( '_SW_BACKGROUND_IMAGE_LABEL', 'Imágenes de Fondo' );
define( '_SW_BACKGROUND_COLOR_LABEL', 'Colores de Fondo' );
define( '_SW_FONT_COLOR_LABEL', 'Colores de la Letra' );
define( '_SW_BORDER_COLOR_LABEL', 'Colores del Borde' );

//tab menus
define( '_SW_TAB_ACTIVE', 'Pestaña Activa' );
define( '_SW_TAB_TOP', 'Pestaña del Menú Superior' );
define( '_SW_DIVIDER_COLOR', 'Color del Divisor' );

//tree menu
define( '_SW_ICONS_LABEL', 'Menú de Iconos' );
define( '_SW_ICON_TOP', 'Icono Superior' );
define( '_SW_ICON_FOLDER', 'Icono de Carpeta' );
define( '_SW_ICON_FOLDER_OPEN', 'Icono de Carpeta Abierta' );
define( '_SW_ICON_DOCUMENT', 'Icono de Documento' );


define( '_SW_BACKGROUND', 'Fondo' );
define( '_SW_OVER_BACKGROUND', 'Sobre Fondo' );
define( '_SW_COLOR', 'Color' );
define( '_SW_OVER_COLOR', 'Sobre Color' );
define( '_SW_FONT', 'Color de Letra' );
define( '_SW_OVER_FONT', 'Color de Sobre Letra' );
define( '_SW_OUTSIDE_BORDER_COLOR', 'Color del Borde Externo' );
define( '_SW_INSIDE_BORDER_COLOR', 'Color del Borde Interno' );
define( '_SW_NORMAL_BORDER_COLOR', 'Color del Borde' );
define( '_SW_OVER_BORDER_COLOR', 'Color de Sobre Borde' );
define( '_SW_GET', 'ver' );
define( '_SW_COLOR_TIP', 'Seleccione los colores en la rueda de color y luego haga click %s cerca de la caja de color para aplicar el color seleccionado.');
define( '_SW_PRESENT_COLOR', 'Color Actual' );
define( '_SW_SELECTED_COLOR', 'Color Seleccionado' );


///////////////////////////
//Menu Module Settings Page
///////////////////////////
define( '_SW_MENU_SOURCE_LABEL', 'Configuración de la fuente del Menú' );
define( '_SW_STYLE_SHEET_LABEL', 'Configuración de la Hoja de Estilo' );
define( '_SW_AUTO_ITEM_LABEL', 'Configuración del Menú Automático de Artículos' );
define( '_SW_CACHE_LABEL', 'Configuración del Cache' );
define( '_SW_GENERAL_LABEL', 'Configuarción General de Módulo' );
define( '_SW_POSITION_ACCESS_LABEL', 'Posición y Acceso' );
define( '_SW_PAGES_LABEL', 'Mostrar el Módulo de Menú en la Páginas' );
define( '_SW_CONDITIONS_LABEL', 'Condiciones' );

//Select box text
define( '_SW_CSS_DYNAMIC_SELECT', 'Escribir la hoja de estilo directamente en la página' );
define( '_SW_CSS_LINK_SELECT', 'Enlazar a una hoja de estilo externa' );
define( '_SW_CSS_IMPORT_SELECT', 'Importar hoja de estilo externa' );
define( '_SW_CSS_NONE_SELECT', 'No enlazar hoja de estilo' );

define( '_SW_SOURCE_CONTENT_SELECT', 'Usar Solamente Contenido' );
define( '_SW_SOURCE_EXISTING_SELECT', 'Seleccione los Menus Existente de Abajo' );

define( '_SW_SHOW_TABLES_SELECT', 'Mostrar como tablas' );
define( '_SW_SHOW_BLOGS_SELECT', 'Mostrar como blogs' );

define( '_SW_10SECOND_SELECT', '10 Segundos' );
define( '_SW_1MINUTE_SELECT', '1 Minuto' );
define( '_SW_30MINUTE_SELECT', '30 Minutos' );
define( '_SW_1HOUR_SELECT', '1 Hora' );
define( '_SW_6HOUR_SELECT', '6 Horas' );
define( '_SW_12HOUR_SELECT', '12 Horas' );
define( '_SW_1DAY_SELECT', '1 Día' );
define( '_SW_3DAY_SELECT', '3 Días' );
define( '_SW_1WEEK_SELECT', '1 Semana' );

//top tabs text
define( '_SW_MODULE_SETTINGS_TAB', 'Configuración del Módulo de Menú' );
define( '_SW_SIZE_OFFSETS_TAB', 'Tamaño, Posición y Desviaciones' );
define( '_SW_COLOR_BACKGROUNDS_TAB', 'Colores y Fondos' );
define( '_SW_FONTS_PADDING_TAB', 'Letras y Separación' );
define( '_SW_BORDERS_EFFECTS_TAB', 'Bordes y Efectos' );
define( '_SW_IMAGES_CSS_TAB', 'Artículos de Imágenes y CSS' );
define( '_SW_TREE_SIZE_TAB', 'Tamaño y Otras Configuraciones' );

//general text
define( '_SW_MENU_SOURCE', 'Menú Fuente' );
define( '_SW_PARENT', 'Menú Padre o Relacionado' );
define( '_SW_STYLE_SHEET', 'Cargar Hoja de Estilo' );
define( '_SW_CLASS_SFX', 'Class Suffix del Módulo' );
define( '_SW_HYBRID_MENU', 'Menú Híbrido' );
define( '_SW_TABLES_BLOGS', 'Usar Tablas/Blogs' );
define( '_SW_CACHE_ITEMS', 'Cache de Artículos del Menú' );
define( '_SW_CACHE_REFRESH', 'Tiempo de Refrescado del Cache' );
define( '_SW_SHOW_NAME', 'Mostrar Nombre del Módulo' );
define( '_SW_PUBLISHED', 'Publicado');
define( '_SW_ACTIVE_MENU', 'Menú Activo' );
define( '_SW_MAX_LEVELS', 'Máximo de Niveles' );
define( '_SW_PARENT_LEVEL', 'Nivel Padre o Relacionado' );
define( '_SW_SELECT_HACK', 'Seleccionar Box Hack' );
define( '_SW_SUB_INDICATOR', 'Indicador de Sub Menu' );
define( '_SW_SHOW_SHADOW', 'Mostrar Sombra' );
define( '_SW_MODULE_POSITION', 'Posición del Módulo' );
define( '_SW_MODULE_ORDER', 'Orden del Módulo' );
define( '_SW_ACCESS_LEVEL', 'Nivel de Acceso Level' );
define( '_SW_TEMPLATE', 'Plantilla' );
define( '_SW_LANGUAGE', 'Lenguaje' );
define( '_SW_COMPONENT', 'Componente' );

//tool tips
define( '_SW_MENU_SOURCE_TIP', 'Seleccione un menú valido para que funcione como fuente de artículos de menú para su Módulo de Menú.' );
define( '_SW_PARENT_TIP', 'Seleccione un menú Padre o Relacionado para mostrar los segmentos/submenus del Menú Fuente.  Coloque Superior para mostrar todos los artículos del menú fuente.' );
define( '_SW_STYLE_SHEET_TIP', '<b>Dinámico:</b> escribe la hoja de estilo en el documento de donde el módulo de menú es llamado.<br /><b>Enlace Externo: </b>enlaces que ha sido exportados a una hoja de estilos externa.<br /><b>No Enlazar:</b> manualmente pegue sus propios enlaces a la hoja de estilo externa en el encabezado de su plantilla.  El Módulo de Menú será entonces validado completamente.' );
define( '_SW_CLASS_SFX_TIP', 'Sufijo a colocar antes del CSS de la tabla del módulo de las plantillas.  Puede ser usado para evitar conflictos con el CSS de la tabla de módulos de las plantillas y para más opciones de estilo a través del archivo CSS de la plantilla.' );
define( '_SW_HYBRID_MENU_TIP', 'Agrega automáticamente artículos de menú de contenido a artículos de menú que son contenidos de categorías/secciones tablas/blogs.' );
define( '_SW_TABLES_BLOGS_TIP', 'Muestra automaticamente artículos de menú categorías/seccciones creadas como tablas o blogs.' );
define( '_SW_CACHE_ITEMS_TIP', 'Utiliza un archivo cache para incrementar el desempeño y el cache de los artículos del menú.  Particularmente útil para asuntos de desempeño con menues híbridos, donde menus muy grandes pueden necesitar hacer muchas preguntas SQL para generarse.  El Cache reduce eso a solo un grupo de preguntas entre intérvalos de cache.' );
define( '_SW_CACHE_REFRESH_TIP', 'Intévalo de tiempo entre los refrecados de la estructura del menú pro el archivo de cache.' );
define( '_SW_SHOW_NAME_TIP', 'Muestra el nombre del módulo de menú.' );
define( '_SW_PUBLISHED_TIP', 'Publicar o No publicar el módulo de menú.');
define( '_SW_ACTIVE_MENU_TIP', 'Mantiene el artículo de menú actual en un estado activo para la página que esta siendo vista.' );
define( '_SW_MAX_LEVELS_TIP', 'Niveles máximos de menú fuente a mostrar.  Coloque 0 para mostrar todos los niveles.' );
define( '_SW_PARENT_LEVEL_TIP', 'Configuración avanzada que rastrea la fuente del menú de un módulo de regreso a un nivel específico.  Usualmente se utiliza en 0.' );
define( '_SW_SELECT_HACK_TIP', 'Aplica una correción al menú para permitir que los submenus se sobrepongan a cajas de selección en formularios en IE.' );
define( '_SW_SUB_INDICATOR_TIP', 'Muestra una pequeña flecha como un indicador de sub menú, para indicar artículos de sub menú que tienen sub artículos.' );
define( '_SW_SHOW_SHADOW_TIP', 'Muestra una sombra alrededor de los sub menus.' );
define( '_SW_MODULE_POSITION_TIP', 'Posición del módulo de menú en la plantilla.' );
define( '_SW_MODULE_ORDER_TIP', 'Orden del módulo de menú en la posición de la plantilla.' );
define( '_SW_ACCESS_LEVEL_TIP', 'Nivel de acceso para el módulo de menú.' );
define( '_SW_TEMPLATE_TIP', 'El módulo de menú solo se mostrará en la plantilla seleccionada.' );
define( '_SW_LANGUAGE_TIP', 'El módulo de menú solo se mostrará en el lenguaje seleccionado.' );
define( '_SW_COMPONENT_TIP', 'El módulo de menú solo se mostrará en el componente seleccionado.' );
define( '_SW_PAGES_TIP', 'Seleccione las Páginas: <i>(mantega presionada la tecla ctrl mientras hace click izquierdo en el ratón (mouse) para seleccionar múltiples páginas.)</i>' );

?>