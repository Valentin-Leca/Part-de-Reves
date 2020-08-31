<?php session_start();

// Automatic disconnect after 4 hours, reset after any action.
$time = time();
if (isset($_SESSION['timeOut']) && $time > $_SESSION['timeOut']) {
    session_destroy();
    unset($_SESSION['timeOut']);
    session_start();
}
$_SESSION['timeOut'] = $time + 14400;

require 'vendor/autoload.php';

use Controller\{PageController, ContactController, UserController};

$pageController = new PageController();
$contactController = new ContactController();
$userController = new UserController();

if (isset($_GET['home'])) {
    $pageController->getHomePage();
} elseif (isset($_GET['engagements'])) {
    $pageController->getEngagementsPage();
} elseif (isset($_GET['customTravel'])) {
    $pageController->getCustomTravelPage();
} elseif (isset($_GET['productsPartners'])) {
    $pageController->getProductsPartnersPage();
} elseif (isset($_GET['whereWhen'])) {
    $pageController->getWhereWhenPage();
} elseif (isset($_GET['rgpdPage'])) {
    $pageController->getRgpdPage();
} elseif (isset($_GET['contact'])) {
    $pageController->getContactPage();
} elseif (isset($_GET['knowMore'])) {
    $pageController->getKnowMorePage();
} elseif (isset($_GET['appointmentForm'])) {
    $contactController->captchaAppointmentForm();
} elseif (isset($_GET['contactForm'])) {
    $contactController->captchaContactForm();
} elseif (isset($_GET['login'])) {
    $pageController->getLoginPage();
} elseif (isset($_GET['loginUser'])) {
    $userController->connectUserAccount();
} elseif (isset($_GET['logoutUser'])) {
    $userController->disconnectUserAccount();
} if (isset($_SESSION['id_admin'])) {
    if ($_SESSION['id_admin'] == 1 ) {
        if (isset($_GET['administration'])) {
            $pageController->getAdministrationPage();
        } elseif (isset($_GET['promotionForm'])) {
            $userController->createPromotion();
        } elseif (isset($_GET['promotionList'])) {
            $userController->getPromotionsList();
        } elseif (isset($_GET['deletePromotion'])) {
            $userController->deletePromotion();
        } elseif (isset($_GET['getUpdatePromotionPage'])) {
            $userController->getUpdatePromotionPage();
        } elseif (isset($_GET['updatePromotion'])) {
            $userController->updatePromotion();
        }
    }
} else {
    $pageController->getHomePage();
}