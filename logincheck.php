<?php
session_start();
$fID = "user";
$fPWD = "0502";

if(isset($_POST["uID"]) && isset($_POST["uPWD"])){
    $uID = $_POST["uID"];
    $uPWD = $_POST["uPWD"];

    if($fID == $uID && $fPWD == $uPWD){
        $_SESSION["login_status"] = "success";
        header("Location: form.php");
        exit(); 
    } else {
        header("Location: login.php?error=1");
        exit();
    }
} else {
    header("Location: login.php");
    exit();
}
?>
