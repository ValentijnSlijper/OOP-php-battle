<?php
    class Attack {
        private $name;
        private $damage;

        public function __construct($attack, $damage) {
            $this->name = $attack;
            $this->damage = $damage;
        }

        public function getAttackName() {
            return $this->name;
        }

        public function getAttackDamage() {
            return $this->damage;
        }
    }
