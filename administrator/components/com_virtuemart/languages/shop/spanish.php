<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @package VirtueMart
* @subpackage languages
* @copyright Copyright (C) 2004-2008 soeren - All rights reserved.
* @translator soeren
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* VirtueMart is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See /administrator/components/com_virtuemart/COPYRIGHT.php for copyright notices and details.
*
* http://virtuemart.net
*/
global $VM_LANG;
$langvars = array (
	'CHARSET' => 'ISO-8859-1',
	'PHPSHOP_BROWSE_LBL' => 'Escoger Producto',
	'PHPSHOP_FLYPAGE_LBL' => 'Detalle de Productos',
	'PHPSHOP_PRODUCT_FORM_EDIT_PRODUCT' => 'Editar este producto',
	'PHPSHOP_DOWNLOADS_START' => 'empezar a descargar',
	'PHPSHOP_DOWNLOADS_INFO' => 'Por favor, introduzca la identificación de descarga que ha obtenido en e-mail y haga clic \'Start Download\'.',
	'PHPSHOP_WAITING_LIST_MESSAGE' => 'Por favor, introduzca su correo abajo para avisarle cuando el producto vuelva en el stock.
                                                                        No vamos a compartir, alquiler, vender ni utilizar este correo para ningun propisito excepto
                                                                        para avisarle cuando el troducto vuelva a estar en stock.<br /><br />Gracias!',
	'PHPSHOP_WAITING_LIST_THANKS' => 'Gracias por esperar! ! <br />En cuanto tengamos en nuestro stock, se lo avisaremos.',
	'PHPSHOP_WAITING_LIST_NOTIFY_ME' => 'Avisame!',
	'PHPSHOP_SEARCH_ALL_CATEGORIES' => 'Buscar en todas las categorías',
	'PHPSHOP_SEARCH_ALL_PRODINFO' => 'Buscar en todas las característiacas del producto',
	'PHPSHOP_SEARCH_PRODNAME' => 'Buscar en el nombre del producto',
	'PHPSHOP_SEARCH_MANU_VENDOR' => '--',
	'PHPSHOP_SEARCH_DESCRIPTION' => 'Sólo en la descripción del producto',
	'PHPSHOP_SEARCH_AND' => 'y',
	'PHPSHOP_SEARCH_NOT' => 'no',
	'PHPSHOP_SEARCH_TEXT1' => 'la primera drop-down-lista permite usted a seleccionar categoría para limitar su búsquedad a.
        la segunsa drop-down-lista permite usted a limitar su búsquedad  para el pedazo particular de infoemación del producto (e.j. Nombre).
        una vez usted ha seleccionado estos (o dejan el defecto TODO), insertar la palabra clave a búsquedad. ',
	'PHPSHOP_SEARCH_TEXT2' => ' Puede refinar más su búsquedad por añadiendo la segunda palabra clave y seleccionando Y o NO operador.
        Seleccionando Y significa ambos palabras deben presentar para el producto para que se muestre.
        Selecccionando NO significa el producto estará mostrado sólo cuando la primera plabra clave está presente
        y la segunda no está. ',
	'PHPSHOP_CONTINUE_SHOPPING' => 'Continuar Comprando',
	'PHPSHOP_AVAILABLE_IMAGES' => 'Disponible Imagenes para',
	'PHPSHOP_BACK_TO_DETAILS' => 'Volver a detalles del producto',
	'PHPSHOP_IMAGE_NOT_FOUND' => 'no ha encontrado la imagen!',
	'PHPSHOP_PARAMETER_SEARCH_TEXT1' => 'Do you will find products according to technical parametrs?<BR>You can used any prepared form:',
	'PHPSHOP_PARAMETER_SEARCH_NO_PRODUCT_TYPE' => 'I am sorry. There is no category for search.',
	'PHPSHOP_PARAMETER_SEARCH_BAD_PRODUCT_TYPE' => 'I am sorry. There is no published Product Type with this name.',
	'PHPSHOP_PARAMETER_SEARCH_IS_LIKE' => 'Is Like',
	'PHPSHOP_PARAMETER_SEARCH_IS_NOT_LIKE' => 'Is NOT Like',
	'PHPSHOP_PARAMETER_SEARCH_FULLTEXT' => 'Full-Text Search',
	'PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ALL' => 'All Selected',
	'PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ANY' => 'Any Selected',
	'PHPSHOP_PARAMETER_SEARCH_RESET_FORM' => 'Reset Form',
	'PHPSHOP_PRODUCT_NOT_FOUND' => 'Sorry, but the Product you\'ve requested wasn\'t found!',
	'PHPSHOP_PRODUCT_PACKAGING1' => 'Number {unit}s in packaging:',
	'PHPSHOP_PRODUCT_PACKAGING2' => 'Number {unit}s in box:',
	'PHPSHOP_CART_PRICE_PER_UNIT' => 'Price per Unit',
	'VM_PRODUCT_ENQUIRY_LBL' => 'Ask a question about this product',
	'VM_RECOMMEND_FORM_LBL' => 'Recommend this product to a friend',
	'PHPSHOP_EMPTY_YOUR_CART' => 'Empty Cart',
	'VM_RETURN_TO_PRODUCT' => 'Return to product',
	'EMPTY_CATEGORY' => 'This Category is currently empty.',
	'ENQUIRY' => 'Enquiry',
	'NAME_PROMPT' => 'Enter your Name',
	'EMAIL_PROMPT' => 'E-mail Address',
	'MESSAGE_PROMPT' => 'Enter your Message',
	'SEND_BUTTON' => 'Send',
	'THANK_MESSAGE' => 'Thank you for your Enquiry. We will contact you as soon as possible.',
	'PROMPT_CLOSE' => 'Close',
	'VM_RECOVER_CART_REPLACE' => 'Replace Cart with Saved Cart',
	'VM_RECOVER_CART_MERGE' => 'Add Saved Cart to Current Cart',
	'VM_RECOVER_CART_DELETE' => 'Delete Saved Cart',
	'VM_EMPTY_YOUR_CART_TIP' => 'Clear the cart of all contents',
	'VM_SAVED_CART_TITLE' => 'Saved Cart',
	'VM_SAVED_CART_RETURN' => 'Return'
); $VM_LANG->initModule( 'shop', $langvars );
?>