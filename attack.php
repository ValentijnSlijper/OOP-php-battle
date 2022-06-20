<?php
    class Attack {
        private $name;
        private $damage;

        public function __construct($attack, $damage) {
            $this->name = $attack;
            $this->damage = $damage;
        }

        public function getName() {
            return $this->name;
        }

        public function getDamage() {
            return $this->damage;
        }
    }
