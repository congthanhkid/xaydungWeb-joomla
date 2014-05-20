function getOffsets (evt) {
  var target = evt.target;
  if (typeof target.offsetLeft == 'undefined') {
    target = target.parentNode;
  }
  var pageCoords = getPageCoords(target);
  var eventCoords = {
    x: window.pageXOffset + evt.clientX,
    y: window.pageYOffset + evt.clientY
  };
  var offsets = {
    offsetX: eventCoords.x - pageCoords.x,
    offsetY: eventCoords.y - pageCoords.y
  };
  return offsets;
}

function getPageCoords (element) {
  var coords = {x : 0, y : 0};
  while (element) {
    coords.x += element.offsetLeft;
    coords.y += element.offsetTop;
    element = element.offsetParent;
  }
  return coords;
}


var pcol="#a0a0a0";
var qtr=new Array();
var rd=new Array();
rd[0]=new Array(0,1,0);
rd[1]=new Array(-1,0,0);
rd[2]=new Array(0,0,1);
rd[3]=new Array(0,-1,0);
rd[4]=new Array(1,0,0);
rd[5]=new Array(0,0,-1);
rd[6]=new Array(255,1,1);


function reLod(){
  qtr[0]=-180;
  qtr[1]=360;
  qtr[2]=180;
  qtr[3]=0;
}


//populate color radians
var col=new Array(360);
for (i=0;i< 6;i++){
   for (j=0;j<60;j++){
      col[60*i+j]=new Array(3);
      for (k=0;k<3;k++){
        col[60*i+j][k]=rd[6][k];
        rd[6][k]+=(rd[i][k]*4);
      }
   }
}


function xyOff(evt) {
  if (typeof evt.offsetX == 'undefined') {
    var evtOffsets = getOffsets(evt);
    ox = evtOffsets.offsetX;
    oy = evtOffsets.offsetY;
  } else {
    ox = evt.offsetX;
    oy = evt.offsetY;
  }
  ox = 4*ox;
  oy = 4*oy;
  reLod();
  nr=0;
  oxm=ox-512;
  oym=oy-512;
  oxflg=(oxm<0?0:1);
  oyflg=(oym<0?0:1);
  qsel=2*oxflg+oyflg;
  absx=Math.abs(oxm);
  absy=Math.abs(oym);
  deg=absx*45/absy;
  if (absx>absy) {
     deg=90-(absy*45/absx);
  }
  deg1=Math.floor(Math.abs(qtr[qsel]-deg));
  oxm=Math.abs(ox-512);
  oym=Math.abs(oy-512);
  rd1=Math.sqrt(Math.pow(oym,2)+Math.pow(oxm,2));
  if (oy==512&&ox==512) {
     pcol='000000';
  } else {
     for (i=0;i<3;i++){
         rd2=col[deg1][i]*rd1/256;
         if (rd1>256){
            rd2+=Math.floor(rd1-256);
         }
         if (rd2>255){
            rd2=255;
         }
         nr=256*nr+Math.floor(rd2);
     }
     pcol=nr.toString(16);
     while (pcol.length<6) {
        pcol='0'+pcol;
     }
  }
  pcol='#'+pcol.toUpperCase();

  if (document.getElementById){
     document.getElementById('CPCP_ColorCurrent').style.backgroundColor=pcol;
     document.getElementById('CPCP_ColorSelected').innerHTML=pcol;
  }
  if (document.layers) {
     document.layers['CPCP_Wheel'].document.forms[0].elements[0].value=pcol;
     document.layers['CPCP_ColorSelected'].bgColor=pcol;
  }
  return false;
}


function wrtVal(){
  if (document.getElementById) {
     document.getElementById('CPCP_Input').style.background = pcol;
     document.getElementById('CPCP_Input_RGB').value = pcol;
     document.getElementById('CPCP_Input_RGB').select();
  }
  if (document.layers) {
     document.layers['CPCP_Input'].bgColor=pcol;
     document.layers['CPCP_Input_RGB'].value=pcol;
     document.layers['CPCP_Input_RGB'].select();
  }
}

function checkNumberSyntax(temp_name,temp_box,temp_minimum,temp_maximum,temp_default){
var temp_x = document.getElementById(temp_box);
var temp_message;
  if(!IsNumeric(temp_x.value)||(temp_x.value=="")||(temp_x.value > temp_maximum)||(temp_x.value < temp_minimum)){

alert("You need to input a valid number for "+temp_name+" between "+temp_minimum+" and "+temp_maximum);
  temp_x.value = temp_default;
  }
}


