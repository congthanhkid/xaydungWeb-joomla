<?PHP

function dynamicTabConfig( $rows,$row2, $menutype,$pageNav, $mainpadding, $subpadding, $mainborder, $subborder, $mainborderover, $subborderover, $modulename, $ordered, $parent_id,$orders2, $lists,$orders3,$moduleclass_sfx)
{
	global $mainframe;
   $absolute_path=$mainframe->getCfg( 'absolute_path' );
   $mosConfig_absolute_path=JPATH_ROOT;
?>
<script type="text/javascript" src="components/com_swmenupro/ImageManager/assets/dialog.js"></script>
<script type="text/javascript" src="components/com_swmenupro/ImageManager/IMEStandalone.js"></script>
<script type="text/javascript" src="components/com_swmenupro/js/swmenupro_packed.js"></script>
<link rel="stylesheet" href="components/com_swmenupro/css/swmenupro.css" type="text/css" />
<script type="text/javascript" language="javascript" src="components/com_swmenupro/js/dhtml.js"></script>
<script type="text/javascript" language="javascript">
<!--
function submitbutton(pressbutton) {
	doMainBorder();
	doSubBorder();
	document.adminForm.target="_self";
	document.adminForm.action="index2.php";
	submitform( pressbutton );
}

function doImagesWindow() {
    if(document.adminForm.menutype.value != document.adminForm.menuname.value){
         document.getElementById('images_window').style.display="none";
         document.getElementById('images_message').innerHTML="<?php echo _SW_MENU_CHANGE_NOTICE; ?>";
    }else{
         document.getElementById('images_window').style.display="block";
         document.getElementById('images_message').innerHTML="";
    }
}

var originalOrder='<?php echo $row2->ordering?$row2->ordering:0;?>';
var originalPos='<?php echo $row2->position?$row2->position:"left";?>';
var orders=new Array();	// array in the format [key,value,text]
<?php	$i=0;
foreach ($orders2 as $k=>$items) {
	foreach ($items as $v) {
		echo "\n	orders[".$i++."]=new Array( '$k','$v->value','$v->text' );";
	}
}
?>
var originalOrder2='<?php echo $parent_id;?>';
var originalPos2='<?php echo $menutype;?>';
var orders2=new Array();	// array in the format [key,value,text]
<?php	$i=0;
foreach ($orders3 as $k=>$items) {
	foreach ($items as $v) {
		echo "\n	orders2[".$i++."]=new Array( '$k','$v->value','$v->text' );";
	}
}
?>
//-->
</script> 

<div class="swmenu_container" >
		
<table  cellpadding="4" cellspacing="4" border="0" width="750">
  <tr>
     <td width="10%"><img src="components/com_swmenupro/images/swmenupro_logo_small.gif" align="left" border="0"/></td>
     <td valign="bottom"><span class="swmenu_sectionname"><?php echo _SW_DYN_TAB_MENU." "._SW_MODULE_EDITOR; ?></span> </td>
     <td valign="top" >
      <ul>
       <?php if (file_exists($mosConfig_absolute_path."/modules/mod_swmenupro/styles/menu".$row2->id.".css")&&$row2->id){ ?>
      <li><a href="index2.php?option=com_swmenupro&task=editCSS&id=<?php echo $row2->id; ?>" ><?php echo _SW_CSS_LINK; ?></a></li>
       <?php } else{ ?>
      <li><a href="javascript:void(0);" onClick="doExport();" ><?php echo _SW_EXPORT_LINK; ?></a></li>
       <?php } ?>
      </ul>
    </td>
  </tr>
</table>

<form action="index2.php" method="POST" name="adminForm">
<table  cellpadding="0" cellspacing="0" border="0" width="750" style="height:35px">
  <tr>
   	<td id="tab6" class="swmenu_offtab" onclick="dhtml.cycleTab(this.id)"><?php echo _SW_MODULE_SETTINGS_TAB; ?></td>
   	<td id="tab1" class="swmenu_offtab" onclick="dhtml.cycleTab(this.id)"><?php echo _SW_SIZE_OFFSETS_TAB; ?></td>
    <td id="tab2" class="swmenu_offtab" onclick="dhtml.cycleTab(this.id)"><?php echo _SW_COLOR_BACKGROUNDS_TAB; ?></td>
    <td id="tab3" class="swmenu_offtab" onclick="dhtml.cycleTab(this.id)"><?php echo _SW_FONTS_PADDING_TAB; ?></td>
    <td id="tab5" class="swmenu_offtab" onclick="dhtml.cycleTab(this.id)"><?php echo _SW_BORDERS_EFFECTS_TAB; ?></td>
    <td id="tab7" class="swmenu_offtab" onclick="dhtml.cycleTab(this.id);doImagesWindow();"><?php echo _SW_IMAGES_CSS_TAB; ?></td>
  </tr>
</table>

<table class="swmenu_tabheading" width="750">
  <tr>
   <td width="80%"> <?php echo _SW_MODULE_NAME; ?>:<input class="inputbox" style="width:200px" type="text" name="title" size="20" value="<?php echo $modulename; ?>" />
   </td><td><a href="javascript:void(0);" class="swmenu_button_save" onClick="doSave();" onmouseover="this.T_ABOVE=true;return escape('<?php echo _SW_SAVE_TIP; ?>')" ><?php echo _SW_SAVE_BUTTON; ?></a>
   </td><td><a href="javascript:void(0);" class="swmenu_button_apply" onClick="doApply();" onmouseover="this.T_ABOVE=true;return escape('<?php echo _SW_APPLY_TIP; ?>')" ><?php echo _SW_APPLY_BUTTON; ?></a>
   </td><td><a href="javascript:void(0);" class="swmenu_button_export" onClick="doExport();" onmouseover="this.T_ABOVE=true;return escape('<?php echo _SW_EXPORT_TIP; ?>')" ><?php echo _SW_EXPORT_BUTTON; ?></a>
   </td><td><a href="javascript:void(0);" class="swmenu_button_preview" onClick="doPreviewWindow();" onmouseover="this.T_ABOVE=true;return escape('<?php echo _SW_PREVIEW_TIP; ?>')" ><?php echo _SW_PREVIEW_BUTTON; ?></a>
   </td><td><a href="javascript:void(0);" class="swmenu_button_cancel" onClick="doCancel();" onmouseover="this.T_ABOVE=true;return escape('<?php echo _SW_CANCEL_TIP; ?>')"><?php echo _SW_CANCEL_BUTTON; ?></a>
   </td>
 </tr>
</table>

<div id="page1" class="pagetext">

 <table width="750">
            <tr> 
              <td valign="top"> 
                <table width="360" height="160" style="border:0px solid #cccccc;">
                  <tr> 
                    <td colspan="2" class="swmenu_tabheading"> <div align="center"><?php echo _SW_ALIGNMENT_LABEL; ?></div></td>
                  </tr><tr class="swmenu_menubackgr"> 
                    <td><?php echo _SW_ALIGNMENT; ?>:</td> 
                    <td width="120"> <div align="left"><?php echo $lists['position']; ?></div></td> 
                  </tr><tr> 
                    <td colspan="2" class="swmenu_tabheading"><div align="center"><?php echo _SW_WIDTHS_LABEL; ?></div></td>
                  </tr><tr class="swmenu_menubackgr">
                    <td><?php echo _SW_TOP_MENU." "._SW_WIDTH; ?>: <i><?php echo _SW_AUTOSIZE; ?></i></td>
                    <td width="120"> <div align="right"> 
                    <input type="text" size="8" id="main_width" name="main_width" value="<?php echo $rows->main_width;?>" />px</div></td> 
                  </tr><tr>
                    <td><?php echo _SW_SUB_MENU." "._SW_WIDTH; ?>: <i><?php echo _SW_AUTOSIZE; ?></i></td>
                    <td width="120"> <div align="right"> 
                    <input type="text" size="8" id="sub_width" name="sub_width" value="<?php echo $rows->sub_width;?>" />px</div></td> 
                  </tr><tr class="swmenu_menubackgr">
                    <td><?php echo _SW_TAB_MARGIN; ?>:</td>
                    <td width="120"> <div align="right">
                    <input type="text" size="8"  name="main_left" value="<?php echo $rows->main_left;?>" />px</div></td>
                  </tr>
                </table></td> 
              <td valign="top"> 
              <table width="360"  height="160" style="border:0px solid #cccccc;" >
                 <tr>
                    <td colspan="2" class="swmenu_tabheading"><div align="center"><?php echo _SW_HEIGHTS_LABEL; ?></div></td>
                 </tr><tr class="swmenu_menubackgr">
                    <td><?php echo _SW_TOP_MENU." "._SW_ITEM_HEIGHT; ?>:</td>
                    <td width="120"> <div align="right">
                    <input type="text" size="8" name="main_top" value="<?php echo $rows->main_top;?>" />px</div></td>
                  </tr><tr>
                    <td><?php echo _SW_SUB_MENU." "._SW_ITEM_HEIGHT; ?>:</td>
                    <td width="120"> <div align="right">
                    <input id="sub_height" name="sub_height" type="text" value="<?php echo $rows->sub_height;?>" size="8" />px</div></td>
                  </tr><tr>
                    <td colspan="2" class="swmenu_tabheading"><div align="center"><?php echo _SW_COMPLETE_PADDING_LABEL; ?></div></td>
                  </tr><tr>
                    <td colspan="2" align="center"> 
                      <table>
                        <tr class="swmenu_menubackgr">
                          <td width="75" align="center"><?php echo _SW_TOP; ?></td>
                          <td width="75" align="center"><?php echo _SW_RIGHT; ?></td>
                          <td width="75" align="center"><?php echo _SW_BOTTOM; ?></td>
                          <td width="75" align="center"><?php echo _SW_LEFT; ?></td>
                        </tr><tr>
                          <TD width="75" align="center"><input type="text" size="3" id="level1_sub_top" name="level1_sub_top" value="<?php echo $rows->level1_sub_top;?>" maxlength="2">px</TD>
                          <TD width="75" align="center"><input type="text" size="3" id="level1_sub_left" name="level1_sub_left" value="<?php echo $rows->level1_sub_left;?>" maxlength="2">px</TD>
                          <TD width="75" align="center"><input type="text" size="3" id="level2_sub_top" name="level2_sub_top" value="<?php echo $rows->level2_sub_top;?>" maxlength="2">px</TD>
                          <TD width="75" align="center"><input type="text" size="3" id="level2_sub_left" name="level2_sub_left" value="<?php echo $rows->level2_sub_left;?>" maxlength="2">px</TD>
                        </tr>
                      </table></td>
                  </tr>
              </table></td>
            </tr>
       </table>
       <table width="100%">
            <tr>
              <td align="center">
              <img src="components/com_swmenupro/images/csstab_offsets.png" width="750" height="363" border="0" hspace="0" vspace="0">
              </td>
            </tr>
       </table>
</div>



<div id="page2" class="pagetext">

<table width="750">
  <tr>
    <td valign="top"> 
      <table width="360" style="border:0px solid #cccccc;height:260px">
        <tr>
          <td colspan="3" class="swmenu_tabheading"> <div align="center"><?php echo _SW_BACKGROUND_IMAGE_LABEL; ?></div></td>
        </tr><tr class="swmenu_menubackgr" >
          <td><?php echo _SW_TOP_MENU." "._SW_BACKGROUND; ?>:</td>
          <td colspan="2">
	        <table id="main_back_image_box" style="border: 1px solid #000000; width:100px; height:15px" background="../<?php echo $rows->main_back_image;?>" align="left">
	 	     <tr><td width="100%" style="height:20px">&nbsp;</td></tr>
      	    </table>
            <input type="button" name="getimage" value="<?php echo _SW_GET; ?>" onclick="BackgroundSelector.select('main_back_image');"/>
            <input type="hidden" id="main_back_image" name="main_back_image" value="<?php echo $rows->main_back_image;?>"/>
	     </td>
      </tr><tr>
        <td><?php echo _SW_TAB_TOP." "._SW_BACKGROUND; ?>:</td>
        <td colspan="2">
          <table id="main_back_image_over_box" style="border: 1px solid #000000; width:100px; height:15px" background="../<?php echo $rows->main_back_image_over;?>" align="left"> 
            <tr><td width="100%" height="20">&nbsp;</td></tr>
          </table>
          <input type="button" name="getimage" value="<?php echo _SW_GET; ?>" onclick="BackgroundSelector.select('main_back_image_over');"/>
          <input type="hidden" id="main_back_image_over" name="main_back_image_over" value="<?php echo $rows->main_back_image_over;?>"/>
        </td>
     </tr><tr class="swmenu_menubackgr">
       <td><?php echo _SW_SUB_MENU." / "._SW_TAB_ACTIVE." "._SW_BACKGROUND; ?>:</td>
       <td colspan="2">
         <table id="sub_back_image_box" style="border: 1px solid #000000; width:100px; height:15px" background="../<?php echo $rows->sub_back_image;?>" align="left"> 
           <tr><td width="100%" height="20">&nbsp;</td></tr>
         </table>
         <input type="button" name="getimage" value="<?php echo _SW_GET; ?>" onclick="BackgroundSelector.select('sub_back_image');"/>
         <input type="hidden" id="sub_back_image" name="sub_back_image" value="<?php echo $rows->sub_back_image;?>"/>
       </td>
     </tr><tr>
       <td><?php echo _SW_SUB_MENU." "._SW_OVER_BACKGROUND; ?>:</td>
         <td colspan="2">
           <table id="sub_back_image_over_box" style="border: 1px solid #000000; width:100px; height:15px" background="../<?php echo $rows->sub_back_image_over;?>" align="left"> 
            <tr><td width="100%" height="20">&nbsp;</td></tr>
          </table>
          <input type="button" name="getimage" value="<?php echo _SW_GET; ?>" onclick="BackgroundSelector.select('sub_back_image_over');"/>
          <input type="hidden" id="sub_back_image_over" name="sub_back_image_over" value="<?php echo $rows->sub_back_image_over;?>"/>
        </td>
      </tr><tr>
        <td colspan="3" class="swmenu_tabheading"> <div align="center"><?php echo _SW_BACKGROUND_COLOR_LABEL; ?></div></td>
      </tr><tr class="swmenu_menubackgr" >
         <td><?php echo _SW_TOP_MENU." "._SW_BACKGROUND." "._SW_COLOR; ?>:</td>
         <td> 
           <table id="main_back_box" style="border: 1px solid #000000; width:20px;height:20px" bgColor='<?php echo $rows->main_back;?>' >
             <tr><td width="20" height="20">&nbsp;</td></tr>
           </table>
        </td>
          <td width="120"><div align="right"><input type="text" size="8"  id="main_back" name="main_back" value="<?php echo $rows->main_back;?>"/>
          <a onMouseOver="this.style.cursor='pointer'" onClick="copyColor('main_back');" ><img src="components/com_swmenupro/images/sel.gif"/><?php echo _SW_GET; ?></a></div></td>
      </tr><tr>
        <td><?php echo _SW_TAB_TOP." "._SW_COLOR; ?>:</td>
        <td> 
           <table id="main_over_box" style="border: 1px solid #000000; width:20px; height:20px" bgColor='<?php echo $rows->main_over;?>'>
             <tr><td width="20" height="20">&nbsp;</td></tr>
           </table>
        </td>
        <td width="120"><div align="right"><input type="text" size="8"  id="main_over" name="main_over" value="<?php echo $rows->main_over;?>"/>
        <a onMouseOver="this.style.cursor='pointer'" onClick="copyColor('main_over');"><img src="components/com_swmenupro/images/sel.gif"/><?php echo _SW_GET; ?></a> </div></td>
     </tr><tr class="swmenu_menubackgr">
       <td><?php echo _SW_SUB_MENU." / "._SW_TAB_ACTIVE." "._SW_COLOR; ?>:</td>
       <td>
         <table id="sub_back_box" style="border: 1px solid #000000; width:20px; height:20px" bgColor='<?php echo $rows->sub_back;?>'>
           <tr><td width="20" height="20">&nbsp;</td></tr>
        </table>
      </td>
      <td width="120"><div align="right"><input type="text" size="8"  id="sub_back" name="sub_back" value="<?php echo $rows->sub_back;?>"/>
      <a onMouseOver="this.style.cursor='pointer'" onClick="copyColor('sub_back');"><img src="components/com_swmenupro/images/sel.gif"/><?php echo _SW_GET; ?></a></div></td>
    </tr><tr>
      <td><?php echo _SW_SUB_MENU." "._SW_OVER_COLOR; ?>:</td>
      <td> 
        <table id="sub_over_box" style="border: 1px solid #000000; width:20px; height:20px" bgColor='<?php echo $rows->sub_over;?>'>
          <tr><td width="20" height="20">&nbsp;</td></tr>
        </table>
      </td>
      <td width="120"><div align="right"><input type="text" size="8" id="sub_over" name="sub_over" value="<?php echo $rows->sub_over;?>"/>
      <a onMouseOver="this.style.cursor='pointer'" onClick="copyColor('sub_over');"><img src="components/com_swmenupro/images/sel.gif"/><?php echo _SW_GET; ?></a></div></td>
    </tr>
   </table>
  </td>
  <td valign="top"> 
    <table width="360" style="border:0px solid #cccccc;height:260px;" >
       <tr>
         <td colspan="3" class="swmenu_tabheading"> <div align="center"><?php echo _SW_FONT_COLOR_LABEL; ?></div>
       </tr><tr class="swmenu_menubackgr">
         <td><?php echo _SW_TOP_MENU." "._SW_FONT; ?>:</td>
         <td> 
           <table id="main_font_color_box" style="border: 1px solid #000000; width:20px; height:20px" bgColor='<?php echo $rows->main_font_color;?>'>
             <tr><td width="20" height="20">&nbsp;</td></tr>
           </table>
         </td>
         <td width="120"> <div align="right">
         <input name="main_font_color" type="text" id="main_font_color" value="<?php echo $rows->main_font_color;?>" size="8"/>
         <a onMouseOver="this.style.cursor='pointer'" onClick="copyColor('main_font_color');"><img src="components/com_swmenupro/images/sel.gif"/><?php echo _SW_GET; ?></a></div></td>
       </tr><tr>
         <td><?php echo _SW_TOP_MENU." "._SW_OVER_FONT; ?>:</td>
         <td> 
            <table id="main_font_color_over_box" style="border: 1px solid #000000; width:20px; height:20px" bgColor='<?php echo $rows->main_font_color_over;?>'>
              <tr><td width="20" height="20">&nbsp;</td></tr>
            </table>
         </td>
         <td width="120"> <div align="right">
          <input name="main_font_color_over" type="text" id="main_font_color_over" value="<?php echo $rows->main_font_color_over;?>" size="8"/>
          <a onMouseOver="this.style.cursor='pointer'" onClick="copyColor('main_font_color_over');"><img src="components/com_swmenupro/images/sel.gif"/><?php echo _SW_GET; ?></a></div></td>
       </tr><tr class="swmenu_menubackgr">
         <td><?php echo _SW_SUB_MENU." / "._SW_TAB_ACTIVE." "._SW_FONT; ?>:</td>
         <td> 
            <table id="sub_font_color_box" style="border: 1px solid #000000; width:20px; height:20px" bgColor='<?php echo $rows->sub_font_color;?>'>
              <tr><td width="20" height="20">&nbsp;</td></tr>
            </table>
          </td>
          <td width="120"> <div align="right">
           <input name="sub_font_color" type="text" id="sub_font_color" value="<?php echo $rows->sub_font_color;?>" size="8"/>
           <a onMouseOver="this.style.cursor='pointer'" onClick="copyColor('sub_font_color');"><img src="components/com_swmenupro/images/sel.gif"/><?php echo _SW_GET; ?></a></div></td>
        </tr><tr>
           <td><?php echo _SW_SUB_MENU." "._SW_OVER_FONT; ?>:</td>
           <td>
              <table id="sub_font_color_over_box" style="border: 1px solid #000000; width:20px; height:20px" bgColor='<?php echo $rows->sub_font_color_over;?>'>
                 <tr><td width="20" height="20">&nbsp;</td></tr>
              </table>
           </td>
           <td width="120"> <div align="right">
            <input name="sub_font_color_over" type="text" id="sub_font_color_over" value="<?php echo $rows->sub_font_color_over;?>"  size="8"/>
            <a onMouseOver="this.style.cursor='pointer'" onClick="copyColor('sub_font_color_over');"><img src="components/com_swmenupro/images/sel.gif"/><?php echo _SW_GET; ?></a></div></td>
         </tr><tr>
           <td colspan="3" class="swmenu_tabheading"> <div align="center"><?php echo _SW_BORDER_COLOR_LABEL; ?></div></td>
         </tr><tr class="swmenu_menubackgr">
           <td><?php echo _SW_TAB_TOP." "._SW_NORMAL_BORDER_COLOR; ?>:</td>
           <td> 
             <table id="main_border_color_box" style="border: 1px solid #000000; width:20px; height:20px" bgColor='<?php echo $mainborder[2];?>'>
               <tr><td width="20" height="20">&nbsp;</td></tr>
             </table>
           </td>
           <td width="120"> <div align="right">
            <input  name="main_border_color" onChange="doMainBorder();" type="text" id="main_border_color" value="<?php echo $mainborder[2];?>" size="8"/>
            <a onMouseOver="this.style.cursor='pointer'" onClick="copyColor('main_border_color');"><img src="components/com_swmenupro/images/sel.gif"/><?php echo _SW_GET; ?></a></div></td>
        </tr><tr>
          <td><?php echo _SW_TAB_ACTIVE." "._SW_BOTTOM." "._SW_NORMAL_BORDER_COLOR; ?>:</td>
          <td>
            <table id="main_border_color_over_box" style="border: 1px solid #000000; width:20px; height:20px" bgColor='<?php echo $mainborderover[2];?>'>
             <tr><td width="20" height="20">&nbsp;</td></tr>
            </table>
          </td>
          <td width="120"> <div align="right">
          <input  name="main_border_color_over" onChange="doMainBorder();" type="text" id="main_border_color_over" value="<?php echo $mainborderover[2];?>" size="8"/>
          <a onMouseOver="this.style.cursor='pointer'" onClick="copyColor('main_border_color_over');"><img src="components/com_swmenupro/images/sel.gif"/><?php echo _SW_GET; ?></a></div></td>
       </tr><tr class="swmenu_menubackgr">
         <td><?php echo _SW_SUB_MENU." "._SW_DIVIDER_COLOR; ?>:</td>
         <td>
           <table id="sub_border_color_box" style="border: 1px solid #000000; width:20px; height:20px" bgColor='<?php echo $subborder[2];?>'>
             <tr><td width="20" height="20">&nbsp;</td></tr>
           </table>
         </td>
         <td width="120"> <div align="right">
         <input  name="sub_border_color" type="text" onChange="doSubBorder();" id="sub_border_color" value="<?php echo $subborder[2];?>" size="8"/>
         <a onMouseOver="this.style.cursor='pointer'" onClick="copyColor('sub_border_color');"><img src="components/com_swmenupro/images/sel.gif"/><?php echo _SW_GET; ?></a></div></td>
       </tr><tr>
      <td><?php echo _SW_SUB_MENU." "._SW_BOTTOM." "._SW_NORMAL_BORDER_COLOR; ?>:</td>
      <td> 
        <table id="sub_border_color_over_box" style="border: 1px solid #000000; width:20px; height:20px" bgColor='<?php echo $subborderover[2];?>'>
          <tr><td width="20" height="20">&nbsp;</td></tr>
        </table>
      </td>
      <td width="120"> <div align="right">
          <input  name="sub_border_color_over" type="text" onChange="doSubBorder();" id="sub_border_color_over" value="<?php echo $subborderover[2];?>" size="8"/>
          <a onMouseOver="this.style.cursor='pointer'" onClick="copyColor('sub_border_color_over');"><img src="components/com_swmenupro/images/sel.gif"/><?php echo _SW_GET; ?></a></div></td>
    </tr>
   </table>
 </td>
</tr>
</table>

<table width="100%" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center"><img src="components/com_swmenupro/images/colors_top.png" width="750" height="50" border="0" hspace="0" vspace="0"/> </td>
  </tr>
</table>
<table width="100%" valign="top" cellspacing="0" cellpadding="0" border="0">
  <tr><td align="center">
      <table width="360" cellspacing="0" cellpadding="0"  valign="top" style="border-right:6px solid #CECFCE;height:330px">
        <tr><td><?php echo sprintf( _SW_COLOR_TIP, '<img src="components/com_swmenupro/images/sel.gif"/><b>'._SW_GET.'</b>'); ?></td>
        </tr><tr><td> 
            <table width="320" align="center" style="border:0px solid #cccccc;">
              <tr><td id="CPCP_Wheel" ><img src="components/com_swmenupro/images/colorwheel.jpg" width="256" height="256"  onMouseMove="xyOff(event);" onClick="wrtVal();" border="0"/></td>
                <td>&nbsp;</td><td> <table style="border:0px solid #cccccc;" bgcolor="#FFAD00">
                    <tr><td valign="TOP"><?php echo _SW_PRESENT_COLOR; ?>:</td>
                    </tr><tr><td id="CPCP_ColorCurrent" height="70"></td>
                    </tr><tr><td id="CPCP_ColorSelected">&nbsp;</td>
                    </tr><tr><td><br /><?php echo _SW_SELECTED_COLOR; ?>:
                    </tr><tr><td bgcolor="#FFFFFF" id="CPCP_Input" height="70"  >&nbsp;</td>
                    </tr><tr><td><input name="TEXT" type="TEXT" id="CPCP_Input_RGB" value="#FFFFFF" size="8"/></td>
                    </tr></table>
                </td></tr>
          </table></td></tr>
     </table></td><td valign="top" align="center"> 
     <table>
        <tr>
          <td align="center" valign="top"> <img src="components/com_swmenupro/images/csstab_colors.png" width="342" height="320" border="0" hspace="0" vspace="0"/> </td>
        </tr>
     </table>
    </td>
  </tr>
</table>

</div>


<div id="page3" class="pagetext">
  <table width="750">
    <tr>
      <td valign="top">
          <table width="360" height="210" style="border:0px solid #cccccc;">
            <tr>
              <td colspan="2" class="swmenu_tabheading"><div align="center"><?php echo _SW_FONT_FAMILY_LABEL; ?></div></td>
            </tr><tr class="swmenu_menubackgr">
              <td width="100"><?php echo _SW_TOP_MENU; ?>:</td>
              <td width="250"><div align="right"><?php echo $lists['font_family']; ?></div></td>
            </tr><tr>
              <td><?php echo _SW_SUB_MENU; ?>:</td>
              <td width="250"><div align="right"><?php echo $lists['sub_font_family']; ?></div></td>
            </tr><tr>
              <td colspan="2" class="swmenu_tabheading"><div align="center"><?php echo _SW_TOP_MENU." "._SW_PADDING; ?></div></td>
            </tr><tr>
              <td colspan="2" align="center">
                <table>
                  <tr class="swmenu_menubackgr">
                    <td width="75" align="center"><?php echo _SW_TOP; ?></td>
                    <td width="75" align="center"><?php echo _SW_RIGHT; ?></td>
                    <td width="75" align="center"><?php echo _SW_BOTTOM; ?></td>
                    <td width="75" align="center"><?php echo _SW_LEFT; ?></td>
                  </tr><tr>
                    <td width="75" align="center"><input type="text" onchange="doMainPadding();" size="3" id="main_pad_top" name="main_pad_top" value="<?php echo $mainpadding[0]; ?>" maxlength="2" />px</td>
                    <td width="75" align="center"><input type="text" onchange="doMainPadding();" size="3" id="main_pad_right" name="main_pad_right" value="<?php echo $mainpadding[1]; ?>" maxlength="2" />px</td>
                    <td width="75" align="center"><input type="text" onchange="doMainPadding();" size="3" id="main_pad_bottom" name="main_pad_bottom" value="<?php echo $mainpadding[2]; ?>" maxlength="2" />px</td>
                    <td width="75" align="center"><input type="text" onchange="doMainPadding();" size="3" id="main_pad_left" name="main_pad_left" value="<?php echo $mainpadding[3]; ?>" maxlength="2" />px</td>
                  </tr>
                </table>
              </td>
            </tr><tr>
              <td colspan="2" class="swmenu_tabheading"><div align="center"><?php echo _SW_SUB_MENU." "._SW_PADDING; ?></div></td>
            </tr><tr>
              <td colspan="2" align="center">
                <table>
                  <tr class="swmenu_menubackgr">
                    <td width="75" align="center"><?php echo _SW_TOP; ?></td>
                    <td width="75" align="center"><?php echo _SW_RIGHT; ?></td>
                    <td width="75" align="center"><?php echo _SW_BOTTOM; ?></td>
                    <td width="75" align="center"><?php echo _SW_LEFT; ?></td>
                  </tr><tr>
                    <td width="75" align="center"><input type="text" onchange="doSubPadding();" size="3" id="sub_pad_top" name="sub_pad_top" value="<?php echo $subpadding[0]; ?>" maxlength="2" />px</td>
                    <td width="75" align="center"><input type="text" onchange="doSubPadding();" size="3" id="sub_pad_right" name="sub_pad_right" value="<?php echo $subpadding[1]; ?>" maxlength="2" />px</td>
                    <td width="75" align="center"><input type="text" onchange="doSubPadding();" size="3" id="sub_pad_bottom" name="sub_pad_bottom" value="<?php echo $subpadding[2]; ?>" maxlength="2" />px</td>
                    <td width="75" align="center"><input type="text" onchange="doSubPadding();" size="3" id="sub_pad_left" name="sub_pad_left" value="<?php echo $subpadding[3]; ?>" maxlength="2" />px</td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>
        </td>
        <td valign="top">
          <table width="360" height="210" style="border:0px solid #cccccc;">
            <tr>
              <td colspan="2" class="swmenu_tabheading"><div align="center"><?php echo _SW_FONT_SIZE_LABEL; ?></div></td>
            </tr><tr class="swmenu_menubackgr">
              <td><?php echo _SW_TOP_MENU." "._SW_FONT_SIZE; ?>:</td>
              <td width="100">
                <div align="right">
                  <input id="main_font_size" name="main_font_size" type="text" value="<?php echo $rows->main_font_size;?>" size="8" /> px
                </div>
              </td>
            </tr><tr>
              <td><?php echo _SW_SUB_MENU." "._SW_FONT_SIZE; ?>:</td>
              <td width="100">
                <div align="right">
                  <input id="sub_font_size" name="sub_font_size" type="text" value="<?php echo $rows->sub_font_size;?>" size="8" /> px
                </div>
              </td>
            </tr><tr>
              <td colspan="2" class="swmenu_tabheading">
                <div align="center"><?php echo _SW_FONT_ALIGNMENT_LABEL; ?></div>
              </td>
            </tr><tr class="swmenu_menubackgr">
              <td><?php echo _SW_TOP_MENU." "._SW_FONT_ALIGNMENT; ?>:</td>
              <td width="100"><div align="right"><?php echo $lists['main_align']; ?></div></td>
            </tr><tr>
              <td><?php echo _SW_SUB_MENU." "._SW_FONT_ALIGNMENT; ?>:</td>
              <td width="100"><div align="right"><?php echo $lists['sub_align']; ?></div></td>
            </tr><tr>
              <td colspan="2" class="swmenu_tabheading"><div align="center"><?php echo _SW_FONT_WEIGHT_LABEL; ?></div></td>
            </tr><tr class="swmenu_menubackgr">
              <td><?php echo _SW_TOP_MENU." "._SW_FONT_WEIGHT; ?>:</td>
              <td width="100"><div align="right"><?php echo $lists['font_weight']; ?></div></td>
            </tr><tr>
              <td><?php echo _SW_SUB_MENU." "._SW_FONT_WEIGHT; ?>:</td>
              <td width="100"><div align="right"><?php echo $lists['font_weight_over']; ?></div></td>
            </tr>
          </table>
        </td>
      </tr>
    </table>

    <table width="100%" cellspacing="0" cellpadding="0">
      <tr>
        <td align="center"><img alt="" src="components/com_swmenupro/images/font_top.png" width="750" height="50" border="0" hspace="0" vspace="0" /> </td>
      </tr>
    </table>

    <table width="100%"  cellspacing="0" cellpadding="0">
      <tr>
        <td align="center" valign="top">
          <table width="360" style="border-right:6px solid #CECFCE;" cellspacing="0" cellpadding="5">
            <tr>
              <td align="center"><?php echo _SW_FONT_TIP; ?><br /></td>
            </tr><tr>
              <td align="center"><span style="color:#1166B0; font-size:10px; font-weight:normal;font-family:Times New Roman, Times, serif;">
              'Times New Roman', Times, serif normal at 10px</span><br /></td>
            </tr><tr>
              <td align="center"><span style="color:#1166B0; font-size:10px; font-weight:bold;font-family:Verdana,Arial,Helvetica,sans-serif;">
              Verdana,Arial,Helvetica,sans-serif Bold at 10px</span><br /></td>
            </tr><tr>
              <td align="center"><span style="color:#1166B0; font-size:12px; font-weight:normal;font-family:Arial,Helvetica,sans-serif;">
              Arial,Helvetica,sans-serif Normal at 12px</span></td>
            </tr><tr>
              <td align="center" valign="top"><span style="color:#1166B0; font-size:12px; font-weight:normal;font-family:Georgia, Times New Roman, Times, serif;">
              Georgia, 'Times New Roman', Times, serif Normal at 12px</span><br /></td>
            </tr><tr>
              <td align="center"><span style="color:#1166B0; font-size:12px; font-weight:bold;font-family:Geneva,Arial,Helvetica,sans-serif;">
              'Geneva,Arial,Helvetica,sans-serif Bold at 12px</span><br /></td>
            </tr><tr>
              <td align="center"><span style="color:#1166B0; font-size:14px; font-weight:normal;font-family:Times New Roman, Times, serif;">
              'Times New Roman', Times, serif normal at 14px</span><br /></td>
            </tr><tr>
              <td align="center"><span style="color:#1166B0; font-size:14px; font-weight:bold;font-family:Verdana,Arial,Helvetica,sans-serif;">
              Verdana,Arial,Helvetica,sans-serif Bold at 14px</span><br /></td>
            </tr><tr>
              <td align="center"><span style="color:#1166B0; font-size:14px; font-weight:bold;font-family:Arial,Helvetica,sans-serif;">
              Arial,Helvetica,sans-serif Bold at 14px</span><br /></td>
            </tr><tr>
              <td align="center"><span style="color:#1166B0; font-size:14px; font-weight:normal;font-family:Geneva,Arial,Helvetica,sans-serif;">
              Geneva,Arial,Helvetica,sans-serif Normal at 14px</span><br /></td>
            </tr>
          </table>
        </td>
        <td align="center"><img alt="" src="components/com_swmenupro/images/menu_padding2.png" width="376" height="239" border="0" hspace="0" vspace="0" /> </td>
      </tr>
    </table>   
</div>


<div id="page5" class="pagetext">
  <table width="750">
      <tr>
        <td valign="top" >
          <table width="360" height="130" style="border:0px solid #cccccc;">
            <tr>
              <td colspan="2" class="swmenu_tabheading"><div align="center"><?php echo _SW_BORDER_WIDTHS_LABEL; ?></div></td>
            </tr><tr class="swmenu_menubackgr">
              <td><?php echo _SW_TAB_TOP." "._SW_NORMAL_BORDER." "._SW_WIDTH; ?>:</td>
              <td width="120"><div align="right">
               <input id="main_border_width" onchange="doMainBorder();" name="main_border_width" type="text" value="<?php echo $mainborder[0]; ?>" size="8" /> px
                </div>
              </td>
            </tr><tr>
              <td><?php echo _SW_TAB_ACTIVE." "._SW_BOTTOM." "._SW_NORMAL_BORDER." "._SW_WIDTH; ?>:</td>
              <td width="120"><div align="right">
                  <input id="main_border_over_width" onchange="doMainBorder();" name="main_border_over_width" type="text" value="<?php echo $mainborderover[0]; ?>" size="8" /> px
                </div>
              </td>
            </tr><tr class="swmenu_menubackgr">
              <td><?php echo _SW_SUB_MENU." "._SW_DIVIDER." "._SW_WIDTH; ?>:</td>
              <td width="120"><div align="right">
                  <input id="sub_border_width" onchange="doSubBorder();" name="sub_border_width" type="text" value="<?php echo $subborder[0]; ?>" size="8" /> px
                </div>
              </td>
            </tr><tr>
              <td><?php echo _SW_SUB_MENU." "._SW_BOTTOM." "._SW_NORMAL_BORDER." "._SW_WIDTH; ?>:</td>
              <td width="120"><div align="right">
                  <input id="sub_border_over_width" onchange="doSubBorder();" name="sub_border_over_width" type="text" value="<?php echo $subborderover[0]; ?>" size="8" /> px
                </div>
              </td>
            </tr><tr>
              <td colspan="2" class="swmenu_tabheading"><div align="center"><?php echo _SW_BORDER_STYLES_LABEL; ?></div></td>
            </tr><tr class="swmenu_menubackgr">
              <td><?php echo _SW_TAB_TOP." "._SW_NORMAL_BORDER." "._SW_STYLE; ?>:</td>
              <td width="120"><div align="right"><?php echo $lists['main_border_style']; ?></div></td>
            </tr><tr>
              <td><?php echo _SW_TAB_ACTIVE." "._SW_BOTTOM." "._SW_NORMAL_BORDER." "._SW_STYLE; ?>:</td>
              <td width="120"><div align="right"><?php echo $lists['main_border_over_style']; ?></div></td>
            </tr><tr class="swmenu_menubackgr">
              <td><?php echo _SW_SUB_MENU." "._SW_DIVIDER." "._SW_NORMAL_BORDER." "._SW_STYLE; ?>:</td>
              <td width="120"><div align="right"><?php echo $lists['sub_border_style']; ?></div></td>
            </tr><tr>
              <td><?php echo _SW_SUB_MENU." "._SW_BOTTOM." "._SW_NORMAL_BORDER." "._SW_STYLE; ?>:</td>
              <td width="120"><div align="right"><?php echo $lists['sub_border_over_style']; ?></div></td>
            </tr>
          </table>
        </td>
        <td>
          <table width="360" height="130" style="border:0px solid #cccccc;">
           <tr>
          <td align="center" valign="top"> <img src="components/com_swmenupro/images/csstab_border.png" width="323" height="261" border="0" hspace="0" vspace="0"/> </td>
        </tr>
    </table>
   </td>
  </tr>
 </table>
</div>
        
    
<div id="page6" class="pagetext">
<table width="750">
  <tr>
    <td valign="top"> 
      <table width="360" style="border:0px solid #cccccc;" >
        <tr>
          <td colspan="2" class="swmenu_tabheading"> <div align="center"><?php echo _SW_MENU_SOURCE_LABEL; ?></div></td>
        </tr><tr class="swmenu_menubackgr">
          <td align="left"><?php echo _SW_MENU_SOURCE; ?>:</td>
          <td><a href="javascript:void(0);" onmouseover="return escape('<?php echo _SW_MENU_SOURCE_TIP; ?>')" >
	       <img src="components/com_swmenupro/images/info.png" alt="info" align="middle" name="info" border="0" /></a>
          <?php echo $lists['menutype']; ?> </td>
        </tr><tr>
          <td  align="left" ><?php echo _SW_PARENT; ?>:</td>
          <td><a href="javascript:void(0);" onmouseover="return escape('<?php echo _SW_PARENT_TIP; ?>')" >
	       <img src="components/com_swmenupro/images/info.png" alt="info" align="middle" name="info" border="0" /></a>
           <script language="javascript" type="text/javascript">
		   <!--
            	writeDynaList( 'class="inputbox" name="parentid" size="1" style="width:200px"', orders2, originalPos2, originalPos2, originalOrder2 );
			//-->
			</script> </td>
        </tr><tr>
          <td colspan="2" class="swmenu_tabheading"> <div align="center"><?php echo _SW_STYLE_SHEET_LABEL; ?></div></td>
        </tr><tr class="swmenu_menubackgr">
          <td valign="top"><?php echo _SW_STYLE_SHEET; ?>:</td>
          <td><a href="javascript:void(0);" onmouseover="return escape('<?php echo _SW_STYLE_SHEET_TIP; ?>')" >
	      <img src="components/com_swmenupro/images/info.png" alt="info" align="middle" name="info" border="0" /></a>
          <?php echo $lists['cssload']; ?> </td>
        </tr><tr>
          <td valign="top"><?php echo _SW_CLASS_SFX; ?>:</td>
          <td><a href="javascript:void(0);" onmouseover="return escape('<?php echo _SW_CLASS_SFX_TIP; ?>')" >
	      <img src="components/com_swmenupro/images/info.png" alt="info" align="middle" name="info" border="0" /></a>
          <input name="moduleclass_sfx" type="text" value="<?php echo $moduleclass_sfx; ?>" style="width:195px;" /></td>
        </tr><tr>
          <td colspan="2" class="swmenu_tabheading"> <div align="center"><?php echo _SW_AUTO_ITEM_LABEL; ?></div></td>
        </tr><tr class="swmenu_menubackgr">
          <td valign="top"><?php echo _SW_HYBRID_MENU; ?>:</td>
          <td><a href="javascript:void(0);" onmouseover="return escape('<?php echo _SW_HYBRID_MENU_TIP; ?>')" >
	      <img src="components/com_swmenupro/images/info.png" alt="info" align="middle" name="info" border="0" /></a>
          <?php echo $lists['hybrid']; ?> </td>
        </tr><tr>
          <td valign="top"><?php echo _SW_TABLES_BLOGS; ?>:</td>
          <td><a href="javascript:void(0);" onmouseover="return escape('<?php echo _SW_TABLES_BLOGS_TIP; ?>')" >
	      <img src="components/com_swmenupro/images/info.png" alt="info" align="middle" name="info" border="0" /></a>
          <?php echo $lists['tables']; ?> </td>
        </tr><tr>
          <td colspan="2" class="swmenu_tabheading"> <div align="center"><?php echo _SW_CACHE_LABEL; ?></div></td>
        </tr><tr class="swmenu_menubackgr">
          <td valign="top"><?php echo _SW_CACHE_ITEMS; ?>:</td>
          <td><a href="javascript:void(0);" onmouseover="return escape('<?php echo _SW_CACHE_ITEMS_TIP; ?>')" >
	      <img src="components/com_swmenupro/images/info.png" alt="info" align="middle" name="info" border="0" /></a>
          <?php echo $lists['cache']; ?> </td>
        </tr><tr>
          <td valign="top"><?php echo _SW_CACHE_REFRESH; ?>:</td>
          <td><a href="javascript:void(0);" onmouseover="return escape('<?php echo _SW_CACHE_REFRESH_TIP; ?>')" >
	      <img src="components/com_swmenupro/images/info.png" alt="info" align="middle" name="info" border="0" /></a>
          <?php echo $lists['cache_time']; ?> </td>
        </tr>       
      </table></td>
      <td valign="top"> 
      <table width="360" style="border:0px solid #cccccc;" >
       <tr>
         <td colspan="2" class="swmenu_tabheading"> <div align="center"><?php echo _SW_GENERAL_LABEL; ?></div></td>
       </tr><tr class="swmenu_menubackgr">
          <td  align="left"><?php echo _SW_SHOW_NAME; ?>:</td>
          <td><a href="javascript:void(0);" onmouseover="return escape('<?php echo _SW_SHOW_NAME_TIP; ?>')" >
	      <img src="components/com_swmenupro/images/info.png" alt="info" align="middle" name="info" border="0" /></a>
          <?php echo $lists['showtitle']; ?> </td>
        </tr><tr>
          <td valign="top"><?php echo _SW_PUBLISHED; ?>:</td>
          <td><a href="javascript:void(0);" onmouseover="return escape('<?php echo _SW_PUBLISHED_TIP; ?>')" >
	      <img src="components/com_swmenupro/images/info.png" alt="info" align="middle" name="info" border="0" /></a>
          <?php echo $lists['published']; ?> </td>
        </tr><tr class="swmenu_menubackgr">
          <td valign="top"><?php echo _SW_ACTIVE_MENU; ?>:</td>
          <td><a href="javascript:void(0);" onmouseover="return escape('<?php echo _SW_ACTIVE_MENU_TIP; ?>')" >
	      <img src="components/com_swmenupro/images/info.png" alt="info" align="middle" name="info" border="0" /></a>
          <?php echo $lists['active_menu']; ?> </td>
        </tr><tr>
          <td><?php echo _SW_MAX_LEVELS; ?>:</td><td>
          <a href="javascript:void(0);" onmouseover="return escape('<?php echo _SW_MAX_LEVELS_TIP; ?>')" >
	      <img src="components/com_swmenupro/images/info.png" alt="info" align="middle" name="info" border="0" /></a>
          <?php echo $lists['levels']; ?> </td>
        </tr><tr class="swmenu_menubackgr">
          <td><?php echo _SW_PARENT_LEVEL; ?>:</td>
          <td><a href="javascript:void(0);" onmouseover="return escape('<?php echo _SW_PARENT_LEVEL_TIP; ?>')" >
	      <img src="components/com_swmenupro/images/info.png" alt="info" align="middle" name="info" border="0" /></a>
          <?php echo $lists['parent_level']; ?> </td>
        </tr>
        <tr>
          <td valign="top"><?php echo _SW_SUB_WRAP; ?>:</td>
          <td><a href="javascript:void(0);" onmouseover="return escape('<?php echo _SW_SUB_WRAP_TIP; ?>')" >
	      <img src="components/com_swmenupro/images/info.png" alt="info" align="middle" name="info" border="0" /></a>
          <?php echo $lists['padding_hack']; ?> </td>
        </tr><tr class="swmenu_menubackgr">
          <td valign="top"><?php echo _SW_AUTO_DYN_SUB; ?>:</td>
          <td><a href="javascript:void(0);" onmouseover="return escape('<?php echo _SW_AUTO_DYN_SUB_TIP; ?>')" >
	      <img src="components/com_swmenupro/images/info.png" alt="info" align="middle" name="info" border="0" /></a>
          <?php echo $lists['auto_position']; ?> </td>
        </tr><tr>
          <td colspan="2" class="swmenu_tabheading"> <div align="center"><?php echo _SW_POSITION_ACCESS_LABEL; ?></div></td>
        </tr><tr class="swmenu_menubackgr">
          <td valign="top" align="left"><?php echo _SW_MODULE_POSITION; ?>:</td>
          <td><a href="javascript:void(0);" onmouseover="return escape('<?php echo _SW_MODULE_POSITION_TIP; ?>')" >
	      <img src="components/com_swmenupro/images/info.png" alt="info" align="middle" name="info" border="0" /></a>
          <?php echo $lists['module_position']; ?> </td>
        </tr><tr>
         <td valign="top" align="left"><?php echo _SW_MODULE_ORDER; ?>:</td>
         <td><a href="javascript:void(0);" onmouseover="return escape('<?php echo _SW_MODULE_ORDER_TIP; ?>')" >
	     <img src="components/com_swmenupro/images/info.png" alt="info" align="middle" name="info" border="0" /></a>
         <script language="javascript" type="text/javascript">
		<!--
		writeDynaList( 'class="inputbox" id="ordering" name="ordering" size="1" style="width:200px"',orders, originalPos, originalPos, originalOrder );
		//-->
		</script> </td>
       </tr><tr class="swmenu_menubackgr">
         <td valign="top" align="left"><?php echo _SW_ACCESS_LEVEL; ?>:</td>
         <td><a href="javascript:void(0);" onmouseover="return escape('<?php echo _SW_ACCESS_LEVEL_TIP; ?>')" >
	     <img src="components/com_swmenupro/images/info.png" alt="info" align="middle" name="info" border="0" /></a>
         <?php echo $lists['access']; ?> </td>
       </tr>    
      </table></td>
  </tr><tr>
     <td colspan="2" class="swmenu_tabheading"> <div align="center"><?php echo _SW_PAGES_LABEL; ?></div></td>
     <tr><td colspan="2">
       <table cellpadding="0" cellspacing="3">
          <tr class="swmenu_menubackgr">
          <td><?php echo _SW_PAGES_TIP; ?><br /><?php echo $lists['selections']; ?> </td>
          <td valign="top">
            <table cellpadding="0" cellspacing="0" >
              <tr><td class="swmenu_tabheading"><?php echo _SW_CONDITIONS_LABEL; ?>
              </td></tr><tr><td>
              <a href="javascript:void(0);" onmouseover="return escape('<?php echo _SW_TEMPLATE_TIP; ?>')" >
	          <img src="components/com_swmenupro/images/info.png" alt="info" align="middle" name="info" border="0" /></a>&nbsp;<?php echo _SW_TEMPLATE; ?>:
              <?php echo $lists['templates']; ?> 
              </td></tr><tr><td>
              <a href="javascript:void(0);" onmouseover="return escape('<?php echo _SW_LANGUAGE_TIP; ?>')" >
	          <img src="components/com_swmenupro/images/info.png" alt="info" align="middle" name="info" border="0" /></a>&nbsp;<?php echo _SW_LANGUAGE; ?>:
              <?php echo $lists['languages']; ?> 
              </td></tr><tr><td>
              <a href="javascript:void(0);" onmouseover="return escape('<?php echo _SW_COMPONENT_TIP; ?>')" >
	          <img src="components/com_swmenupro/images/info.png" alt="info" align="middle" name="info" border="0" /></a>&nbsp;<?php echo _SW_COMPONENT; ?>:   
              <?php echo $lists['components']; ?> </td>
              </tr>
           </table></td></tr>
      </table></td></tr>
</table>
</div>
  
  
<div id="page7" class="pagetext">
<div id="images_message"></div>
<div id="images_window">
<?php
HTML_swmenupro::imageConfig3( $ordered,$row2,$lists);
?>
</div>
</div>

<input type="hidden" id="main_padding" name="main_padding" value="<?PHP echo $rows->main_padding; ?>" />
<input type="hidden" id="sub_padding" name="sub_padding" value="<?PHP echo $rows->sub_padding; ?>" />
<input type="hidden" id="main_border" name="main_border" value="<?PHP echo $rows->main_border; ?>" />
<input type="hidden" id="sub_border" name="sub_border" value="<?PHP echo $rows->sub_border; ?>" />
<input type="hidden" id="main_border_over" name="main_border_over" value="<?PHP echo $rows->main_border_over; ?>" />
<input type="hidden" id="sub_border_over" name="sub_border_over" value="<?PHP echo $rows->sub_border_over; ?>" />
<input type="hidden" name="option" value="com_swmenupro" />
<input type="hidden" name="moduleID" value="<?PHP echo $row2->id; ?>" />
<input type="hidden" name="cid[]" value="<?PHP echo $row2->id; ?>" />
<input type="hidden" name="export2" id="export2" value="0" />
<input type="hidden" name="menustyle" value="dynamictabmenu" />
<input type="hidden" name="task" value="editdhtmlMenu" />
<input type="hidden" name="boxchecked" value="0" />
<input type="hidden" name="id" value="<?php echo $row2->id; ?>"> 
<input type="hidden" name="limit" value="<?PHP echo $pageNav->limit; ?>" />
<input type="hidden" name="limitstart" value="<?PHP echo $pageNav->limitstart; ?>" />
<input type="hidden" name="returntask" value="showmodules" />
</form>
</div>

<script language="JavaScript" type="text/javascript" src="components/com_swmenupro/js/wz_tooltip.js"></script>       
<script language="javascript" type="text/javascript">
<!--
dhtml.onTabStyle='swmenu_ontab';
dhtml.offTabStyle='swmenu_offtab';
dhtml.cycleTab('tab6');
-->
</script> 
<?php
}
?>
