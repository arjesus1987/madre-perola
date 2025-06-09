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
            @forelse ($agendas as $agenda)
              @php
                $paciente = $agenda->paciente ?? null;
              @endphp
              <tr>
                <td>{{ $paciente->nome ?? '-' }}</td>
                <td>{{ $paciente->telefones->first()->numero ?? '-' }}</td>
                <td>{{ $paciente->emails->first()->email ?? '-' }}</td>
                <td>{{ $agenda->especialidade->nome ?? '-' }}</td>
                <td>{{ $agenda->medico->nome ?? '-' }}</td>
                <td>{{ \Carbon\Carbon::parse($agenda->data)->format('d/m/Y') }}</td>
                <td>{{ $agenda->hora_inicio }} às {{ $agenda->hora_fim }}</td>
                <td class="text-center">
                  <button class="btn btn-sm btn-primary">Enviar Confirmação</button>
                  <form action="{{ route('agendas.destroy', $agenda->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger" onclick="return confirm('Cancelar esta agenda?')">Cancelar</button>
                  </form>
                </td>
              </tr>
            @empty
              <tr>
                <td colspan="8" class="text-center">Nenhum agendamento marcado.</td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>

      <!-- Paginação -->
      <div class="d-flex justify-content-center">
        {{ $agendas->links() }}
      </div>
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
            @forelse ($agendas as $agenda)
              <tr>
                <td>{{ \Carbon\Carbon::parse($agenda->data)->format('d/m/Y') }}</td>
                <td>{{ $agenda->hora_inicio }} às {{ $agenda->hora_fim }}</td>
                <td>{{ $agenda->sala ?? '-' }}</td>
                <td>{{ $agenda->especialidade->nome ?? '-' }}</td>
                <td>{{ $agenda->medico->nome ?? '-' }}</td>
              </tr>
            @empty
              <tr>
                <td colspan="5" class="text-center">Nenhuma consulta em aberto.</td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>

      <!-- Paginação -->
      <div class="d-flex justify-content-center">
        {{ $agendas->links() }}
      </div>
    </div>
  </div>
</x-layoutadm>
