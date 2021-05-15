<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Kalam:wght@300&family=Quicksand:wght@300&display=swap" rel="stylesheet">
<link href="./css/home.css" rel="stylesheet">
<main>
  <div id="carouselExampleCaptions" class="carousel slide col-md-12" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="./img/banner-construction.jpg" class="d-block w-100 imgBanner" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./img/banner-construction2.jpg" class="d-block w-100 imgBanner" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./img/img-carousel-3.png" class="d-block w-100 imgBanner" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <div id="divDescription" class="container-fluid py-3">
    <div class="container-fluid">
      <div class="container-fluid py-3">
        <h4 class="txtHomeHeader text-center">Quienes Somos</h4>
        <hr class="hrHomeHeader mx-auto" />
      </div>
      <div class="container-fluid col-md-8 offset-md-2">
        <p class="text-center">Somos una empresa constructora, especializada en el diseño y ejecucion de proyectos de construccion, firmemente comprometida con el desarrollo de nuestro Pais. Nuestro personal esta altamente capacitado por haber participado en diversas obras en todo el ambito nacional, por lo cual garantizamos una obra de calidad para nuestros clientes. </p>
      </div>
    </div>
  </div>

  <div id="divServices" class="container-fluid position-relative my-3">
    <div id="divBannerServices">
    </div>
    <div class="col-md-12 position-absolute top-0 start-0" id="divDescriptionServices">

      <h3 class="col-md-12 txtHeader2 text-center">Servicios</h3>

      <div class="d-flex justify-content-around col-md-12">
        <div class="divCardServices">
          <div class="card h-100">
            <img src="./img/img-carousel-1.png" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">Consultoria</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
        <div class="divCardServices">
          <div class="card h-100">
            <img src="./img/img-carousel-2.png" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">Telecomunicaciones</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
        <div class="divCardServices">
          <div class="card h-100">
            <img src="./img/img-carousel-3.png" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">Obras Electromecanicas</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
        <div id="divMoreServices" class="d-flex flex-column justify-content-center align-items-center">
          <div class="col-md-12">
            <img src="./img/icons/arrow-right-circle-fill.svg" class="col-md-12" />
          </div>
          <div class=" col-md-12">
            <h4 class="text-center">Ver mas</h4>
          </div>
        </div>
      </div>

    </div>
  </div>
  <div id="divContact" class="container-fluid py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-5 container d-flex justify-content-center align-items-center">
          <img src="./img/arquitecto-3.jpg" class="col-md-12" />
        </div>
        <!-- BEGINS DESCRIPTION OF CONTACT -->
        <div class="col-md-7 container" id="divDescriptionContact">
          <div class="row py-2">
            <h3 class="txtHeader2">Contacto</h3>
          </div>
          <!-- FIRST ROW OF DESCRIPTION(CALL AND EMAIL) -->
          <div class="row py-2">
            <!-- FIRST COLUMN, CALL -->
            <div class="col-md-6">
              <h4 class="col-md-12 txtHeader3">Llamenos</h4>
              <!-- FIRST ROW, PHONE NUMBER 1 -->
              <div class="col-md-12 row">
                <div class="col-md-2">
                  <img src="./img/icons/telephone-forward-fill.svg" class="col-md-12" />
                </div>
                <h5 class="col-md-10">465 125 485</h5>
              </div>
              <!-- SECOND ROW, PHONE NUMBER 2 -->
              <div class="col-md-12 row">
                <div class="col-md-2">
                  <img src="./img/icons/whatsapp.svg" class="col-md-12" />
                </div>
                <h5 class="col-md-10">251 549 264</h5>
              </div>
            </div>
            <!-- SECOND COLUMN, EMAIL -->
            <div class="col-md-6">
              <div class="row py-2">
                <h4 class="col-md-12 txtHeader3">Escribenos</h4>
                <div class="col-md-12 row">
                  <div class="col-md-2">
                    <img src="./img/icons/envelope-fill.svg" class="col-md-12" />
                  </div>
                  <h5 class="col-md-10">arial@gmail.com</h5>
                </div>
              </div>
            </div>
          </div>
          <!-- SECOND ROW OF DESCRIPTION(ADDRESS) -->
          <div class="row py-2">
            <h4 class="col-md-12 text-center txtHeader3">Visitenos</h4>
            <div class="col-md-12 row justif">
              <div class="col-md-1">
                <img src="./img/icons/pin-map-fill.svg" class="col-md-12" />
              </div>
              <h5 class="col-md-11">Asoc. Viv. Chicmabamba
                Mz. H, Lte. 20 SMP - Lima
              </h5>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 offset-md-3">

        </div>
      </div>
    </div>
  </div>
  <!-- BEGINS SERVICES SECTION -->
  <div id="divFeatures" class="container-fluid py-3">
    <div class="container-fluid py-3">
      <h4 class="txtHomeHeader text-center">Nuestros Servicios</h4>
      <hr class="hrHomeHeader mx-auto" />
    </div>
    <div class="container-fluid">
      <div class="row justify-content-around">
        <div class="col-md-2 py-2">
          <div class="divImgServices d-flex justify-content-center">
            <img src="./img/icons/building.svg" class="img-fluid iconService" />
          </div>
          <div class="my-3">
            <h4 class="text-center txtServicesHeader">Construccion</h4>
            <p class="text-center">Lorem, ipsum dolor sit amet
              consectetur adipisicing elit.
              quis harum quae, rerum incidunt vero
            </p>
          </div>
        </div>
        <div class="col-md-2 py-2">
          <div class="divImgServices d-flex justify-content-center">
            <img src="./img/icons/map.svg" class="img-fluid" />
          </div>
          <div class="my-3">
            <h4 class="text-center txtServicesHeader">Ingenieria</h4>
            <p class="text-center">Lorem, ipsum dolor sit amet
              consectetur adipisicing elit.
              quis harum quae, rerum incidunt vero
            </p>
          </div>
        </div>
        <div class="col-md-2 py-2">
          <div class="divImgServices d-flex justify-content-center">
            <img src="./img/icons/person.svg" class="img-fluid" />
          </div>
          <div class="my-3">
            <h4 class="text-center txtServicesHeader">Mejor Personal</h4>
            <p class="text-center">Lorem, ipsum dolor sit amet
              consectetur adipisicing elit.
              quis harum quae, rerum incidunt vero
            </p>
          </div>
        </div>
      </div>
      <div class="row justify-content-around">
        <div class="col-md-2 py-2">
          <div class="divImgServices d-flex justify-content-center">
            <img src="./img/icons/clipboard-data.svg" class="img-fluid " />
          </div>
          <div class="my-3">
            <h4 class="text-center txtServicesHeader">Presupuesto</h4>
            <p class="text-center">Lorem, ipsum dolor sit amet
              consectetur adipisicing elit.
              quis harum quae, rerum incidunt vero
            </p>
          </div>
        </div>
        <div class="col-md-2 py-2">
          <div class="divImgServices d-flex justify-content-center">
            <img src="./img/icons/cloud-lightning-rain.svg" class="img-fluid " />
          </div>
          <div class="my-3">
            <h4 class="text-center txtServicesHeader">Bajos Clima Dificles
            </h4>
            <p class="text-center">Lorem, ipsum dolor sit amet
              consectetur adipisicing elit.
              quis harum quae, rerum incidunt vero
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- BEGINS CLIENTS SECTION -->
  <div id="divClients" class="container py-3">
    <div class="container-fluid">
      <h4 class="txtHomeHeader text-center">Nuestros Clientes</h4>
      <hr class="hrHomeHeader mx-auto" />
    </div>
    <div class="container-fluid">
      <div class="row justify-content-around">
        <div class="col-md-2 py-2 d-flex align-items-center"><img src="./img/icontec.png" class="img-fluid" /></div>
        <div class="col-md-2 py-2 d-flex align-items-center"><img src="./img/mimco.png" class="img-fluid" /></div>
        <div class="col-md-2 py-2 d-flex align-items-center"><img src="./img/orocom.png" class="img-fluid" /></div>
      </div>
      <div class="row justify-content-between">
        <div class="col-md-2 py-2 d-flex align-items-center"><img src="./img/balzola.png" class="img-fluid" /></div>
        <div class="col-md-2 py-2 d-flex align-items-center"><img src="./img/gmccorp.png" class="img-fluid" /></div>
        <div class="col-md-2 py-2 d-flex align-items-center"><img src="./img/techmahindra.png" class="img-fluid" /></div>
      </div>
    </div>
  </div>
</main>