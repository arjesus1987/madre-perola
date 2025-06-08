<x-layoutadm>
  <div class="container mt-5">
    <h2 class="mb-4">Detalhes do Fornecedor</h2>

    @if(session('success'))
      <div class="alert alert-success">{{ session('success') }}</div>
    @endif 

    <div class="card">
      <div class="card-body">
      

    <div class="mb-3">
      <label class="form-label">Nome do Fornecedor</label>
      <p class="form-control-plaintext">{{ $fornecedor->nome }}</p>
    </div>

    <div class="mb-3">
      <label class="form-label">CPF ou CNPJ</label>
      <p class="form-control-plaintext">{{ $fornecedor->cnpj_cpf }}</p>
    </div>

    <div class="mb-3">
      <label class="form-label">E-mail</label>
      <p class="form-control-plaintext">{{ $fornecedor->email }}</p>
    </div>

    <div class="mb-3">
      <label class="form-label">Telefone</label>
      <p class="form-control-plaintext">{{ $fornecedor->telefone }}</p>
    </div>

    <div class="mb-3">
      <label class="form-label">Endereço</label>
      <p class="form-control-plaintext">{{ $fornecedor->endereco }}</p>
    </div>

    <div class="mb-3">
      <label class="form-label">Status</label>
      <p class="form-control-plaintext">{{ $fornecedor->status ? 'Ativo' : 'Inativo' }}</p>
    </div>
</div>
      </div>
    <div class="d-flex justify-content-end mt-4">
      <a href="{{ route('visualizarFornecedores.index') }}" class="btn btn-secondary me-2">Voltar</a>
      <a href="{{ route('fornecedores.edit', $fornecedor->id_fornecedor) }}" class="btn btn-sm btn-warning">Editar</a>
    </div>
  </div>
</x-layoutadm>