function IsNumeric(sText)
{
   var ValidChars = "0123456789-";
   var IsNumber=true;
   var Char;

 
   for (i = 0; i < sText.length && IsNumber == true; i++) 
      { 
      Char = sText.charAt(i); 
      if (ValidChars.indexOf(Char) == -1) 
         {
         IsNumber = false;
         }
      }
   return IsNumber;
   }



function trim(value) {
   var temp = value;
   var obj = /^(\s*)([\W\w]*)(\b\s*$)/;
   if (obj.test(temp)) { temp = temp.replace(obj, '$2'); }
   var obj = / /g;
   while (temp.match(obj)) { temp = temp.replace(obj, ""); }
   return temp;
}




function doMainPadding(){
var padtop = trim(document.getElementById('main_pad_top').value);
var padright = trim(document.getElementById('main_pad_right').value);
var padbottom = trim(document.getElementById('main_pad_bottom').value);
var padleft = trim(document.getElementById('main_pad_left').value);

document.getElementById('main_padding').value = padtop+'px '+padright+'px '+padbottom+'px '+padleft+'px ';
}

function doSubPadding(){

var padtop = trim(document.getElementById('sub_pad_top').value);
var padright = trim(document.getElementById('sub_pad_right').value);
var padbottom = trim(document.getElementById('sub_pad_bottom').value);
var padleft = trim(document.getElementById('sub_pad_left').value);

document.getElementById('sub_padding').value = padtop+'px '+padright+'px '+padbottom+'px '+padleft+'px ';
}


function doMainBorder(){
var mainwidth = trim(document.getElementById('main_border_width').value);
var mainstyle = trim(document.getElementById('main_border_style').value);
var maincolor = trim(document.getElementById('main_border_color').value);

document.getElementById('main_border').value = mainwidth+'px '+mainstyle+' '+maincolor;

var mainwidth = trim(document.getElementById('main_border_over_width').value);
var mainstyle = trim(document.getElementById('main_border_over_style').value);
var maincolor = trim(document.getElementById('main_border_color_over').value);

document.getElementById('main_border_over').value = mainwidth+'px '+mainstyle+' '+maincolor;
}

function doMainBorderTree(){
var mainwidth = trim(document.getElementById('main_border_width').value);
var mainstyle = trim(document.getElementById('main_border_style').value);
var maincolor = trim(document.getElementById('main_border_color').value);

document.getElementById('main_border').value = mainwidth+'px '+mainstyle+' '+maincolor;
}


function doSubBorder(){
var mainwidth = trim(document.getElementById('sub_border_width').value);
var mainstyle = trim(document.getElementById('sub_border_style').value);
var maincolor = trim(document.getElementById('sub_border_color').value);

document.getElementById('sub_border').value = mainwidth+'px '+mainstyle+' '+maincolor;

var mainwidth = trim(document.getElementById('sub_border_over_width').value);
var mainstyle = trim(document.getElementById('sub_border_over_style').value);
var maincolor = trim(document.getElementById('sub_border_color_over').value);

document.getElementById('sub_border_over').value = mainwidth+'px '+mainstyle+' '+maincolor;
}

function doTransSubBorder(){
var mainwidth = trim(document.getElementById('sub_border_width').value);
var mainstyle = trim(document.getElementById('sub_border_style').value);
var maincolor = trim(document.getElementById('sub_border_color').value);

document.getElementById('sub_border').value = mainwidth+'px '+mainstyle+' '+maincolor;

}

function checkColorSyntax(temp_name,temp_box,temp_default){
temp_x = document.getElementById(temp_box);
var validChar = '0123456789ABCDEF';
var temp_message;
var temp_error = 0; 

var re = new RegExp (' ', 'gi') ;


 temp_x.value = temp_x.value.replace(re, '') ;
 document.getElementById(temp_box + '_box').bgColor = temp_x.value;
 
}


function swapValue(temp_name, i){

var temp_x ;
var temp_y ;

  if (document.getElementById) {
     temp_x = document.getElementById(temp_name).value;
     if (temp_x == 1){
        document.getElementById(temp_name).value = 0;
        document.getElementById(temp_name+'image').src = 'images/publish_x.png';
        
  }else{
      document.getElementById(temp_name).value = 1;
      document.getElementById(temp_name+'image').src = 'images/tick.png';
    
  }
 
 // doPreview(i)
    
  }
}



