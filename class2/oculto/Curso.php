<?php
#interfaces ->interface->implements
interface Requerimiento{
    public function asignaRequerimiento($listado){

    }
    public function obtenerRequerimiento(){

    }
}

interface Conocimiento{
    public function asignaConocimiento($listado){

    }
    public function obtenerConocimiento(){
        
    }
}
class Curso implements Requerimiento,Conocimiento
{
    private $titulo2;
    private $profesor;
    private $duracion;
    private $costo2;
    private $disponible2;

    #creando nuestro constructor
    public function __construct($tit, $profesor, $duracion, $costo, $disponible)
    {
        $this->titulo2 = $tit;
        $this->profesor = $profesor;
        $this->duracion = $duracion;
        $this->costo2 = $costo;
        $this->disponible2 = $disponible;
    }
    // geter
    public  function obtenerTitulo()
    {
        return $this->titulo2;
    }
    public function obtenerProfesor()
    {
        return $this->profesor;
    }
    // seter
    public function asignarTitulo($par)
    {
        $this->titulo2 = $par;
    }
}
