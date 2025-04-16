<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>

<main>
    <section class="mw--1440 py-4 px-4 px-md-5">
        <div class="grid--2cols">
            <div class="p-4 p-lg-5 align-content-center">
                <h2 class="poppins-bold text--xl mb-2">Oops.... </h2>
                <h3 class="poppins-regular text--lg mb-3">Página no encontrada</h3>
                <p class="poppins-regular text--sm mb-5">¡Esta página no existe o fue eliminada! Te sugerimos volver a la página principal.</p>
                <a href="<?php echo __ROOT__; ?>" class="a--cyan poppins-regular text--sm">
                    <img src="<?php echo __ROOT__; ?>/public/img/backArrow.png" alt="arrow right" width="15" height="15">
                    <span class="ms-2">Regresar a inicio</span>
                </a>
            </div>
            <div class="p-4 p-lg-5 text-center align-content-center">
                <img src="<?php echo __ROOT__; ?>/public/img/404.png" alt="404" class="w-100 mw--400">
            </div>
        </div>
    </section>
</main>

<?php include 'partials/footer.php'; ?>
