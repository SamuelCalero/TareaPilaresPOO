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
        public $posicion;

        function __construct($nombre,$apellido,$edad,$posicion)
        {
            parent::__construct($nombre,$apellido,$edad);
            $this->posicion = $posicion;
        }
        function Entrevista(){
            print("\nDare una entrevista");
        }
    }

    class DirectorTecnico extends Seleccion{
        public $esquema;

        function __construct($nombre,$apellido,$edad,$esquema)
        {
            parent::__construct($nombre,$apellido,$edad);
            $this->esquema = $esquema;
        }
        function Entrevista(){
            print("\nDare una entrevista");
        }
    }

    class Medico extends Seleccion{
        public $titulo;

        function __construct($nombre,$apellido,$edad,$titulo)
        {
            parent::__construct($nombre,$apellido,$edad);
            $this->titulo = $titulo;
        }

        function Atender($jugador){
            print("\nAtendere al jugador: ".$jugador);
        }
    }
    echo "----------------------------Seleccion----------------------------";
    $seleccion1 = new Seleccion("Glenda","Guerra",20);
    $seleccion1->PartidoFutbol(21);
    echo "\n----------------------------Jugador----------------------------";
    $jugador1 = new Jugadores("Samuel","Calero",22,"Delantero");
    $jugador1->Viajar("Dinamarca");
    $jugador1->Entrevista();
    echo "\n----------------------------Director----------------------------";
    $director = new DirectorTecnico("Jairo","Vega",30,"4-2-3-1");
    $director->Entrevista();
    echo "\n----------------------------Medico----------------------------";
    $medico = new Medico("Juan","Alberto",35,"Cirujano");
    $medico->Atender("Samuel");


?>