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
	'PHPSHOP_BROWSE_LBL' => 'Κατάλογος Προϊόντων OKE HELLAS',
	'PHPSHOP_FLYPAGE_LBL' => 'Λεπτομέρειες προϊόντος',
	'PHPSHOP_PRODUCT_FORM_EDIT_PRODUCT' => 'Επεξεργασία Προϊόντος',
	'PHPSHOP_DOWNLOADS_START' => 'Αρχίστε το Download',
	'PHPSHOP_DOWNLOADS_INFO' => 'Παρακαλώ εισάγετε το Κωδικό Download (Download-ID) που λάβατε με e-mail και πατήστε "Αρχίστε το Download".',
	'PHPSHOP_WAITING_LIST_MESSAGE' => 'Παρακαλούμε εισάγετε το e-mail σας παρακάτω για να σας ειδοποιήσουμε όταν αυτό το προϊόν είναι πάλι διαθέσιμο. 
                                                                        Δεν θα μοιραστούμε, ενοικιάσουμε, πωλήσουμε ή χρησιμοποιήσουμε αυτό το e-mail για κανένα άλλο σκοπό πέρα από 
                                                                        το να σας πούμε πότε το προϊόν θα είναι πάλι διαθέσιμο.<br /><br />Ευχαριστούμε!',
	'PHPSHOP_WAITING_LIST_THANKS' => 'Ευχαριστούμε που περιμένετε!<br />Θα σας ειδοποιήσουμε αμέσως μόλις έχουμε νέες παραλαβές.',
	'PHPSHOP_WAITING_LIST_NOTIFY_ME' => 'Ειδοποιήστε με!',
	'PHPSHOP_SEARCH_ALL_CATEGORIES' => 'Ψάξε όλες τις κατηγορίες',
	'PHPSHOP_SEARCH_ALL_PRODINFO' => 'Ψάξε όλες τις πληροφορίες ειδών',
	'PHPSHOP_SEARCH_PRODNAME' => 'Μόνο το όνομα του προϊόντος',
	'PHPSHOP_SEARCH_MANU_VENDOR' => 'Μόνο Κατασκευαστής/Προμηθευτής',
	'PHPSHOP_SEARCH_DESCRIPTION' => 'Μόνο περιγραφή προϊόντος',
	'PHPSHOP_SEARCH_AND' => 'ΚΑΙ',
	'PHPSHOP_SEARCH_NOT' => 'ΟΧΙ',
	'PHPSHOP_SEARCH_TEXT1' => 'Η πρώτη αναδυόμενη λίστα σας επιτρέπει να επιλέξετε μία κατηγορία για να περιορίσετε σε αυτή την αναζήτηση. 
        Η δεύτερη αναδυώμενη λίστα σας επιτρέπει να κάνετε αναζήτηση σε ένα συγκεκριμένο πεδίο των πληροφοριών του προϊόντος (π.χ. Όνομα). 
        Από τι στιγμή που έχετε ξάνει τις επιλόγες σας (ή αφήσατε την εξ\' ορισμού επιλογή Όλες), εισάγετε την προς αναζήτηση, λέξη κλειδί. ',
	'PHPSHOP_SEARCH_TEXT2' => ' Μπορείτε να εξειδικεύσετε περαιτέρω την αναζήτησή σας προσθέτοντας μία δεύτερη λέξη κλειδί και επιλέγοντας τις λειτουργίες ΚΑΙ και ΟΧΙ. 
        Επιλέγοντας ΚΑΙ σημαίνει ότι και οι δύο λέξεις πρέπει να είναι παρούσες για να εμφανιστεί το προϊόν. 
        Επιλέγοντας ΟΧΙ σημαίνει ότι το προϊόν θα εμφανιστεί μόνο αν η πρώτη λέξη κλειδί είναι παρούσα 
        και η δεύτερη δεν είναι.',
	'PHPSHOP_CONTINUE_SHOPPING' => 'Continue Shopping',
	'PHPSHOP_AVAILABLE_IMAGES' => 'Available Images for',
	'PHPSHOP_BACK_TO_DETAILS' => 'Back to Product Details',
	'PHPSHOP_IMAGE_NOT_FOUND' => 'Image not found!',
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