<?php

class RollerCoaster {
        private $db;

        public function __construct() {
            $this->db = new Database;
        }


        public function getCoasters() {
            $this->db->query("SELECT * FROM rollercoaster");

            $result = $this->db->resultSet();

            return $result;
        }
 }