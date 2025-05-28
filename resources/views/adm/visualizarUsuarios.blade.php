<x-layoutadm>
  <div class="main-content" id="usuarios">
    <h1>Visualizar Usuários</h1>

    <!-- Filtros -->
    <form class="mb-4 border rounded p-3" method="GET" action="{{ route('usuarios.index') }}">
      <h5 class="mb-3">Filtros</h5>
      <div class="row">
        <div class="col-md-4 mb-2">
          <label class="form-label">Nome</label>
          <input type="text" name="nome" class="form-control" value="{{ request('nome') }}">
        </div>
        <div class="col-md-3 mb-2">
          <label class="form-label">CPF</label>
          <input type="text" name="cpf" class="form-control" value="{{ request('cpf') }}">
        </div>
        <div class="col-md-3 mb-2">
          <label class="form-label">Perfil</label>
          <select name="perfil" class="form-select">
            <option value="">Todos</option>
            <option value="admin" {{ request('perfil') == 'admin' ? 'selected' : '' }}>Administrador</option>
            <option value="gerente" {{ request('perfil') == 'gerente' ? 'selected' : '' }}>Gerente</option>
            <option value="usuario" {{ request('perfil') == 'usuario' ? 'selected' : '' }}>Usuário</option>
          </select>
        </div>
        <div class="col-md-2 mb-2">
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
        <a href="{{ route('usuarios.index') }}" class="btn btn-secondary">Limpar</a>
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
          @forelse ($usuarios as $usuario)
            <tr>
              <td>{{ $usuario->nome }}</td>
              <td>{{ $usuario->cpf }}</td>
              <td>{{ $usuario->email }}</td>
              <td>{{ ucfirst($usuario->perfil) }}</td>
              <td>
                <span class="badge {{ $usuario->status == 'ativo' ? 'bg-success' : 'bg-secondary' }}">
                  {{ ucfirst($usuario->status) }}
                </span>
              </td>
              <td class="text-center">
                <a href="{{ route('usuarios.show', $usuario->id) }}" class="btn btn-sm btn-info">Visualizar</a>
                <a href="{{ route('usuarios.edit', $usuario->id) }}" class="btn btn-sm btn-warning">Editar</a>
              </td>
            </tr>
          @empty
            <tr>
              <td colspan="6" class="text-center">Nenhum usuário encontrado.</td>
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>

    <!-- Paginação -->
    <div class="d-flex justify-content-center mt-4">
      {{ $usuarios->appends(request()->query())->links() }}
    </div>
  </div>
</x-layoutadm>
