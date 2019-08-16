<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<?php
define('inc', '/oculto/');
// echo '$devueve';
require_once __DIR__ . inc . 'Curso.php';
echo 'olassssssssssss';

$curso1 = new Curso('POO en php', 'Yesi Days', '3 sesiones', 10, true);
$curso2 = new Curso('Javascript 0', 'Alvaro Felipe', '6 sesiones', 11, true);

echo $curso1->obtenerTitulo();
echo '<br>';
echo $curso1->obtenerProfesor();
$curso1->asignarTitulo('Laravel');
echo $curso1->obtenerTitulo();

// imprimiendo metodo de la interfaz
$curso1->asignaRequerimiento(['PHP desde 0','Conocimiento basico PHP','ganas de aprender','Practica']);
$curso1->obtenerRequerimiento();
?>

<body>


</body>

</html>