function copyColor(temp_box){
var temp_x ;

  if (document.getElementById) {
     temp_x = document.getElementById('CPCP_Input_RGB').value;
     document.getElementById(temp_box).value = temp_x;
     document.getElementById(temp_box + '_box').bgColor = temp_x;
    
  }
}

function copyBackImage(temp_box){
var temp_x ;

  if (document.getElementById) {
     temp_x = document.getElementById(temp_box).value;
     document.getElementById(temp_box + '_box').background = temp_x;
      
  }
}





function changelevel() {
        document.adminForm.target="_self";
        document.adminForm.action="index.php";
        setTimeout('document.adminForm.submit()',200) ;
        }



function doSave() {
	
	if(document.adminForm.title.value==""){

		alert("Menu module needs a name.");

	}else if(document.adminForm.menutype.value==-999){

		alert("Menu module needs a valid menu source.");

	}else{
	  document.getElementById("php_out").value = tree.exportToSql().replace(/</g, "&lt;").replace(/>/g, "&gt;");
	document.adminForm.task.value="saveedit";
        document.adminForm.target="_self";
        document.adminForm.action="index.php";
        setTimeout('document.adminForm.submit()',200) ;
        }


}

function doApply() {
	
	if(document.adminForm.title.value==""){

		alert("Menu module needs a name.");

	}else if(document.adminForm.menutype.value==-999){

		alert("Menu module needs a valid menu source.");

	}else{
	 document.getElementById("php_out").value = tree.exportToSql().replace(/</g, "&lt;").replace(/>/g, "&gt;");
	document.adminForm.task.value="saveedit";
        document.adminForm.target="_self";
       document.adminForm.returntask.value="editDhtmlMenu";
		document.adminForm.action="index.php";
        setTimeout('document.adminForm.submit()',200) ;
        }


}

function doExport() {

	if(document.adminForm.title.value==""){

		alert("Menu module needs a name.");

	}else if(document.adminForm.menutype.value==-999){

		alert("Menu module needs a valid menu source.");

	}else{
	  document.getElementById("php_out").value = tree.exportToSql().replace(/</g, "&lt;").replace(/>/g, "&gt;");
	document.adminForm.task.value="saveedit";
	  document.adminForm.returntask.value="editDhtmlMenu";
	document.adminForm.export2.value=1;
        document.adminForm.target="_self";
        document.adminForm.action="index.php";
        setTimeout('document.adminForm.submit()',200) ;
        }
  }

function doCancel() {
	//document.adminForm.task.value="showmodules";
    //    document.adminForm.target="_self";
    //    document.adminForm.action="index.php?option=com_swmenupro&task=showmodules";
    //    setTimeout('document.adminForm.submit()',200) ;
//history.go(-1);
limit=document.adminForm.limit.value;
limitstart=document.adminForm.limitstart.value;
  window.location = "index.php?option=com_swmenupro&limit="+limit+"&limitstart="+limitstart;
		
		}


function doPreviewWindow() {

if(document.adminForm.menustyle.value =="treemenu"){
doMainBorderTree();
 } else if(document.adminForm.menustyle.value =="transmenu"){
doMainBorder();
doTransSubBorder();
 } else{
 doMainBorder();
//doSubBorder();
 }

if(document.adminForm.menutype.value != document.adminForm.menuname.value){
document.adminForm.images_preview.value=0;
 }
  document.getElementById("php_out").value = tree.exportToSql().replace(/</g, "&lt;").replace(/>/g, "&gt;");
document.adminForm.target="win1";
document.adminForm.no_html.value=1;
document.adminForm.action="index2.php";
document.adminForm.task.value="preview";
 window.open('', 'win1', 'status=no,toolbar=no,scrollbars=auto,titlebar=no,menubar=no,resizable=yes,width=600,height=500,directories=no,location=no');
 setTimeout('document.adminForm.submit()',200) ;
 setTimeout('document.adminForm.target="_self"',300);
 setTimeout('document.adminForm.action="index.php"',300);
  setTimeout('document.adminForm.no_html.value=0',300);

}



function hide_all(){
document.getElementById("auto_image").style.display="none";

document.getElementById("auto_css_div").style.display="none";
}





