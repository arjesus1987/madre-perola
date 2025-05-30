<x-layoutadm>
 <div class="container mt-5">
    <h2 class="mb-4">Produtos Cadastrados</h2>

    <!-- Filtros -->
    <form method="GET" action="/produtos" class="mb-4 border p-3 rounded">
      <h5 class="mb-3">Filtros</h5>
      <div class="row g-3">
        <div class="col-md-3">
          <label class="form-label">Nome</label>
          <input type="text" name="nome" class="form-control" value="{{ request('nome') }}">
        </div>
        <div class="col-md-3">
          <label class="form-label">Categoria</label>
          <select name="categoria" class="form-select">
            <option value="">Todas</option>
            <option value="medicamento" {{ request('categoria') == 'medicamento' ? 'selected' : '' }}>Medicamento</option>
            <option value="equipamento" {{ request('categoria') == 'equipamento' ? 'selected' : '' }}>Equipamento</option>
            <option value="suplemento" {{ request('categoria') == 'suplemento' ? 'selected' : '' }}>Suplemento</option>
          </select>
        </div>
        <div class="col-md-3">
          <label class="form-label">Fornecedor</label>
          <select name="fornecedor_id" class="form-select">
            <option value="">Todos</option>
            @foreach ($fornecedores as $fornecedor)
              <option value="{{ $fornecedor->id }}" {{ request('fornecedor_id') == $fornecedor->id ? 'selected' : '' }}>
                {{ $fornecedor->nome }}
              </option>
            @endforeach
          </select>
        </div>
        <div class="col-md-3">
          <label class="form-label">Status</label>
          <select name="status" class="form-select">
            <option value="">Todos</option>
            <option value="ativo" {{ request('status') == 'ativo' ? 'selected' : '' }}>Ativo</option>
            <option value="inativo" {{ request('status') == 'inativo' ? 'selected' : '' }}>Inativo</option>
          </select>
        </div>
      </div>
      <div class="d-flex justify-content-end mt-3">
        <button type="submit" class="btn btn-primary me-2">Filtrar</button>
        <a href="/produtos" class="btn btn-secondary">Limpar</a>
      </div>
    </form>

    <!-- Grid de Produtos -->
    <div class="table-responsive">
      <table class="table table-bordered table-hover">
        <thead class="table-light">
          <tr>
            <th>Nome</th>
            <th>Categoria</th>
            <th>Fornecedor</th>
            <th>Preço</th>
            <th>Quantidade</th>
            <th>Status</th>
            <th class="text-center">Ações</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($produtos as $produto)
            <tr>
              <td>{{ $produto->nome }}</td>
              <td>{{ ucfirst($produto->categoria) }}</td>
              <td>{{ $produto->fornecedor->nome ?? '-' }}</td>
              <td>R$ {{ number_format($produto->preco, 2, ',', '.') }}</td>
              <td>{{ $produto->quantidade }}</td>
              <td>
                <span class="badge {{ $produto->status == 'ativo' ? 'bg-success' : 'bg-secondary' }}">
                  {{ ucfirst($produto->status) }}
                </span>
              </td>
              <td class="text-center">
                <a href="{{ route('produtos.edit', $produto->id) }}" class="btn btn-sm btn-warning">Editar</a>
                <form action="{{ route('produtos.destroy', $produto->id) }}" method="POST" class="d-inline">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</button>
                </form>
              </td>
            </tr>
          @empty
            <tr>
              <td colspan="7" class="text-center">Nenhum produto encontrado.</td>
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>

    <!-- Paginação -->
    <div class="d-flex justify-content-center mt-4">
      {{ $produtos->appends(request()->query())->links() }}
    </div>
  </div>
</x-layoutadm>
