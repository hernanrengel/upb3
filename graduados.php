<?php 
    
    require_once("conexion/conexion.php");
    $sql_cbba = "SELECT * FROM upb_graduados WHERE cty='1' GROUP BY carrera ";
    $res_cbba = mysql_query($sql_cbba, $con);

    require_once("conexion/conexion.php");
    $sql_lp = "SELECT * FROM upb_graduados WHERE cty='2' GROUP BY carrera ";
    $res_lp = mysql_query($sql_lp, $con);

 ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Estudiantes Graduados | Universidad Privada Boliviana</title>
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
            #grad li a{
                color: white;
                font-size: 20px;
                text-decoration: none;
                font-style: italic;
                padding-left: 20px;
                margin-bottom: 20px;
            }
            #grad li a:hover{
                font-weight: 800;
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
                    <li><a href="extension.php#areas">&Aacute;reas de Capacitaci&oacute;n<i class="icon-home"></i></a></li>
                    <li><a href="extension.php#continua">Formaci&oacute;n Cont&iacute;nua<i class="icon-home"></i></a></li>
                    <li><a target="_blank" href="https://sistemas.upb.edu/">Intranet<i class="icon-home"></i></a></li>
                    <li><a href="#servicios">Nuestros Sevicios<i class="icon-home"></i></a></li>
                    <li><a href="#becas">Becas FEPC<i class="icon-home"></i></a></li>
                    <li><a target="_blank" href="http://extension.upb.edu/">Extensi&oacute;n<i class="icon-home"></i></a></li>                  
                </ul>
            </header>
            <div id="cuerpo2">
                <div id="title">Lista de Graduados Cochabamba</div>
                <div id="box">
                    <ul id="grad">
                    <?php  while ($reg_cbba=mysql_fetch_array($res_cbba)) {?>
                        <li><a class="fancybox fancybox.ajax" href="graduados_det.php"><?php echo utf8_decode($reg_cbba['carrera']);?></a></li>
                    <?php } ?>
                    </ul>
                </div>
                <div id="title">Lista de Graduados La Paz</div>
                <div id="box">
                    <ul>
                    <?php  while ($reg_lp=mysql_fetch_array($res_lp)) {
                        if ($reg_lp==null) {
                            echo "No Hay Registros que mostrar";
                        }else {?>
                        <a class="fancybox fancybox.ajax" href="graduados_det.php?carrera=<?php echo $reg_lp['carrera']; ?>"><?php echo utf8_decode($reg_lp['carrera']);?></a>
                    <?php } } ?>
                    </ul>
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
