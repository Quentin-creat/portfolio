<?php

if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
    $secret = '6LepOaQaAAAAAOC0htlugfDXoV5qz_l3vaxjTB_O';
    $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret . '&response=' . $_POST['g-recaptcha-response']);
    $responseData = json_decode($verifyResponse);
    if ($responseData->success) {
        header('Location:index.php?action=successMail#contact');
    } else {
        header('Location:index.php?action=errorMail#contact');
    }
}
else {
    header('Location:index.php?action=errorMail#contact');
}