<x-layoutadm>

    {{-- {{ dd($fornecedor) }} --}}

  <div class="container mt-5">
    <h2 class="mb-4">Editar Fornecedor</h2>

    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif  

    <form action="{{ route('fornecedores.update', $fornecedor->id_fornecedor) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')

      <div class="mb-3">
        <label for="nome" class="form-label">Nome do Fornecedor</label>
        <input type="text" class="form-control" id="nome" name="nome" value="{{ old('nome', $fornecedor->nome) }}" required>
      </div>

      <div class="mb-3">
        <label for="cnpj_cpf" class="form-label">CPF ou CNPJ</label>
        <input type="text" class="form-control" id="cnpj_cpf" name="cnpj_cpf" value="{{ old('cnpj_cpf', $fornecedor->cnpj_cpf) }}" required>
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">E-mail</label>
        <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $fornecedor->email) }}" autocomplete="off">
      </div>

      <div class="mb-3">
        <label for="telefone" class="form-label">Telefone</label>
        <input type="tel" class="form-control" id="telefone" name="telefone" value="{{ old('telefone', $fornecedor->telefone) }}" maxlength="15">
      </div>

      <div class="mb-3">
        <label for="endereco" class="form-label">Endereço</label>
        <textarea class="form-control" id="endereco" name="endereco" rows="2">{{ old('endereco', $fornecedor->endereco) }}</textarea>
      </div>

      <div class="mb-3">
        <label for="status" class="form-label">Status</label>
        <select class="form-select" id="status" name="status" required>
          <option value="">Selecione</option>
          <option value="1" {{ old('status', $fornecedor->status) == 1 ? 'selected' : '' }}>Ativo</option>
          <option value="0" {{ old('status', $fornecedor->status) == 0 ? 'selected' : '' }}>Inativo</option>
        </select>
      </div>

      <div class="d-flex justify-content-end">
        <a href="{{ route('visualizarFornecedores.index') }}" class="btn btn-secondary me-2"">Cancelar</a>
        <button type="submit" class="btn btn-primary">Salvar alterações</button>
      </div>
    </form>
  </div>

  <script>
    // Máscara dinâmica CPF/CNPJ
    const cnpjCpfInput = document.getElementById('cnpj_cpf');
    cnpjCpfInput.addEventListener('input', function(e) {
      let value = e.target.value.replace(/\D/g, '');

      if (value.length <= 11) {
        value = value.replace(/(\d{3})(\d)/, '$1.$2');
        value = value.replace(/(\d{3})(\d)/, '$1.$2');
        value = value.replace(/(\d{3})(\d{1,2})$/, '$1-$2');
      } else {
        value = value.replace(/^(\d{2})(\d)/, '$1.$2');
        value = value.replace(/^(\d{2})\.(\d{3})(\d)/, '$1.$2.$3');
        value = value.replace(/\.(\d{3})(\d)/, '.$1/$2');
        value = value.replace(/(\d{4})(\d)/, '$1-$2');
      }

      e.target.value = value;
    });

    // Máscara telefone
    const telefoneInput = document.getElementById('telefone');
    telefoneInput.addEventListener('input', function(e) {
      let v = e.target.value.replace(/\D/g, '');

      if (v.length > 11) v = v.slice(0, 11);

      if (v.length <= 10) {
        v = v.replace(/^(\d{2})(\d{4})(\d{0,4}).*/, '($1) $2-$3');
      } else {
        v = v.replace(/^(\d{2})(\d{5})(\d{0,4}).*/, '($1) $2-$3');
      }

      e.target.value = v;
    });

    const emailInput = document.getElementById('email');
    emailInput.addEventListener('input', function(e) {
      e.target.value = e.target.value.replace(/\s/g, '');
    });
  </script>
</x-layoutadm>
