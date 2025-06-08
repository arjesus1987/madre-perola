<x-layoutadm>
    <div class="main-content" id="especialidade">
        <h1>Cadastro de Especialidade Médica</h1>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form action="{{ route('cadastroespecialidade.store') }}" method="POST">
            @csrf

            <fieldset class="border p-3 mb-4">
                <legend class="w-auto px-2">Informações da Especialidade</legend>
                <div class="row">
                    <div class="col-md-8 mb-3">
                        <label for="nome" class="form-label">Nome da Especialidade</label>
                        <input type="text" name="nome" id="nome" class="form-control @error('nome') is-invalid @enderror" value="{{ old('nome') }}" required>
                        @error('nome')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-4 mb-3">
                        <div class="col-md-4 mb-3">
                          <label for="codigoEspecialidade" class="form-label">Código</label>
                          <input type="number" name="codigo" class="form-control" id="codigoEspecialidade" value="{{ old('codigo', $proximoCodigo) }}" readonly>
                        </div>
                        @error('codigo')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="descricao" class="form-label">Descrição</label>
                        <textarea name="descricao" id="descricao" rows="3" class="form-control @error('descricao') is-invalid @enderror" placeholder="Ex: Área médica especializada no tratamento de...">{{ old('descricao') }}</textarea>
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
                            <option value="ativo" {{ old('status') == 'ativo' ? 'selected' : '' }}>Ativa</option>
                            <option value="inativo" {{ old('status') == 'inativo' ? 'selected' : '' }}>Inativa</option>
                        </select>
                        @error('status')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-8 mb-3">
                        <label for="observacoes" class="form-label">Observações</label>
                        <textarea name="observacoes" id="observacoes" rows="2" class="form-control @error('observacoes') is-invalid @enderror">{{ old('observacoes') }}</textarea>
                        @error('observacoes')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </fieldset>

             <div class="d-flex justify-content-end">
                <button type="reset" class="btn btn-secondary me-2">Limpar</button>
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>

        </form>
    </div>
</x-layoutadm>
