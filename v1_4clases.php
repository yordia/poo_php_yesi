<?php
class Curso
{
    public $nombre;
    public $duracion;
    public $costo;
    public $moneda;
    public $profesor;
    public $disponible;
    

    public function imprimirInfo()
    {
        return 'El nombre del curso es: <strong>' . $this->nombre . '</strong> y quien lo imparte es ' . $this->profesor . '<br>';
    }
    public function validarDisponibilidad()
    {
        if ($this->disponible) {
            return 'El curso esta disponible<br>';
        }
        return 'El curso no esta disponible<br>';
    }
}

$php = new Curso();
$php->nombre = 'Poo en php';
$php->duracion = '3 sesiones';
// $php->costo = 10;
$php->moneda = 'USD';
$php->profesor = 'Yesi Days';
$php->disponible = false;


$js = new Curso();
$js->nombre = 'Javascript';
$js->duracion = '6 sesiones';
$js->costo = 0;
$js->moneda = 'USD';
$js->profesor = 'Alvaro Felipe';
$js->disponible = true;

// echo $php->imprimirInfo();
// echo $js->imprimirInfo();
echo $php->validarDisponibilidad();
echo $js->validarDisponibilidad();

echo '<pre>';
var_dump($php);

echo '<pre>';

var_dump($js);

// echo '<pre>';
// print_r($objeto);
