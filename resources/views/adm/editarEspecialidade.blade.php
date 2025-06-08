<x-layoutadm>
    <div class="main-content" id="especialidade">
        <h1>Editar Especialidade Médica</h1>

         

        <form action="{{ route('especialidades.update', $especialidade->id) }}" method="POST">
            @csrf
            @method('PUT')

            <fieldset class="border p-3 mb-4">
                <legend class="w-auto px-2">Informações da Especialidade</legend>
                <div class="row">
                    <div class="col-md-8 mb-3">
                        <label for="nome" class="form-label">Nome da Especialidade</label>
                        <input type="text" name="nome" id="nome" class="form-control @error('nome') is-invalid @enderror" value="{{ old('nome', $especialidade->nome) }}" required>
                        @error('nome')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="codigo" class="form-label">Código</label>
                        <input type="number" name="codigo" class="form-control" id="codigo" value="{{ $especialidade->codigo }}" readonly>
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="descricao" class="form-label">Descrição</label>
                        <textarea name="descricao" id="descricao" rows="3" class="form-control @error('descricao') is-invalid @enderror">{{ old('descricao', $especialidade->descricao) }}</textarea>
                        @error('descricao')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </fieldset>

            <fieldset class="border p-3 mb-4">
                <legend class="w-auto px-2">Configurações</legend>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select name="status" id="status" class="form-select @error('status') is-invalid @enderror" required>
                            <option value="ativo" {{ old('status', $especialidade->status) == 'ativo' ? 'selected' : '' }}>Ativa</option>
                            <option value="inativo" {{ old('status', $especialidade->status) == 'inativo' ? 'selected' : '' }}>Inativa</option>
                        </select>
                        @error('status')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-8 mb-3">
                        <label for="observacoes" class="form-label">Observações</label>
                        <textarea name="observacoes" id="observacoes" rows="2" class="form-control @error('observacoes') is-invalid @enderror">{{ old('observacoes', $especialidade->observacoes) }}</textarea>
                        @error('observacoes')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </fieldset>

            <div class="d-flex justify-content-end">
                <a href="{{ route('visualizarEspecialidades.index') }}" class="btn btn-secondary me-2">Cancelar</a>
                <button type="submit" class="btn btn-primary">Salvar Alterações</button>
            </div>
        </form>
    </div>
</x-layoutadm>
