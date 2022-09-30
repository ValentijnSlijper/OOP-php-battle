<?php
  // require 'weakness.php';
  // require 'energytype.php';
  require 'attack.php';
  // require 'resistance.php';

 class Pokemon{
      private $name;
      private $energyType;
      private $hitPoints;
      private $health;
      private $attack;
      private $weakness;
      private $resistance;
      private static $population = 0;

       public function __construct($name, $energyType, $hitPoints, $health, $attacks, $weakness, $resistance) {
                   $this->name = $name;
                   $this->energyType = $energyType;
                   $this->hitPoints = $hitPoints;
                   $this->health = $health;
                   $this->attacks = $attacks;
                   $this->weakness = $weakness;
                   $this->resistance = $resistance;
                   self::$population++;

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
    public function getHealth(){
    	return $this->health;
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
    public function setHealth($health){
      $this->health = $health;
    }

    public function attack($opponent, $attackIndex){
      $attack = $this->getAttack()[$attackIndex];
      // print_r($attack);
      $damage = $attack->getAttackDamage();
        // print_r($this->getType());
        // print_r('EnergyType: <br>');
        // print_r($this->energyType);
        // print_r('<br>');
        // print_r('Opponent: <br>');
        // print_r($opponent->getWeakness()->getWeaknessType());
        // print_r('<br>');

      if($this->energyType == $opponent->getWeakness()->getWeaknessType()){
        $damage = $damage * $opponent->getWeakness()->getWeaknessMultiplier();
        $this->takeDamage($damage, $opponent);
        return $damage;
      }
      if($this->energyType == $opponent->getResistance()->getResistanceType()){
        $damage = $damage - $opponent->getResistance()->getResistanceMultiplier();
        $this->takeDamage($damage, $opponent);
        return $damage;
      }
      print_r($opponent->getWeakness()->getWeaknessMultiplier());
      $opponent->takeDamage($damage);
    }


    public function takeDamage($damage, $opponent){
      $health = $opponent->getHealth() - $damage;
      if ($health <= 0) {
        $health = 0;
        self::$population--;
      }
      $opponent->setHealth($health);
      return $health;
    }
    public static function getPopulation(){
     return self::$population;
   }
}
