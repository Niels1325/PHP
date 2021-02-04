<?php
session_start();

$host = "sql201.epizy.com";
$port = "3306";
$user = "epiz_27719643";
$pass = "2zqDNcAbOHOIKD9";
$db = "epiz_27719643_school";
$message = "";

try {
    $dbh = new PDO("mysql:host=" . $host . ";dbname=" . $db . ";port=" . $port, $user, $pass);
    $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


    if (isset($_POST["knop"])) {
        $password = $_POST["password"];

        // salt en password hash
        $salt = "@!--778gh#00!jjs";
        $passwordWithSalt = $password . $salt;
        $hash = hash("sha256", $passwordWithSalt);


        $query = "SELECT * FROM gebruikers WHERE username = :username AND password = :password";
        $statement = $dbh->prepare($query);
        $statement->execute(
            array(
                'username' => $_POST["username"], 'password' => $hash
            )
        );
        $count = $statement->rowCount();

        if ($count > 0) {
            $_SESSION["username"] = $_POST["username"];
            header("location:index.php");
        }
        else {
            $message = "<label>Username of wachtwoord is verkeerd!</label>";
        }
    }
}

catch(PDOException $error) {
    $error = "Database kan niet verbinden";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
        * {
            box-sizing: border-box;
            margin: 2;
            padding: 0;
        }

        body {
            font-family: "Roboto Light", sans-serif;
            background: #202020;
            color: white;
            font-weight: bold;
        }

        .btn {
            background: red;
            color: black;
            padding: 10px;
            border-radius: 15px;
            border: none;
            transition: 0.3s ease-in-out;
            outline: none;
            width: 100px;
        }

        .btn:hover {
            background: black;
            color: red;
            cursor: pointer;
            outline: none;
        }

        .input {
            position: absolute;
            left: 150px;
        }
    </style>
</head>
<body>
<?php
if (isset($message)) {
    echo $message;
}
?>
<h1>Login</h1>
<a><br> <br></a>
<form method="post">
    <br><br>
    Gebruikersnaam <input class="input" type="text" id="username" name="username" value="" required>
    <br> <br>
    Wachtwoord <input class="input" type="password" id="password" name="password" value="" required>
    <br> <br>
    <input type="submit" class="btn knop" name="knop" value="Send">
</form>
</body>
</html>