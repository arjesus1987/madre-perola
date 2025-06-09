<x-layoutadm>

<div class="container mt-4">
    <h2>Agendar Consulta</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <form method="POST" action="{{ route('consulta.agendar') }}">
        @csrf

        <input type="hidden" name="agenda_id" value="{{ $agenda->id ?? '' }}">

        <div class="mb-3">
            <label for="nome" class="form-label">Nome Completo</label>
            <input type="text" name="nome" id="nome" class="form-control" required value="{{ old('nome') }}">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" name="email" id="email" class="form-control" required value="{{ old('email') }}">
        </div>

        <div class="mb-3">
            <label for="telefone" class="form-label">Telefone</label>
            <input type="tel" name="telefone" id="telefone" class="form-control" required value="{{ old('telefone') }}">
        </div>

        <div class="mb-3">
            <label for="data_nascimento" class="form-label">Data de Nascimento</label>
            <input type="date" name="data_nascimento" id="data_nascimento" class="form-control" required value="{{ old('data_nascimento') }}">
        </div>

        <button type="submit" class="btn btn-primary">Confirmar Agendamento</button>
    </form>
</div>
</x-layoutadm>