<x-layoutadm>
    <div class="main-content" id="especialidade">
        <h1>Detalhes da Especialidade Médica</h1>

        <fieldset class="border p-3 mb-4">
            <legend class="w-auto px-2">Informações da Especialidade</legend>
            <div class="row">
                <div class="col-md-8 mb-3">
                    <label class="form-label"><strong>Nome da Especialidade:</strong></label>
                    <p class="form-control-plaintext">{{ $especialidade->nome }}</p>
                </div>

                <div class="col-md-4 mb-3">
                    <label class="form-label"><strong>Código:</strong></label>
                    <p class="form-control-plaintext">{{ $especialidade->codigo }}</p>
                </div>

                <div class="col-md-12 mb-3">
                    <label class="form-label"><strong>Descrição:</strong></label>
                    <p class="form-control-plaintext">{{ $especialidade->descricao }}</p>
                </div>
            </div>
        </fieldset>

        <fieldset class="border p-3 mb-4">
            <legend class="w-auto px-2">Configurações</legend>
            <div class="row">
                <div class="col-md-4 mb-3">
                    <label class="form-label"><strong>Status:</strong></label>
                    <p class="form-control-plaintext">{{ ucfirst($especialidade->status) }}</p>
                </div>

                <div class="col-md-8 mb-3">
                    <label class="form-label"><strong>Observações:</strong></label>
                    <p class="form-control-plaintext">{{ $especialidade->observacoes }}</p>
                </div>
            </div>
        </fieldset>

        <div class="d-flex justify-content-end">
            <a href="{{ route('visualizarEspecialidades.index') }}" class="btn btn-secondary me-2">Voltar</a>
            <a href="{{ route('especialidades.edit', $especialidade->id) }}" class="btn btn-sm btn-warning">Editar</a>
        </div>
    </div>
</x-layoutadm>
