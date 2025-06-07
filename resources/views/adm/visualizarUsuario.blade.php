<x-layoutadm>


  @foreach($showUsuario as $imc)
  <tr>
    <th scope="row">{{$imc->idUsuario}}</th>
    <td>{{$imc->nome}}</td>
  </tr>

  @endforeach

  <div class="container my-5" id="usuarios">
    <h1 class="mb-4">Visualizar Usuários</h1>

    <!-- Filtros -->
    <form class="mb-4 border rounded p-3" method="GET" action="/visualizarUsuarios">
      <h5 class="mb-3">Filtros</h5>
      <div class="row g-3">
        <div class="col-md-4">
          <label for="nome" class="form-label">Nome</label>
          <input type="text" id="nome" name="nome" class="form-control" value="">
        </div>

        <div class="col-md-3">
          <label for="cpf" class="form-label">CPF</label>
          <input type="text" id="cpf" name="cpf" class="form-control" value="">
        </div>

        <div class="col-md-3">
          <label for="perfil" class="form-label">Perfil</label>
          <select id="perfil" name="perfil" class="form-select">
            <option value="">Todos</option>
            <option value="admin">Administrador</option>
            <option value="gerente">Gerente</option>
            <option value="usuario">Usuário</option>
          </select>
        </div>

        <div class="col-md-2">
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
        <a href="/visualizarUsuarios" class="btn btn-secondary">Limpar</a>
      </div>
    </form>

    <!-- Lista de Usuários -->
    <div class="table-responsive">
      <table class="table table-bordered table-striped">
        <thead class="table-light">
          <tr>
            <th>Nome</th>
            <th>CPF</th>
            <th>Email</th>
            <th>Perfil</th>
            <th>Status</th>
            <th class="text-center">Ações</th>
          </tr>
        </thead>
        <tbody>
          @foreach($showUsuario as $usuario)
          <tr>
            <td>{{$usuario->nome}}</td>
            <td>{{$usuario->cpf}}</td>
            <td>joao@example.com</td>
            <td>{{$usuario->tipo_usuario}}</td>
            <td><span class="badge bg-success">{{$usuario->status}}</span></td>
            <td class="text-center">
              <a href="/usuarios/1" class="btn btn-sm btn-info">Visualizar</a>
              <a href="/usuarios/1/edit" class="btn btn-sm btn-warning">Editar</a>
            </td>
          </tr>
          @endforeach
          <!-- Exemplo vazio -->
          <!-- <tr><td colspan="6" class="text-center">Nenhum usuário encontrado.</td></tr> -->
        </tbody>
      </table>
    </div>

    <!-- Paginação -->
    <nav aria-label="Paginação">
      <ul class="pagination justify-content-center mt-4">
        {{ $showUsuario->links() }}
      </ul>
    </nav>
  </div>
</x-layoutadm>