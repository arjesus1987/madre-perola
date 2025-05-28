<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Barra Lateral à Esquerda · Bootstrap 5.3</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>
  {{-- FullCalendar JS --}}
  <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.js"></script>
  {{-- CSS do projeto --}}
  @vite(['resources/css/admHome.css'])

</head>
<body>

  <div class="layout">
    <!-- BARRA LATERAL À ESQUERDA -->
    <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark sidebar">
      <!-- LOGO ACIMA DO MENU -->
      <div class="text-center mb-3">
        <img src="{{ Vite::asset('resources/asset/images/logo-horizontal 1.svg') }}" alt="Logo" class="img-fluid">
      </div>

      <hr>

      <!-- MENU -->
      <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
          <a href="/home" class="nav-link active text-white" aria-current="page">
            <svg class="bi pe-none me-2" width="16" height="16">
              <use xlink:href="#home" />
            </svg>
            HOME
          </a>
        </li>

        <!-- CADASTRO -->
        <li>
          <a class="nav-link text-white" data-bs-toggle="collapse" href="#submenuCadastro" role="button" aria-expanded="false" aria-controls="submenuCadastro">
            <svg class="bi pe-none me-2" width="16" height="16">
              <use xlink:href="#bi bi-person-circle" />
            </svg>
            CADASTRO
          </a>
          <div class="collapse" id="submenuCadastro">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
              <li><a href="/cadastrousuario" class="nav-link text-white ps-4">Usuário</a></li>
              <li><a href="/visualizarUsuarios" class="nav-link text-white ps-4">Visualizar Usuários</a></li>
              <li><a href="/cadastroespecialidade" class="nav-link text-white ps-4">Especialidade</a></li>
            </ul>
          </div>
        </li>

        <!-- AGENDAMENTO -->
        <li>
          <a class="nav-link text-white" data-bs-toggle="collapse" href="#submenuAgendamento" role="button" aria-expanded="false" aria-controls="submenuAgendamento">
            <svg class="bi pe-none me-2" width="16" height="16">
              <use xlink:href="#bi bi-calendar3" />
            </svg>
            AGENDAMENTO
          </a>
          <div class="collapse" id="submenuAgendamento">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
              <li><a href="/agendaCadastro" class="nav-link text-white ps-4">Cadastrar</a></li>
              <li><a href="/agendaVisualizar" class="nav-link text-white ps-4">Visualizar</a></li>
            </ul>
          </div>
        </li>

        <!-- GERENCIAMENTO -->
        <li>
          <a class="nav-link text-white" data-bs-toggle="collapse" href="#submenuGerenciamento" role="button" aria-expanded="false" aria-controls="submenuGerenciamento">
            <svg class="bi pe-none me-2" width="16" height="16">
              <use xlink:href="#bi bi-tools" />
            </svg>
            GERENCIAMENTO
          </a>
          <div class="collapse" id="submenuGerenciamento">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
              <li><a href="#especialidade" class="nav-link text-white ps-4">Especialidade</a></li>
              <li><a href="#produto" class="nav-link text-white ps-4">Produto</a></li>
            </ul>
          </div>
        </li>

      </ul>

      <hr>
      <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="https://github.com/mdo.png" alt="Avatar do usuário mdo" width="32" height="32" class="rounded-circle me-2">
          <strong>mdo</strong>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
          <li><a class="dropdown-item" href="/visualizarPerfilUsuario">Perfil</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="/login">Sair</a></li>
        </ul>
      </div>
    </div>
      <main>
    <br><br><br><br>
    {{$slot}}
     <br><br><br><br>   
    </main>
    </div>
  </div>

  <!-- ÍCONES SVG -->
   <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="home" viewBox="0 0 16 16">
    <path fill="white"  d="M8.354 1.146a.5.5 0 0 0-.708 0L1 7.793V14.5a.5.5 0 0 0 .5.5H6v-5h4v5h4.5a.5.5 0 0 0 .5-.5V7.793L8.354 1.146z"/>
    </symbol>
    <symbol id="bi bi-person-circle" viewBox="0 0 16 16">
        <path fill="white"  d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
        <path fill="white" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
    </symbol>
    <symbol id="bi bi-download" viewBox="0 0 16 16">
        <path fill="white" d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5"/>
        <path fill="white" d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708z"/>
    </symbol>
    <symbol id="bi bi-tools" viewBox="0 0 16 16">
      <path fill="white"  d="M1 0 0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.27 3.27a.997.997 0 0 0 1.414 0l1.586-1.586a.997.997 0 0 0 0-1.414l-3.27-3.27a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3q0-.405-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814zm9.646 10.646a.5.5 0 0 1 .708 0l2.914 2.915a.5.5 0 0 1-.707.707l-2.915-2.914a.5.5 0 0 1 0-.708M3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026z"/>
    </symbol>
    <symbol id="bi bi-calendar3" viewBox="0 0 16 16">    
     <path fill="white"  d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2M1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857z"/>
     <path fill="white"  d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2"/>
    </symbol>
  </svg>

</body>
</html>