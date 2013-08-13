<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" type="text/css" href="css/style_1.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/fonts.css">
		<script src="js/vendor/modernizr-2.6.2.min.js"></script>
        <script src="js/prefixfree.min.js"></script>
        
        
        <link rel="stylesheet" type="text/css" href="css/jquery.panorama.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="css/jquery.fancybox-1.3.1.css" media="screen" />
       
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]--> 
        <div id="contenedor">
        	<header>
             	<div id="logo"></div>
            	<?php require_once("menu.php");?>
            </header>
            <div id="cuerpo">
            	<div id="page">
          			<img src="img/sculpteur.jpg" class="advancedpanorama" width="2448" height="408" alt="Campus UPB" />
                    <map id="testmap" name="testmap"> 
                        <area shape="rect" coords="1653,72,1839,255" href="salleformation.html" alt="" /> 
                        <area shape="rect" coords="2013,114,2091,210" href="img/statue1.jpg" alt="" class="thickbox" /> 
                        <area shape="rect" coords="1920,276,2070,351" href="img/gouges.jpg" alt="" class="thickbox" /> 
                    </map>
				</div>
            </div>
            <?php require_once("footer.php");?>
        </div>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <script type="text/javascript" src="js/jquery-1.4.2.js"></script>
        <script type="text/javascript" src="js/jquery.panorama.js"></script>
        <script type="text/javascript">
        $(document).ready(function(){
            $("img.advancedpanorama").panorama({
                        auto_start: 0,
                		start_position: 1527
                 });
        });
        </script>
        <script type="text/javascript" src="js/cvi_text_lib.js"></script>
        <script type="text/javascript" src="js/jquery.advanced-panorama.js"></script>
        <script type="text/javascript" src="js/jquery.flipv.js"></script>
        <script type="text/javascript" src="js/jquery.fancybox-1.3.1.pack.js"></script>
        <script type="text/javascript">
        $(document).ready(function(){
          $('.thickbox').fancybox();
        });
	</script>    
    </body>
</html>
