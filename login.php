<html>
<head><title>夏令營登入頁面</title></head>
<body>
<center>
    <h1>登入</h1>

    <?php 
    if (isset($_GET["error"]) && $_GET["error"] == 1) {
        echo "<p style='color:red; font-weight:bold;'>登入失敗！帳號或密碼錯誤。</p>";
    }
    ?>
    
    <form action="logincheck.php" method="POST">
        帳號：<input type="text" name="uID" required></br>
        密碼：<input type="password" name="uPWD" required></br>
        <input type="submit" value="登入">
        <input type="reset" value="清除">
    </form>
</center>
</body>
</html>
