<html>
<head>
    <title>夏令營報名表</title>
</head>

<center>
    <h1>夏令營報名表</h1>
</center>

<body>
<form action="result.php" method="POST">
<h3>
姓名：<input type="text" placeholder="請輸入您的姓名" name='nName'></br>
聯絡電話：<input type="tel" name="mPhone"></br>
Email : <input type="email" name="mEmail"></br>
出生日期：<input type="date" name="mDate"></br>
身分證字號：<Input type="text" name="sID"></br>
性別：
男<input type="radio" name="mGender" value="m">
女<input type="radio" name="mGender" value="f" checked></br>
選擇梯次：<select name="nSession" multiple>
    <option value="">-- 請選擇梯次 --</option>
    <option value="第一梯次（5/01 - 5/05）">第一梯次：5/01 - 5/05</option>
    <option value="第二梯次（5/08 - 5/12）">第二梯次：5/08 - 5/12</option>
    <option value="第三梯次（5/15 - 5/19）">第三梯次：5/15 - 5/19</option>
    <option value="第四梯次（5/22 - 5/26）">第四梯次：5/22 - 5/26</option>
    <option value="第五梯次（5/29 - 6/01）">第五梯次：5/29 - 6/01</option>
</select></br>
飲食需求：
葷食<input type="radio" name="mDiet" value="meat" checked>
素食<input type="radio" name="mDiet" value="veg"></br>
緊急聯絡人：<input type="text" name="eName"></br>
緊急聯絡人電話：<input type="tel" name="ePhone"></br>
其他建議與備註：</br>
<textarea name="comment" rows="15" cols="75">
</textarea></br>
<input type="submit"><input type="reset">
</h3>

</form>
</body>
</html>