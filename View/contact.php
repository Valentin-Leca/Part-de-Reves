<?php ob_start(); ?>
<div class="row contact-zone contact-text">
    <div class="col-xl-4 col-lg-5 col-md-10 offset-md-1 mt-5 mt-md-0 offset-xl-1 offset-lg-0">
        <header class="ccheader">
            <h2>Nos Horaires</h2>
        </header>
        <p class="schedule">Du Lundi au Samedi<br/>Sur RdV personnalisé</p>
        <!-- Appointment Form -->
        <header class="ccheader">
            <h2>Demande de RdV</h2>
        </header>
        <div class="wrapper">
            <form method="post" action="index.php?appointmentForm" class="ccform appointment">
                <div class="ccfield-prepend">
                    <label for="name"></label>
                    <span class="ccform-addon"><i class="fa fa-user fa-2x"></i></span>
                    <input class="ccformfield" type="text" minlength="1" maxlength="25" pattern="[a-zA-ZÀ-ÿ-\s]+"
                           placeholder="Nom" name="name" id="name" required>
                </div>
                <div class="ccfield-prepend">
                    <label for="email"></label>
                    <span class="ccform-addon"><i class="fas fa-envelope-open-text fa-2x"></i></span>
                    <input class="ccformfield" type="email" minlength="1" maxlength="50" placeholder="Mail" name="mail"
                           pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,8}$" id="email" required>
                </div>
                <div class="ccfield-prepend">
                    <label for="phone"></label>
                    <span class="ccform-addon"><i class="fa fa-mobile-phone fa-2x"></i></span>
                    <input class="ccformfield" type="text" id="phone" maxlength="20"
                           pattern="^(?:0|\(?\+33\)?\s?|0033\s?)[1-79](?:[\.\-\s]?\d\d){4}$"
                           placeholder="Téléphone" name="phone" required>
                </div>
                <div class="ccfield-prepend">
                    <label for="zipcode"></label>
                    <span class="ccform-addon"><i class="fas fa-house-user fa-2x"></i></span>
                    <input class="ccformfield" type="text" maxlength="5"
                           pattern="^[0-9]{5}$" placeholder="Code Postal (facultatif)" id="zipcode">
                </div>
                <div class="ccfield-error" id="error-message"></div>
                <div class="ccfield-prepend">
                    <label for="city"></label>
                    <span class="ccform-addon"><i class="fas fa-map-marked-alt fa-2x"></i></span>
                    <select class="ccformfield" id="city"></select>
                </div>
                <div class="ccfield-prepend">
                    <label for="flatpickr"></label>
                    <span class="ccform-addon"><i class="far fa-calendar-alt fa-2x"></i></span>
                    <input class="ccformfield" id="flatpickr" type="date" name="date" required>
                </div>
                <div class="g-recaptcha" id="captcha-one" data-sitekey="6LdizaIZAAAAACKcVBU8lQDFaUoayHbD8tDEy41v"></div>
                <br/>
                <div class="ccfield-prepend">
                    <input class="ccbtn" type="submit" value="Envoyer" name="submitAppointmentForm">
                </div>
                <div class="appointment-sent">
                    <p>
                        <?php if (isset($_SESSION['appointmentRequested'])) {
                            echo $_SESSION['appointmentRequested']; ?>
                        <?php }
                        unset($_SESSION['appointmentRequested']); ?>
                    </p>
                </div>
                <div class="appointment-error">
                    <p>
                        <?php if (isset($_SESSION['appointmentError'])) {
                            echo $_SESSION['appointmentError']; ?>
                        <?php }
                        unset($_SESSION['appointmentError']); ?>
                    </p>
                </div>
            </form>
        </div>
    </div>

    <!-- Contact Form -->

    <div class="col-xl-4 col-lg-5 col-md-10 offset-md-1 mt-5 mt-md-0 offset-lg-1">
        <header class="ccheader">
            <h1 class="mb-5">Nous contacter</h1>
        </header>
        <div class="wrapper">
            <form method="post" action="index.php?contactForm" class="ccform">
                <div class="ccfield-prepend">
                    <label for="nameBis"></label>
                    <span class="ccform-addon"><i class="fa fa-user fa-2x"></i></span>
                    <input class="ccformfield" type="text" minlength="1" maxlength="25" pattern="[a-zA-ZÀ-ÿ-\s]+"
                           placeholder="Nom" name="name" id="nameBis" required>
                </div>
                <div class="ccfield-prepend">
                    <label for="emailBis"></label>
                    <span class="ccform-addon"><i class="fas fa-envelope-open-text fa-2x"></i></span>
                    <input class="ccformfield" type="email" minlength="1" maxlength="50" placeholder="Mail" name="mail"
                           pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,8}$" id="emailBis" required>
                </div>
                <div class="ccfield-prepend">
                    <label for="phoneBis"></label>
                    <span class="ccform-addon"><i class="fa fa-mobile-phone fa-2x"></i></span>
                    <input class="ccformfield" type="text" id="phoneBis" maxlength="20"
                           pattern="^(?:0|\(?\+33\)?\s?|0033\s?)[1-79](?:[\.\-\s]?\d\d){4}$"
                           placeholder="Téléphone (facultatif)" name="phone">
                </div>
                <div class="ccfield-prepend">
                    <label for="subject"></label>
                    <span class="ccform-addon"><i class="fa fa-info fa-2x"></i></span>
                    <input class="ccformfield" type="text" minlength="1" maxlength="50" pattern="[a-zA-ZÀ-ÿ-0-9-]+"
                           placeholder="Sujet" name="subject" id="subject" required>
                </div>
                <div class="ccfield-prepend">
                    <label for="message"></label>
                    <span class="ccform-addon"><i class="fa fa-comment fa-2x"></i></span>
                    <textarea class="ccformfield message-field" rows="7" minlength="1" maxlength="1000" placeholder="Message"
                              name="comment" id="message" required></textarea>
                </div>
                <div class="g-recaptcha" data-sitekey="6LdizaIZAAAAACKcVBU8lQDFaUoayHbD8tDEy41v"></div>
                <br/>
                <div class="ccfield-prepend">
                    <input class="ccbtn" type="submit" value="Envoyer" name="submitContactForm">
                </div>
                <div class="message-sent">
                    <p>
                        <?php if (isset($_SESSION['contactRequested'])) {
                            echo $_SESSION['contactRequested']; ?>
                        <?php }
                        unset($_SESSION['contactRequested']); ?>

                    </p>
                </div>
                <div class="message-error">
                    <p>
                        <?php if (isset($_SESSION['contactError'])) {
                            echo $_SESSION['contactError']; ?>
                        <?php }
                        unset($_SESSION['contactError']); ?>
                    </p>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $content = ob_get_clean(); ?>
<?php require_once('template.php'); ?>

