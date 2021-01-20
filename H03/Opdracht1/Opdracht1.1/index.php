<?php
?>

<!DOCTYPE html>
<html>
<head>
    <title>For Loop</title>
</head>
<body>
<style>
    img {
        height: 300px;
        width: 300px;
    }
</style>
<?php
for ($i = 1; $i<=10; $i++){
    echo "<img src='../images/monkey".$i.".jpg'>";
}
?>
</body>
</html>