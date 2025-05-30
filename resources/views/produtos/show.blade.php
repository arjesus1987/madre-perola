@extends('layouts.app')

@section('title', $produto->nome)

@section('content')
<div class="container my-5" style="max-width: 800px;">
    <h1 class="mb-4 text-primary">{{ $produto->nome }}</h1>

    @if($produto->imagem)
        <img src="{{ asset('storage/' . $produto->imagem) }}" 
             alt="Imagem do produto {{ $produto->nome }}" 
             class="img-fluid rounded mb-4" style="max-height: 400px; object-fit: cover;">
    @endif

    <p><strong>Descrição:</strong> {{ $produto->descricao ?? 'Sem descrição.' }}</p>

    @if($produto->preco)
        <p><strong>Preço:</strong> R$ {{ number_format($produto->preco, 2, ',', '.') }}</p>
    @endif

    <a href="{{ route('produtos.index') }}" class="btn btn-primary mt-3">
        ← Voltar ao catálogo
    </a>
</div>
@endsection
