<?php 
    class Publicacion{
        public $titulo;
        public $precio;
        function __construct($titulo,$precio)
        {
            $this->titulo=$titulo;
            $this->precio=$precio;
        }
    }
    
    $publicacion1 = new Publicacion("La ODISEA",55);
    print($publicacion1->titulo);

    class Libro extends Publicacion{
        public $numPaginas;
        function __construct($titulo,$precio,$numPaginas)
        {
            parent::__construct($titulo,$precio);
            $this->numPaginas=$numPaginas;
        }
    }

    $libro1 = new Libro("Harry Potter",50,1000);
    print("\n".$libro1->numPaginas);

    class Compact extends Publicacion{
        public $reprocMinutos;

        function __construct($titulo,$precio,$reprocMinutos){
            parent::__construct($titulo,$precio);
            $this->reprocMinutos=$reprocMinutos;
        }
    }

    $compact1= new Compact("OnePiece",10,60);
    print("\n".$compact1->reprocMinutos);
?>