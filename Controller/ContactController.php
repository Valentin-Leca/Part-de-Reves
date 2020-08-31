<?php

namespace Controller;

class ContactController {

    public function captchaAppointmentForm() {
        require('ReCaptcha/autoload.php');
        if (isset($_POST['submitAppointmentForm'])) {
            if(isset($_POST['g-recaptcha-response'])) {
                $recaptcha = new \ReCaptcha\ReCaptcha('6LdizaIZAAAAALd2OSffDx4QPr16_6g5jr8rOSU1');
                $resp = $recaptcha->verify($_POST['g-recaptcha-response']);
                if ($resp->isSuccess()) {

                    $name = $_POST['name'];
                    $mail = $_POST['mail'];
                    $phone = $_POST['phone'];
                    $date = $_POST['date'];
                    $headers[] = 'MIME-Version: 1.0';
                    $headers[] = 'Content-type: text/html; charset=utf-8';
                    $headers[]= "De : " . $mail;

                    $to = "valentin.val78@hotmail.fr";
                    $subject = "Demande de Rendez-Vous par " . $name;
                    $message = '
                    <html lang="fr">
                        <body>
                            <div align="center">
                                <p>Bonjour ! J\'aimerai prendre un rendez-vous ! :)</p><br />
                                <p>Nom : '. $name .'</p>
                                <p>Telephone : '. $phone .'</p>
                                <p>Mail : '. $mail .'</p>
                                <p>Date souhaite : '. $date .'</p>
                            </div>
                        </body>
                    </html>
                    ';

                    mail($to, $subject, $message, implode("\r\n", $headers));

                    $_SESSION['appointmentRequested'] = "Votre demande de rendez-vous en attente de confirmation à bien été envoyé avec succès !";
                    header('Location: index.php?contact');
                } else {
                    $_SESSION['appointmentError'] = "Captcha Invalide !";
                    header('Location: index.php?contact');
                }
            } else {
                $_SESSION['appointmentError'] = "Captcha Non rempli !";
                header('Location: index.php?contact');
            }
        }
    }

    public function captchaContactForm() {
        require('ReCaptcha/autoload.php');
        if (isset($_POST['submitContactForm'])) {
            if(isset($_POST['g-recaptcha-response'])) {
                $recaptcha = new \ReCaptcha\ReCaptcha('6LdizaIZAAAAALd2OSffDx4QPr16_6g5jr8rOSU1');
                $resp = $recaptcha->verify($_POST['g-recaptcha-response']);
                if ($resp->isSuccess()) {

                    $name = $_POST['name'];
                    $mail = $_POST['mail'];
                    $phone = $_POST['phone'];
                    $subject = $_POST['subject'];
                    $comment = $_POST['comment'];
                    $headers[] = 'MIME-Version: 1.0';
                    $headers[] = 'Content-type: text/html; charset=utf-8';
                    $headers[]= "De : " . $mail;

                    $to = "valentin.val78@hotmail.fr";
                    $subjectBis = "Nouveau Message de " . $name;
                    $message = '
                    <html lang="fr">
                        <body>
                            <div align="center">
                                <p>Bonjour ! Vous avez un nouveau message ! :)</p><br />
                                <p>Sujet : '. $subject .'</p>
                                <p>Nom : '. $name .'</p>
                                <p>Téléphone : '. $phone .'</p>
                                <p>Mail : '. $mail .'</p>
                                <p>Message : '. $comment .'</p>
                            </div>
                        </body>
                    </html>
                    ';

                    mail($to, $subjectBis, $message, implode("\r\n", $headers));

                    $_SESSION['contactRequested'] = "Votre message à bien été envoyé avec succès !";
                    header('Location: index.php?contact');
                } else {
                    $_SESSION['contactError'] = "Captcha Invalide !";
                    header('Location: index.php?contact');
                }
            } else {
                $_SESSION['contactError'] = "Captcha Non rempli !";
                header('Location: index.php?contact');
            }
        }
    }
}