<?php 
        require_once("conexion/conexion.php");
        $ask=$_GET['ask'];
       
            $sql="SELECT * FROM upb_centros WHERE idupb_centros='$ask'";
            $res=mysql_query($sql, $con);

  
 ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <?php while ($reg=mysql_fetch_array($res)) {?>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo utf8_encode($reg['nombre']); ?> | Universidad Privada Boliviana</title>
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
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" type="text/css" href="css/normalize.css">
        <link rel="stylesheet" type="text/css" href="css/fonts.css">
        <link rel="stylesheet" type="text/css" href="css/layout_2.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/style_1.css">
        <link rel="stylesheet" type="text/css" href="css/about.css"> 
        <link rel="stylesheet" type="text/css" href="source/jquery.fancybox.css?v=2.1.4" media="screen" />   
        <style>
            p{
                font-size: 15px !important; 
            }
        </style>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <div id="contenedor">
        	<header>
             	<a href="index.php"><div id="logo"></div></a>
                <ul class="nav">
                    <li><a href="index.php">Director</a></li>
                    <li><a href="#rector">Proyectos de Investigaci&oacute;n</a></li>
                    <li><a href="directorio.php">Publicaciones</a></li>
                    <li><a href="gobierno.php">Investigadores</a></li>
                </ul>
            </header>
    	<div id="cuerpo2">
        	<a name="admin"></a>
            
            <div id="title"><?php echo utf8_encode($reg['nombre']); ?></div>
                <div id="box">     
                        <h2><?php echo utf8_encode($reg['nombre']); ?></h2>
                        <div>
                            <?php echo utf8_encode($reg['contenido']); ?>
                        </div>
                    <?php } ?>
                </div>            
            </div>
        </div>
        <?php require_once("footer.php");?>
        <script  src="js/jquery.js"></script>
        <script type="text/javascript" src="js/mustache.js"></script>
        <script type="text/javascript" src="js/easing.js"></script>
        <script type="text/javascript" src="js/carousel.js"></script>
        <script type="text/javascript" src="js/accordion.js"></script>
        <script type="text/javascript" src="js/fronty.js"></script>
        <script type="text/javascript" src="js/about.js"></script>
        <script type="text/javascript" src="source/jquery.fancybox.js?v=2.1.4"></script>
        <script type="text/javascript" src="js/fancy_box.js"></script>         
    </body>
</html>
