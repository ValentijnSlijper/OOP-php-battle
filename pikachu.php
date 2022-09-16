<?php

    class Pikachu extends Pokemon {

        public function __construct($name, $energyType, $hitPoints, $health, $attacks, $weakness, $resistance) {
             parent:: __construct($name, $energyType, $hitPoints, $health, $attacks, $weakness, $resistance);
        }
    }
?>
