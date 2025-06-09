<x-layoutadm>
<div class="main-content" id="consultasMarcadas">
    <h1>Consultas Marcadas</h1>

    <!-- Filtros -->
    <form class="mb-4" method="GET" action="{{ route('agendas.index') }}">
        <fieldset class="border p-3">
            <legend class="w-auto px-2">Filtros de Consulta</legend>
            <div class="row">
                <div class="col-md-3 mb-3">
                    <label for="filtroMedico" class="form-label">Médico</label>
                    <input type="text" class="form-control" name="medico" id="filtroMedico" value="{{ request('medico') }}">
                </div>
                <div class="col-md-3 mb-3">
                    <label for="filtroData" class="form-label">Data</label>
                    <input type="date" class="form-control" name="data" id="filtroData" value="{{ request('data') }}">
                </div>
                <div class="col-md-3 mb-3">
                    <label for="filtroEspecialidade" class="form-label">Especialidade</label>
                    <select class="form-select" name="especialidade_id" id="filtroEspecialidade">
                        <option value="">Todas</option>
                        @foreach($especialidades as $id => $nome)
                            <option value="{{ $id }}" {{ request('especialidade_id') == $id ? 'selected' : '' }}>{{ $nome }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="filtroSala" class="form-label">Nº da Sala</label>
                    <input type="text" class="form-control" name="sala" id="filtroSala" value="{{ request('sala') }}">
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
                @forelse($agendas as $agenda)
                    <tr>
                        <td>{{ $agenda->paciente->nome ?? '-' }}</td>
                        <td>
                            CPF: {{ $agenda->paciente->cpf ?? '-' }}<br>
                            Tel: {{ $agenda->paciente->telefone ?? '-' }}
                        </td>
                        <td>{{ \Carbon\Carbon::parse($agenda->data)->format('d/m/Y') }}</td>
                        <td>{{ $agenda->hora_inicio }}</td>
                        <td>{{ $agenda->medico->nome ?? '-' }}</td>
                        <td>{{ $agenda->especialidade->nome ?? '-' }}</td>
                        <td>{{ $agenda->sala ?? '-' }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7">Nenhuma consulta encontrada.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
</x-layoutadm>
