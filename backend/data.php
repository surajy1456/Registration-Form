<?php
session_start();

// print_r($_GET);
// var_dump($_SERVER);

// print_r($_POST);


// $name = $_POST["name"];
// $phone_number = $_POST["phone_number"];
// $email = $_POST["email"];
// $telegram_id = $_POST["telegram_id"];
// $facebook_id = $_POST["facebook_id"];

include 'connection.php';
if (isset($_POST)) {
    $name = $_POST["name"];
    $phone_number = $_POST["phone_number"];
    $email = $_POST["email"];
    $telegram_id = $_POST["telegram_id"];
    $facebook_id = $_POST["facebook_id"];

    $sql = "INSERT INTO `reg_user_data`(name,phone_number,email,telegram_id,facebook_id) VALUES('$name','$phone_number','$email',' $telegram_id','$facebook_id')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        
        $_SESSION['toastr_message'] = "Congratulations 🥳, You have been Registered 🎉🎉";
        $_SESSION['toastr_type'] = 'success';
        header("Location: ../index.php"); 
        exit();
    } else {
        $_SESSION['toastr_message'] = 'Something went Wrong 😢😣';
        $_SESSION['toastr_type'] = 'alert';
        header("Location: ../index.php?error=" . urlencode(mysqli_error($conn)));
        exit();
    }
}

// echo "<br> <h3>Name :-<b> ".$name."</b></h3>" ;
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
