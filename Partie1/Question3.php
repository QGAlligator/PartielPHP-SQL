<?php
    // A
    class Guerrier{

        public $niveau = 1;
        public $nom;
        public $age;
        public $force = 50;
        public $arme = "hache";

        public function __construct($Niv, $N ,$A, $F, $Ar)
        {
            $this->niveau = $Niv;
            $this->nom = $N;
            $this->age = $A;
            $this->force = $F;
            $this->arme = $Ar;
        }

        public function getNiveau(){
            return $this->niveau;
        }

        public function setNiveau($NewNiveau){
            $this->niveau = $NewNiveau;
        }

        public function getNom(){
            return $this->nom;
        }

        public function setNom($NewNom){
            $this->nom = $NewNom;
        }

        public function getAge(){
            return $this->age;
        }

        public function setAge($NewAge){
            return $this->age = $NewAge;
        }

        public function getForce(){
            return $this->force;
        }

        public function setForce($NewForce){
            $this->force = $NewForce;
        }   

        public function getInfo(){
            return $this->nom.' '.$this->age.' '.$this->force;
        }

        public function getArme(){
            return $this->arme;
        }

        public function setArme($NewArme){
            $this->arme = $NewArme;
        }

        public function get($Niv,$N,$A,$F,$Ar){
    		$this->getNiveau($Niv);
            $this->getNom($N);
    		$this->getAge($A);
    		$this->getForce($F);
            $this->getArme($Ar);
    	}

        public function set($Niv,$N,$A,$F,$Ar){
    		$this->setNiveau($Niv);
            $this->setNom($N);
    		$this->setAge($A);
    		$this->setForce($F);
            $this->setArme($Ar);
        }

        //B
        public function levelUp() {
            $NewNiveau = $this->age + 1;
            $this->setNiveau($NewNiveau);
            $NewForce = $this->force + 50;
            $this->setNiveau($NewForce); 
        }

        public function attaqueCoupDeHache() {
            $degat = $this->force * 1.5;
            $miss= rand(1,2);
            if ($miss == 1) {
                $degat = 0;
                echo "Attaque ratée";
            }
            else {
                echo "Attaque réussi : ".$degat."degat";
            }
        }
    }
    echo "Cette exercice est fait uniquement dans le code donc il n'y a rien sur le localhost";
?>