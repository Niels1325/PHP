<?php
?>

<!DOCTYPE html>
<html>
<head>
    <title>Kerstboom</title>
</head>
<body>
<style>
    body {
        text-align: center;
    }
</style>
<?php
    for($i = 0; $i <=40; $i++) {
        for($j = 0; $j<$i; $j++) {
            echo "*";
        }
        echo "*<br>";
    }
?>
</body>
</html>