<?php 
    class Seleccion{
        public $nombre;
        public $apellido;
        public $edad;
        function __construct($nombre,$apellido,$edad)
        {
            $this->nombre = $nombre;
            $this->apellido = $apellido;
            $this->edad = $edad;
        }

        function Viajar($lugar){
            print("\nViajamos todos juntos a ".$lugar);
        }

        function PartidoFutbol($dia){
            print("\nTenemos Partido el dia ".$dia);
        }
    }

    class Jugadores extends Seleccion{
        private $posicion;

        function __construct($nombre,$apellido,$edad,$posicion)
        {
            parent::__construct($nombre,$apellido,$edad);
            $this->posicion = $posicion;
        }
        public function getPosicion(){
            return $this->posicion;
        }
        public function setPosicion($value){
            $this->posicion=$value;
        }
        function Entrevista(){
            print("\nDare una entrevista");
        }
    }

    class DirectorTecnico extends Seleccion{
        private $esquema;

        function __construct($nombre,$apellido,$edad,$esquema)
        {
            parent::__construct($nombre,$apellido,$edad);
            $this->esquema = $esquema;
        }
        public function getEsquema(){
            return $this->esquema;
        }
        public function setEsquema($value){
            $this->esquema=$value;
        }
        function Entrevista(){
            print("\nDare una entrevista");
        }
    }

    class Medico extends Seleccion{
        private $titulo;

        function __construct($nombre,$apellido,$edad,$titulo)
        {
            parent::__construct($nombre,$apellido,$edad);
            $this->titulo = $titulo;
        }
        public function getTitulo(){
            return $this->titulo;
        }
        public function setTitulo($value){
            $this->titulo=$value;
        }
        function Atender($jugador){
            print("\nAtendere al jugador: ".$jugador);
        }
    }
    echo "----------------------------Seleccion----------------------------";
    $seleccion1 = new Seleccion("Glenda","Guerra",20);
    print("\n".$seleccion1->nombre);
    print("\n".$seleccion1->apellido);
    print("\n".$seleccion1->edad);
    $seleccion1->PartidoFutbol(21);
    echo "\n----------------------------Jugador----------------------------";
    $jugador1 = new Jugadores("Samuel","Calero",22,"Delantero");
    print("\nJuego de ".$jugador1->getPosicion());
    $jugador1->Viajar("Dinamarca");
    $jugador1->Entrevista();
    echo "\n----------------------------Director----------------------------";
    $director = new DirectorTecnico("Jairo","Vega",30,"4-2-3-1");
    print("\nNuestro esquema es ".$director->getEsquema());
    $director->Entrevista();
    echo "\n----------------------------Medico----------------------------";
    $medico = new Medico("Juan","Alberto",35,"Cirujano");
    print("\nTengo un titulo en ".$medico->getTitulo());
    $medico->Atender("Samuel");


?>