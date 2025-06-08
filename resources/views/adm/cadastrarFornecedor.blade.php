<x-layoutadm>
  <div class="container mt-5">
    <h2 class="mb-4">Cadastro de Fornecedor</h2>

     @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif 

    <form action="{{ url('/cadastrarfornecedor') }}" method="POST" enctype="multipart/form-data">
      @csrf

      <div class="mb-3">
        <label for="nome" class="form-label">Nome do Fornecedor</label>
        <input type="text" class="form-control" id="nome" name="nome" required>
      </div>

      <div class="mb-3">
        <label for="cnpj_cpf" class="form-label">CPF ou CNPJ</label>
        <input type="text" class="form-control" id="cnpj_cpf" name="cnpj_cpf" required>
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">E-mail</label>
        <input type="email" class="form-control" id="email" name="email" autocomplete="off">
      </div>

      <div class="mb-3">
        <label for="telefone" class="form-label">Telefone</label>
        <input type="tel" class="form-control" id="telefone" name="telefone" maxlength="15">
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


      <div class="d-flex justify-content-end">
                <button type="reset" class="btn btn-secondary me-2">Limpar</button>
                <button type="submit" class="btn btn-primary">Salvar</button>
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

    // Máscara telefone (formato brasileiro: (00) 00000-0000)
    const telefoneInput = document.getElementById('telefone');
    telefoneInput.addEventListener('input', function(e) {
      let v = e.target.value.replace(/\D/g, '');

      if (v.length > 11) v = v.slice(0, 11);

      if (v.length <= 10) {
        // (00) 0000-0000
        v = v.replace(/^(\d{2})(\d{4})(\d{0,4}).*/, '($1) $2-$3');
      } else {
        // (00) 00000-0000
        v = v.replace(/^(\d{2})(\d{5})(\d{0,4}).*/, '($1) $2-$3');
      }

      e.target.value = v;
    });

    // Validação simples de email para impedir espaços e caracteres inválidos no input
    const emailInput = document.getElementById('email');
    emailInput.addEventListener('input', function(e) {
      // Remove espaços
      e.target.value = e.target.value.replace(/\s/g, '');
    });
  </script>
</x-layoutadm>
