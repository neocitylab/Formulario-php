<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $telefono = $_POST['phone'];
        $mensaje = $_POST['mensaje'];

        // Ruta del archivo de texto donde se guardarán los datos
        $archivo = 'contactos.txt';

        // Crear el contenido del registro
        $registro = "Nombre: $nombre\nEmail: $email\nTeléfono: $telefono\nMensaje: $mensaje\n\n";

        // Guardar el registro en el archivo de texto
        file_put_contents($archivo, $registro, FILE_APPEND | LOCK_EX);

        echo '¡Registro exitoso!';
    } else {
        echo 'Ocurrió un error al procesar el formulario.';
    }
?>