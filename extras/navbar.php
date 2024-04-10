<?php
    // Contenido del Navbar
    $navbarContent = <<<HTML
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <!-- Título del Navbar -->
            <a class="navbar-brand" href="#">Desafio GF222473</a>

            <!-- Botón para cerrar sesión (colocado a la derecha) -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Regresar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    HTML;

    echo $navbarContent;
    ?>