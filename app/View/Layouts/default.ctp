<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title><?php echo $title_for_layout; ?> | <?php echo Configure::read('Application.name'); ?></title>
	<meta http-equiv="Content-Language" content="en-us" />
	
	<meta http-equiv="imagetoolbar" content="no" />
	<meta name="MSSmartTagsPreventParsing" content="true" />
	
	<meta name="description" content="Description" />
	<meta name="keywords" content="Keywords" />
	
	<meta name="Fábrica de Software - UNIPÊ" content="Observatório do Milênio" />
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Styles -->
	
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('css_observatorio'); 

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
<style type="text/css" media="all">
@import "css_observatorio.css";
@charset "UTF-8";
/* CSS Document */

body {
	font: 100%/1.4 Verdana, Arial, Helvetica, sans-serif;
	color: black;
	font-size: 12px;
	margin: auto;
	background-image:url(Recortes%20Observatorio/index/background.gif);
}


.reset input {
	width: auto;
    padding: 9px 15px;
    background: #617798;
    border: 0;
    font-size: 12px;
    color: #FFFFFF;
}
	
input, textarea { 
    padding: 3px;
    border: solid 1px #E5E5E5;
    outline: 0;
    font: normal 12px/100% Verdana, Tahoma, sans-serif;
    width: 230px;
    background: #FFFFFF url('bg_form.png') left top repeat-x;
    background: -webkit-gradient(linear, left top, left 25, from(#FFFFFF), color-stop(4%, #EEEEEE), to(#FFFFFF));
    background: -moz-linear-gradient(top, #FFFFFF, #EEEEEE 1px, #FFFFFF 25px);
    box-shadow: rgba(0,0,0, 0.1) 0px 0px 8px;
    -moz-box-shadow: rgba(0,0,0, 0.1) 0px 0px 8px;
    -webkit-box-shadow: rgba(0,0,0, 0.1) 0px 0px 8px;
    }
 
textarea { 
    width: 230px;
    max-width: 230px;
    height: 90px;
    line-height: 150%;
    }
 
input:hover, textarea:hover,
input:focus, textarea:focus { 
    border-color: #C9C9C9; 
    -webkit-box-shadow: rgba(0, 0, 0, 0.15) 0px 0px 8px;
    }
 
.form label { 
    margin-left: 10px; 
    color: #999999; 
    }
 
.submit input {
    width: auto;
    padding: 4px 10px;
    background: #617798;
    border: 0;
    font-size: 14px;
    color: #FFFFFF;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    }


/***************** LOGO *******************/
#header {
	background-image:url(Recortes%20Observatorio/index/background.gif);
	margin: 0px;
	width: 960px;
	height: 250px;
}

/*****************************************/


/***************** EFEITOS DE LINKS *******************/
a:link{
	text-decoration: none;
}

a:visited{
	color: gray;
	}

a:hover {
	 text-decoration:underline;
	 color: red;
}

/******************************************************/

subtopico{
	color: #0CF;
	font-size: 14px;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	line-height: 1.4;
	font-weight: bold;
	}

#content {
	margin: auto;
	height: 550px;
	width: 960px;
	background-image:url(Recortes%20Observatorio/index/background.gif);
}

#cordel {
	background-image:url(Recortes%20Observatorio/index/background.gif);
	margin: 0px;
	width: 960px;
}

#link {
	background-color:black;
	padding-bottom: 0px;
	margin: auto;
	color: white;
}

#righttop{
	float: right;
	width: 350px;
	height: 500px;
}

#not1{
	float: right;
	width:350px;
	height: 80px;
	background:orange;
}

#not2{
	float: right;
	width:350px;
	height: 80px;
	background:cyan;
}

#not3{
	float: right;
	width:350px;
	height: 80px;
	background:yellow;
}

#not4{
	float: right;
	width:350px;
	height: 80px;
	background:red;
}

#lefttop{
	float:left;
	width: 580px;
	height: 500px;
}

#divisaohorizontal {
	width:960px;
	height:8px;

}

.textomapa{
	float:left;
	widht:580px;
	height:300px;
}
	

.divindicadores{
    width:310px;
	float:left;
}

.divboaspraticas{
	width: 270px;
	float:left;
	height:145px;
}

.divmapainterativo{
	width: 580px;
	float:left;
	}

