<x-hf>

  <!-- Carrossel -->
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
        aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ Vite::asset('resources/asset/imgs/pexels-fr3nks-287237.jpg')}}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ Vite::asset('resources/asset/imgs/pexels-jonathanborba-13697933.jpg')}}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ Vite::asset('resources/asset/imgs/pexels-pixabay-263337.jpg')}}" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
      <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
      <span class="visually-hidden">Próximo</span>
    </button>
     <div class="btn-overlay">
      <a href="#medicos" class="btn-encontre">Encontre seu médico!</a>
    </div>
  </div>

  <section class="modalidades py-5">
    <div class="container">
      <h1 class="text-center mb-5">Nossa Especialidade</h1>
    </section>
  <!-- Nossa Especialidade -->
  <section class="solucoes">
    <div class="texto">
    
      <h3><span class="linha"></span>Transplante capilar</h3>
      <p>
        Renove sua autoestima com o transplante capilar na Clínica Madrepérola.
        Nossa equipe, experiente e cuidadosa, oferece um atendimento especializado,
        usando as melhores tecnologias disponíveis, fazendo exclusivamente implantação
        dos folículos com implantadores.
      </p>
      <p>
        Dra Kelly Fontes, médica, com experiência em UTI, irá realizar toda a sua cirurgia,
        se empenhando ao máximo sempre para resultados naturais e te acompanhará de perto,
        no seu pós-operatório para garantir o sucesso do seu procedimento.
      </p>
      <a href="#" class="botao">Entrar em contato!</a>
    </div>

    <div class="imagem">
      <img src="{{ Vite::asset('resources/asset/imgs/IMG_0647-1019x1024.jpg (1).webp')}}" alt="Procedimento de transplante capilar">
    </div>
  </section>
  <!-- Video -->

  <section class="video-container">
    <div class="texto-esquerda">
      <h2>Assista como<br>funciona ➝</h2>
    </div>

    <div class="video">
      <video src="{{ Vite::asset('resources/asset/video/IMG_3737 (1).mov')}}" controls></video>
    </div>

    <div class="texto-direita">
      <h2>Passo a<br>passo do seu<br>visual perfeito e<br>revigorado!</h2>
    </div>
  </section>


  <!-- Seção Outras Modalidades -->
  <section class="modalidades py-5">
    <div class="container">
      <h1 class="text-center mb-5">Outras Modalidades</h1>

      <div class="modalidades-grid">

        <div class="card-modalidade">
          <img src="{{ Vite::asset('resources/asset/imgs/trico.jpg')}}" alt="Tricologia">
          <div class="overlay">
            <h5>Tricologia e Terapias Capilares</h5>
            <a href="#" class="btn-modalidade">Entrar em contato</a>
          </div>
        </div>

        <div class="card-modalidade">
          <img src="{{ Vite::asset('resources/asset/imgs/derma.jpg')}}" alt="Dermatologia">
          <div class="overlay">
            <h5>Dermatologia Clínica e Cirúrgica</h5>
            <a href="#" class="btn-modalidade">Entrar em contato</a>
          </div>
        </div>

        <div class="card-modalidade">
          <img src="{{ Vite::asset('resources/asset/imgs/plastica.jpg')}}" alt="Cirurgia Plástica">
          <div class="overlay">
            <h5>Cirurgia Plástica</h5>
            <p>Em breve</p>
          </div>
        </div>

        <div class="card-modalidade">
          <img src="{{ Vite::asset('resources/asset/imgs/cosmiatria.jpeg')}}" alt="Cosmiatria">
          <div class="overlay">
            <h5>Cosmiatria</h5>
            <p>Em breve</p>
          </div>
        </div>

        <div class="card-modalidade">
          <img src="{{ Vite::asset('resources/asset/imgs/nutrologia.jpg')}}" alt="Nutrologia">
          <div class="overlay">
            <h5>Nutrologia</h5>
            <p>Em breve</p>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section>

   

  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


</body>
<!-- SOBRE A CLÍNICA -->
<section id="sobre" class="sobre-section py-5">
  <div class="container">
    <h2 class="text-center mb-4">Sobre a Clínica</h2>
    <div class="row align-items-center">
      <div class="col-md-6 mb-4 mb-md-0">
        <img src="{{ Vite::asset('resources/asset/imgs/WhatsApp-Image-2025-01-09-at-4.00.44-PM-768x1024.jpeg.webp')}}" alt="Clínica Madre Pérola"
          class="img-fluid rounded shadow-sm">
      </div>
      <div class="col-md-6">
        <p class="lead">
          A <strong>Clínica Madre Pérola</strong> Na Clínica Madrepérola, nossa jornada é uma narrativa de coragem e
          visão. Iniciamos como sonhadores, ousando ir além dos limites tradicionais, almejando proporcionar cuidados
          médicos que não apenas aprimoram a estética, mas tocam a essência da saúde fisica e mental. Ao longo dessa
          jornada, transformamos desafios em conquistas, guiados por uma equipe que não só é apaixonada, mas
          comprometida em trilhar esse caminho junto com você e aqui, nosso lema sempre será: VOCÊ MERECE BRILHAR!
        </p>
        <p>
          Hoje, celebramos não apenas a realização do nosso sonho, mas a concretização de um compromisso: oferecer
          atendimento individualizado, humanizado e extremamente cuidadoso aos nossos pacientes. A Clínica Madrepérola é
          mais que um espaço de cuidados; é um refúgio de dedicação e inovação, onde a busca pela excelência se
          entrelaça com o calor humano de uma equipe verdadeiramente dedicada. Teremos uma enorme satisfação em te
          ajudar a encontrar a sua melhor versão.
        </p>
      </div>
    </div>

  </div>
</section>
<!-- PERGUNTAS FREQUENTES -->
<section id="faq" class="py-5 bg-claro">
  <div class="container">
    <h2 class="text-center mb-4">Perguntas Frequentes</h2>

    <div class="accordion" id="accordionFAQ">

      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
            O transplante capilar é doloroso?
          </button>
        </h2>
        <div id="faq1" class="accordion-collapse collapse">
          <div class="accordion-body">
            O procedimento é realizado com anestesia local, portanto, o paciente não sente dor durante o transplante.
            Pode haver um leve desconforto após, controlado com analgésicos simples.
          </div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
            Quais são as possibilidades de pagamento?
          </button>
        </h2>
        <div id="faq2" class="accordion-collapse collapse">
          <div class="accordion-body">
            Oferecemos pagamento via cartão de crédito (com parcelamento), boleto bancário e financiamento por
            instituições parceiras. Fale com nossa equipe para detalhes.
          </div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
            Quanto tempo dura a recuperação do transplante capilar?
          </button>
        </h2>
        <div id="faq3" class="accordion-collapse collapse">
          <div class="accordion-body">
            A recuperação inicial leva de 7 a 10 dias. A cicatrização completa e crescimento dos fios ocorre
            gradualmente, com resultados visíveis entre 6 a 12 meses.
          </div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
            A clínica oferece avaliação gratuita?
          </button>
        </h2>
        <div id="faq4" class="accordion-collapse collapse">
          <div class="accordion-body">
            Sim! Oferecemos uma primeira avaliação gratuita para entender suas necessidades e recomendar o tratamento
            mais adequado.
          </div>
        </div>
      </div>

    </div>
  </div>
</section>





</x-hf>