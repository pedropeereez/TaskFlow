<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?php echo $pageTitle; ?></title>

    <style>
     
        .task-item {
            padding: 10px 12px;
            margin: 6px 0;
            list-style: none;
            border-radius: 4px;
            background: #fff;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0 1px 2px rgba(0,0,0,0.04);
            font-family: Arial, sans-serif;
        }

   
        .task-item.completed {
            opacity: 0.6;
            text-decoration: line-through;
        }


        .task-item.priority-alta {
            border-left: 6px solid #e74c3c; /* rojo */
            background: #fff5f5;
        }
        .task-item.priority-media {
            border-left: 6px solid #f39c12; /* naranja */
            background: #fffaf0;
        }
        .task-item.priority-baja {
            border-left: 6px solid #27ae60; /* verde */
            background: #f6fff7;
        }

        /* Ajustes responsivos / accesibilidad simples */
        .task-item .title {
            flex: 1;
            margin-right: 8px;
            word-break: break-word;
        }
    </style>
</head>
<body>
    <header>
        <h1>Bienvenido a <?php echo SITE_NAME;?></h1>
    </header>
    <main>
