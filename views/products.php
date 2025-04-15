<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>

<main>
    <section class="products__hero">
        <img src="<?php echo __ROOT__; ?>/public/img/products/hero.png" class="w-100" alt="imagen de fondo">
        <div>
            <img src="<?php echo __ROOT__; ?>/public/img/products/playIcon.png" alt="icono de play" width="120"
                 height="120">
        </div>
    </section>
    <section class="mw--1440 row m-0 p-0">
        <div class="col-md-3 py-5 px-4">
            <h3 class="poppins-bold text--lg text--orange">Filtros</h3>
            <div class="py-3">
                <h4 class="poppins-medium text--cyan text--sm">Categorias</h4>
                <form>
                    <div class="my-2">
                        <input type="checkbox" id="category1" name="category1" value="category1">
                        <label for="category1">Categoria 1</label>
                    </div>
                    <div class="my-2">
                        <input type="checkbox" id="category2" name="category2" value="category2">
                        <label for="category2">Categoria 2</label>
                    </div>
                    <div class="my-2">
                        <input type="checkbox" id="category3" name="category3" value="category3">
                        <label for="category3">Categoria 3</label>
                    </div>
                    <div class="my-2">
                        <input type="checkbox" id="category4" name="category4" value="category4">
                        <label for="category4">Categoria 4</label>
                    </div>
                </form>
            </div>
            <div class="py-3">
                <h4 class="poppins-medium text--cyan text--sm">Tipo</h4>
                <form>
                    <div class="my-2">
                        <input type="checkbox" id="type1" name="type1" value="type1">
                        <label for="type1">Tipo 1</label>
                    </div>
                    <div class="my-2">
                        <input type="checkbox" id="type2" name="type2" value="type2">
                        <label for="type2">Tipo 2</label>
                    </div>
                    <div class="my-2">
                        <input type="checkbox" id="type3" name="type3" value="type3">
                        <label for="type3">Tipo 3</label>
                    </div>
                    <div class="my-2">
                        <input type="checkbox" id="type4" name="type4" value="type4">
                        <label for="type4">Tipo 4</label>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-9 py-5 px-4">
            <header class="py-2 text-center">
                <h2 class="poppins-bold text--xl">Productos</h2>
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
                ],
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
            <div class="py-3 text-end">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-end">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>

</main>

<?php include 'partials/footer.php'; ?>
