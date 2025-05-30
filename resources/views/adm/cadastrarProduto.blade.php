<x-layoutadm>
<div class="container mt-5">
    <h2 class="mb-4">Cadastro de Produto</h2>

    <form method="POST" action="/produtos/cadastrar" enctype="multipart/form-data">
      <!-- Laravel: @csrf -->

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
        <input type="number" step="0.01" class="form-control" id="preco" name="preco" required>
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
          <!-- Exemplo fixo; substitua com dados dinâmicos em Blade -->
          <option value="1">Fornecedor Alpha</option>
          <option value="2">Fornecedor Beta</option>
          <option value="3">Fornecedor Gama</option>
        </select>
      </div>

      <div class="mb-3">
        <label for="imagem" class="form-label">Imagem do Produto</label>
        <input type="file" class="form-control" id="imagem" name="imagem" accept="image/*">
      </div>

      <div class="mb-3">
        <label for="status" class="form-label">Status</label>
        <select class="form-select" id="status" name="status" required>
          <option value="">Selecione</option>
          <option value="ativo">Ativo</option>
          <option value="inativo">Inativo</option>
        </select>
      </div>

      <div class="d-flex justify-content-between">
        <button type="submit" class="btn btn-primary">Cadastrar</button>
        <a href="/produtos" class="btn btn-secondary">Cancelar</a>
      </div>
    </form>
  </div>
</x-layoutadm>