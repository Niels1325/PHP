<?php
include_once("programma.php");
include_once("liedjes.php");

$ditprogramma = new programma();
$ditprogramma->setname("Mijn eerste programma");
$ditprogramma->setomschrijving("Laten we het testen");

foreach ($ditprogramma->getprogramma() as $p) {
    echo $p."<br>";
}

$nieuwliedje = new liedjes("88Salv ", " EWL");

$ditprogramma->voegliedjetoe($nieuwliedje);

foreach ($ditprogramma->getliedjes() as $liedjes) {
    echo $liedjes->gettitel()." -".$liedjes->getArtiest()."<br>";
}