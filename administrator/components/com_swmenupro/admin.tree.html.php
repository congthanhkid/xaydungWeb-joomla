<?PHP

function treeMenuConfig( $rows,$row2, $menutype,$pageNav, $mainpadding, $subpadding, $mainborder, $subborder, $mainborderover, $subborderover, $modulename, $ordered, $parent_id,$orders2, $lists,$orders3,$moduleclass_sfx)
{
	global $mainframe;
	$mosConfig_absolute_path=JPATH_ROOT;
   $absolute_path=$mainframe->getCfg( 'absolute_path' );
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
     <td valign="bottom"><span class="swmenu_sectionname"><?php echo _SW_TREE_MENU." "._SW_MODULE_EDITOR; ?></span> </td>
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
   	<td id="tab1" class="swmenu_offtab" onclick="dhtml.cycleTab(this.id)"><?php echo _SW_TREE_SIZE_TAB; ?></td>
    <td id="tab2" class="swmenu_offtab" onclick="dhtml.cycleTab(this.id)"><?php echo _SW_COLOR_BACKGROUNDS_TAB; ?></td>
    <td id="tab3" class="swmenu_offtab" onclick="dhtml.cycleTab(this.id)"><?php echo _SW_FONTS_PADDING_TAB; ?></td>  
    <td id="tab7" class="swmenu_offtab" onclick="dhtml.cycleTab(this.id);doImagesWindow();"><?php echo _SW_IMAGES_CSS_TAB; ?></td>
    <td width="17%">&nbsp;</td>
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
              <td valign="top"> <table width="360" height="320" style="border:0px solid #cccccc;" >
				  <tr> 
                    <td colspan="2" class="swmenu_tabheading"><div align="center"><?php echo _SW_TREE_WIDTH_LABEL; ?></div></td> 
                  </tr><tr class="swmenu_menubackgr"> 
                    <td width="260"><?php echo _SW_WIDTH; ?>:<i><?php echo _SW_AUTOSIZE; ?></i></td>
                    <td width="100" class="adminlist" align="right"> <div align="right"> 
                    <input type="text" size="8" id="main_width" name="main_width" value="<?php echo $rows->main_width;?>" />px</div></td> 
                  </tr><tr> 
                    <td colspan="2" class="swmenu_tabheading"> <div align="center"><?php echo _SW_OTHER_SETTINGS_LABEL; ?></div></td> 
                  </tr><tr class="swmenu_menubackgr"> 
                    <td><?php echo _SW_FOLDER_LINKS; ?></td> 
                    <td width="120" class="adminlist"> <div align="right">
                    <select name="level1_sub_left" id="level1_sub_left">
                    <option <?php if ($rows->level1_sub_left == '1') {echo 'selected';} ?> value="1"><?php echo _SW_YES; ?></option>
                    <option <?php if ($rows->level1_sub_left == '0') {echo 'selected';} ?> value="0"><?php echo _SW_NO; ?></option>
                    </select></div></td>
                  </tr><tr> 
                    <td><?php echo _SW_USE_LINES; ?></td> 
                    <td width="120" class="adminlist"> <div align="right">
                    <select name="level2_sub_left" id="level2_sub_left">
                    <option <?php if ($rows->level2_sub_left == '1') {echo 'selected';} ?> value="1"><?php echo _SW_YES; ?></option>
                    <option <?php if ($rows->level2_sub_left == '0') {echo 'selected';} ?> value="0"><?php echo _SW_NO; ?></option>
                    </select></div></td>
                  </tr><tr> 
                    <td><?php echo _SW_USE_ICONS; ?></td> 
                    <td width="120" class="adminlist"> <div align="right">
                    <select name="level1_sub_top" id="level1_sub_top">
                    <option <?php if ($rows->level1_sub_top == '1') {echo 'selected';} ?> value="1"><?php echo _SW_YES; ?></option>
                    <option <?php if ($rows->level1_sub_top == '0') {echo 'selected';} ?> value="0"><?php echo _SW_NO; ?></option>
                    </select></div></td>
                  </tr><tr> 
                    <td colspan="2" class="swmenu_tabheading"><div align="center"><?php echo _SW_COMPLETE_PADDING_LABEL; ?></div></td> 
                  </tr><tr> 
                    <td colspan="2" class="adminlist" align="center"> 
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
                </table></td> 
                  </tr><tr> 
                    <td colspan="2" class="swmenu_tabheading"><div align="center"><?php echo _SW_OUTSIDE_BORDER; ?></div></td> 
                  </tr><tr class="swmenu_menubackgr">
                   <td><?php echo _SW_OUTSIDE_BORDER." "._SW_STYLE; ?>:</td>
                   <td width="120"><div align="right"><?php echo $lists['main_border_style']; ?></div></td>
                 </tr><tr> 
                    <td><?php echo _SW_OUTSIDE_BORDER." "._SW_WIDTH; ?>:</td> 
                    <td width="100" class="adminlist"> <div align="right"> 
                    <input id="main_border_width" onChange="doMainBorder();" name="main_border_width" type="text" value="<?php echo $mainborder[0]; ?>" size="8"/>px</div></td> 
                  </tr>
                </table></td> 
                 <td valign="top"> <table width="360" height="320" style="border:0px solid #cccccc;">
                 <tr><td>
				<img src="components/com_swmenupro/images/treemenu_dimensions.png" width="297" height="264" border="0" hspace="0" vspace="0"/>
				</td></tr>
                </table></td> 
            </tr> 
          </table> 
          
</div>



<div id="page2" class="pagetext">

<table width="750">
            <tr><td valign="top">
              <table width="360"  height="325" style="border:0px solid #cccccc;" >
                <tr> 
                  <td colspan="3" class="swmenu_tabheading"> <div align="center"><?php echo _SW_ICONS_LABEL; ?></div></td> 
                </tr> 
                <tr class="swmenu_menubackgr" > 
                  <td colspan="2" width="300"><?php echo _SW_ICON_TOP; ?>:</td> 
                  <td align="right"><img id="main_back_image" src="../<?php echo $rows->main_back_image;?>" align="left"/>
                    <input type="button" name="getimage" value="<?php echo _SW_GET; ?>" onclick="ImageSelector.select('main_back_image');"/>
                    <input type="hidden" id="main_back_imagehidden" name="main_back_image" value="<?php echo $rows->main_back_image;?>"/> </td>
                </tr> 
                <tr>
                  <td colspan="2"><?php echo _SW_ICON_FOLDER; ?>:</td> 
                  <td align="right"><img id="main_back_image_over" src="../<?php echo $rows->main_back_image_over;?>" align="left"/>
                    <input type="button" name="getimage" value="<?php echo _SW_GET; ?>" onclick="ImageSelector.select('main_back_image_over');"/>
                    <input type="hidden" id="main_back_image_overhidden" name="main_back_image_over" value="<?php echo $rows->main_back_image_over;?>"/> </td>
                <tr class="swmenu_menubackgr"> 
                  <td colspan="2">F<?php echo _SW_ICON_FOLDER_OPEN; ?>:</td> 
                  <td align="right"><img id="sub_back_image" src="../<?php echo $rows->sub_back_image;?>" align="left"/>
                    <input type="button" name="getimage" value="<?php echo _SW_GET; ?>" onclick="ImageSelector.select('sub_back_image');"/>
                    <input type="hidden" id="sub_back_imagehidden" name="sub_back_image" value="<?php echo $rows->sub_back_image;?>"/> </td>
                </tr><tr> 
                  <td colspan="2"><?php echo _SW_ICON_DOCUMENT; ?>:</td> 
                 <td align="right"><img id="sub_back_image_over" src="../<?php echo $rows->sub_back_image_over;?>" align="left"/>
                    <input type="button" name="getimage" value="<?php echo _SW_GET; ?>" onclick="ImageSelector.select('sub_back_image_over');"/>
                    <input type="hidden" id="sub_back_image_overhidden" name="sub_back_image_over" value="<?php echo $rows->sub_back_image_over;?>"/> </td>
                </tr><tr> 
                  <td colspan="3" class="swmenu_tabheading"> <div align="center"><?php echo _SW_BACKGROUND_COLOR_LABEL; ?></div></td> 
                </tr> 
                <tr class="swmenu_menubackgr" > 
                  <td><?php echo _SW_BACKGROUND." "._SW_COLOR; ?>:</td> 
                  <td > 
                  <table id="main_back_box" style="border: 1px solid #000000; width:20px; height:20px" bgColor='<?php echo $rows->main_back;?>' >
                    <tr> 
                      <td width="20" height="20">&nbsp;</td>
                    </tr>                     
                  </table> 
                </td> 
                 <td width="120" class="adminlist" > <div align="right"> 
                      <input type="text" onChange="checkColorSyntax('Main Menu Color','main_back','<?php echo $rows->main_back;?>');" size="8"  id="main_back" name = "main_back" value = "<?php echo $rows->main_back;?>"/>
                      <a onMouseOver="this.style.cursor='pointer'" onClick="copyColor('main_back');" > <img src="components/com_swmenupro/images/sel.gif"/><?php echo _SW_GET; ?></a> </div></td>
                </tr><tr> 
                  <td><?php echo _SW_OVER_COLOR; ?>:</td> 
                  <td> 
                   <table id="main_over_box" style="border: 1px solid #000000; width:20px; height:20px" bgColor='<?php echo $rows->main_over;?>'>
                     <tr> 
                       <td width="20" height="20">&nbsp;</td>
                     </tr> 
                   </table> 
                </td> 
                 <td width="120" class="adminlist"> <div align="right"> 
                      <input type="text" onChange="checkColorSyntax('Top Menu Over Color','main_over','<?php echo $rows->main_over;?>');" size="8"  id = "main_over" name = "main_over" value = "<?php echo $rows->main_over;?>"/>
                      <a onMouseOver="this.style.cursor='pointer'" onClick="copyColor('main_over');"><img src="components/com_swmenupro/images/sel.gif"/><?php echo _SW_GET; ?></a> </div></td>
                </tr><tr class="swmenu_menubackgr"> 
                  <td><?php echo _SW_OUTSIDE_BORDER_COLOR; ?>:</td> 
                  <td > 
                  <table id="main_border_color_box" style="border: 1px solid #000000; width:20px; height:20px" bgColor='<?php echo $mainborder[2];?>'>
                    <tr> 
                       <td width="20" height="20">&nbsp;</td>
                    </tr>                   
                  </table> 
                  </td> 
                  <td width="120" class="adminlist"> <div align="right"> 
                      <input  name = "main_border_color" onChange="checkColorSyntax('Top Menu Border Color','main_border_color','<?php echo $mainborder[2];?>'); doMainBorder();" type="text" id="main_border_color" value = "<?php echo $mainborder[2];?>" size="8"/>
                      <a onMouseOver="this.style.cursor='pointer'" onClick="copyColor('main_border_color');"><img src="components/com_swmenupro/images/sel.gif"/><?php echo _SW_GET; ?></a></div></td>
                </tr><tr> 
                  <td colspan="3" class="swmenu_tabheading"> <div align="center"><?php echo _SW_FONT_COLOR_LABEL; ?> </div> 
                </tr> 
                <tr class="swmenu_menubackgr"> 
                  <td><?php echo _SW_FONT; ?>:</td> 
                  <td> 
                  <table id="main_font_color_box" style="border: 1px solid #000000; width:20px; height:20px" bgColor='<?php echo $rows->main_font_color;?>'>
                    <tr> 
                     <td width="20" height="20">&nbsp;</td>
                    </tr> 
                   </table> 
                </td> 
                 <td width="120" class="adminlist"> <div align="right"> 
                      <input  name = "main_font_color" onChange="checkColorSyntax('Top Menu Font Color','main_font_color','<?php echo $rows->main_font_color;?>');" type="text" id="main_font_color" value = "<?php echo $rows->main_font_color;?>" size="8"/>
                      <a onMouseOver="this.style.cursor='pointer'" onClick="copyColor('main_font_color');"><img src="components/com_swmenupro/images/sel.gif"/><?php echo _SW_GET; ?></a></div></td>
                </tr> <tr> 
                  <td><?php echo _SW_OVER_FONT; ?>:</td> 
                  <td> 
                   <table id="main_font_color_over_box" style="border: 1px solid #000000; width:20px; height:20px" bgColor='<?php echo $rows->main_font_color_over;?>'>
                     <tr> 
                       <td width="20" height="20">&nbsp;</td>
                     </tr>                      
                   </table> 
                  </td> 
                   <td width="120" class="adminlist"> <div align="right"> 
                       <input name = "main_font_color_over" onChange="checkColorSyntax('Top Menu Over Font Color','main_font_color_over','<?php echo $rows->main_font_color_over;?>');" type="text" id="main_font_color_over" value = "<?php echo $rows->main_font_color_over;?>" size="8"/>
                       <a onMouseOver="this.style.cursor='pointer'" onClick="copyColor('main_font_color_over');"><img src="components/com_swmenupro/images/sel.gif"/><?php echo _SW_GET; ?></a></div></td>
                </tr>
              </table> 
              </td> 
              <td valign="top"> 
             <table width="360" cellspacing="0" cellpadding="0"  valign="top">
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
     </table>
              </td> 
            </tr>
          </table>
</div>


<div id="page3" class="pagetext">
 <table width="750">
            <tr>
              <td valign="top"> 
              <table style="border:0px solid #cccccc;" width="360"  height="210" >
                  <tr>
                    <td colspan="2" class="swmenu_tabheading"> <div align="center"><?php echo _SW_FONT_FAMILY_LABEL; ?></div></td>
                  </tr><tr class="swmenu_menubackgr"> 
                      <td colspan="2" width="250" align="center"><?php echo $lists['font_family']; ?></td> 
                  </tr><tr> 
                  <td colspan="2" class="swmenu_tabheading"> <div align="center"><?php echo _SW_FONT_SIZE_LABEL; ?></div></td> 
                </tr><tr class="swmenu_menubackgr"> 
                  <td width="300"><?php echo _SW_FONT_SIZE; ?>:</td> 
                  <td width="100" class="adminlist"> <div align="right"> 
                  <input id = "main_font_size" name="main_font_size" type="text"  value="<?php echo $rows->main_font_size;?>" size="8"/>px</div></td> 
                </tr><tr>
              <td colspan="2" class="swmenu_tabheading"><div align="center"><?php echo _SW_FONT_WEIGHT_LABEL; ?></div></td>
            </tr><tr class="swmenu_menubackgr">
              <td><?php echo _SW_TOP_MENU." "._SW_FONT_WEIGHT; ?>:</td>
              <td width="100"><div align="right"><?php echo $lists['font_weight']; ?></div></td>
            </tr><tr>
              <td><?php echo _SW_SUB_MENU." "._SW_FONT_WEIGHT; ?>:</td>
              <td width="100"><div align="right"><?php echo $lists['font_weight_over']; ?></div></td>
            </tr><tr> 
               <td colspan="2" class="swmenu_tabheading"><div align="center"><?php echo _SW_PADDING_LABEL; ?></div></td> 
            </tr><tr> 
                <td colspan="2" class="adminlist" align="center">
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
                </table></td> 
                  </tr> 
                </table></td> 
              <td valign="top">
             <table width="360" cellspacing="0" cellpadding="5">
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
		  </td></tr>	
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
        </tr>
        <tr>
          <td valign="top"><?php echo _SW_TREE_COOKIE; ?>:</td>
          <td><a href="javascript:void(0);" onmouseover="return escape('<?php echo _SW_TREE_COOKIE_TIP; ?>')" >
	      <img src="components/com_swmenupro/images/info.png" alt="info" align="middle" name="info" border="0" /></a>
          <?php echo $lists['auto_position']; ?> </td>
        </tr><tr class="swmenu_menubackgr">
          <td><?php echo _SW_MAX_LEVELS; ?>:</td><td>
          <a href="javascript:void(0);" onmouseover="return escape('<?php echo _SW_MAX_LEVELS_TIP; ?>')" >
	      <img src="components/com_swmenupro/images/info.png" alt="info" align="middle" name="info" border="0" /></a>
          <?php echo $lists['levels']; ?> </td>
        </tr><tr>
          <td><?php echo _SW_PARENT_LEVEL; ?>:</td>
          <td><a href="javascript:void(0);" onmouseover="return escape('<?php echo _SW_PARENT_LEVEL_TIP; ?>')" >
	      <img src="components/com_swmenupro/images/info.png" alt="info" align="middle" name="info" border="0" /></a>
          <?php echo $lists['parent_level']; ?> </td>
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
<input type="hidden" name="menustyle" value="treemenu" />
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
