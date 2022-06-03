<?php
  // require 'weakness.php';
  // require 'energytype.php';
  // require 'attack.php';
  // require 'resistance.php';

 class Pokemon{
      private $name;
      private $energyType;
      private $hitPoints;
      private $health;
      private $attack;
      private $weakness;
      private $resistance;

       public function __construct($name, $energyType, $hitPoints, $attacks, $weakness, $resistance) {
                   $this->name = $name;
                   $this->energyType = $energyType;
                   $this->hitPoints = $hitPoints;
                   $this->health = $hitPoints;
                   $this->attacks = $attacks;
                   $this->weakness = $weakness;
                   $this->resistance = $resistance;

               }

  public function getName(){
        return $this->name;
    }

    public function getType(){
    	return $this->energyType;
    }

    public function getHitpoints(){
    	return $this->hitPoints;
    }

    public function getAttack(){
    	return $this->attacks;
    }

    public function getWeakness(){
    	return $this->weakness;
    }

    public function getResistance(){
    	return $this->resistance;
    }
}