function showCSS(csstype) {
hideAll();
		cssvalue= document.getElementById(csstype);
		document.getElementById("css_buttons").style.display="block";
			document.getElementById("oss_buttons").style.display="block";
		if(cssvalue.value.substring(0,6)=="border"){

	document.getElementById(csstype+'-border').style.display="block";
	//document.getElementById("colorwheel").style.display="block";

		}
		if(cssvalue.value=="padding:"){

	document.getElementById(csstype+'-padding').style.display="block";
	//document.getElementById("colorwheel").style.display="block";

		}
		if(cssvalue.value=="margin:"){

	document.getElementById(csstype+'-margin').style.display="block";
	//document.getElementById("colorwheel").style.display="block";

		}
		
if(cssvalue.value=="background:"){

	document.getElementById(csstype+'-background').style.display="block";
	//document.getElementById("colorwheel").style.display="block";

		}
		if(cssvalue.value=="font:"){

	document.getElementById(csstype+'-font').style.display="block";
	//document.getElementById("colorwheel").style.display="block";

		}
		if(cssvalue.value=="offsets"){

	document.getElementById(csstype+'-offsets').style.display="block";
	//document.getElementById("colorwheel").style.display="block";

		}
		if(cssvalue.value=="dimensions"){

	document.getElementById(csstype+'-dimensions').style.display="block";
	//document.getElementById("colorwheel").style.display="block";

		}
		if(cssvalue.value=="effects"){

	document.getElementById(csstype+'-effects').style.display="block";
	//document.getElementById("colorwheel").style.display="block";

		}
		if(cssvalue.value=="text"){

	document.getElementById(csstype+'-text').style.display="block";
	//document.getElementById("colorwheel").style.display="block";

		}
		}


function doCSS(csstype, typestate) {

		cssvalue= document.getElementById(csstype);
		str="";
		
			if(cssvalue.value.substring(0,6)=="border"){
				str= cssvalue.value+" "+document.getElementById(csstype+"-border-width").value+"px "+document.getElementById(csstype+"-border-style").value+" "+document.getElementById(csstype+"-border-color").value+" !important;\n";
			
			}
			if(cssvalue.value=="padding:"){
				str= cssvalue.value+" "+document.getElementById(csstype+"-pad_top").value+"px "+document.getElementById(csstype+"-pad_right").value+"px "+document.getElementById(csstype+"-pad_bottom").value+"px "+document.getElementById(csstype+"-pad_left").value+"px"+" !important;\n";
			}
			if(cssvalue.value=="margin:"){
				str= cssvalue.value+" "+document.getElementById(csstype+"-margin_top").value+"px "+document.getElementById(csstype+"-margin_right").value+"px "+document.getElementById(csstype+"-margin_bottom").value+"px "+document.getElementById(csstype+"-margin_left").value+"px"+" !important;\n";
			}
			if(cssvalue.value=="background:"){
				str= (document.getElementById(csstype+"-background-color").value?"background-color: "+document.getElementById(csstype+"-background-color").value+" !important;\n":"");
				str+= (document.getElementById(csstype+"-background_image").value?"background-image: url("+document.getElementById(csstype+"-background_image").value+") !important;\n":"");
				str+= (document.getElementById(csstype+"-background_image").value?"background-repeat: "+document.getElementById(csstype+"-background-repeat").value+";\n":"");
				str+= (document.getElementById(csstype+"-background_image").value?"background-position: "+document.getElementById(csstype+"-x_offset").value+"px "+document.getElementById(csstype+"-y_offset").value+"px"+";\n":"");
			}
			if(cssvalue.value=="text"){
				str= (document.getElementById(csstype+"-font-color").value?"color: "+document.getElementById(csstype+"-font-color").value+" !important;\n":"");
				str+= "text-align: "+document.getElementById(csstype+"-text-align").value+" !important;\n";
				str+= "text-decoration: "+document.getElementById(csstype+"-text-decoration").value+" !important;\n";
				str+= "text-transform: "+document.getElementById(csstype+"-text-transform").value+";\n";
				str+= "white-space: "+document.getElementById(csstype+"-white-space").value+";\n";
				str+= "text-indent: "+document.getElementById(csstype+"-text-indent").value+"px;\n";
			}
			if(cssvalue.value=="font:"){
				str= (document.getElementById(csstype+"-font-size").value?"font-size: "+document.getElementById(csstype+"-font-size").value+"px !important;\n":"");
				str+= "font-style: "+document.getElementById(csstype+"-text-align").value+" !important;\n";
				str+= "font-weight: "+document.getElementById(csstype+"-text-decoration").value+" !important;\n";
				str+= "font-family: "+document.getElementById(csstype+"-font-family").value+" !important;\n";
			}
			if(cssvalue.value=="offsets"){
				str= (document.getElementById(csstype+"-y2_offset").value?"top: "+document.getElementById(csstype+"-y2_offset").value+"px;\n":"");
				str+= (document.getElementById(csstype+"-x2_offset").value?"left: "+document.getElementById(csstype+"-x2_offset").value+"px;\n":"");
			}
			if(cssvalue.value=="dimensions"){
				str= (document.getElementById(csstype+"-y_height").value?"height: "+document.getElementById(csstype+"-y_height").value+"px;\n":"");
				str+= (document.getElementById(csstype+"-x_width").value?"width: "+document.getElementById(csstype+"-x_width").value+"px;\n":"");
			}
			if(cssvalue.value=="effects" && document.getElementById(csstype+"-opacity").value){
				str= "-moz-opacity: "+(document.getElementById(csstype+"-opacity").value/100)+";\n";
				str+= "filter:alpha(opacity="+document.getElementById(csstype+"-opacity").value+");\n";
			}
			

			if(str){
				if(csstype=="ncsstype" && typestate=='normal'){
					css= document.getElementById('tree-normal_css');
				}else if(csstype=="ocsstype" && typestate=='auto'){
					css= document.getElementById('auto_css');
				}else if(csstype=="ncsstype" && typestate=='over'){
					css= document.getElementById('tree-over_css');
				}
				css.value+=str;
			}
			
treeInfoUpdate();
hideAll();
document.getElementById('ncsstype').value=0;
document.getElementById('ocsstype').value=0;
}







