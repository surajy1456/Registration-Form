<?php

// print_r($_GET);
// var_dump($_SERVER);

// print_r($_POST);

@include "connection.php";

$name = $_POST["name"];
$phone_number = $_POST["phone_number"];
$email = $_POST["email"];
$telegram_id = $_POST["telegram_id"];
$facebook_id = $_POST["facebook_id"];

echo "<br> <h3>Name :-<b> ".$name."</b></h3>" ;
// $i=1;

// foreach ($_POST as $suraj => $yadav) {
//     echo "key:- ".$suraj."  value:-".$yadav."<br>";
//     ${$surajs . $i} = $yadav;
//     echo $surajs.$i;
//     $i++;
// }

// $var = "dtfgfgfgfgd"+"iuhihujh";

// $i = 1;

// foreach ($_POST as $suraj => $yadav) {
//     echo "key: " . $suraj . "  value: " . $yadav . "<br>";
//     ${$suraj . $i} = $yadav;
//     echo $suraj . $i . "<br>"; 
//     echo "Dynamic var (" . $suraj . $i . ") value: " . ${$suraj . $i} . "<br>";
//     $i++;
// }

// for ($i=0; $i <= 11; $i++) { 
//     # code...
//     echo $i;
// }


?>