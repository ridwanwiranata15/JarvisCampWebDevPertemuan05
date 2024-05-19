<?php 
    class Hero{
        public $nama;
        public $attack;
        public $hp;

        public function __construct($nama, $attack, $hp){
            $this->nama = $nama;
            $this->attack = $attack;
            $this->hp = $hp;
        }

        public function skil($nama){
            echo "$nama menggunakan skil";
        }
    }

    class Mage extends Hero{
        public $mana;
        public $magic_attack;

        public function __construct($nama, $attack, $hp, $mana, $magic_attack){
            parent::__construct($nama, $attack, $hp);
            $this->mana = $mana;
            $this->magic_attack = $magic_attack;
        }

        public function skill(){
            echo "$this->nama menggunakan magic skil";
        }


    }

    $kagura = new Mage("kagura", 0, 32000, 100, 400);
    echo $kagura->nama;
    echo "<br/>";
    $kagura->skill();
?>