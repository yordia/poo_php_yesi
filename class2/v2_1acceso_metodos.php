<?php
class Curso
{
    public $publico = 'publico : POO avanzado I';
    private $privado = 'Privado: POO avanzado I';
    protected $protegido = 'Privado: POO avanzado I'; #pendiente
     function obtenerPrivado(){
        return $this->privado;
     }
}
$prueba = new Curso();
echo '<p>' . $prueba->publico . '</p>';
// echo '<p>' . $prueba->privado . '</p>';

echo $prueba->obtenerPrivado();