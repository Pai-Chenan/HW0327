<?php
$fID = "user";
$fPWD = "0502";

if (isset($_POST["uID"]) && isset($_POST["uPWD"])) {
    $uID = $_POST["uID"];
    $uPWD = $_POST["uPWD"];

    if ($fID == $uID && $fPWD == $uPWD) {
        $_SESSION["login_status"] = "success";
        header("Location: form.php");
        exit();
    } else {
        $error_message = "登入失敗！帳號或密碼錯誤。";
    }
}
?>
