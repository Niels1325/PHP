<?php

$mailpiet = "piet@worldonline.nl";
$passpiet = "doetje123";

$mailklaas = "klaas@carpets.nl";
$passklaas = "snoepje777";

$mailtruus = "truushendriks@wegweg.nl";
$passtruus = "arkiearkie201";

$host = "sql201.epizy.com";
$port = "3306";
$user = "epiz_27719643";
$pass = "2zqDNcAbOHOIKD9";
$db = "epiz_27719643_school";

$email = $_POST["mail"];
$password = $_POST["wachtwoord"];

$dbh = new PDO("mysql:host=" . $host . ";dbname=" . $db . ";port=" . $port, $user, $pass);

$query = "SELECT * FROM gebruikers WHERE Email = :Email AND Wachtwoord = :Wachtwoord";
$statement = $dbh->prepare($query);
$statement->execute(
    array(
        'Email' => $email, 'Wachtwoord' => $password
    )
);
$count = $statement->rowCount();
if ($count > 0 or $email == $mailklaas and $password == $passklaas or $email == $mailpiet and $password == $passpiet or $email == $mailtruus and $password == $passtruus) {
    echo "Welkom!";
}
else {
    echo "Sorry, geen toegang!";
}