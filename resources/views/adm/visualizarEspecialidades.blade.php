<x-layoutadm>
<div class="container my-5" id="especialidades">
    <h1 class="mb-4">Visualizar Especialidades</h1>

    <!-- Filtros -->
    <form class="mb-4 border rounded p-3" method="GET" action="{{ route('visualizarEspecialidades.index') }}">
        <h5 class="mb-3">Filtros</h5>
        <div class="row g-3">
            <div class="col-md-6">
                <label for="nome" class="form-label">Nome da Especialidade</label>
                <input type="text" id="nome" name="nome" class="form-control" value="{{ old('nome', $nome) }}">
            </div>

            <div class="col-md-3">
                <label for="status" class="form-label">Status</label>
                <select id="status" name="status" class="form-select">
                    <option value="">Todos</option>
                    <option value="ativo" {{ $status == 'ativo' ? 'selected' : '' }}>Ativo</option>
                    <option value="inativo" {{ $status == 'inativo' ? 'selected' : '' }}>Inativo</option>
                </select>
            </div>
        </div>

        <div class="d-flex justify-content-end mt-3">
            <button type="submit" class="btn btn-primary me-2">Filtrar</button>
            <a href="{{ route('visualizarEspecialidades.index') }}" class="btn btn-secondary">Limpar</a>
        </div>
    </form>

    <!-- Lista de Especialidades -->
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="table-light">
                <tr>
                    <th>Nome da Especialidade</th>
                    <th>Descrição</th>
                    <th>Status</th>
                    <th class="text-center">Ações</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($especialidades as $especialidade)
                    <tr>
                        <td>{{ $especialidade->nome }}</td>
                        <td>{{ $especialidade->descricao }}</td>
                        <td>
                            <span class="badge {{ $especialidade->status == 'ativo' ? 'bg-success' : 'bg-secondary' }}">
                                {{ ucfirst($especialidade->status) }}
                            </span>
                        </td>
                        <td class="text-center">
                            <a href="{{ route('detalharEspecialidades.show', $especialidade->id) }}" class="btn btn-sm btn-info">Visualizar</a>
                            <a href="{{ route('especialidades.edit', $especialidade->id) }}" class="btn btn-sm btn-warning">Editar</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center">Nenhuma especialidade encontrada.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Paginação -->
    <div class="mt-4">
        {{ $especialidades->withQueryString()->links() }}
    </div>
</div>
</x-layoutadm>
