<x-layoutadm>
  <div class="container mt-5">
    <h2 class="mb-4">Fornecedores</h2>

    <!-- Filtros -->
    <form method="GET" action="" class="mb-4 border rounded p-3">
      <h5 class="mb-3">Filtros</h5>
      <div class="row">
        <div class="col-md-4 mb-2">
          <label class="form-label">Nome</label>
          <input type="text" name="nome" class="form-control" value="">
        </div>
        <div class="col-md-4 mb-2">
          <label class="form-label">CNPJ</label>
          <input type="text" name="cnpj" class="form-control" value="">
        </div>
        <div class="col-md-4 mb-2">
          <label class="form-label">Status</label>
          <select name="status" class="form-select">
            <option value="">Todos</option>
            <option value="ativo">Ativo</option>
            <option value="inativo">Inativo</option>
          </select>
        </div>
      </div>

      <div class="d-flex justify-content-end mt-3">
        <button type="submit" class="btn btn-primary me-2">Filtrar</button>
        <a href="/fornecedores" class="btn btn-secondary">Limpar</a>
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
          <!-- Exemplo de item -->
          <tr>
            <td>Fornecedor Exemplo</td>
            <td>12.345.678/0001-90</td>
            <td>fornecedor@exemplo.com</td>
            <td>(11) 99999-9999</td>
            <td><span class="badge bg-success">Ativo</span></td>
            <td class="text-center">
              <a href="/fornecedores/1/editar" class="btn btn-sm btn-warning">Editar</a>
              <form action="/fornecedores/1/excluir" method="POST" class="d-inline" onsubmit="return confirm('Tem certeza que deseja excluir este fornecedor?');">
                <!-- @csrf -->
                <!-- @method('DELETE') -->
                <button type="submit" class="btn btn-sm btn-danger">Excluir</button>
              </form>
            </td>
          </tr>
          <!-- Caso não haja resultados -->
          <!--
          <tr>
            <td colspan="6" class="text-center">Nenhum fornecedor encontrado.</td>
          </tr>
          -->
        </tbody>
      </table>
    </div>

    <!-- Paginação -->
    <div class="d-flex justify-content-center mt-4">
      <!-- Laravel: {{ $fornecedores->appends(request()->query())->links() }} -->
      <nav>
        <ul class="pagination">
          <li class="page-item disabled"><a class="page-link">Anterior</a></li>
          <li class="page-item active"><a class="page-link">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">Próxima</a></li>
</x-layoutadm>