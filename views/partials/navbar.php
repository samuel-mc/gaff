<?php $title = isset($title) ? $title : 'Gaff';
?>

<header style="background-color: #F4F4F4F5;">
    <!--  top part  -->
    <div class="px-4 py-2 bg--black d-flex flex-column flex-md-row justify-content-between align-items-center">
        <div class="">
            <ul class="list-unstyled d-flex m-0">
                <li class="mx-2">
                    <a class="a--cyan" href="#">
                        <i class="fa-brands fa-square-facebook fa-xl"></i>
                    </a>
                </li>
                <li class="mx-2">
                    <a class="a--cyan" href="#">
                        <i class="fa-brands fa-square-instagram fa-xl"></i>
                    </a>
                </li>
                <li class="mx-2">
                    <a class="a--cyan" href="#">
                        <i class="fa-brands fa-linkedin fa-xl"></i>
                    </a>
                </li>
                <li class="mx-2">
                    <a class="a--cyan" href="#">
                        <i class="fa-brands fa-twitter fa-xl"></i>
                    </a>
                </li>
                <li class="mx-2">
                    <a class="a--cyan" href="#">
                        <i class="fa-brands fa-tumblr fa-xl"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div>
            <button type="button" class="btn btn-transparent d-flex align-items-center text-white py-3">
                <span style="min-width: max-content; margin-right: 8px" class="poppins-regular">Cambiar región</span>
                <img src="<?php echo __ROOT__; ?>/public/img/mexicoFlag.png" alt="Bandera de mexico">
            </button>
        </div>
    </div>
    <!-- bottom part - desktop -->
    <div class="d-none d-lg-flex justify-content-between align-items-center py-4 px-5">
        <!-- left side -->
        <div>
            <button type="button" class="btn btn-transparent p-0 p-2 a--black">
                <i class="fa-solid fa-magnifying-glass"></i>
            </button>
        </div>

        <!-- center -->
        <div>
            <ul class="list-unstyled d-flex poppins-regular p-0 m-0">
                <li class="mx-3">
                    <a class="a--black" href="<?php echo __ROOT__; ?>/"> Inicio</a>
                </li>
                <li class="mx-3">
                    <a class="a--black" href="<?php echo __ROOT__; ?>/products"> Productos</a>
                </li>
                <li class="mx-3">
                    <a class="a--black" href="<?php echo __ROOT__; ?>/about"> Acerca de nosotros</a>
                </li>
                <li class="mx-3">
                    <a class="a--black" href="<?php echo __ROOT__; ?>/catalog"> Catálogo de productos</a>
                </li>
<!--                <li class="mx-3 dropdown">-->
<!--                    <a class="a--black dropdown-toggle" href="--><?php //echo __ROOT__; ?><!--/distributors"> Distribuidores</a>-->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                       aria-expanded="false" id="dropdownDistribuidores">
                        Distribuidores
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?php echo __ROOT__; ?>/distributors/nationals">Nacionales</a></li>
                        <li><a class="dropdown-item" href="<?php echo __ROOT__; ?>/distributors/internationals">Internacionales</a></li>
                    </ul>
                </li>
                </li>
                <li class="mx-3">
                    <a class="a--black" href="<?php echo __ROOT__; ?>/news"> Entérate</a>
                </li>
                <li class="mx-3">
                    <a class="a--black" href="<?php echo __ROOT__; ?>/contact"> Contacto</a>
                </li>
            </ul>
        </div>

        <!-- right side -->
        <div>
            <a href="<?php echo __ROOT__; ?>/">
                <img src="<?php echo __ROOT__; ?>/public/img/logo.png" alt="logo" width="69.7" height="66.63">
            </a>
        </div>
    </div>
    <!-- bottom part - mobile -->
    <div class="d-lg-none">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="<?php echo __ROOT__; ?>/public/img/logo.png" alt="logo" width="69.7" height="66.63">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                        aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav py-4">
                        <a class="nav-link a--black my-1" href="<?php echo __ROOT__; ?>/">Inicio</a>
                        <a class="nav-link a--black my-1" href="<?php echo __ROOT__; ?>/products">Productos</a>
                        <a class="nav-link a--black my-1" href="<?php echo __ROOT__; ?>/about">Acerca de nosotros</a>
                        <a class="nav-link a--black my-1" href="<?php echo __ROOT__; ?>/catalog">Catálogo de
                            productos</a>
                        <li class="nav-item dropdown">
                            <a class="nav-link a--black dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                               aria-expanded="false" id="dropdownDistribuidores">
                                Distribuidores
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?php echo __ROOT__; ?>/distributors/nationals">Nacionales</a></li>
                                <li><a class="dropdown-item" href="<?php echo __ROOT__; ?>/distributors/internationals">Internacionales</a></li>
                            </ul>
                        </li>
                        <a class="nav-link a--black my-1" href="<?php echo __ROOT__; ?>/news">Entérate</a>
                        <a class="nav-link a--black my-1" href="<?php echo __ROOT__; ?>/contact">Contacto</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
