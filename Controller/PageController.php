<?php

namespace Controller;

use Model\{UserModel};

class PageController {

    public function getHomePage() {
        $dataPromotionsModel = new UserModel();
        $data = $dataPromotionsModel->getPromotionsListOnHomePage();
        require_once('View/home-page.php');
    }

    public function getContactPage() {
        require_once('View/contact.php');
    }

    public function getEngagementsPage() {
        require_once('View/engagements.php');
    }

    public function getCustomTravelPage() {
        require_once('View/custom-travel.php');
    }

    public function getProductsPartnersPage() {
        require_once('View/products-and-partners.php');
    }

    public function getWhereWhenPage() {
        require_once('View/where-and-when.php');
    }

    public function getRgpdPage() {
        require_once('View/rgpd.php');
    }

    public function getKnowMorePage() {
        require_once('View/know-more.php');
    }

    public function getLoginPage() {
        require_once('View/login-page.php');
    }

    public function getAdministrationPage() {
        require_once('View/administration.php');
    }
}