function hideAll() {

		document.getElementById('ncsstype-border').style.display="none";
		document.getElementById('ncsstype-margin').style.display="none";
		document.getElementById('ncsstype-padding').style.display="none";
		
		document.getElementById('ncsstype-background').style.display="none";
		document.getElementById('ncsstype-font').style.display="none";
		document.getElementById('ncsstype-offsets').style.display="none";
		document.getElementById('ncsstype-dimensions').style.display="none";
		document.getElementById('ncsstype-effects').style.display="none";
		document.getElementById('css_buttons').style.display="none";
		document.getElementById('ncsstype-text').style.display="none";

		document.getElementById('ocsstype-border').style.display="none";
		document.getElementById('ocsstype-margin').style.display="none";
		document.getElementById('ocsstype-padding').style.display="none";
		
		document.getElementById('ocsstype-background').style.display="none";
		document.getElementById('ocsstype-font').style.display="none";
		document.getElementById('ocsstype-offsets').style.display="none";
		document.getElementById('ocsstype-dimensions').style.display="none";
		document.getElementById('ocsstype-effects').style.display="none";
		document.getElementById('oss_buttons').style.display="none";
		document.getElementById('ocsstype-text').style.display="none";

		//document.getElementById('auto_css_div').style.display="none";
		//document.getElementById('ncsstype').value=0;
		//document.getElementById('ocsstype').value=0;
		//document.getElementById("colorwheel").style.display="none";
		//tt_Hide();
		}






function doAutoAssign(counter){

var temp_attrib ;
var temp_assign ;

  if (document.getElementById) {
     temp_assign = document.getElementById('autoassign').value;
	 temp_attrib = document.getElementById('autoattrib').value;

 
	 switch(temp_assign)
	  {
		case('all'):
			for(i=0;i<counter;i++)
			{
			applyattrib(temp_attrib,i);

			}
		break;

		case('top'):
			for(i=0;i<counter;i++)
			{
			 var node = tree.allNodes['tree-'+(i+1)];
				
				if(node.parentNode.id=="tree"){
					
				applyattrib(temp_attrib,i);
				}
			}
		break;
		
		case('active'):
			for(i=0;i<counter;i++)
			{
				if(document.adminForm.cid[i].checked==true){
					
				applyattrib(temp_attrib,i);
				}
			}
		break;
		case('parent'):
			for(i=0;i<counter;i++)
			{
			 var node = tree.allNodes['tree-'+(i+1)];
				if(node.isFolder){
				applyattrib(temp_attrib,i);
				}
			}
		break;

		case('sub'):
			for(i=0;i<counter;i++)
			{
			 var node = tree.allNodes['tree-'+(i+1)];
				
				if(node.parentNode.id!="tree"){
					
				applyattrib(temp_attrib,i);
				}
			}
		break;

		case('child'):
			for(i=0;i<counter;i++)
			{
			 var node = tree.allNodes['tree-'+(i+1)];
				if(node.isDoc){
				applyattrib(temp_attrib,i);
				}
			}
		break;
		}
	}
	document.getElementById('autoattrib').selectedIndex=0;
	document.getElementById('autoassign').selectedIndex=0;
	treeInfo();
	hide_all();
}

