<x-layoutadm>
  <div class="container py-4">
    <h2>Gerenciar Produtos</h2>

    {{-- Formulário de cadastro/edição --}}
    <form id="formProduto" method="POST" action="{{ route('adm.produtos.store') }}" enctype="multipart/form-data" class="border rounded p-4 mb-4">
      @csrf
      <input type="hidden" name="produto_id" value="{{ old('produto_id') }}">

      <div class="row mb-3">
        <div class="col-md-6">
          <label class="form-label">Nome do Produto</label>
          <input type="text" name="nome" class="form-control" value="{{ old('nome') }}" required>
        </div>
        <div class="col-md-6">
          <label class="form-label">Preço</label>
          <input type="number" name="preco" step="0.01" class="form-control" value="{{ old('preco') }}" required>
        </div>
      </div>

      <div class="mb-3">
        <label class="form-label">Descrição</label>
        <textarea name="descricao" class="form-control" rows="3" required>{{ old('descricao') }}</textarea>
      </div>

      <div class="row mb-3">
        <div class="col-md-6">
          <label class="form-label">Imagem</label>
          <input type="file" name="imagem" class="form-control" accept="image/*" onchange="previewImagem(event)">
        </div>
        <div class="col-md-6">
          <label class="form-label">Status</label>
          <select name="status" class="form-select" required>
            <option value="rascunho" {{ old('status') == 'rascunho' ? 'selected' : '' }}>Rascunho</option>
            <option value="publicado" {{ old('status') == 'publicado' ? 'selected' : '' }}>Publicado</option>
          </select>
        </div>
      </div>

      {{-- Preview --}}
      <div class="border p-3 mb-3" id="preview" style="display: none;">
        <h5>Pré-visualização</h5>
        <p><strong>Nome:</strong> <span id="prevNome"></span></p>
        <p><strong>Preço:</strong> R$ <span id="prevPreco"></span></p>
        <p><strong>Descrição:</strong> <span id="prevDescricao"></span></p>
        <img id="prevImagem" src="#" alt="Imagem do Produto" class="img-fluid rounded" style="max-height: 200px;">
      </div>

      <div class="d-flex justify-content-end">
        <button type="button" class="btn btn-secondary me-2" onclick="mostrarPreview()">Visualizar</button>
        <button type="submit" class="btn btn-primary">Salvar Produto</button>
      </div>
    </form>

    {{-- Filtros --}}
    <form method="GET" action="{{ route('adm.produtos.index') }}" class="mb-4 border rounded p-3">
      <h5>Filtros</h5>
      <div class="row">
        <div class="col-md-4 mb-2">
          <label class="form-label">Nome</label>
          <input type="text" name="nome" class="form-control" value="{{ request('nome') }}">
        </div>
        <div class="col-md-4 mb-2">
          <label class="form-label">Status</label>
          <select name="status" class="form-select">
            <option value="">Todos</option>
            <option value="rascunho" {{ request('status') == 'rascunho' ? 'selected' : '' }}>Rascunho</option>
            <option value="publicado" {{ request('status') == 'publicado' ? 'selected' : '' }}>Publicado</option>
          </select>
        </div>
      </div>
      <div class="d-flex justify-content-end mt-3">
        <button type="submit" class="btn btn-primary me-2">Filtrar</button>
        <a href="{{ route('adm.produtos.index') }}" class="btn btn-secondary">Limpar</a>
      </div>
    </form>

    {{-- Grid de Produtos --}}
    <div class="table-responsive">
      <table class="table table-bordered table-striped">
        <thead class="table-light">
          <tr>
            <th>Nome</th>
            <th>Preço</th>
            <th>Status</th>
            <th>Imagem</th>
            <th class="text-center">Ações</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($produtos as $produto)
            <tr>
              <td>{{ $produto->nome }}</td>
              <td>R$ {{ number_format($produto->preco, 2, ',', '.') }}</td>
              <td>
                <span class="badge {{ $produto->status == 'publicado' ? 'bg-success' : 'bg-secondary' }}">
                  {{ ucfirst($produto->status) }}
                </span>
              </td>
              <td>
                @if($produto->imagem)
                  <img src="{{ asset('storage/' . $produto->imagem) }}" width="60" alt="{{ $produto->nome }}">
                @else
                  Sem imagem
                @endif
              </td>
              <td class="text-center">
                <a href="{{ route('adm.produtos.edit', $produto->id) }}" class="btn btn-sm btn-warning">Editar</a>
                <form action="{{ route('adm.produtos.destroy', $produto->id) }}" method="POST" class="d-inline">
                  @csrf @method('DELETE')
                  <button class="btn btn-sm btn-danger" onclick="return confirm('Deseja realmente excluir este produto?')">Excluir</button>
                </form>
              </td>
            </tr>
          @empty
            <tr>
              <td colspan="5" class="text-center">Nenhum produto encontrado.</td>
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>

    {{-- Paginação --}}
    <div class="d-flex justify-content-center mt-3">
      {{ $produtos->appends(request()->query())->links() }}
    </div>
  </div>

  <script>
    function mostrarPreview() {
      const nome = document.querySelector('[name=nome]').value;
      const preco = document.querySelector('[name=preco]').value;
      const descricao = document.querySelector('[name=descricao]').value;

      document.getElementById('prevNome').innerText = nome;
      document.getElementById('prevPreco').innerText = preco;
      document.getElementById('prevDescricao').innerText = descricao;
      document.getElementById('preview').style.display = 'block';
    }

    function previewImagem(event) {
      const reader = new FileReader();
      reader.onload = function () {
        document.getElementById('prevImagem').src = reader.result;
      };
      reader.readAsDataURL(event.target.files[0]);
    }
  </script>
</x-layoutadm>
