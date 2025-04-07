<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evento ETech 2026</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">E-Tech</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="#inicio">Início</a></li>
                    <li class="nav-item"><a class="nav-link" href="#sobre">Sobre</a></li>
                    <li class="nav-item"><a class="nav-link" href="#palestrantes">Palestrantes</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contato">Contato</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="inicio" class="hero-section">
        <div class="container">
            <h1>Evento ETech 2026</h1>
            <p>O futuro da tecnologia está aqui!</p>
            <p>10-12 de Março de 2026 | Centro de Convenções, São Paulo</p>
        </div>
    </section>

    <!-- Sobre -->
    <section id="sobre" class="section">
        <div class="container">
            <h2>Sobre o Evento</h2>
            <div class="row">
                <div class="col-md-6">
                    <p>O ETech 2026 é o maior evento de tecnologia do Brasil, reunindo inovadores, empreendedores e entusiastas para explorar as tendências do futuro.</p>
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

    <!-- Palestrantes -->
    <section id="palestrantes" class="section bg-light">
        <div class="container">
            <h2>Palestrantes</h2>
            <div class="row">
                <?php
                $palestrantes = [
                    ["nome" => "Carla Mendes", "tema" => "Inteligência Artificial", "horario" => "10/03 - 14:00"],
                    ["nome" => "Rafael Souza", "tema" => "Desenvolvimento Web", "horario" => "11/03 - 10:00"],
                    ["nome" => "Beatriz Lima", "tema" => "Cibersegurança", "horario" => "12/03 - 15:00"]
                ];
                foreach ($palestrantes as $palestrante) {
                    echo '<div class="col-md-4 mb-4">';
                    echo '<div class="card">';
                    echo '<div class="card-body">';
                    echo '<h5 class="card-title">' . $palestrante['nome'] . '</h5>';
                    echo '<p class="card-text">Tema: ' . $palestrante['tema'] . '<br>Horário: ' . $palestrante['horario'] . '</p>';
                    echo '</div></div></div>';
                }
                ?>
            </div>
        </div>
    </section>

    <!-- Contato -->
    <section id="contato" class="section">
        <div class="container text-center">
            <h2>Contato</h2>
            <p>marketing@etech2026.com.br</p>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer bg-dark text-white text-center py-3">
        <div class="container">
            <p>&copy; 2026 ETech - Todos os direitos reservados</p>
            <p>Siga-nos: 
                <a href="#" class="text-white">Twitter</a> | 
                <a href="#" class="text-white">Instagram</a> | 
                <a href="#" class="text-white">LinkedIn</a>
            </p>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html>