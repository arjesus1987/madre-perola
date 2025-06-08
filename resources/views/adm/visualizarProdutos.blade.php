<x-layoutadm>
  <div class="container mt-5">
    <h2 class="mb-4">Produtos Cadastrados</h2>

    @if (session('success'))
      <div class="alert alert-success">
        {{ session('success') }}
      </div>
    @endif
    <!-- Formulário de busca -->
    <form action="{{ route('visualizarProdutos.index') }}" method="GET" class="  mb-4 border rounded p-3">
      <div class="row">
      <div class="col-md-4">
        <input type="text" name="nome" class="form-control" placeholder="Nome do produto" value="{{ request('nome') }}">
      </div>
      <div class="col-md-4">
        <select name="categoria" class="form-select">
          <option value="">Todas as categorias</option>
          <option value="medicamento" {{ request('categoria') == 'medicamento' ? 'selected' : '' }}>Medicamento</option>
          <option value="equipamento" {{ request('categoria') == 'equipamento' ? 'selected' : '' }}>Equipamento</option>
          <option value="suplemento" {{ request('categoria') == 'suplemento' ? 'selected' : '' }}>Suplemento</option>
        </select>
      </div>
      <div class="col-md-4">
        <select name="status" class="form-select">
          <option value="">Todos os status</option>
          <option value="1" {{ request('status') === '1' ? 'selected' : '' }}>Ativo</option>
          <option value="0" {{ request('status') === '0' ? 'selected' : '' }}>Inativo</option>
        </select>
      </div>
       </div>
      
      <div class="d-flex justify-content-end mt-3">
        <button type="submit" class="btn btn-primary me-2">Filtrar</button>
        <a href="{{ route('visualizarFornecedores.index') }}" class="btn btn-secondary">Limpar</a>
      </div>
    </form>

    <!-- Tabela de produtos -->
    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>Imagem</th>
          <th>Nome</th>
          <th>Categoria</th>
          <th>Preço</th>
          <th>Estoque</th>
          <th>Status</th>
          <th>Ações</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($produtos as $produto)
          <tr>
            <td>{{ $produto->id_produto }}</td>
            <td>
  @if ($produto->imagem)
   <button 
  type="button" 
  class="btn btn-link p-0" 
  data-bs-toggle="modal" 
  data-bs-target="#imagemModal" 
  data-img-src="{{ asset('storage/' . $produto->imagem) }}" 
  title="Visualizar imagem"
>
  🖼️
</button>
  @else
    <span class="text-muted">Sem imagem</span>
  @endif
</td>
            <td>{{ $produto->nome_produto }}</td>
            <td>{{ $produto->categoria }}</td>
            <td>R$ {{ number_format($produto->preco, 2, ',', '.') }}</td>
            <td>{{ $produto->quantidade }}</td>
            <td>
              @if ($produto->status)
                <span class="badge bg-success">Ativo</span>
              @else
                <span class="badge bg-secondary">Inativo</span>
              @endif
            </td>
            <td>
              <a href="{{ route('detalharProdutos.show', $produto->id_produto) }}" class="btn btn-sm btn-info">Visualizar</a>
              <a href="{{ route('produtos.edit', $produto->id_produto) }}" class="btn btn-sm btn-warning">Editar</a>
            </td>
          </tr>
        @empty
          <tr>
            <td colspan="8" class="text-center">Nenhum produto cadastrado.</td>
          </tr>
        @endforelse
      </tbody>
    </table>

    <!-- Paginação (se estiver usando paginate()) -->
    <div class="mt-3">
      {{ $produtos->withQueryString()->links() }}
    </div>
  </div>

  <div class="modal fade" id="imagemModal" tabindex="-1" aria-labelledby="imagemModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="imagemModalLabel">Visualização da Imagem</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
      </div>
      <div class="modal-body text-center">
        <img id="imagemModalSrc" src="" alt="Imagem ampliada" style="max-width: 100%; height: auto;">
      </div>
    </div>
  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    var imagemModal = document.getElementById('imagemModal');
    imagemModal.addEventListener('show.bs.modal', function (event) {
      var button = event.relatedTarget; // botão que acionou o modal
      var imgSrc = button.getAttribute('data-img-src'); // pega a url da imagem
      var modalImg = document.getElementById('imagemModalSrc');
      modalImg.src = imgSrc;
    });
  });
</script>

<style>
  .modal-img {
    max-width: 100%;
    height: auto;
    display: block;
    margin-left: auto;
    margin-right: auto;
  }
</style>

</x-layoutadm>
