<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Administração de Farmácia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>

<body class="d-flex flex-column min-vh-100">

    <header>
        <nav class="navbar navbar-expand-lg bg-success text-white">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('img/logo_farmacia.png') }}" alt="Logo da Farmácia" height="40">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('clientes.index') }}">Clientes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('produtos.index') }}">Produtos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('vendas.index') }}">Vendas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('servicos.index') }}">Serviços</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="flex-fill">
        <section>
            <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/farmacia1.jpg" class="d-block w-100" alt="Imagem de farmácia">
                        <div class="carousel-caption d-none d-md-block">
                            <h1>Cuide da sua saúde com a nossa farmácia</h1>
                            <p>Oferecemos medicamentos e serviços para garantir seu bem-estar.</p>
                            <p><a class="btn btn-lg btn-primary" href="{{ route('produtos.index') }}">Ver Produtos</a></p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('img/farmacia2.jpg') }}" class="d-block w-100" alt="Imagem de farmácia">
                        <div class="carousel-caption d-none d-md-block">
                            <h1>Serviços de saúde de qualidade</h1>
                            <p>Consultas e serviços especializados para sua saúde.</p>
                            <p><a class="btn btn-lg btn-primary" href="{{ route('servicos.index') }}">Ver Serviços</a></p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('img/farmacia3.jpg') }}" class="d-block w-100" alt="Imagem de farmácia">
                        <div class="carousel-caption d-none d-md-block">
                            <h1>Conheça nossos clientes</h1>
                            <p>Saiba mais sobre suas ações</p>
                            <p><a class="btn btn-lg btn-primary" href="{{ route('clientes.index') }}">Clientes</a></p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
    </main>

    <footer class="bg-success text-white text-center py-3 mt-auto">
        <p class="mb-0">Farmácia XYZ© 2024 - Todos os direitos reservados</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>
