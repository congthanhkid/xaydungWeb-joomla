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

//global $page, $mosConfig_live_site, $vm_mainframe;

$productId = intval($_GET['id']);

$product = new ps_DB;
    $q[]= "SELECT p.product_full_image as image, p.product_id as id, p.product_name as name, p.product_s_desc as productdesc, pf.file_url, pf.file_name, pf.file_title, pf.file_image_thumb_height, pf.file_image_thumb_width, mz.*, pf.file_id";
    $q[]= "FROM #__{vm}_product AS p LEFT JOIN #__{vm}_product_files AS pf ON p.product_id = pf.file_product_id LEFT JOIN #__{vm}_mz_product_files as mz ON mz.file_id = pf.file_id";
    $q[]= "WHERE p.product_id = $productId AND pf.file_is_image = 1 ORDER BY pf.file_id";

$product->setQuery(join(' ',$q));
$product->query();

if(!$product->num_rows()){
    mz_redirect("index3.php?page=product.file_list&product_id=$productId&no_menu=1&option=com_virtuemart");
}

//check if new images exist in vm database and create links in our base
$toInsert = array();
foreach($product->record as $p){
    if($p->is_alternate === null){
        $toInsert[] = '('.$p->file_id.',1)';
        $p->is_alternate = '1';
    }
}
if(count($toInsert)){
    $iProduct = new ps_DB;
    $query = 'INSERT INTO #__{vm}_mz_product_files(file_id,is_alternate) VALUES'.join(',',$toInsert);
    $iProduct->query($query);
    unset($iProduct);
}
//-------------------------

$mImage =& $product->record[0];
$aImages =& $product->record;

$mImageUrl = mz_resolveImageUrl($mImage->image);
$mImagePath = mz_resolveImagePath($mImage->image);


$maxWidth = 300;
$maxHeight = 300;

if(extension_loaded('gd')){
    $mDimentions = getimagesize($mImagePath);

    if($mDimentions[0]>$maxWidth){
        $coef = $maxWidth/$mDimentions[0];
        $mDimentions[0]*=$coef;
        $mDimentions[1]*=$coef;
    }
    if($mDimentions[1]>$maxHeight){
        $coef = $maxHeight/$mDimentions[1];
        $mDimentions[0]*=$coef;
        $mDimentions[1]*=$coef;
    }
    $mDimentions[3] = 'width="'.$mDimentions[0].'" height="'.$mDimentions[1].'"';
} else {
    $mDimentions = array($maxWidth,$maxWidth,2,'width="'.$maxWidth.'" height="'.$maxHeight.'"',24,'image/jpeg');
}

vmCommonHTML::loadExtjs();
?>
<style>
    h2 {
        font-size: 120%;
        margin: 0 0 10px 0;
    }
    .stretch {
        width: 95%;
    }
</style>


<div style="margin: 20px">

    <div style="background: #F9F9F9; padding: 20px">
        <div style="overflow: hidden;">
            <div style="float: left;">
                <?php
                    $link = "index3.php?option=com_magiczoomplus&page=product.hotspots&id={$productId}&target=0";
                    $text = "<img
                            src=\"".$mImageUrl."\"
                            alt=\"product image\"
                            $mDimentions[3]
                        />"
                    ?>
                <?php echo vmPopupLink( $link, $text, 800, 540, '_blank', 'Edit hotspots', 'screenX=120,screenY=120' );?>
            </div>
            <div style="float: left; margin: 10px; padding: 10px;">
                <h2><?php echo $mImage->name?></h2>
                <?php echo $mImage->productdesc?>
            </div>
        </div>
        <form name="alternates">
            <div style="margin: 20px 0">

                <h2>Alternates</h2>
                Select images that are alternates to the main image
                <table class="adminlist">
                    <tr>
                        <th class="title">Image</th>
                        <th class="title">Is alternate</th>
                        <th class="title">Advanced Zoom Options</th>
                        <th class="title">
                            <input type="button" onclick="document.forms.alternates.elements.action.value = 'savealternates';document.forms.alternates.submit()" value="Save"/>
                        </th>
                    </tr>
                <?php foreach($aImages as $key => $im) {
                    $link = "index3.php?option=com_magiczoomplus&page=product.hotspots&id={$productId}&target={$im->file_id}";
                    $image = mz_isUrl($im->file_name)?$im->file_name:$mosConfig_live_site.preg_replace('/\/([\w]+)(\.[\w]{2,4})$/ui',"/resized/$1_{$im->file_image_thumb_height}x{$im->file_image_thumb_width}$2",$im->file_name);
                    $text = "<img
                            src=\"".$image."\"
                            alt=\"$im->file_title\"
                            title=\"$im->file_name\"
                            height=\"64\"
                        />";
                    ?>

                    <tr class="row<?php echo $key%2?>">
                        <td>
                            <?php echo vmPopupLink( $link, $text, 800, 540, '_blank', 'Edit hotspots', 'screenX=120,screenY=120' );?>
                        </td>
                        <td>
                            <input type="checkbox" name="alts[<?php echo $im->file_id?>][checked]" <?php if($im->is_alternate != '0') echo 'checked';?>/>
                        </td>
                        <td colspan="2">
                            <input class="stretch" name="alts[<?php echo $im->file_id?>][advanced]" value="<?php echo $im->advanced_option?>">
                        </td>
                    </tr>
                <?php } ?>
                </table>
            </div>
            

            <input type="hidden" name="productId" value="<?php echo intval($_GET['id'])?>"/>
            <input type="hidden" name="action"/>
            <input type="hidden" name="option" value="com_magiczoomplus"/>
            <input type="hidden" name="page" value="product.save"/>
        </form>
    </div>
    
</div>
