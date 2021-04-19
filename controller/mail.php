<?php

if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
    $secret = '6LepOaQaAAAAAOC0htlugfDXoV5qz_l3vaxjTB_O';
    $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret . '&response=' . $_POST['g-recaptcha-response']);
    $responseData = json_decode($verifyResponse);
    if ($responseData->success) {
        //header('Location:index.php?action=successMail#contact');
        $nom = $_POST['name'];
        $message = $_POST['content'];
        $email = $_POST['email'];
        $sujet = $_POST['subject'];
        $telephone = $_POST['phone'];

        if (isset($nom) && isset($email) && isset($sujet) && isset($message)) {
            $to = 'oklaik@gmail.com';
            $header = "MIME-Version: 1.0\r\n";
            $header .= 'From: ' . $nom . '<' . $email . '>' . "\r\n";
            $header .= 'Content-Type:text/html; charset="uft-8"' . "\n";
            $header .= 'Content-Transfer-Encoding: 8bit';
            if (isset($telephone) && $telephone != '') {
                $message = getMessage($nom, $email, $message, $telephone);
            } else {
                $message = getMessage($nom, $email, $message, '');
            }
            if (mail($to, $sujet, $message, $header)) {
                header('Location:index.php?action=successMail#contact');
            } else {
                header('Location:index.php?action=errorMail#contact');
            }
        }
    } else {
        header('Location:index.php?action=errorMail#contact');
    }
} else {
    header('Location:index.php?action=errorMail#contact');
}

function getMessage(String $nom, String $email, String $contenu, $telephone) {
    if (isset($telephone) && $telephone != '') {
        return '<html><body>
        Bonjour, M. ou Mme : ' . $nom . ' vous a contacté récemment, voici son message : <br>' . $contenu . '. <br> Vous pouvez le/la re-contacter au numéro de téléphone suivant : ' . $telephone . ', ou à l\'adresse email : ' . $email . '
    </body></html>';
    }
    return '<html>
        Bonjour, M. ou Mme : ' . $nom . ' vous a contacté récemment, voici son message : <br>' . $contenu . '. <br> Vous pouvez le/la re-contacter à l\'adresse email : ' . $email . '
    </html>';
}
