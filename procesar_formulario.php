<?php
//Datos de conexion
$hot = 'localhost';
$db = 'formulario_contacto';
$user = 'root';
$pass = '';

//Conectar a la base de datos 
$conn = new mysqli($host, $user, $pass, $db)
if($conn->connect_error){
    die("Conexion Fallida: " . $conn->connect_error);
}

//Validar que los campos esten completados 
if (isset($_POST['nombre'], $_POST['apellido'], $_POST['telefono'], $_POST['email'], $_POST['contenido'])) {
    echo "Todos los campos son obligatorios";
    exit;
}

    // Validar que el campo "contenido" tenga al menos 10 caracteres
    if (strlen($contenido) < 10) {
        echo "El contenido debe tener al menos 10 caracteres.";
        exit;
    }

    // Preparar y ejecutar la consulta para insertar los datos
    $stmt = $conn->prepare("INSERT INTO Contactos (nombre, apellido, telefono, email, contenido) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $nombre, $apellido, $telefono, $email, $contenido);

    if ($stmt->execute()) {
        echo "Formulario enviado correctamente.";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Por favor completa todos los campos.";
}

// Cerrar la conexión
$conn->close();
?>
