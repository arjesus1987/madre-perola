<x-layoutadm>
  <div class="container mt-5">
    <h2 class="mb-4">Detalhes do Fornecedor</h2>

    <form>
      <div class="mb-3">
        <label class="form-label">Nome do Fornecedor</label>
        <input type="text" class="form-control" value="{{ $fornecedor->nome }}" readonly>
      </div>

      <div class="mb-3">
        <label class="form-label">CPF ou CNPJ</label>
        <input type="text" class="form-control" value="{{ $fornecedor->cnpj_cpf }}" readonly>
      </div>

      <div class="mb-3">
        <label class="form-label">E-mail</label>
        <input type="email" class="form-control" value="{{ $fornecedor->email }}" readonly>
      </div>

      <div class="mb-3">
        <label class="form-label">Telefone</label>
        <input type="text" class="form-control" value="{{ $fornecedor->telefone }}" readonly>
      </div>

      <div class="mb-3">
        <label class="form-label">Endereço</label>
        <textarea class="form-control" rows="2" readonly>{{ $fornecedor->endereco }}</textarea>
      </div>

      <div class="mb-3">
        <label class="form-label">Status</label>
        <input type="text" class="form-control" value="{{ $fornecedor->status ? 'Ativo' : 'Inativo' }}" readonly>
      </div>
<div class="d-flex justify-content-end">
  <a href="{{ route('visualizarFornecedores.index') }}" class="btn btn-secondary ">Voltar</a>
</div>
  
    </form>
  </div>
</x-layoutadm>