function check_box(){
 var form =document.adminForm;
 var node = tree.getActiveNode();
 var i = parseInt(node.id.replace('tree-',''));
 if(form.cid[(i-1)].checked==false){
	form.cid[(i-1)].checked=true; 
 }else{
	 form.cid[(i-1)].checked=false;
 }
}

function doSelectChange(){

var temp_attrib ;
var temp_assign ;

  if (document.getElementById) {
    temp_assign = document.getElementById('autoassign').value;
	var form = document.adminForm;
	j=form.cid.length; //alert(j)
	for (i=0; i<j; i++){
		
		if(temp_assign!="active"){
			form.cid[i].checked=false;
			
		}

		 switch(temp_assign)
	  {
		case('all'):
			form.cid[i].checked=true;
		break;

		case('top'):
		 var node = tree.allNodes['tree-'+(i+1)];
			if(node.parentNode.id=="tree"){
				form.cid[i].checked=true;	
			}
		break;
		
		case('parent'):
		 var node = tree.allNodes['tree-'+(i+1)];
				if(node.isFolder){
				form.cid[i].checked=true;	
			}
		break;

		case('sub'):
		 var node = tree.allNodes['tree-'+(i+1)];
			if(node.parentNode.id!="tree"){
				form.cid[i].checked=true;		
			
			}
		break;

		case('child'):
			 var node = tree.allNodes['tree-'+(i+1)];
				if(node.isDoc){
				form.cid[i].checked=true;	
		}
		break;
		}
	}


	
	}
	//treeInfo();
	//hide_all();
}

function doImageChange(){
var temp_x= document.getElementById('autoattrib').value;
hide_all();
if(temp_x=="image1" || temp_x=="image2"){
document.getElementById("auto_image").style.display="block";
		//ImageSelector.select('globalimage');
	}else if (temp_x=="normalcss" || temp_x=="overcss"){
			document.getElementById("auto_css_div").style.display="block";
				}else if (temp_x=='dontshowname'){
				//hideAll();
				}else if (temp_x=='imageleft'){
				//hideAll();
				
				}else if (temp_x=='imageright'){
				//hideAll();
				}else if (temp_x=='islink'){
				//hideAll();
				}else if (temp_x=='isnotlink'){
			//hideAll();
				}else{
				//	hideAll();
				}
}


function applyattrib(temp_attrib,i){

	var node = tree.allNodes['tree-'+(i+1)];
			
				if(temp_attrib=='image1'||temp_attrib=='image2'){
					var temp_globalimage=document.getElementById('globalimagehidden').value;
					var temp_globalimage_width=document.getElementById('globalimage_width').value;
					var temp_globalimage_height=document.getElementById('globalimage_height').value;
					var temp_globalimage_hspace=document.getElementById('globalimage_hspace').value;
					var temp_globalimage_vspace=document.getElementById('globalimage_vspace').value;
					
					
					if (temp_attrib=='image1'){
					node.image = temp_globalimage;
					node.image_width = temp_globalimage_width;
					node.image_height = temp_globalimage_height;
					node.image_hspace = temp_globalimage_hspace;
					node.image_vspace = temp_globalimage_vspace;
					
					node.image_width = temp_globalimage_width;
					node.image_height = temp_globalimage_height;
					node.image_hspace = temp_globalimage_hspace;
					node.image_vspace = temp_globalimage_vspace;
					}else{
					node.image_over = temp_globalimage;
					node.image_over_width = temp_globalimage_width;
					node.image_over_height = temp_globalimage_height;
					node.image_over_hspace = temp_globalimage_hspace;
					node.image_over_vspace = temp_globalimage_vspace;
					
					node.image_over_hspace = temp_globalimage_width;
					node.image_over_height = temp_globalimage_height;
					node.image_over_hspace = temp_globalimage_hspace;
					node.image_over_vspace = temp_globalimage_vspace;
					}
				
				
				}else if (temp_attrib=='showname'){
				node.showname=1;
				
				}else if (temp_attrib=='dontshowname'){
				node.showname=0;
				
				}else if (temp_attrib=='imageleft'){
				node.image_align="left";
				
				}else if (temp_attrib=='imageright'){
				node.image_align="right";
				
				}else if (temp_attrib=='islink'){
				node.target = 1;
				}else if (temp_attrib=='isnotlink'){
				node.target = 0;
				}else if (temp_attrib=='showitem'){
				node.showitem = 1;
				}else if (temp_attrib=='dontshowitem'){
				node.showitem = 0;
				}else if (temp_attrib=='normalcss'){
				node.ncss = document.getElementById('auto_css').value;
				}else if (temp_attrib=='overcss'){
				node.ocss = document.getElementById('auto_css').value;
				}
				
}



