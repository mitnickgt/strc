<header id="header" class="box-header sticky">
    <div class="container">
            <div class="row box-header-wrap">
                <!-- Start logo -->
                <div class="col-sm-2 col-xs-4">
                    <div id="logo" class="logos">
                        <a href="/" class="standard-logo pull-left">
                            <img class="logo" src="{{asset('css/img/logo.png')}}" width ="70" height="60" alt="logo">
                        </a>
                    </div>
                </div> <!-- //.col-sm-2 
                <!-- End logo -->
                
                    <!-- Start desktop nav -->
                <div class="col-sm-10 col-xs-8">
                        <nav class="main-nav pull-right">
                            <ul>
                                <li class="has-child ">
                                    <a href="#">Catálogos</a>
                                    <div class="dropdown left-indent">
                                        <ul class="dropdown-items">
                                            <li>
                                                <a href="/catalogos/dependencias">Dependencias</a>
                                            </li>
                                            <li>
                                                <a href="/catalogos/puestos">Puestos</a>
                                            </li>
                                            <li>
                                                <a href="/catalogos/fracciones">Fracciones</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="has-child ">
                                    <a href="#">Padrón</a>
                                    <div class="dropdown left-indent">
                                        <ul class="dropdown-items">
                                            <li>
                                                <a href="/padron/alta">Altas</a>
                                            </li>
                                            <li>
                                                <a href="/padron/movimientos">Movimientos</a>
                                            </li>
                                            <li>
                                                <a href="/padron/recordatorios">Recordatorios</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="has-child ">
                                    <a href="#">Verificación</a>
                                    <div class="dropdown left-indent">
                                        <ul class="dropdown-items">
                                            <li>
                                                <a href="/verificacion/buscar">Buscador</a>
                                            </li>
                                            <li>
                                                <a href="/verificacion/lista">Listado</a>
                                            </li>
                                            <li>
                                                <a href="/verificacion/procedimientos">Procedimientos</a>
                                            </li>
                                            <li>
                                                <a href="/verificacion/consulta">Declaraciones</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="has-child ">
                                    <a href="#">Usuarios</a>
                                    <div class="dropdown left-indent">
                                        <ul class="dropdown-items">
                                            <li>
                                                <a href="/usuarios">Usuarios</a>
                                            </li>
                                            <li>
                                                <a href="/usuarios/roles">Roles y permisos</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="has-child ">
                                    <a href="#">Opciones</a>
                                    <div class="dropdown left-indent">
                                        <ul class="dropdown-items">
                                            <li>
                                                <a href="/opciones">Configuración</a>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                </li>
                                <li class="has-child ">
                                    <a href="#">Reportes</a>
                                    <div class="dropdown left-indent">
                                        <ul class="dropdown-items">
                                            <li>
                                                <a href="/reportes/declaracion">Declaraciones</a>
                                            </li>
                                            <li>
                                                <a href="/reportes/cumplimiento">Cumplimiento</a>
                                            </li>
                                            <li>
                                                <a href="/reportes/padron">Padrón</a>
                                            </li>
                                            <li>
                                                <a href="/reportes/omisos">Omisos</a>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                        <a href="/login/out">Salir</a>
                                </li>

                            </ul>
                        </nav>

                        <!-- toogle icons, which are responsible for display and hide menu in small layout -->
                        <div class="offcanvas-toggler pull-right">
                                <i id="offcanvas-opener" class="icon-menu"></i>
                                <i id="offcanvas-closer" class="icon-times"></i>
                        </div>
                </div> <!-- //.col-sm-10 -->
                    <!-- End desktop nav -->
            </div> <!-- //.row -->
     </div> <!-- //.container -->
</header>
<!-- //End Header -->