<x-layoutadm>
   
   <div class="main-content" id="especialidade">
  <h1>Cadastro de Especialidade Médica</h1>
  <form>
    <fieldset class="border p-3 mb-4">
      <legend class="w-auto px-2">Informações da Especialidade</legend>
      <div class="row">
        <div class="col-md-8 mb-3">
          <label for="nomeEspecialidade" class="form-label">Nome da Especialidade</label>
          <input type="text" class="form-control" id="nomeEspecialidade" required>
        </div>
        <div class="col-md-4 mb-3">
          <label for="codigoEspecialidade" class="form-label">Código</label>
          <input type="text" class="form-control" id="codigoEspecialidade">
        </div>
        <div class="col-md-12 mb-3">
          <label for="descricao" class="form-label">Descrição</label>
          <textarea class="form-control" id="descricao" rows="3" placeholder="Ex: Área médica especializada no tratamento de..."></textarea>
        </div>
      </div>
    </fieldset>

    <fieldset class="border p-3 mb-4">
      <legend class="w-auto px-2">Configurações</legend>
      <div class="row">
        <div class="col-md-4 mb-3">
          <label for="statusEspecialidade" class="form-label">Status</label>
          <select class="form-select" id="statusEspecialidade">
            <option value="ativo">Ativa</option>
            <option value="inativo">Inativa</option>
          </select>
        </div>
        <div class="col-md-8 mb-3">
          <label for="observacoes" class="form-label">Observações</label>
          <textarea class="form-control" id="observacoes" rows="2"></textarea>
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
