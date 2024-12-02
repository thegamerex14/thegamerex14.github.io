<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';

    // Validar campos
    if (!empty($name) && !empty($email) && !empty($message)) {
        echo "Mensaje enviado correctamente. Gracias, $name.";
    } else {
        echo "Por favor, completa todos los campos.";
    }
}
?>