var manager = new ImageManager('components/com_swmenupro/ImageManager','en');
        ImageSelector = 
        {
            
            update : function(params)
            {
                if(this.field && this.field.src != null)
                {
                    if(params.f_file){
                    this.field.src = "../modules/mod_swmenupro/images" + params.f_file; //params.f_url
                    this.field2.value = "modules/mod_swmenupro/images" + params.f_file; //params.f_url
                    //this.field2.value+= "," + params.f_width + "," + params.f_height; //params.f_url
                    //this.field2.value+= "," + params.f_horiz + "," + params.f_vert; //params.f_url
                    
                    }else{
                    this.field.src = "../modules/mod_swmenupro/images/no_image.gif"; //params.f_url
                    this.field2.value = "";
                    }
                    
                }
            },
            
            select: function(textfieldID)
            {
                this.field = document.getElementById(textfieldID);
                this.field2 = document.getElementById(textfieldID+"hidden");
                manager.popManager(this);   
            }
        };  
        PreviewImageSelector =
        {
            
            update : function(params)
            {
                if(this.field2 )
                {
                    if(params.f_file){
                    this.field.src =  "../modules/mod_swmenupro/images" + params.f_file; //params.f_url
                    this.field2.value = "../modules/mod_swmenupro/images" +  params.f_file; //params.f_url
                    this.field3.value =  params.f_width ; //params.f_url
                    this.field4.value = params.f_height; //params.f_url
                    this.field5.value =  params.f_horiz ; //params.f_url
                    this.field6.value = params.f_vert; //params.f_url
                    treeInfoUpdate();
                    }else{
                    this.field.src = ""; //params.f_url
                    this.field2.value = "";
					 treeInfoUpdate();
                    }
                    
                }
            },
            
            select: function(textfieldID)
            {
                this.field = document.getElementById(textfieldID);
                this.field2 = document.getElementById(textfieldID+"hidden");
                this.field3 = document.getElementById(textfieldID+"_width");
                this.field4 = document.getElementById(textfieldID+"_height");
                this.field5 = document.getElementById(textfieldID+"_hspace");
                this.field6 = document.getElementById(textfieldID+"_vspace");
                manager.popManager(this);
            }
        };  

       
        BackgroundSelector2 = 
        {
            
            update : function(params)
            {
                if(this.field )
                {
                    
                    this.field.style.background = "url(../modules/mod_swmenupro/images" + params.f_file + ")"; //params.f_url
                    
					if(params.f_file){
					this.field2.value = document.getElementById("rel_path").value+"/modules/mod_swmenupro/images" + params.f_file; //params.f_url
                    }else{
					this.field2.value ="";
					}


                }
            },
            
            select: function(textfieldID)
            {
                this.field = document.getElementById(textfieldID+'_box');
                this.field2 = document.getElementById(textfieldID);
                manager.popManager(this);   
            }
        };  

        BackgroundSelector = 
        {
            
            update : function(params)
            {
                if(this.field )
                {
                    
                    this.field.style.background = "url(../modules/mod_swmenupro/images" + params.f_file + ")"; //params.f_url
                    this.field2.value = "modules/mod_swmenupro/images" + params.f_file; //params.f_url
                    

                }
            },
            
            select: function(textfieldID)
            {
                this.field = document.getElementById(textfieldID+'_box');
                this.field2 = document.getElementById(textfieldID);
                manager.popManager(this);   
            }
        };  
