<x-layoutadm>
  <div class="main-content" id="usuario">
    <h1>Visualização de Usuário</h1>
    {{-- @dd($usuario->medico) --}}
    <fieldset class="border p-3 mb-4">
      <legend class="w-auto px-2">Dados Pessoais</legend>
      <div class="row">
        <div class="col-md-6 mb-3">
          <strong>Nome Completo:</strong> {{ $usuario->nome }}
        </div>
        <div class="col-md-3 mb-3">
          <strong>CPF:</strong> {{ $usuario->cpf }}
        </div>
        <div class="col-md-3 mb-3">
          <strong>RG:</strong> {{ $usuario->rg }}
        </div>
        <div class="col-md-4 mb-3">
          <strong>Data de Nascimento:</strong> {{ $usuario->dt_nascimento }}
        </div>
        <div class="col-md-4 mb-3">
          <strong>Sexo:</strong> {{ ucfirst($usuario->sexo) }}
        </div>
        <div class="col-md-4 mb-3">
          <strong>Estado Civil:</strong> {{ ucfirst($usuario->estado_civil) }}
        </div>
      </div>
    </fieldset>

    <fieldset class="border p-3 mb-4">
      <legend class="w-auto px-2">Contato</legend>
      <div class="row">
        <div class="col-md-6 mb-3">
          <strong>E-mail:</strong> {{ $usuario->emails->email }}
        </div>
        <div class="col-md-3 mb-3">
          <strong>Telefone:</strong> {{ $usuario->telefones->telefone }}
        </div>
        <div class="col-md-3 mb-3">
          <strong>Celular:</strong> {{ $usuario->celular }}
        </div>
      </div>
    </fieldset>

    <fieldset class="border p-3 mb-4">
      <legend class="w-auto px-2">Endereço</legend>
      <div class="row">
        <div class="col-md-3 mb-3">
          <strong>CEP:</strong> {{ $usuario->enderecos->cep }}
        </div>
        <div class="col-md-7 mb-3">
          <strong>Logradouro:</strong> {{ $usuario->enderecos->logradouro }}
        </div>
        <div class="col-md-2 mb-3">
          <strong>Número:</strong> {{ $usuario->enderecos->numero }}
        </div>
        <div class="col-md-4 mb-3">
          <strong>Bairro:</strong> {{ $usuario->enderecos->bairro }}
        </div>
        <div class="col-md-4 mb-3">
          <strong>Cidade:</strong> {{ $usuario->enderecos->cidade }}
        </div>
        <div class="col-md-4 mb-3">
          <strong>UF:</strong> {{ $usuario->enderecos->uf }}
        </div>
        <div class="col-md-12 mb-3">
          <strong>Complemento:</strong> {{ $usuario->enderecos->complemento }}
        </div>
      </div>
    </fieldset>

    <fieldset class="border p-3 mb-4">
      <legend class="w-auto px-2">Dados de Acesso</legend>
      <div class="row">
        <div class="col-md-6 mb-3">
          <strong>Login:</strong> {{ $usuario->login }}
        </div>
        <div class="col-md-6 mb-3">
          <strong>Perfil de Acesso:</strong>
          @php
            $perfis = ['1' => 'Administrador', '2' => 'Gerente', '3' => 'Usuário', '4' => 'Médico'];
          @endphp
          {{ $perfis[$usuario->tipo_usuario] ?? 'Não definido' }}
        </div>
      </div>
    </fieldset>

@if ($usuario->tipo_usuario == 4 && isset($usuario->medico) && $usuario->medico->count() > 0)
  <fieldset class="border p-3 mb-4">
    <legend class="w-auto px-2">CRMs</legend>
    <ul class="list-group">
      @foreach ($usuario->medico as $crm)
        <li class="list-group-item">{{ $crm->crm }} - {{ $crm->uf }}</li>
      @endforeach
    </ul>
  </fieldset>
@endif



    <fieldset class="border p-3 mb-4">
      <legend class="w-auto px-2">Outros</legend>
      <div class="row">
        <div class="col-md-4 mb-3">
          <strong>Status:</strong> {{ ucfirst($usuario->status) }}
        </div>
        <div class="col-md-8 mb-3">
          <strong>Observações:</strong><br> {{ $usuario->obs }}
        </div>
      </div>
    </fieldset>

    <div class="mb-3 d-flex justify-content-end mt-4">
            <a href="{{ route('visualizarUsuarios.index') }}" class="btn btn-secondary me-2">Voltar</a>
            <a href="{{ route('usuarios.edit', $usuario->idUsuario) }}" class="btn btn-sm btn-warning me-2">Editar</a>
    </div>
  </div>
</x-layoutadm>
