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

@vite(['resources/css/experiencias.css', 'resources/js/app.js', 'resources/css/hf.css'])
  <!-- {{-- <link rel="stylesheet" href="../css/experiencias.css"> --}} -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>

</head>

<body>

<div class="d-flex flex-column min-vh-100">

    <header>
        <div class="container">
            <img src="{{ Vite::asset('resources/asset/images/logo-horizontal 1.svg') }}" alt="Logo" class="logo-footer"> 
            <nav>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/experiencias">Experiências</a></li>
                    <li><a href="#">Especialidades</a></li>
                    <li><a href="/catalogo">Catálogo</a></li>
                    <li><a href="#">Agendamento</a></li>
                </ul>
            </nav>
        </div>
    </header>


  <div class="container mt-5">
    <img src="{{ Vite::asset('resources/asset/images/banner-experiencias.png') }}" class="img-fluid rounded" alt="...">
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
            <img src="{{ Vite::asset('resources/asset/images/imag_experiencia.png') }}" class="rounded-circle p-3" alt="...">
          </div>
          <div class="col-8 p-3 d-flex justify-content-center align-items-center depoimento">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam praesentium consequuntur reprehenderit, nulla labore deserunt quod sed. Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam praesentium consequuntur reprehenderit, nulla labore deserunt quod sed. Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam praesentium consequuntur reprehenderit, nulla labore deserunt quod sed. Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam praesentium consequuntur reprehenderit, nulla labore deserunt quod sed. Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam praesentium consequuntur reprehenderit, nulla labore deserunt quod sed. Deleniti quae ut laudantium, quas atque nobis ab, minima, pariatur magni consectetur quidem?</p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="row row-carrossel">
          <div class="col-4 col1 d-flex justify-content-center align-items-center">
            <img src="{{ Vite::asset('resources/asset/images/imag_experiencia2.png') }}" class="rounded-circle p-3" alt="..."> 
          </div>
          <div class="col-8 p-3 d-flex justify-content-center align-items-center depoimento"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam praesentium consequuntur reprehenderit, nulla labore deserunt quod sed.</p></div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="row row-carrossel">
          <div class="col-4 col1 d-flex justify-content-center align-items-center">
            <img src="{{ Vite::asset('resources/asset/images/imag_experiencia3.png') }}" class="rounded-circle p-3" alt="...">
          </div>
          <div class="col-8 p-3 d-flex justify-content-center align-items-center depoimento"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam praesentium consequuntur reprehenderit, nulla labore deserunt quod sed. Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam praesentium consequuntur reprehenderit, nulla labore deserunt quod sed. Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquamiti quae ut laudantium, quas atque nobis ab, minima, pariatur magni consectetur quidem?</p></div>
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

  <footer>
  <div class="footer-content">
    <div class="footer-column">
       <img src="{{ vite::asset('resources/asset/images/imagem clinica.jpeg') }}" alt="Logo" class="logo-footer">
      <div class="footer-social">
        <a href="#"><i class="bi bi-instagram"></i></a>
        <a href="#"><i class="bi bi-facebook"></i></a>
        <a href="#"><i class="bi bi-whatsapp"></i></a>
      </div>
    </div>
    <div class="footer-column footer-contato">
      <h2>Contato</h2>
      <ul>
        <li><a> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
  <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
</svg> WhatsApp: (71) 98435-2085</a></li>
        <li><a><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
  <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z"/>
</svg> Email: contato@clinicamadreperola.com.br</a></li>
        <li><a><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
  <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/>
</svg> Endereço: Rua Lafaiete F. Santos, 153, Lauro de Freitas</a></li>
      </ul>
    </div>
  </div>
  <div class="footer-bottom">
    &copy; 2025 Madre Pérola. Todos os direitos reservados.
  </div>
</footer>
</div>

  <script src="script.js"></script>

</body>

</html>