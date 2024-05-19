<?php 
class mobil {
     
        private $merk;
        private $warna;

        public function setwarna($warna){
            $this->warna = $warna;
        } 
        public function getwarna(){
            echo $this->warna;
        }

        public function setMerk($merk){
            $this->merk = $merk;
        } 
        public function getMerk(){
            echo $this->merk;
        }
        public function HidupkanMesin(){
            echo "mobil dihidupkan";
        }
        public function berjalan(){
            echo "mobil sedang berjalan";
        }       
}

    $toyota = new mobil();
    $toyota->setMerk('Toyota');
    $toyota->setWarna('Hitam');
    $toyota->getMerk();
    $toyota->getWarna();
?>