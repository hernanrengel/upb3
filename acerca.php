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
    <div id="about"><br/><br/><br/>
            <div id="menu-about">
                <div id="video">
                    <iframe width="277" height="190" src="http://www.youtube.com/embed/rDd08Wf_7tw" frameborder="0" allowfullscreen></iframe>
                </div>
              <ul class="accordion dark" data-role="accordion">
                    <li class="active">
                        <a href="#">&iquest;Qu&eacute; es la UPB?</a>
                        <div>
                            <ul>
                                <li onclick="cargar('tmp1.html')">Bienvenida</li>
                                <li onclick="cargar('tmp3.html')">Patrocinadores</li>
                                <li onclick="cargar('tmp2.html')">Directorio</li>
                                <li onclick="cargar('tmp4.html')">Filosof&iacute;a Institucional</li>
                                <!--
                                <a href=""><li>Sedes</li></a>
                                <a href=""><li>Organizaci&oacute;n</li></a>
                                -->
                                <li onclick="cargar('tmp5.html')">Historia de la UPB</li>
                                <li onclick="cargar('tmp6.html')">Estatutos y Reglamentos</li></a>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#">Gobierno y Administraci&oacute;n</a>
                         <div>
                            <ul>
                                <a href="gobierno.php"><li>Gobierno y Administraci&oacute;n</li></a>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#">Convenios y Membresias</a>
                        <div>
                            <ul>
                                <a href="convenios.php"><li>Membresias</li></a>
                                <a href="convenios-empresariales.php"><li>Organizaciones Empresariales</li></a>
                                <a href="convenios-nacionales.php"><li>Organizaciones Nacionales</li></a>
                                <a href="convenios-internacionales.php"><li>Organizaciones Internacionales</li></a>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#">Acreditaciones y Certificaciones</a>
                        <div>
                            <ul>
                                <a href="acreditaciones.php"><li>Mercosur</li></a>
                                <a href="acreditaciones.php#certificaciones"><li>TUV - Certificación ISO</li></a>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        <div id="content-about">
                
            </div>
                
        </div>
        <!--
        <div id="feedback" style="height: 400px !important;">
          <div id="publications">
            <div id="title_float">Decanatura Admisiones y Asuntos Estudiantiles Cochabamba</div>
                <div id="grid" style="margin-top: 40px;">
                    <br>
                    <br>
                    <div class="hex inf" id="hex1">
                        <a href="#" style="" title="Hexagono" class="bg-dark-green">
                            <div class="hex-1"></div>
                            <div class="hex-2"></div>
                            <span>Mgr. Gustavo W. Molina Dávalos</span>
                            <p>Decano de Admisiones y Asuntos Estudiantiles gmolina@upb.edu Int. 255</p>
                        </a>
                    </div>
                    <div class="hex" id="hex2">
                        <a href="#" style="" title="Hexagono"  class="bg-4">
                            <div class="hex-1"></div>
                            <div class="hex-2"></div>
                        </a>
                    </div>
                    <div class="hex" id="hex3">
                        <a href="#" style="" title="Hexagono" class="bg-darken">
                            <div class="hex-1"></div>
                            <div class="hex-2"></div>
                            <span>Mgr. Carla Gomez</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt.</p>
                        </a>
                    </div>
                     <div class="hex" id="hex4">
                        <a href="#" style="" title="Hexagono" class="bg-4">
                            <div class="hex-1"></div>
                            <div class="hex-2"></div>
                        </a>
                    </div>
                </div>
            </div>
            
            <div id="navigation">
                <ul>
                    <li><span class="left_arrow"></span><i>Bienvenidos a la UPB</i></li>
                    <li><span class="left_arrow"></span><i>Futuros Estudiantes</i></li>
                    <li><span class="left_arrow"></span><i>Estudiantes Regulares</i></li>
                    <li><span class="left_arrow"></span><i>Facultades & Profesorado</i></li>
                    <li><span class="left_arrow"></span><i>Graduados & Profesionales</i></li>
                </ul>
            </div>
            	
        </div>


        <div id="feedback" style="height: 550px !important;">
          <div id="publications">
            <div id="title_float">Decanatura Admisiones y Asuntos Estudiantiles La Paz</div>
                <div id="grid" style="margin-top: 40px;">
                    <br>
                    <br>
                    <div class="hex" id="hex8">
                        <a href="#" style="" title="Hexagono" class="bg-dark-green">
                            <div class="hex-1"></div>
                            <div class="hex-2"></div>
                            <span>Oscar Valdivieso</span>
                            <p>Decano de Admisiones y Asuntos Estudiantiles oscarvaldivieso@lp.upb.edu Int. 124</p>
                        </a>
                    </div>
                     <div class="hex" id="hex7">
                        <a href="#" style="" title="Hexagono" class="bg-dark-blue">
                            <div class="hex-1"></div>
                            <div class="hex-2"></div>
                            <span>Mgr. Marcela Quiroga</span>
                            <p>Directora Asuntos Estudiantiles marcelaquiroga@lp.upb.edu Int. 116</p>
                        </a>
                    </div>
                     <div class="hex" id="hex6">
                        <a href="#" style="" title="Hexagono" class="bg-light-blue">
                            <div class="hex-1"></div>
                            <div class="hex-2"></div>
                            <span>Geraldine Bravo Coello</span>
                            <p>Asesora de Admisiones geraldinebravo@lp.upb.edu Int. 132 Cel: 76200002</p>
                        </a>
                    </div>
                    <div class="hex" id="hex5">
                        <a href="#" style="" title="Hexagono" class="bg-darken">
                            <div class="hex-1"></div>
                            <div class="hex-2"></div>
                            <span>Mgr. Cecilia Ergueta</span>
                            <p>Asesora de Admisiones ceciliaergueta@lp.upb.edu Int.131 Cel: 70101929</p>
                        </a>
                    </div>
                    <div class="hex inf" id="hex9">
                        <a href="#" style="" title="Hexagono" class="bg-4">
                            <div class="hex-1"></div>
                            <div class="hex-2"></div>
                        </a>
                    </div>
                    <div class="hex" id="hex10">
                         <a href="#" style="" title="Hexagono"  class="bg-4">
                            <div class="hex-1"></div>
                            <div class="hex-2"></div>
                        </a>
                    </div>
                    <div class="hex" id="hex11">
                         <a href="#" style="" title="Hexagono"  class="bg-4">
                            <div class="hex-1"></div>
                            <div class="hex-2"></div>
                        </a>
                    </div>
                    <div class="hex" id="hex12">
                        <a href="#" style="" title="Hexagono" class="bg-4">
                            <div class="hex-1"></div>
                            <div class="hex-2"></div>
                        </a>    
                    </div>
                </div>
            </div>
            
            <div id="navigation">
                <ul>
                    <li><span class="left_arrow"></span><i>Bienvenidos a la UPB</i></li>
                    <li><span class="left_arrow"></span><i>Futuros Estudiantes</i></li>
                    <li><span class="left_arrow"></span><i>Estudiantes Regulares</i></li>
                    <li><span class="left_arrow"></span><i>Facultades & Profesorado</i></li>
                    <li><span class="left_arrow"></span><i>Graduados & Profesionales</i></li>
                </ul>
            </div>
             
        </div>
        

   			
        <div id="calendar">
            <span class="title" id="open_grad">Ver los Pr&oacute;ximos Eventos <i class="icon-arrow-down-3"></i></span><br/><br/><br/><br/><br/> 
          Proximos eventos con calendarios    
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
            -->
        </div>
        <!-- <div class="line"></div> -->
        <!--
        <div id="news">
            <div id="social_coments">
                <span class="desc">PATROCINADORES</span>
                <div id="coments" class="">
                    <div class="slides" id='coment_slides'>
                        <div class="coment">
                            <p id="carrera">
                                <img src="images/cepb2.jpg"/>
                                <span class="date">CEPB <strong>(Confederación de empresarios privados de Bolivia)</strong></span>
                                Promueve y participa activamente en el proceso de desarrollo económico y 
                                social de Bolivia, sustentando la filosofía de la libre empresa y la economía 
                                de mercado como base esencial de desarrollo en nuestro país. 

                                La CEPB agrupa a pequeñas, medianas y grandes empresas bolivianas. Se centra en la 
                                representación y defensa de los intereses más serios del empresariado que la 
                                conforma, ante instituciones, organismos públicos y agentes sociales.
                            </p>
                        </div>
                        <div class="coment">
                             <p id="carrera">
                                <img src="images/cepc2.jpg"/>
                                <span class="date">FEPC<strong>(Federación de entidades empresariales privadas de Cochabamba)</strong></span>
                                La FEPC es una organización sin fines de lucro que integra a los distintos gremios 
                                empresariales privados del departamento de Cochabamba. El fin de esta 
                                organización es representar y defender los intereses de sus miembros y de 
                                la comunidad empresarial en el ámbito regional, nacional e internacional 
                                para promover el desarrollo económico y social del departamento.

                                Demás de defender los intereses de sus afiliados y propiciar el 
                                desarrollo económico de la región, la FEPC también aportó al desarrollo 
                                de los siguientes programas, proyectos y fundaciones: Instituto de formación 
                                y capacitación laboral (INFOCAL), Universidad Privada Boliviana (UPB), 
                                Instituto para el desarrollo de empresarios y administradores (IDEA) y 
                                Feria Internacional de Cochabamba, Bolivia (FEICO-BOL).
                            </p>
                        </div>
                    </div>
                </div>               
            </div>
            <div id="posts">
                <article id="panel">
                    <div id="figure">
                        <img src="images/colacion-de-grado-1.jpg" height="3456" width="5184" />
                        <span class="arrow_izq"></span>
                        <span class="expand"></span>
                        <span class="arrow_der"></span>
                        <span class="title">GRAN COLACI&Oacute;N DE GRADO 2013 <sub></sub></span>
                    </div>
                    <p id="carrera" style="overflow-y: scroll; overflow-x: none;">El acto de colación de grado es una ceremonia de clausura de un periodo académico, 
                    una vez que los alumnos han logrado completar todos los requisitos de su plan de estudios. El acto 
                    hereda la pompa y boato de las celebraciones académicas que se remontan al año 1088, cuando se 
                    fundó la primera Universidad del mundo en la ciudad de Bolonia.
                    La toga es la indumentaria que cubre a los académicos. Destacan en ella las mangas abiertas que 
                    caen hasta la mano. En estas mangas los profesores universitarios lucen franjas de terciopelo que 
                    por su número representan: una el grado de licenciatura, dos el grado de maestría y tres el grado 
                    doctoral. El rector de la Universidad lleva cuatro franjas como distintivo de su alto cargo.
                    La capa, por sus colores, es el distintivo de la Universidad y del área de conocimiento. Las que 
                    lucirán los académicos en este acto llevan los colores azul y amarillo de la Universidad Privada 
                    Boliviana y un borde del color que universalmente se reconoce como propio del área del docente.
                    La boina o el birrete coronan el atuendo con varios símbolos: la borla que cuelga al lado izquierdo 
                    es señal del grado académico superior ya obtenido (los graduandos ingresan al acto con la borla 
                    del birrete en el lado derecho) y quienes ostentan el grado doctoral se distinguen pues cubren su 
                    cabeza con una boina octogonal que representa este grado y el privilegio de ostentarlo.
                    </p>
                </article>
                <div id="list">
                    <article class="post">
                        <img src="images/colacion-de-grado-2.jpg" height="5184" width="3456" />
                        <span class="title">Colaci&oacute;n de Grado</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </article>
                    <article class="post">
                        <img src="images/colacion-de-grado-3.jpg" height="3456" width="5184" />
                        <span class="title">Colaci&oacute;n de Grado</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </article>
                    <article class="post">
                        <img src="images/g2.jpg" />
                        <span class="title">Colaci&oacute;n de Grado</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </article>
                </div>
            </div>
        </div>
        -->
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

