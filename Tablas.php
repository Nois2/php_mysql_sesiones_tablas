<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta Web</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2>Consulta Web</h2>
        <div class="row mt-4">
            <div class="col">
                <form method="POST">
                    <div class="mb-3">
                        <label for="consultaweb" class="form-label">Consulta SQL</label>
                        <input type="text" class="form-control" id="consultaweb" name="consultaweb" placeholder="Introduce tu consulta SQL aquí">
                    </div>
                    <button type="submit" class="btn btn-primary">Ejecutar Consulta</button>
                </form>
            </div>
        </div>

        <?php
        require('consultas.php');
        // Verificar si se ha enviado el formulario
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Verificar si se ha enviado la consulta y no está vacía
            if (isset($_POST["consultaweb"]) && !empty($_POST["consultaweb"])) {
                $consulta = $_POST["consultaweb"];

                // Validar la longitud de la consulta
                if (strlen(trim($consulta)) < 5) {
                    echo "La consulta debe tener al menos 5 caracteres.";
                } else {
                    // Incluir el archivo de consultas
                    require_once('consultas.php');

                    // Crear una instancia de la clase consultas
                    $instancia = new consultas('localhost', 'root', '', 'Desafio2DSS');

                    // Ejecutar la consulta y obtener el resultado
                    $resultado = $instancia->ejecutarConsulta($consulta);

                    // Verificar si la consulta fue exitosa o no
                    if (is_array($resultado) && array_key_exists('columnas', $resultado) && array_key_exists('filas', $resultado)) {
                        // Mostrar la tabla con los resultados
                        echo '<div class="row mt-4">';
                        echo '<div class="col">';
                        echo '<h3>Resultados de la Consulta</h3>';
                        echo '<table class="table">';
                        echo '<thead>';
                        echo '<tr>';
                        foreach ($resultado['columnas'] as $columna) {
                            echo '<th>' . $columna . '</th>';
                        }
                        echo '</tr>';
                        echo '</thead>';
                        echo '<tbody>';
                        foreach ($resultado['filas'] as $fila) {
                            echo '<tr>';
                            foreach ($fila as $valor) {
                                echo '<td>' . $valor . '</td>';
                            }
                            echo '</tr>';
                        }
                        echo '</tbody>';
                        echo '</table>';
                        echo '</div>';
                        echo '</div>';
                    } elseif ($resultado === true) {
                        // Mostrar mensaje de éxito si la consulta fue exitosa (DELETE, INSERT, UPDATE)
                        echo '<div class="row mt-4">';
                        echo '<div class="col">';
                        echo '<div class="alert alert-success" role="alert">';
                        echo 'La consulta se ejecutó con éxito.';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    } else {
                        // Mostrar un mensaje de error si la consulta falla
                        echo '<div class="row mt-4">';
                        echo '<div class="col">';
                        echo '<div class="alert alert-danger" role="alert">';
                        echo 'Error al ejecutar la consulta.';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                }
            } else {
                // Mostrar un mensaje si la consulta está vacía
                echo "Por favor ingrese una consulta.";
            }
        }
        ?>

    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/Tablas.js"></script>
</body>

</html>