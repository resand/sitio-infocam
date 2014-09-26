<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8">
        <title>INFOCAM - Instituto de Información Estadística, Geográfica y Catastral del Estado de Campeche</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="infocam,sistemas de informacion campeche, INFOCAM">
        <meta name="description" content="El INFOCAM se establece como un órgano descentralizado de la Administración Pública y sectorizado a la Secretaría de Gobierno con el fin de Procurar la integración, modernización y funcionalidad permanente de un Sistema Integral de Información denominada de Interés Estatal en los términos socioeconómicos, geográficos y catastrales, para poder dotar al estado de instrumentos para la planeación, evaluación y toma de decisiones.">
        <meta name="author" content="resand">

        <!-- CSS -->
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/font-awesome.css">
        <link rel="stylesheet" href="css/modal.css">    
        <link rel="stylesheet" href="css/estilos.css">
        <link rel="stylesheet" href="css/fuentes.css">
        <link rel="stylesheet" href="assets/css/style.css">
        
        <link rel="shortcut icon" href="favicon.ico">

        <!-- Javascript General -->
        <script src="assets/js/jquery-1.8.2.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap-dropdown.js"></script>
        <script src="js/funciones.js"></script>

        <!-- CSS & JS GALERIA -->
        <link rel="stylesheet" href="css/galeria/touchTouch.css">
        <link rel="stylesheet" href="css/galeria/stylo.css">
        <script type="text/javascript" src="js/galeria/superfish.js"></script>
        <script type="text/javascript" src="js/galeria/jquery.cookie.js"></script>
        <script src="js/galeria/jquery.easing.1.3.js"></script>  
        <script src="js/galeria/touchTouch.jquery.js"></script>
        <script src="js/galeria/touchTouch.jquery1.js"></script> 
        <script src="js/galeria/touchTouch.jquery2.js"></script>
        <!-- script para las galerias -->
        <script>  
        jQuery(window).load(function() {   
                jQuery('.magnifier').touchTouch();
                jQuery('.spinner').animate({'opacity':0},1000,'easeOutCubic',function (){jQuery(this).css('display','none')});
                jQuery('.magnifier1').touchTouch1();
                jQuery('.spinner1').animate({'opacity':0},1000,'easeOutCubic',function (){jQuery(this).css('display','none')});
                jQuery('.magnifier2').touchTouch2();
                jQuery('.spinner2').animate({'opacity':0},1000,'easeOutCubic',function (){jQuery(this).css('display','none')});
        });
        </script>
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <!-- Favicon and touch icons -->
    </head>

    <body>
        <!-- Header -->
        <div class="container" id="head">
            <div class="header row">
                <div class="span12">
                    <div class="navbar">
                        <a href="index.php"><img class="logo" src="images/infocam.png" alt="INFOCAM"></a>
                        <div class="navbar-inner logo2">
                            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </a>
                            <div class="nav-collapse collapse">
                                <ul class="nav pull-left">
                                    <li id="home" class="current-page select">
                                        <a href="#"><i class="icon-home"></i><br />Inicio</a>
                                    </li>
                                    <li id="sistemas" class="select">
                                        <a href="#dsistemas"><i class="icon-th-list menu-icon"></i><br />Sistemas</a>
                                    </li>
                                    <li id="quienes" class="select">
                                        <a href="#dquienes"><i class="icon-question-sign menu-icon"></i><br />Quienes Somos</a>
                                    </li>
                                    <li id="organigrama" class="select">
                                        <a href="#dorganigrama"><i class="icon-align-center menu-icon"></i><br />Organigrama</a>
                                    </li>
                                    <li id="funciones" class="select">
                                        <a href="#dfunciones"><i class="icon-tasks menu-icon"></i><br />Funciones</a>
                                    </li>
                                    <li id="directorio" class="select">
                                        <a href="#ddirectorio"><i class="icon-user menu-icon"></i><br />Directorio</a>
                                    </li>
                                    <li id="home" class="select">
                                        <?php if (strpos($_SERVER['REMOTE_ADDR'],"10.100.1") === false){ $href = "http://mail.infocam.gob.mx:2080/webmail/index.php"; } else{ $href =  "http://10.100.2.15/webmail/index.php"; } ?>
                                        <a href="<? echo ($href) ?>" target="_blank" ><i class="icon-envelope-alt menu-icon"></i><br />Correo Institucional</a>
                                    </li>
                                    <li id="informacion" class="select">
                                        <a href="#dinformacion"><i class="icon-info-sign menu-icon"></i><br /><strong>Información</strong></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
      <div id="ancla"></div>
   <!---------------------- INICIO DEL CONTENIDO DEL INDEX ---------------------->
        <div id="dhome" class="seccion">
             <!-- Noticia -->
                <div class="row">
                    <div class="span1"><!--Div vacio para ajustar contenido--></div>
                    <div class="span2">
                    </div>
                    <div class="span8">
                    <img src="images/index/pobresa_2013_banner.jpg" alt="" style="width:100%;height:100%;">
                    <h5 id="ico">Medición de la pobreza en Campeche - <a href="pdf/index/Pobreza_2012.pdf" target="_blank">Ver el documento</a></h5>
                    </div>

                    <div class="span1"><!--Div vacio para ajustar contenido--></div>
                </div><br>
            <!-- Fin noticia-->

            <!-- Noticia -->
                <div class="row">
                    <div class="span3"></div>
                  <div class="span9">
                    <h3 class="titulo_left">OGC Certifica Sistema de Gestión Catastral del INFOCAM</h3>
                  </div>
                </div>

                <div class="row">
                    <div class="span1"><!--Div vacio para ajustar contenido--></div>

                    <div class="span2">
                    <a href="http://www.opengeospatial.org/resource/products/details/?pid=1120"><img src="images/index/certificado_ogc.png" alt="" style="width:150px;height:150px;"></a>
                    <span style="display:block;font-size:11px; font-weight:bolder; ">The International Statistical Institute</span>
                    <span style="display:block;font-size:11px;">Miembro Corporativo</span>
                    </div>
                    <div class="span8">
                    <p class="lead">El Open Geospatial Consortium (OGC) es un consorcio de la industria internacional de 480 empresas, agencias gubernamentales y universidades que participan en un proceso de consenso para desarrollar estándares para soluciones interoperables en la industria de las TI. Los Estándares OGC® respaldan soluciones interoperables para geoactivar la Web.</p>
                    
                    </div>

                    <div class="span1"><!--Div vacio para ajustar contenido--></div>
                </div><br>
            <!-- Fin noticia-->

            <!-- Noticia -->
                <div class="row">
                    <div class="span3"></div>
                  <div class="span9">
                    <h3 class="titulo_left">INFOCAM Miembro Coorporativo del Instituto Internacional de Estadística</h3>
                  </div>
                </div>

                <div class="row">
                    <div class="span1"><!--Div vacio para ajustar contenido--></div>

                    <div class="span2">
                    <a href="http://www.isi-web.org/"><img src="images/index/ISI.jpg" alt="" style="width:150px;height:150px;"></a>
                    <span style="display:block;font-size:11px; font-weight:bolder; ">The International Statistical Institute</span>
                    <span style="display:block;font-size:11px;">Miembro Corporativo</span>
                    </div>
                    <div class="span8">
                    <p class="lead">A partir del mes de febrero de 2013, el Instituto de Información Estadística, Geográfica y Catastral del Estado de Campeche (INFOCAM) es miembro corporativo del Instituto Internacional de Estadística (The International Statistical Institute, ISI).</p>
                    <p class="lead">El ISI es una de las asociaciones de estadística más importantes del mundo y fue fundada en 1885, sin embargo ha tenido congresos internacionales desde 1853. Publica una variedad de libros y revistas, y organiza su Congreso Mundial cada dos años (ISI World Statistics Congress). Su oficina permanente está ubicada en La Haya, Holanda.</p>
                    </div>

                    <div class="span1"><!--Div vacio para ajustar contenido--></div>
                </div><br>
            <!-- Fin noticia-->

            <!-- Noticia -->
                <div class="row">
                    <div class="span3"></div>
                  <div class="span9">
                    <h3 class="titulo_left">2013 Año Internacional de la Estadística</h3>
                  </div>
                </div>

                <div class="row">
                    <div class="span1"><!--Div vacio para ajustar contenido--></div>

                    <div class="span2">
                    <a href="http://www.isi-web.org/"><img src="images/index/Statistics.png" alt=""></a>
                    </div>
                    <div class="span8">
                    <p class="lead">El Instituto de Información Estadística, Geográfica y Catastral del Estado de Campeche (INFOCAM) y más de 1 mil 500 organizaciones de 111 países unirán sus esfuerzos en 2013 para promover el Año Internacional de la Estadística (Statistics 2013), una iniciativa mundial que resaltará la contribución del campo de la estadística en la búsqueda de soluciones a los retos globales.</p>
                    <iframe width="80%" height="300" src="http://www.youtube.com/embed/O_UeYczBbPg" frameborder="0" allowfullscreen></iframe> 
                    </div>

                    <div class="span1"><!--Div vacio para ajustar contenido--></div>
                </div><br>
            <!-- Fin noticia-->
            
         </div>
   <!---------------------- FIN DEL CONTENIDO DEL INDEX ---------------------->

        <div id="dsistemas" class="seccion"><!-- Sistemas -->
            <!-- Titulo de la página -->
        <div class="page-title">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <i class="icon-th-list page-title-icon"></i>
                        <h2>Sistemas de Información en Línea</h2>
                    </div>
                </div>
            </div>
        </div>

        <!-- Página -->
        <div class="portfolio portfolio-page container">
            
            <div class="row">
                <div class="span2">
                    <!--Div vacio para ajustar contenido-->
                </div>
                <div id="content-sistemas" class="span8">
                    <table id="tbl-sistemas" class="table table-hover">
                        <tr>
                            <td class="td-img">
                                <a href="http://www.infocam.gob.mx/infocam/potencial"><img src="images/botonv.png" class="img-sistemas verde "></a>
                            </td>
                            <td>
                                <h3>Estudio para la Determinación del Potencial Productivo Agropecuario</h3>
                                <p>Módulo de Análisis Espacial del SIG Catastral</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="td-img">
                                <a href="mapa_cobertura/"><img src="images/botonv.png" class="img-sistemas cafe "></a>
                            </td>
                            <td>
                                <h3>Cruzada Nacional contra el Hambre</h3>
                                <p>Mapa de Cobertura de Servicios</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="td-img">
                                <a href="http://108.171.180.168/informe/"><img src="images/botonv.png" class="img-sistemas cafe img-circle"></a>
                            </td>
                            <td>
                                <h3>Texto del Informe</h3>
                                <p>Captura del Informe Escrito</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="td-img">
                                <a href="http://www.infocam.gob.mx/anexo"><img src="images/botonv.png" class="img-sistemas verde img-circle"></a>
                            </td>
                            <td>
                                <h3>Anexo Estadístico</h3>
                                <p>Anexo Estadístico en línea</p>
                            </td>
                        </tr>
                        <tr>
                             <td class="td-img">
                                <a href="http://carmen.infocam.gob.mx/sgc"><img src="images/botonv.png" class="img-sistemas verde2 img-circle"></a>
                            </td>
                            <td>
                                <h3>Sistema de Gestión Catastral</h3>
                                <p>Prototipo del Sistema Integral de Información Geográfica y Catastral</p>
                            </td>
                        </tr>
                        <tr>
                             <td class="td-img">
                                <a href="http://www.infocam.gob.mx/almanaque"><img src="images/botonv.png" class="img-sistemas cafe2 img-circle"></a>
                            </td>
                            <td>
                                <h3>Almanaque</h3>
                                <p>Almanaque Ejecutivo Digital - Febrero 2013</p>
                            </td>
                        </tr>
                        <tr>
                             <td class="td-img">
                                <a href="http://www.infocam.gob.mx/sigbi"><img src="images/botonv.png" class="img-sistemas amarillo img-circle"></a>
                            </td>
                            <td>
                                <h3>Ubicación de los predios de Control Patrimonial</h3>
                                <p>Sistema de Información para la Gestión y Control de los Bienes Inmuebles del Estado de Campeche</p>
                            </td>
                        </tr>
                         <tr>
                             <td class="td-img">
                                <a href="http://www.infocam.gob.mx/vu/index.html"><img src="images/botonv.png" class="img-sistemas cafe img-circle"></a>
                            </td>
                            <td>
                                <h3>URBICAM</h3>
                                <p>Sistema de Información Ciudadana</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="td-img">
                                <a href="https://wms.infocam.gob.mx/inventario/"><img src="images/botonv.png" class="img-sistemas verde "></a>
                            </td>
                            <td>
                                <h3>Inventario de la Obra Estatal</h3>
                                <p>Sistema de Información Geográfica para la Administración y Seguimiento de la Obra Estatal</p>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="span2">
                    <!--Div vacio para ajustar contenido-->
                </div>
            </div>
        </div>
        </div><!-- fin sistemas-->

        <div id="dquienes" class="seccion"><!-- Quienes somos -->
             <!-- Titulo de la página -->
        <div class="page-title">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <i class="icon-question-sign page-title-icon"></i>
                        <h2>Quienes Somos</h2>
                    </div>
                </div>
            </div>
        </div>

        <!-- Página -->
        <div class="portfolio portfolio-page container">
            <div class="row">
                <div class="portfolio-navigator span12">
                    <h4 class="filter-portfolio">
                        <p id="active-imgs">InfoCam</p>
                    </h4>
                </div>
            </div>
            <div class="row">
                <div class="span1">
                    <!--Div vacio para ajustar contenido-->
                </div>

                <div class="span10">
                    <p class="lead">El INFOCAM se establece como un órgano descentralizado de la Administración Pública y sectorizado a la Secretaría de Gobierno con el fin de Procurar la integración, modernización y funcionalidad permanente de un Sistema Integral de Información denominada de Interés Estatal en los términos socioeconómicos, geográficos y catastrales, para poder dotar al estado de instrumentos para la planeación, evaluación y toma de decisiones. </p>

                    <h2>Misión</h2>
                    <p class="lead">Garantizar la disponibilidad de la información estadística, territorial y catastral integrando la generada por el Sistema Estatal de Información, y produciendo instrumentos de consulta y análisis integral para la planeación, diseño, implementación y evaluación de las políticas públicas y la mejor toma de decisiones, que coadyuve con el desarrollo general del Estado.</p>

                     <h2>Visión</h2>
                    <p class="lead">Consolidarse un centro de Información Geoespacial para la toma de decisiones y elegirse como la principal fuente de información en materia Estadística, Geográfica y Catastral en el Estado de Campeche.</p>

                    <img src="images/quienes_somos.jpg" class="img-polaroid">
                </div>
                
                <div class="span1">
                    <!--Div vacio para ajustar contenido-->
                </div>
            </div>
        </div>
        </div><!-- fin Quienes somos -->

        <div id="dorganigrama" class="seccion"><!-- Organigrama -->
         <!-- Titulo de la página -->
        <div class="page-title">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <i class="icon-align-center page-title-icon"></i>
                        <h2>Organigrama</h2>
                    </div>
                </div>
            </div>
        </div>

        <!-- Página -->
        <div class="portfolio portfolio-page container">
         
            <div class="row">
                <div class="span1">
                    <!--Div vacio para ajustar contenido-->
                </div>

                <div class="span10">
                    <img src="images/organigrama_para_revision.png" width="100%">
                </div>
                
                <div class="span1">
                    <!--Div vacio para ajustar contenido-->
                </div>
               
            </div>
        </div>
        </div><!-- fin Organigrama -->

        <div id="dfunciones" class="seccion"><!-- Funciones -->
         <!-- Titulo de la página -->
        <div class="page-title">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <i class="icon-tasks page-title-icon"></i>
                        <h2>Funciones</h2>
                    </div>
                </div>
            </div>
        </div>

        <!-- Página -->
        <div class="portfolio portfolio-page container">
            
            <div class="row">
                <div class="span1">
                    <!--Div vacio para ajustar contenido-->
                </div>

                <div class="span10">
                   <ol class="funciones">
                       <li>Definir con las entidades y dependencias la Información de Interés Estatal, existente o inexistente, correspondiente a su sector;</li>
                       <li>Integrar el catálogo de Información de Interés Estatal;</li>
                       <li>Establecer mecanismos y acuerdos con las entidades y dependencias para que la Información de Interés Estatal cumpla con las características de certeza, periodicidad y oportunidad, y que esté elaborada con una metodología científicamente sustentada;</li>
                       <li>Conformar el reservorio de Información de Interés Estatal, a partir del flujo de la información suministrada por las entidades y dependencias, definida en los términos de los incisos I y III del presente artículo;</li>
                       <li>Promover la adopción de métodos y normas técnicas en la captación de los datos objeto de registro, conforme la Ley del Sistema Nacional de Estadística y Geografía, en coordinación con las autoridades que les competa administrar directorios de personas físicas o morales, catastros, registros públicos de la propiedad y del comercio, padrones, inventarios y demás registros administrativos que permitan obtener Información;</li>
                       <li>Incentivar el incremento de la calidad y perfeccionamiento metodológico de la Información de Interés Estatal existente;</li>
                       <li>Generar y administrar un sistema de consulta y disposición gubernamental de la Información de Interés Estatal;</li>
                       <li>Promover y en su caso desarrollar los proyectos para generar la Información de Interés Estatal inexistente;</li>
                       <li>Elaborar instrumentos de análisis, interpretación y evaluación de la información que promuevan la mejor toma de decisiones;</li>
                       <li>Integrar, analizar y producir instrumentos de difusión de información pública oficial relevante para el Estado;</li>
                       <li>Garantizar la disponibilidad de la información para el sistema de seguimiento y evaluación de la gestión pública, y</li>
                       <li>Proveer a las entidades y dependencias de la información o los análisis que soliciten para sus necesidades de planeación y toma de decisiones, mediante la celebración de convenios o acuerdos y a petición explícita.</li>
                   </ol>
                </div>
                
                <div class="span1">
                    <!--Div vacio para ajustar contenido-->
                </div>
               
            </div>
        </div>
        </div><!-- fin Funciones -->

         <div id="ddirectorio" class="seccion"><!-- Directorio -->
         <!-- Titulo de la página -->
        <div class="page-title">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <i class="icon-user page-title-icon"></i>
                        <h2>Directorio</h2>
                    </div>
                </div>
            </div>
        </div>

        <!-- Página -->
        <div class="portfolio portfolio-page container">
           
            <div class="row">
                <div class="span1">
                    <!--Div vacio para ajustar contenido-->
                </div>

                <div class="span10 content-principal">
                   <table class="table">
                       <tr class="titulo">
                           <th>Área de Adscripción</th>
                           <th>Nombre</th>
                           <th>Nivel</th>
                           <th>Puesto</th>
                           <th>Teléfono</th>
                           <th>Ext.</th>
                           <th>Correo Electrónico</th>
                       </tr>
                      <tr class="departamento">
                          <td>Dirección General</td>
                          <td>Casanova Rosado Aida Amine</td>
                          <td>4.3</td>
                          <td>Director General</td>
                          <td>81 65959</td>
                          <td>101</td>
                          <td><a href="mailto:cyramine@infocam.gob.mx">cyramine@infocam.gob.mx</a></td>
                      </tr>
                       <tr>
                          <td rowspan="4"></td>
                          <td>Sonda Castro Rocio del Carmen</td>
                          <td>7.1</td>
                          <td>Secretaria Ejecutiva B</td>
                          <td>81 10080</td>
                          <td>101</td>
                          <td><a href="mailto:rocio.sonda@infocam.gob.mx">rocio.sonda@infocam.gob.mx</a></td>
                      </tr>
                      <tr>
                          <td>Cambranis Romero María Concepción</td>
                          <td>9.1</td>
                          <td>Secretaria Ejecutiva C</td>
                          <td>81 10080</td>
                          <td>102</td>
                          <td><a href="mailto:maria.cambranis@infocam.gob.mx">maria.cambranis@infocam.gob.mx</a></td>
                      </tr>
                      <tr>
                          <td>Cobos Chávez Luis Felipe</td>
                          <td>8.2</td>
                          <td>Analista Especializado</td>
                          <td>81 10080</td>
                          <td>108</td>
                          <td><a href="mailto:luis.cobos@infocam.gob.mx">luis.cobos@infocam.gob.mx</a></td>
                      </tr>
                      <tr>
                          <td>Castillo Echazarreta Antonio</td>
                          <td>9.1</td>
                          <td>Chofer</td>
                          <td>81 10080</td>
                          <td>108</td>
                          <td></td>
                      </tr>
                      <tr class="departamento">
                          <td>Dirección de Geografía y Catastro</td>
                          <td>Rodríguez Salazar José Gaspar</td>
                          <td>7.1</td>
                          <td>Jefe de Departamento</td>
                          <td>81 10587</td>
                          <td>109</td>
                          <td><a href="mailto:gaspar.rodriguez@infocam.gob.mx">gaspar.rodriguez@infocam.gob.mx</a></td>
                      </tr>
                      <tr>
                          <td rowspan="4"></td>
                          <td>Li Martínez Zayde de la Luz</td>
                          <td>5.2</td>
                          <td>Subdirector</td>
                          <td>81 10587</td>
                          <td>109</td>
                          <td><a href="mailto:zayde.li@infocam.gob.mx">zayde.li@infocam.gob.mx</a></td></td>
                      </tr>
                      <tr>
                          <td>Puch Aguilar Armin Alejandro</td>
                          <td>8.1</td>
                          <td>Analista Especializado</td>
                          <td>81 10587</td>
                          <td>109</td>
                          <td><a href="mailto:armin.puch@infocam.gob.mx">armin.puch@infocam.gob.mx</a></td>
                      </tr>
                      <tr>
                          <td>Zubieta Hernández Roger</td>
                          <td>9.2</td>
                          <td>Analista Especializado</td>
                          <td>81 10587</td>
                          <td>109</td>
                          <td><a href="mailto:roger.zubieta@infocam.gob.mx">roger.zubieta@infocam.gob.mx</a></td>
                      </tr>
                      <tr>
                          <td>Vázquez Cu Erik</td>
                          <td>8.1</td>
                          <td>Analista Especializado</td>
                          <td>81 10587</td>
                          <td>109</td>
                          <td><a href="mailto:erik.vazquez@infocam.gob.mx">erik.vazquez@infocam.gob.mx</a></td>
                      </tr>
                       <tr class="departamento">
                          <td>Dirección de Información Estadística</td>
                          <td>Ramirez Sánchez Miguel Ysrrael</td>
                          <td>4.2</td>
                          <td>Director de Área</td>
                          <td>81 67432</td>
                          <td>104</td>
                          <td><a href="mailto:miguel.ramirez@infocam.gob.mx">miguel.ramirez@infocam.gob.mx</a></td>
                      </tr>
                      <tr>
                          <td rowspan="7"></td>
                          <td>Vargas Can David</td>
                          <td>8.2</td>
                          <td>Analista Especializado</td>
                          <td>81 67432</td>
                          <td>105</td>
                          <td><a href="mailto:david.vargas@infocam.gob.mx">david.vargas@infocam.gob.mx</a></td>
                      </tr>
                      <tr>
                          <td>Cab Carreón Hector Manuel</td>
                          <td>8.1</td>
                          <td>Analista Especializado</td>
                          <td>81 67432</td>
                          <td>105</td>
                          <td><a href="mailto:hector.cab@infocam.gob.mx">hector.cab@infocam.gob.mx</a></td>
                      </tr>
                      <tr>
                          <td>Córdova Aguilar Brenda Karina</td>
                          <td>9.1</td>
                          <td>Analista Especializado</td>
                          <td>81 67432</td>
                          <td>105</td>
                          <td><a href="mailto:brenda.cordova@infocam.gob.mx">brenda.cordova@infocam.gob.mx</a></td>
                      </tr>
                      <tr>
                          <td>Cahuich López Oyuki del Carmen</td>
                          <td>9.1</td>
                          <td>Analista Especializado</td>
                          <td>81 67432</td>
                          <td>105</td>
                          <td><a href="mailto:oyuki.cahuich@infocam.gob.mx">oyuki.cahuich@infocam.gob.mx</a></td>
                      </tr>
                      <tr>
                          <td>Caballero Castillo Jair</td>
                          <td>9.1</td>
                          <td>Analista Especializado</td>
                          <td>81 67432</td>
                          <td>105</td>
                          <td><a href="mailto:jair.caballero@infocam.gob.mx">jair.caballero@infocam.gob.mx</a></td>
                      </tr>
                      <tr>
                          <td>Vergara Lope Alfaro Dante</td>
                          <td>9.1</td>
                          <td>Analista Especializado</td>
                          <td>81 67432</td>
                          <td>105</td>
                          <td><a href="mailto:dante.vergara@infocam.gob.mx">dante.vergara@infocam.gob.mx</a></td>
                      </tr>
                      <tr>
                          <td>Ruiz Burgos Sebastián de Jesús</td>
                          <td>9.1</td>
                          <td>Analista Especializado</td>
                          <td>81 67432</td>
                          <td>105</td>
                          <td><a href="mailto:sebastian.ruiz@infocam.gob.mx">sebastian.ruiz@infocam.gob.mx</a></td>
                      </tr>
                      <tr class="departamento">
                          <td>Dirección de Coordinación y Vinculación</td>
                          <td>Castro Azar Francisco José</td>
                          <td>4.3</td>
                          <td>Director de Área</td>
                          <td>81 10587</td>
                          <td>111</td>
                          <td><a href="mailto:francisco.castro@infocam.gob.mx">francisco.castro@infocam.gob.mx</a></td>
                      </tr>
                      <tr>
                          <td rowspan="2"></td>
                          <td>García Villanueva Carlos Francisco</td>
                          <td>5.1</td>
                          <td>Subdirector</td>
                          <td>81 10587</td>
                          <td>112</td>
                          <td><a href="mailto:carlos.garcia@infocam.gob.mx">carlos.garcia@infocam.gob.mx</a></td>
                      </tr>
                      <tr>
                          <td>Macias Parraga Mario Alberto</td>
                          <td>5.2</td>
                          <td>Subdirector</td>
                          <td>81 10587</td>
                          <td>111</td>
                          <td><a href="mailto:mario.macias@infocam.gob.mx">mario.macias@infocam.gob.mx</a></td>
                      </tr>
                      <tr class="departamento">
                          <td>Dirección de Geomática</td>
                          <td>Paredes Gómez José</td>
                          <td>4.2</td>
                          <td>Director de Área</td>
                          <td>81 10553</td>
                          <td>106</td>
                          <td><a href="mailto:jparedesg@infocam.gob.mx">jparedesg@infocam.gob.mx</a></td>
                      </tr>
                      <tr>
                          <td rowspan="3"></td>
                          <td>Chi Pérez Wilson Eleazar</td>
                          <td>7.1</td>
                          <td>Jefe de Departamento</td>
                          <td>81 10587</td>
                          <td>106</td>
                          <td><a href="mailto:eleazar.chi@infocam.gob.mx">eleazar.chi@infocam.gob.mx</a></td>
                      </tr>
                      <tr>
                          <td>Borges Nah Lorena del Carmen</td>
                          <td>7.1</td>
                          <td>Jefe de Departamento</td>
                          <td>81 10587</td>
                          <td>106</td>
                          <td><a href="mailto:lorena.borges@infocam.gob.mx">lorena.borges@infocam.gob.mx</a></td>
                      </tr>
                      <tr>
                          <td>Chan Rosado Julio del Carmen</td>
                          <td>9.1</td>
                          <td>Analista Especializado</td>
                          <td>81 10587</td>
                          <td>106</td>
                          <td><a href="mailto:julio.chan@infocam.gob.mx">julio.chan@infocam.gob.mx</a></td>
                      </tr>
                      <tr class="departamento">
                          <td>Subdirección de Administración</td>
                          <td>Arroyo Castillo Gloria Adelayda</td>
                          <td>7.1</td>
                          <td>Jefe de Departamento</td>
                          <td>81 10080  </td>
                          <td>108</td>
                          <td><a href="mailto:gloria.arroyo@infocam.gob.mx">gloria.arroyo@infocam.gob.mx</a></td>
                      </tr>


                   </table>
                </div>
                
                <div class="span1">
                    <!--Div vacio para ajustar contenido-->
                </div>
               
            </div>
        </div>
        </div><!-- fin Quienes Directorio -->

        <div id="dinformacion" class="seccion"><!-- Información -->
          <!-- Titulo de la página -->
        <div class="page-title">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <i class="icon-info-sign page-title-icon"></i>
                        <h2>Información</h2>
                    </div>
                </div>
            </div>
        </div>

        <!-- Página -->
        <div class="portfolio portfolio-page container">
            
            <div class="row">
                <div id="estadistica" class="work span3 select">
                    <h4>ECONOMÍA ESTATAL</h4>
                    <p>Información Estadística Indicadores Económicos</p>
                </div>
                <div id="geomatica" class="work span3 select">
                    <h4>INFORMACIÓN GEOMÁTICA</h4>
                    <p>Planeación y Sistemas de Información Geográfica</p>
                </div>
                <div id="catastro" class="work span3 select">
                    <h4>INFORMACIÓN CATASTRAL</h4>
                    <p>Productos Derivados de la Modernización Catastral</p>
                </div>
                <div id="sdr" class="work span3 select">
                    <h4>SDR</h4>
                    <p>Análisis de la Infraestructura Productiva Rural del Estado de Campeche</p>
                </div>
                <div id="biblioteca" class="work span3 select">
                    <h4>BIBLIOTECA VIRTUAL</h4>
                    <p>Información Pública de Interés Estatal</p>
                </div>
                <div id="cotaipec" class="work span3">
                    <a href="http://www.youtube.com/embed/qaLRKA8s0yE/?iframe=true&width=70%&height=90%" rel="modalBox">
                        <h4>COTAIPEC</h4>
                        <p>¿Sabías Qué?</p>
                    </a>
                </div>
            </div>
        </div>
        </div><!-- Fin Información -->

      <!--------------------------------------- CONTENIDO DE INFORMACION --------------------------------------->

      <!-- Sección Economía Estatal -->
        <div id="destadistica" class="seccion"><!-- Información -->
        <!-- Titulo de la página -->
        <div class="page-title">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <i class="icon-th page-title-icon"></i>
                        <a href="#"><h2 id="informacion" class="select">Información</h2></a>
                        <p class="seccion-info">Economía Estatal</p>
                        
                    </div>
                </div>
            </div>
        </div>

        <!-- Página -->
         <div class="portfolio portfolio-page container">
            <div class="row">
                <div class="portfolio-navigator span12">
                    <h4 class="filter-portfolio">
                        <p id="active-imgs">Estadística</p>
                    </h4>
                </div>
            </div>
            
            <div class="row">

               <div class="span1">
                    <!--Div vacio para ajustar contenido-->
                </div>

                <div class="span10">
                    <p class="lead">La función Estadística de INFOCAM es la recopilación, integración, generación, actualización y análisis de información sobre los aspectos demográficos, sociales y económicos del territorio estatal, mediante la cual se construya la base para la planeación del desarrollo del Estado.</p>
                    <p class="lead">Las principales actividades que realiza son la conformación y elaboración del Anexo Estadístico del Informe de Gobierno, así como la producción de diversos instrumentos de seguimiento y análisis que ayuden a la interpretación de la realidad socioeconómica y de la población con el fin de ayudar en la toma de decisiones públicas, privadas y sociales.</p>
                </div>
                
                <div class="span1">
                    <!--Div vacio para ajustar contenido-->
                </div>
                
            </div>

            <div class="row content-pdf">
                <div class="span12">
                    <a href="https://dl.dropboxusercontent.com/u/33883534/3er%20ANEXO%20ESTADISTICO.pdf" target="_blank"><img class="thumbnails" src="images/estadistica/pdf/informe_2012.png" alt="" ></a>
                    <h3 class="titulos-menus">TERCER INFORME DE GOBIERNO</h3>
                    <br>
                </div>
            </div>

            
                <h2>Índice de Competitividad</h2>
            
            <div class="row content-pdf">
                <div class="span2">
                    <!--Div vacio para ajustar contenido-->
                </div>

                <div class="span2 pdf">
                    <a href="pdf.js/web/viewer.php?url=../../pdf/estadistica/CompetitividadEstatal.pdf?iframe=true&width=80%&height=85%" rel="modalBox">
                        <img class="thumbnails" src="images/estadistica/pdf/img-1.png" alt="">
                    </a>
                    <h4>Competitividad Estatal</h4>
                </div>
                <div class="span2 pdf">
                    <a href="pdf.js/web/viewer.php?url=../../pdf/estadistica/CompetitividadUrbana.pdf?iframe=true&width=80%&height=85%" rel="modalBox">
                        <img class="thumbnails" src="images/estadistica/pdf/img-2.png" alt="">
                    </a>
                    <h4>Competitividad Urbana</h4>
                </div>
                <div class="span2 pdf">
                    <a href="pdf.js/web/viewer.php?url=../../pdf/estadistica/IndicadoresEducativos.pdf?iframe=true&width=80%&height=85%" rel="modalBox">
                        <img class="thumbnails" src="images/estadistica/pdf/img-3.png" alt="">
                    </a>
                    <h4>Indicadores Educativos</h4>
                </div>
                <div class="span2 pdf">
                    <a href="pdf.js/web/viewer.php?url=../../pdf/estadistica/IndicesdeCompetitividad.pdf?iframe=true&width=80%&height=85%" rel="modalBox">
                        <img class="thumbnails" src="images/estadistica/pdf/img-4.png" alt="">
                    </a>
                    <h4>Índices de Competitividad</h4>
                </div>

                <div class="span2">
                    <!--Div vacio para ajustar contenido-->
                </div>
            </div>

            <div class="row">
                <a href="http://imco.org.mx/es/indices/" target="_blank" class="btn btn-danger tm_style_2">CONSULTAR ÍNDICES DE COMPETITIVIDAD</a>
            </div>
            <br>


            
            <h3>Población</h3>
            <div class="row">
                <div class="span12">
                    <div class="spinner"></div>
                <div class="row">
                    <div class="span12">
                    <ul class="gale-geo">           
                        <li class="box"><a href="images/estadistica/poblacion/1.png" class="magnifier" ><img class="img-mini1" src="images/estadistica/poblacion/1.png"></a><p class="title-img-galey">Estadística básica, población y territorio</p></li> 
                        <li class="box"><a href="images/estadistica/poblacion/2.png" class="magnifier" ><img class="img-mini1" src="images/estadistica/poblacion/2.png"></a><p class="title-img-galey">Tasa de crecimiento de la población</p></li> 
                    </ul> 
                    </div>
                </div>
               </div>
            </div>

               <h3>Economía</h3>
            <div class="row">
                <div class="span12">
                    <div class="spinner"></div>
                <div class="row">
                    <div class="span12">
                    <ul class="gale-geo2">           
                        <li class="box"><a href="images/estadistica/economia/1.png" class="magnifier" ><img class="img-mini1" src="images/estadistica/economia/1.png"></a><p class="title-img-galey">PIBE a precios corrientes con ajustes</p></li> 
                        <li class="box"><a href="images/estadistica/economia/2.png" class="magnifier" ><img class="img-mini1" src="images/estadistica/economia/2.png"></a><p class="title-img-galey">PIBE a precios constantes con ajustes</p></li> 
                        <li class="box"><a href="images/estadistica/economia/3.png" class="magnifier" ><img class="img-mini1" src="images/estadistica/economia/3.png"></a><p class="title-img-galey">PIB 2010 percápita con ajustes sectoriales</p></li> 
                        <li class="box"><a href="images/estadistica/economia/4.png" class="magnifier" ><img class="img-mini1" src="images/estadistica/economia/4.png"></a><p class="title-img-galey">Tasa de desocupación histórica</p></li>
                        <li class="box"><a href="images/estadistica/economia/5.png" class="magnifier" ><img class="img-mini1" src="images/estadistica/economia/5.png"></a><p class="title-img-galey">Estructura de ingresos en la Población 2012</p></li> 
                        <li class="box"><a href="images/estadistica/economia/6.png" class="magnifier" ><img class="img-mini1" src="images/estadistica/economia/6.png"></a><p class="title-img-galey">Asegurados totales en el IMSS</p></li> 
                        <li class="box"><a href="images/estadistica/economia/7.png" class="magnifier" ><img class="img-mini1" src="images/estadistica/economia/7.png"></a><p class="title-img-galey">Asegurados permanentes en el IMSS</p></li> 
                    </ul> 
                    </div>
                </div>
               </div>
            </div>

            <h3>Sectores de Producción</h3>
            <div class="row">
                <div class="span12">
                    <div class="spinner"></div>
                <div class="row">
                    <div class="span12">
                    <ul class="gale-geo">           
                        <li class="box"><a href="images/estadistica/produccion/1.png" class="magnifier" ><img class="img-mini1" src="images/estadistica/produccion/1.png"></a><p class="title-img-galey">Producción mensual de crudo</p></li> 
                        <li class="box"><a href="images/estadistica/produccion/2.png" class="magnifier" ><img class="img-mini1" src="images/estadistica/produccion/2.png"></a><p class="title-img-galey">Porcentaje de ocupación ciudad de Campeche</p></li> 
                        <li class="box"><a href="images/estadistica/produccion/3.png" class="magnifier" ><img class="img-mini1" src="images/estadistica/produccion/3.png"></a><p class="title-img-galey">Turistas no residentes ciudad de Campeche</p></li> 
                    </ul> 
                    </div>
                </div>
               </div>
            </div>

             <h3>Financiero</h3>
            <div class="row">
                <div class="span12">
                    <div class="spinner"></div>
                <div class="row">
                    <div class="span12">
                    <ul class="gale-geo">           
                        <li class="box"><a href="images/estadistica/financiero/1.png" class="magnifier" ><img class="img-mini1" src="images/estadistica/financiero/1.png"></a><p class="title-img-galey">Comportamiento de la captación y el crédito</p></li> 
                        <li class="box"><a href="images/estadistica/financiero/2.png" class="magnifier" ><img class="img-mini1" src="images/estadistica/financiero/2.png"></a><p class="title-img-galey">Inversión extranjera directa en Campeche</p></li> 
                    </ul> 
                    </div>
                </div>
               </div>
            </div>

        </div>
       </div>
       <!-- Fin Sección Economía Estatal -->

      <!-- Sección Geomática -->   
       <div id="dgeomatica" class="seccion">

         <!-- Titulo de la página -->
        <div class="page-title">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <i class="icon-th page-title-icon"></i>
                        <a href="#"><h2 id="informacion" class="select">Información</h2></a>
                        <p class="seccion-info">Información Geomática</p>
                        
                    </div>
                </div>
            </div>
        </div>

        <!-- Página -->
         <div class="portfolio portfolio-page container">
            <div class="row">
                <div class="portfolio-navigator span12">
                    <h4 class="filter-portfolio">
                        <p id="active-imgs">Geomática</p>
                    </h4>
                </div>
            </div>
            
            <div class="row">

               <div class="span1">
                    <!--Div vacio para ajustar contenido-->
                </div>

                <div class="span10">
                    <p class="lead">Norma y administra la información geográfica del Estado de Campeche. Es responsable de integrar los medios para la captura, tratamiento, análisis, interpretación, difusión y almacenamiento de la información geográfica del Estado a través del Sistema de Información Territorial (SITER).</p>
                    <p class="lead">Información que representa un conocimiento estratégico para la gestión sustentable del territorio. Así también, define el marco de referencia geoespacial que permite ubicar las obras y acciones que ejecuta la Administración del Gobierno del Estado. Coordina la edición cartográfica y asiste en el geo-procesamiento de diversos niveles de Información geográfica que componen el Sistema de Información Territorial.</p>
                </div>
                
                <div class="span1">
                    <!--Div vacio para ajustar contenido-->
                </div>
                
            </div>

            
                <div class="portfolio-title">
                    <h3>Anexo Cartográfico</h3>
                </div>
            
            <div class="row">
               <div class="span12">
                    <div class="spinner"></div>
                <div class="row">
                    <div class="span12">
                    <ul class="gale-geo">           
                        <li class="box"><a href="images/geomatica/anexo_cartografico/1.png" class="magnifier1" ><img class="img-mini" src="images/geomatica/anexo_cartografico/1.png"></a></li> 
                        <li class="box"><a href="images/geomatica/anexo_cartografico/2.png" class="magnifier1" ><img class="img-mini" src="images/geomatica/anexo_cartografico/2.png"></a></li> 
                        <li class="box"><a href="images/geomatica/anexo_cartografico/3.png" class="magnifier1" ><img class="img-mini" src="images/geomatica/anexo_cartografico/3.png"></a></li> 
                        <li class="box"><a href="images/geomatica/anexo_cartografico/4.png" class="magnifier1" ><img class="img-mini" src="images/geomatica/anexo_cartografico/4.png"></a></li>
                        <li class="box"><a href="images/geomatica/anexo_cartografico/5.png" class="magnifier1" ><img class="img-mini" src="images/geomatica/anexo_cartografico/5.png"></a></li>
                        <li class="box"><a href="images/geomatica/anexo_cartografico/6.png" class="magnifier1" ><img class="img-mini" src="images/geomatica/anexo_cartografico/6.png"></a></li>
                        <li class="box"><a href="images/geomatica/anexo_cartografico/7.png" class="magnifier1" ><img class="img-mini" src="images/geomatica/anexo_cartografico/7.png"></a></li>
                        <li class="box"><a href="images/geomatica/anexo_cartografico/8.png" class="magnifier1" ><img class="img-mini" src="images/geomatica/anexo_cartografico/8.png"></a></li> 
                        <li class="box"><a href="images/geomatica/anexo_cartografico/9.png" class="magnifier1" ><img class="img-mini" src="images/geomatica/anexo_cartografico/9.png"></a></li> 
                        <li class="box"><a href="images/geomatica/anexo_cartografico/10.png" class="magnifier1" ><img class="img-mini" src="images/geomatica/anexo_cartografico/10.png"></a></li> 
                        <li class="box"><a href="images/geomatica/anexo_cartografico/11.png" class="magnifier1" ><img class="img-mini" src="images/geomatica/anexo_cartografico/11.png"></a></li> 
                        <li class="box"><a href="images/geomatica/anexo_cartografico/12.png" class="magnifier1" ><img class="img-mini" src="images/geomatica/anexo_cartografico/12.png"></a></li> 
                        <li class="box"><a href="images/geomatica/anexo_cartografico/13.png" class="magnifier1" ><img class="img-mini" src="images/geomatica/anexo_cartografico/13.png"></a></li> 
                        <li class="box"><a href="images/geomatica/anexo_cartografico/14.png" class="magnifier1" ><img class="img-mini" src="images/geomatica/anexo_cartografico/14.png"></a></li>
                        <li class="box"><a href="images/geomatica/anexo_cartografico/15.png" class="magnifier1" ><img class="img-mini" src="images/geomatica/anexo_cartografico/15.png"></a></li>
                        <li class="box"><a href="images/geomatica/anexo_cartografico/16.png" class="magnifier1" ><img class="img-mini" src="images/geomatica/anexo_cartografico/16.png"></a></li>
                        <li class="box"><a href="images/geomatica/anexo_cartografico/17.png" class="magnifier1" ><img class="img-mini" src="images/geomatica/anexo_cartografico/17.png"></a></li>
                        <li class="box"><a href="images/geomatica/anexo_cartografico/18.png" class="magnifier1" ><img class="img-mini" src="images/geomatica/anexo_cartografico/18.png"></a></li>
                        <li class="box"><a href="images/geomatica/anexo_cartografico/19.png" class="magnifier1" ><img class="img-mini" src="images/geomatica/anexo_cartografico/19.png"></a></li>
                        <li class="box"><a href="images/geomatica/anexo_cartografico/20.png" class="magnifier1" ><img class="img-mini" src="images/geomatica/anexo_cartografico/20.png"></a></li>
                        <li class="box"><a href="images/geomatica/anexo_cartografico/21.png" class="magnifier1" ><img class="img-mini" src="images/geomatica/anexo_cartografico/21.png"></a></li>
                        <li class="box"><a href="images/geomatica/anexo_cartografico/22.png" class="magnifier1" ><img class="img-mini" src="images/geomatica/anexo_cartografico/22.png"></a></li>
                        <li class="box"><a href="images/geomatica/anexo_cartografico/23.png" class="magnifier1" ><img class="img-mini" src="images/geomatica/anexo_cartografico/23.png"></a></li>
                        <li class="box"><a href="images/geomatica/anexo_cartografico/24.png" class="magnifier1" ><img class="img-mini" src="images/geomatica/anexo_cartografico/24.png"></a></li>
                        <li class="box"><a href="images/geomatica/anexo_cartografico/25.png" class="magnifier1" ><img class="img-mini" src="images/geomatica/anexo_cartografico/25.png"></a></li>
                        <li class="box"><a href="images/geomatica/anexo_cartografico/26.png" class="magnifier1" ><img class="img-mini" src="images/geomatica/anexo_cartografico/26.png"></a></li>
                        <li class="box"><a href="images/geomatica/anexo_cartografico/27.png" class="magnifier1" ><img class="img-mini" src="images/geomatica/anexo_cartografico/27.png"></a></li>
                        <li class="box"><a href="images/geomatica/anexo_cartografico/28.png" class="magnifier1" ><img class="img-mini" src="images/geomatica/anexo_cartografico/28.png"></a></li>
                        <li class="box"><a href="images/geomatica/anexo_cartografico/29.png" class="magnifier1" ><img class="img-mini" src="images/geomatica/anexo_cartografico/29.png"></a></li>
                        <li class="box"><a href="images/geomatica/anexo_cartografico/30.png" class="magnifier1" ><img class="img-mini" src="images/geomatica/anexo_cartografico/30.png"></a></li>
                        <li class="box"><a href="images/geomatica/anexo_cartografico/31.png" class="magnifier1" ><img class="img-mini" src="images/geomatica/anexo_cartografico/31.png"></a></li>
                        <li class="box"><a href="images/geomatica/anexo_cartografico/32.png" class="magnifier1" ><img class="img-mini" src="images/geomatica/anexo_cartografico/32.png"></a></li>
                        <li class="box"><a href="images/geomatica/anexo_cartografico/33.png" class="magnifier1" ><img class="img-mini" src="images/geomatica/anexo_cartografico/33.png"></a></li>
                        <li class="box"><a href="images/geomatica/anexo_cartografico/34.png" class="magnifier1" ><img class="img-mini" src="images/geomatica/anexo_cartografico/34.png"></a></li>
                        <li class="box"><a href="images/geomatica/anexo_cartografico/35.png" class="magnifier1" ><img class="img-mini" src="images/geomatica/anexo_cartografico/35.png"></a></li>
                        <li class="box"><a href="images/geomatica/anexo_cartografico/36.png" class="magnifier1" ><img class="img-mini" src="images/geomatica/anexo_cartografico/36.png"></a></li>
                        <li class="box"><a href="images/geomatica/anexo_cartografico/37.png" class="magnifier1" ><img class="img-mini" src="images/geomatica/anexo_cartografico/37.png"></a></li>
                        <li class="box"><a href="images/geomatica/anexo_cartografico/38.png" class="magnifier1" ><img class="img-mini" src="images/geomatica/anexo_cartografico/38.png"></a></li>
                        <li class="box"><a href="images/geomatica/anexo_cartografico/39.png" class="magnifier1" ><img class="img-mini" src="images/geomatica/anexo_cartografico/39.png"></a></li>
                        <li class="box"><a href="images/geomatica/anexo_cartografico/40.png" class="magnifier1" ><img class="img-mini" src="images/geomatica/anexo_cartografico/40.png"></a></li>
                        <li class="box"><a href="images/geomatica/anexo_cartografico/41.png" class="magnifier1" ><img class="img-mini" src="images/geomatica/anexo_cartografico/41.png"></a></li>
                        <li class="box"><a href="images/geomatica/anexo_cartografico/42.png" class="magnifier1" ><img class="img-mini" src="images/geomatica/anexo_cartografico/42.png"></a></li>
                        <li class="box"><a href="images/geomatica/anexo_cartografico/43.png" class="magnifier1" ><img class="img-mini" src="images/geomatica/anexo_cartografico/43.png"></a></li>
                        <li class="box"><a href="images/geomatica/anexo_cartografico/44.png" class="magnifier1" ><img class="img-mini" src="images/geomatica/anexo_cartografico/44.png"></a></li>
                    </ul> 
                    </div>
                </div>
               </div>
        </div>

         <div class="row content-pdf">
                <div class="span2">
                    <a href="pdf.js/web/viewer.php?url=../../pdf/geomatica/CampecheysuDivisionMunicipal.pdf?iframe=true&width=80%&height=85%" rel="modalBox">
                        <img class="thumbnails" src="images/geomatica/anexo_cartografico/pdf/1.jpg" alt="" style="width:170px;height:120px;">
                    </a>
                    <h4>Campeche y su División Municipal</h4>
                </div>
                <div class="span2">
                    <a href="pdf.js/web/viewer.php?url=../../pdf/geomatica/DistribuciondeTenenciadelaTierra.pdf?iframe=true&width=80%&height=85%" rel="modalBox">
                        <img class="thumbnails" src="images/geomatica/anexo_cartografico/pdf/2.jpg" alt="" style="width:170px;height:120px;">
                    </a>
                    <h4>Distribución de Tenencia de la Tierra</h4>
                </div>
                <div class="span2">
                    <a href="pdf.js/web/viewer.php?url=../../pdf/geomatica/DensidaddePoblacion.pdf?iframe=true&width=80%&height=85%" rel="modalBox">
                        <img class="thumbnails" src="images/geomatica/anexo_cartografico/pdf/3.jpg" alt="" style="width:170px;height:120px;">
                    </a>
                    <h4>Densidad de Población</h4>
                </div>
                <div class="span2">
                    <a href="pdf.js/web/viewer.php?url=../../pdf/geomatica/PoblacionHablantedeLenguaIndigena.pdf?iframe=true&width=80%&height=85%" rel="modalBox">
                        <img class="thumbnails" src="images/geomatica/anexo_cartografico/pdf/4.jpg" alt="" style="width:170px;height:120px;">
                    </a>
                    <h4>Población Hablante de Lengua Indígena</h4>
                </div>
                <div class="span2">
                    <a href="pdf.js/web/viewer.php?url=../../pdf/geomatica/CoberturadeEducacionPrimaria.pdf?iframe=true&width=80%&height=85%" rel="modalBox">
                        <img class="thumbnails" src="images/geomatica/anexo_cartografico/pdf/5.jpg" alt="" style="width:170px;height:120px;">
                    </a>
                    <h4>Cobertura de Educación Primaria</h4>
                </div>
                <div class="span2">
                    <a href="pdf.js/web/viewer.php?url=../../pdf/geomatica/CoberturadelServiciodeAguaEntubada.pdf?iframe=true&width=80%&height=85%" rel="modalBox">
                        <img class="thumbnails" src="images/geomatica/anexo_cartografico/pdf/6.jpg" alt="" style="width:170px;height:120px;">
                    </a>
                    <h4>Cobertura del Servicio de Agua Entubada</h4>
                </div>
            </div>
       </div>
       </div><!-- Fin Sección Geomática -->

       <!-- Sección Catastro -->   
       <div id="dcatastro" class="seccion">
         
          <!-- Titulo de la página -->
        <div class="page-title">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <i class="icon-th page-title-icon"></i>
                        <a href="#"><h2 id="informacion" class="select">Información</h2></a>
                        <p class="seccion-info">Información Catastral</p>
                        
                    </div>
                </div>
            </div>
        </div>

        <!-- Página -->
         <div class="portfolio portfolio-page container">
            <div class="row">
                <div class="portfolio-navigator span12">
                    <h4 class="filter-portfolio">
                        <p id="active-imgs">Catastro</p>
                    </h4>
                </div>
            </div>
            
            <div class="row">

               <div class="span1">
                    <!--Div vacio para ajustar contenido-->
                </div>

                <div class="span10">
                    <p class="lead">Una de las razones de ser del INFOCAM es la modernización catastral del Estado de Campeche.</p>
                    <p class="lead">El catastro es la conformación del inventario analítico de la propiedad inmobiliaria del Estado, de su conformación geométrica y ahora también de su posición única en el planeta o georeferencia.</p>
                    <p class="lead">El Instituto, hará las funciones de enlace hacia las oficinas municipales, brindándoles apoyo técnico, asesoría y capacitación para el fortalecimiento de la gestión catastral, además de ser la encargada de salvaguardar y hacer funcionar el Sistema Estatal de Catastro y su vinculación con otras dependencias y organismos.</p>
                </div>
                
                <div class="span1">
                    <!--Div vacio para ajustar contenido-->
                </div>
                
            </div>
            
            
            <div class="row">

                <div class="span12">
                
                <div id="content-pdf" class="row">
                        <a href="pdf.js/web/viewer.php?url=../../pdf/catastro/ProyectodeModernizacionCatastral.pdf?iframe=true&width=80%&height=85%" rel="modalBox">
                            <img class="thumbnails" src="images/catastro/proyecto.png" alt="" style="width:200px;height:150px;">
                        </a>
                    <h4>El Proyecto de Modernización Catastral y su Vinculación con otros Organismos</h4>
                    <br>
                </div>
            
                 <div class="row">
               <div class="span12">
                    <div class="spinner2"></div>
                <div class="row">
                    <div class="span12">
                    <ul class="gale-geo2">           
                        <li class="box"><a href="images/catastro/1.png" class="magnifier2" ><img class="img-mini1" src="images/catastro/1.png"></a></li> 
                        <li class="box"><a href="images/catastro/2.png" class="magnifier2" ><img class="img-mini1" src="images/catastro/2.png"></a></li> 
                        <li class="box"><a href="images/catastro/3.png" class="magnifier2" ><img class="img-mini1" src="images/catastro/3.png"></a></li> 
                        <li class="box"><a href="images/catastro/4.png" class="magnifier2" ><img class="img-mini1" src="images/catastro/4.png"></a></li>
                        <li class="box"><a href="images/catastro/5.png" class="magnifier2" ><img class="img-mini1" src="images/catastro/5.png"></a></li>
                        <li class="box"><a href="images/catastro/6.png" class="magnifier2" ><img class="img-mini1" src="images/catastro/6.png"></a></li>
                        <li class="box"><a href="images/catastro/7.png" class="magnifier2" ><img class="img-mini1" src="images/catastro/7.png"></a></li>
                        <li class="box"><a href="images/catastro/8.png" class="magnifier2" ><img class="img-mini1" src="images/catastro/8.png"></a></li> 
                    </ul> 
                    </div>
                </div>
               </div>
        </div>
        
                </div>
            </div>

            <div id="content-pdf" class="row">

                <div class="span2 pdf">
                    <a href="pdf.js/web/viewer.php?url=../../pdf/catastro/campeche12.pdf?iframe=true&width=80%&height=85%" rel="modalBox">
                        <img class="thumbnails" src="images/catastro/pdf/campeche.png" alt="" style="width:170px;height:120px;"></a>
                    <h4>VALORES UNITARIOS DEL SUELO CAMPECHE</h4>
                </div>
                <div class="span2 pdf">
                    <a href="pdf.js/web/viewer.php?url=../../pdf/catastro/calakmul2012.pdf?iframe=true&width=80%&height=85%" rel="modalBox">
                        <img class="thumbnails" src="images/catastro/pdf/calakmul.png" alt="" style="width:170px;height:120px;">
                    </a>
                    <h4>VALORES UNITARIOS DEL SUELO URBANO CALAKMUL</h4>
                </div>
                <div class="span2 pdf">
                    <a href="pdf.js/web/viewer.php?url=../../pdf/catastro/candelaria2012.pdf?iframe=true&width=80%&height=85%" rel="modalBox">
                        <img class="thumbnails" src="images/catastro/pdf/candelaria.png" alt="" style="width:170px;height:120px;">
                    </a>
                    <h4>VALORES UNITARIOS DEL SUELO URBANO CANDELARIA</h4>
                </div>
                <div class="span2 pdf">
                    <a href="pdf.js/web/viewer.php?url=../../pdf/catastro/carmen2012.pdf?iframe=true&width=80%&height=85%" rel="modalBox">
                        <img class="thumbnails" src="images/catastro/pdf/carmen.png" alt="" style="width:170px;height:120px;">
                    </a>
                    <h4>VALORES UNITARIOS DEL SUELO URBANO CARMEN</h4>
                </div>
                <div class="span2 pdf">
                    <a href="pdf.js/web/viewer.php?url=../../pdf/catastro/champoton2012.pdf?iframe=true&width=80%&height=85%" rel="modalBox">
                        <img class="thumbnails" src="images/catastro/pdf/champoton.png" alt="" style="width:170px;height:120px;">
                    </a>
                    <h4>VALORES UNITARIOS DEL SUELO URBANO CHAMPOTON</h4>
                </div>
                <div class="span2 pdf">
                    <a href="pdf.js/web/viewer.php?url=../../pdf/catastro/escarcega2012.pdf?iframe=true&width=80%&height=85%" rel="modalBox">
                        <img class="thumbnails" src="images/catastro/pdf/escarcega.png" alt="" style="width:170px;height:120px;">
                    </a>
                    <h4>VALORES UNITARIOS DEL SUELO URBANO ESCARCEGA</h4>
                </div>
                <div class="span2 pdf">
                    <a href="pdf.js/web/viewer.php?url=../../pdf/catastro/hecelchakan2012.pdf?iframe=true&width=80%&height=85%" rel="modalBox">
                        <img class="thumbnails" src="images/catastro/pdf/hecelchakan.png" alt="" style="width:170px;height:120px;">
                    </a>
                    <h4>VALORES UNITARIOS DEL SUELO URBANO HECELCHAKAN</h4>
                </div>
                <div class="span2 pdf">
                    <a href="pdf.js/web/viewer.php?url=../../pdf/catastro/hopelchen2012.pdf?iframe=true&width=80%&height=85%" rel="modalBox">
                        <img class="thumbnails" src="images/catastro/pdf/hopelchen.png" alt="" style="width:170px;height:120px;">
                    </a>
                    <h4>VALORES UNITARIOS DEL SUELO URBANO HOPELCHEN</h4>
                </div>
                <div class="span2 pdf">
                    <a href="pdf.js/web/viewer.php?url=../../pdf/catastro/palizada2012.pdf?iframe=true&width=80%&height=85%" rel="modalBox">
                        <img class="thumbnails" src="images/catastro/pdf/palizada.png" alt="" style="width:170px;height:120px;">
                    </a>
                    <h4>VALORES UNITARIOS DEL SUELO URBANO PALIZADA</h4>
                </div>
                <div class="span2 pdf">
                    <a href="pdf.js/web/viewer.php?url=../../pdf/catastro/tenabo2012.pdf?iframe=true&width=80%&height=85%" rel="modalBox">
                        <img class="thumbnails" src="images/catastro/pdf/tenabo.png" alt="" style="width:170px;height:120px;">
                    </a>
                    <h4>VALORES UNITARIOS DEL SUELO URBANO TENABO</h4>
                </div>
                <div class="span2 pdf">
                    <a href="pdf.js/web/viewer.php?url=../../pdf/catastro/calkini2012.pdf?iframe=true&width=80%&height=85%" rel="modalBox">
                        <img class="thumbnails" src="images/catastro/pdf/calkini.png" alt="" style="width:170px;height:120px;">
                    </a>
                    <h4>VALORES UNITARIOS DEL SUELO URBANO CALKINI</h4>
                </div>
            </div>
        </div>

       </div><!-- Fin Catastro -->

       <!-- Sección SDR -->   
       <div id="dsdr" class="seccion">

         <!-- Titulo de la página -->
        <div class="page-title">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <i class="icon-th page-title-icon"></i>
                        <a href="#"><h2 id="informacion" class="select">Información</h2></a>
                        <p class="seccion-info">Análisis de la Infraestructura Productiva Rural del Estado de Campeche</p>
                        
                    </div>
                </div>
            </div>
        </div>

        <!-- Página -->
         <div class="portfolio portfolio-page container">
            <div class="row">
                <div class="portfolio-navigator span12">
                    <h4 class="filter-portfolio">
                        <p id="active-imgs">SDR/</p>
                    </h4>
                </div>
            </div>
            <br>
            
            
            <div class="row content-pdf">

                <div class="span3">
                    <a href="pdf.js/web/viewer.php?url=../../pdf/sdr/INFORME_INTEGRAL.pdf?iframe=true&width=80%&height=85%" rel="modalBox">
                        <img class="thumbnails" src="images/sdr/pdf/1.png" alt="">
                    </a>
                    <h4>Informe Integral del Proyecto</h4>
                </div>
                <div class="span3">
                    <a href="pdf.js/web/viewer.php?url=../../pdf/sdr/INFORME_DEL_ESTUDIO_DE_ESTRATIFICACION_DE_LOS_PRODUCTORES_AGROPECUARIOS.pdf?iframe=true&width=80%&height=85%" rel="modalBox">
                        <img class="thumbnails" src="images/sdr/pdf/2.png" alt="">
                    </a>
                    <h4>Estudio sobre Estratificación</h4>
                    
                </div>
                <div class="span3">
                    <a href="pdf.js/web/viewer.php?url=../../pdf/sdr/DOCUMENTO_DE_ESPECIFICACION_DEL_SISTEMA.pdf?iframe=true&width=80%&height=85%" rel="modalBox">
                        <img class="thumbnails" src="images/sdr/pdf/3.png" alt="">
                    </a>
                    <h4>Especificaciones del Sistema</h4>
                </div>
                <div class="span3">
                    <a href="pdf.js/web/viewer.php?url=../../pdf/sdr/INFORME_DE_DESARROLLO_DEL_SOFTWARE_DE_SADEP.pdf?iframe=true&width=80%&height=85%" rel="modalBox">
                    <img class="thumbnails" src="images/sdr/pdf/4.png" alt="">
                    </a>
                    <h4>Informe de Desarrollo Software</h4>
                </div>
                <div class="span3">
                    <a href="pdf.js/web/viewer.php?url=../../pdf/sdr/ARROZ_Oryza_sativa_L.pdf?iframe=true&width=80%&height=85%" rel="modalBox">
                        <img class="thumbnails" src="images/sdr/pdf/5.png" alt="">
                    </a>
                    <h4>Estudio para Determinar Zonas de Alta Potencialidad para El Cultivo de Arroz</h4>
                </div>
                <div class="span3">
                    <a href="pdf.js/web/viewer.php?url=../../pdf/sdr/CANA_DE_AZUCAR_Saccharum_officinarum.pdf?iframe=true&width=80%&height=85%" rel="modalBox">
                        <img class="thumbnails" src="images/sdr/pdf/6.png" alt="">
                    </a>
                    <h4>Estudio para Determinar Zonas de Alta Potencialidad para el Cultivo de Caña de Azúcar</h4>
                </div>
                <div class="span3">
                    <a href="pdf.js/web/viewer.php?url=../../pdf/sdr/COCO_Cocos_nucifera_L..pdf?iframe=true&width=80%&height=85%" rel="modalBox">
                        <img class="thumbnails" src="images/sdr/pdf/7.png" alt="">
                    </a>
                    <h4>Estudio para Determinar Zonas de Alta Potencialidad del Cultivo de Coco</h4>
                </div>
                <div class="span3">
                    <a href="pdf.js/web/viewer.php?url=../../pdf/sdr/MAIZ_Zea_mays.pdf?iframe=true&width=80%&height=85%" rel="modalBox">
                        <img class="thumbnails" src="images/sdr/pdf/8.png" alt="">
                    </a>
                    <h4>Estudio para Determinar Zonas de Alta Potencialidad del Cultivo de Maíz</h4>
                </div>
                <div class="span3">
                    <a href="pdf.js/web/viewer.php?url=../../pdf/sdr/GIRASOL_Helianthus_annuus_L.pdf?iframe=true&width=80%&height=85%" rel="modalBox">
                        <img class="thumbnails" src="images/sdr/pdf/9.png" alt="">
                    </a>
                    <h4>Estudio Para Determinar Zonas De Alta Potencialidad Para El Cultivo De Girasol</h4>
                </div>
                <div class="span3">
                    <a href="pdf.js/web/viewer.php?url=../../pdf/sdr/GUANABANA_Annona_muricata_L.pdf?iframe=true&width=80%&height=85%" rel="modalBox">
                        <img class="thumbnails" src="images/sdr/pdf/10.png" alt="">
                    </a>
                    <h4>Estudio para Determinar Zonas de Alta Potencialidad para el Cultivo de Guanábana</h4>
                </div>
                <div class="span3">
                    <a href="pdf.js/web/viewer.php?url=../../pdf/sdr/HIGUERILLA_Ricinus_communis_L.pdf?iframe=true&width=80%&height=85%" rel="modalBox">
                        <img class="thumbnails" src="images/sdr/pdf/11.png" alt="">
                    </a>
                    <h4>Estudio para Determinar Zonas de Alta Potencialidad para el Cultivo de Higuerilla</h4>
                </div>
                <div class="span3">
                    <a href="pdf.js/web/viewer.php?url=../../pdf/sdr/JATROFA_J_curcas_L.pdf?iframe=true&width=80%&height=85%" rel="modalBox">
                        <img class="thumbnails" src="images/sdr/pdf/12.png" alt="">
                    </a>
                    <h4>Estudio para Determinar Zonas de Alta Potencialidad del Cultivo de Jatrofa O Piñón</h4>
                </div>
                <div class="span3">
                    <a href="pdf.js/web/viewer.php?url=../../pdf/sdr/LIMON_PERSA_C_latifolia.pdf?iframe=true&width=80%&height=85%" rel="modalBox">
                        <img class="thumbnails" src="images/sdr/pdf/13.png" alt="">s
                    </a>
                    <h4>Estudio para Determinar Zonas de Altapotencialidad del Cultivo Limón Persa</h4>
                </div>
                 <div class="span3">
                    <a href="pdf.js/web/viewer.php?url=../../pdf/sdr/DISCO_II_Anexos_1-17.pdf?iframe=true&width=80%&height=85%" rel="modalBox">
                        <img class="thumbnails" src="images/sdr/pdf/14.png" alt="">
                    </a>
                    <h4>Anexos</h4>
                </div>

            </div>
        </div>
       </div><!-- Fin Sección SDR

        <!-- Sección biblioteca -->   
       <div id="dbiblioteca" class="seccion">

        <!-- Titulo de la página -->
        <div class="page-title">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <i class="icon-th page-title-icon"></i>
                        <a href="#"><h2 id="informacion" class="select">Información</h2></a>
                        <p class="seccion-info">Información Pública de Interés Estatal</p>
                        
                    </div>
                </div>
            </div>
        </div>

        <!-- Página -->
         <div class="portfolio portfolio-page container">
            <div class="row">
                <div class="portfolio-navigator span12">
                    <h4 class="filter-portfolio">
                        <p id="active-imgs">Biblioteca</p>
                    </h4>
                </div>
            </div>
            
            
            <div class="portfolio-title">
                <h3>Marco Normativo</h3>
            </div>
            
            <div class="row content-pdf">

                <div class="span3">
                    <a href="pdf.js/web/viewer.php?url=../../pdf/biblioteca/marco_normativo/AcuerdoCreacion_INFOCAM.pdf?iframe=true&width=80%&height=85%" rel="modalBox">
                        <img class="thumbnails" src="images/biblioteca/pdf/marco_normativo/1.png" alt="">
                    </a>
                    <h4>Acuerdo de Creación INFOCAM</h4>
                </div>
                <div class="span3">
                    <a href="pdf.js/web/viewer.php?url=../../pdf/biblioteca/marco_normativo/AcuerdoCreacion_ICECAM.pdf?iframe=true&width=80%&height=85%" rel="modalBox">
                        <img class="thumbnails" src="images/biblioteca/pdf/marco_normativo/2.png" alt="">
                    </a>
                    <h4>Acuerdo de Creación ICECAM</h4>
                </div>
                <div class="span3">
                    <a href="pdf.js/web/viewer.php?url=../../pdf/biblioteca/marco_normativo/Reglamento_ICECAM.pdf?iframe=true&width=80%&height=85%" rel="modalBox">
                        <img class="thumbnails" src="images/biblioteca/pdf/marco_normativo/3.png" alt="">
                    </a>
                    <h4>Reglamento del ICECAM</h4>
                </div>
                <div class="span3">
                    <a href="pdf.js/web/viewer.php?url=../../pdf/biblioteca/marco_normativo/Ley_de_Catastro_del_Estado_de_Campeche.pdf?iframe=true&width=80%&height=85%" rel="modalBox">
                        <img class="thumbnails" src="images/biblioteca/pdf/marco_normativo/4.png" alt="">
                    </a>
                    <h4>Ley de Catastro del Estado de Campeche</h4>
                </div>
                <div class="span3">
                    <a href="pdf.js/web/viewer.php?url=../../pdf/biblioteca/marco_normativo/Ley_de_Planeacion_del_Estado_de_Campeche.pdf?iframe=true&width=80%&height=85%" rel="modalBox">
                        <img class="thumbnails" src="images/biblioteca/pdf/marco_normativo/5.png" alt="">
                    </a>
                    <h4>Ley de Planeación del Estado de Campeche</h4>
                </div>
                <div class="span3">
                    <a href="pdf.js/web/viewer.php?url=../../pdf/biblioteca/marco_normativo/Instructivo_Carmen.pdf?iframe=true&width=80%&height=85%" rel="modalBox">
                        <img class="thumbnails" src="images/biblioteca/pdf/marco_normativo/6.png" alt="">
                    </a>
                    <h4>Instructivo Carmen</h4>
                </div>
                <div class="span3">
                    <a href="pdf.js/web/viewer.php?url=../../pdf/biblioteca/marco_normativo/Ley_de_Hacienda_de_los_mpios.pdf?iframe=true&width=80%&height=85%" rel="modalBox">
                        <img class="thumbnails" src="images/biblioteca/pdf/marco_normativo/7.png" alt="">
                    </a>
                    <h4>Ley de Hacienda de los Municipios del Estado</h4>
                </div>

            </div>

            <div class="portfolio-title">
                <h3>Decretos de los Municipios</h3>
            </div>
            
            <div class="row content-pdf">

                <div class="span2">
                    <a href="pdf.js/web/viewer.php?url=../../pdf/biblioteca/decretos/Zonificacion_Calakmul.pdf?iframe=true&width=80%&height=85%" rel="modalBox">
                        <img class="thumbnails" src="images/biblioteca/pdf/decretos/1.png" alt="">
                    </a>
                    <h4>Zonificación Calakmul</h4>
                </div>
                <div class="span2">
                    <a href="pdf.js/web/viewer.php?url=../../pdf/biblioteca/decretos/Zonificacion_Calkini.pdf?iframe=true&width=80%&height=85%" rel="modalBox">
                        <img class="thumbnails" src="images/biblioteca/pdf/decretos/2.png" alt="">
                    </a>
                    <h4>Zonificación Calkini</h4>
                </div>
                <div class="span2">
                    <a href="pdf.js/web/viewer.php?url=../../pdf/biblioteca/decretos/Zonificacion_Candelaria.pdf?iframe=true&width=80%&height=85%" rel="modalBox">
                        <img class="thumbnails" src="images/biblioteca/pdf/decretos/3.png" alt="">
                    </a>
                    <h4>Zonificación Candelaria</h4>
                </div>
                <div class="span2">
                    <a href="pdf.js/web/viewer.php?url=../../pdf/biblioteca/decretos/Zonificacion_Campeche.pdf?iframe=true&width=80%&height=85%" rel="modalBox">
                        <img class="thumbnails" src="images/biblioteca/pdf/decretos/4.png" alt="">
                    </a>
                    <h4>Zonificación Campeche</h4>
                </div>
                <div class="span2">
                    <a href="pdf.js/web/viewer.php?url=../../pdf/biblioteca/decretos/Zonificacion_Carmen.pdf?iframe=true&width=80%&height=85%" rel="modalBox">
                        <img class="thumbnails" src="images/biblioteca/pdf/decretos/5.png" alt="">
                    </a>
                    <h4>Zonificación Carmen</h4>
                </div>
                <div class="span2">
                    <a href="pdf.js/web/viewer.php?url=../../pdf/biblioteca/decretos/Zonificacion_Champoton.pdf?iframe=true&width=80%&height=85%" rel="modalBox">
                        <img class="thumbnails" src="images/biblioteca/pdf/decretos/6.png" alt="">
                    </a>
                    <h4>Zonificación Champotón</h4>
                </div>
                <div class="span2">
                    <a href="pdf.js/web/viewer.php?url=../../pdf/biblioteca/decretos/Zonificacion_Escarcega.pdf?iframe=true&width=80%&height=85%" rel="modalBox">
                        <img class="thumbnails" src="images/biblioteca/pdf/decretos/7.png" alt="">
                    </a>
                    <h4>Zonificación Escárcega</h4>
                </div>
                <div class="span2">
                    <a href="pdf.js/web/viewer.php?url=../../pdf/biblioteca/decretos/Zonificacion_Hecelchakan.pdf?iframe=true&width=80%&height=85%" rel="modalBox">
                        <img class="thumbnails" src="images/biblioteca/pdf/decretos/8.png" alt="">
                    </a>
                    <h4>Zonificación Hecelchakán</h4>
                </div>
                <div class="span2">
                    <a href="pdf.js/web/viewer.php?url=../../pdf/biblioteca/decretos/zonificacion_hopelchen.pdf?iframe=true&width=80%&height=85%" rel="modalBox">
                        <img class="thumbnails" src="images/biblioteca/pdf/decretos/9.png" alt="">
                    </a>
                    <h4>Zonificación Hopelchén</h4>
                </div>
                <div class="span2">
                    <a href="pdf.js/web/viewer.php?url=../../pdf/biblioteca/decretos/Zonificacion_Palizada.pdf?iframe=true&width=80%&height=85%" rel="modalBox">
                        <img class="thumbnails" src="images/biblioteca/pdf/decretos/10.png" alt="">
                    </a>
                    <h4>Zonificación Palizada</h4>
                </div>
                <div class="span2">
                    <a href="pdf.js/web/viewer.php?url=../../pdf/biblioteca/decretos/Zonificacion_Tenabo.pdf?iframe=true&width=80%&height=85%" rel="modalBox">
                        <img class="thumbnails" src="images/biblioteca/pdf/decretos/11.png" alt="">
                    </a>
                    <h4>Zonificación Tenabo</h4>
                </div>

            </div>
        </div>

       </div><!-- Fin Sección biblioteca -->

       <!--------------------------------------- CONTENIDO DE INFORMACION --------------------------------------->

       



   
 
        
        <!-- Footer -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="copyright span12">
                        <p>InfoCam, calle 12 # 116, Ciudad Amurallada de San Francisco de Campeche <br>Campeche | INFOCAM © <? echo(Date("Y")); ?></p>
                    </div>
                </div>
            </div>
        </footer>

        <!-- script para las ventanas modal-->
        <script type='text/javascript' src='js/modal.js'></script>
        <script type='text/javascript'>
        modalBox.init('a','^modalBox')
        </script>   

    </body>

</html>

