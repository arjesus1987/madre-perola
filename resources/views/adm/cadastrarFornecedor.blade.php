<x-layoutadm>
<div class="container mt-5">
    <h2 class="mb-4">Cadastro de Fornecedor</h2>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif  

    <form action="{{ url('/cadastrarFornecedor') }}" method="POST" enctype="multipart/form-data">
    @csrf

  
      <div class="mb-3">
        <label for="nome" class="form-label">Nome do Fornecedor</label>
        <input type="text" class="form-control" id="nome" name="nome" required>
      </div>

      <div class="mb-3">
        <label for="cnpj" class="form-label">CNPJ</label>
        <input type="text" class="form-control" id="cnpj_cpf" name="cnpj_cpf" required>
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">E-mail</label>
        <input type="email" class="form-control" id="email" name="email">
      </div>

      <div class="mb-3">
        <label for="telefone" class="form-label">Telefone</label>
        <input type="tel" class="form-control" id="telefone" name="telefone">
      </div>

      <div class="mb-3">
        <label for="endereco" class="form-label">Endereço</label>
        <textarea class="form-control" id="endereco" name="endereco" rows="2"></textarea>
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
        <a href="/fornecedores" class="btn btn-secondary">Voltar</a>
      </div>
    </form>

  </div>
</x-layoutadm>