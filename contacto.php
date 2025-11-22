<?php
// contacto.php
include 'config.php';

$errores = [];
$mensajeExito = "";

// Procesar el formulario si se envió
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre  = trim($_POST['nombre'] ?? '');
    $correo  = trim($_POST['correo'] ?? '');
    $mensaje = trim($_POST['mensaje'] ?? '');

    // Validación servidor
    if ($nombre === '') {
        $errores[] = "El nombre es obligatorio.";
    }

    if ($correo === '') {
        $errores[] = "El correo es obligatorio.";
    } elseif (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        $errores[] = "El formato del correo no es válido.";
    }

    if ($mensaje === '') {
        $errores[] = "El mensaje no puede estar vacío.";
    }

    // Si no hay errores, guardar en BD
    if (empty($errores)) {
        $sql = "INSERT INTO contactos (nombre, correo, mensaje) VALUES (?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);

        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "sss", $nombre, $correo, $mensaje);
            if (mysqli_stmt_execute($stmt)) {
                $mensajeExito = "✅ Tu mensaje se envió y se guardó correctamente. ¡Gracias por contactarme!";
            } else {
                $errores[] = "Ocurrió un error al guardar los datos. Inténtalo nuevamente.";
            }
            mysqli_stmt_close($stmt);
        } else {
            $errores[] = "No se pudo preparar la consulta a la base de datos.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contacto - Christian Vera Rodríguez</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<header class="header">
    <div class="container">
        <div class="logo">
            <span>CVR</span>
        </div>
        <nav class="nav">
            <a href="index.php">Inicio</a>
            <a href="contacto.php" class="activo">Contacto</a>
        </nav>
    </div>
</header>

<main>
    <section class="seccion">
        <div class="container">
            <h1>Contacto</h1>
            <p>
                Completa el siguiente formulario para enviarme un mensaje. 
                Responderé en la medida de lo posible según mi disponibilidad profesional.
            </p>

            <!-- Mensajes de error -->
            <?php if (!empty($errores)): ?>
                <div class="alerta alerta-error">
                    <ul>
                        <?php foreach ($errores as $error): ?>
                            <li><?php echo htmlspecialchars($error); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>

            <!-- Mensaje de éxito -->
            <?php if ($mensajeExito !== ""): ?>
                <div class="alerta alerta-exito">
                    <?php echo htmlspecialchars($mensajeExito); ?>
                </div>
            <?php endif; ?>

            <form class="formulario" action="contacto.php" method="POST" novalidate>
                <div class="campo">
                    <label for="nombre">Nombre completo</label>
                    <input 
                        type="text" 
                        id="nombre" 
                        name="nombre" 
                        required 
                        placeholder="Escribe tu nombre"
                        value="<?php echo isset($nombre) ? htmlspecialchars($nombre) : ''; ?>">
                </div>

                <div class="campo">
                    <label for="correo">Correo electrónico</label>
                    <input 
                        type="email" 
                        id="correo" 
                        name="correo" 
                        required 
                        placeholder="tucorreo@ejemplo.com"
                        value="<?php echo isset($correo) ? htmlspecialchars($correo) : ''; ?>">
                </div>

                <div class="campo">
                    <label for="mensaje">Mensaje</label>
                    <textarea 
                        id="mensaje" 
                        name="mensaje" 
                        rows="5" 
                        required 
                        placeholder="Escribe tu mensaje aquí..."><?php echo isset($mensaje) ? htmlspecialchars($mensaje) : ''; ?></textarea>
                </div>

                <button type="submit" class="btn-principal">Enviar mensaje</button>
            </form>
        </div>
    </section>
</main>

<footer class="footer">
    <div class="container">
        <p>&copy; <?php echo date("Y"); ?> - Sitio personal de Christian Vera Rodríguez</p>
    </div>
</footer>
</body>
</html>
