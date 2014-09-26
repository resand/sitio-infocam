<?php
	session_start();
	if(!isset($_SESSION['usuario'])){
		header( "Location: index.html");
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mapa de Cobertura</title>
<link href="../css/fuentes.css" rel="stylesheet" type="text/css" />
<style type="text/css">
body{
	padding:0; 
	margin:0;
	}
span{
	font-family: "The Sans Bold-Plain";}
	
h2{ width:100%; border-bottom:1px solid #999;
font-family: "The Sans SemiBold-Plain";
text-align:center;}	

h1, h3{ font-family: "The Sans SemiBold-Plain";
         padding:1px;
		 margin:1px;}
button{
	font-family:"The Sans SemiLight-Plain";
    font-size:20px;
    border: 0;
    padding: 8px 22px;
    cursor: pointer;
    -webkit-transition: background-color 0.5s;
    -webkit-transition: background-color 0.5s;
    -moz-transition: background-color 0.5s;
    -ms-transition: background-color 0.5s;
    -o-transition: background-color 0.5s;
    transition: background-color 0.5s;
}
.naranja{background: #ffc33e;color: #87620a;}
.naranja:hover {background: #ffd753;}
</style>

</head>

<body>
<table style="width:100%; border-collapse:collapse" border="0">
	<tr>
    	<td style="background:#CCC; width:20%; text-align:center"> <img src="/infocam/images/campeche.png" style="width:80px"/>         </td>
		<td style="background:#CCC"> <h1>Cruzada Nacional contra el Hambre </h1> <h3> Mapa de Cobertura de Servicios</h3> </td>
	</tr> 
 
    <tr>
        <td style="background:#000; height:5px;" colspan="2">       </td>
    
    </tr>
 
    <tr>
        <td style="background:#900; height:5px;" colspan="2">    </td>
     
    </tr>
 </table>  
<div style="width:100%;text-align:right;">
	<button class="naranja" onclick="window.open('salir.php','_self');">SALIR</button>
</div>
 
 <div id="div_campeche">
 	<h2>San Francisco Kob&eacute;n</h2>
    <table style="width:100%; text-align:center;">
        <tr>  
             <td>  <img src="koben/koben_agua.png" title="Cobertura de Agua de la Localidad San Francisco Kob&eacute;n"  style="vertical-align: middle;" /><br />
             <span>Cobertura de Agua de la Localidad San Francisco Kob&eacute;n
             <a href="#" onclick="window.open('koben/KOBEN_AGUA.pdf')">Descargar</a></span><br />
              </td>
               
        </tr>
               
        <tr>
              <td>  <img src="koben/koben_alumbrado.png" title="Cobertura de Alumbrado San Francisco Kob&eacute;n" style="vertical-align: middle;" /><br />
              <span>Cobertura de Alumbrado San Francisco Kob&eacute;n
              <a href="#" onclick="window.open('koben/KOBEN_ALUMBRADO.pdf')">Descargar</a></span><BR /> </td>
        </tr>
         
        <tr>
               <td> <img src="koben/koben_drenaje.png" title="Cobertura de Drenaje San Francisco Kob&eacute;n" style="vertical-align: middle;" /><br />
               <span>Cobertura de Drenaje San Francisco Kob&eacute;n
              <a href="#" onclick="window.open('koben/KOBEN_DRENAJE.pdf')">Descargar</a></span> <br /></td>
        </tr>    
        
        <tr>
              <td>  <img src="koben/koben_pavimento.png" title="Cobertura de Pavimentaci&oacute;n San Francisco Kob&eacute;n"  style="vertical-align: middle;" /> <br />
               <span>Cobertura de Pavimentaci&oacute;n San Francisco Kob&eacute;n
              <a href="#" onclick="window.open('koben/KOBEN_PAVIMENTOS.pdf')">Descargar</a></span> <br /><br /><br /></td>
        </tr>
      </table>
 
  <h2>IM&Iacute;</h2>
    <table style="width:100%; text-align:center;">  
        <tr>  
             <td>  <img src="imi/imi_agua.png" title=">Cobertura de Agua Im&iacute;" style="vertical-align: middle;" />
             <br />
             <span>Cobertura de Agua Im&iacute;
              <a href="#" onclick="window.open('imi/IMI_AGUA.pdf')">Descargar</a></span> <br /></td>
               
        </tr>
               
        <tr>
              <td>  <img src="imi/imi_alumbrado.png" title="Cobertura de Alumbrado Im&iacute;"  style="vertical-align: middle;" />
              <br />
               <span>Cobertura de Alumbrado Im&iacute;
              <a href="#" onclick="window.open('imi/IMI_ALUMBRADO.pdf')">Descargar</a></span> <br /></td>
        </tr>
         
        <tr>
               <td> <img src="imi/imi_drenaje.png" title="Cobertura de Drenaje Im&iacute;"  style="vertical-align: middle;" />
               <br />
                <span>Cobertura de Drenaje Im&iacute;
              <a href="#" onclick="window.open('imi/IMI_DRENAJE.pdf')">Descargar</a></span> <br /></td>
        </tr>    
        
        <tr>
              <td>  <img src="imi/imi_pavimento.png" title="Cobertura de Pavimentaci&oacute;n Im&iacute;" style="vertical-align: middle;" />
              <br />
               <span>Cobertura de Pavimentaci&oacute;n Im&iacute;
              <a href="#" onclick="window.open('imi/IMI_PAVIMENTOS.pdf')">Descargar</a></span><br /><br /<br /> </td>
        </tr>
      
    
    </table>
      
 <h2>Pich</h2>
    <table style="width:100%; text-align:center;">   
  
        <tr>  
             <td>  <img src="pich/pich_agua.png" title="Cobertura de Agua Pich" style="vertical-align: middle;" /><br />
             <span>Cobertura de Agua Pich
              <a href="#" onclick="window.open('pich/PICH_AGUA.pdf')">Descargar</a></span><br /> </td>
               
        </tr>
               
        <tr>
              <td>  <img src="pich/pich_alumbrado.png" title="Cobertura de Alumbrado Pich" style="vertical-align: middle;" /> 
              <br />
              <span>Cobertura de Alumbrado Pich
              <a href="#" onclick="window.open('pich/PICH_ALUMBRADO.pdf')">Descargar</a></span><br /></td>
        </tr>
         
        <tr>
               <td> <img src="pich/pich_drenaje.png" title="Cobertura de Drenaje Pich" style="vertical-align: middle;" /> 
               <br />
               <span>Cobertura de Drenaje Pich
              <a href="#" onclick="window.open('pich/PICH_DRENAJE.pdf')">Descargar</a></span><br /></td>
        </tr>    
        
        <tr>
              <td>  <img src="pich/pich_pavimento.png" title="Cobertura de Pavimentaci&oacute;n Pich" style="vertical-align: middle;" />
              <br />
              <span>Cobertura de Pavimentaci&oacute;n Pich
              <a href="#" onclick="window.open('pich/PICH_PAVIMENTACION.pdf')">Descargar</a></span><br /> </td>
        </tr>
   </table>   
    

 
 
 </div>
</body>
</html>
