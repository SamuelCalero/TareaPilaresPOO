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
        public $cantPasajeros;
        function __construct($numeroSerieMotor,$marca,$año,$precio,$cantPasajeros)
        {
            parent::__construct($numeroSerieMotor,$marca,$año,$precio);
            $this->cantPasajeros = $cantPasajeros;
        }
        function Imprimir(){
            print("\nEl auto es de la marca: ".$this->marca."\nEl numero de serie del motor es: ".$this->numeroSerieMotor."\nEs del año: ".$this->año."\nY su precio es de $".$this->precio."\nSu cantidad para pasajeros es: ".$this->cantPasajeros);
        }
    }

    class AutosLujos extends Auto{
        public $cantPasajeros;
        public $extra;
        function __construct($numeroSerieMotor,$marca,$año,$precio,$cantPasajeros,$extra)
        {
            parent::__construct($numeroSerieMotor,$marca,$año,$precio);
            $this->cantPasajeros = $cantPasajeros;
            $this->extra = $extra;
        }
        function Imprimir(){
            print("\nEl auto es de la marca: ".$this->marca."\nEl numero de serie del motor es: ".$this->numeroSerieMotor."\nEs del año: ".$this->año."\nY su precio es de $".$this->precio."\nSu cantidad para pasajeros es: ".$this->cantPasajeros."\nY cuenta con ".$this->extra);
        }
    }

    class Camionetas extends Auto{
        public $kgsCarga;
        public $traccion;
        function __construct($numeroSerieMotor,$marca,$año,$precio,$kgsCarga,$traccion)
        {
            parent::__construct($numeroSerieMotor,$marca,$año,$precio);
            $this->kgsCarga=$kgsCarga;
            $this->traccion=$traccion;
            
        }
        function Imprimir(){
            print("\nEl auto es de la marca: ".$this->marca."\nEl numero de serie del motor es: ".$this->numeroSerieMotor."\nEs del año: ".$this->año."\nY su precio es de $".$this->precio."\nSu traccion es: ".$this->traccion."\nY la cantidad de Kgs que soporta es de ".$this->kgsCarga."Kgs");
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