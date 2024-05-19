<?php 

    class Kendaraan{
        public $penumpang;
        public $roda;

        public function __construct($penumpang, $roda){
            $this->penumpang = $penumpang;
            $this->roda = $roda;
        }

        public function desc(){
            return "Kendaraan roda $this->roda ini memiliki kursi $this->penumpang ";
        }


    }
    class Mobil extends Kendaraan{
        public $merk;
        public function __construct($penumpang, $roda, $merk){
            parent::__construct($penumpang, $roda);

            $this->merk = $merk;
        }
        public function desc(){
            return "Mobil $this->merk ini punya $this->roda roda, bisa menampung $this->penumpang orang";
        }


    }

    $Hyundai = new Mobil(4, 4, "Hyundai");

    $mitsubisi = new Mobil(6, 4, "Mitsubisi X pander");
    
    echo $Hyundai->desc();
    echo "<br>";
    echo $mitsubisi->desc();
?>