<?php

require_once __DIR__ . '/header.php';

// Declaración de tareas
tasks = [
    [
        'title' => 'Comprar leche',
        'completed' => false,
        'priority' => 'alta',
    ],
    [
        'title' => 'Enviar informe semanal',
        'completed' => true,
        'priority' => 'media',
    ],
    [
        'title' => 'Llamar al proveedor',
        'completed' => false,
        'priority' => 'baja',
    ],
    [
        'title' => 'Revisar código',
        'completed' => true,
        'priority' => 'alta',
    ],
    [
        'title' => 'Planificar reunión',
        'completed' => false,
        'priority' => 'media',
    ],
];
?>

<main id="main-content">
   
    <h1>Bienvenido a TaskFlow</h1>
    <p>Aquí va el contenido principal de la página.</p>
  
</main>

<?php

require_once __DIR__ . '/footer.php';
