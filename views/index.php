<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>
    <main>
        <section class="home__hero">
            <div class="hero__content">
                <h2 class="poppins-semibold text--xl text--white">
                    Buscar por codigo
                </h2>
                <p class="poppins-regular text--md text--white">
                    Escribe el código GAFF u OEM
                </p>
                <div class="hero__input--container">
                    <input type="text" placeholder="Código GAFF/OEM" class="w-100">
                    <button type="submit" class="btn btn-transparent p-4 aspect--square rounded-0">
                        <img src="<?php echo __ROOT__; ?>/public/img/home/iconArrow.png" alt="icon arrow" width="22"
                             height="22">
                    </button>
                </div>
            </div>
        </section>
        <section class="mw--1440 py-5 px-4 px-md-5">
            <div class="grid--2cols px-md-5 gap--24">
                <div class="text-center">
                    <img src="<?php echo __ROOT__; ?>/public/img/home/about.png" alt="icon" class="w-100 mw--520">
                </div>
                <div class="align-content-center">
                    <span class="poppins-regular text--sm text--orange mb-2">¿Quiénes somos?</span>
                    <h2 class="poppins-semibold text--xl mb-4">EN GAFF nos comprometemos con nuestros clientes</h2>
                    <p class="poppins-regular text--grey">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada arcu a est laoreet, ut
                        consectetur diam tempor. Etiam elementum tristique aliquam. 
                    </p>
                </div>
            </div>
        </section>

        <section class="mw--1440 py-4 px-4 px-md-5">
            <?php
            $categorias = [
                [
                    'id' => 1,
                    'nombre' => 'Cofre'
                ],
                [
                    'id' => 2,
                    'nombre' => 'Compresor'
                ],
                [
                    'id' => 3,
                    'nombre' => 'Empaque'
                ]
            ]
            ?>
            <div class="align-content-center w--50 m-0">
                <span class="poppins-regular text--sm text--orange mb-2">Categorías</span>
                <h2 class="poppins-semibold text--xl mb-4">Gran selección de productos en nuestro sitio web.</h2>
            </div>

            <div class="splide" id="splideCategorias">
                <div class="splide__track">
                    <div class="splide__list">
                        <?php foreach ($categorias as $categoria): ?>
                            <div class="splide__slide rounded-4 shadow-sm p-4 <?php echo $categoria['id'] % 2 == 0 ? 'categoria--orange' : 'categoria--blue'; ?>">
                                <a href="<?php echo __ROOT__; ?>/productos/categoria/<?php echo $categoria['id']; ?>" class="categoria--card">
                                    <div class="categoria--header">
                                        <h3 class="poppins-semibold text--lg text--black mb-2"><?php echo $categoria['nombre']; ?></h3>
                                    </div>
                                    <div class="categoria--img">
                                        <img src="<?php echo __ROOT__; ?>/public/img/home/c<?php echo $categoria['id'] ?>.png"
                                             alt="icon"
                                             class="w-100 mw--200 mb-2">
                                    </div>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
        </section>

        <section class="mw--1440 py-5 px-4 px-md-5">
            <header class="text-center">
                <span class="poppins-regular text--sm text--orange mb-2">Productos</span>
                <h2 class="poppins-semibold text--xl mb-4">Nuestros productos</h2>
            </header>
            <main>
                <?php
                    $productosBanner = [
                        [
                            'id' => 1,
                            'nombre' => 'Buje para Barra de Torsión',
                            'numero' => '13522',
                            ],
                        [
                            'id' => 2,
                            'nombre' => 'Buje para Barra de Torsión',
                            'numero' => '13522',
                        ],
                        [
                            'id' => 3,
                            'nombre' => 'Buje para Barra de Torsión',
                            'numero' => '13522',
                        ],
                        [
                            'id' => 4,
                            'nombre' => 'Buje para Barra de Torsión',
                            'numero' => '13522',
                        ],
                        [
                            'id' => 5,
                            'nombre' => 'Buje para Barra de Torsión',
                            'numero' => '13522',
                        ],
                        [
                            'id' => 6,
                            'nombre' => 'Buje para Barra de Torsión',
                            'numero' => '13522',
                        ]
                    ];
                ?>
                <div class="grid--3cols">
                    <?php foreach ($productosBanner as $producto): ?>
                        <div class="banner-productos__item">
                            <div class="banner-productos--img">
                                <img src="<?php echo __ROOT__; ?>/public/img/home/p<?php echo $producto['id'] ?>.png"
                                     alt="icon">
                            </div>
                            <div class="banner-productos--header">
                                <span class="poppins-bold text--lg text--orange mb-2"><?php echo $producto['numero']; ?></span>
                                <h3 class="poppins-regular text--sm text--black mb-2"><?php echo $producto['nombre']; ?></h3>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </main>
        </section>
    </main>

    <script src="<?php echo __ROOT__; ?>/public/lib/splide-4.1.3/dist/js/splide.min.js"></script>
    <script>
        const splideCategorias = new Splide('#splideCategorias', {
            type: 'loop',
            perPage: 3,
            perMove: 1,
            gap: '1rem',
            pagination: false,
            padding: {
                right: '10rem',
            },
            breakpoints: {
                1024: {
                    perPage: 2,
                    padding: {
                        right: '5rem',
                    },
                },
                720: {
                    perPage: 1,
                    padding: {
                        right: '3rem',
                    },
                },
            },
        });

        splideCategorias.mount();
    </script>
<?php include 'partials/footer.php'; ?>