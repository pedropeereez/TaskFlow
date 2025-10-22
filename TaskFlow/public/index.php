<?php
// index.php
// Incluye header.php y footer.php para insertar su contenido en esta página.
// Asume que header.php y footer.php están en el mismo directorio que este archivo.

// Incluir header (usa require_once para fallar si no existe)
require_once __DIR__ . '/header.php';
?>

<main id="main-content">
    <!-- Contenido principal de la aplicación -->
    <h1>Bienvenido a TaskFlow</h1>
    <p>Aquí va el contenido principal de la página.</p>
    <!-- Puedes incluir más archivos o lógica PHP aquí -->
</main>

<?php
// Incluir footer
require_once __DIR__ . '/footer.php';
