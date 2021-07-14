<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//definiendo clases

    class Persona {
        public $dni;
        public $nombre;
        public $edad;
        public $nacionalidad;

        public function imprimir (){}
    }
    
    class Alumno extends Persona {
        public $legajo;
        public $notaPorfolio;
        public $notaPhp;
        public $notaProyecto;
        public function __contruct(){ //aca por defecto se determina que las notas se inician en 0.
            $this -> notaPorfolio = 0.0; //el this es para acceder a las propiedad definida anteriormente y darle un valor.
            $this -> notaPhp = 0.0;
            $this -> notaProyecto = 0.0;
        }
        public function imprimir(){
            echo "Nombre: " . $this->nombre . "<br>";
            echo "Dni: " . $this->dni . "<br>";
            echo "Legajo: " . $this->legajo . "<br>";
            echo "Promedio: " . number_format($this->calcularPromedio(),2, ",", ".") . "<br>";
        }
        public function calcularPromedio(){
            return ($this-> notaPorfolio + $this-> notaPhp + $this-> notaProyecto) /3;
        }
    }

    class docente extends Persona {
        public $especialidad;
        public function imprimir (){}
        public function imprimirEspecialidadesHabilitadas(){}
    }


//programa, creacion de los objetos en relacion a las class que cree.

$alumno1 = new Alumno();
$alumno1 -> nombre = "Juan Perez";
$alumno1 -> legajo = 800;
$alumno1 -> notaPorfolio = 8;
$alumno1 -> notaPhp = 9;
$alumno1 -> notaProyecto = 8.50;
$alumno1 -> imprimir();


$alumno2 = new Alumnogi;
$alumno2 -> nombre = "Micaela Ledesma";
$alumno2 -> legajo = 900;
$alumno2 -> notaPorfolio = 9;
$alumno2 -> notaPhp = 8;
$alumno2 -> notaProyecto = 9;
$alumno2 ->imprimir();

?>