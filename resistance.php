<?php
    class Resistance {
        private $resistanceMultiplier;
        private $energyType;

        public function __construct($resistanceMultiplier, $energyType) {
            $this->resistanceMultiplier = $resistanceMultiplier;
            $this->energyType = $energyType;
        }

        public function getResistanceMultiplier() {
            return $this->resistanceMultiplier;
        }

        public function getResistanceType() {
            return $this->energyType;
        }

    }
