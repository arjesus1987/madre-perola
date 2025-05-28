<x-layoutadm>
 <div class="main-content" id="cadastrarAgendamento">
  <h1>Cadastro de Agenda de Atendimento</h1>
  <div class="row">
    <!-- Coluna do calendário -->
    <div class="col-md-6 mb-4">
      <div id="calendar"></div>
    </div>

    <!-- Coluna do formulário -->
    <div class="col-md-6">
      <form>
        <fieldset class="border p-3 mb-4">
          <legend class="w-auto px-2">Dados da Agenda</legend>
          <div class="mb-3">
            <label for="data" class="form-label">Data</label>
            <input type="date" class="form-control" id="data" required readonly>
          </div>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="horaInicio" class="form-label">Hora Início</label>
              <input type="time" class="form-control" id="horaInicio" required>
            </div>
            <div class="col-md-6 mb-3">
              <label for="horaFim" class="form-label">Hora Fim</label>
              <input type="time" class="form-control" id="horaFim" required>
            </div>
          </div>
          <div class="mb-3">
            <label for="duracao" class="form-label">Duração por Consulta (min)</label>
            <input type="number" class="form-control" id="duracao" min="5" step="5" value="30">
          </div>
        </fieldset>

        <fieldset class="border p-3 mb-4">
          <legend class="w-auto px-2">Profissional e Especialidade</legend>
          <div class="mb-3">
            <label for="medico" class="form-label">Médico</label>
            <select class="form-select" id="medico" required>
              <option selected disabled>Selecione o médico</option>
              <option value="1">Dr. João Silva</option>
              <option value="2">Dra. Ana Souza</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="especialidade" class="form-label">Especialidade</label>
            <select class="form-select" id="especialidade" required>
              <option selected disabled>Selecione a especialidade</option>
              <option value="cardiologia">Cardiologia</option>
              <option value="dermatologia">Dermatologia</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="tipoAtendimento" class="form-label">Tipo de Atendimento</label>
            <select class="form-select" id="tipoAtendimento">
              <option value="presencial">Presencial</option>
              <option value="teleconsulta">Teleconsulta</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="sala" class="form-label">Sala / Ambiente</label>
            <input type="text" class="form-control" id="sala" placeholder="Ex: Sala 01, Online, etc.">
          </div>
        </fieldset>

        <div class="mb-3">
          <label for="observacoesAgenda" class="form-label">Observações</label>
          <textarea class="form-control" id="observacoesAgenda" rows="3" placeholder="Ex: Médico atende com 10 min de tolerância..."></textarea>
        </div>

        <div class="d-flex justify-content-end">
          <button type="reset" class="btn btn-secondary me-2">Limpar</button>
          <button type="submit" class="btn btn-primary">Salvar Agenda</button>
        </div>
      </form>
    </div>
  </div>
</div>

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

</div>

</x-layoutadm>