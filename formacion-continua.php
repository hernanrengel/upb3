	<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Extension Universitaria | Universidad Privada Boliviana</title>
        <meta name="keywords" content="universidad,universidades,la paz,cochabamba,carreras,pregrado,
        postgrado,Ingeniería Petrolera y Gas Natural,Ingenieria de la Producción,Ingeniería Industrial y de Sistemas,
        Ingeniería Electrónica y Telecomunicaciones,Ingeniería de Sistemas Computacionales,Ingeniería Civil,
        Ingeniería Financiera,Arquitectura,Comunicación,Marketing y Logística,Administración de Empresas,Diseño Gráfico,
        Ingeniería Comercial,Derecho,Economía,ngeniería Electromecánicaeducacion" />
        <meta name="description" content="Misión
        'Crear, adaptar y utilizar conocimiento mediante la investigación, transmitirlo en procesos de enseñanza-aprendizaje 
        y difundirlo al entorno mediante procesos de extensión universitaria.
        Nos caracterizamos por el compromiso con la excelencia académica, la calidad de gestión, la ética, el desarrollo 
        sostenible, la competitividad y la libre empresa.
        Todas nuestras actividades están orientadas a satisfacer las necesidades del Sector Empresarial y de la Sociedad, 
        dando énfasis a la formación de líderes emprendedores comprometidos con el desarrollo del país, capaces de 
        identificar y aprovechar las potencialidades de Bolivia.Visión
        Ser la mejor universidad de ámbito nacional, que sea referente en América Latina."/>
        

        <link type="text/css" href="css/jquery.jscrollpane.css" rel="stylesheet" media="all" />
        


        <link rel="stylesheet" type="text/css" href="css/style_1.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/fonts.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <div id="contenedor">
        	<header>
             	<a href="index.php"><div id="logo"></div></a>
            	<ul class="nav">
                    <li><a href="areas-de-capacitacion.php">&Aacute;reas de Capacitaci&oacute;n<i class="icon-home"></i></a></li>
                    <li><a href="formacion-continua.php">Formaci&oacute;n Continua<i class="icon-home"></i></a></li>
                    <li><a href="#">Diplomados T&eacute;cnicos<i class="icon-home"></i></a></li>
                    <li><a href="servicios.php#servicio">Nuestros Sevicios<i class="icon-home"></i></a></li>
                    <li><a href="servicios.php#becas">Becas FEPC<i class="icon-home"></i></a></li>                  
                </ul>
            </header>
            <div id="cuerpo2">
                <div id="title">Formaci&oacute;n Continua</div>  
                	<div id="box">
                    	<p id="carrera">El Centro de Extensión Universitaria de la Universidad Privada Boliviana nace el 21 de octubre de 2005 con el propósito de: “llegar a la mayor parte de los ciudadanos para transmitirles conocimiento e información actualizada en materias centrales de la ciencia social”.</p>
                        <p id="carrera">Nuestros clientes encuentran áreas intelectuales y del desarrollo humano para ejercitar la mente y el espíritu. Los cursos están dirigidos a profesionales, técnicos, padres de familia, niños, adolescentes, estudiantes y al ciudadano en general.</p>
                	</div>           
            	</div>
        </div>
		<?php require_once("footer.php");?>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="js/carousel.js"></script>
        <script type="text/javascript" src="js/jquery.panorama.js"></script>
        <script type="text/javascript" src="js/cvi_text_lib.js"></script>
        <script type="text/javascript" src="js/jquery.advanced-panorama.js"></script>
        <script type="text/javascript" src="js/jquery.flipv.js"></script>
        <script type="text/javascript" src="js/jquery.fancybox-1.3.1.pack.js"></script>
        <script type="text/javascript" src="js/libs/jquery.mousewheel.js"></script>
        <script type="text/javascript" src="js/libs/jquery.jscrollpane.min.js"></script>
        <!--menues-->
		<script src="js/jquery.dlmenu.js"></script>
		<script src="js/pagetransitions.js"></script>
        <!--menues-end-->
        <script type="text/javascript">
            $(document).ready(function(){
                $("img.advancedpanorama").panorama({
                            auto_start: 0,
                    		start_position: 1527
                     });
                 $('.thickbox').fancybox();
            });
	    </script>
        <script>
            $(document).ready(function(){
                $('#cuerpo2').jScrollPane({
                    horizontalGutter:5,
                    verticalGutter:5,
                    'showArrows': false
                });
                
                $('.jspDrag').hide();
                $('.jspScrollable').mouseenter(function(){
                    $('.jspDrag').stop(true, true).fadeIn('slow');
                });
                $('.jspScrollable').mouseleave(function(){
                    $('.jspDrag').stop(true, true).fadeOut('slow');
                });
             });
        </script> 
    </body>
</html>
