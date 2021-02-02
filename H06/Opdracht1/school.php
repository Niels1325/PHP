<?php

$host = "sql201.epizy.com";
$port = "3306";
$user = "epiz_27719643";
$pass = "2zqDNcAbOHOIKD9";
$db = "epiz_27719643_school";

try {
    $dbh = new PDO("mysql:host=" . $host . ";dbname=" . $db . ";port=" . $port, $user, $pass);
    foreach ($dbh->query('SELECT * from cursist') as $row) {
        print_r($row);
    }

} catch (PDOException $e) {
    print "Error!: " . $e->getMessage()."<br/>";
    die();
}