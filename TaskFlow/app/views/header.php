<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <title><php echo $pageTitle; ?></title>
    </head>
    <body>
        <header>
            <h1>Bienvenido a <?php echo SITE_NAME;?></h1>
        </header>
        <main>
            <h2>Perfil de usuario</h2>
            <p><strong>Nombre:</strong> <?php echo $userName; ?></p>
            <p><strong>Edad:</strong> <?php echo $userAge; ?></p>
            <p><strong>Estado de la cuenta:</strong>Usuario<?php echo $isPremiunUser ? ' Premium' : ' Estándar'; ?></p>
        </main>
    </body>
</html>
