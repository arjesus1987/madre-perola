<x-layoutadm>
  <div class="container my-5" id="editar-usuario">
    <h1 class="mb-4">Editar Usuário</h1>

    <form method="POST" action="{{ route('usuarios.update', $usuario->idUsuario) }}">
      @csrf
      @method('PUT')

      <fieldset class="border p-3 mb-4">
        <legend class="w-auto px-2">Dados Pessoais</legend>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="nome" class="form-label">Nome Completo</label>
            <input type="text" id="nome" name="nome" class="form-control" value="{{ old('nome', $usuario->nome) }}" required>
          </div>
          <div class="col-md-3 mb-3">
            <label for="cpf" class="form-label">CPF</label>
            <input type="text" id="cpf" name="cpf" class="form-control" value="{{ old('cpf', $usuario->cpf) }}" required>
          </div>
          <div class="col-md-3 mb-3">
            <label for="rg" class="form-label">RG</label>
            <input type="text" id="rg" name="rg" class="form-control" value="{{ old('rg', $usuario->rg) }}">
          </div>
          <div class="col-md-4 mb-3">
            <label for="dt_nascimento" class="form-label">Data de Nascimento</label>
            <input type="date" id="dt_nascimento" name="dt_nascimento" class="form-control" value="{{ old('dt_nascimento', $usuario->dt_nascimento) }}">
          </div>
          <div class="col-md-4 mb-3">
            <label for="sexo" class="form-label">Sexo</label>
            <select id="sexo" name="sexo" class="form-select">
              <option value="masculino" {{ old('sexo', $usuario->sexo) == 'masculino' ? 'selected' : '' }}>Masculino</option>
              <option value="feminino" {{ old('sexo', $usuario->sexo) == 'feminino' ? 'selected' : '' }}>Feminino</option>
              <option value="outro" {{ old('sexo', $usuario->sexo) == 'outro' ? 'selected' : '' }}>Outro</option>
            </select>
          </div>
          <div class="col-md-4 mb-3">
            <label for="estado_civil" class="form-label">Estado Civil</label>
            <select id="estado_civil" name="estado_civil" class="form-select">
              @php
                $estadosCivis = ['solteiro', 'casado', 'divorciado', 'viuvo'];
              @endphp
              @foreach($estadosCivis as $estado)
                <option value="{{ $estado }}" {{ old('estado_civil', $usuario->estado_civil) == $estado ? 'selected' : '' }}>
                  {{ ucfirst($estado) }}
                </option>
              @endforeach
            </select>
          </div>
        </div>
      </fieldset>

      <fieldset class="border p-3 mb-4">
        <legend class="w-auto px-2">Contato</legend>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" id="email" name="email" class="form-control" value="{{ old('email', $usuario->email) }}" required>
          </div>
          <div class="col-md-3 mb-3">
            <label for="telefone" class="form-label">Telefone</label>
            <input type="text" id="telefone" name="telefone" class="form-control" value="{{ old('telefone', $usuario->telefone) }}">
          </div>
          <div class="col-md-3 mb-3">
            <label for="celular" class="form-label">Celular</label>
            <input type="text" id="celular" name="celular" class="form-control" value="{{ old('celular', $usuario->celular) }}">
          </div>
        </div>
      </fieldset>

      <fieldset class="border p-3 mb-4">
        <legend class="w-auto px-2">Endereço</legend>
        <div class="row">
          <div class="col-md-3 mb-3">
            <label for="cep" class="form-label">CEP</label>
            <input type="text" id="cep" name="cep" class="form-control" value="{{ old('cep', $usuario->cep) }}">
          </div>
          <div class="col-md-7 mb-3">
            <label for="logradouro" class="form-label">Logradouro</label>
            <input type="text" id="logradouro" name="logradouro" class="form-control" value="{{ old('logradouro', $usuario->logradouro) }}">
          </div>
          <div class="col-md-2 mb-3">
            <label for="numero" class="form-label">Número</label>
            <input type="text" id="numero" name="numero" class="form-control" value="{{ old('numero', $usuario->numero) }}">
          </div>
          <div class="col-md-4 mb-3">
            <label for="bairro" class="form-label">Bairro</label>
            <input type="text" id="bairro" name="bairro" class="form-control" value="{{ old('bairro', $usuario->bairro) }}">
          </div>
          <div class="col-md-4 mb-3">
            <label for="cidade" class="form-label">Cidade</label>
            <input type="text" id="cidade" name="cidade" class="form-control" value="{{ old('cidade', $usuario->cidade) }}">
          </div>
          <div class="col-md-4 mb-3">
            <label for="uf" class="form-label">UF</label>
            <input type="text" id="uf" name="uf" class="form-control" value="{{ old('uf', $usuario->uf) }}">
          </div>
          <div class="col-md-12 mb-3">
            <label for="complemento" class="form-label">Complemento</label>
            <input type="text" id="complemento" name="complemento" class="form-control" value="{{ old('complemento', $usuario->complemento) }}">
          </div>
        </div>
      </fieldset>

      <fieldset class="border p-3 mb-4">
        <legend class="w-auto px-2">Dados de Acesso</legend>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="login" class="form-label">Login</label>
            <input type="text" id="login" name="login" class="form-control" value="{{ old('login', $usuario->login) }}" required>
          </div>
          <div class="col-md-6 mb-3">
            <label for="tipo_usuario" class="form-label">Perfil de Acesso</label>
            <select id="tipo_usuario" name="tipo_usuario" class="form-select" required>
              @php
                $perfis = ['1' => 'Administrador', '2' => 'Gerente', '3' => 'Usuário', '4' => 'Médico'];
              @endphp
              @foreach ($perfis as $key => $label)
                <option value="{{ $key }}" {{ old('tipo_usuario', $usuario->tipo_usuario) == $key ? 'selected' : '' }}>{{ $label }}</option>
              @endforeach
            </select>
          </div>
        </div>
      </fieldset>

     @php
  $ufs = [
    'AC', 'AL', 'AP', 'AM', 'BA', 'CE', 'DF', 'ES', 'GO',
    'MA', 'MT', 'MS', 'MG', 'PA', 'PB', 'PR', 'PE', 'PI',
    'RJ', 'RN', 'RS', 'RO', 'RR', 'SC', 'SP', 'SE', 'TO'
  ];
