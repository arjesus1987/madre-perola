<x-layoutadm>
  <div class="container mt-5">
    <h2 class="mb-4">Editar Produto</h2>

    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{ route('produtos.update', $produto->id_produto) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')

      <div class="mb-3">
        <label for="nome_produto" class="form-label">Nome do Produto</label>
        <input type="text" class="form-control" id="nome_produto" name="nome_produto" value="{{ old('nome_produto', $produto->nome_produto) }}" required>
      </div>

      <div class="mb-3">
        <label for="descricao" class="form-label">Descrição</label>
        <textarea class="form-control" id="descricao" name="descricao" rows="3">{{ old('descricao', $produto->descricao) }}</textarea>
      </div>

      <div class="mb-3">
        <label for="preco" class="form-label">Preço</label>
        <input type="text" class="form-control" id="preco" name="preco" value="{{ old('preco', $produto->preco) }}" required>
      </div>

      <div class="mb-3">
        <label for="quantidade" class="form-label">Quantidade em Estoque</label>
        <input type="number" class="form-control" id="quantidade" name="quantidade" value="{{ old('quantidade', $produto->quantidade) }}" required>
      </div>

      <div class="mb-3">
        <label for="categoria" class="form-label">Categoria</label>
        <select class="form-select" id="categoria" name="categoria" required>
          <option value="">Selecione</option>
          <option value="medicamento" {{ $produto->categoria == 'medicamento' ? 'selected' : '' }}>Medicamento</option>
          <option value="equipamento" {{ $produto->categoria == 'equipamento' ? 'selected' : '' }}>Equipamento</option>
          <option value="suplemento" {{ $produto->categoria == 'suplemento' ? 'selected' : '' }}>Suplemento</option>
        </select>
      </div>

      <div class="mb-3">
        <label for="id_fornecedor" class="form-label">Fornecedor</label>
        <select class="form-select" id="id_fornecedor" name="id_fornecedor" required>
          <option value="">Selecione um fornecedor</option>
          @foreach($fornecedores as $fornecedor)
            <option value="{{ $fornecedor->id_fornecedor }}" {{ $produto->id_fornecedor == $fornecedor->id_fornecedor ? 'selected' : '' }}>
              {{ $fornecedor->nome }}
            </option>
          @endforeach
        </select>
      </div>

      <div class="mb-3">
        <label for="imagem" class="form-label">Imagem do Produto</label>
        <input type="file" class="form-control" id="imagem" name="imagem" accept="image/*">
        @if ($produto->imagem)
          <img src="{{ asset('storage/' . $produto->imagem) }}" alt="Imagem atual" style="max-width: 200px;" class="mt-3">
        @endif
      </div>

      <div class="mb-3">
        <label for="status" class="form-label">Status</label>
        <select class="form-select" id="status" name="status" required>
          <option value="1" {{ $produto->status == 1 ? 'selected' : '' }}>Ativo</option>
          <option value="0" {{ $produto->status == 0 ? 'selected' : '' }}>Inativo</option>
        </select>
      </div>

      <div class="mb-3 d-flex justify-content-end">
        <a href="{{ route('visualizarProdutos.index') }}" class="btn btn-secondary me-2">Voltar</a>
        <button type="submit" class="btn btn-primary">Salvar Alterações</button>
      </div>
    </form>
  </div>

  <script>
    // Máscara de valor monetário no campo "preço"
    document.addEventListener('DOMContentLoaded', function () {
      const precoInput = document.getElementById('preco');

      precoInput.addEventListener('input', function (e) {
        let valor = e.target.value.replace(/\D/g, '');
        valor = (parseFloat(valor) / 100).toFixed(2);
        valor = valor.replace('.', ',');
        valor = valor.replace(/\B(?=(\d{3})+(?!\d))/g, '.');
        e.target.value = 'R$ ' + valor;
      });
    });
  </script>
</x-layoutadm>
