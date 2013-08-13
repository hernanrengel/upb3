	<?php require_once("header.php");?>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <div id="contenedor">
        	<header>
             	<a href="index.php"><div id="logo"></div></a>
            	<ul class="nav">
                	<li><a href="#acerca">Acerca del Centro<i class="icon-home"></i></a></li>
                    <li><a href="#areas">&Aacute;reas de Capacitaci&oacute;n<i class="icon-home"></i></a></li>
                    <li><a href="#continua">Formaci&oacute;n Cont&iacute;nua<i class="icon-home"></i></a></li>
                    <li><a href="">Intranet<i class="icon-home"></i></a></li>
                    <li><a href="servicios.php#servicio">Nuestros Sevicios<i class="icon-home"></i></a></li>
                    <li><a href="">UPB Net<i class="icon-home"></i></a></li>
                    <li><a href="servicios.php#becas">Becas FEPC<i class="icon-home"></i></a></li>                  
                </ul>
            </header>
            <div id="cuerpo2">
                <a name="acerca"></a>
                <div id="title">Extensi&oacute;n Universitaria</div>  
                <div id="box">
                    <p id="carrera">El Centro de Extensión Universitaria de la Universidad Privada Boliviana nace el 21 de octubre de 2005 con el propósito de: “llegar a la mayor parte de los ciudadanos para transmitirles conocimiento e información actualizada en materias centrales de la ciencia social”.</p>

<p id="carrera">Nuestros clientes encuentran áreas intelectuales y del desarrollo humano para ejercitar la mente y el espíritu. Los cursos están dirigidos a profesionales, técnicos, padres de familia, niños, adolescentes, estudiantes y al ciudadano en general.</p>

<p id="carrera">La estructura de la carrera incluye un alto número de materias del área administrativa y gerencial que permiten además adquirir habilidades para la toma de decisiones y un conocimiento global de la organización.</p>
                </div>     
            	<a name="areas"></a>
                <div id="title">&Aacute;reas de Capacitaci&oacute;n</div>  
                	<div id="box">
                		<p id="carrera">Ofrecemos cursos de capacitación en las siguientes áreas:</p>
                    		<div id="areas">
                                <ul>
                                    <li>Empresarial</li>
                                    <li>Capital Intelectual</li>
                                    <li>Liderazgo y trabajo en equipo</li>
                                    <li>Gestión de Recursos Humanos</li>
                                    <li>Marketing y Ventas</li>
                                    <li>Industrial</li>
                                    <li>Medioambiente y calidad</li>
                                    <li>Turismo y Hotelería</li>
                                    <li>Protocolo empresarial y etiqueta</li>
                                    <li>Emprendimiento</li>
                                    <li>Ofimática y computación</li>
                                    <li>Diseño Gráfico y Fotografía</li>
                                    <li>Habilidades personales e interpersonale</li>
                                    <li>Otras: Cocina, Ajedrez, Dridge</li>
                                </ul>
                    		</div>
                		</div>
                        <a name="continua"></a>
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
    </body>
</html>
