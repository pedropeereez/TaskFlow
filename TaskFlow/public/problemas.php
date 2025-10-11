<?php

// Problema 1.1: Perfil de Usuario
echo "<h3>Problema 1.1</h3>";
$nombre = "Carlos";
$apellidos = "López García";
$edad = 25;
$altura = 1.78;
$esEstudiante = true;
echo "$nombre<br>$apellidos<br>$edad<br>$altura<br>";
var_dump($esEstudiante);
echo "<hr>";

// Problema 1.2: Información de un Producto
echo "<h3>Problema 1.2</h3>";
$producto = "Auriculares";
$precio = 29.99;
$stock = 100;
$oferta = false;
echo "$producto<br>$precio<br>$stock<br>";
var_dump($oferta);
echo "<hr>";

// Problema 1.3: Constantes de la Aplicación
echo "<h3>Problema 1.3</h3>";
define("NOMBRE_SITIO", "Mi Tienda Online");
define("VERSION_APP", 1.0);
echo NOMBRE_SITIO . "<br>" . VERSION_APP . "<hr>";


// Problema 2.1: Calculadora Básica
echo "<h3>Problema 2.1</h3>";
$num1 = 10;
$num2 = 5;
echo ($num1 + $num2) . "<br>";
echo ($num1 - $num2) . "<br>";
echo ($num1 * $num2) . "<br>";
echo ($num1 / $num2) . "<hr>";

// Problema 2.2: Actualización de Stock
echo "<h3>Problema 2.2</h3>";
$stock = 100;
$stock -= 25;
echo "Stock tras venta: $stock<br>";
$stock += 50;
echo "Stock tras pedido: $stock<hr>";

// Problema 2.3: Concatenación de Textos
echo "<h3>Problema 2.3</h3>";
$nombre = "Oskar";
$apellido = "Calvo";
$curso = "Desarrollo Web en Entorno Servidor";
$frase = "El profesor $nombre $apellido imparte el curso de $curso.";
echo $frase . "<hr>";

// Problema 2.4: Comparaciones Simples
echo "<h3>Problema 2.4</h3>";
$edad = 20;
$edadMinima = 18;
var_dump($edad >= $edadMinima);
echo "<br>";
$contraseñaGuardada = "1234";
$contraseñaUsuario = "123";
var_dump($contraseñaGuardada === $contraseñaUsuario);
echo "<hr>";

// Problema 2.5: ¿Par o Impar?
echo "<h3>Problema 2.5</h3>";
$numero = 7;
if ($numero % 2 == 0) echo "El número $numero es par";
else echo "El número $numero es impar";
echo "<hr>";



// Problema 3.1: Control de Acceso
echo "<h3>Problema 3.1</h3>";
$edad = 17;
if ($edad >= 18) echo "Puedes pasar";
else echo "No puedes pasar";
echo "<hr>";

// Problema 3.2: Calificación de Examen
echo "<h3>Problema 3.2</h3>";
$nota = 7.5;
if ($nota >= 9) echo "Sobresaliente";
elseif ($nota >= 7) echo "Notable";
elseif ($nota >= 5) echo "Aprobado";
else echo "Suspenso";
echo "<hr>";

// Problema 3.3: Menú del Día con switch
echo "<h3>Problema 3.3</h3>";
$diaSemana = "lunes";
switch ($diaSemana) {
    case "lunes": echo "Lentejas"; break;
    case "miércoles": echo "Paella"; break;
    case "viernes": echo "Pescado al horno"; break;
    default: echo "Hoy no hay menú especial";
}
echo "<hr>";

// Problema 3.4: Verificación de Usuario Avanzada
echo "<h3>Problema 3.4</h3>";
$rolUsuario = "admin";
$usuarioActivo = true;
if ($rolUsuario === "admin" && $usuarioActivo) echo "Acceso concedido";
else echo "Acceso denegado";
echo "<hr>";


// Problema 4.1: Tabla de Multiplicar del 7
echo "<h3>Problema 4.1</h3>";
for ($i = 1; $i <= 10; $i++) echo "7 x $i = " . (7 * $i) . "<br>";
echo "<hr>";

// Problema 4.2: Cuenta Atrás para Año Nuevo
echo "<h3>Problema 4.2</h3>";
$i = 10;
while ($i > 0) {
    echo "$i<br>";
    $i--;
}
echo "¡Feliz Año Nuevo!<hr>";

// Problema 4.3: Recorrer Nombres
echo "<h3>Problema 4.3</h3>";
$alumnos = ["Ana", "Juan", "Pedro", "Sofía"];
foreach ($alumnos as $alumno) echo "Hola, $alumno<br>";
echo "<hr>";

// Problema 4.4: Listado de Productos
echo "<h3>Problema 4.4</h3>";
$productos = [
    ["nombre" => "Teclado", "precio" => 50],
    ["nombre" => "Ratón", "precio" => 25],
    ["nombre" => "Monitor", "precio" => 200]
];
foreach ($productos as $p) echo "Producto: {$p['nombre']}, Precio: {$p['precio']} €<br>";
echo "<hr>";


// Problema 5.1: Ficha de Usuario
echo "<h3>Problema 5.1</h3>";
$usuario = [
    "nombre" => "Carlos",
    "edad" => 25,
    "email" => "carlos@mail.com",
    "estudiante" => true
];
echo $usuario["nombre"] . "<br>" . $usuario["edad"] . "<br>" . $usuario["email"] . "<br>";
var_dump($usuario["estudiante"]);
echo "<hr>";

// Problema 5.2: Filtrado de Notas
echo "<h3>Problema 5.2</h3>";
$notas = [8.5, 4.2, 7.0, 9.8, 5.5, 3.9];
foreach ($notas as $n) if ($n >= 5) echo "Aprobado: $n<br>";
echo "<hr>";

// Problema 5.3: Lista de la Compra Avanzada
echo "<h3>Problema 5.3</h3>";
$listaCompra = [
    "Frutas" => ["Manzanas", "Plátanos", "Naranjas"],
    "Lácteos" => ["Leche", "Queso"],
    "Limpieza" => ["Detergente", "Lejía"]
];
foreach ($listaCompra as $categoria => $items) {
    echo "<b>$categoria:</b><br>";
    foreach ($items as $item) echo "- $item<br>";
}
echo "<hr>";

// Problema 5.4: Calculando el Total del Carrito
echo "<h3>Problema 5.4</h3>";
$total = 0;
foreach ($productos as $p) $total += $p["precio"];
echo "Total del carrito: $total €<hr>";
?>