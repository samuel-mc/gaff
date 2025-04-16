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
                <select class="form-control" id="selectPais" onchange="changeSelectPais(this.value)">
                    <option value="">Selecciona un pais</option>
                </select>
            </form>
        </header>
        <main id="distribuidoresContainer">
        </main>
    </section>
</main>

<script src="https://d3js.org/d3.v7.min.js"></script>
<script src="https://unpkg.com/topojson@3"></script>

<script src="<?php echo __ROOT__; ?>/public/js/paises.js"></script>

<script>

    const paisesQueAplica = paises?.map(pais => pais.name) || []; // Se obtiene la lista del NOMBRE de los paises que aplica

    const svgWidth = 960;
    const svgHeight = 500;
    // Se genera el mapa
    const projection = d3.geoNaturalEarth1()
        .scale(150)
        .translate([svgWidth / 2, svgHeight / 2]);
    const path = d3.geoPath().projection(projection);
    const svg = d3.select("#mapa");
    // Cargar archivo TopoJSON
    d3.json("https://cdn.jsdelivr.net/npm/world-atlas@2/countries-110m.json").then(world => {
        const countries = topojson.feature(world, world.objects.countries).features;

        svg.append("g")
            .selectAll("path")
            .data(countries)
            .enter().append("path")
            .attr("class", "pais")
            .attr("d", path)
            .classed("pais--aplica", d => paisesQueAplica.includes(d?.properties?.name)) // o usar d.properties.name si el JSON lo trae
            .on("click", function (event, d) {
                if (!paisesQueAplica.includes(d?.properties?.name)) return;
                d3.selectAll(".pais").classed("selected", false);
                d3.select(this).classed("selected", true);
                cambiarPais(d?.properties?.name); // o d.properties.name si es lo que usas
            });
    });

    // Se generan los elementos en el DOM

    const selectPais = document.getElementById("selectPais"); // Se obtiene el elemento select
    selectPais.innerHTML = "<option value=''>Selecciona un pais</option>"; // Se limpia el select
    // Se generan las opciones del select
    for (const pais of paisesQueAplica) {
        const option = document.createElement("option");
        option.value = pais;
        option.textContent = pais;
        selectPais.appendChild(option);
    }

    // Funcion para cambiar el pais
    function cambiarPais(pais) {
        const distribuidoresContainer = document.getElementById("distribuidoresContainer"); // Se obtiene el contenedor para mostrar los distribuidores
        distribuidoresContainer.innerHTML = "";
        const paisesDists = paises?.find(est => est?.name === pais); // Se busca el pais en la lista de paiss
        for (const dist of paisesDists?.distribuidores) {
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

        const selectedOption = selectPais.querySelector(`option[value="${pais}"]`);
        if (selectedOption) {
            selectedOption.selected = true; // Selecciona la opción en el select
        }
        d3.selectAll(".pais").classed("selected", false); // Se quita la clase selected de todos los paiss
        d3.selectAll(".pais--aplica").classed("selected", false); // Se quita la clase selected de todos los paiss que aplican
        d3.selectAll(".pais--aplica").filter(d => d.properties.NAME_1 === pais).classed("selected", true); // Se agrega la clase selected al pais seleccionado
    }

    function changeSelectPais(pais) {
        cambiarPais(pais);
    }
</script>


<style>
    svg {
        width: 100%;
        height: auto;
    }

    .pais {
        fill: #ccc;
        stroke: #fff;
    }

    .pais--aplica {
        fill: #00BFFF;
        cursor: pointer;
    }

    .pais--aplica:hover {
        fill: orange;
    }

    .pais--aplica.selected {
        fill: orange;
    }
</style>

<?php include 'partials/footer.php'; ?>
