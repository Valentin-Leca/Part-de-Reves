<?php

namespace Controller;

use Model\{UserModel};

class UserController {

    public function connectUserAccount()
    {
        $dataLoginAdmin = new UserModel();
        $data = $dataLoginAdmin->connectAccount($_GET['login']);

        $goodPassword = password_verify($_POST['password'], $data['password']);

        if (!$data) {
            $_SESSION['errorAtConnection'] = "Mauvais identifiant ou mot de passe !";
            header('Location: index.php?login');
        } else {
            if ($goodPassword) {
                session_start();
                $_SESSION['login'] = $data['login'];
                $_SESSION['id_admin'] = $data['id_admin'];
                header('Location: index.php?administration');
            } else {
                $_SESSION['errorAtConnection'] = "Mauvais identifiant ou mot de passe !";
                header('Location: index.php?login');
            }
        }
    }

    public function disconnectUserAccount()
    {
        $_SESSION = array();
        session_destroy();
        unset($_SESSION['timeOut']);
        header('Location: index.php?home');
    }

    public function createPromotion(){
        if (isset($_POST['submit']) && !empty($_POST['submit'])) {

            $fileName = $_FILES['file']['name'];
            $fileTmpName = $_FILES['file']['tmp_name'];
            $fileSize = $_FILES['file']['size'];
            $fileError = $_FILES['file']['error'];

            $fileExt = explode('.', $fileName);
            $fileActualExt = strtolower(end($fileExt));

            $allowed = array('jpeg', 'jpg', 'gif', 'png');

            date_parse($_POST['date']);

            $year = date_parse($_POST['date'])[year];
            $month = "0" . date_parse($_POST['date'])[month];
            $day = date_parse($_POST['date'])[day];
            $hour = date_parse($_POST['date'])[hour];
            $minutes = date_parse($_POST['date'])[minute];
            $seconds = date_parse($_POST['date'])[second];

            $dateInEnglish = $year."-".$month."-".$day. " ".$hour.":".$minutes."0".":".$seconds."0";

            if (in_array($fileActualExt, $allowed)) {
                if ($fileError === 0) {
                    if ($fileSize <= 2097152) {
                        $fileNameNew = uniqid('', true) . "." . $fileActualExt;
                        $fileDestination = 'imgPromo/'.$fileNameNew;
                        move_uploaded_file($fileTmpName, $fileDestination);
                        $dataCreatePromotion = new UserModel();
                        $data = $dataCreatePromotion->dataCreatePromotion($_POST['title'], $_POST['description'], $fileNameNew, $dateInEnglish);
                        $_SESSION['createPromotionSucces'] = "Votre Promotion a été créé avec succès. Elle sera maintenant affichée en page d'accueil !";
                        header('Location: index.php?administration');
                    } else {
                        echo 'Le fichier est trop volumineux !';
                    }
                } else {
                    echo 'Il y a une erreur.';
                }
            } else {
                echo 'Erreur de type de fichier.';
            }
        }
    }

    public function getPromotionsList() {
        $pageNumber = new UserModel();
        $totalPromotions = $pageNumber->getTotalPageFromPromotionsList();
        $currentPage = (int)($_GET['page'] ?? 1) ?: 1;
        $perPage = 3;
        $totalPages = ceil($totalPromotions / $perPage);
        $offset = $perPage * ($currentPage - 1);

        if ($currentPage > $totalPages || $currentPage <= 0) {
            header('Location: index.php?promotionList');
        }

        $dataPromotionsModel = new UserModel();
        $data = $dataPromotionsModel->getPromotionsList($perPage, $offset);
        require_once('View/promotions-list.php');
    }

    public function deletePromotion() {
        $dataPromotionsModel = new UserModel();
        $data = $dataPromotionsModel->deletePromotion($_GET['id']);
        $_SESSION['PromotionIsDelete'] = "Votre promotion a été supprimé. Elle n'est maintenant plus visible.";
        header('Location: index.php?administration');
    }

    public function getUpdatePromotionPage() {
        $dataPromotionsModel = new UserModel();
        $data = $dataPromotionsModel->getUpdatePromotion();
        require_once('View/promotions-edit.php');
    }

    public function updatePromotion() {
        if (isset($_POST['submitUpdate']) && !empty($_POST['submitUpdate'])) {

            $fileName = $_FILES['file']['name'];
            $fileTmpName = $_FILES['file']['tmp_name'];
            $fileSize = $_FILES['file']['size'];
            $fileError = $_FILES['file']['error'];

            $fileExt = explode('.', $fileName);
            $fileActualExt = strtolower(end($fileExt));

            $allowed = array('jpeg', 'jpg', 'gif', 'png');

            date_parse($_POST['date']);

            $year = date_parse($_POST['date'])[year];
            $month = "0" . date_parse($_POST['date'])[month];
            $day = date_parse($_POST['date'])[day];
            $hour = date_parse($_POST['date'])[hour];
            $minutes = date_parse($_POST['date'])[minute];
            $seconds = date_parse($_POST['date'])[second];

            $dateInEnglish = $year."-".$month."-".$day. " ".$hour.":".$minutes."0".":".$seconds."0";

            if (in_array($fileActualExt, $allowed)) {
                if ($fileError === 0) {
                    if ($fileSize <= 2097152) {
                        $fileNameNew = uniqid('', true) . "." . $fileActualExt;
                        $fileDestination = 'imgPromo/'.$fileNameNew;
                        move_uploaded_file($fileTmpName, $fileDestination);
                        $dataCreatePromotion = new UserModel();
                        $data = $dataCreatePromotion->updatePromotion($_POST['title'], $_POST['description'], $fileNameNew, $dateInEnglish, $_GET['id']);
                        $_SESSION['PromotionIsUpdate'] = "Votre promotion a bien été modifié.";
                        header('Location: index.php?administration');
                    } else {
                        echo 'Le fichier est trop volumineux !';
                    }
                } else {
                    echo 'Il y a une erreur.';
                }
            } else {
                echo 'Erreur de type de fichier.';
            }
        }
    }
}