<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Aplicación</title>
    <!-- Agrega los enlaces a los archivos CSS de Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
 <?php
 include('extras/navbar.php')
 ?>
    <!-- Tarjetas para las funciones -->
    <div class="container mt-4">
        <div class="row">
            <!-- Tarjeta para ver tablas -->
            <div class="col-md-4">
                <div class="card bg-primary text-white">
                    <div class="card-body">
                        <h5 class="card-title">Ver Tablas</h5>
                        <p class="card-text">Explora nuestras tablas de datos.</p>
                        <a href="Tablas.php" class="btn btn-light">Ir a Tablas</a>
                    </div>
                </div>
            </div>

            <!-- Tarjeta para ver historial -->
            <div class="col-md-4">
                <div class="card bg-success text-white">
                    <div class="card-body">
                        <h5 class="card-title">Ver Historial</h5>
                        <p class="card-text">Consulta el historial de actividades.</p>
                        <a href="#" class="btn btn-light">Ir a Historial</a>
                    </div>
                </div>
            </div>

            <!-- Tarjeta para consultas -->
            <div class="col-md-4">
                <div class="card bg-info text-white">
                    <div class="card-body">
                        <h5 class="card-title">Consultas</h5>
                        <p class="card-text">Realiza consultas específicas.</p>
                        <a href="#" class="btn btn-light">Ir a Consultas</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
   

    <!-- Agrega los enlaces a los archivos JS de Bootstrap (jQuery y Popper.js) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>
