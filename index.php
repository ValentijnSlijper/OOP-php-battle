  <?php
  require "pokemon.php";
  require "pikachu.php";
  require "Charmeleon.php";
  require 'weakness.php';
  require 'Energytype.php';
  require 'resistance.php';

  $lightningType = new Energytype("Lightning",10);
  $fireType = new Energytype("Fire",1.5);
  $waterType = new Energytype("Water",2);
  $fightingType = new Energytype("Fighting",20);

  $pikachu = new Pikachu("Pikachu", $lightningType->getName(), 60, 60, [new Attack("Pika Punch", 20), new Attack("Electric Ring", 50)],
    new Weakness($fireType->getEneryTypeValue(), $fireType->getName()),
    new Resistance($fightingType->getEneryTypeValue(), $fightingType->getName()));

  $charmeleon = new Charmeleon("Charmeleon", $fireType->getName(), 60, 60, [new Attack("Headbutt", 10), new Attack("Flare", 30)],
  	 new Weakness($waterType->getEneryTypeValue(), $waterType->getName()),
  	 new Resistance($lightningType->getEneryTypeValue(), $lightningType->getName()));


    print_r('Pikachu: ' . $pikachu->getHealth() . '<br>');
    print_r('Charmeleon: ' . $charmeleon->getHealth() . '<br>');

    print_r('<br>');

    print_r($pikachu->getName()." attacks ". $charmeleon->getName()." with ". $pikachu->getAttack()[1]->getAttackName()."!". "<br>");
   	print_r("It did ". $pikachu->attack($charmeleon, 1)." damage!". "<br>");
    print_r('Charmeleon: ' . $charmeleon->getHealth() . ' HP <br>');


    print_r('<br>');

    print_r($charmeleon->getName()." attacks ". $pikachu->getName()." with ". $charmeleon->getAttack()[1]->getAttackName()."!". "<br>");
    print_r("It did ". $charmeleon->attack($pikachu, 1)." damage!". "<br>");
    print_r('Pikachu: ' . $pikachu->getHealth() . ' HP <br>');

    print_r('<br>');

    print_r("There are ". Pokemon::getPopulation(). " Pokemon alive");



?>
