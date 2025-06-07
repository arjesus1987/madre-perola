<x-layoutadm>
    <div class="main-content" id="especialidade">
        <h1>Detalhes da Especialidade Médica</h1>

        <fieldset class="border p-3 mb-4">
            <legend class="w-auto px-2">Informações da Especialidade</legend>
            <div class="row">
                <div class="col-md-8 mb-3">
                    <label class="form-label">Nome da Especialidade</label>
                    <input type="text" class="form-control" value="{{ $especialidade->nome }}" readonly>
                </div>

                <div class="col-md-4 mb-3">
                    <label class="form-label">Código</label>
                    <input type="number" class="form-control" value="{{ $especialidade->codigo }}" readonly>
                </div>

                <div class="col-md-12 mb-3">
                    <label class="form-label">Descrição</label>
                    <textarea class="form-control" rows="3" readonly>{{ $especialidade->descricao }}</textarea>
                </div>
            </div>
        </fieldset>

        <fieldset class="border p-3 mb-4">
            <legend class="w-auto px-2">Configurações</legend>
            <div class="row">
                <div class="col-md-4 mb-3">
                    <label class="form-label">Status</label>
                    <input type="text" class="form-control" value="{{ ucfirst($especialidade->status) }}" readonly>
                </div>

                <div class="col-md-8 mb-3">
                    <label class="form-label">Observações</label>
                    <textarea class="form-control" rows="2" readonly>{{ $especialidade->observacoes }}</textarea>
                </div>
            </div>
        </fieldset>

        <div class="d-flex justify-content-end">
            <a href="{{ route('visualizarEspecialidades.index') }}" class="btn btn-secondary">Voltar</a>
        </div>
    </div>
</x-layoutadm>
