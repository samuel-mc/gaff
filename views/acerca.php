<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>
    <main>
        <section class="home__hero acerca_hero">
            <div class="hero__content">
                <p class="poppins-regular text--md text--orange">
                    Quienes somos
                </p>
                <h2 class="poppins-semibold text--xl text--white">
                    EN GAFF nos comprometemos con nuestros clientes
                </h2>
                <p class="poppins-regular text--md text--white">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id fugit reprehenderit quo saepe eius. Harum, minima aliquam ducimus velit et ullam dolore ipsa vel aliquid aut repudiandae similique cupiditate esse!
                </p>
            </div>
        </section>
        <section class="container py-5">
            <div class="row g-5 justify-content-center">
                <!-- Misión -->
                <div class="col-md-6 d-flex flex-column align-items-center text-center">
                    <div class="d-flex align-items-center justify-content-center mb-3">
                        <img src="<?php echo __ROOT__; ?>/public/img/acerca/lineas.png" alt="icono línea decorativa">
                        <h2 class="poppins-semibold text--xl ms-3 mb-0">Misión</h2>
                    </div>
                    <p class="poppins-regular text--md " style="text-align: justify; max-width: 90%;">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed diam nonummy nibh euismod tincidunt ut
                        laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
                        ullamcorper.
                    </p>
                </div>

                <!-- Visión -->
                <div class="col-md-6 d-flex flex-column align-items-center text-center">
                    <div class="d-flex align-items-center justify-content-center mb-3">
                        <h2 class="poppins-semibold text--xl me-3 mb-0">Visión</h2>
                        <img src="<?php echo __ROOT__; ?>/public/img/acerca/lineas.png" alt="icono línea decorativa">
                    </div>
                    <p class="poppins-regular text--md " style="text-align: justify; max-width: 90%;">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed diam nonummy nibh euismod tincidunt ut
                        laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
                        ullamcorper.
                    </p>
                </div>
            </div>
        </section>
        <section class="container py-5">
            <div class="row g-5 justify-content-center">
                <!-- Misión -->
                <img src="<?php echo __ROOT__; ?>/public/img/acerca/valores.png" class="pe-md-5 col-md-4" alt="valores">
                <!-- Visión -->
                <div class="col-md-8 ps-5">
                    <div class="mb-3">
                        <span class="poppins-regular text--sm text--orange mb-2 ms-2">Categorías</span>
                        <h2 class="poppins-semibold text--xl me-3 mb-0">Valores</h2>
                    </div>
                    <div class="ps-5 py-5">
                        <span class="poppins-semibold text--lg text--cyan mb-2">Orientación al servicio</span>
                        <p class="poppins-regular text--md " style="text-align: justify;">
                            En GAFF, nos dedicamos a entender y superar las necesidades de nuestros clientes, ofreciendo soluciones de calidad en bujes y soportes de poliuretano que garantizan confiabilidad y durabilidad en cada viaje.
                        </p>
                    </div>
                </div>
            </div>
        </section>


        <section class="mw--1440 py-4 px-md-4 px-md-5">
            <div>
                <img src="<?php echo __ROOT__; ?>/public/img/acerca/iso.png" alt="Iso" class=" img-fluid">
            </div>
        </section>

        <section class="mw--1440 py-4 px-4 px-md-5">
            <div class="py-3">
                <p class="poppins-regular text--md mx-auto" style="text-align: justify; max-width: 60%;">
                En GAFF, contamos con la certificación de la norma Internacional ISO 9001:2015 que nos fue otorgada a mediados del 2018. Con la finalidad de tener una mejora constante en nuestro sistema de gestión de calidad. Implementando procesos enfocados al desarrollo que aumentan la eficiencia de manera interna.
                Ofreciendo a nuestros clientes mejores productos y servicio.
                </p>
            </div>
            <div class="py-3 timeline-wrapper overflow-auto">
                <!-- Image Map Generated by http://www.image-map.net/ -->
                <img src="<?php echo __ROOT__; ?>/public/img/acerca/timeline.png" usemap="#image-map">

                <map name="image-map">
                    <area alt="linea1" title="linea1" href="" coords="131,76,63" shape="circle" data-bs-toggle="modal" data-bs-target="#imgModal" data-img="<?php echo __ROOT__; ?>/public/img/acerca/timeline1.png">
                    <area alt="linea2" title="linea2" href="" coords="234,330,60" shape="circle" data-bs-toggle="modal" data-bs-target="#imgModal" data-img="<?php echo __ROOT__; ?>/public/img/acerca/timeline2.png">
                    <area alt="linea3" title="linea3" href="" coords="440,332,59" shape="circle" data-bs-toggle="modal" data-bs-target="#imgModal" data-img="<?php echo __ROOT__; ?>/public/img/acerca/timeline3.png">
                    <area alt="linea4" title="linea4" href="" coords="542,74,61" shape="circle" data-bs-toggle="modal" data-bs-target="#imgModal" data-img="<?php echo __ROOT__; ?>/public/img/acerca/timeline4.png">
                    <area alt="linea5" title="linea5" href="" coords="749,76,55" shape="circle" data-bs-toggle="modal" data-bs-target="#imgModal" data-img="<?php echo __ROOT__; ?>/public/img/acerca/timeline5.png">
                    <area alt="linea6" title="linea6" href="" coords="968,69,60" shape="circle" data-bs-toggle="modal" data-bs-target="#imgModal" data-img="<?php echo __ROOT__; ?>/public/img/acerca/timeline6.png">
                    <area alt="linea7" title="linea7" href="" coords="1089,330,59" shape="circle" data-bs-toggle="modal" data-bs-target="#imgModal" data-img="<?php echo __ROOT__; ?>/public/img/acerca/timeline7.png">
                </map>
                <!-- Modal Bootstrap reducido -->
                <div class="modal fade" id="imgModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-centered">
                    <div class="modal-content bg-transparent border-0">
                    <div class="modal-header border-0 justify-content-end">
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                    </div>
                    <div class="modal-body p-0 text-center">
                        <img id="modalImage" src="" class="img-fluid" alt="Detalle de imagen">
                    </div>
                    </div>
                </div>
                </div>

            </div>
        </section>        

    </main>

<script>
    document.querySelectorAll('area[data-img]').forEach(area => {
        area.addEventListener('click', function () {
            const imgSrc = this.getAttribute('data-img');
            document.getElementById('modalImage').src = imgSrc;
        });
    });
</script>
<?php include 'partials/footer.php'; ?>