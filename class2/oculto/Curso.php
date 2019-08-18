<?php
#interfaces ->interface->implements
interface Requerimiento
{
    public function asignaRequerimiento($par1);
    public function obtenerRequerimiento();
}

interface Conocimiento
{
    public function asignaConocimiento($par2);
    public function obtenerConocimiento();
}
class Curso implements Requerimiento, Conocimiento
{
    private $titulo2;
    private $profesor;
    private $duracion;
    private $costo2;
    private $disponible2;
    private $listado;
// add propiedad(atributo) static
public static $moneda='USD';
    #creando nuestro constructor
    public function __construct($tit, $profesor, $duracion, $costo, $disponible)
    {
        $this->titulo2 = $tit;
        $this->profesor = $profesor;
        $this->duracion = $duracion;
        $this->costo2 = $costo;
        $this->disponible2 = $disponible;
    }
    // destructor
    public function __destruct()
    {
        echo "Destruyendo".$this->titulo2.'<br>';
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
    #implementando los metodos de las interfaces
    public function asignaRequerimiento($par1)
    {
        $this->listado = $par1;
    }
    public function obtenerRequerimiento()
    {
        if (!empty($this->listado)) {
            foreach ($this->listado as $lista) {
                echo '<p>' . $lista . '<p>';
            }
        }
    }
    public function asignaConocimiento($para1)
    { }
    public function obtenerConocimiento()
    { }
    static function obtenerDenominacion(){
        return self::$moneda;
    }
}
