<?php
    class Weakness {
        private $multiplier;
        private $energyType;

        public function __construct($multiplier, $energyType) {
            $this->multiplier = $multiplier;
            $this->energyType = $energyType;
        }

        public function getWeaknessMultiplier() {
            return $this->multiplier;
        }

        public function getWeaknessType() {
            return $this->energyType;
        }

    }
