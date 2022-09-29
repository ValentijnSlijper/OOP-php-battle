<?php
    class EnergyType {

        private $name;
        private $energyTypeValue;


        public function __construct($name, $energyTypeValue) {
             $this->name = $name;
             $this->energyTypeValue = $energyTypeValue;
         }
         public function getName(){
           return $this->name;
         }
         public function getEneryTypeValue(){
           return $this->energyTypeValue;
         }
    }
