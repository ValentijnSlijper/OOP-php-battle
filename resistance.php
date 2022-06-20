<?php
    class Resistance {
        private $resistanceValue;
        private $energyType;

        public function __construct($resistanceValue, $energyType) {
            $this->resistanceValue = $resistanceValue;
            $this->energyType = $energyType;
        }

        public function getResistanceValue() {
            return $this->resistanceValue;
        }

        public function getResistanceEnergytype() {
            return $this->energyType;
        }

    }
