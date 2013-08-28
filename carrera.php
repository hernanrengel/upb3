<?php 

    require_once('conexion/conexion.php');

    $id=$_GET['ask'];
    $sql="SELECT * FROM upb_carrera WHERE idupb_carrera='$id'";
    $res=mysql_query($sql, $con);
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <META http-equiv=Content-Type content="text/html; charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
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
        <title><?php switch ($id) {
            case '1':
                echo "Ingeniería Petrolera y Gas Natural";
                break;
            case '2':
                echo "Ingenieria de la Producción";
                break;
            case '3':
                echo "Ingeniería Industrial y de Sistemas";
                break;
            case '4':
                echo "Ingeniería Electrónica y Telecomunicaciones";
                break;
            case '5':
                echo "Ingeniería de Sistemas Computacionales";
                break;
            case '6':
                echo "Ingeniería Civil";
                break;
            case '7':
                echo "Ingeniería Financiera";
                break;
            case '8':
                echo "Arquitectura";
                break;            
            case '9':
                echo "Comunicación";
                break;
            case '10':
                echo "Marketing y Logística";
                break;
            case '11':
                echo "Administración de Empresas";
                break;
            case '12':
                echo "Diseño Gráfico";
                break;
            case '13':
                echo "Ingeniería Comercial";
                break;
            case '14':
                echo "Derecho";
                break;
            case '15':
                echo "Economía";
                break;
            case '16':
                echo "Ingeniería Electromecánica";
                break;    
            default:
                echo "Carreras UPB";
                break;
        } 
        ?></title>
        <meta name="viewport" content="width=device-width">
        <link type="text/css" href="../css/jquery.jscrollpane.css" rel="stylesheet" media="all" />
        <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css' />
        <link rel="stylesheet" type="text/css" href="../css/fonts.css">
        
        <?php switch ($id) {
            case '1':
                echo "<link rel='stylesheet' type='text/css' href='../css/style_2.css'>";
                break;
            case '2':
                echo "<link rel='stylesheet' type='text/css' href='../css/style_3.css'>";
                break;
            case '3':
                echo "<link rel='stylesheet' type='text/css' href='../css/style_4.css'>";
                break;
            case '4':
                echo "<link rel='stylesheet' type='text/css' href='../css/style_5.css'>";
                break;
            case '5':
                echo "<link rel='stylesheet' type='text/css' href='../css/style_6.css'>";
                break;
            case '6':
                echo "<link rel='stylesheet' type='text/css' href='../css/style_7.css'>";
                break;
            case '7':
                echo "<link rel='stylesheet' type='text/css' href='../css/style_8.css'>";
                break;
            case '8':
                echo "<link rel='stylesheet' type='text/css' href='../css/style_9.css'>";
                break;            
            case '9':
                echo "<link rel='stylesheet' type='text/css' href='../css/style_10.css'>";
                break;
            case '10':
                echo "<link rel='stylesheet' type='text/css' href='../css/style_11.css'>";
                break;
            case '11':
                echo "<link rel='stylesheet' type='text/css' href='../css/style_12.css'>";
                break;
            case '12':
                echo "<link rel='stylesheet' type='text/css' href='../css/style_13.css'>";
                break;
            case '13':
                echo "<link rel='stylesheet' type='text/css' href='../css/style_14.css'>";
                break;
            case '14':
                echo "<link rel='stylesheet' type='text/css' href='../css/style_15.css'>";
                break;
            case '15':
                echo "<link rel='stylesheet' type='text/css' href='../css/style_16.css'>";
                break;
            case '16':
                echo "<link rel='stylesheet' type='text/css' href='../css/style_17.css'>";
                break;
            case '17':
                echo "<link rel='stylesheet' type='text/css' href='../css/style_18.css'>";
                break;            
            default:
                echo "<link rel='stylesheet' type='text/css' href='../css/style_1.css'>";
                break;
        } 
        ?>   

        <style>
            a{
                text-decoration: none;
            }
            p
                {
                    font-size:1.1em !important; 
                }
            #point
                {
                    content: url(../images/icons/check.png);
                    margin-right: 10px; 
                }
        </style>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <div id="contenedor">
            <header>
             	<a href="../index.php"><div id="logo"></div></a>
            	<ul class="nav">
                	<li><a href="../cbba.php">UPB Cochabamba<i class="icon-home"></i></a></li>
                    <li><a href="#se">Ciencias Empresariales & Derecho (FACED)<i class="icon-home"></i></a>
                        <ul>
                            <li><a href="C13.html">Ing. Comercial</a></li>
                            <li><a href="C7.html">Ing. Financiera</a></li>
                            <li><a href="C11.html">Administraci&oacute;n de Empresas</a></li>
                            <li><a href="C15.html">en Economia</a></li>
                            <li><a href="C12.html">Dise&ntilde;o Gr&aacute;fico</a></li>
                            <li><a href="C10.html">Marketing y Logistica</a></li>
                            <li><a href="C14.html">Derecho</a></li>
                            <li><a href="C9.html">Comunicaci&oacute;n</a></li> 
                        </ul>
                    </li>
                    <li><a href="#se">Ingenier&iacute;a & Arquitectura (FIA)<i class="icon-home"></i></a>
                        <ul>
                            <li><a href="C16.hmtl">Ing. Electromec&aacute;nica</a></li>
                            <li><a href="C6.html">Ing. Civil</a></li>
                            <li><a href="C4.html">Ing. Electronica & Telecomunicaciones</a></li>
                            <li><a href="C2.html">Ing. de la Producci&oacute;n</a></li>
                            <li><a href="C5.html">Ing. de Sistemas Computacionales</a></li>
                            <li><a href="C3.html">Ing. Industrial & de Sistemas</a></li>
                            <li><a href="C1.html">Ing. Petroleo & Gas natural</a></li>
                            <li><a href="C8.html">Arquitectura</a></li> 
                        </ul>
                    </li>
                    <li><a href="">Calendario Acad&eacute;mico<i class="icon-calendar"></i></a></li>                  
                </ul>
            </header>
            <div id="cuerpo2"> 
                <?php while ($reg=mysql_fetch_array($res)) { ?>
                <div id="title">Jefatura de Carrera - <?php echo utf8_encode($reg['carrera']); ?></div>
                <div id="box">
                    <div class="carousel" data-role="carousel">
                        <div class="slides">
                            <div class="slide image" id="slide1">
                                <img src="../images/nn1.jpg"/>
                                <div class="description">
                                    Texto de muestra...
                                </div>
                            </div>
                        </div>
                        <span class="control left">‹</span>
                        <span class="control right">›</span>
                    </div> 
                    <p>
                        <h2><?php echo utf8_encode($reg['director']); ?></h2>
                    </p>
                    <p>    
                        <h2><?php echo utf8_encode($reg['cargo']); ?></h2>
                    </p>
                    <p>    
                        <h2><a style="color: white; font-size: 18px; font-weight: 800; " href="../curriculum.php?ask=<?php echo $reg['idupb_plantel']; ?>" class="fancybox fancybox.ajax">Ver Curriculum</a></h2>
                        <br><br>
                    </p>    
                </div>
                <div id="title"><?php echo utf8_encode($reg['carrera']); ?></div>  
                <div id="box">
					<div class="carousel" data-role="carousel">
                        <div class="slides">
                            <div class="slide image" id="slide1">
                                <img src="../images/nn1.jpg"/>
                                <div class="description">
                                    Texto de muestra...
                                </div>
                            </div>
                            <div class="slide mixed" id="slide2">
                                <img src="../images/nn2.jpg"/>
                                <div class="description">
                                    Texto de muestra...
                                </div>
                            </div>
                            <div class="slide mixed" id="slide2">
                                <img src="../images/nn1.jpg"/>
                                <div class="description">
                                    Texto de muestra...
                                </div>
                            </div>
                            <div class="slide mixed" id="slide1">
                                <img src="../images/nn2.jpg"/>
                                <div class="description">
                                    Texto de muestra...
                                </div>
                            </div>
                        </div>
                        <span class="control left">‹</span>
                        <span class="control right">›</span>
 					</div>                   
                    <?php echo utf8_encode($reg['porque']); ?>
                </div>
                <div id="title">Perfil Profesional</div>
                <div id="box">                  
                    <?php echo utf8_encode($reg['perfil']); ?>  
                </div>
                <div id="title">&Aacute;reas de Trabajo</div>
                <div id="box">                  
                    <?php echo utf8_encode($reg['areas']); ?>
                    <div id="descarga"><a href="../informacion.php">Admisiones</a></div>  	
                    <div id="descarga"><a target="_blank" href='<?php switch ($id) {
                    case '1':
                        echo "../mallas/Ingeniería Petrolera y Gas Natural.pdf";
                        break;
                    case '2':
                        echo "../mallas/Ingenieria de la Producción.pdf";
                        break;
                    case '3':
                        echo "../mallas/Ingeniería Industrial y de Sistemas.pdf";
                        break;
                    case '4':
                        echo "../mallas/Ingeniería Electrónica y Telecomunicaciones.pdf";
                        break;
                    case '5':
                        echo "../mallas/Ingeniería de Sistemas Computacionales.pdf";
                        break;
                    case '6':
                        echo "../mallas/Ingeniería Civil.pdf";
                        break;
                    case '7':
                        echo "../mallas/Ingeniería Financiera.pdf";
                        break;
                    case '8':
                        echo "../mallas/Arquitectura.pdf";
                        break;            
                    case '9':
                        echo "../mallas/Comunicación.pdf";
                        break;
                    case '10':
                        echo "../mallas/Marketing y Logística.pdf";
                        break;
                    case '11':
                        echo "../mallas/Administración de Empresas.pdf";
                        break;
                    case '12':
                        echo "../mallas/Diseño Gráfico.pdf";
                        break;
                    case '13':
                        echo "../mallas/Ingeniería Comercial.pdf";
                        break;
                    case '14':
                        echo "../mallas/Derecho.pdf";
                        break;
                    case '15':
                        echo "../mallas/Economía.pdf";
                        break;
                    case '16':
                        echo "../mallas/Ingeniería Electromecánica.pdf";
                        break;
                    default:
                        echo "../mallas/Ingeniería Petrolera y Gas Natural.pdf";
                        break;
                } 
        ?>'>Malla Curricular</a></div>   
                </div>
                <?php } ?>
            </div>
        </div>
		<footer>
          <ul id="dirC">
            <li><span id="dir">Campus Cochabamba</span></li>
            <li><span id="dir">Direcci&oacute;n: </span><span id="nomD">Av. Capit&aacute;n Victor Ust&aacute;riz km 6 1/2</span></li>
            <li><span id="dir">Tel&eacute;fono: </span><span id="nomD">+591 - 4 4375638</span></li> 
          </ul>
          <ul id="dirL">
              <li><span id="dir">Campus La Paz</span></li>
              <li><span id="dir">Direcci&oacute;n: </span><span id="nomD">Camino Achokalla Km. 3.5</span></li>
              <li><span id="dir">Tel&eacute;fono: </span><span id="nomD">+591 - 2 2165700 </span></li> 
          </ul>
          <div id="soc">
            <div id="google_translate_element"></div>
            <ul id="social">
              <a href=""><img src="../images/t.png" width="20" height="20"></a>
              <a href=""><img src="../images/f.png" width="20" height="20"></a>
              <a href=""><img src="../images/g.png" width="20" height="20"></a>
            </ul>
          </div>
          <script type="text/javascript">
            function googleTranslateElementInit() {
            new google.translate.TranslateElement({pageLanguage: 'es', includedLanguages: 'en,es,pt', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
          }
        </script>
        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        </footer>
        
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="../js/carousel.js"></script>
        <script type="text/javascript" src="../js/jquery.fancybox-1.3.1.pack.js"></script>
        <script type="text/javascript" src="../js/libs/jquery.mousewheel.js"></script>
        <script type="text/javascript" src="../js/libs/jquery.jscrollpane.min.js"></script>

        <script  src="js/jquery.js"></script>
        <script type="text/javascript" src="../js/mustache.js"></script>
    
        <script type="text/javascript" src="../js/fronty.js"></script>
        <script type="text/javascript" src="../js/about.js"></script>
        <script type="text/javascript" src="../source/jquery.fancybox.js?v=2.1.4"></script>
        <script type="text/javascript" src="../js/fancy_box.js"></script>         
    </body>
</html>
