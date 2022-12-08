<?php 
    class Auto{
        public $numeroSerieMotor;
        public $marca;
        public $año;
        public $precio;
        function __construct($numeroSerieMotor,$marca,$año,$precio)
        {
            $this->numeroSerieMotor = $numeroSerieMotor;
            $this->marca= $marca;
            $this->año = $año;
            $this->precio=$precio;
        }

        function Imprimir(){
            print("\nEl auto es de la marca: ".$this->marca."\nEl numero de serie del motor es: ".$this->numeroSerieMotor."\nEs del año: ".$this->año."\nY su precio es de $".$this->precio);
        }
    }

    class Compactos extends Auto{
        protected $cantPasajeros;
        function __construct($numeroSerieMotor,$marca,$año,$precio,$cantPasajeros)
        {
            parent::__construct($numeroSerieMotor,$marca,$año,$precio);
            $this->cantPasajeros = $cantPasajeros;
        }
        public function getCantPasajeros(){
            return $this->cantPasajeros;
        }
        public function setCantPasajeros($value){
            $this->cantPasajeros=$value;
        }
        function Imprimir(){
            print("\nEl auto es de la marca: ".$this->marca."\nEl numero de serie del motor es: ".$this->numeroSerieMotor."\nEs del año: ".$this->año."\nY su precio es de $".$this->precio."\nSu cantidad para pasajeros es: ".$this->getCantPasajeros());
        }
    }

    class AutosLujos extends Auto{
        protected $cantPasajeros;
        protected $extra;
        function __construct($numeroSerieMotor,$marca,$año,$precio,$cantPasajeros,$extra)
        {
            parent::__construct($numeroSerieMotor,$marca,$año,$precio);
            $this->cantPasajeros = $cantPasajeros;
            $this->extra = $extra;
        }
        public function getCantPasajeros(){
            return $this->cantPasajeros;
        }
        public function setCantPasajeros($value){
            $this->cantPasajeros=$value;
        }
        public function getExtra(){
            return $this->extra;
        }
        public function setExtra($value){
            $this->extra=$value;
        }
        function Imprimir(){
            print("\nEl auto es de la marca: ".$this->marca."\nEl numero de serie del motor es: ".$this->numeroSerieMotor."\nEs del año: ".$this->año."\nY su precio es de $".$this->precio."\nSu cantidad para pasajeros es: ".$this->getCantPasajeros()."\nY cuenta con ".$this->getExtra());
        }
    }

    class Camionetas extends Auto{
        protected $kgsCarga;
        protected $traccion;
        function __construct($numeroSerieMotor,$marca,$año,$precio,$kgsCarga,$traccion)
        {
            parent::__construct($numeroSerieMotor,$marca,$año,$precio);
            $this->kgsCarga=$kgsCarga;
            $this->traccion=$traccion;
            
        }
        public function getKgsCarga(){
            return $this->kgsCarga;
        }
        public function setKgsCarga($value){
            $this->kgsCarga=$value;
        }
        public function getTraccion(){
            return $this->traccion;
        }
        public function setTraccion($value){
            $this->traccion=$value;
        }
        function Imprimir(){
            print("\nEl auto es de la marca: ".$this->marca."\nEl numero de serie del motor es: ".$this->numeroSerieMotor."\nEs del año: ".$this->año."\nY su precio es de $".$this->precio."\nSu traccion es: ".$this->getTraccion()."\nY la cantidad de Kgs que soporta es de ".$this->getKgsCarga()."Kgs");
        }
    }
    echo "----------------------------Autos----------------------------";
    $auto= new Auto(545879,"Nissan",2006,3000);
    $auto->Imprimir();
    echo "\n----------------------------Compactos----------------------------";
    $compacto = new Compactos(5045684,"Mazda",1995,30000,2);
    $compacto->Imprimir();
    echo "\n----------------------------Lujosos----------------------------";
    $autoLujo = new AutosLujos(54546,"Ferrari",2021,150000,2,"turbo y nitro");
    $autoLujo->Imprimir();
    echo "\n----------------------------Camionetas----------------------------";
    $camioneta = new Camionetas(6654,"BMW",2022,60000,1000,"4X4");
    $camioneta->Imprimir();
?>