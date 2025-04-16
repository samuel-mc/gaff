<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>
    <main>
        <section class="home__hero faq_hero">
            <div class="hero__content">
                <h2 class="poppins-semibold text--xl text--white">PREGUNTAS FRECUENTES
                </h2>
            </div>
        </section>

        <section class="mw--1440 py-4 px-4 px-md-5">
            <div class="py-3">
                <div class="py-3 row g-4">
                    <ul class="col-md-4 nav flex-column nav-tabs-faq border " id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active d-flex align-items-start gap-2" id="tab-1" data-bs-toggle="tab" data-bs-target="#tab-1-pane" type="button" role="tab" aria-controls="tab-1-pane" aria-selected="true">
                                <span class="toggle-icon">−</span> <!-- icono activo -->
                                <span>Lorem ipsum dolor sit amet consectetur qui  </span>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link d-flex align-items-start gap-2" id="tab-2" data-bs-toggle="tab" data-bs-target="#tab-2-pane" type="button" role="tab" aria-controls="tab-2-pane" aria-selected="false">
                                <span class="toggle-icon">+</span>
                                <span>culpa harum voluptatibus atque expedita ratione deleniti inventore.</span>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link d-flex align-items-start gap-2" id="tab-3" data-bs-toggle="tab" data-bs-target="#tab-3-pane" type="button" role="tab" aria-controls="tab-3-pane" aria-selected="false">
                                <span class="toggle-icon">+</span>
                                <span> adipisicing elit. Veniam quam quas unde amet, placeat laudantium</span>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link d-flex align-items-start gap-2" id="tab-4" data-bs-toggle="tab" data-bs-target="#tab-4-pane" type="button" role="tab" aria-controls="tab-4-pane" aria-selected="false">
                                <span class="toggle-icon">+</span>
                                <span>assumenda nobis soluta ducimus id fugiat</span>
                            </button>
                        </li>
                    </ul>
                    <div class="col-md-8">
                        <div class="tab-content my-0 p-4 border" id="myTabContent">
                            <div class="tab-pane fade show active" id="tab-1-pane" role="tabpanel" aria-labelledby="tab-1" tabindex="0">
                                <h3>Blandit nec feugiat vitae luctus.</h3>
                                <p class="poppins-regular text--md mx-auto mt-5">
                                En GAFF, contamos con la certificación de la norma Internacional ISO 9001:2015 que nos fue otorgada a mediados del 2018. Con la finalidad de tener una mejora constante en nuestro sistema de gestión de calidad. Implementando procesos enfocados al desarrollo que aumentan la eficiencia de manera interna.
                                Ofreciendo a nuestros clientes mejores productos y servicio.
                                </p>
                            </div>
                            <div class="tab-pane fade" id="tab-2-pane" role="tabpanel" aria-labelledby="tab-2" tabindex="0">
                                <h3>Blandit nec feugiat vitae luctus. 2</h3>
                                <p class="poppins-regular text--md mx-auto mt-5">
                                En GAFF, contamos con la certificación de la norma Internacional ISO 9001:2015 que nos fue otorgada a mediados del 2018. Con la finalidad de tener una mejora constante en nuestro sistema de gestión de calidad. Implementando procesos enfocados al desarrollo que aumentan la eficiencia de manera interna.
                                Ofreciendo a nuestros clientes mejores productos y servicio.
                                </p>
                            </div>
                            <div class="tab-pane fade" id="tab-3-pane" role="tabpanel" aria-labelledby="tab-3" tabindex="0">
                                <h3>Blandit nec feugiat vitae luctus. 3</h3>
                                <p class="poppins-regular text--md mx-auto mt-5">
                                En GAFF, contamos con la certificación de la norma Internacional ISO 9001:2015 que nos fue otorgada a mediados del 2018. Con la finalidad de tener una mejora constante en nuestro sistema de gestión de calidad. Implementando procesos enfocados al desarrollo que aumentan la eficiencia de manera interna.
                                Ofreciendo a nuestros clientes mejores productos y servicio.
                                </p>
                            </div>
                            <div class="tab-pane fade" id="tab-4-pane" role="tabpanel" aria-labelledby="tab-4" tabindex="0">
                                <h3>Blandit nec feugiat vitae luctus. 4</h3>
                                <p class="poppins-regular text--md mx-auto mt-5">
                                En GAFF, contamos con la certificación de la norma Internacional ISO 9001:2015 que nos fue otorgada a mediados del 2018. Con la finalidad de tener una mejora constante en nuestro sistema de gestión de calidad. Implementando procesos enfocados al desarrollo que aumentan la eficiencia de manera interna.
                                Ofreciendo a nuestros clientes mejores productos y servicio.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>        

    </main>

<script>
    const tabs = document.querySelectorAll('.nav-tabs-faq .nav-link');

    tabs.forEach(tab => {
        tab.addEventListener('shown.bs.tab', () => {
            tabs.forEach(t => t.querySelector('.toggle-icon').textContent = '+');
            tab.querySelector('.toggle-icon').textContent = '−';
        });
    });
</script>

<?php include 'partials/footer.php'; ?>