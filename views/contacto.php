<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>
    <main>
        <section class="home__hero contacto_hero">
            <div class="hero__content">
                <h2 class="poppins-semibold text--xl text--white">Contacto</h2>
            </div>
        </section>

        <section class="mw--1440 py-4 px-4 px-md-5">
            <div class="grid--2cols py-4">
                <div class="py-5 px-md-5">
                    <h2 class="poppins-semibold text--xl mb-5">Siempre estamos listos para ayudarte y responder a tus preguntas.</h2>
                    <div>
                        <h3 class="poppins-semibold text--md mb-5">Teléfono</h3>
                    </div>
                    <div>
                        <h3 class="poppins-semibold text--md mb-5">Correo electónico</h3>
                    </div>
                    <div>
                        <h3 class="poppins-semibold text--md mb-3">Cóntactanos</h3>
                        <div class="contacto__links border-0 ">
                            <div class="border-0">
                                <a href="https://www.facebook.com/gaffinternacional" target="_blank">
                                    <i class="fa-brands fa-square-facebook fa-xl"></i>
                                </a>
                            </div>
                            <div class="border-0">
                                <a href="https://www.instagram.com/gaff_internacional/" target="_blank">
                                    <i class="fa-brands fa-square-instagram fa-xl"></i>
                                </a>
                            </div>
                            <div class="border-0">
                                <a href="https://www.linkedin.com/company/gaff-internacional/" target="_blank">
                                    <i class="fa-brands fa-linkedin fa-xl"></i>
                                </a>
                            </div>
                            <div class="border-0">
                                <a href="https://www.tiktok.com/@gaff_internacional" target="_blank">
                                    <i class="fa-brands fa-youtube fa-xl"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="py-5 px-4 px-md-5" style="background-color:#313131;">
                    <header>
                        <h2 class="poppins-semibold text--xl mb-4 text--orange">Ponte en contacto</h2>
                        <p class="poppins-regular text--md text--grey">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada arcu a est laoreet, ut consectetur diam tempor. Etiam elementum tristique aliquam. 
                        </p>
                    </header>
                    <form class="contacto__form text--grey">
                        <input type="text" placeholder="Nombre completo" style="background-color: #313131; border: none; border-bottom: 2px solid #ccc;">
                        <input type="email" placeholder="Correo electrónico" style="background-color: #313131; border: none; border-bottom: 2px solid #ccc;">
                        <input type="text" placeholder="Asunto" style="background-color: #313131; border: none; border-bottom: 2px solid #ccc;">
                        <textarea rows="5" placeholder="Mensaje" style="background-color: #313131; border: none; border-bottom: 2px solid #ccc;"></textarea>
                        <button type="submit" class="btn btn-transparent p-4 poppins-regular">
                            <span class="text--cyan me-4">Enviar mensajes</span>
                            <img src="<?php echo __ROOT__; ?>/public/img/contacto/iconArrowCyan.png" alt="icono de flecha" width="15" height="15">
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
        </section>
    </main>


<?php include 'partials/footer.php'; ?>