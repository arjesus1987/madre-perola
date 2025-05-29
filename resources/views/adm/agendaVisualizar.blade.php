
<x-layoutadm>
    <div class="main-content" id="consultasMarcadas">
  <h1>Consultas Marcadas</h1>

  <!-- Filtros -->
  <form class="mb-4">
    <fieldset class="border p-3">
      <legend class="w-auto px-2">Filtros de Consulta</legend>
      <div class="row">
        <div class="col-md-3 mb-3">
          <label for="filtroMedico" class="form-label">Médico</label>
          <input type="text" class="form-control" id="filtroMedico" placeholder="Nome do médico">
        </div>
        <div class="col-md-3 mb-3">
          <label for="filtroData" class="form-label">Data</label>
          <input type="date" class="form-control" id="filtroData">
        </div>
        <div class="col-md-3 mb-3">
          <label for="filtroEspecialidade" class="form-label">Especialidade</label>
          <select class="form-select" id="filtroEspecialidade">
            <option selected value="">Todas</option>
            <option value="cardiologia">Cardiologia</option>
            <option value="dermatologia">Dermatologia</option>
            <option value="pediatria">Pediatria</option>
          </select>
        </div>
        <div class="col-md-3 mb-3">
          <label for="filtroSala" class="form-label">Nº da Sala</label>
          <input type="text" class="form-control" id="filtroSala" placeholder="Ex: 01, 02, Online...">
        </div>
      </div>

      <div class="d-flex justify-content-end">
        <button type="reset" class="btn btn-secondary me-2">Limpar</button>
        <button type="submit" class="btn btn-primary">Buscar</button>
      </div>
    </fieldset>
  </form>

  <!-- Grid de Consultas -->
  <div class="table-responsive">
    <table class="table table-bordered table-striped align-middle text-center">
      <thead class="table-primary">
        <tr>
          <th>Nome do Paciente</th>
          <th>Dados do Paciente</th>
          <th>Data da Consulta</th>
          <th>Hora</th>
          <th>Médico</th>
          <th>Especialidade</th>
          <th>Nº da Sala</th>
        </tr>
      </thead>
      <tbody>
        <!-- Exemplo de dados mockados -->
        <tr>
          <td>Maria Silva</td>
          <td>CPF: 123.456.789-00<br>Tel: (11) 99999-9999</td>
          <td>20/05/2025</td>
          <td>14:00</td>
          <td>Dr. João Pereira</td>
          <td>Cardiologia</td>
          <td>01</td>
        </tr>
        <tr>
          <td>Carlos Souza</td>
          <td>CPF: 987.654.321-00<br>Tel: (21) 98888-8888</td>
          <td>21/05/2025</td>
          <td>10:30</td>
          <td>Dra. Ana Oliveira</td>
          <td>Dermatologia</td>
          <td>Online</td>
        </tr>
        <!-- Adicione mais linhas com dados reais vindos do backend -->
      </tbody>
    </table>
  </div>
</div>
  </div>
</x-layoutadm>