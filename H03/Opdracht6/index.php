
<?php
?>

<!DOCTYPE html>
<html>
<head>
    <title>Zwemclubs</title>
    <style>
        body {
            font-size: 30px;
        }
        img{
            top: 40px;
            height: 50px;
            width: 50px;
        }
    </style>
</head>
<body>
<?php
$spartelleden = 25;
$waterleden = 32;
$plonsleden = 11;
$bommetjeleden = 23;
$zwemclubs = array("De spartelkuikens: ".$spartelleden,"<br><br> De waterbuffels: ".$waterleden, "<br> <br> Plonsmderin: ".$plonsleden, "<br><br>Bommetje: ".$bommetjeleden);

echo  "$zwemclubs[0]";
for ($i =5; $i <= $spartelleden; $i+= 5) {
    echo "<img src='images/swim.png'>";
}
echo  "$zwemclubs[1]";
for ($i =5; $i <= $waterleden; $i+= 5) {
    echo "<img src='images/swim.png'>";
}
echo  "$zwemclubs[2]";
for ($i =5; $i <= $plonsleden; $i+= 5) {
    echo "<img src='images/swim.png'>";
}
echo  "$zwemclubs[3]";
for ($i =5; $i <= $bommetjeleden; $i+= 5) {
    echo "<img src='images/swim.png'>";
}

?>

</body>
</html>