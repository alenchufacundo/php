<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//definiendo clases

    abstract class Persona {
        protected $dni;
        protected $nombre;
        protected $edad;
        protected $nacionalidad;

        public function setNombre($nombre){$this->nombre = $nombre;}//set es setear valores en una funcion
        public function getNombre(){return $this -> nombre;} //get para poder usarlo en el programa por ejemplo en un echo.

        public function setDni($dni){$this->dni = $dni;}
        public function getDni(){return $this -> dni;}

        public function setEdad($edad){$this->edad = $edad;}
        public function getEdad(){return $this -> edad;}

        public function setNacionalidad($nacionalidad){$this->nacionalidad = $nacionalidad;}
        public function getNacionalidad(){return $this -> nacionalidad;}


        abstract public function imprimir ();
    }
    

//get y set abreviado

/*public function __get($propiedad) {
    return $this->$propiedad;
}

public function __set($propiedad, $valor) {
    $this->$propiedad = $valor;
    return $this;
}
*/

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

        public function __get($propiedad) {
            return $this->$propiedad;
        }
        
        public function __set($propiedad, $valor) {
            $this->$propiedad = $valor;
            return $this;}
        
        public function imprimir(){
            echo "Nombre: " . $this->nombre . "<br>";
            echo "Dni: " . $this->dni . "<br>";
            echo "Legajo: " . $this->legajo . "<br>";
            echo "Promedio: " . number_format($this->calcularPromedio(),2, ",", ".") . "<br><br>";
        }
        public function calcularPromedio(){
            return ($this-> notaPorfolio + $this-> notaPhp + $this-> notaProyecto) /3;
        }
    }

    class docente extends Persona {
        public $especialidad;
        const ESPECIALIDAD_WP = "Wordpress";
        const ESPECIALIDAD_ECO = "Economia aplicada";
        const ESPECIALIDAD_BBDD = "Base de datos";
    
        public function __set($propiedad, $valor) {
            $this->$propiedad = $valor;
            return $this;}

        public function imprimir (){
            echo "Nombre: " . $this->nombre . "<br/>";
            echo "Dni: " . $this->dni . "<br/>";
            echo "Especialidad: " . $this->especialidad . "<br><br>";
        }
        public function imprimirEspecialidadesHabilitadas(){}
    }


//programa, creacion de los objetos en relacion a las class que cree.

//objeto 1
$alumno1 = new Alumno ();
$alumno1 -> setnombre ("Juan Perez");
$alumno1 -> setDni ("30943987");
$alumno1 -> setEdad ("18");
echo "El alumno " . $alumno1->getNombre() . " tiene " . $alumno1->getEdad() . " años " . "<br>";
$alumno1 -> setNacionalidad ("Bolivia");
$alumno1 -> legajo = 800;
$alumno1 -> notaPorfolio = 8;
$alumno1 -> notaPhp = 9;
$alumno1 -> notaProyecto = 8.50;
$alumno1 -> imprimir();

//objeto 2
$alumno2 = new Alumno ();
echo "El alumno " . $alumno2->getNombre() . " tiene " . $alumno2->getEdad() . " años " . "<br>";
$alumno2 -> setnombre ("Micaela Ledesma");
$alumno2 -> setDni ("30943983");
$alumno2 -> setEdad ("20");
$alumno1 -> setNacionalidad ("Argentina");
$alumno2 -> legajo = 900;
$alumno2 -> notaPorfolio = 9;
$alumno2 -> notaPhp = 8;
$alumno2 -> notaProyecto = 9;
$alumno2 ->imprimir();

//objeto 3
$docente = new Docente ();
$docente-> setnombre ("Miguel Paz");
$docente-> setdni ("39877510");
$docente->especialidad = Docente::ESPECIALIDAD_BBDD;
$docente-> imprimir();

?>