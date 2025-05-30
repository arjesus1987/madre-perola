
<x-layoutadm>
   <div class="container my-5">
    <h1 class="mb-4">Painel de Agendamentos</h1>

    <!-- AGENDAMENTOS MARCADOS -->
    <div class="mb-5">
      <h4>Agendamentos Marcados</h4>
      <div class="table-responsive mt-3">
        <table class="table table-bordered table-striped align-middle">
          <thead class="table-light">
            <tr>
              <th>Paciente</th>
              <th>Contato</th>
              <th>Email</th>
              <th>Especialidade</th>
              <th>Médico</th>
              <th>Data</th>
              <th>Horário</th>
              <th class="text-center">Ações</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>João da Silva</td>
              <td>(11) 99999-9999</td>
              <td>joao@gmail.com</td>
              <td>Cardiologia</td>
              <td>Dr. Pedro Lima</td>
              <td>2025-06-10</td>
              <td>10:00</td>
              <td class="text-center">
                <button class="btn btn-sm btn-primary">Enviar Confirmação</button>
                <button class="btn btn-sm btn-danger">Cancelar</button>
              </td>
            </tr>
            <!-- Outras linhas de exemplo -->
          </tbody>
        </table>
      </div>

      <!-- Paginação - Agendamentos Marcados -->
      <nav>
        <ul class="pagination justify-content-center">
          <li class="page-item disabled"><a class="page-link">Anterior</a></li>
          <li class="page-item active"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#">Próximo</a></li>
        </ul>
      </nav>
    </div>

    <!-- CONSULTAS EM ABERTO -->
    <div>
      <h4>Consultas em Aberto</h4>
      <div class="table-responsive mt-3">
        <table class="table table-bordered table-striped align-middle">
          <thead class="table-light">
            <tr>
              <th>Data</th>
              <th>Horário</th>
              <th>Sala</th>
              <th>Especialidade</th>
              <th>Médico</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>2025-06-12</td>
              <td>14:30</td>
              <td>102</td>
              <td>Ortopedia</td>
              <td>Dr. Ana Souza</td>
            </tr>
            <!-- Outras linhas de exemplo -->
          </tbody>
        </table>
      </div>

      <!-- Paginação - Consultas em Aberto -->
      <nav>
        <ul class="pagination justify-content-center">
          <li class="page-item"><a class="page-link" href="#">Anterior</a></li>
          <li class="page-item active"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#">Próximo</a></li>
        </ul>
      </nav>
    </div>
  </div>
</x-layoutadm>