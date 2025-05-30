<x-layoutadm>
<div class="container my-5" id="especialidades">
    <h1 class="mb-4">Visualizar Especialidades</h1>

    <!-- Filtros -->
    <form class="mb-4 border rounded p-3" method="GET" action="/visualizarEspecialidades">
      <h5 class="mb-3">Filtros</h5>
      <div class="row g-3">
        <div class="col-md-6">
          <label for="nome" class="form-label">Nome da Especialidade</label>
          <input type="text" id="nome" name="nome" class="form-control" value="">
        </div>

        <div class="col-md-3">
          <label for="status" class="form-label">Status</label>
          <select id="status" name="status" class="form-select">
            <option value="">Todos</option>
            <option value="ativo">Ativo</option>
            <option value="inativo">Inativo</option>
          </select>
        </div>
      </div>

      <div class="d-flex justify-content-end mt-3">
        <button type="submit" class="btn btn-primary me-2">Filtrar</button>
        <a href="/visualizarEspecialidades" class="btn btn-secondary">Limpar</a>
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
          <!-- Exemplo estático -->
          <tr>
            <td>Cardiologia</td>
            <td>Especialidade médica relacionada ao coração.</td>
            <td><span class="badge bg-success">Ativo</span></td>
            <td class="text-center">
              <a href="/especialidades/1" class="btn btn-sm btn-info">Visualizar</a>
              <a href="/especialidades/1/edit" class="btn btn-sm btn-warning">Editar</a>
            </td>
          </tr>
          <!-- Caso não haja registros -->
          <!-- <tr><td colspan="4" class="text-center">Nenhuma especialidade encontrada.</td></tr> -->
        </tbody>
      </table>
    </div>

    <!-- Paginação -->
    <nav aria-label="Paginação">
      <ul class="pagination justify-content-center mt-4">
        <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1">Anterior</a></li>
        <li class="page-item active"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">Próximo</a></li>
      </ul>
    </nav>
  </div>
</x-layoutadm>