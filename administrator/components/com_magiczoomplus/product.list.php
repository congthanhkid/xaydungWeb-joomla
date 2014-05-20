<?php

/*------------------------------------------------------------------------
# mod_virtuemart_magiczoomplus - Magic Zoom Plus for Joomla with VirtueMart
# ------------------------------------------------------------------------
# Magic Toolbox
# Copyright 2011 MagicToolbox.com. All Rights Reserved.
# @license - http://www.opensource.org/licenses/artistic-license-2.0  Artistic License 2.0 (GPL compatible)
# Website: http://www.magictoolbox.com/magiczoomplus/modules/virtuemart/
# Technical Support: http://www.magictoolbox.com/contact/
/*-------------------------------------------------------------------------*/

if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' );

echo mz_inlineCss();
?>
<h2>VirtueMart products</h2>
<?php


$products = new ps_DB;

$from = max(array(0,floor(mz_get('from')/MZ_PER_PAGE)*MZ_PER_PAGE));

$limit = 'LIMIT '.$from.','.MZ_PER_PAGE;

$q = array();
$q[] = "SELECT SQL_CALC_FOUND_ROWS pcr.category_id, p.product_thumb_image as thumb, p.product_full_image as image, p.product_id as id, p.product_name as name, p.product_s_desc as description, count(pf.file_product_id) as images_count";
$q[] = "FROM #__{vm}_product AS p LEFT JOIN #__{vm}_product_files AS pf ON p.product_id = pf.file_product_id LEFT JOIN #__{vm}_product_category_xref AS pcr ON p.product_id = pcr.product_id";
    $w = array();
    $w[] = "p.product_parent_id = 0";
    mz_get('what') && $w[] = "p.product_name LIKE '%".$products->getEscaped(mz_get('what'))."%'";
    mz_get('category') && $w[] = "pcr.category_id = ".intval(mz_get('category'));
$q[] = "WHERE ".join(' AND ',$w);
$q[] = "GROUP BY p.product_id $limit";
$products->setQuery(join(' ',$q));
$products->query();

if(defined( '_JEXEC' )){
    $count = $products->_database->Execute("SELECT FOUND_ROWS()");
    $count = $count->data[0][0];
} else {
    //TODO: optimize this for joomla 1.0.x ->
    $count = new ps_DB();
    $q = array();
    $q[] = "SELECT p.product_id ";
    $q[] = "FROM #__{vm}_product AS p LEFT JOIN #__{vm}_product_category_xref AS pcr ON p.product_id = pcr.product_id";
        $w = array();
        $w[] = "p.product_parent_id = 0";
        mz_get('what') && $w[] = "p.product_name LIKE '%".$products->getEscaped(mz_get('what'))."%'";
        mz_get('category') && $w[] = "pcr.category_id = ".intval(mz_get('category'));
    $q[] = "WHERE ".join(' AND ',$w);
    $q[] = "GROUP BY p.product_id";
    $count->setQuery(join(' ',$q));
    $count->query();
    $count = $count->num_rows();
    //------------------------
}
?>
<div class="actions">
    <form name="search">
        <input type="hidden" name="option" value="com_magiczoomplus"/>
        <input type="hidden" name="page" value="product.list"/>

        <label for="what">Search (name): </label>
            <input name="what" value="<?php echo mz_get('what')?>"/>
        <label for="category">Category: </label>
            <?php echo mz_categoryList(mz_get('category'),array('name'=>'category')) ?>
        <input type="submit" value="Go"/>
    </form>
    <a title="Useful, when you delete images or products. This deletes unneeded information from Magic Zoom Plus tables. It's done automaticaly every 24h."
       style="float:right; display: block; line-height: 10px; margin-top: -10px; color: silver" href="?option=com_magiczoomplus&page=product.cleanup&manual=true">Make some clean up</a>
</div>
<table class="adminlist">
<tr>
    <th class="title">
        ID
    </th>
    <th class="title">
        Image
    </th>
    <th class="title">
        Additional
    </th>
    <th class="title">
        Name
    </th>
    <th class="title">
        Description
    </th>

</tr>
    <?php
    foreach($products->record as $key => $product){
        if ($product->thumb != ''){
            $imageUrl = mz_resolveImageUrl($product->thumb);
        } else
        if ($product->image != ''){
            $imageUrl = mz_resolveImageUrl($product->image);
        } else {
            $imageUrl = false;
        }
    ?>
        <tr class="row<?php echo $key%2?>">
            <td><?php echo $product->id;?></td>
            <td>
                <?php if($imageUrl) {?>
                    <img height="24" src='<?php echo $imageUrl;?>' alt="product image"/>
                <?php } else {?>
                    <i>No image</i>
                <?php }?>
            </td>
            <td>
                <?php if($imageUrl === false){ ?>
                    <i>Upload images for this product first</i><br/>
                <?php } else if($product->images_count > 0) {
                    $link = "index3.php?option=com_magiczoomplus&page=product.alternates&id={$product->id}";
                    $text = "Edit alternates/hotspots";
                ?>
                    <b>
                        <?php echo $product->images_count.' additional image'.($product->images_count>1?'s':'')?>
                        <br/>
                        <?php echo vmPopupLink( $link, $text, 800, 540, '_blank', $text, 'screenX=100,screenY=100' );?>
                    </b>
                <br/>
                <?php } else {
//                    $link = "index3.php?option=com_magiczoomplus&page=product.hotspots&id={$product->id}";
//                    $text = 'Edit hotspots';
//                    echo vmPopupLink( $link, $text, 800, 540, '_blank', $text, 'screenX=100,screenY=100' );
                    ?>
                    <i>Upload more images first</i>
                <br/>
                <?php
                }
                $link = "index3.php?page=product.file_list&product_id={$product->id}&no_menu=1&option=com_virtuemart";
                echo vmPopupLink( $link, "Manage files", 800, 540, '_blank', 'Upload additional images', 'screenX=100,screenY=100' );
                ?>
            </td>
            <td><?php echo $product->name;?></td>
            <td><?php echo $product->description;?></td>
        </tr>
    <?php }?>
</table>
<div>
    <?php echo mz_getPagination($count,$from);?>
</div>
