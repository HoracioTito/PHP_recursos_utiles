<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ajax Test</title>
	<script type="text/javascript">
    // Rutina AJAX
    var xmlhttp;
    
    /* 1- Load imagen with OnLOAD */
    function IniLoadweb(Info_1,Info_2,Info_3){
		//setTimeout ("showCustomer(0,0,'txtHint');", 2500); 
		setTimeout ("showAnimo("+Info_1+",'pagina_1');", 50); 
		setTimeout ("showRockola(1,"+Info_2+",'pagina_2');", 3100);
		setTimeout ("showMsj("+Info_3+",'pagina_3');", 1200);
    } 
    
    function showAnimo(NEst,DIVweb){
		//alert(NEst);
		div_web = DIVweb;
		var url="pag_1.html";
		url=url+"?NEstUsr="+NEst;
		//alert(url+"-"+div_web);
		AjaxBrw(url,div_web);
    }
     
    function showMsj(UsrLg,DIVweb)
    {
		//alert(UsrLg);
		div_web = DIVweb;
		var url="folder/pag_2.html";
		url=url+"?usrNick="+UsrLg;
		url=url+"&action=read";
		// alert(url+"-"+div_web);
		AjaxBrw(url,div_web);
    }
       
    function showRockola(str,idusr,DIVweb){
		div_web = DIVweb;
		// alert(str+"--------"+idusr);
		var url="folder/folder_2/pag_3.html";
		url=url+"?Pag="+str;
		url=url+"&TextArt="+idusr;
		// alert(url+"-"+div_web);
		AjaxBrw(url,div_web);
    }

    
    //***  Ajax detector browser  ******
    function AjaxBrw(url_dat,div_web){
		 //  alert (div_web);
		   url=url_dat;
		   divWebPos = div_web;
		if (window.XMLHttpRequest)
		  {// code for IE7+, Firefox, Chrome, Opera, Safari
		  xmlhttp=new XMLHttpRequest();
		  xmlhttp.onreadystatechange=function (){stateChange(divWebPos);};
		  xmlhttp.open("GET",url,true);
		  xmlhttp.send(null);
		  }
		else
		  {// code for IE6, IE5
		  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		  xmlhttp.onreadystatechange=function (){stateChange(divWebPos);};
		  xmlhttp.open("GET",url,true);
		  xmlhttp.send();
		  }
    }
    
    function stateChange(divPos){
		xxx ="txtHint";
		if (xmlhttp.readyState==4)
		  {
		  if (xmlhttp.status==200)
			{
		   document.getElementById(divPos).innerHTML=xmlhttp.responseText;
		   ContAjax=xmlhttp.responseText;
		   runJS(ContAjax);
			}
		  else
			{
			alert("There was a problem in the returned data");
			}
		  }
    }
    </script>
    <script>
     /* Run JS de pagina con JavaScript en HTML */
     function runJS(ContAjax) 
    { 
        var block="";
        var search = ContAjax;
        var script;
     
        while( script = search.match(/(<script[^>]+javascript[^>]+>\s*(<!--)?)/i)) 
        { 
          search = search.substr(search.indexOf(RegExp.$1) + RegExp.$1.length); 
     
          if (!(endscript = search.match(/((-->)?\s*<\/script>)/))) break; 
     
          block = search.substr(0, search.indexOf(RegExp.$1)); 
          search = search.substring(block.length + RegExp.$1.length); 
        } 
        eval(block);
    }
    
    //window.onload= function(){runJS();}
    </script>
</head>

<body>
    <div id="miajax" > </div>
    <div>div id="pagina1"</div>
    <div id="pagina_1">
        <p align="center"><font face="Arial">Click para recargar</font></p>
        <p align="center">&nbsp;<img src="./image/barra_ajax.gif" name="mousetest0" onclick="showAnimo('Param 1','pagina_1')" width="100" height="9" /></p>
    </div>
    <div>div id="pagina2"</div>
    <div id="pagina_2">
        <p align="center"><font face="Arial">Click para recargar</font></p>
        <p align="center">&nbsp;<img src="./image/barra_ajax.gif" name="mousetest1" onclick="showMsj('Param 2','pagina_2')" width="100" height="9" /></p>
    </div>
    <div>div div="pagina3"</div>
    <div id="pagina_3">
        <p align="center"><font face="Arial">Click para recargar</font></p>
        <p align="center">&nbsp;<img src="./image/barra_ajax.gif" name="mousetest2" onclick="showRockola('Param 3','pagina_3')" width="100" height="9" /></p>
    </div>
	<script type="text/javascript">
		// Ejecuta onloas en IE - FF -Crome
		var Info_1 ="info 1";
		var Info_2 ="Info 2";
		var Info_3="Info 3";
		window.onload=IniLoadweb('Info_1','Info_3','Info_3');
    </script>
</body>
</html>
