<?php
foreach ($_POST["monkeys"] as $m){
    echo "<img src='images/".$m.".jpg'>";
    echo "<br> <a href='../Opdracht3'>BACK</a>";
}