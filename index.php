  <?php
    require "pokemon.php";
    require "pikachu.php";
    require 'weakness.php';
    require 'Energytype.php';
    require 'attack.php';
    require 'resistance.php';

    $lightningType = new Energytype("Lightning");
        $fireType = new Energytype("Fire");
        $waterType = new Energytype("Water");
        $fightingType = new Energytype("Fighting");

    $pikachu = new Pikachu("Pikachu", $lightningType->getEnergyTypeName(), 60, 60, [new Attack("Pika Punch", 20), new Attack("Electric Ring", 50)],
        new Weakness(1.5, $fireType->getEnergyTypeName()),
        new Resistance(20, $fightingType->getEnergyTypeName()));

  print_r($pikachu);
?>
