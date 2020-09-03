<?php

// require file lain
require('animal.php');
require('Frog.php');
require('Ape.php');

// Release 0
$sheep = new Animal("shaun");
echo $sheep->name . "<br>"; // "shaun"
echo $sheep->legs . "<br>"; // 2
echo $sheep->cold_blooded . "<br><br>"; // false

// Release 1
$sungokong = new Ape("kera sakti");
echo $sungokong->name . "<br>"; // "kera sakti"
echo $sungokong->legs . "<br>"; // 2
$sungokong->yell(); // "Auooo"
echo "<br>";

$kodok = new Frog("buduk");
echo $kodok->name . "<br>"; // "buduk"
echo $kodok->legs . "<br>"; // 4
$kodok->jump(); // "hop hop"
