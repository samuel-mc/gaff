<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>

<main>
    <section class="mw--1440 py-4 px-4 px-md-5">
        <div class="grid--2cols">
            <div>
                <img src="<?php echo __ROOT__; ?>/public/img/products/item.png" alt="producto" class="w-100 mw--400">
            </div>
            <div>
                <h3 class="poppins-bold text--lg text--orange mb-4">13510</h3>
                <h2 class="poppins-bold text--md">Kit Buje Tri-Funcional</h2>
                <span class="poppins-regular text--sm text--cyan">Trifunctional Bushing Kit</span>
                <div class="d-flex align-items-center">
                    <i class="fa-solid fa-circle-check text-success pe-2"></i>
                    <span class="p-0 m-0 poppins-light text--sm">Planeado</span>
                </div>
                <div class="d-flex flex-column py-4">
                    <span class="poppins-bold text--xs">Disponible en amazon:</span>
                    <a href="#">
                        <img src="<?php echo __ROOT__; ?>/public/img/products/logoAmazon.png" alt="logo de amazon"
                             width="100" class="me-2">
                        <i class="fa-solid fa-circle-right text--cyan"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- Product description -->
        <div class="py-4">
            <!-- Tabs -->
            <div>
                <button type="button" class="description__button active" id="detalleButton"
                        onclick="changeTab('detalle')">Detalle del producto
                </button>
                <button type="button" class="description__button" id="referenciaButton"
                        onclick="changeTab('referencia')">Referencia Cruzada
                </button>
            </div>
            <div>
                <div id="detalleContent" class="p-4 description__content">
                    <ul class="list-unstyled">
                        <li class="poppins-regular text--lg text--cyan">Marca: <span
                                    class="text-black">Hendrickson</span></li>
                        <li class="poppins-regular text--lg text--cyan"># OEM: <span class="text-black">A-6914</span>
                        </li>
                        <li class="poppins-regular text--lg text--cyan">Aplicación: <span
                                    class="text-black">Suspensión</span></li>
                        <li class="poppins-regular text--lg text--cyan">Piezas por unidad: <span
                                    class="text-black">2</span></li>
                    </ul>
                    <div class="py-3 description__table">
                        <h4 class="poppins-semibold text--lg">Dimensiones</h4>
                        <table>
                            <thead>
                            <tr>
                                <th></th>
                                <th class="poppins-regular text--md px-2 py-1">mm</th>
                                <th class="poppins-regular text--md px-2 py-1">Inch</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="poppins-regular text--md px-2 py-1 pe-5">Diámetro Exterior / Outer Diameter
                                    <span class="text--orange">(OD)</span></td>
                                <td class="poppins-regular text--md px-2 py-1">150.81</td>
                                <td class="poppins-regular text--md px-2 py-1">5 15⁄16"</td>
                            </tr>
                            <tr>
                                <td class="poppins-regular text--md px-2 py-1 pe-5">Diámetro Interior / Inner Diameter
                                    <span class="text--orange">(OD)</span></td>
                                <td class="poppins-regular text--md px-2 py-1">31.75</td>
                                <td class="poppins-regular text--md px-2 py-1">1 1⁄4"</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div id="referenciaContent" class="p-4 description__content">
                    <div class="grid--2cols">
                        <ul class="list-unstyled">
                            <li class="poppins-regular text--lg text--cyan">Atro: <span
                                        class="text-black">PB50-36914</span></li>
                            <li class="poppins-regular text--lg text--cyan">Automann: <span class="text-black">TRB5912 / TRK5912UB</span>
                            </li>
                            <li class="poppins-regular text--lg text--cyan">Batco: <span
                                        class="text-black">09-6206</span></li>
                            <li class="poppins-regular text--lg text--cyan">Clevite: <span class="text-black">KT00B922600</span>
                            </li>
                            <li class="poppins-regular text--lg text--cyan">Dallas Spring: <span class="text-black">HE1003</span>
                            </li>
                            <li class="poppins-regular text--lg text--cyan">Dayton: <span
                                        class="text-black">334-658</span></li>
                            <li class="poppins-regular text--lg text--cyan">Durothane: <span
                                        class="text-black">DT1691K</span></li>
                            <li class="poppins-regular text--lg text--cyan">Euclid: <span
                                        class="text-black">E-6121</span></li>
                            <li class="poppins-regular text--lg text--cyan">Flagg: <span class="text-black">HT207</span>
                            </li>
                        </ul>
                        <ul class="list-unstyled">
                            <li class="poppins-regular text--lg text--cyan">VRMS: <span
                                        class="text-black">016-008-028</span></li>
                            <li class="poppins-regular text--lg text--cyan">Gaumers: <span
                                        class="text-black">13715</span></li>
                            <li class="poppins-regular text--lg text--cyan">Hendrickson: <span class="text-black">002202 / A-6914 / S-6914</span>
                            </li>
                            <li class="poppins-regular text--lg text--cyan">Leland: <span
                                        class="text-black">SA2690</span></li>
                            <li class="poppins-regular text--lg text--cyan">Pai Industres: <span class="text-black">755042</span>
                            </li>
                            <li class="poppins-regular text--lg text--cyan">Truck Pro: <span class="text-black">TWHNS-6914</span>
                            </li>
                            <li class="poppins-regular text--lg text--cyan">Ucf: <span
                                        class="text-black">HT-A6914</span></li>
                            <li class="poppins-regular text--lg text--cyan">Westar: <span
                                        class="text-black">20-9038</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mw--1440 py-4 px-4 px-md-5">
        <h4 class="poppins-semibold text--lg py-3">Diagramas</h4>
        <div class="grid--3cols gap--24">
            <img src="<?php echo __ROOT__; ?>/public/img/products/diagrama.png" alt="diagrama" class="w-100">
            <img src="<?php echo __ROOT__; ?>/public/img/products/diagrama.png" alt="diagrama" class="w-100">
            <img src="<?php echo __ROOT__; ?>/public/img/products/diagrama.png" alt="diagrama" class="w-100">
        </div>
    </section>

    <section class="mw--1440 my-4 py-5 px-4 px-md-5">
        <header>
            <h2 class="poppins-bold text--xl">Productos relacionados</h2>
        </header>

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
            ]
        ];
        ?>
        <div class="grid--3cols">
            <?php foreach ($productosBanner as $producto): ?>
                <a class="banner-productos__item" href="#">
                    <div class="banner-productos--img">
                        <img src="<?php echo __ROOT__; ?>/public/img/home/p<?php echo $producto['id'] ?>.png"
                             alt="icon">
                    </div>
                    <div class="banner-productos--header">
                        <span class="poppins-bold text--lg text--orange mb-2"><?php echo $producto['numero']; ?></span>
                        <h3 class="poppins-regular text--sm text--black mb-2"><?php echo $producto['nombre']; ?></h3>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </section>
</main>

<script>
    const changeTab = (name) => {
        const buttons = document.querySelectorAll('.description__button');
        const contents = document.querySelectorAll('.description__content');

        buttons.forEach(button => {
            button.classList.remove('active');
            if (button.id === name + 'Button') {
                button.classList.add('active');
            }
        });

        contents.forEach(content => {
            content.style.display = 'none';
            if (content.id === name + 'Content') {
                content.style.display = 'block';
            }
        });
    }
</script>

<?php include 'partials/footer.php'; ?>
