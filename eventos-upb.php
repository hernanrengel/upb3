<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html" lang="es">
<head>
    <meta charset="utf-8">
    <!-- <meta name="viewport" content="target-densitydpi=device-dpi, width=device-width, initial-scale=1.0, maximum-scale=1"> -->
    <meta name="description" content="UPB Web SITE">
    <meta name="author" content="Victor Aguilar">
    <meta name="keywords" content="Universidad, Bolivia, Educación, UPB">
    <title>Acerca | Universidad Privada Boliviana</title>
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
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/fonts.css">
    <link rel="stylesheet" type="text/css" href="css/layout.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/style_1.css">
    <link rel="stylesheet" type="text/css" href="css/about.css">
    <link rel="stylesheet" type="text/css" href="css/scroll.css"> 
    <link type="text/css" href="css/jquery.jscrollpane.css" rel="stylesheet" media="all" />    
</head>

<body>
    <header>
    	<a href="index.php"><div id="logo"></div></a>
    	<?php require_once("menu.php"); ?>
    </header>
    <section>        
        <div id="calendar" style="height: 300px;">
            <span class="title" id="open_grad">Ver los Pr&oacute;ximos Eventos <i class="icon-arrow-down-3"></i></span><br/><br/><br/><br/>
            <div class="section">
                <div class="date">
                    <span class="day">13</span>
                    <span class="month">Diciembre</span>
                    <span class="year">2013</span>
                </div>
                <p id="carrera">Primera Conferencia de Desarrollo Web</p>
            </div>
            <div class="section">
                <div class="date">
                    <span class="day">05</span>
                    <span class="month">Febrero</span>
                    <span class="year">2013</span>
                </div>
                <p id="carrera">Primera Conferencia de Desarrollo Web</p>
            </div>
            <div class="section">
                <div class="date">
                    <span class="day">07</span>
                    <span class="month">Marzo</span>
                    <span class="year">2013</span>
                </div>
                <p id="carrera">Primera Conferencia de Desarrollo Web</p>
            </div>
        </div>
    </section>
    <section>        
        <div id="calendar" style="height: 300px;">
            <div class="section">
                <div class="date">
                    <span class="day">13</span>
                    <span class="month">Diciembre</span>
                    <span class="year">2013</span>
                </div>
                <p id="carrera">Primera Conferencia de Desarrollo Web</p>
            </div>
            <div class="section">
                <div class="date">
                    <span class="day">05</span>
                    <span class="month">Febrero</span>
                    <span class="year">2013</span>
                </div>
                <p id="carrera">Primera Conferencia de Desarrollo Web</p>
            </div>
            <div class="section">
                <div class="date">
                    <span class="day">07</span>
                    <span class="month">Marzo</span>
                    <span class="year">2013</span>
                </div>
                <p id="carrera">Primera Conferencia de Desarrollo Web</p>
            </div>
        </div>
    </section>
    
    <?php require_once("footer.php");?>
	<script  src="js/jquery.js"></script>
	<script type="text/javascript" src="js/mustache.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript" src="js/carousel.js"></script>
    <script type="text/javascript" src="js/accordion.js"></script>
    <script type="text/javascript" src="js/fronty.js"></script>
    <script type="text/javascript" src="js/about.js"></script>
	<script type="text/javascript" src="js/mouse.js"></script>
	<script type="text/javascript" src="js/scroll.js"></script>
    <script type="text/javascript" src="js/libs/jquery.mousewheel.js"></script>
    <script type="text/javascript" src="js/libs/jquery.jscrollpane.min.js"></script>
        <script>
            $(document).ready(function(){
                $('#carrera').jScrollPane({
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

