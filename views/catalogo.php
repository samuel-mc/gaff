<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>
    <main>
        <section class="home__hero catalogo_hero">
            <div class="hero__content">
                <h2 class="poppins-semibold text--xl text--white">Catálogos de productos
                </h2>
            </div>
        </section>


        <section class="mw--1440 py-4 px-4 px-md-5">
            <div class="text-center">
                <h2 class="poppins-semibold text--xl mb-4 py-4 text--orange">Catálogo Master</h2>
            </div>
            <div id="flipbook" class="mx-auto">
                <div class="page">
                    <img src="<?php echo __ROOT__; ?>/public/img/catalogo/catalogo_portada.png" alt="catalogo" class="img-fluid">
                </div>
                <div class="page">
                    <img src="<?php echo __ROOT__; ?>/public/img/catalogo/catalogo1.png" alt="catalogo" class="img-fluid">
                </div>
                <div class="page">
                    <img src="<?php echo __ROOT__; ?>/public/img/catalogo/catalogo1_1.png" alt="catalogo" class="img-fluid">
                </div>
                <div class="page">
                    <img src="<?php echo __ROOT__; ?>/public/img/catalogo/catalogo2.png" alt="catalogo" class="img-fluid">
                </div>
                <div class="page">
                    <img src="<?php echo __ROOT__; ?>/public/img/catalogo/catalogo2_1.png" alt="catalogo" class="img-fluid">
                </div>
                <div class="page">
                    <img src="<?php echo __ROOT__; ?>/public/img/catalogo/catalogo_final.png" alt="catalogo" class="img-fluid">
                </div>

            </div>
        </section>  

        <section class="mw--1440 py-4 px-4 px-md-5 pb-5">
            <h2 class="poppins-semibold text--xl mb-4 py-4" style="color:#4C4C4C;">También puedes consultar</h2>
            <div class="row text-center">
                <div class="col-md-4">
                    <img src="<?php echo __ROOT__; ?>/public/img/catalogo/master.png" alt="catalogo" class="img-fluid">
                    <h2 class="poppins-semibold text--md">Catálogo Master</h2>
                </div>
                <div class="col-md-4">
                    <img src="<?php echo __ROOT__; ?>/public/img/catalogo/mini.png" alt="catalogo" class="img-fluid">
                    <h2 class="poppins-semibold text--md">Catálogo Master</h2>
                </div>
                <div class="col-md-4">
                    <img src="<?php echo __ROOT__; ?>/public/img/catalogo/planeados.png" alt="catalogo" class="img-fluid">
                    <h2 class="poppins-semibold text--md">Catálogo Master</h2>
                </div>

            </div>

        </section>
    </main>


<?php include 'partials/footer.php'; ?>
<style>
    #flipbook {
      width: 800px;
      height: 500px;
    }

    .page {
      width: 400px;
      height: 500px;
      background: white;
      border: 1px solid #ccc;
      padding: 20px;
      box-sizing: border-box;
    }
</style>
<script src="<?php echo __ROOT__; ?>/public/js/jquery-3.7.1.min.js"></script>
<script src="<?php echo __ROOT__; ?>/public/js/turn.min.js"></script>
<script>
    $(document).ready(function () {
        $('#flipbook').turn({
            width: 800,
            height: 500,
            autoCenter: true,
            display: 'double',
            page: 2

        });
        $('.page').on('click', function(e) {
            const pageWidth = $(this).width();
            const clickX = e.offsetX;

            if (clickX < pageWidth / 2) {
                $('#flipbook').turn('previous');
            } else {
                $('#flipbook').turn('next');
            }
        });
        $('#flipbook').bind('turning', function(event, page, view) {
            // Si alguien intenta ir a la página 1, cancela el cambio
            if (page === 1) {
                event.preventDefault();
                $('#flipbook').turn('page', 2); // fuerza el regreso a página válida
            }
        });

    });
</script>
