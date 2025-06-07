<x-layoutadm>
  @if ($errors->any())
  <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
  @endif  
  <div class="main-content" id="usuario">
    <h1>Cadastro de Usuário</h1>
    <form action="{{ url('/cadastrousuario') }}" method="POST">
      @csrf
      <fieldset class="border p-3 mb-4">
        <legend class="w-auto px-2">Dados Pessoais</legend>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="nomeCompleto" class="form-label">Nome Completo</label>
            <input type="text" class="form-control" id="nomeCompleto" required name="nome" maxlength="100">
          </div>
          <div class="col-md-3 mb-3">
            <label for="cpf" class="form-label">CPF</label>
            <input type="text" class="form-control" id="cpf" placeholder="000.000.000-00" required name="cpf" maxlength="14">
          </div>
          <div class="col-md-3 mb-3">
            <label for="rg" class="form-label">RG</label>
            <input type="text" class="form-control" id="rg" required name="rg" maxlength="12">
          </div>
          <div class="col-md-4 mb-3">
            <label for="dataNascimento" class="form-label">Data de Nascimento</label>
            <input type="date" class="form-control" id="dataNascimento" required name="dt_nascimento" max="{{ date('Y-m-d') }}">
          </div>
          <div class="col-md-4 mb-3">
            <label for="sexo" class="form-label">Sexo</label>
            <select class="form-select" id="sexo" required name="sexo">
              <option value="">Selecione</option>
              <option value="masculino">Masculino</option>
              <option value="feminino">Feminino</option>
              <option value="outro">Outro</option>
            </select>
          </div>
          <div class="col-md-4 mb-3">
            <label for="estadoCivil" class="form-label">Estado Civil</label>
            <select class="form-select" id="estadoCivil" required name="estado_civil">
              <option value="">Selecione</option>
              <option value="solteiro">Solteiro</option>
              <option value="casado">Casado</option>
              <option value="divorciado">Divorciado</option>
              <option value="viuvo">Viúvo</option>
            </select>
          </div>
        </div>
      </fieldset>

      <fieldset class="border p-3 mb-4">
        <legend class="w-auto px-2">Contato</legend>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="email" required name="email" maxlength="100">
          </div>
          <div class="col-md-3 mb-3">
            <label for="telefone" class="form-label">Telefone</label>
            <input type="tel" class="form-control" id="telefone" name="telefone" maxlength="14" placeholder="(00) 0000-0000">
          </div>
          <div class="col-md-3 mb-3">
            <label for="celular" class="form-label">Celular</label>
            <input type="tel" class="form-control" id="celular" name="celular" maxlength="15" placeholder="(00) 00000-0000">
          </div>
        </div>
      </fieldset>

      <fieldset class="border p-3 mb-4">
        <legend class="w-auto px-2">Endereço</legend>
        <div class="row">
          <div class="col-md-3 mb-3">
            <label for="cep" class="form-label">CEP</label>
            <input type="text" class="form-control" id="cep" name="cep" maxlength="9" placeholder="00000-000" required>
          </div>
          <div class="col-md-7 mb-3">
            <label for="logradouro" class="form-label">Logradouro</label>
            <input type="text" class="form-control" id="logradouro" name="logradouro" maxlength="100" required>
          </div>
          <div class="col-md-2 mb-3">
            <label for="numero" class="form-label">Número</label>
            <input type="text" class="form-control" id="numero" name="numero" maxlength="10" required>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 mb-3">
            <label for="bairro" class="form-label">Bairro</label>
            <input type="text" class="form-control" id="bairro" name="bairro" maxlength="50" required>
          </div>
          <div class="col-md-4 mb-3">
            <label for="cidade" class="form-label">Cidade</label>
            <input type="text" class="form-control" id="cidade" name="cidade" maxlength="50" required>
          </div>
          <div class="col-md-4 mb-3">
            <label for="uf" class="form-label">UF</label>
            <select name="uf" class="form-select" id="uf" required>
              <option value="">Carregando UFs...</option>
            </select>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 mb-3">
            <label for="complemento" class="form-label">Complemento</label>
            <input type="text" class="form-control" id="complemento" name="complemento" maxlength="100">
          </div>
        </div>
      </fieldset>

      <fieldset class="border p-3 mb-4">
        <legend class="w-auto px-2">Dados de Acesso</legend>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="login" class="form-label">Login</label>
            <input type="text" class="form-control" id="login" required name="login" maxlength="50">
          </div>
          <div class="col-md-6 mb-3">
            <label for="senha" class="form-label">Senha</label>
            <input type="password" class="form-control" id="senha" required name="senha" maxlength="50">
          </div>
          <div class="col-md-6 mb-3">
            <label for="confirmarSenha" class="form-label">Confirmar Senha</label>
            <input type="password" class="form-control" id="confirmarSenha" required name="senha_confirmation" maxlength="50">
          </div>
          <div class="col-md-6 mb-3">
            <label for="tipo_usuario" class="form-label">Perfil de Acesso</label>
            <select class="form-select" id="tipo_usuario" required name="tipo_usuario">
              <option value="">Selecione</option>
              <option value="1">Administrador</option>
              <option value="2">Gerente</option>
              <option value="3">Usuário</option>
              <option value="4">Médico</option>
            </select>
          </div>
        </div>
      </fieldset>

      <fieldset class="border p-3 mb-4" id="crmSection" style="display:none;">
        <legend class="w-auto px-2">Cadastrar CRM</legend>
        <div class="row align-items-end">
          <div class="col-md-6 mb-3">
            <label for="crmNumero" class="form-label">Número CRM</label>
            <input type="text" class="form-control" id="crmNumero" maxlength="15" placeholder="Ex: 12345" />
          </div>
          <div class="col-md-4 mb-3">
            <label for="crmUf" class="form-label">UF CRM</label>
            <select class="form-select" id="crmUf">
              <option value="">Carregando UFs...</option>
            </select>
          </div>
          <div class="col-md-2 mb-3">
            <button type="button" class="btn btn-primary" id="addCrmBtn">Adicionar</button>
          </div>
        </div>
        <ul class="list-group" id="crmList"></ul>
        <div id="hiddenCrmInputs"></div>
      </fieldset>

      <fieldset class="border p-3 mb-4">
        <legend class="w-auto px-2">Outros</legend>
        <div class="row">
          <div class="col-md-4 mb-3">
            <label for="status" class="form-label">Status</label>
            <select class="form-select" id="status" required name="status">
              <option value="ativo">Ativo</option>
              <option value="inativo">Inativo</option>
            </select>
          </div>
          <div class="col-md-8 mb-3">
            <label for="obs" class="form-label">Observações</label>
            <textarea class="form-control" id="obs" name="obs" rows="2"></textarea>
          </div>
        </div>
      </fieldset>

      <div class="mb-3">
        <button type="submit" class="btn btn-success">Salvar</button>
      </div>
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <script>
    $(document).ready(function() {
      // Carrega as UFs nos selects de UF e CRM
      let estados = ['AC', 'AL', 'AP', 'AM', 'BA', 'CE', 'DF', 'ES', 'GO', 'MA', 'MT', 'MS', 'MG', 'PA', 'PB', 'PR', 'PE', 'PI', 'RJ', 'RN', 'RS', 'RO', 'RR', 'SC', 'SP', 'SE', 'TO'];

      function preencherUFs() {
        let options = '<option value="">Selecione</option>';
        estados.forEach(function(uf) {
          options += `<option value="${uf}">${uf}</option>`;
        });
        $('#uf').html(options);
        $('#crmUf').html(options);
      }

      preencherUFs();

      // Mostra/oculta seção CRM conforme tipo usuário
      $('#tipo_usuario').on('change', function() {
        if ($(this).val() == '4') { // Médico
          $('#crmSection').show();
        } else {
          $('#crmSection').hide();
          $('#crmList').empty();
          $('#hiddenCrmInputs').empty();
        }
      });

      // Função para adicionar CRM
      $('#addCrmBtn').on('click', function() {
        let numero = $('#crmNumero').val().trim();
        let uf = $('#crmUf').val();

        if (!numero) {
          alert('Informe o número do CRM.');
          return;
        }
        if (!uf) {
          alert('Informe a UF do CRM.');
          return;
        }

        // Adiciona CRM na lista visível
        let li = `<li class="list-group-item d-flex justify-content-between align-items-center">
          ${numero} - ${uf}
          <button type="button" class="btn btn-danger btn-sm btnRemoveCrm">Remover</button>
        </li>`;

        $('#crmList').append(li);

        // Adiciona inputs ocultos para envio no formulário
        $('#hiddenCrmInputs').append(`
          <input type="hidden" name="crms[][numero]" value="${numero}">
          <input type="hidden" name="crms[][uf]" value="${uf}">
        `);

        // Limpa os campos
        $('#crmNumero').val('');
        $('#crmUf').val('');
      });

      // Remove CRM da lista e dos inputs ocultos
      $('#crmList').on('click', '.btnRemoveCrm', function() {
        let index = $(this).parent().index();
        $(this).parent().remove();

        // Remove os inputs ocultos correspondentes
        let inputs = $('#hiddenCrmInputs input');
        inputs.eq(index * 2).remove();     // remove numero
        inputs.eq(index * 2).remove();     // remove uf
      });

      // Máscara CPF
      $('#cpf').on('input', function() {
        let v = this.value.replace(/\D/g, '');
        v = v.replace(/(\d{3})(\d)/, '$1.$2');
        v = v.replace(/(\d{3})(\d)/, '$1.$2');
        v = v.replace(/(\d{3})(\d{1,2})$/, '$1-$2');
        this.value = v;
      });

      // Máscara telefone
      $('#telefone').on('input', function() {
        let v = this.value.replace(/\D/g, '');
        v = v.replace(/(\d{2})(\d)/, '($1) $2');
        v = v.replace(/(\d{4})(\d)/, '$1-$2');
        this.value = v;
      });

      // Máscara celular
      $('#celular').on('input', function() {
        let v = this.value.replace(/\D/g, '');
        v = v.replace(/(\d{2})(\d)/, '($1) $2');
        v = v.replace(/(\d{5})(\d)/, '$1-$2');
        this.value = v;
      });

      // ViaCEP API para preencher endereço
      $('#cep').on('blur', function() {
        let cep = $(this).val().replace(/\D/g, '');
        if (cep.length !== 8) return;

        $.getJSON(`https://viacep.com.br/ws/${cep}/json/`, function(data) {
          if (!data.erro) {
            $('#logradouro').val(data.logradouro);
            $('#bairro').val(data.bairro);
            $('#cidade').val(data.localidade);
            $('#uf').val(data.uf);
            $('#complemento').val(data.complemento);
          }
        });
      });
    });
  </script>
</x-layoutadm>

