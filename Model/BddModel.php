<?php

namespace Model;

class BddModel {

    protected function connectBdd() {
        try {
            $db = new \PDO('mysql:host=localhost;dbname=part_de_reves;charset=utf8', 'root', '');
            return $db;
        } catch (\Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }
}