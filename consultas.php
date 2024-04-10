
<?php

class consultas {
    private $conexion;

    // Constructor para inicializar la conexión a la base de datos
    public function __construct($host, $usuario, $contrasena, $base_de_datos) {
        $this->conexion = new mysqli($host, $usuario, $contrasena, $base_de_datos);
        if ($this->conexion->connect_error) {
            die("Error de conexión: " . $this->conexion->connect_error);
        }
    }

    public function ejecutarConsulta($consulta) {
        $resultado = $this->conexion->query($consulta);
        
        if ($resultado === false) {
            return "Error al ejecutar la consulta: " . $this->conexion->error . " (Código de error: " . $this->conexion->errno . ")";
        } else {
            $tipoConsulta = strtoupper(substr(trim($consulta), 0, 6)); // Identificar el tipo de consulta
            
            switch ($tipoConsulta) {
                case 'SELECT':
                    if ($resultado->num_rows > 0) {
                        $datos = array();
    
                        // Obtener los nombres de las columnas
                        $nombres_columnas = array();
                        while ($info_columna = $resultado->fetch_field()) {
                            $nombres_columnas[] = $info_columna->name;
                        }
                        $datos['columnas'] = $nombres_columnas;
    
                        // Obtener los datos de las filas
                        $filas = array();
                        while ($fila = $resultado->fetch_assoc()) {
                            $filas[] = $fila;
                        }
                        $datos['filas'] = $filas;
    
                        return $datos;
                    } else {
                        return "La consulta no devolvió ningún resultado.";
                    }
                    break;
                    
                case 'INSERT':
                    if ($resultado == true) {
                        return true;
                    } else {
                        return "Error al ejecutar la consulta INSERT: " . $this->conexion->error . " (Código de error: " . $this->conexion->errno . ")";
                    }
                    break;
                    
                case 'UPDATE':
                    if ($resultado == true) {
                        return true;
                    } else {
                        return "Error al ejecutar la consulta UPDATE: " . $this->conexion->error . " (Código de error: " . $this->conexion->errno . ")";
                    }
                    break;
                    
                case 'DELETE':
                    if ($resultado == true) {
                        return true;
                    } else {
                        return "Error al ejecutar la consulta DELETE: " . $this->conexion->error . " (Código de error: " . $this->conexion->errno . ")";
                    }
                    break;
                    
                default:
                    return "Consulta ejecutada correctamente.";
                    break;
            }
        }
    }
    
    
    
    public function __destruct() {
        $this->conexion->close();
    }
}

?>

