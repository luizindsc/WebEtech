<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evento ETech 2026</title>
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- CSS Personalizado -->

</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="/img/logo-etech.png" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#inicio">Início</a></li>
                    <li class="nav-item"><a class="nav-link" href="#sobre">Sobre</a></li>
                    <li class="nav-item"><a class="nav-link" href="#palestrantes">Palestrantes</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contato">Contato</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="inicio" class="hero-section text-center">
        <div class="container">
            <h1 class="display-4">Evento ETech 2026</h1>
            <p class="lead">O futuro da tecnologia está aqui!</p>
            <p>10-12 de Março de 2026 | Centro de Convenções, São Paulo</p>
        </div>
    </section>

    <!-- Sobre -->
    <section id="sobre" class="section">
        <div class="container">
            <h2 class="text-center mb-4">Sobre o Evento</h2>
            <div class="row">
                <div class="col-md-6">
                    <p>O ETech 2026 é o maior evento de tecnologia do Brasil, reunindo inovadores, 
                    empreendedores e entusiastas para explorar as tendências do futuro.</p>
                </div>
                <div class="col-md-6">
                    <ul>
                        <li>Workshops interativos</li>
                        <li>Palestras inspiradoras</li>
                        <li>Networking com líderes da indústria</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Palestrantes (com PHP) -->
    <section id="palestrantes" class="section bg-light">
        <div class="container">
            <h2 class="text-center mb-4">Palestrantes</h2>
            <div class="row">
                <?php
                $palestrantes = [
                    ["nome" => "Ana Silva", "tema" => "Inteligência Artificial", "horario" => "10/03 - 14:00"],
                    ["nome" => "João Pedro", "tema" => "Desenvolvimento Web", "horario" => "11/03 - 10:00"],
                    ["nome" => "Maria Costa", "tema" => "Cibersegurança", "horario" => "12/03 - 15:00"]
                ];

                foreach ($palestrantes as $palestrante) {
                    echo '<div class="col-md-4 mb-4">';
                    echo '<div class="card">';
                    echo '<div class="card-body">';
                    echo '<h5 class="card-title">' . $palestrante['nome'] . '</h5>';
                    echo '<p class="card-text">Tema: ' . $palestrante['tema'] . '<br>';
                    echo 'Horário: ' . $palestrante['horario'] . '</p>';
                    echo '</div></div></div>';
                }
                ?>
            </div>
        </div>
    </section>

    <!-- Contato -->
    <section id="contato" class="section">
        <div class="container">
            <h2 class="text-center mb-4">Contato</h2>
            <p class="text-center">Entre em contato: contato@etech2026.com.br</p>
        </div>
    </section>


    <script src="script.js"></script>


</body>
</html>