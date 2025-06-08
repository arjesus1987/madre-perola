<x-layoutadm>
  <div class="container mt-5">
    <h2 class="mb-4">Fornecedores</h2>
       @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif 
    <!-- Filtros -->
    <form method="GET" action="{{ route('visualizarFornecedores.index') }}" class="mb-4 border rounded p-3">
      <h5 class="mb-3">Filtros</h5>
      <div class="row">
        <div class="col-md-4 mb-2">
          <label class="form-label">Nome</label>
          <input type="text" name="nome" class="form-control" value="{{ request('nome') }}">
        </div>
        <div class="col-md-4 mb-2">
          <label class="form-label">CNPJ</label>
          <input type="text" name="cnpj" class="form-control" value="{{ request('cnpj') }}">
        </div>
        <div class="col-md-4 mb-2">
          <label class="form-label">Status</label>
          <select name="status" class="form-select">
            <option value="">Todos</option>
            <option value="1" {{ request('status') == '1' ? 'selected' : '' }}>Ativo</option>
            <option value="0" {{ request('status') == '0' ? 'selected' : '' }}>Inativo</option>
          </select>
        </div>
      </div>

      <div class="d-flex justify-content-end mt-3">
        <button type="submit" class="btn btn-primary me-2">Filtrar</button>
        <a href="{{ route('visualizarFornecedores.index') }}" class="btn btn-secondary">Limpar</a>
      </div>
    </form>

    <!-- Grid de Fornecedores -->
    <div class="table-responsive">
      <table class="table table-bordered table-striped">
        <thead class="table-light">
          <tr>
            <th>Nome</th>
            <th>CNPJ</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Status</th>
            <th class="text-center">Ações</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($fornecedores as $fornecedor)
          <tr>
            <td>{{ $fornecedor->nome }}</td>
            <td>{{ $fornecedor->cnpj_cpf }}</td>
            <td>{{ $fornecedor->email }}</td>
            <td>{{ $fornecedor->telefone }}</td>
            <td>
              <span class="badge {{ $fornecedor->status == 1 ? 'bg-success' : 'bg-secondary' }}">
               {{ $fornecedor->status == 1 ? 'Ativo' : 'Inativo' }}
              </span>

            </td>
            <td class="text-center">
              <a href="{{ route('detalharFornecedores.show', $fornecedor->id_fornecedor) }}" class="btn btn-sm btn-info">Visualizar</a>
              <a href="{{ route('fornecedores.edit', $fornecedor->id_fornecedor) }}" class="btn btn-sm btn-warning">Editar</a>
            </td>
          </tr>
          @empty
          <tr>
            <td colspan="6" class="text-center">Nenhum fornecedor encontrado.</td>
          </tr>
          @endforelse
        </tbody>
      </table>
    </div>

    <!-- Paginação -->
    <div class="d-flex justify-content-center mt-4">
      {{ $fornecedores->appends(request()->query())->links() }}
    </div>
  </div>
</x-layoutadm>
