<?php

namespace Model;

use Model\{BddModel};

class UserModel extends BddModel {

    public function connectAccount($login) {
        $db = $this->connectBdd();
        $req = $db->prepare('SELECT * FROM user WHERE login = :login');
        $req->execute(array('login' => $_POST['login']));
        $data = $req->fetch();
        return $data;
    }

    public function dataCreatePromotion($title, $description, $file, $dateEng) {
        $db = $this->connectBdd();
        $req = $db->prepare('INSERT INTO promotion(title, description, file, date_end) VALUES(?, ?, ?, ?)');
        $req->execute(array($title, $description, $file, $dateEng));
    }

    public function getTotalPageFromPromotionsList() {
        $db = $this->connectBdd();
        return (int)$db->query('SELECT COUNT(id) FROM promotion')->fetch($db::FETCH_NUM)[0];
    }

    public function getPromotionsList($perPage, $offset) {
        $db = $this->connectBdd();
        $req = $db->prepare("SELECT * FROM promotion ORDER BY date_end LIMIT $offset, $perPage");
        $req->execute(array());
        return $req;
    }

    public function getPromotionsListOnHomePage() {
        $db = $this->connectBdd();
        $req = $db->prepare('SELECT * FROM promotion ORDER BY date_end');
        $req->execute(array());
        return $req;
    }

    public function deletePromotion($id) {
        $db = $this->connectBdd();
        $req = $db->prepare('DELETE FROM promotion WHERE id = ?');
        $req->execute(array($id));
    }

    public function getUpdatePromotion() {
        $db = $this->connectBdd();
        $req = $db->prepare('SELECT id, title, description, file, date_end FROM promotion WHERE id = ?');
        $req->execute(array($_GET['id']));
        return $req;
    }

    public function updatePromotion($title, $description, $file, $date, $id) {
        $db = $this->connectBdd();
        $req = $db->prepare('UPDATE promotion SET title = ?, description = ?, file = ?, date_end = ? WHERE id = ?');
        $req->execute(array($title, $description, $file, $date, $id));
    }
}