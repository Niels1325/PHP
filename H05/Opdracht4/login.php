<?php
$mailpiet = "piet@worldonline.nl";
$passpiet = "doetje123";

$mailklaas = "klaas@carpets.nl";
$passklaas = "snoepje777";

$mailtruus = "truushendriks@wegweg.nl";
$passtruus = "arkiearkie201";

$mail = $_POST["mail"];
$password = $_POST["wachtwoord"];

if ($mail == $mailklaas and $password == $passklaas or $mail == $mailpiet and $password == $passpiet or $mail == $mailtruus and $password == $passtruus) {
    echo "Welkom, u bent binnen! Doe alsof u thuis bent.";
}

else {
    echo "Sorry, geen toegang!";
}

function loginchecker() {
    if(isset($_POST[''])){
        $loggedIn = true;
    } else {
        $loggedIn = false;
    }
    return $loggedIn;
}
loginchecker();