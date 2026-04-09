<?php
session_start();

// 假設的預設帳號密碼
$valid_user = "user";
$valid_password = "0502";

// 初始化訊息為空字串
$error_message = "";

// 只有當 Request Method 是 POST 時才進行驗證
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uID = $_POST["uID"] ?? '';
    $uPwd = $_POST["uPwd"] ?? '';

    if ($uID === $valid_user && $uPwd === $valid_password) {
        $_SESSION["login_status"] = "success";
        header("Location: form.php");
        exit();
    } else {
        // 只有驗證失敗才會給予提示文字
        $error_message = "登入失敗！帳號或密碼錯誤。";
    }
}
?>

<html>
<head><title>夏令營登入頁面
</title></head>
<body>
<center>
    <h1>登入</h1>
    <?php if ($error_message != "") echo "<p style='color:red;'>$error_message</p>"; ?>
    
    <form action="login.php" method="POST">
        帳號：<input type="text" name="uID" required><br><br>
        密碼：<input type="password" name="uPwd" required><br><br>
        <input type="submit" value="登入">
        <input type="reset" value="清除">
    </form>
</center>
</body>
</html>