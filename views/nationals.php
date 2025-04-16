<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>

<main>
    <!-- Hero -->
    <section class="hero hero__distribuidores text-center align-content-center">
        <h2 class="poppins-bold text--xl text-white">Distribuidores nacionales</h2>
    </section>
    <section class="mw--1440 py-4 px-4 px-md-5">
        <svg id="mapa" viewBox="0 0 960 640" preserveAspectRatio="xMidYMid meet"></svg>
    </section>
    <section class="mw--1440 py-4 px-4 px-md-5">
        <header>
            <h2 class="poppins-semibold text--md">Busca tu centro de servicio más cercano</h2>
            <form>
                <select class="form-control" id="selectEstado" onchange="changeSelectEstado(this.value)">
                    <option value="">Selecciona un estado</option>
                </select>
            </form>
        </header>
        <main id="distribuidoresContainer">
        </main>
    </section>
</main>

<script src="https://d3js.org/d3.v7.min.js"></script>
<script src="https://unpkg.com/topojson@3"></script>

<script src="<?php echo __ROOT__; ?>/public/js/estados.js"></script>

<script>

    const estadosQueAplica = estados?.map(estado => estado.name) || []; // Se obtiene la lista del NOMBRE de los estados que aplica

    // Se genera el mapa
    const projection = d3.geoMercator()
        .scale(1800)
        .center([-102, 26]);
    const path = d3.geoPath().projection(projection);
    const svg = d3.select("#mapa");
    // Cargar archivo TopoJSON
    d3.json("https://gist.githubusercontent.com/leenoah1/535b386ec5f5abdb2142258af395c388/raw/a045778d28609abc036f95702d6a44045ae7ca99/geo-data.json").then(mx => {
        const estados = topojson.feature(mx, mx.objects.MEX_adm1);
        svg.append("g")
            .selectAll("path")
            .data(estados.features)
            .enter()
            .append("path")
            .attr("class", "estado")
            .classed("estado--aplica", d => estadosQueAplica.includes(d.properties.NAME_1))
            .attr("d", path)
            .on("click", function (event, d) {
                if (!estadosQueAplica.includes(d.properties.NAME_1)) {
                    return;
                }
                d3.selectAll(".estado").classed("selected", false);
                d3.select(this).classed("selected", true);
                cambiarEstado(d.properties.NAME_1);
            });
    });

    // Se generan los elementos en el DOM

    const selectEstado = document.getElementById("selectEstado"); // Se obtiene el elemento select
    selectEstado.innerHTML = "<option value=''>Selecciona un estado</option>"; // Se limpia el select
    // Se generan las opciones del select
    for (const estado of estadosQueAplica) {
        const option = document.createElement("option");
        option.value = estado;
        option.textContent = estado;
        selectEstado.appendChild(option);
    }

    // Funcion para cambiar el estado
    function cambiarEstado(estado) {
        const distribuidoresContainer = document.getElementById("distribuidoresContainer"); // Se obtiene el contenedor para mostrar los distribuidores
        distribuidoresContainer.innerHTML = "";
        const estadoDists = estados?.find(est => est?.name === estado); // Se busca el estado en la lista de estados
        for (const dist of estadoDists?.distribuidores) {
            const div = document.createElement("div");
            div.classList.add('grid--2cols', 'gap--24', 'py-2')
            div.innerHTML = `
                <div>
                       <iframe src="${dist?.framePath}" class="distribuidor__frame" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="align-content-center">
                    <p class="poppins-regular text--sm m-0 p-0">${dist?.address}</p>
                    <a href="${dist?.link}" target="_blank" class="a--cyan d-block my-4">Ver en mapa</a>
                    <p class="poppins-regular text--sm">${dist?.phone}</p>
                </div>
            `;
            distribuidoresContainer.appendChild(div);
        }

        const selectedOption = selectEstado.querySelector(`option[value="${estado}"]`);
        if (selectedOption) {
            selectedOption.selected = true; // Selecciona la opción en el select
        }
        d3.selectAll(".estado").classed("selected", false); // Se quita la clase selected de todos los estados
        d3.selectAll(".estado--aplica").classed("selected", false); // Se quita la clase selected de todos los estados que aplican
        d3.selectAll(".estado--aplica").filter(d => d.properties.NAME_1 === estado).classed("selected", true); // Se agrega la clase selected al estado seleccionado
    }

    function changeSelectEstado(estado) {
        cambiarEstado(estado);
    }
</script>


<style>
    svg {
        width: 100%;
        height: auto;
    }

    .estado {
        fill: grey;
        stroke: white;
    }

    .estado--aplica {
        fill: #00BFFF; /* o el color que quieras para los estados que aplican */
        cursor: pointer;
    }

    .estado--aplica:hover {
        fill: orange; /* o el color que quieras para el hover */
    }

    .estado--aplica.selected {
        fill: orange; /* o el color que quieras para destacar */
    }
</style>

<?php include 'partials/footer.php'; ?>
