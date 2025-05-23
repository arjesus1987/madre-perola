<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Felisberto Buriti</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">


  <style>
    @import url('https://fonts.googleapis.com/css2?family=Bitter:ital,wght@0,100..900;1,100..900&display=swap');
  </style>

  <link rel="stylesheet" href="../css/experiencias.css">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>

</head>

<body>



  <nav class="p-3 text-bg-dark sticky-top">
    <div class="container">

      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="#" class="nav-link px-2 text-white">Home</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Sobre</a></li>
          <li><a href="#projetos" class="nav-link px-2 text-white">Projetos</a></li>
          <li><a href="#contato" class="nav-link px-2 text-white">Contatos</a></li>
        </ul>



      </div>
    </div>
  </nav>


  <div class="container mt-5">
    <img src="{{ Vite::asset('resources/asset/images/logo-horizontal.svg') }}" class="img-fluid rounded" alt="...">
    <img src="{{ asset('public/images/logo-horizontal.svg') }}">
  </div>
  <div class="container mt-5">
    <h1 class="titulo">Depoimentos</h1>
    <div class="linha w-100"></div>
  </div>

  <div id="carouselExampleIndicators" class=" container carousel slide cor-carousel rounded-4 position-relative my-5" data-bs-ride="carousel" data-bs-interval="3000">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="row row-carrossel">
          <div class="col-4 col1 d-flex justify-content-center align-items-center">
            <!-- <img src="img/Frame400.png" class="d-block w-100" alt="..."> -->
            <img src="{{ Vite::asset('resources/asset/images/logo-horizontal.svg') }}" class="rounded-circle p-3" alt="...">
          </div>
          <div class="col-8 p-3 d-flex justify-content-center align-items-center depoimento">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam praesentium consequuntur reprehenderit, nulla labore deserunt quod sed. Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam praesentium consequuntur reprehenderit, nulla labore deserunt quod sed. Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam praesentium consequuntur reprehenderit, nulla labore deserunt quod sed. Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam praesentium consequuntur reprehenderit, nulla labore deserunt quod sed. Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam praesentium consequuntur reprehenderit, nulla labore deserunt quod sed. Deleniti quae ut laudantium, quas atque nobis ab, minima, pariatur magni consectetur quidem?</p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="row row-carrossel">
          <div class="col-4 col1 d-flex justify-content-center align-items-center">
            <img src="../../storage/app/public/img-experiencias/imag_experiencia 2.png" class="rounded-circle p-3" alt="..."> 
            <!-- img/imag_experiencia 2.png -->
          </div>
          <div class="col-8 p-3 d-flex justify-content-center align-items-center depoimento">Lorem ipsum dolor sit amet consectetur adipisicingtetur quidem?</div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="row row-carrossel">
          <div class="col-4 col1 d-flex justify-content-center align-items-center">
            <img src="img/imag_experiencia.png" class="rounded-circle p-3" alt="...">
          </div>
          <div class="col-8 p-3 d-flex justify-content-center align-items-center depoimento">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam praesentium consequuntur reprehenderit, nulla labore deserunt quod sed. Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam praesentium consequuntur reprehenderit, nulla labore deserunt quod sed. Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquamiti quae ut laudantium, quas atque nobis ab, minima, pariatur magni consectetur quidem?</div>
        </div>
      </div>
    </div>

  </div>

  <!--  Perguntas Frequentes -->
  <div class="container mt-5">
    <h1 class="titulo">Perguntas Frequentes</h1>
    <div class="linha w-100"></div>
  </div>


  <div class="container py-5">

    <div class="accordion" id="accordionExample">
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
            O transplante capilar é doloroso?
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <p>O transplante capilar é realizado sob sedação oral + anestesia local. É completamente isenta de dor. Nossos profissionais são comprometidos em conduzir todo o procedimento da melhor forma possível para que a experiencia do paciente seja a melhor possível.
            </p>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Quais as possibilidades de pagamento?
          </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <p>
              Temos a intenção de facilitar a realização desse sonho… dividimos no cartao de credito e temos parceria com uma empresa que realiza financiamento do seu procedimento cirúrgico.
            </p>
          </div>
        </div>
      </div>
    </div>

  </div>

  <footer class="footer mt-auto py-3 bg-dark">

    <div class="container d-flex justify-content-between text-light">
      <span class="text-light">© Felisberto Buriti, Inc. 2025</span>
      <div>
        <a class="text-light" href="https://br.linkedin.com/" target="_blank">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
            <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z" />
          </svg>
        </a>
        <a class="text-light" href="https://github.com/" target="_blank">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
            <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8" />
          </svg>
        </a>
      </div>
    </div>
  </footer>


  <script src="script.js"></script>

</body>

</html>