@endphp

@if ($usuario->tipo_usuario == 4)
<fieldset class="border p-3 mb-4">
  <legend class="w-auto px-2">CRMs</legend>

  <div id="crms-container">
    @foreach($usuario->medico as $index => $crm)
    <div class="row mb-2 crm-row">
      <div class="col-md-6">
        <label for="crms[{{ $index }}][crm]" class="form-label">Número do CRM</label>
        <input type="text" name="crms[{{ $index }}][crm]" class="form-control" value="{{ old("crms.$index.crm", $crm->crm) }}">
      </div>
      <div class="col-md-4">
        <label for="crms[{{ $index }}][uf]" class="form-label">UF</label>
        <select name="crms[{{ $index }}][uf]" class="form-select">
          @foreach($ufs as $uf)
            <option value="{{ $uf }}" {{ old("crms.$index.uf", $crm->uf) == $uf ? 'selected' : '' }}>{{ $uf }}</option>
          @endforeach
        </select>
      </div>
      <div class="col-md-2 d-flex align-items-end">
        <button type="button" class="btn btn-danger remove-crm-btn">Remover</button>
      </div>
    </div>
    @endforeach
  </div>

  <button type="button" id="add-crm-btn" class="btn btn-primary mt-2">Adicionar CRM</button>
</fieldset>
@endif


      <fieldset class="border p-3 mb-4">
        <legend class="w-auto px-2">Outros</legend>
        <div class="row">
          <div class="col-md-4 mb-3">
            <label for="status" class="form-label">Status</label>
            <select id="status" name="status" class="form-select">
              <option value="ativo" {{ old('status', $usuario->status) == 'ativo' ? 'selected' : '' }}>Ativo</option>
              <option value="inativo" {{ old('status', $usuario->status) == 'inativo' ? 'selected' : '' }}>Inativo</option>
            </select>
          </div>
          <div class="col-md-8 mb-3">
            <label for="obs" class="form-label">Observações</label>
            <textarea id="obs" name="obs" class="form-control" rows="3">{{ old('obs', $usuario->obs) }}</textarea>
          </div>
        </div>
      </fieldset>

      <div class="d-flex justify-content-end mt-4">
        <a href="{{ route('detalharUsuarios.show', $usuario->idUsuario) }}" class="btn btn-secondary me-2">Voltar</a>
        <button type="submit" class="btn btn-primary">Salvar Alterações</button>
      </div>
    </form>
  </div>

 <script>
  document.addEventListener('DOMContentLoaded', function () {
    const container = document.getElementById('crms-container');
    const addBtn = document.getElementById('add-crm-btn');

    const estados = @json($ufs);

    if (addBtn) {
      addBtn.addEventListener('click', () => {
        const index = container.querySelectorAll('.crm-row').length;
        const ufOptions = estados.map(uf => `<option value="${uf}">${uf}</option>`).join('');

        const newRow = document.createElement('div');
        newRow.classList.add('row', 'mb-2', 'crm-row');
        newRow.innerHTML = `
          <div class="col-md-6">
            <label class="form-label">Número do CRM</label>
            <input type="text" name="crms[${index}][crm]" class="form-control" />
          </div>
          <div class="col-md-4">
            <label class="form-label">UF</label>
            <select name="crms[${index}][uf]" class="form-select">
              ${ufOptions}
            </select>
          </div>
          <div class="col-md-2 d-flex align-items-end">
            <button type="button" class="btn btn-danger remove-crm-btn">Remover</button>
          </div>
        `;
        container.appendChild(newRow);
      });

      container.addEventListener('click', function(e) {
        if (e.target.classList.contains('remove-crm-btn')) {
          e.target.closest('.crm-row').remove();
        }
      });
    }
  });
</script>

</x-layoutadm>
