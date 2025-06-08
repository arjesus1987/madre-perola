<x-layoutadm>
  <div class="container mt-5">
    <h2 class="mb-4">Detalhes do Produto</h2>
@if(session('success'))
      <div class="alert alert-success">{{ session('success') }}</div>
    @endif 
    <div class="card">
      <div class="card-body">

        <div class="mb-3">
          <label class="form-label"><strong>Nome do Produto:</strong></label>
          <p class="form-control-plaintext">{{ $produto->nome_produto }}</p>
        </div>

        <div class="mb-3">
          <label class="form-label"><strong>Descrição:</strong></label>
          <p class="form-control-plaintext">{{ $produto->descricao }}</p>
        </div>

        <div class="mb-3">
          <label class="form-label"><strong>Preço:</strong></label>
          <p class="form-control-plaintext">R$ {{ number_format($produto->preco, 2, ',', '.') }}</p>
        </div>

        <div class="mb-3">
          <label class="form-label"><strong>Quantidade em Estoque:</strong></label>
          <p class="form-control-plaintext">{{ $produto->quantidade }}</p>
        </div>

        <div class="mb-3">
          <label class="form-label"><strong>Categoria:</strong></label>
          <p class="form-control-plaintext">{{ ucfirst($produto->categoria) }}</p>
        </div>

        <div class="mb-3">
          <label class="form-label"><strong>Fornecedor:</strong></label>
          <p class="form-control-plaintext">
            {{ $produto->fornecedor->nome ?? 'Fornecedor não encontrado' }}
          </p>
        </div>

        <div class="mb-3">
          <label class="form-label"><strong>Imagem do Produto:</strong></label><br>
          @if ($produto->imagem)
            <img src="{{ asset('storage/' . $produto->imagem) }}" alt="Imagem do produto" style="max-width: 200px;">
          @else
            <p class="form-control-plaintext">Sem imagem</p>
          @endif
        </div>

        <div class="mb-3">
          <label class="form-label"><strong>Status:</strong></label>
          <p class="form-control-plaintext">
            {{ $produto->status == 1 ? 'Ativo' : 'Inativo' }}
          </p>
        </div>
        
        
      </div>
    </div>
    <div class="mb-3 d-flex justify-content-end mt-4">
            <a href="{{ route('visualizarProdutos.index') }}" class="btn btn-secondary me-2">Voltar</a>
            <a href="{{ route('produtos.edit', $produto->id_produto) }}" class="btn btn-sm btn-warning me-2">Editar</a>
    </div>
  </div>
</x-layoutadm>
