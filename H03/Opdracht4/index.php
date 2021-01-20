<?php
?>

<!DOCTYPE html>
<html>
<head>
    <title>Monkey Pictures</title>
    <style>
        body{
            text-align: center;
        }
        .border2 {
            border: green 5px solid;
        }
        .border {
            border: red 5px solid;
        }
    </style>
</head>
<body>
<?php
for ($i = 1; $i <=10; $i++) {
    if ($i % 2) {
        $class = "class='border2'";
    }
    else {
        $class = "class='border'";
    }
    echo "<img ".$class." src='images/monkey".$i.".jpg'>";

}
?>

</body>
</html>