<?php
  require "pokemon.php";
  require "pikachu.php";
  require 'weakness.php';
  require 'Energytype.php';
  require 'attack.php';
  require 'resistance.php';

      $lightningType = new Energytype("Lightning",10);
      $fireType = new Energytype("Fire",1.5);
      $waterType = new Energytype("Water",2);
      $fightingType = new Energytype("Fighting",20);

  $pikachu = new Pikachu("Pikachu", $lightningType->getName(), 60, 60, [new Attack("Pika Punch", 20), new Attack("Electric Ring", 50)],
      new Weakness($fireType->getEneryTypeValue(), $fireType->getName()),
      new Resistance($fightingType->getEneryTypeValue(), $fightingType->getName()));

print_r($pikachu);
?>
