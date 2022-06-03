<?php

    class Pikachu extends Pokemon {

        public function __construct($name, $energyType, $hitPoints, $attacks, $weakness, $resistance) {
             // $energyType = new EnergyType(EnergyType::LIGHTNING, EnergyType::LIGHTNING);
             // $hitPoints = 60;
             // $attacks = [new Attack('Electric Ring', 50), new Attack('Pika Punch', 20)];
             // $weakness = new Weakness(1.5, 'Fire');
             // $resistance = new Resistance(20, EnergyType::FIRE);
             parent:: __construct($name, $energyType, $hitPoints, $attacks, $weakness, $resistance);
        }
    }
?>
