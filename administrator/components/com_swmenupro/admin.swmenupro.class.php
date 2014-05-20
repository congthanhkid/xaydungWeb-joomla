<?php

class swmenuproMenu extends  JTable
{
var $id = null;
var $main_top= 0;
var $main_left= 0;
var $main_height= 25;
var $main_width= 130;
var $sub_width= 150;
var $main_back= "#2F82CC";
var $main_over= "#6BA6DE";
var $sub_back= "#FFF2AB";
var $sub_over= "#FFFFCC";
var $sub_border= "1px solid #124170";
var $main_font_color= "#FFF2AB";
var $main_font_size= 12;
var $sub_font_color= "#E18246";
var $sub_font_size= 12;
var $main_border= "1px solid #124170";
var $sub_border_over= "1px solid #124170";
var $main_font_color_over= "#FFFFFF";
var $main_border_over= "1px solid #124170";
var $sub_align= "left";
var $main_align= "left";
var $sub_height= 25;
var $sub_font_color_over= "#FF9900";
var $position= "relative";
var $orientation= "vertical";
var $font_family= "Arial";
var $sub_font_family= "Arial";
var $font_weight= "bold";
var $font_weight_over= "bold";
var $level1_sub_top= 0;
var $level1_sub_left= 125;
var $level2_sub_top= 0;
var $level2_sub_left= 145;
var $main_back_image= null;
var $main_back_image_over = null;
var $sub_back_image= null;
var $sub_back_image_over= null;
var $specialA= 85;
var $specialB= 50;
var $sub_padding= "2px 0px 0px 10px";
var $main_padding= "2px 0px 0px 10px";
var $extra = null;


function swmenuproMenu( &$db ) 
        {
              parent::__construct('#__swmenu_config', 'id', $db);
        }

 function treemenu() 
        {
           
           $this->set('main_back_image', "modules/mod_swmenupro/images/tree_icons/base.gif");
		   $this->set('main_back_image_over', "modules/mod_swmenupro/images/tree_icons/folder.gif");
		   $this->set('sub_back_image', "modules/mod_swmenupro/images/tree_icons/folderopen.gif");
		   $this->set('sub_back_image_over', "modules/mod_swmenupro/images/tree_icons/page.gif");
		   $this->set('main_back', "#FFFFFF");
		   $this->set('main_over',  "#CCC");
		   $this->set('main_width', 170);
		   $this->set('level1_sub_top', 1);
		   $this->set('level2_sub_left', 1);
		   $this->set('level1_sub_left', 0);
		   $this->set('main_padding', "2px 2px 2px 2px");
		   $this->set('sub_padding', "2px 2px 2px 2px");
		   $this->set('main_font_color_over', "#666");
		    $this->set('main_font_color', "#E17200");
           return true;
        }

 function tabmenu() 
        {
           $this->set('position', "left");
		    $this->set('main_top', 19);
		   $this->set('main_left',  8);
		    $this->set('sub_border', "1px solid #CCC");
		   $this->set('sub_border_over',  "1px dashed #CCC");
		   $this->set('main_border', "1px solid #CCC");
		   $this->set('main_border_over',  "1px solid #FFFFFF");
		    $this->set('sub_back', "#FFFFFF");
		   $this->set('sub_over',  "#E8EBF0");
    
		   $this->set('main_back', "#E8EBF0");
		   $this->set('main_over',  "#FFFFFF");
		   $this->set('main_width', 0);
		    $this->set('sub_width', 0);
			$this->set('main_height', 25);
		    $this->set('sub_height', 20);
		   $this->set('level2_sub_top', 0);
		   $this->set('level1_sub_top', 5);
		   $this->set('level2_sub_left', 5);
		   $this->set('level1_sub_left', 5);
		   $this->set('main_padding', "2px 10px 2px 10px");
		   $this->set('sub_padding', "2px 5px 2px 5px");
		   $this->set('main_font_color_over', "#000000");
		    $this->set('main_font_color', "#666");
			 $this->set('sub_font_color_over', "#000000");
		    $this->set('sub_font_color', "#666");
			 $this->set('font_weight_over', "normal");
           return true;
        }
function slideclickmenu() 
	{
		   
		   $this->set('main_width', 130);
		   $this->set('sub_width', 130);
		    $this->set('main_height', 0);
		   $this->set('sub_height', 0);
           $this->set('sub_align', "left");
		   $this->set('main_align', "left");
		   $this->set('level1_sub_left', 0);
		   $this->set('level1_sub_top', 0);
		    $this->set('level2_sub_left', 0);
		   $this->set('level2_sub_top', 0);
		   $this->set('sub_padding', "5px 5px 5px 5px");
           $this->set('main_padding', "5px 5px 5px 5px");
           $this->set('sub_border_over', "0px solid #FFFFFF");
            $this->set('main_border_over', "0px solid #FFFFFF");
            $this->set('sub_border', "0px solid #FFF2AB");
            $this->set('main_border', "0px solid #2F82CC");
           return true;
        }

function clickmenu() 
	{
		   
		   $this->set('main_width', 130);
		   $this->set('sub_width', 130);
           $this->set('sub_align', "center");
		   $this->set('main_align', "center");
		   $this->set('level1_sub_left', 0);
		   $this->set('level1_sub_top', 0);
		   $this->set('sub_padding', "5px 5px 5px 5px");
           $this->set('main_padding', "5px 5px 5px 5px");
           $this->set('sub_border_over', "1px solid #FFFFFF");
            $this->set('main_border_over', "1px solid #FFFFFF");
            $this->set('sub_border', "1px solid #FFF2AB");
            $this->set('main_border', "1px solid #2F82CC");
           return true;
        }

function gosumenu() 
	{

		   $this->set('main_width', 0);
		   $this->set('sub_width', 0);
		    $this->set('main_height', 0);
		   $this->set('sub_height', 0);
		   $this->set('level1_sub_left', 0);
		   $this->set('level1_sub_top', -1);
		    $this->set('level2_sub_left', -1);
		   $this->set('level2_sub_top', 0);
		    $this->set('main_padding', "5px 5px 5px 5px");
		   $this->set('sub_padding', "5px 5px 5px 5px");
		    $this->set('position', "left");
            $this->set('sub_border', "0px solid #FFFFFF");
            $this->set('main_border', "0px solid #FFFFFF");

           return true;
        }



}






class swmenuproImages extends JTable
{
var $ext_id = null;
var $menu_id = 1;
var $image = null;
var $image_over = null;
var $moduleID = 1;
var $show_name = 1;
var $normal_css = null;
var $over_css = null;
var $show_item = 1;
var $extra = null;


function swmenuproImages( &$db ) 
        {
			 parent::__construct('#__swmenu_extended', 'ext_id', $db);
        	//$this->mosDBTable( '#__swmenu_extended', 'ext_id', $db );
        }

}
?>
