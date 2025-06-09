<x-layoutadm>
<div class="container mt-4">
    <h2>Agendar Consulta</h2>

    <!-- Filtros -->
    <form method="GET" action="{{ url('/consulta') }}" class="row g-3 mb-4">
        <div class="col-md-3">
            <label for="especialidade" class="form-label">Especialidade</label>
            <select name="especialidade" id="especialidade" class="form-select">
                <option value="">Todas</option>
                @foreach ($especialidades as $especialidade)
                    <option value="{{ $especialidade->id }}" @if(request('especialidade') == $especialidade->id) selected @endif>{{ $especialidade->nome }}</option>
                @endforeach
            </select>
        </div>

        <div class="col-md-3">
            <label for="medico" class="form-label">Médico</label>
            <select name="medico" id="medico" class="form-select">
                <option value="">Todos</option>
                @foreach ($medicos as $medico)
                    <option value="{{ $medico->id }}" @if(request('medico') == $medico->id) selected @endif>Dr. {{ $medico->nome }}</option>
                @endforeach
            </select>
        </div>

        <div class="col-md-3">
            <label for="data" class="form-label">Data</label>
            <input type="date" name="data" id="data" class="form-control" value="{{ request('data') }}">
        </div>

        <div class="col-md-3 d-flex align-items-end">
            <button type="submit" class="btn btn-primary w-100">Filtrar</button>
        </div>
    </form>

    <!-- Mensagens -->
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <!-- Tabela -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Data</th>
                <th>Horário</th>
                <th>Médico</th>
                <th>Especialidade</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($agendas as $agenda)
            <tr>
                <td>{{ \Carbon\Carbon::parse($agenda->data)->format('d/m/Y') }}</td>
                <td>{{ \Carbon\Carbon::parse($agenda->hora_inicio)->format('H:i') }} - {{ \Carbon\Carbon::parse($agenda->hora_fim)->format('H:i') }}</td>
                <td>Dr. {{ $agenda->medico->nome }}</td>
                <td>{{ $agenda->especialidade->nome }}</td>
                <td>
                    <form method="POST" action="{{ url('/consulta/agendar/', $agenda->id) }}">
                        @csrf
                        <button type="submit" class="btn btn-success btn-sm">Agendar Consulta</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr><td colspan="5" class="text-center">Nenhum horário disponível para agendamento.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
</x-layoutadm>

