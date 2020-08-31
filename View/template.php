<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Site Part de Rêves par Lecavelier des Étangs Sandrine">
    <meta name="author" content="Lecavelier des Étangs Sandrine">

    <title>Part de Rêves</title>

    <!-- Bootstrap link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- Custom styles -->
    <script src="https://kit.fontawesome.com/ba3554ebfa.js" crossorigin="anonymous"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <link href="css/style.css" rel="stylesheet">
    <link rel="icon" href="img/favicon.ico"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@200;300;400&display=swap" rel="stylesheet">
</head>

<body class="body-background crossfade">
<figure class="slider"></figure>
<figure class="slider"></figure>
<figure class="slider"></figure>
<figure class="slider"></figure>
<figure class="slider"></figure>
<div class="container-fluid">

    <!-- Nav Bar Horizontal -->
    <div class="row">
        <nav class="navbar navbar-expand-lg navbar-dark bg-light justify-content-end" id="navBarHorizontal">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                Menu <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?home">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?engagements">Nos engagements</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?customTravel">Voyage à la carte</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?productsPartners">Nos produits & partenaires</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?whereWhen">Où et quand partir ?</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?contact">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <div class="row pl-0 pl-sm-5">
        <div class="col-xl-2 col-lg-3 col-md-4 offset-md-0 col-sm-8 offset-sm-2 col-8 offset-2
                    d-flex flex-column align-self-stretch text-center pl-4 pr-4"
             id="navBarVertical">
            <aside>
                <a href="index.php?home"><img class="img-fluid" src="img/logo-transparent.png" id="logo"
                                              alt="logo agence"/></a>
                <p class="quote">«Rêver, Découvrir, Partager»</p>
                <hr>
                <img src="img/selffie.jpg" id="selfie" alt="selfie" class="img-fluid"/>
                <a class="about" href="index.php?knowMore">En savoir plus</a>
                <hr>
                <p><span class="bold">Part de Rêves</span><br/> À voyage d'exception, un<br/> service
                    d'exception.</p>
                <hr>
                <p>L'agence Part de Rêves marque sa différence par sa production originale et pointue, sa réactivité
                    et son service personnalisé.<br/><br/>
                    <span class="bold">"Rêver"</span><br/> Venez découvrir le monde grâce à nos voyages.<br/><span
                            class="bold">"Découvrir"</span><br/>
                    Vivez une histoire particulière avec le monde.<br/><span class="bold">"Partager"</span><br/>Parce
                    que votre voyage se
                    doit de rester unique,
                    partagez vos souvenirs...</p>
                <hr>
                <p>Nous nous déplaçons sur RdV personnalisé :<br/>À domicile, sur votre lieu de travail, dans un espace
                    dédié
                    de l’hôtel Ibis Rueil-Malmaison bld de l’hôpital Stell et à l’hôtel Ibis de Saint Germain en Laye
                    rue
                    des Joueries ou à l’Alcove d'Orgeval.</p>
                <hr>
                <p>Nous répondons à chacune de vos demandes avec enthousiasme et professionnalisme.</p>
            </aside>
        </div>
        <div class="col-xl-10 col-lg-9 col-md-8">
            <?= $content ?>
        </div>
    </div>


    <!-- Footer -->
    <footer class="footer container-fluid" id="footer">
        <div class="row">
            <div class="col-12 col-sm-4 d-flex flex-column align-self-center">
                <iframe src="https://www.google.com/maps/d/embed?mid=1K9eM75Bi0l4WLhW8t0XG4eIZ4H6E6VV1" width="450"
                        height="250"></iframe>
            </div>
            <div class="col-12 col-sm-4">
                <ul class="social-network social-circle">
                    <li>
                        <a class="icoLinkedin"
                           href="https://www.linkedin.com/in/sandrine-agence-part-de-r%C3%AAves-441a669b/"
                           target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a>
                    </li>
                    <li>
                        <a class="icoFacebook" href="https://fr-fr.facebook.com/partderevesrueil/" target="_blank"
                           title="Facebook"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a class="icoInstagram" href="https://www.instagram.com/partdereves/?hl=fr" target="_blank"
                           title="Instagram"><i class="fa fa-instagram"></i></a>
                    </li>
                </ul>
                <p><span class="underline">Agence agréée Tourcom</span><br/>
                    Garantie financière : APST 15 Avenue Carnot 75017 Paris<br/>
                    Licence professionnelle n° 092 07 0007<br/>
                    Immatriculation : IM092100011<br/>
                    Assurance responsabilité professionnelle : HISCOX, 19 Rue Louis le Grand, 75002 Paris</p>
                <?php if (!isset($_SESSION['login'])) { ?>
                    <a href="index.php?login" class="adminPage"><span class="underline">Connexion Administrateur</span></a>
                <?php } else { ?>
                    <a href="index.php?logoutUser"><span class="underline">Déconnexion</span></a><br/>
                <?php } ?>
                <?php if (isset($_SESSION['login']) && ($_SESSION['id_admin'] == 1)) { ?>
                    <a href="index.php?administration"><span
                                class="underline">Administration</span></a>
                <?php } ?>
            </div>
            <div class="col-12 col-sm-4 d-flex flex-column align-self-center">
                <h3><span class="underline">Contact</span></h3>
                <p><i class="fas fa-envelope-open-text"></i> agence@partdereves.com</p>
                <p><i class="fas fa-phone"></i> 06.86.84.35.88</p>
                <p>Domiciliation : 1560, Route de Quarante Sous, 78 630 Orgeval</p>
            </div>
        </div>
    </footer>

    <div class="row text-center d-none cookie-rgpd" id="cookie-rgpd">
        <div class="col-8 offset-2">
            <p>Ce site utilise des cookies afin d’améliorer votre expérience et d'optimiser nos services.
                <a class="about-cookie" href="index.php?rgpdPage"><span class="underline">En savoir plus</span></a>
                <button class="btn btn-primary about" id="cookie-accept"><span class="accept-cookie underline">Accepter</span></button>
            </p>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://npmcdn.com/flatpickr/dist/l10n/fr.js"></script>
<script src="js/flatpickr.js"></script>
<script src="js/background.js"></script>
<script src="js/buttonSwitch.js"></script>
<script src="js/geoApi.js"></script>
<script src="js/captchaValidation.js"></script>
<script src="js/cookie.js"></script>
</body>
</html>