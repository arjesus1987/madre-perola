{{-- layout principal --}}
<x-layoutadm>

  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
  @endif  

  @if(session('success'))
    <div class="alert alert-success">
      {{ session('success') }}
    </div>
  @endif

  <form action="{{ route('agendas.store') }}" method="POST">
    @csrf

    <div class="main-content" id="cadastrarAgendamento">
      <h1>Cadastro de Agenda de Atendimento</h1>
      <div class="row">
        <!-- Coluna do calendário -->
        <div class="col-md-6 mb-4">
          <div id="calendar"></div>
        </div>

        <!-- Coluna do formulário -->
        <div class="col-md-6">
          <fieldset class="border p-3 mb-4">
            <legend class="w-auto px-2">Dados da Agenda</legend>

            <div class="mb-3">
              <label for="data" class="form-label">Data</label>
              <input type="date" class="form-control" id="data" name="data" required>
            </div>

            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="hora_inicio" class="form-label">Hora Início</label>
                <input type="time" class="form-control" id="hora_inicio" name="hora_inicio" required>
              </div>

              <div class="col-md-6 mb-3">
                <label for="hora_fim" class="form-label">Hora Fim</label>
                <input type="time" class="form-control" id="hora_fim" name="hora_fim" required>
              </div>
            </div>

            <div class="mb-3">
              <label for="duracao_consulta" class="form-label">Duração por Consulta (min)</label>
              <input type="number" class="form-control" id="duracao_consulta" name="duracao_consulta" min="5" step="5" value="30" required>
            </div>
          </fieldset>

          <fieldset class="border p-3 mb-4">
            <legend class="w-auto px-2">Profissional e Especialidade</legend>

            <div class="mb-3">
              <label for="medico_id" class="form-label">Médico</label>
              <select class="form-select" id="medico_id" name="medico_id" required>
                <option selected disabled>Selecione o médico</option>
                @foreach($medicos as $id => $nome)
                  <option value="{{ $id }}">{{ $nome }}</option>
                @endforeach
              </select>
            </div>

            <div class="mb-3">
              <label for="especialidade" class="form-label">Especialidade</label>
              <select class="form-select" id="especialidade" name="especialidade" required>
                <option selected disabled>Selecione a especialidade</option>
                <option value="cardiologia">Cardiologia</option>
                <option value="dermatologia">Dermatologia</option>
              </select>
            </div>

            <div class="mb-3">
              <label for="tipo_atendimento" class="form-label">Tipo de Atendimento</label>
              <select class="form-select" id="tipo_atendimento" name="tipo_atendimento" required>
                <option value="presencial">Presencial</option>
                <option value="teleconsulta">Teleconsulta</option>
              </select>
            </div>

            <div class="mb-3">
              <label for="sala" class="form-label">Sala / Ambiente</label>
              <input type="text" class="form-control" id="sala" name="sala" placeholder="Ex: Sala 01, Online, etc.">
            </div>
          </fieldset>

          <div class="mb-3">
            <label for="observacoes" class="form-label">Observações</label>
            <textarea class="form-control" id="observacoes" name="observacoes" rows="3" placeholder="Ex: Médico atende com 10 min de tolerância..."></textarea>
          </div>

          <div class="d-flex justify-content-end">
            <button type="reset" class="btn btn-secondary me-2">Limpar</button>
            <button type="submit" class="btn btn-primary">Salvar Agenda</button>
          </div>
        </div>
      </div>
    </div>
  </form>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const calendarEl = document.getElementById('calendar');
      const inputData = document.getElementById('data');

      const calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        locale: 'pt-br',
        selectable: true,
        select: function (info) {
          const selectedDate = info.startStr;
          inputData.value = selectedDate;
        },
        headerToolbar: {
          left: 'prev,next',
          center: 'title',
          right: ''
        }
      });

      calendar.render();
    });
  </script>

</x-layoutadm>


