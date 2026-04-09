<?php
session_start();
$error_message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require("logincheck.php"); 
}
    
?>
<html>
<head><title>夏令營登入頁面</title></head>
<body>
<center>
    <h1>登入</h1>

    <?php if ($error_message !== ""): ?>
        <p style="color:red; font-weight:bold;"><?php echo $error_message; ?></p>
    <?php endif; 
?>
    
    <form action="login.php" method="POST">
        帳號：<input type="text" name="uID" required></br></br>
        密碼：<input type="password" name="uPWD" required></br></br>
        <input type="submit" value="登入">
        <input type="reset" value="清除">
    </form>
</center>
</body>
</html>