#divisaovertical {
 	float:left;
	width: 8px;
	height: 125px;
}

#divisaovertical2 {
	float: left;
	width: 8px;
	height: 105px;
}

#divisaovertical3 {
	float: left;
	width: 8px;
	height: 125px;
}

#divmid {
	width:960px;
	margin: auto;
	height: 500px;
}

#divtotal {
	width: 960px;
	margin: auto;
}

#div1 {
	float: left;
	width: 360px;
	height: 535px;
}

#div2 {
	padding-top: 15px;
	text-align:center;
	float: left;
	width: 300px;
	height: 535px;
}

#div3 {
	padding-left:3px;
	float: left;
	width: 280px;
	height: 535px;
}

#altnav {
 	color: white;
	margin-top: 5px;

}

#parceiros {
	position:fixed;
	margin-top:355px;
	height:100px;
	width:660px;
	float:left;
	background-image:url(Recortes%20Observatorio/index/background.gif);
}

#p1 {
	float:left;
	margin-left:2px;
	height: 60px;
	width: 125px;
	padding-top:45px;
	}
	
#p2 {
	float:left;
	margin-left:2px;
	height: 60px;
	width: 125px;
	padding-top:35px;
	}

#p3 {
	float:left;
	margin-left:2px;
	height: 60px;
	width: 125px;
	padding-top:20px;
	}

#p4 {
	float:left;
	margin-left:2px;
	height: 60px;
	width: 125px;
	padding-top:25px;
	padding-left:5px;
	}

#p5 {
	float:left;
	margin-left:2px;
	height: 60px;
	width: 125px;
	padding-top:25px;
	}	
	
#footer a {
	color: #c9c9c9;
	text-decoration: none;
}

#footer a:hover {
	color: #db6d16;
}

#footer {
	clear: both;
	background-color: black;
	font-family: Tahoma, Arial, Helvetica, Sans-serif;
	font-size: 10px;
	color: #c9c9c9;
	height: 70px;
	text-align: center;
}

#footerleft {
	float: left;
	width: 280px;
	height:70px;
}

#footermiddle {
	float: left;
	width: 350px;
	height:70px;
}

#footerright {
	float: left;
	width: 330px;
	height:70px;
}

</style>
</head>
<body>
	<div id="container">
		<div id="header">
		
		<img src="logo.png" width="960" height="231" />
  <div id="link">
    <div align="center"><a href="indexobs.html"><img src="Recortes Observatorio/index/menu/inicio_2.png" width="48" height="19" /></a>: 
      <a href="quemsomos.html"><img src="Recortes Observatorio/index/menu/quemsomos.png" width="111" height="14" /></a> : <a href="parceiros.html"><img src="Recortes Observatorio/index/menu/parceiros.png" width="89" height="13" /></a> : <a href="biblioteca.html"><img src="Recortes Observatorio/index/menu/biblioteca.png" width="92" height="14" /></a> : <a href="noticias.html"><img src="Recortes Observatorio/index/menu/noticias.png" width="76" height="14" /></a> : <a href="sobre.html"><img src="Recortes Observatorio/index/menu/sobreodm.png" width="96" height="14" /></a> : <a href="contato.html"><img src="Recortes Observatorio/index/menu/contatos.png" width="86" height="14" /></a>
	</div>
  </div>
		
		</div>
		<div id="content">
		
			
			
			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
		
		<div id="footerleft">
    </div>
    <div id="footermiddle">
		<a href="indexobs.html">Início</a> : 
		<a href="quemsomos.html">Quem Somos</a> :
		<a href="parceiros.html">Parceiros</a> 
		<a href="biblioteca.html"><br />
		Biblioteca</a> : 
		<a href="noticias.html">Notícias</a> :
        <a href="sobre.html">Sobre ODM</a> :
        <a href="contato.html">Contatos</a> 
     </div>
    <div id="footerright">
     <div id="un"><?php echo $this->Html->image('img/pnud.png', array('alt' => 'PNUD', 'width' => '40', 'height' => '70')); ?></div>
     <p align="left">Fábrica de Software ® 2013 </p>
	 <p align="left">Todos os Direitos Reservados</p>	
    </div>                   
  </div>
		
		</div>
	</div>
	
</body>
</html>
