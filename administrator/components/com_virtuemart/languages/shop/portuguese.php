<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : italian.php 1071 2007-12-03 08:42:28Z thepisu $
* @package VirtueMart
* @subpackage languages
* @copyright Copyright (C) 2004-2007 soeren - All rights reserved.
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
	'PHPSHOP_BROWSE_LBL' => 'Procurar Artigos',
	'PHPSHOP_FLYPAGE_LBL' => 'Detalhe do Produto',
	'PHPSHOP_PRODUCT_FORM_EDIT_PRODUCT' => 'Editar este Produto',
	'PHPSHOP_DOWNLOADS_START' => 'Iniciar Download',
	'PHPSHOP_DOWNLOADS_INFO' => 'Por favor escreva o Download-ID que recebeu no seu email e carregue em \'Iniciar Download\'.',
	'PHPSHOP_WAITING_LIST_MESSAGE' => 'Por favor introduza o seu e-mail, será avisado logo que o produto entre em stock. 
                                                                        O seu endereço de e-mail será apenas utilizado para este fim.<br /><br />Obrigado!',
	'PHPSHOP_WAITING_LIST_THANKS' => 'Obrigado por aguardar! <br />Será avisado logo que entre para stock.',
	'PHPSHOP_WAITING_LIST_NOTIFY_ME' => 'Avisar!',
	'PHPSHOP_SEARCH_ALL_CATEGORIES' => 'Procurar todas as categorias',
	'PHPSHOP_SEARCH_ALL_PRODINFO' => 'Procurar todos os detalhes produto',
	'PHPSHOP_SEARCH_PRODNAME' => 'Apenas Produto',
	'PHPSHOP_SEARCH_MANU_VENDOR' => 'Apenas Marca/vendedor',
	'PHPSHOP_SEARCH_DESCRIPTION' => 'Apenas Descrição Produto',
	'PHPSHOP_SEARCH_AND' => 'e',
	'PHPSHOP_SEARCH_NOT' => 'não',
	'PHPSHOP_SEARCH_TEXT1' => 'A primeira lista permite selecionar uma categoria a fim de limitar a procura. 
        A segunda lista permite limitar os detalhes do produto (ex. Nome). 
        Uma vez estas selecionadas (ou deixadas por defeito), introduza a palavras-chave. ',
	'PHPSHOP_SEARCH_TEXT2' => ' Pode adicionar mais palavras-chave e operadores como AND ou NOT. 
        Selecionando AND significa que ambas as palavras tem de estar presentes para o produto ser apresentado. 
        Selecionando NOT signitica que a primeira palavra tem de estar presente e a segunda não poderá existir para o produto ser apresentado.',
	'PHPSHOP_CONTINUE_SHOPPING' => 'Continuar Comprar',
	'PHPSHOP_AVAILABLE_IMAGES' => 'Imagens Disponível para ',
	'PHPSHOP_BACK_TO_DETAILS' => 'Voltar aos detalhes do produto',
	'PHPSHOP_IMAGE_NOT_FOUND' => 'Imagem não encontrada!',
	'PHPSHOP_PARAMETER_SEARCH_TEXT1' => 'Você irá encontrar produtos de acordo com os parametros?<BR>Pode usar qualquer formulário preparado:',
	'PHPSHOP_PARAMETER_SEARCH_NO_PRODUCT_TYPE' => 'Lamentamos. Não há nenhuma categoria para pesquisa.',
	'PHPSHOP_PARAMETER_SEARCH_BAD_PRODUCT_TYPE' => 'Lamentamos. Não há nenhum Produto com este nome.',
	'PHPSHOP_PARAMETER_SEARCH_IS_LIKE' => 'É Como',
	'PHPSHOP_PARAMETER_SEARCH_IS_NOT_LIKE' => 'É Diferente',
	'PHPSHOP_PARAMETER_SEARCH_FULLTEXT' => 'Procurar Todo o Texto',
	'PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ALL' => 'Todos os selecionados',
	'PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ANY' => 'Qualquer Selecionado',
	'PHPSHOP_PARAMETER_SEARCH_RESET_FORM' => 'Limpar Formulário',
	'PHPSHOP_PRODUCT_NOT_FOUND' => 'Lamentamos, mas o Produto que pediu não foi encontrado!',
	'PHPSHOP_PRODUCT_PACKAGING1' => 'Quantidade {unit}s na embalagem:',
	'PHPSHOP_PRODUCT_PACKAGING2' => 'Quantidade {unit}s por caixa:',
	'PHPSHOP_CART_PRICE_PER_UNIT' => 'Preço por Unidade',
	'VM_PRODUCT_ENQUIRY_LBL' => 'Tem Dúvidas Sobre Este Produto',
	'VM_RECOMMEND_FORM_LBL' => 'Recomende este produto a um amigo',
	'PHPSHOP_EMPTY_YOUR_CART' => 'Carrinho Vazio',
	'VM_RETURN_TO_PRODUCT' => 'Voltar ao Produto',
	'EMPTY_CATEGORY' => 'Esta categoria está actualmente sem produtos.',
	'ENQUIRY' => 'Dúvidas',
	'NAME_PROMPT' => 'Digite seu Nome',
	'EMAIL_PROMPT' => 'E-mail',
	'MESSAGE_PROMPT' => 'Digite a sua Mensagem',
	'SEND_BUTTON' => 'Eviar',
	'THANK_MESSAGE' => 'Obrigado pela sua Dúvidas. Entraremos em contato com você o mais depressa possível.',
	'PROMPT_CLOSE' => 'Fechar',
	'VM_RECOVER_CART_REPLACE' => 'Substituir o Carrinho com o Carrinho Guardado',
	'VM_RECOVER_CART_MERGE' => 'Adicionar o Carrinho Guardado ao Carrinho atual',
	'VM_RECOVER_CART_DELETE' => 'Apagar Carrinho Guardado',
	'VM_EMPTY_YOUR_CART_TIP' => 'Limpar o carrinho de todos os conteúdos',
	'VM_SAVED_CART_TITLE' => 'Saved Cart',
	'VM_SAVED_CART_RETURN' => 'Return'
); $VM_LANG->initModule( 'shop', $langvars );
?>
