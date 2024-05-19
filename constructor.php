<?php 

    class laptop{
        public $merk;
        public $procecor;
        public $memory;

        public function __construct($merk,$procecor,$memory){
            $this->merk = $merk;
            $this->procecor = $procecor;
            $this->memory = $memory;
        }

        

        public function desc(){
            return "Laptop $this->merk ini memiliki $this->procecor dan $this->memory";
        }

    }
    $lenovo = new laptop('Lenovo', 'i core i5 gen 7', '8GB');
    echo $lenovo->desc();

?>