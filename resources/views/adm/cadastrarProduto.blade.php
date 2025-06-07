<x-layoutadm>
  <div class="container mt-5">
    <h2 class="mb-4">Cadastro de Produto</h2>

    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif  

    <form action="{{ url('/cadastrarProduto') }}" method="POST" enctype="multipart/form-data">
      @csrf

      <div class="mb-3">
        <label for="nome" class="form-label">Nome do Produto</label>
        <input type="text" class="form-control" id="nome" name="nome" required>
      </div>

      <div class="mb-3">
        <label for="descricao" class="form-label">Descrição</label>
        <textarea class="form-control" id="descricao" name="descricao" rows="3"></textarea>
      </div>

      <div class="mb-3">
        <label for="preco" class="form-label">Preço</label>
        <input type="text" class="form-control" id="preco" name="preco" required>
      </div>

      <div class="mb-3">
        <label for="quantidade" class="form-label">Quantidade em Estoque</label>
        <input type="number" class="form-control" id="quantidade" name="quantidade" required>
      </div>

      <div class="mb-3">
        <label for="categoria" class="form-label">Categoria</label>
        <select class="form-select" id="categoria" name="categoria" required>
          <option value="">Selecione</option>
          <option value="medicamento">Medicamento</option>
          <option value="equipamento">Equipamento</option>
          <option value="suplemento">Suplemento</option>
        </select>
      </div>

      <div class="mb-3">
        <label for="fornecedor_id" class="form-label">Fornecedor</label>
        <select class="form-select" id="fornecedor_id" name="fornecedor_id" required>
          <option value="">Selecione um fornecedor</option>
          <!-- Exemplo fixo; substitua com dados dinâmicos do banco -->
          <option value="1">Fornecedor Alpha</option>
          <option value="2">Fornecedor Beta</option>
          <option value="3">Fornecedor Gama</option>
        </select>
      </div>

      <div class="mb-3">
        <label for="imagem" class="form-label">Imagem do Produto</label>
        <input type="file" class="form-control" id="imagem" name="imagem" accept="image/*">
        <!-- Pré-visualização da imagem -->
        <img id="previewImagem" src="#" alt="Prévia da imagem" style="display: none; max-width: 200px;" class="mt-3"/>
      </div>

      <div class="mb-3">
        <label for="status" class="form-label">Status</label>
        <select class="form-select" id="status" name="status" required>
          <option value="">Selecione</option>
          <option value="1">Ativo</option>
          <option value="0">Inativo</option>
        </select>
      </div>

      <div class="d-flex justify-content-between">
        <button type="submit" class="btn btn-primary">Cadastrar</button>
        <a href="/produtos" class="btn btn-secondary">Cancelar</a>
      </div>
    </form>
  </div>

  <!-- Scripts da página -->
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

    // Pré-visualização da imagem
    document.getElementById('imagem').addEventListener('change', function(event) {
      const [file] = event.target.files;
      if (file) {
        const imgPreview = document.getElementById('previewImagem');
        imgPreview.src = URL.createObjectURL(file);
        imgPreview.style.display = 'block';
      }
    });
  </script>
</x-layoutadm>
