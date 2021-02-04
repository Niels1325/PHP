<?php
session_start();

if (isset($_SESSION["username"])) {
    if ($_SESSION["username"] == "admin" ) {
        echo "<h1>U bent een administrator, gefeliciteerd ".$_SESSION["username"]."</h1>";
    }
    else if ($_SESSION["username"] == "NeLLo") {
        echo "<h1>U bent een administrator, gefeliciteerd ".$_SESSION["username"]."</h1>";
    }
    else {
        echo "<h1>Sorry maar u heeft toegang tot deze pagina! " . $_SESSION["username"] . "</h1>";
    }
}
else {
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Site</title>
</head>
<body>
<p><a href="index.php">Ga terug</a></p>
<p><a href="logout.php">Logout</a></p>
</body>
</html>