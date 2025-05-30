<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Produtos - MadrePérola</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Fonte Bitter do Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Bitter:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Bitter', serif;
        }

        .carousel-item img {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        .text-center p, .text-center h5 {
            margin-left: auto;
            margin-right: auto;
            max-width: 600px;
        }

        .zoom-wrapper {
            position: relative;
            overflow: hidden;
            cursor: zoom-in;
        }

        .zoom-wrapper img {
            transition: transform 0.3s ease;
        }

        .zoom-wrapper:hover img {
            transform: scale(1.5);
        }
    </style>
</head>
<body>
<main>
<div class="d-flex align-items-center justify-content-center" style="min-height: calc(100vh - 120px);">
    <div class="container my-5">
        <h2 class="text-center mb-4">Conheça os nossos produtos!</h2>

        <div id="carouselProdutos" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ($produtos as $index => $produto)
                    <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                        <div class="text-center">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#modalProduto{{ $produto->id }}">
                                <img src="{{ asset('storage/' . $produto->imagem) }}" class="d-block w-50 mx-auto" alt="{{ $produto->nome }}" style="cursor: pointer;">
                            </a>
                            <h5 class="mt-3">{{ $produto->nome }}</h5>
                            <p>{{ $produto->descricao }}</p>
                            <p><strong>R$ {{ number_format($produto->preco, 2, ',', '.') }}</strong></p>
                        </div>
                    </div>
                @endforeach
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselProdutos" data-bs-slide="prev">
                <span class="d-flex justify-content-center align-items-center" style="width: 50px; height: 50px; background-color: rgba(0,0,0,0.4); border-radius: 50%; font-size: 30px; color: white;">‹</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselProdutos" data-bs-slide="next">
                <span class="d-flex justify-content-center align-items-center" style="width: 50px; height: 50px; background-color: rgba(0,0,0,0.4); border-radius: 50%; font-size: 30px; color: white;">›</span>
            </button>
        </div>
    </div>
</div>

{{-- Modais de cada produto --}}
@foreach ($produtos as $produto)
    <div class="modal fade" id="modalProduto{{ $produto->id }}" tabindex="-1" aria-labelledby="modalLabel{{ $produto->id }}" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title w-100 text-center" id="modalLabel{{ $produto->id }}">{{ $produto->nome }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body text-center">
                    <div class="zoom-wrapper d-inline-block">
                        <img src="{{ asset('storage/' . $produto->imagem) }}" class="img-fluid" alt="{{ $produto->nome }}">
                    </div>
                    <p class="mt-3">{{ $produto->descricao }}</p>
                    <p><strong>Preço: R$ {{ number_format($produto->preco, 2, ',', '.') }}</strong></p>
                </div>
            </div>
        </div>
    </div>
@endforeach

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</main>
</body>
</html>