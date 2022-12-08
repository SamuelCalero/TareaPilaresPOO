<?php 
    class Publicacion{
        protected $titulo;
        protected $precio;
        function __construct($titulo,$precio)
        {
            $this->titulo=$titulo;
            $this->precio=$precio;
        }
        public function getTitulo(){
            return $this->titulo;
        }
        public function setTitulo($value){
            $this->titulo=$value;
        }
        public function getPrecio(){
            return $this->precio;
        }
        public function setPrecio($value){
            $this->precio=$value;
        }
        function Imprimir(){
            print("El titulo es ".$this->getTitulo()."\nSu precio es de ".$this->getPrecio());
        }
    }
    
    

    class Libro extends Publicacion{
        private $numPaginas;
        function __construct($titulo,$precio,$numPaginas)
        {
            parent::__construct($titulo,$precio);
            $this->numPaginas=$numPaginas;
        }
        public function getNumPaginas(){
            return $this->numPaginas;
        }
        public function setNumPaginas($value){
            $this->numPaginas=$value;
        }
        function Imprimir(){
            print("El titulo es ".$this->getTitulo()."\nSu precio es de ".$this->getPrecio()."\nY el numero de paginas es ".$this->getNumPaginas());
        }
    }

    

    class Compact extends Publicacion{
        private $reprocMinutos;

        function __construct($titulo,$precio,$reprocMinutos){
            parent::__construct($titulo,$precio);
            $this->reprocMinutos=$reprocMinutos;
        }
        public function getReprocMinutos(){
            return $this->reprocMinutos;
        }
        public function setReprocMinutos($value){
            $this->reprocMinutos=$value;
        }
        function Imprimir(){
            print("El titulo es ".$this->getTitulo()."\nSu precio es de ".$this->getPrecio()."\nY los minutos de reproduccion son: ".$this->getReprocMinutos());
        }
    }
    print("\n***********************Publicacion***********************\n");
    $publicacion1 = new Publicacion("La ODISEA",55);
    $publicacion1->Imprimir();
    print("\n***********************Libro***********************\n");
    $libro1 = new Libro("Harry Potter",50,1000);
    $libro1->Imprimir();
    print("\n***********************Compacto***********************\n");
    $compact1= new Compact("OnePiece",10,60);
    $compact1->Imprimir();
?>