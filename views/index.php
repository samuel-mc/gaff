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
                    <h2 class="poppins-semibold text--xl mb-4 word--break">EN GAFF nos comprometemos con nuestros clientes</h2>
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
                                <a href="<?php echo __ROOT__; ?>/productos/categoria/<?php echo $categoria['id']; ?>"
                                   class="categoria--card">
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
        <section class="bg--black py-5 px-4 px-md-5">
            <div class="mw--1440">
                <?php $reviews = [
                    [
                        'id' => 1,
                        'nombre' => 'Juan Pérez',
                        'puesto' => 'Gerente de Ventas',
                        'review' => 'Sed ut perspiciatis, unde omnis iste natus error sit volup tatem accus antium dolore mque laud antium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et. Consectetur adipiscing elit, sed do eiusm onsectetur adipiscing elit.'
                    ]
                ]; ?>

                <div class="splide" id="splideReviews">
                    <div class="splide__track">
                        <div class="splide__list">
                            <?php foreach ($reviews as $review): ?>
                                <div class="splide__slide p-4 p-lg-5 text-center">
                                    <main>
                                        <p class="poppins-semibold text--lg text-white">
                                            <?php echo $review['review']; ?>
                                        </p>
                                        <p class="poppins-regular text--xl text-white">
                                            "
                                        </p>
                                    </main>
                                    <footer>
                                        <h3 class="poppins-semibold text--md text-white"><?php echo $review['nombre']; ?></h3>
                                        <span class="poppins-regular text--sm text-white"><?php echo $review['puesto']; ?></span>
                                    </footer>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
            </div>
        </section>
        <section class="mw--1440 py-4 px-4 px-md-5">
            <header class="w--50 m-0">
                <span class="poppins-regular text--sm text--orange mb-2">Clientes</span>
                <h2 class="poppins-semibold text--xl mb-4">Socios que confían en GAFF internacional</h2>
            </header>
            <div class="clientes__container">
                <img src="<?php echo __ROOT__; ?>/public/img/home/Twitch.png" alt="clientes">
                <img src="<?php echo __ROOT__; ?>/public/img/home/Facebook.png" alt="clientes">
                <img src="<?php echo __ROOT__; ?>/public/img/home/Google.png" alt="clientes">
                <img src="<?php echo __ROOT__; ?>/public/img/home/YouTube.png" alt="clientes">
                <img src="<?php echo __ROOT__; ?>/public/img/home/Pinterest.png" alt="clientes">
                <img src="<?php echo __ROOT__; ?>/public/img/home/Pinterest.png" alt="clientes">
                <img src="<?php echo __ROOT__; ?>/public/img/home/YouTube.png" alt="clientes">
                <img src="<?php echo __ROOT__; ?>/public/img/home/Google.png" alt="clientes">
                <img src="<?php echo __ROOT__; ?>/public/img/home/Facebook.png" alt="clientes">
                <img src="<?php echo __ROOT__; ?>/public/img/home/Twitch.png" alt="clientes">
            </div>
        </section>
        <section class="bg--black">
            <div class="mw--1440 py-4 px-4 px-md-5">
                <div class="grid--2cols py-4">
                    <div class="text-white py-5 px-md-5">
                        <h2 class="poppins-semibold text--xl mb-5">Siempre estamos listos para ayudarte y responder a tus preguntas.</h2>
                        <div>
                            <h3 class="poppins-semibold text--md mb-5">Teléfono</h3>
                        </div>
                        <div>
                            <h3 class="poppins-semibold text--md mb-5">Correo electónico</h3>
                        </div>
                        <div>
                            <h3 class="poppins-semibold text--md mb-3">Cóntactanos</h3>
                            <div class="contacto__links">
                                <div>
                                    <a href="https://www.facebook.com/gaffinternacional" target="_blank">
                                        <i class="fa-brands fa-square-facebook fa-xl"></i>
                                    </a>
                                </div>
                                <div>
                                    <a href="https://www.instagram.com/gaff_internacional/" target="_blank">
                                        <i class="fa-brands fa-square-instagram fa-xl"></i>
                                    </a>
                                </div>
                                <div>
                                    <a href="https://www.linkedin.com/company/gaff-internacional/" target="_blank">
                                        <i class="fa-brands fa-linkedin fa-xl"></i>
                                    </a>
                                </div>
                                <div>
                                    <a href="https://www.tiktok.com/@gaff_internacional" target="_blank">
                                        <i class="fa-brands fa-youtube fa-xl"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white py-5 px-4 px-md-5">
                        <header>
                            <h2 class="poppins-semibold text--xl mb-4">Ponte en contacto</h2>
                            <p class="poppins-regular text--md text--grey">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada arcu a est laoreet, ut consectetur diam tempor. Etiam elementum tristique aliquam. 
                            </p>
                        </header>
                        <form class="contacto__form">
                            <input type="text" placeholder="Nombre completo">
                            <input type="email" placeholder="Correo electrónico">
                            <input type="text" placeholder="Asunto">
                            <textarea rows="5" placeholder="Mensaje"></textarea>
                            <button type="submit" class="btn btn-transparent p-4 poppins-regular">
                                <span class="text--orange me-4">Enviar mensajes</span>
                                <img src="<?php echo __ROOT__; ?>/public/img/home/iconArrowOragne.png" alt="icono de flecha" width="15" height="15">
                            </button>
                        </form>
                    </div>
                </div>
                <div>
                    <iframe class="contacto__frame"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d240864.19511350236!2d-99.30876455511228!3d19.39065905771399!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ce0026db097507%3A0x54061076265ee841!2sCiudad%20de%20M%C3%A9xico%2C%20CDMX!5e0!3m2!1ses-419!2smx!4v1744726860365!5m2!1ses-419!2smx"
                            style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
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

        const splideReviews = new Splide('#splideReviews', {
            type: 'loop',
            perPage: 1,
            perMove: 1,
            autoplay: true,
            interval: 3000,
        });
        splideReviews.mount();
    </script>
<?php include 'partials/footer.php'; ?>